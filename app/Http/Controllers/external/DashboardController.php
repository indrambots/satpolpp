<?php

namespace App\Http\Controllers\external;

use Validator,File,Str,Auth;
use App\Inovasi;
use App\Category;
use Carbon\Carbon;
use App\FileBobot;
use App\MasterBentuk;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class DashboardController extends Controller{
    public $defaultfileloc = 'app/public/filependukungexternal/';
    public function index(){
        $bentuk = MasterBentuk::all();
        $category = Category::all();
        $jumlahInovasi = Inovasi::whereUserId(Auth::id())->whereTahun(date("Y"))->count();
        $jumlahSubmit = Inovasi::whereUserId(Auth::id())->whereTahun(date("Y"))->whereSubmit(true)->count();
        return view("pages.external.home",compact('bentuk','category','jumlahInovasi','jumlahSubmit'));
    }
    function store(Request $req){
        $validator = Validator::make($req->all(), Inovasi::createUpdateInovasiExternal($req->level,$req->status) ,[],Inovasi::NICENAME);
        if ($validator->fails()) {
            return response(['message'=>'Mohon Koreksi Kembali Inputan anda', 'errors'=> $validator->errors()], 422);
        }else{
            if($req->level=="1"){
                return response(['message'=>'data sudah benar'], 200);
            }else{
                $inovasi = Inovasi::create(collect($req->all())->only(
                                collect(Inovasi::NICENAME)->except([
                                    'poster',
                                    'ppt',
                                    'suratPernyataan'
                                ])->keys()->toArray()
                            )->merge([
                                'user_id'=> Auth::id(),
                                'tahun'=>date("Y")
                            ])->toArray());
                foreach ([
                    'poster',
                    'ppt',
                    'suratPernyataan'
                ] as $value) {
                    $upload = $this->_uploadFile($req,'public/filependukungexternal',$value);
                    $fileNameToStore = $upload['file_name_store'];
                    $fileUpload = storage_path('app/public/filependukungexternal/'.$fileNameToStore);
                    FileBobot::create([
                        'nama'=>$value,
                        'bobot_inovasi_id'=>$inovasi->id,
                        'file_loc'=>$this->defaultfileloc.$fileNameToStore,
                        'file_name'=> $fileNameToStore
                    ]);
                }
                return response(['message'=>'Data berhasil disimpan', 'jumlahinovasi' => Inovasi::whereUserId(Auth::id())->count()  ], 200);
            }
        }
    }
    public function _uploadFile($request, $dir,$name="file")
    {
        $fileMimeType = $request->file($name)->getClientMimeType();
        // Ambil nama file dan ext
        $filenameWithExt = $request->file($name)->getClientOriginalName();
        // Ambil nama file
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Ambil ext
        $extension = $request->file($name)->getClientOriginalExtension();
        // Filename untuk di kirim
        $fileNameToStore = Carbon::now()->format('YmdHisu') .'.'.$extension;
        // Upload pdf
        $dirBulanTahun = date('Ym');
        $path = storage_path('app/'.$dir.'/'.$dirBulanTahun);
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }
        $path = $request->file($name)->storeAs($dir.'/'.$dirBulanTahun,$fileNameToStore);
        $data['ext'] = $extension;
        $data['filename'] = $filename;
        $data['file_name_store'] = $dirBulanTahun.'/'.$fileNameToStore;
        $data['path'] = $path;
        $data['mime_type'] = $fileMimeType;
        return $data;
    }
    public function datatables(){
        $inovasi = Inovasi::whereUserId(Auth::id())->whereTahun(date("Y"))->get();
        return Datatables::of($inovasi)
        ->addColumn('aksi',function($i){
            $param = '<div class="btn-group" role="group" aria-label="Basic example">';
            if (Inovasi::whereUserId(Auth::id())->whereTahun(date("Y"))->whereSubmit(true)->count() ==0) {
                $param = $param .'<button type="button" x-data class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-dark" @click="$store.proposal.toggleModal('."'update',".$i->id.',1)">
                <i class="flaticon-edit-1" ></i> </button>';
                $param = $param .'<button type="button" x-data class="btn btn-sm btn-icon btn-bg-light btn-icon-info btn-hover-dark" @click="$store.proposal.toggleModal('."'update',".$i->id.',2)">
                <i class="flaticon-upload" ></i> </button>';
            }
            $param = $param.'</div>';
            return $param;
        })->rawColumns(['aksi'])->make(true);
    }
    public function submitproposal(Request $req){
        Inovasi::whereUserId(Auth::id())->whereTahun(date("Y"))->update([
            'submit'=> true
        ]);
        return response(['message'=>'data berhasi diubah', 'jumlah'=> Inovasi::whereUserId(Auth::id())->whereTahun(date("Y"))->whereSubmit(true)->count() ], 200);
    }
    public function edit(Request $req, $id){
        $inovasi = Inovasi::find($id)->only(
            $req->level ==1?
            collect(Inovasi::NICENAME)->except([
                'poster',
                'ppt',
                'suratPernyataan'
            ])->keys()->toArray():
            collect(Inovasi::NICENAME)->only([
                'poster',
                'ppt',
                'suratPernyataan'
            ])->keys()->toArray()
        );
        return response(['message'=>'data berhasi diubah', 'inovasi'=> $inovasi ], 200);
    }
    public function update(Request $req, $id){
        $validator = Validator::make($req->all(), Inovasi::createUpdateInovasiExternal($req->level,$req->status, ($req->level==1?'': $req->namafile) ,$id) ,[],Inovasi::NICENAME);
        if ($validator->fails()) {
            return response(['message'=>'Mohon Koreksi Kembali Inputan anda', 'errors'=> $validator->errors()], 422);
        }else{
            if ($req->level ==1) {
                Inovasi::find($id)->update(collect($req->all())->only(
                    collect(Inovasi::NICENAME)->except([
                        'poster',
                        'ppt',
                        'suratPernyataan'
                    ])->keys()->toArray()
                )->toArray());
                return response(['message'=>'data berhasi diubah',  ], 200);
            }
            else{
                return response(['message'=>'File berhasil disimpan'], 200);
            }
        }
    }
    public function ubahFilePendukung(Request $req, $id){
        $validator = Validator::make($req->all(), Inovasi::createUpdateInovasiExternal($req->level,$req->status, ($req->level==1?'': $req->namafile) ,$id) ,[],Inovasi::NICENAME);
        if ($validator->fails()) {
            return response(['message'=>'Mohon Koreksi Kembali Inputan anda', 'errors'=> $validator->errors()], 422);
        }else{
            if (FileBobot::whereBobotInovasiId($id)->whereNama($req['namafile'])->whereNotNull('file_loc')->count()>0){
                unlink(storage_path(FileBobot::whereBobotInovasiId($id)->whereNama($req['namafile'])->first()->file_loc));
            }
            $upload = $this->_uploadFile($req,'public/filependukungexternal',$req['namafile']);
            $fileNameToStore = $upload['file_name_store'];
            $fileUpload = storage_path('app/public/filependukung/'.$fileNameToStore);
            FileBobot::whereBobotInovasiId($id)->whereNama($req['namafile'])->first()->update([
                'file_loc'=>$this->defaultfileloc.$fileNameToStore
            ]);
            return response(['message'=>'File '.collect(Inovasi::NICENAME)->first(function ($value, $key) use($req) {
                return $key == $req->namafile;
            }).' berhasil diubah'  ], 200);
        }
    }
    public function downloadFile(Request $req,$id){
        $inovasi = FileBobot::whereBobotInovasiId($id)->whereNama($req['namafile'])->first();
        return response()->download(storage_path($inovasi->file_loc));
    }
}

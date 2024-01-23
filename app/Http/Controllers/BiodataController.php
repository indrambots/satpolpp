<?php

namespace App\Http\Controllers;

use Validator,File,Str,Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Biodata;
use Carbon\Carbon;

class BiodataController extends Controller
{
    public $defaultfileloc = 'app/uploads/profile/';
    public function __construct(){
        $this->middleware('auth');
    }

    public function update(Request $request){
        $biodata = Auth::user()->biodata()->updateOrCreate([
            'user_id'=>Auth::id()
        ],
            collect($request->all())->only(
                collect(Biodata::NICENAME)->except([
                    'foto_profile',
                ])->keys()->toArray()
            )->map(function ($item, $key){
                if ($key=='tgl_lahir') {
                    return date("Y-m-d", strtotime($item));
                }else{
                    return $item;
                }
            })->toArray()
        );
        if($request->file('foto_profile') !== null){
            if (Biodata::find($biodata->id)->foto_profile!=null){
                unlink(storage_path($this->defaultfileloc.Biodata::find($biodata->id)->foto_profile));
            }
            $anggaran_extension = $request->foto_profile->getClientOriginalExtension();
            $filename_profile = 'foto_profile_'.$biodata->id.'_'.time().'.'.$anggaran_extension;
            $request->foto_profile->storeAs('uploads/profile',$filename_profile);
            Biodata::where('id',$biodata->id)->update([
                'foto_profile' => $filename_profile
            ]);
        }
        return response(['message'=> $request->status=='create'?'Biodata berhasil disimpan':'Biodata berhasil diubah '], 200);
    }
    public function checkNik(Request $request){
        $nik = $request->nik;
        $validator = Validator::make($request->all(),
                                        Biodata::createUpdate($request->level,$request->status, ($request->level==1?'': $request->namafile),
                                        Auth::id()) ,[],Biodata::NICENAME);
        $response = null;
        if ($validator->fails()) {
            return response(['message'=>'Mohon Koreksi Kembali Inputan anda', 'errors'=> $validator->errors()], 422);
        }else{
            $client = new Client(['headers' => ['Accept' => 'application/json', 'content-type' => 'application/json',]]); //GuzzleHttp\Client
            $response = $client->request('POST',env("URL_EPLANNING"),['body' => json_encode(['nik'=>$nik])]);
            $response = json_decode($response->getBody()->getContents(),true);
        }
        if ($response == null) {
            return response(['message'=>'gagal Server Error', 'errors'=>[
                'nik'=> 'Mohon Tunggu beberapa saat lagi terjadi kesalahan pada server dinas kependudukan'
            ]], 400);
        }elseif($response['result']['response']['status']==1){
            return response(['message'=>'Nik Tidak Ditemukan', 'errors'=>[
                'nik'=> 'Nik tidak terdaftar pada Dinas Kependudukan Kota Surabaya mohon hubungi dinas terkait.'
            ]], 400);
        }else if ($response['result']['response']['details'][0]['pekerjaan'] =='PEGAWAI NEGERI SIPIL (PNS)') {
            return response(['message'=>'Nik dilarang untuk mendaftar', 'errors'=>[
                'nik'=> 'Nik anda terdaftar sebagai PEGAWAI NEGERI SIPIL (PNS).'
            ]], 400);
        }
        else{
            return response($response, 200);
        }
    }
    public function getBiodata(){
        return response([
            'message'=>'data ditemukan',
            'biodata'=> Auth::user()->biodata
        ], 200);
    }
}

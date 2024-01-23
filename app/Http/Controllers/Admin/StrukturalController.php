<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Struktural;
use Yajra\Datatables\Datatables;

class StrukturalController extends Controller
{
    public $defaultfileloc = 'app/uploads/foto_struktural/';
    public $defaultfilelocdel = 'app/public/uploads/foto_struktural/';
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('pages.admin.struktural.index');
    }

    public function create(Request $request){
    	$struktural = Struktural::find($request->id);
        return response()->json(array('struktural' => $struktural));

    }

    public function save(Request $request){
    	if($request->id == 0):
    		$ins = new Struktural;
    	else:
    		$ins = Struktural::find($request->id);
    	endif;
    		$ins->nama = $request->nama;
    		$ins->tingkat = $request->tingkat;
    		$ins->nip = $request->nip;
    		$ins->nama_jabatan = $request->nama_jabatan;
    		$ins->save();
    		if ($request->file('foto') !== null) {
            if (Struktural::find($ins->id)->foto != null) {
                unlink(storage_path($this->defaultfilelocdel . Struktural::find($ins->id)->foto));
            }
            $ext = $request->foto->getClientOriginalExtension();
            $filename  = 'foto_' . $ins->id . '_' . time() . '.' . $ext;
            $request->foto->storeAs('uploads/foto_struktural', $filename);
            Struktural::where('id', $ins->id)->update([
                'foto' => $filename,
            ]);
        }
    }

    public function delete(Request $request){
    	$struktural = Struktural::find($request->id);
    	if($struktural->foto !==  null):
       		unlink(storage_path($this->defaultfilelocdel . Struktural::find($request->id)->foto));
    	endif;
    	Struktural::find($request->id)->delete();
    }

    public function datatables(){
    	$struktural = Struktural::where('id','>',0)->get();
        return Datatables::of($struktural)
        ->editColumn('tingkat',function($i){
        	if($i->tingkat == 1):
        		return 'KASAT';
        	elseif($i->tingkat == 2):
        		return 'KEPALA BIDANG';
        	else:
        		return 'KEPALA SEKSI / KEPALA SUB BIDANG';
        	endif;
        })
        ->editColumn('foto',function($i){
        	if($i->foto !== null):
        		return '<a href="'.url('download/struktural/foto/'.$i->id).'" class="btn btn-success"> DOWNLOAD FOTO </a>';
        	else:
        		return '<span class="label label-danger">FOTO BELUM TERSEDIA</span>';
        	endif;
        })
        ->addColumn('aksi',function($i){
        	return '<button type="button" data-toggle="modal" data-target="#modal-create" class="popover_edit btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-primary" onclick="createStruktural('.$i->id.')">
                <i class="flaticon-edit-1"></i>
            </button>
            <button type="button" class="popover_delete btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-danger" onclick="deleteStruktural('.$i->id.')">
              <i class="flaticon-delete"></i> </button>';
        })->rawColumns(['aksi','foto'])
        ->make(true);

    }
}

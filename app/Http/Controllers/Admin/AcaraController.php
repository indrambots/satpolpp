<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Acara;
use App\Absensi;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;

class AcaraController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('pages.admin.acara.index');
    }

    public function create(Request $request){
    	$acara = Acara::find($request->id);
        return response()->json(array('acara' => $acara));
    }

    public function save(Request $request){
    	if($request->id == 0):
    		$acara = new Acara();
    	else:
    		$acara = Acara::find($request->id);
    	endif;
    	$acara->nama = $request->nama;
    	$acara->tema = $request->tema;
        $acara->tempat = $request->tempat;
    	$acara->link_dokumentasi = $request->link_dokumentasi;
    	$acara->link_materi = $request->link_materi;
    	$acara->tanggal = date("Y-m-d", strtotime($request->tanggal));
    	$acara->save();
    }

    public function delete(Request $request){
    	Acara::find($request->id)->delete();
    }

    public function datatables(){
    	$acara = Acara::where('id','>',0)->get();
        return Datatables::of($acara)
        ->addColumn('link',function($i){
        	return '<a href="'.$i->link_dokumentasi.'" target="_blank" class="btn btn-md btn-primary"><i class="fas fa-camera"></i></a> 
        	<a class="btn btn-md btn-primary" href="'.$i->link_materi.'" target="_blank"><i class="fas fa-file-download"></i></a>';
        })
        ->addColumn('aksi',function($i){
        	return '<button type="button" data-toggle="modal" data-target="#modal-create" class="popover_edit btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-primary" onclick="createBerita('.$i->id.')">
                <i class="flaticon-edit-1"></i>
            </button>
            <button type="button" class="popover_delete btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-danger" onclick="delete('.$i->id.')">
              <i class="flaticon-delete"></i> </button>';
        })->rawColumns(['aksi','link'])
        ->make(true);
    }
}
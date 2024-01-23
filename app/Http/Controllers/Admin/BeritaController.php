<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;
use App\BeritaGambar;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    
    public $defaultfileloc = 'app/uploads/berita/';
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('pages.admin.berita.index');
    }

    public function create(Request $request){
    	$berita = Berita::find($request->id);
        return response()->json(array('berita' => $berita));
    }

    public function cekupload(Request $request){
    	$gambar = BeritaGambar::where('berita_id',$request->id)->get();
        return response()->json(array('gambar' => $gambar));
    }

    public function upload(Request $request){
    	BeritaGambar::where('berita_id',$request->id)->delete();
    	foreach($request->file as $f){
    		$extension = $f['gambar']->getClientOriginalExtension();
            $filename  = 'berita_id_'.$request->id. '_'  . substr(md5(microtime()),rand(0,26),5) .  '.' . $extension;
            $f['gambar']->storeAs('uploads/berita',$filename);
            BeritaGambar::create([
            	'berita_id' => $request->id,
            	'file'		=> $filename
            	]);
    	}

    }

    public function save(Request $request){
    	if($request->id == 0):
    		$berita = new Berita();
    	else:
    		$berita = Berita::find($request->id);
    	endif;
    	$berita->judul = $request->judul;
    	$berita->jenis = 'berita';
    	$berita->deskripsi = $_REQUEST['deskripsi'];
    	$berita->tanggal = date("Y-m-d", strtotime($request->tanggal));
    	$berita->save();
    }

    public function delete(Request $request){
    	Berita::find($request->id)->delete();
    	BeritaGambar::where('berita_id',$request->id)->delete();
    }

    public function datatables(){
    	$berita = Berita::where('id','>',0)->where('jenis','berita')->get();
        return Datatables::of($berita)
        ->addColumn('aksi',function($i){
        	return '<button type="button" data-toggle="modal" data-target="#modal-create" class="popover_edit btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-primary" onclick="createBerita('.$i->id.')">
                <i class="flaticon-edit-1"></i>
            </button>
            <button type="button" data-toggle="modal" data-target="#modal-upload" class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-primary" onclick="cekupload('.$i->id.')">
                <i class="flaticon-upload-1"></i>
            </button>
            <button type="button" class="popover_delete btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-danger" onclick="deleteBerita('.$i->id.')">
              <i class="flaticon-delete"></i> </button>';
        })->rawColumns(['aksi','deskripsi'])
        ->make(true);
    }
}

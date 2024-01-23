<?php

namespace App\Http\Controllers\Admin;

use App\Dokumen;
use App\Http\Controllers\Controller;
use App\MasterJenisDokumen;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;


class DokumenController extends Controller
{
    public $defaultfileloc = 'app/uploads/dokumen/';
    public $defaultfilelocdel = 'app/public/uploads/dokumen/';
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jenis = MasterJenisDokumen::where('id', '>', 0)->get();
        return view('pages.admin.dokumen.index', compact('jenis'));
    }

    public function create(Request $request)
    {
        $dokumen = Dokumen::find($request->dokumen_id);
        return response()->json(array('dokumen' => $dokumen));
    }

    public function save(Request $request)
    {
        if ($request->id == 0):
            $dokumen = new Dokumen();
        else:
            $dokumen = Dokumen::find($request->id);
        endif;
        $dokumen->nama  = $request->nama;
        $dokumen->jenis = $request->jenis;
        $dokumen->save();
        if ($request->file('file_dokumen') !== null) {
            if (Dokumen::find($dokumen->id)->file_dokumen != null) {
                unlink(storage_path($this->defaultfilelocdel . Dokumen::find($dokumen->id)->file_dokumen));
            }
            $dokumen_extension = $request->file_dokumen->getClientOriginalExtension();
            $filename_dokumen  = 'dokumen_' . $dokumen->id . '_' . time() . '.' . $dokumen_extension;
            $request->file_dokumen->storeAs('uploads/dokumen', $filename_dokumen);
            Dokumen::where('id', $dokumen->id)->update([
                'file' => $filename_dokumen,
            ]);
        }
    }

    public function delete(Request $request){
    	Dokumen::where('id',$request->id)->delete();
    }

    public function datatables()
    {
    	$dokumen = Dokumen::where('id','>', 0)->get();
        return Datatables::of($dokumen)
        ->editColumn('jenis',function($i){
        	$jenis = MasterJenisDokumen::where('id',$i->jenis)->first();
        	return $jenis->nama;
        })
        ->addColumn('aksi',function($i){
        	return '<button type="button" data-toggle="modal" data-target="#modal-create" class="popover_edit btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-primary" onclick="createDokumen('.$i->id.')">
                <i class="flaticon-edit-1"></i>
            </button>
            <button type="button" class="popover_delete btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-danger" onclick="deleteDokumen('.$i->id.')">
              <i class="flaticon-delete"></i> </button>';
        })->rawColumns(['aksi'])
        ->make(true);

    }
}

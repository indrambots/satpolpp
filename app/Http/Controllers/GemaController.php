<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kota;
use App\Lksa;
use Yajra\Datatables\Datatables;

class GemaController extends Controller
{
    public function register_panti()
    {
        $kota = Kota::all();
        $lksa = Lksa::all();
        return view('pages.gema.register_panti',compact('kota','lksa'));
    }

    public function filter_panti(Request $request)
    {
        $lksa = Lksa::find($request->id);
        $kota = Kota::where('nama',$lksa->kota)->first();
        return response()->json(array('lksa' => $lksa,'kota' => $kota));
    }

    public function register_save_panti(Request $request)
    {   
        $lksa = Lksa::find($request->id);
        if($lksa->updated_at != null):
            return '<h1>DATA KEBUTUHAN PRIORITAS TELAH DIISI </h1>';
        else:
            Lksa::find($request->id)->update($request->all());
        endif;
        return view('pages.gema.success_register_panti',compact('lksa'));
    }

    public function index()
    {
        return view('pages.gema.index');
    }

    public function datatable()
    {
        $lksa = Lksa::whereNotNull('updated_at')->get();
        return Datatables::of($lksa)
        ->addColumn('kebutuhan_prioritas',function($i){
            return $i->plafon+$i->kusen+$i->semen+$i->paket_sembako+$i->alat_tidur+$i->quran+$i->sarung+$i->mukena+$i->sajadah+$i->bola_voli+$i->bola_basket+$i->bola_sepak+$i->mainan_laki+$i->mainan_perempuan+$i->buku_pelajaran+$i->buku_dongeng+$i->usia_balita+$i->usia_anak+$i->usia_remaja+$i->paket_alat_tulis+$i->konseling_pribadi+$i->cek_kesehatan+$i->konsultasi_kesehatan_anak+$i->ktp+$i->akta;
        })
        ->addColumn('total_anak',function($i){
            return $i->jumlah_anak_asuh+$i->jumlah_anak_luar;
        })
        ->addColumn('alamat_lengkap',function($i){
            return $i->alamat.", ".$i->kelurahan.", ".$i->kecamatan;
        })
        ->addColumn('pj',function($i){
            return $i->penanggung_jawab_baksos." (".$i->no_hp_pj.")";
        })
        ->addColumn('aksi',function($i){
            return '<button type="button" class="popover_delete btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-danger" onclick="detail('.$i->id.')">
              <i class="flaticon-delete"></i> </button>';
        })->rawColumns(['aksi','total_anak','kebutuhan_prioritas','alamat_lengkap','pj'])
        ->make(true);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterJenisDokumen;
use App\Dokumen;
use App\Acara;
use Yajra\Datatables\Datatables;
use App\Berita;
use App\BeritaGambar;
use App\Struktural;

class PageController extends Controller
{
    public function sejarah()
    {
    	return view('pages.landing.sejarah.index');
    }

    public function program()
    {
    	return view('pages.landing.program.index');
    }

    public function sp()
    {
        return view('pages.landing.sp.index');
    }

    public function organisasi()
    {
    	return view('pages.landing.organisasi.index');
    }

    public function kedudukan()
    {
    	return view('pages.landing.kedudukan.index');
    }

    public function tusi()
    {
    	return view('pages.landing.tusi.index');
    }

    public function unit_kerja()
    {
    	return view('pages.landing.unit_kerja.index');
    }

    public function visi()
    {
    	return view('pages.landing.visi.index');
    }

    public function standard_pelayanan()
    {
        return view('pages.landing.standar_pelayanan.index');
    }

    public function sop()
    {
        return view('pages.landing.sop.index');
    }

    public function kirab()
    {
        return view('pages.landing.kirab.index');
    }

    public function berita(){
    	$berita = Berita::where('id','>',0)->whereHas('gambar')->where('jenis','berita')->orderBy('tanggal','desc')->paginate(9);
    	return view('pages.landing.berita.index',compact('berita'));
    }

    public function berita_detail($id){
    	$berita = Berita::find($id);
    	return view('pages.landing.berita.detail',compact('berita'));
    }

    public function gallery(){
    	$berita = Berita::where('id','>',0)->where('jenis','gallery')->paginate(8);
    	return view('pages.landing.gallery.index',compact('berita'));
    }

    public function gallery_detail($id){
    	$berita = Berita::find($id);
    	return view('pages.landing.gallery.detail',compact('berita'));
    }

    public function laporan()
    {
    	return view('pages.landing.laporan.index');
    }

    public function laporan_datatable($jenis)
    {
    	$dokumen = Dokumen::where('id','>', 0)->where('jenis',$jenis)->get();
        return Datatables::of($dokumen)
        ->addColumn('aksi',function($i){
        	return '<a type="button" target="_blank" href="'.url('page/view_laporan/'.$i->id).'" class="popover_edit btn btn-lg btn-primary">
                <i class="flaticon-open-archive"></i>
            </a>
            <a href="'.url('download/dokumen/'.$i->id).'" type="button" class="popover_delete btn btn-lg btn-primary" onclick="downloadDokumen('.$i->id.')">
              <i class="fa fa-download"></i> </a>';
        })->rawColumns(['aksi'])
        ->make(true);
    }

    public function laporan_program()
    {
    	return view('pages.landing.laporan_program.index');
    }

    public function view_laporan($id){
    	$dokumen = Dokumen::find($id);
    	return view('pages.landing.laporan.modal.pdf',compact('dokumen'));
    }

    public function struktural(){
    	$eselon3 = Struktural::where('tingkat','=','2')->get();
    	$eselon4 = Struktural::where('tingkat','=','3')->get();
    	return view('pages.landing.struktural.index',compact('eselon3','eselon4'));
    }

    public function kepegawaian(){
        return view('pages.landing.kepegawaian.index');
    }

    public function ppid_datang(){
        return view('pages.landing.ppid.datang.index');
    }

    public function ppid_alur_datang(){
        return view('pages.landing.ppid.alur_datang.index');
    }

    public function ppid_keberatan(){
        return view('pages.landing.ppid.keberatan.index');
    }

    public function ppid_sengketa(){
        return view('pages.landing.ppid.sengketa.index');
    }

    public function ppid_sop(){
        return view('pages.landing.ppid.sop.index');
    }

    public function ppid_sk(){
        return view('pages.landing.ppid.sk.index');
    }
    public function ppid_profil(){
        return view('pages.landing.ppid.profil.index');
    }
    public function ppid_regulasi(){
        return view('pages.landing.ppid.regulasi.index');
    }
    public function ppid_visi(){
        return view('pages.landing.ppid.visi.index');
    }
    public function ppid_tusi(){
        return view('pages.landing.ppid.tusi.index');
    }
    public function ppid_laporan(){
        return view('pages.landing.ppid.laporan.index');
    }

    public function skm(){
        return view('pages.landing.skm.index');
    }

    public function kegiatan(){
        $acara = Acara::where('id','>',0)->orderBy('tanggal','desc')->get();
        return view('pages.landing.acara.index',compact('acara'));
    }
}

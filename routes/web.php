<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (env('APP_ENV') == 'production' ||env('APP_ENV') == 'prod' )
{URL::forceScheme('https');}

Auth::routes();

Route::prefix('popup')->group(function () {
});

Route::get('/','LandingController@index');
Route::get('/home',function(){
	return redirect('/administrator');
});

Route::get('administrator','HomeController@index');
Route::prefix('kasandra')->group(function () {
	Route::get('/','KasandraController@index');
	Route::post('search','KasandraController@search');
});
Route::prefix('admin')->group(function () {
	Route::prefix('dokumen')->group(function () {
		Route::get('/','Admin\DokumenController@index');
		Route::post('create','Admin\DokumenController@create');
		Route::post('save','Admin\DokumenController@save');
		Route::post('delete','Admin\DokumenController@delete');
		Route::get('datatables','Admin\DokumenController@datatables');
	});

	Route::prefix('acara')->group(function () {
		Route::get('/','Admin\AcaraController@index');
		Route::post('create','Admin\AcaraController@create');
		Route::post('save','Admin\AcaraController@save');
		Route::post('delete','Admin\AcaraController@delete');
		Route::get('datatables','Admin\AcaraController@datatables');
	});

	Route::prefix('gallery')->group(function () {
		Route::get('/','Admin\GalleryController@index');
		Route::post('create','Admin\GalleryController@create');
		Route::post('save','Admin\GalleryController@save');
		Route::post('cekupload','Admin\GalleryController@cekupload');
		Route::post('upload','Admin\GalleryController@upload');
		Route::post('delete','Admin\GalleryController@delete');
		Route::get('datatables','Admin\GalleryController@datatables');
	});

	Route::prefix('berita')->group(function () {
		Route::get('/','Admin\BeritaController@index');
		Route::post('create','Admin\BeritaController@create');
		Route::post('save','Admin\BeritaController@save');
		Route::post('cekupload','Admin\BeritaController@cekupload');
		Route::post('upload','Admin\BeritaController@upload');
		Route::post('delete','Admin\BeritaController@delete');
		Route::get('datatables','Admin\BeritaController@datatables');
	});

	Route::prefix('struktural')->group(function () {
		Route::get('/','Admin\StrukturalController@index');
		Route::post('create','Admin\StrukturalController@create');
		Route::post('save','Admin\StrukturalController@save');
		Route::post('delete','Admin\StrukturalController@delete');
		Route::get('datatables','Admin\StrukturalController@datatables');
	});
});

Route::prefix('log')->group(function () {

	Route::get('/', 'LogController@index');
	Route::get('datatables', 'LogController@datatables');
	Route::post('modal-new', 'LogController@modalNew');
	Route::post('modal-update', 'LogController@modalUpdate');
});

Route::get('kegiatan','PageController@kegiatan');
Route::prefix('wbs')->group(function(){
	Route::get('','WbsController@index');
	Route::get('create','WbsController@create');
	Route::post('save','WbsController@save');
});
Route::prefix('page')->group(function(){
	Route::get('sejarah','PageController@sejarah');
	Route::get('program','PageController@program');
	Route::get('sp','PageController@sp');
	Route::get('visi','PageController@visi');
	Route::get('tusi','PageController@tusi');
	Route::get('kedudukan','PageController@kedudukan');
	Route::get('organisasi','PageController@organisasi');
	Route::get('unit-kerja','PageController@unit_kerja');
	Route::get('struktural','PageController@struktural');
	Route::get('sop','PageController@sop');
	Route::get('laporan','PageController@laporan');
	Route::get('laporan-datatable/{jenis}','PageController@laporan_datatable');
	Route::get('laporan-program','PageController@laporan_program');
	Route::get('view_laporan/{id}','PageController@view_laporan');
	Route::get('dokumen','PageController@dokumen');
	Route::get('berita','PageController@berita');
	Route::get('berita/{id}','PageController@berita_detail');
	Route::get('gallery','PageController@gallery');
	Route::get('gallery/{id}','PageController@gallery_detail');
	Route::get('skm','PageController@skm');
	Route::get('standard-pelayanan','PageController@standard_pelayanan');
	Route::prefix('ppid')->group(function(){
		Route::get('datang','PageController@ppid_datang');
		Route::get('alur-datang','PageController@ppid_alur_datang');
		Route::get('keberatan','PageController@ppid_keberatan');
		Route::get('sengketa','PageController@ppid_sengketa');
		Route::get('sk','PageController@ppid_sk');
		Route::get('sop','PageController@ppid_sop');
		Route::get('profil','PageController@ppid_profil');
		Route::get('regulasi','PageController@ppid_regulasi');
		Route::get('laporan','PageController@ppid_laporan');
		Route::get('visi','PageController@ppid_visi');
		Route::get('tusi','PageController@ppid_tusi');
	});
	Route::prefix('zi')->group(function(){
		Route::get('','PageController@zi');
	});
	Route::get('kepegawaian','PageController@kepegawaian');
	Route::get('kirab','PageController@kirab');
});

Route::prefix('patroli')->group(function(){
	Route::get('','PatroliController@index');
	Route::get('test','PatroliController@test');
	Route::get('desa','PatroliController@desa');
	Route::get('register','PatroliController@reg');
	Route::get('register-kepala','PatroliController@reg_kepala');
	Route::get('register-luar','PatroliController@reg_luar');
	Route::get('register-umum','PatroliController@reg_umum');
	Route::get('result','PatroliController@result');
	Route::get('result-luar','PatroliController@result_luar');
	Route::get('result-kepala','PatroliController@result_kepala');
	Route::get('result-umum','PatroliController@result_umum');
	Route::post('save-kepala','PatroliController@save_kepala');
	Route::post('save-luar','PatroliController@save_luar');
	Route::post('save-umum','PatroliController@save_umum');
	Route::post('save','PatroliController@save');
	Route::post('filter-kec','PatroliController@filter_kec');
	Route::post('filter-kel','PatroliController@filter_kel');
	Route::post('filter-master-prov','PatroliController@filter_master_prov');
	Route::post('filter-master-kota','PatroliController@filter_master_kota');
	Route::post('filter-master-kec','PatroliController@filter_master_kec');
	Route::post('progress','PatroliController@progress');
	Route::get('datatable_filter','PatroliController@filter_datatable');
	Route::get('datatable_progress','PatroliController@progress_datatable');
	Route::get('datatable_undangan','PatroliController@undangan_datatable');
});
Route::prefix('download')->group(function(){
	Route::get('struktural/foto/{id}','DownloadController@foto_struktural');
	Route::get('berita/gambar/{id}','DownloadController@berita_gambar');
	Route::get('dokumen/{id}','DownloadController@download_dokumen');
	Route::get('wbs/{id}','DownloadController@download_wbs');
});
Route::prefix('absensi')->group(function(){
	Route::get('/{id}','AbsensiController@index');
});

Route::get('portal','LandingController@portal');
Route::prefix('password')->group(function(){
	Route::post('update','Master\UserController@updatePassword');
});

Route::prefix('gema')->group(function(){
	Route::get('','GemaController@index');
	Route::get('datatable','GemaController@datatable');
	Route::get('register','GemaController@register_panti');
	Route::post('register/save','GemaController@register_save_panti');
	Route::post('filter-panti','GemaController@filter_panti');
});
Route::get('tes-mail','PatroliController@tes_mail');
Route::get('/foo', function () {
    Artisan::call('storage:link');
});
Route::prefix('api')->group(function(){
});

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard/datatables', 'DashboardController@datatables')->name('external.dashboard.datatables');
    Route::post('dashboard/cek-nik', [BiodataController::class,'checkNik'])->name('external.dashboard.cekNik');
    Route::get('dashboard/getBiodata', [BiodataController::class,'getBiodata'])->name('external.dashboard.getBiodata');
    Route::post('dashboard/submitproposal', 'DashboardController@submitproposal')->name('external.dashboard.submitproposal');
    Route::post('dashboard/uploadfile/{id}', 'DashboardController@ubahFilePendukung')->name('external.dashboard.submitFile');
    Route::get('dashboard/downloadfile/{id}', 'DashboardController@downloadFile')->name('external.dashboard.downloadfile');
    Route::resource('dashboard', DashboardController::class);
});

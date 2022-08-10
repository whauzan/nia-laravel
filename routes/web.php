<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TvKabelController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PAMKeuanganController;

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

Route::get('/upload_file_excel_master_data_tv_kabel_IT', function () {
    return view('IT.upload_file_excel_master_data_tv_kabel_IT');
});

Route::get('/upload_file_excel_master_data_tv_kabel_IT_Template', function () {
    return view('IT.upload_file_excel_master_data_tv_kabel_IT_Template');
});


Route::get('/upload_file_excel_master_data_pulsa_IT', function () {
    return view('IT.upload_file_excel_master_data_pulsa_IT');
});

Route::get('/upload_file_excel_master_data_pulsa_IT_Template', function () {
    return view('IT.upload_file_excel_master_data_pulsa_IT_Template');
});


Route::get('/dashboard_IT', function () {
    return view('IT.dashboard_IT');
});

Route::get('/profil_IT', function () {
    return view('IT.profil_IT');
});

Route::get('/list_excel_tv_kabel_IT', function () {
    return view('IT.list_excel_tv_kabel_IT');
});

Route::get('/list_excel_pulsa_IT', function () {
    return view('IT.list_excel_pulsa_IT');
});




Route::get('/upload_file_excel_master_data_pulsa_keuangan', function () {
    return view('Keuangan.upload_file_excel_master_data_pulsa_keuangan');
});




Route::get('/dashboard_keuangan', function () {
    return view('Keuangan.dashboard_keuangan');
});

Route::get('/profil_keuangan', function () {
    return view('Keuangan.profil_keuangan');
});


Route::get('/list_excel_pulsa_keuangan', function () {
    return view('Keuangan.list_excel_pulsa_keuangan');
});


Route::get('/upload_file_excel_master_data_pulsa_keuangan', function () {
    return view('Keuangan.upload_file_excel_master_data_pulsa_keuangan');
});

Route::get('/upload_file_excel_master_data_pulsa_keuangan_Template', function () {
    return view('Keuangan.upload_file_excel_master_data_pulsa_keuangan_Template');
});



Route::get('/list_excel_pam_keuangan', function () {
    return view('Keuangan.list_excel_pam_keuangan');
});


Route::get('/upload_file_excel_master_data_pam_keuangan', function () {
    return view('Keuangan.upload_file_excel_master_data_pam_keuangan');
});

Route::get('/upload_file_excel_master_data_pam_keuangan_Template', function () {
    return view('Keuangan.upload_file_excel_master_data_pam_keuangan_Template');
});







Route::get('/master_data_tv_kabel_IT',[TvKabelController::class,'index']);
Route::get('/master_data_tv_kabel_IT/export_excel',[TvKabelController::class,'export_excel']);
Route::post('/master_data_tv_kabel_IT/import_excel', [TvKabelController::class,'import_excel']);


Route::get('/master_data_tv_kabel_IT/filter',[TvKabelController::class,'filter']);
Route::get('/master_data_tv_kabel_IT/filter2',[TvKabelController::class,'filter2']);
Route::get('/master_data_tv_kabel_IT/filter3',[TvKabelController::class,'filter3']);
Route::get('/master_data_tv_kabel_IT/filter4',[TvKabelController::class,'filter4']);
Route::get('/master_data_tv_kabel_IT/filter5',[TvKabelController::class,'filter5']);
Route::get('/master_data_tv_kabel_IT/filter6',[TvKabelController::class,'filter6']);
Route::get('/master_data_tv_kabel_IT/filter7',[TvKabelController::class,'filter7']);
Route::get('/master_data_tv_kabel_IT/filter8',[TvKabelController::class,'filter8']);
Route::get('/master_data_tv_kabel_IT/filter9',[TvKabelController::class,'filter9']);
Route::get('/master_data_tv_kabel_IT/filter10',[TvKabelController::class,'filter10']);
Route::get('/master_data_tv_kabel_IT/filter11',[TvKabelController::class,'filter11']);
Route::get('/master_data_tv_kabel_IT/filter12',[TvKabelController::class,'filter12']);


Route::get('/list_excel_tv_kabel_IT/export_excel_template',[TvKabelController::class,'export_excel_template']);


Route::get('/master_data_pulsa_IT',[PulsaController::class,'index']);
Route::get('/master_data_pulsa_IT/export_excel',[PulsaController::class,'export_excel']);
Route::post('/master_data_pulsa_IT/import_excel', [PulsaController::class,'import_excel']);

Route::get('/master_data_pulsa_IT/filter',[PulsaController::class,'filter']);
Route::get('/master_data_pulsa_IT/filter2',[PulsaController::class,'filter2']);
Route::get('/master_data_pulsa_IT/filte3',[PulsaController::class,'filter3']);
Route::get('/master_data_pulsa_IT/filte4',[PulsaController::class,'filter4']);
Route::get('/master_data_pulsa_IT/filte5',[PulsaController::class,'filter5']);
Route::get('/master_data_pulsa_IT/filte6',[PulsaController::class,'filter6']);
Route::get('/master_data_pulsa_IT/filter7',[PulsaController::class,'filter7']);
Route::get('/master_data_pulsa_IT/filter8',[PulsaController::class,'filter8']);
Route::get('/master_data_pulsa_IT/filter9',[PulsaController::class,'filter9']);
Route::get('/master_data_pulsa_IT/filter10',[PulsaController::class,'filter10']);
Route::get('/master_data_pulsa_IT/filter11',[PulsaController::class,'filter11']);
Route::get('/master_data_pulsa_IT/filter12',[PulsaController::class,'filter12']);

Route::get('/list_excel_pulsa_IT/export_excel_template',[TvKabelController::class,'export_excel_template']);



Route::get('/master_data_pulsa_keuangan',[KeuanganController::class,'index']);
Route::get('/master_data_pulsa_keuangan/export_excel',[KeuanganController::class,'export_excel']);
Route::post('/master_data_pulsa_keuangan/import_excel', [KeuanganController::class,'import_excel']);


Route::get('/master_data_pulsa_keuangan/filter',[KeuanganController::class,'filter']);
Route::get('/master_data_pulsa_keuangan/filter2',[KeuanganController::class,'filter2']);
Route::get('/master_data_pulsa_keuangan/filter3',[KeuanganController::class,'filter3']);
Route::get('/master_data_pulsa_keuangan/filter4',[KeuanganController::class,'filter4']);
Route::get('/master_data_pulsa_keuangan/filter5',[KeuanganController::class,'filter5']);
Route::get('/master_data_pulsa_keuangan/filter6',[KeuanganController::class,'filter6']);
Route::get('/master_data_pulsa_keuangan/filter7',[KeuanganController::class,'filter7']);
Route::get('/master_data_pulsa_keuangan/filter8',[KeuanganController::class,'filter8']);
Route::get('/master_data_pulsa_keuangan/filter9',[KeuanganController::class,'filter9']);
Route::get('/master_data_pulsa_keuangan/filter10',[KeuanganController::class,'filter10']);
Route::get('/master_data_pulsa_keuangan/filter11',[KeuanganController::class,'filter11']);
Route::get('/master_data_pulsa_keuangan/filter12',[KeuanganController::class,'filter12']);


Route::get('/list_excel_pulsa_keuangan/export_excel_template',[KeuanganController::class,'export_excel_template']);


Route::get('/master_data_pam_keuangan',[PAMKeuanganController::class,'index']);
Route::get('/master_data_pam_keuangan/export_excel',[PAMKeuanganController::class,'export_excel']);
Route::post('/master_data_pam_keuangan/import_excel', [PAMKeuanganController::class,'import_excel']);


Route::get('/master_data_pam_keuangan/filter',[PAMKeuanganController::class,'filter']);
Route::get('/master_data_pam_keuangan/filter2',[PAMKeuanganController::class,'filter2']);
Route::get('/master_data_pam_keuangan/filter3',[PAMKeuanganController::class,'filter3']);
Route::get('/master_data_pam_keuangan/filter4',[PAMKeuanganController::class,'filter4']);
Route::get('/master_data_pam_keuangan/filter5',[PAMKeuanganController::class,'filter5']);
Route::get('/master_data_pam_keuangan/filter6',[PAMKeuanganController::class,'filter6']);
Route::get('/master_data_pam_keuangan/filter7',[PAMKeuanganController::class,'filter7']);
Route::get('/master_data_pam_keuangan/filter8',[PAMKeuanganController::class,'filter8']);
Route::get('/master_data_pam_keuangan/filter9',[PAMKeuanganController::class,'filter9']);
Route::get('/master_data_pam_keuangan/filter10',[PAMKeuanganController::class,'filter10']);
Route::get('/master_data_pam_keuangan/filter11',[PAMKeuanganController::class,'filter11']);
Route::get('/master_data_pam_keuangan/filter12',[PAMKeuanganController::class,'filter12']);


Route::get('/list_excel_pam_keuangan/export_excel_template',[PAMKeuanganController::class,'export_excel_template']);


Route::get('/master_data_litrik_keuangan',[ListrikKeuanganController::class,'index']);
Route::get('/master_data_listrik_keuangan/export_excel',[ListrikKeuanganController::class,'export_excel']);
Route::post('/master_data_listrik_keuangan/import_excel', [ListrikKeuanganController::class,'import_excel']);


Route::get('/master_data_listrik_keuangan/filter',[ListrikKeuanganController::class,'filter']);
Route::get('/master_data_listrik_keuangan/filter2',[ListrikKeuanganController::class,'filter2']);
Route::get('/master_data_listrik_keuangan/filter3',[ListrikKeuanganController::class,'filter3']);
Route::get('/master_data_listrik_keuangan/filter4',[ListrikKeuanganController::class,'filter4']);
Route::get('/master_data_listrik_keuangan/filter5',[ListrikKeuanganController::class,'filter5']);
Route::get('/master_data_listrik_keuangan/filter6',[ListrikKeuanganController::class,'filter6']);
Route::get('/master_data_listrik_keuangan/filter7',[ListrikKeuanganController::class,'filter7']);
Route::get('/master_data_listrik_keuangan/filter8',[ListrikKeuanganController::class,'filter8']);
Route::get('/master_data_listrik_keuangan/filter9',[ListrikKeuanganController::class,'filter9']);
Route::get('/master_data_listrik_keuangan/filter10',[ListrikKeuanganController::class,'filter10']);
Route::get('/master_data_listrik_keuangan/filter11',[ListrikKeuanganController::class,'filter11']);
Route::get('/master_data_listrik_keuangan/filter12',[ListrikKeuanganController::class,'filter12']);


Route::get('/list_excel_listrik_keuangan/export_excel_template',[ListrikKeuanganController::class,'export_excel_template']);


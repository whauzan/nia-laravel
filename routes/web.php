<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TvKabelController;

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




Route::get('/dashboard_keuangan', function () {
    return view('Keuangan.dashboard_keuangan');
});

Route::get('/profil_keuangan', function () {
    return view('Keuangan.profil_keuangan');
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

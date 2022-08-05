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

Route::get('/upload_file_excel_master_data_pulsa_IT', function () {
    return view('IT.upload_file_excel_master_data_pulsa_IT');
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


Route::get('/master_data_tv_kabel_IT',[TvKabelController::class,'index']);
Route::get('/master_data_tv_kabel_IT/export_excel',[TvKabelController::class,'export_excel']);
Route::post('/master_data_tv_kabel_IT/import_excel', [TvKabelController::class,'import_excel']);


Route::get('/list_excel_tv_kabel_IT/export_template_excel',[TvKabelController::class,'export_template_excel']);
Route::post('/list_excel_tv_kabel_IT/import_template_excel', [TvKabelController::class,'import_template_excel']);


Route::get('/master_data_pulsa_IT',[PulsaController::class,'index']);
Route::get('/master_data_pulsa_IT/export_excel',[PulsaController::class,'export_excel']);
Route::post('/master_data_pulsa_IT/import_excel', [PulsaController::class,'import_excel']);


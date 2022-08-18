<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ITController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TvKabelController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PAMKeuanganController;
use App\Http\Controllers\KeuanganListrikController;
use App\Http\Controllers\SDMController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::prefix('sdm')
    ->namespace('')
    ->middleware(['auth', 'adminsdm'])
    ->group(function(){
        Route::get('/profil', [SDMController::class, 'profil'])->name('profil_sdm');
        
        Route::get('/master-data', [SDMController::class, 'masterdata'])->name('master_data');
        Route::get('/list-excel-internet', [SDMController::class, 'listInternet'])->name('list_excel_internet_sdm');
        Route::get('/list-excel-internet/{filter}', [SDMController::class, 'filterInternet'])->name('filter_list_excel_internet_sdm');
        Route::get('/import-data-internet', [SDMController::class, 'importInternet'])->name('import_internet_sdm');
        Route::post('/upload-data-internet', [SDMController::class, 'uploadInternet'])->name('upload_internet_sdm');
        Route::get('/export-excel-internet', [SDMController::class, 'exportInternet'])->name('export_excel_internet_sdm');
        Route::get('/export-excel-internet-template', [SDMController::class, 'exportInternetTemplate'])->name('export_excel_internet_template_sdm');
        
        Route::get('/list-excel-listrik', [SDMController::class, 'listListrik'])->name('list_excel_listrik_sdm');
        Route::get('/list-excel-listrik/{filter}', [SDMController::class, 'filterListrik'])->name('filter_list_excel_listrik_sdm');
        Route::get('/import-data-listrik', [SDMController::class, 'importListrik'])->name('import_listrik_sdm');
        Route::post('/upload-data-listrik', [SDMController::class, 'uploadListrik'])->name('upload_listrik_sdm');
        Route::get('/export-excel-listrik', [SDMController::class, 'exportListrik'])->name('export_excel_listrik_sdm');
        Route::get('/export-excel-listrik-template', [SDMController::class, 'exportListrikTemplate'])->name('export_excel_listrik_template_sdm');
        
        Route::get('/list-excel-pam', [SDMController::class, 'listPam'])->name('list_excel_pam_sdm');
        Route::get('/list-excel-pam/{filter}', [SDMController::class, 'filterPam'])->name('filter_list_excel_pam_sdm');
        Route::get('/import-data-pam', [SDMController::class, 'importPam'])->name('import_pam_sdm');
        Route::post('/upload-data-pam', [SDMController::class, 'uploadPam'])->name('upload_pam_sdm');
        Route::get('/export-excel-pam', [SDMController::class, 'exportPam'])->name('export_excel_pam_sdm');
        Route::get('/export-excel-pam-template', [SDMController::class, 'exportPamTemplate'])->name('export_excel_pam_template_sdm');
        
        Route::get('/list-excel-pulsa', [SDMController::class, 'listPulsa'])->name('list_excel_pulsa_sdm');
        Route::get('/list-excel-pulsa/{filter}', [SDMController::class, 'filterPulsa'])->name('filter_list_excel_pulsa_sdm');
        Route::get('/import-data-pulsa', [SDMController::class, 'importPulsa'])->name('import_pulsa_sdm');
        Route::post('/upload-data-pulsa', [SDMController::class, 'uploadPulsa'])->name('upload_pulsa_sdm');
        Route::get('/export-excel-pulsa', [SDMController::class, 'exportPulsa'])->name('export_excel_pulsa_sdm');
        Route::get('/export-excel-pulsa-template', [SDMController::class, 'exportPulsaTemplate'])->name('export_excel_pulsa_template_sdm');
        
        Route::get('/list-excel-tv', [SDMController::class, 'listTVKabel'])->name('list_excel_tv_sdm');
        Route::get('/list-excel-tv/{filter}', [SDMController::class, 'filterTVKabel'])->name('filter_list_excel_tv_sdm');
        Route::get('/import-data-tv', [SDMController::class, 'importTVKabel'])->name('import_tv_sdm');
        Route::post('/upload-data-tv', [SDMController::class, 'uploadTVKabel'])->name('upload_tv_sdm');
        Route::get('/export-excel-tv', [SDMController::class, 'exportTVKabel'])->name('export_excel_tv_sdm');
        Route::get('/export-excel-tv-template', [SDMController::class, 'exportTVKabelTemplate'])->name('export_excel_tv_template_sdm');

        Route::get('/verifikasi', [SDMController::class, 'verifikasi'])->name('verifikasi_sdm');
        Route::get('/verifikasi/internet', [SDMController::class, 'verifikasiInternet'])->name('verifikasi_internet_sdm');
        Route::get('verifikasi/internet/confirm', [SDMController::class, 'verifikasiInternetConfirm'])->name('verifikasi_internet_confirm_sdm');
        Route::get('/verifikasi/listrik', [SDMController::class, 'verifikasiListrik'])->name('verifikasi_listrik_sdm');
        Route::get('verifikasi/listrik/confirm', [SDMController::class, 'verifikasiListrikConfirm'])->name('verifikasi_listrik_confirm_sdm');
        Route::get('/verifikasi/pam', [SDMController::class, 'verifikasiPam'])->name('verifikasi_pam_sdm');
        Route::get('verifikasi/pam/confirm', [SDMController::class, 'verifikasiPamConfirm'])->name('verifikasi_pam_confirm_sdm');
        Route::get('/verifikasi/pulsa', [SDMController::class, 'verifikasiPulsa'])->name('verifikasi_pulsa_sdm');
        Route::get('verifikasi/pulsa/confirm', [SDMController::class, 'verifikasiPulsaConfirm'])->name('verifikasi_pulsa_confirm_sdm');
        Route::get('/verifikasi/tv', [SDMController::class, 'verifikasiTVKabel'])->name('verifikasi_tv_sdm');
        Route::get('verifikasi/tv/confirm', [SDMController::class, 'verifikasiTVKabelConfirm'])->name('verifikasi_tv_confirm_sdm');

        Route::get('/internet/edit/{id}', [SDMController::class, 'InternetEdit'])->name('internet_edit_sdm');
        Route::post('/internet/edit/confirm', [SDMController::class, 'InternetEditConfirm'])->name('internet_edit_confirm_sdm');
        Route::get('/listrik/edit/{id}', [SDMController::class, 'ListrikEdit'])->name('listrik_edit_sdm');
        Route::post('/listrik/edit/confirm', [SDMController::class, 'ListrikEditConfirm'])->name('listrik_edit_confirm_sdm');
        Route::get('/pam/edit/{id}', [SDMController::class, 'PamEdit'])->name('pam_edit_sdm');
        Route::post('/pam/edit/confirm', [SDMController::class, 'PamEditConfirm'])->name('pam_edit_confirm_sdm');
        Route::get('/pulsa/edit/{id}', [SDMController::class, 'PulsaEdit'])->name('pulsa_edit_sdm');
        Route::post('/pulsa/edit/confirm', [SDMController::class, 'PulsaEditConfirm'])->name('pulsa_edit_confirm_sdm');
        Route::get('/tv/edit/{id}', [SDMController::class, 'TVKabelEdit'])->name('tv_edit_sdm');
        Route::post('/tv/edit/confirm', [SDMController::class, 'TVKabelEditConfirm'])->name('tv_edit_confirm_sdm');
        
        Route::get('/internet/delete/{id}', [SDMController::class, 'InternetDelete'])->name('internet_delete_sdm');
        Route::get('/listrik/delete/{id}', [SDMController::class, 'ListrikDelete'])->name('listrik_delete_sdm');
        Route::get('/pam/delete/{id}', [SDMController::class, 'PamDelete'])->name('pam_delete_sdm');
        Route::get('/pulsa/delete/{id}', [SDMController::class, 'PulsaDelete'])->name('pulsa_delete_sdm');
        Route::get('/tv/delete/{id}', [SDMController::class, 'TVKabelDelete'])->name('tv_delete_sdm');
    });

Route::prefix('it')
    ->namespace('')
    ->middleware(['auth', 'adminit'])
    ->group(function(){
        Route::get('/profil', [ITController::class, 'profilIT'])->name('profil_IT');
        
        Route::get('/list-excel-pulsa', [ITController::class, 'listPulsa'])->name('list_excel_pulsa_IT');
        Route::get('/list-excel-pulsa/{filter}', [ITController::class, 'filterPulsa'])->name('filter_list_excel_pulsa_IT');
        Route::get('/import-data-pulsa', [ITController::class, 'importPulsa'])->name('import_pulsa_IT');
        Route::post('/upload-data-pulsa', [ITController::class, 'uploadPulsa'])->name('upload_pulsa_IT');
        Route::get('/export-excel-pulsa', [ITController::class, 'exportPulsa'])->name('export_excel_pulsa_IT');
        Route::get('/export-excel-pulsa-template', [ITController::class, 'exportPulsaTemplate'])->name('export_excel_pulsa_template_IT');
        
        Route::get('/list-excel-tv', [ITController::class, 'listTVKabel'])->name('list_excel_tv_IT');
        Route::get('/list-excel-tv/{filter}', [ITController::class, 'filterTVKabel'])->name('filter_list_excel_tv_IT');
        Route::get('/import-data-tv', [ITController::class, 'importTVKabel'])->name('import_tv_IT');
        Route::post('/upload-data-tv', [ITController::class, 'uploadTVKabel'])->name('upload_tv_IT');
        Route::get('/export-excel-tv', [ITController::class, 'exportTVKabel'])->name('export_excel_tv_IT');
        Route::get('/export-excel-tv-template', [ITController::class, 'exportTVKabelTemplate'])->name('export_excel_tv_template_IT');
    });

Route::prefix('keuangan')
    ->namespace('')
    ->middleware(['auth', 'adminkeuangan'])
    ->group(function(){
        Route::get('/profil', [KeuanganController::class, 'profilKeuangan'])->name('profil_keuangan');
        
        Route::get('/list-excel-listrik', [KeuanganController::class, 'listListrik'])->name('list_excel_listrik_keuangan');
        Route::get('/list-excel-listrik/{filter}', [KeuanganController::class, 'filterListrik'])->name('filter_list_excel_listrik_keuangan');
        Route::get('/import-data-listrik', [KeuanganController::class, 'importListrik'])->name('import_listrik_keuangan');
        Route::post('/upload-data-listrik', [KeuanganController::class, 'uploadListrik'])->name('upload_listrik_keuangan');
        Route::get('/export-excel-listrik', [KeuanganController::class, 'exportListrik'])->name('export_excel_listrik_keuangan');
        Route::get('/export-excel-listrik-template', [KeuanganController::class, 'exportListrikTemplate'])->name('export_excel_listrik_template_keuangan');
        
        Route::get('/list-excel-pam', [KeuanganController::class, 'listPam'])->name('list_excel_pam_keuangan');
        Route::get('/list-excel-pam/{filter}', [KeuanganController::class, 'filterPam'])->name('filter_list_excel_pam_keuangan');
        Route::get('/import-data-pam', [KeuanganController::class, 'importPam'])->name('import_pam_keuangan');
        Route::post('/upload-data-pam', [KeuanganController::class, 'uploadPam'])->name('upload_pam_keuangan');
        Route::get('/export-excel-pam', [KeuanganController::class, 'exportPam'])->name('export_excel_pam_keuangan');
        Route::get('/export-excel-pam-template', [KeuanganController::class, 'exportPamTemplate'])->name('export_excel_pam_template_keuangan');
        
        Route::get('/list-excel-pulsa', [KeuanganController::class, 'listPulsa'])->name('list_excel_pulsa_keuangan');
        Route::get('/list-excel-pulsa/{filter}', [KeuanganController::class, 'filterPulsa'])->name('filter_list_excel_pulsa_keuangan');
        Route::get('/import-data-pulsa', [KeuanganController::class, 'importPulsa'])->name('import_pulsa_keuangan');
        Route::post('/upload-data-pulsa', [KeuanganController::class, 'uploadPulsa'])->name('upload_pulsa_keuangan');
        Route::get('/export-excel-pulsa', [KeuanganController::class, 'exportPulsa'])->name('export_excel_pulsa_keuangan');
        Route::get('/export-excel-pulsa-template', [KeuanganController::class, 'exportPulsaTemplate'])->name('export_excel_pulsa_template_keuangan');
    });
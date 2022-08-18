<?php

namespace App\Http\Controllers;

use App\Exports\InternetExport;
use App\Exports\InternetExportTemplate;
use App\Exports\ListrikExport;
use App\Exports\ListrikExportTemplate;
use App\Exports\PAMExport;
use App\Exports\PAMExportTemplate;
use App\Exports\PulsaExport;
use App\Exports\PulsaExportTemplate;
use App\Exports\TvKabelExport;
use App\Exports\TVKabelExportTemplate;
use App\Imports\InternetImport;
use App\Imports\ListrikImport;
use App\Imports\PAMImport;
use App\Imports\PulsaImport;
use App\Imports\TvKabelImport;
use App\Models\Internet;
use App\Models\Listrik;
use App\Models\PAM;
use App\Models\Pulsa;
use App\Models\TvKabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Ramsey\Uuid\Type\Integer;

class SDMController extends Controller
{
    public function masterdata() {
        return view('SDM.master_data');
    }

    public function listInternet() {
        return view('SDM.list_excel_internet_sdm');
    }

    public function listListrik() {
        return view('SDM.list_excel_listrik_sdm');
    }
    
    public function listPam() {
        return view('SDM.list_excel_pam_sdm');
    }

    public function listPulsa() {
        return view('SDM.list_excel_pulsa_sdm');
    }

    public function listTVKabel() {
        return view('SDM.list_excel_tv_kabel_sdm');
    }

    public function profil() {
        return view('SDM.profil_sdm');
    }

    public function filterInternet() {
        $internet = Internet::where('is_verified', 1)->get();
        return view('SDM.master_data_internet_sdm', [
            'master_data_internet_sdm' => $internet
        ]);
    }

    public function filterListrik() {
        $listrik = Listrik::where('is_verified', 1)->get();
        return view('SDM.master_data_listrik_sdm', [
            'master_data_listrik_sdm' => $listrik
        ]);
    }

    public function filterPam() {
        $pam = PAM::where('is_verified', 1)->get();
        return view('SDM.master_data_pam_sdm', [
            'master_data_pam_sdm' => $pam
        ]);
    }

    public function filterPulsa() {
        $pulsa = Pulsa::where('is_verified', 1)->get();
        return view('SDM.master_data_pulsa_sdm', [
            'master_data_pulsa_sdm' => $pulsa
        ]);
    }

    public function filterTVKabel() {
        $tvkabel = TvKabel::where('is_verified', 1)->get();
        return view('SDM.master_data_tv_kabel_sdm', [
            'master_data_tv_kabel_sdm' => $tvkabel
        ]);
    }

    public function exportInternet() {
        return Excel::download(new InternetExport, 'sdm_internet.xlsx');
    }

    public function exportListrik() {
        return Excel::download(new ListrikExport, 'sdm_listrik.xlsx');
    }

    public function exportPam() {
        return Excel::download(new PAMExport, 'sdm_pam.xlsx');
    }

    public function exportPulsa() {
        return Excel::download(new PulsaExport, 'sdm_pulsa.xlsx');
    }

    public function exportTVKabel() {
        return Excel::download(new TvKabelExport, 'sdm_tv_kabel.xlsx');
    }

    public function importInternet() {
        return view('SDM.upload_file_excel_master_data_internet_sdm');
    }

    public function importListrik() {
        return view('SDM.upload_file_excel_master_data_listrik_sdm');
    }

    public function importPam() {
        return view('SDM.upload_file_excel_master_data_pam_sdm');
    }

    public function importPulsa() {
        return view('SDM.upload_file_excel_master_data_pulsa_sdm');
    }

    public function importTVKabel() {
        return view('SDM.upload_file_excel_master_data_tv_kabel_sdm');
    }

    public function uploadInternet(Request $request) {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_internet_sdm',$nama_file);

		// import data
		Excel::import(new InternetImport, public_path('/file_internet_sdm/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data Internet Berhasil Diimport!');
		// alihkan halaman kembali
		return redirect()->route('list_excel_internet_sdm');
    }

    public function uploadListrik(Request $request) {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_listrik_sdm',$nama_file);

        // import data
        Excel::import(new ListrikImport, public_path('/file_listrik_sdm/'.$nama_file));

        // notifikasi dengan session
        Session::flash('sukses','Master Data Listrik Berhasil Diimport!');
        // alihkan halaman kembali
        return redirect()->route('list_excel_listrik_sdm');
    }

    public function uploadPam(Request $request) {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        
        // menangkap file excel
        $file = $request->file('file');
        
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
        
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_pam_sdm',$nama_file);
        
        // import data
        Excel::import(new PAMImport, public_path('/file_pam_sdm/'.$nama_file));
        
        // notifikasi dengan session
        Session::flash('sukses','Master Data PAM Berhasil Diimport!');
        // alihkan halaman kembali
        return redirect()->route('list_excel_pam_sdm');
    }

    public function uploadPulsa(Request $request) {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        
        // menangkap file excel
        $file = $request->file('file');
        
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
        
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_pulsa_sdm',$nama_file);
        
        // import data
        Excel::import(new PulsaImport, public_path('/file_pulsa_sdm/'.$nama_file));
        
        // notifikasi dengan session
        Session::flash('sukses','Master Data Pulsa Berhasil Diimport!');
        // alihkan halaman kembali
        return redirect()->route('list_excel_pulsa_sdm');
    }

    public function uploadTVKabel(Request $request) {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        
        // menangkap file excel
        $file = $request->file('file');
        
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
        
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_tv_kabel_sdm',$nama_file);
        
        // import data
        Excel::import(new TvKabelImport, public_path('/file_tv_kabel_sdm/'.$nama_file));
        
        // notifikasi dengan session
        Session::flash('sukses','Master Data TV Kabel Berhasil Diimport!');
        // alihkan halaman kembali
        return redirect()->route('list_excel_tv_sdm');
    }

    public function exportInternetTemplate() {
        return Excel::download(new InternetExportTemplate, 'template_internet.xlsx');
    }

    public function exportListrikTemplate() {
        return Excel::download(new ListrikExportTemplate, 'template_listrik.xlsx');
    }

    public function exportPamTemplate() {
        return Excel::download(new PAMExportTemplate, 'template_pam.xlsx');
    }

    public function exportPulsaTemplate() {
        return Excel::download(new PulsaExportTemplate, 'template_pulsa.xlsx');
    }

    public function exportTVKabelTemplate() {
        return Excel::download(new TVKabelExportTemplate, 'template_tv_kabel.xlsx');
    }

    public function verifikasi() {
        return view('SDM.verifikasi');
    }

    public function verifikasiInternet() {
        $internet = Internet::where('is_verified', 0)->get();
        return view('SDM.verifikasi_internet', [
            'verifikasi_data_internet_sdm' => $internet
        ]);
    }

    public function verifikasiInternetConfirm() {
        Internet::where('is_verified', 0)->update([
            'is_verified' => 1
        ]);
        return redirect()->route('verifikasi_internet_sdm');
    }

    public function verifikasiListrik() {
        $listrik = Listrik::where('is_verified', 0)->get();
        return view('SDM.verifikasi_listrik', [
            'verifikasi_data_listrik_sdm' => $listrik
        ]);
    }

    public function verifikasiListrikConfirm() {
        Listrik::where('is_verified', 0)->update([
            'is_verified' => 1
        ]);
        return redirect()->route('verifikasi_listrik_sdm');
    }

    public function verifikasiPAM() {
        $pam = PAM::where('is_verified', 0)->get();
        return view('SDM.verifikasi_pam', [
            'verifikasi_data_pam_sdm' => $pam
        ]);
    }

    public function verifikasiPAMConfirm() {
        PAM::where('is_verified', 0)->update([
            'is_verified' => 1
        ]);
        return redirect()->route('verifikasi_pam_sdm');
    }

    public function verifikasiPulsa() {
        $pulsa = Pulsa::where('is_verified', 0)->get();
        return view('SDM.verifikasi_pulsa', [
            'verifikasi_data_pulsa_sdm' => $pulsa
        ]);
    }

    public function verifikasiPulsaConfirm() {
        Pulsa::where('is_verified', 0)->update([
            'is_verified' => 1
        ]);
        return redirect()->route('verifikasi_pulsa_sdm');
    }

    public function verifikasiTVKabel() {
        $tv_kabel = TvKabel::where('is_verified', 0)->get();
        return view('SDM.verifikasi_tv_kabel', [
            'verifikasi_data_tv_kabel_sdm' => $tv_kabel
        ]);
    }

    public function verifikasiTVKabelConfirm() {
        TvKabel::where('is_verified', 0)->update([
            'is_verified' => 1
        ]);
        return redirect()->route('verifikasi_tv_kabel_sdm');
    }

    public function InternetEdit($id) {
        $internet = Internet::where('idDataInternet', $id)->first();
        return view('SDM.internet_edit', [
            'data_internet_sdm' => $internet
        ]);
    }

    public function InternetEditConfirm(Request $request) {
        $internet = Internet::where('idDataInternet', $request->idDataInternet)->first();
        $internet->update([
            'nomor_hp' => $request->nomor_hp,
            'pemakaian' => $request->pemakaian,
            'biaya_admin' => $request->biaya_admin,
            'total' => $request->total,
        ]);
        return redirect()->route('verifikasi_internet_sdm');
    }

    public function ListrikEdit($id) {
        $listrik = Listrik::where('idDataListrik', $id)->first();
        return view('SDM.listrik_edit', [
            'data_listrik_sdm' => $listrik
        ]);
    }

    public function ListrikEditConfirm(Request $request) {
        $listrik = Listrik::where('idDataListrik', $request->idDataListrik)->first();
        $listrik->update([
            'nomor_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_kontrol' => $request->nomor_kontrol,
            'pemakaian' => $request->pemakaian,
            'biaya_admin' => $request->biaya_admin,
            'pemakaian_FG' => $request->pemakaian_FG,
            'plafon' => $request->plafon,
            'beban_pegawai' => $request->beban_pegawai,
            'beban_perusahaan' => $request->beban_perusahaan,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('verifikasi_listrik_sdm');
    }

    public function PAMEdit($id) {
        $pam = PAM::where('idDataPAM', $id)->first();
        return view('SDM.pam_edit', [
            'data_pam_sdm' => $pam
        ]);
    }

    public function PAMEditConfirm(Request $request) {
        $pam = PAM::where('idDataPam', $request->idDataPam)->first();
        $pam->update([
            'nomor_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_rekening' => $request->nomor_rekening,
            'pemakaian' => $request->pemakaian,
            'plafon' => $request->plafon,
            'beban_perusahaan' => $request->beban_perusahaan,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('verifikasi_pam_sdm');
    }

    public function PulsaEdit($id) {
        $pulsa = Pulsa::where('idDataPulsa', $id)->first();
        return view('SDM.pulsa_edit', [
            'data_pulsa_sdm' => $pulsa
        ]);
    }

    public function PulsaEditConfirm(Request $request) {
        $pulsa = Pulsa::where('idDataPulsa', $request->idDataPulsa)->first();
        $pulsa->update([
            'nomor_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'pemakaian' => $request->pemakaian,
            'plafon' => $request->plafon,
            'roaming_ln' => $request->roaming_ln,
            'beban_pegawai' => $request->beban_pegawai,
            'beban_perusahaan' => $request->beban_perusahaan,
            'tagihan' => $request->tagihan,
        ]);
        return redirect()->route('verifikasi_pulsa_sdm');
    }

    public function TVKabelEdit($id) {
        $tv_kabel = TvKabel::where('idDataTvkabel', $id)->first();
        return view('SDM.tv_kabel_edit', [
            'data_tv_kabel_sdm' => $tv_kabel
        ]);
    }

    public function TVKabelEditConfirm(Request $request) {
        $tv_kabel = TvKabel::where('idDataTvkabel', $request->idDataTvkabel)->first();
        $tv_kabel->update([
            'nomor_pegawai' => $request->nomor_pegawai,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'jenis_tv' => $request->jenis_tv,
            'pemakaian' => $request->pemakaian,
            'plafon' => $request->plafon,
            'roaming_ln' => $request->roaming_ln,
            'beban_pegawai' => $request->beban_pegawai,
            'beban_perusahaan' => $request->beban_perusahaan,
            'tagihan' => $request->tagihan,
        ]);
        return redirect()->route('verifikasi_tv_sdm');
    }
}

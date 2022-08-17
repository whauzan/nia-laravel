<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use App\Exports\KeuanganPulsaExport;
use App\Imports\KeuanganPulsaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use App\Exports\KeuanganPulsaExsportTemplate;
use App\Exports\ListrikExport;
use App\Exports\ListrikExportTemplate;
use App\Exports\PAMExport;
use App\Exports\PAMExportTemplate;
use App\Exports\PulsaExport;
use App\Exports\PulsaExportTemplate;
use App\Imports\KeuanganListrikImport;
use App\Imports\ListrikImport;
use App\Imports\PAMImport;
use App\Imports\PulsaImport;
use App\Models\Listrik;
use App\Models\PAM;
use App\Models\Pulsa;

class KeuanganController extends Controller
{
    // public function index()
	// {
	// 	$pulsa = Keuangan::all();
	// 	return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$pulsa]);
	// }

    public function profilKeuangan()
    {
        return view('Keuangan.profil_keuangan');
    }

    public function listListrik()
    {
        return view('Keuangan.list_excel_listrik_keuangan');
    }

    public function listPam()
    {
        return view('Keuangan.list_excel_pam_keuangan');
    }

    public function listPulsa()
    {
        return view('Keuangan.list_excel_pulsa_keuangan');
    }

    public function filterListrik($filter)
    {
        $filter = Listrik::where('is_verified', 1)->whereMonth('tanggal', $filter)->get();
        return view('Keuangan.master_data_listrik_keuangan', [
            'master_data_listrik_keuangan' => $filter
        ]);
    }

    public function filterPam($filter)
    {
        $filter = PAM::where('is_verified', 1)->whereMonth('tanggal', $filter)->get();
        return view('Keuangan.master_data_pam_keuangan', [
            'master_data_pam_keuangan' => $filter
        ]);
    }

    public function filterPulsa($filter)
    {
        $filter = Pulsa::where('is_verified', 1)->whereMonth('tanggal', $filter)->get();
        return view('Keuangan.master_data_pulsa_keuangan', [
            'master_data_pulsa_keuangan' => $filter
        ]);
    }

	public function exportListrik()
	{
		return Excel::download(new ListrikExport, 'listrik_keuangan.xlsx'); 
	}

    public function exportPam()
    {
        return Excel::download(new PAMExport, 'pam_keuangan.xlsx');
    }

    public function exportPulsa()
    {
        return Excel::download(new PulsaExport, 'pulsa_keuangan.xlsx');
    }

    public function importListrik()
    {
        return view('Keuangan.upload_file_excel_master_data_listrik_keuangan');
    }

    public function importPam()
    {
        return view('Keuangan.upload_file_excel_master_data_pam_keuangan');
    }

    public function importPulsa()
    {
        return view('Keuangan.upload_file_excel_master_data_pulsa_keuangan');
    }

    public function uploadListrik(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_listrik_keuangan',$nama_file);

		// import data
		Excel::import(new ListrikImport, public_path('/file_listrik_keuangan/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data Listrik Berhasil Diimport!');
		// alihkan halaman kembali
		return redirect()->route('list_excel_listrik_keuangan');
	}

    public function uploadPam(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        
        // menangkap file excel
        $file = $request->file('file');
        
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
        
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_pam_keuangan',$nama_file);
        
        // import data
        Excel::import(new PAMImport, public_path('/file_pam_keuangan/'.$nama_file));
        
        // notifikasi dengan session
        Session::flash('sukses','Master Data PAM Berhasil Diimport!');
        // alihkan halaman kembali
        return redirect()->route('list_excel_pam_keuangan');
    }

    public function uploadPulsa(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        
        // menangkap file excel
        $file = $request->file('file');
        
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
        
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_pulsa_keuangan',$nama_file);
        
        // import data
        Excel::import(new PulsaImport, public_path('/file_pulsa_keuangan/'.$nama_file));
        
        // notifikasi dengan session
        Session::flash('sukses','Master Data Pulsa Berhasil Diimport!');
        // alihkan halaman kembali
        return redirect()->route('list_excel_pulsa_keuangan');
    }

    public function exportListrikTemplate()
	{
		return Excel::download(new ListrikExportTemplate, 'template_listrik.xlsx');
	}

    public function exportPamTemplate()
    {
        return Excel::download(new PAMExportTemplate, 'template_pam.xlsx');
    }

    public function exportPulsaTemplate()
    {
        return Excel::download(new PulsaExportTemplate, 'template_pulsa.xlsx');
    }
}

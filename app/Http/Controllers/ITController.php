<?php

namespace App\Http\Controllers;

use App\Exports\PulsaExport;
use App\Exports\PulsaExportTemplate;
use App\Exports\TvKabelExport;
use App\Exports\TVKabelExportTemplate;
use App\Imports\PulsaImport;
use App\Imports\TvKabelImport;
use App\Models\Pulsa;
use App\Models\TvKabel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class ITController extends Controller
{
    public function index()
    {
        return view('IT.dashboard_IT');
    }

    public function listPulsa()
    {
        return view('IT.list_excel_pulsa_IT');
    }

    public function listTVKabel()
    {
        return view('IT.list_excel_tv_kabel_IT');
    }

    public function profilIT()
    {
        $user = auth()->user();
        return view('IT.profil_IT', [
            'user' => $user
        ]);
    }

    public function editProfil() {
        $user = auth()->user();
        return view('IT.profile_edit', [
            'user' => $user
        ]);
    }

    public function updateProfil(Request $request) {
        $user = User::where('id', $request->oldId)->first();
        $user->name = $request->name;
        $user->id = $request->id;
        $user->save();
        return redirect()->route('profil_IT');
    }

    public function filterPulsa($filter)
    {
        $pulsa = Pulsa::where('is_verified', 1)->whereMonth('tanggal', $filter)->get();
        return view('IT.master_data_pulsa_IT', [
            'master_data_pulsa_IT' => $pulsa
        ]);
    }

    public function filterTVKabel($filter)
    {
        $tvkabel = TvKabel::where('is_verified', 1)->whereMonth('tanggal', $filter)->get();
        return view('IT.master_data_tv_kabel_IT', [
            'master_data_tv_kabel_IT' => $tvkabel
        ]);
    }

    public function exportPulsa()
    {
        return Excel::download(new PulsaExport, 'it_pulsa.xlsx');
    }

    public function exportTVKabel()
    {
        return Excel::download(new TvKabelExport, 'it_tv_kabel.xlsx');
    }

    public function importPulsa()
    {
        return view('IT.upload_file_excel_master_data_pulsa_IT');
    }

    public function importTVKabel()
    {
        return view('IT.upload_file_excel_master_data_tv_kabel_IT');
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
		$file->move('file_pulsa_it',$nama_file);

		// import data
		Excel::import(new PulsaImport, public_path('/file_pulsa_it/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data Pulsa Berhasil Diimport!');
		// alihkan halaman kembali
		return redirect()->route('list_excel_pulsa_IT');
    }

    public function uploadTVKabel(Request $request)
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
        $file->move('file_tv_kabel_it',$nama_file);
        
        // import data
        Excel::import(new TvKabelImport, public_path('/file_tv_kabel_it/'.$nama_file));
        
        // notifikasi dengan session
        Session::flash('sukses','Master Data TV Kabel Berhasil Diimport!');
        // alihkan halaman kembali
        return redirect()->route('list_excel_tv_IT');
    }

    public function exportPulsaTemplate()
    {
        return Excel::download(new PulsaExportTemplate, 'template_pulsa.xlsx');
    }

    public function exportTVKabelTemplate()
    {
        return Excel::download(new TVKabelExportTemplate, 'template_tv_kabel.xlsx');
    }
}

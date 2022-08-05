<?php

namespace App\Http\Controllers;

use App\Models\TvKabel;
use Illuminate\Http\Request;
use App\Exports\TvKabelExport;
use App\Imports\TvKabelImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TVKabelTemplateExport;
use Illuminate\Support\Facades\Session;

class TvKabelController extends Controller
{
     public function index()
	{
		$tvkabel = TvKabel::all();
		return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$tvkabel]);
	}

	public function export_excel()
	{
		return Excel::download(new TvKabelExport, 'tvkabel.xlsx');
	}


    public function import_excel(Request $request)
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
		$file->move('file_tv_kabel_IT',$nama_file);

		// import data
		Excel::import(new TvKabelImport, public_path('/file_tv_kabel_IT/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data TV Kabel IT  Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/master_data_tv_kabel_IT');
	}


public function export_excel_template()
	{
		return Excel::download(new  TVKabelTemplateExport (), 'template_tv_kabel_IT.xlsx');
	}


    public function import_excel_template(Request $request)
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
		$file->move('file_tv_kabel_IT',$nama_file);

		// import data
		Excel::import(new TvKabelImport, public_path('/file_tv_kabel_IT/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data TV Kabel IT  Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/master_data_tv_kabel_IT');
	}



}

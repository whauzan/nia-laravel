<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
//  public function index()
// 	{
// 		$pulsa = Pulsa::all();
// 		return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$pulsa]);
// 	}

// 	public function export_excel()
// 	{
// 		return Excel::download(new PulsaExport, 'pulsa.xlsx');
// 	}


//     public function import_excel(Request $request)
// 	{
// 		// validasi
// 		$this->validate($request, [
// 			'file' => 'required|mimes:csv,xls,xlsx'
// 		]);

// 		// menangkap file excel
// 		$file = $request->file('file');

// 		// membuat nama file unik
// 		$nama_file = rand().$file->getClientOriginalName();

// 		// upload ke folder file_siswa di dalam folder public
// 		$file->move('file_pulsa_keuangan',$nama_file);

// 		// import data
// 		Excel::import(new PulsaImport, public_path('/file_pulsa_IT/'.$nama_file));

// 		// notifikasi dengan session
// 		Session::flash('sukses','Master Data Pulsa IT Berhasil Diimport!');

// 		// alihkan halaman kembali
// 		return redirect('/master_data_pulsa_IT');
// 	}
}

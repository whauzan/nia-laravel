<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use App\Exports\KeuanganPulsaExport;
use App\Imports\KeuanganPulsaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use App\Exports\KeuanganPulsaExsportTemplate;

class KeuanganController extends Controller
{
 public function index()
	{
		$pulsa = Keuangan::all();
		return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$pulsa]);
	}

	public function export_excel()
	{
		return Excel::download(new KeuanganPulsaExport, 'pulsa_keuangan.xlsx');
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
		$file->move('file_pulsa_keuangan',$nama_file);

		// import data
		Excel::import(new KeuanganPulsaImport, public_path('/file_pulsa_keuangan/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data Pulsa Keuangan Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/master_data_pulsa_keuangan');
	}


public function export_excel_template()
	{
		return Excel::download(new KeuanganPulsaExsportTemplate, 'template_pulsa.xlsx');
	}




 public function filter()
    {
        $filter = Keuangan::whereMonth('tanggal', '=', date('01'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter]);
        //dd($filter);

    }

public function filter2()
    {
        $filter2 = Keuangan::whereMonth('tanggal', '=', date('02'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter2]);
        //dd($filter);

    }

    public function filter3()
    {
        $filter3 = Keuangan::whereMonth('tanggal', '=', date('03'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter3]);

    }

public function filter4()
    {
        $filter4 = Keuangan::whereMonth('tanggal', '=', date('04'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter4]);

    }

    public function filter5()
    {
        $filter5 = Keuangan::whereMonth('tanggal', '=', date('05'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter5]);


    }


public function filter6()
    {
        $filter6 = Keuangan::whereMonth('tanggal', '=', date('06'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter6]);

    }

public function filter7()
    {
        $filter7 = Keuangan::whereMonth('tanggal', '=', date('07'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter7]);

    }


public function filter8()
    {
        $filter8 = Keuangan::whereMonth('tanggal', '=', date('08'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter8]);

    }

    public function filter9()
    {
        $filter9 = Keuangan::whereMonth('tanggal', '=', date('09'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter9]);

    }

    public function filter10()
    {
        $filter10 = Keuangan::whereMonth('tanggal', '=', date('10'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter10]);

    }

     public function filter11()
    {
        $filter11 = Keuangan::whereMonth('tanggal', '=', date('11'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter11]);

    }

  public function filter12()
    {
        $filter12 = Keuangan::whereMonth('tanggal', '=', date('12'))
                        ->get();
       return view('Keuangan.master_data_pulsa_keuangan',['master_data_pulsa_keuangan'=>$filter12]);

    }




}

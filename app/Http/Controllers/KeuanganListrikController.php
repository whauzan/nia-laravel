<?php

namespace App\Http\Controllers;

use App\Models\Listrik;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KeuanganListrikExport;
use App\Imports\KeuanganListrikImport;
use Illuminate\Support\Facades\Session;
use App\Exports\KeuanganListrikExportTemplate;

class KeuanganListrikController extends Controller
{
        public function index()
	{
		$listrik = Listrik::all();
		return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$listrik]);
	}

	public function export_excel()
	{
		return Excel::download(new KeuanganListrikExport, 'listrik_keuangan.xlsx');
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
		$file->move('file_listrik_keuangan',$nama_file);

		// import data
		Excel::import(new KeuanganListrikImport, public_path('/file_listrik_keuangan/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data PAM Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/master_data_listrik_keuangan');
	}


public function export_excel_template()
	{
		return Excel::download(new KeuanganListrikExportTemplate, 'template_listrik.xlsx');
	}




 public function filter()
    {
        $filter = Listrik::whereMonth('tanggal', '=', date('01'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter]);
        //dd($filter);

    }

public function filter2()
    {
        $filter2 = Listrik::whereMonth('tanggal', '=', date('02'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter2]);
        //dd($filter);

    }

    public function filter3()
    {
        $filter3 = Listrik::whereMonth('tanggal', '=', date('03'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter3]);

    }

public function filter4()
    {
        $filter4 = Listrik::whereMonth('tanggal', '=', date('04'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter4]);

    }

    public function filter5()
    {
        $filter5 = Listrik::whereMonth('tanggal', '=', date('05'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter5]);


    }


public function filter6()
    {
        $filter6 = Listrik::whereMonth('tanggal', '=', date('06'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter6]);

    }

public function filter7()
    {
        $filter7 = Listrik::whereMonth('tanggal', '=', date('07'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter7]);

    }


public function filter8()
    {
        $filter8 = Listrik::whereMonth('tanggal', '=', date('08'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter8]);

    }

    public function filter9()
    {
        $filter9 = Listrik::whereMonth('tanggal', '=', date('09'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter9]);

    }

    public function filter10()
    {
        $filter10 = Listrik::whereMonth('tanggal', '=', date('10'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter10]);

    }

     public function filter11()
    {
        $filter11 = Listrik::whereMonth('tanggal', '=', date('11'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter11]);

    }

  public function filter12()
    {
        $filter12 = Listrik::whereMonth('tanggal', '=', date('12'))
                        ->get();
       return view('Keuangan.master_data_listrik_keuangan',['master_data_listrik_keuangan'=>$filter12]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pulsa;
use App\Exports\PulsaExport;
use App\Imports\PulsaImport;
use Illuminate\Http\Request;
use App\Exports\PulsaTemplateExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PulsaController extends Controller
{
   public function index()
	{
		$pulsa = Pulsa::all();
		return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$pulsa]);
	}

	public function export_excel()
	{
		return Excel::download(new PulsaExport, 'pulsa.xlsx');
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
		$file->move('file_pulsa_IT',$nama_file);

		// import data
		Excel::import(new PulsaImport, public_path('/file_pulsa_IT/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Master Data Pulsa IT Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/master_data_pulsa_IT');
	}

public function export_excel_template()
	{
		return Excel::download(new PulsaTemplateExport, 'template_pulsa.xlsx');
	}




 public function filter()
    {
        $filter = Pulsa::whereMonth('tanggal', '=', date('01'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter]);
        //dd($filter);

    }

public function filter2()
    {
        $filter2 = Pulsa::whereMonth('tanggal', '=', date('02'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter2]);
        //dd($filter);

    }

    public function filter3()
    {
        $filter3 = Pulsa::whereMonth('tanggal', '=', date('03'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_kabel_IT'=>$filter3]);

    }

public function filter4()
    {
        $filter4 = Pulsa::whereMonth('tanggal', '=', date('04'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter4]);

    }

    public function filter5()
    {
        $filter5 = Pulsa::whereMonth('tanggal', '=', date('05'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter5]);


    }


public function filter6()
    {
        $filter6 = Pulsa::whereMonth('tanggal', '=', date('06'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter6]);

    }

public function filter7()
    {
        $filter7 = Pulsa::whereMonth('tanggal', '=', date('07'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter7]);

    }


public function filter8()
    {
        $filter8 = Pulsa::whereMonth('tanggal', '=', date('08'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter8]);

    }

    public function filter9()
    {
        $filter9 = Pulsa::whereMonth('tanggal', '=', date('09'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter9]);

    }

    public function filter10()
    {
        $filter10 = Pulsa::whereMonth('tanggal', '=', date('10'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter10]);

    }

     public function filter11()
    {
        $filter11 = Pulsa::whereMonth('tanggal', '=', date('11'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter11]);

    }

  public function filter12()
    {
        $filter12 = Pulsa::whereMonth('tanggal', '=', date('12'))
                        ->get();
       return view('IT.master_data_pulsa_IT',['master_data_pulsa_IT'=>$filter12]);

    }


}

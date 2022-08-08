<?php

namespace App\Http\Controllers;

use App\Models\TvKabel;
use Illuminate\Http\Request;
use App\Exports\TvKabelExport;
use App\Imports\TvKabelImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TVKabelTemplateExport;
use App\Imports\TvKabelTemplateImport;
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
		return Excel::download(new TvKabelTemplateExport, 'template.xlsx');
	}


 public function filter()
    {
        $filter = TvKabel::whereMonth('tanggal', '=', date('01'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter]);
        //dd($filter);

    }

public function filter2()
    {
        $filter2 = TvKabel::whereMonth('tanggal', '=', date('02'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter2]);
        //dd($filter);

    }

    public function filter3()
    {
        $filter3 = TvKabel::whereMonth('tanggal', '=', date('03'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter3]);


    }

public function filter4()
    {
        $filter4 = TvKabel::whereMonth('tanggal', '=', date('04'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter4]);

    }

    public function filter5()
    {
        $filter5 = TvKabel::whereMonth('tanggal', '=', date('05'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter5]);


    }


public function filter6()
    {
        $filter6 = TvKabel::whereMonth('tanggal', '=', date('06'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter6]);

    }

public function filter7()
    {
        $filter7 = TvKabel::whereMonth('tanggal', '=', date('07'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter7]);

    }


public function filter8()
    {
        $filter8 = TvKabel::whereMonth('tanggal', '=', date('08'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter8]);

    }

    public function filter9()
    {
        $filter9 = TvKabel::whereMonth('tanggal', '=', date('09'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter9]);

    }

    public function filter10()
    {
        $filter10 = TvKabel::whereMonth('tanggal', '=', date('10'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter10]);

    }

     public function filter11()
    {
        $filter11 = TvKabel::whereMonth('tanggal', '=', date('11'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter11]);

    }

  public function filter12()
    {
        $filter12 = TvKabel::whereMonth('tanggal', '=', date('12'))
                        ->get();
       return view('IT.master_data_tv_kabel_IT',['master_data_tv_kabel_IT'=>$filter12]);

    }



}

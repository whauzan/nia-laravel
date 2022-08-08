<?php

namespace App\Exports;

use App\Models\TvKabel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TvKabelExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TvKabel::all();
    }

    public function headings() :array
    {
        return [ 'idDataTvkabel',
                 'nomor_pegawai',
                  'nama',
                   'nomor_hp',
                    'jenis_tv',
                    'pemakaian',
                    'plafon',
                    'roaming_ln',
                    'beban_pegawai',
                    'beban_perusahaan',
                    'tagihan',
                    'tanggal'];
    }


}

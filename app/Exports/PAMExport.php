<?php

namespace App\Exports;

use App\Models\PAM;
use App\Models\Keuangan;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PAMExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PAM::where('is_verified', 1)->get();
    }


     public function headings(): array
    {
        return [
        'idDataPam',
        'nomor_pegawai',
        'nama',
        'alamat',
        'nomor_rekening',
        'pemakaian',
        'plafon',
        'beban_perusahaan',
        'keterangan',
        'tanggal'
        ];
    }

}

<?php

namespace App\Exports;

use App\Models\PAM;
use App\Models\Keuangan;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeuanganPAMExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PAM::all();
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

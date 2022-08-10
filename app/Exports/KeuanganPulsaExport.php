<?php

namespace App\Exports;

use App\Models\Keuangan;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeuanganPulsaExport implements FromCollection,  WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Keuangan::all();
    }

      public function headings(): array
    {
        return [
            'idDataPulsa',
            'nomor_pegawai',
            'nama',
            'nomor_hp',
            'pemakaian',
            'plafon',
            'roaming_ln',
            'beban_pegawai',
            'beban_perusahaan',
            'tagihan',
            'tanggal'
        ];
    }
}

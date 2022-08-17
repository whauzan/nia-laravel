<?php

namespace App\Exports;

use App\Models\Pulsa;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PulsaExport implements FromCollection,  WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pulsa::where('is_verified', 1)->get();
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

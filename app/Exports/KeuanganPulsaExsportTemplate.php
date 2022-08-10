<?php

namespace App\Exports;

use App\Models\Keuangan;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

// class KeuanganPulsaExsportTemplate implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Keuangan::all();
//     }
// }


class KeuanganPulsaExsportTemplate implements FromArray, WithHeadings
{
    /**
     * @return array
     */
    public function array(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'idDataPulsa',
            'nomor_pegawai',
            'nama',
            'nomor_hp',
            'nomor_id',
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

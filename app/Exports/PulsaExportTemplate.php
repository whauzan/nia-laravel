<?php

namespace App\Exports;

use App\Models\Pulsa;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

// class PulsaTemplateExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Pulsa::all();
//     }
// }

class PulsaExportTemplate implements FromArray, WithHeadings
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

<?php

namespace App\Exports;

use App\Models\TvKabel;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

// class TVKabelTemplateExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//          return TvKabel::all();
//     }
// }
class TVKabelExportTemplate implements FromArray, WithHeadings
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
            'jenis_tv',
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

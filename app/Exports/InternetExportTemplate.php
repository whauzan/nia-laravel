<?php

namespace App\Exports;

use App\Models\Internet;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

// class KeuanganInternetExportTemplate implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Internet::all();
//     }
// }
class InternetExportTemplate implements FromArray, WithHeadings
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
        'nomor_hp',
        'pemakaian',
        'biaya_admin',
        'total',
        'tanggal',
        ];
    }
}

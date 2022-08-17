<?php

namespace App\Exports;

use App\Models\Listrik;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

// class KeuanganListrikExportTemplate implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Listrik::all();
//     }
// }
class ListrikExportTemplate implements FromArray, WithHeadings
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
        'alamat',
        'nomor_kontrol',
        'tagihan',
        'biaya_admin',
        'pemakaian_FG',
        'pemakaian',
        'plafon',
        'beban_pegawai',
        'beban_perusahaan',
        'keterangan',
        'tanggal',
        ];
    }
}

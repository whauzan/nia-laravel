<?php

namespace App\Exports;

use App\Models\Listrik;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ListrikExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Listrik::where('is_verified', 1)->get();
    }

     public function headings(): array
    {
        return [
        'idDataListrik',
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

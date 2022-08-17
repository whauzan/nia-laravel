<?php

namespace App\Exports;

use App\Models\Internet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class InternetExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Internet::where('is_verified', 1)->get();
    }

     public function headings(): array
    {
        return [
        'idDataInternet',
        'nomor_hp',
        'pemakaian',
        'biaya_admin',
        'total',
        'tanggal',
        ];
    }
}

<?php

namespace App\Exports;

use App\Models\Pulsa;
use Maatwebsite\Excel\Concerns\FromCollection;

class PulsaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pulsa::all();
    }
}

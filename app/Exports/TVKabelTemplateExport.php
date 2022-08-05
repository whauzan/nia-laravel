<?php

namespace App\Exports;

use App\Models\TvKabel;
use Maatwebsite\Excel\Concerns\FromCollection;

class TVKabelTemplateExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return TvKabel::all();
    }
}

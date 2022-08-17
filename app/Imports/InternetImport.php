<?php

namespace App\Imports;

use App\Models\Internet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class InternetImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Internet([
            'nomor_hp'=>$row[0],
            'pemakaian'=>$row[1],
            'biaya_admin'=>$row[2],
            'total'=>$row[3],
            'tanggal'=>transformDate($row[4]),
        ]);
    }

      public function startRow(): int
     {
        return 2;
    }
}

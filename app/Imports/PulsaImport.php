<?php

namespace App\Imports;

use App\Models\Pulsa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PulsaImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pulsa([
            'nomor_pegawai'=>$row[0],
            'nama'=>$row[1],
            'no_hp'=>$row[2],
            'pemakaian'=>$row[3],
            'plafon'=>$row[4],
            'roaming_ln'=>$row[5],
            'beban_pegawai'=>$row[6],
            'beban_perusahaan'=>$row[7],
            'tagihan'=>$row[8],
            'tanggal'=>transformDate($row[9]),
        ]);
    }

      public function startRow(): int
     {
        return 2;
    }
}

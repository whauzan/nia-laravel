<?php

namespace App\Imports;

use App\Models\TvKabel;
use Maatwebsite\Excel\Concerns\ToModel;

class TvKabelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TvKabel([
           'nomor_pegawai'=>$row[1],
            'nama'=>$row[2],
            'nomor_hp'=>$row[3],
            'pemakaian'=>$row[4],
            'plafon'=>$row[5],
            'roaming_ln'=>$row[6],
            'beban_pegawai'=>$row[7],
            'beban_perusahaan'=>$row[8],
        ]);
    }
}

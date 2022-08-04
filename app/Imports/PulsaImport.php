<?php

namespace App\Imports;

use App\Models\Pulsa;
use Maatwebsite\Excel\Concerns\ToModel;

class PulsaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pulsa([
             'idDataTvkabel'=>$row[0],
            'nomor_pegawai'=>$row[1],
            'nama'=>$row[2],
            'nomor_hp'=>$row[3],
            'pemakaian'=>$row[4],
            'plafon'=>$row[5],
            'roaming_ln'=>$row[6],
            'beban_pegawai'=>$row[7],
            'beban_perusahaan'=>$row[8],
            'tagihan'=>$row[9],
            'tanggal'=>$row[10],
        ]);
    }
}

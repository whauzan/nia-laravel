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
            'idDataTvkabel'=>$row[0],
            'nomor_pegawai'=>$row[1],
            'nama'=>$row[2],
            'nomor_hp'=>$row[3],
            'jenis_tv'=>$row[4],
            'pemakaian'=>$row[5],
            'plafon'=>$row[6],
            'roaming_ln'=>$row[7],
            'beban_pegawai'=>$row[8],
            'beban_perusahaan'=>$row[9],
            'tagihan'=>$row[10],
            'tanggal'=>$row[11],
        ]);
    }



}

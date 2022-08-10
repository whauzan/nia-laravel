<?php

namespace App\Imports;

use App\Models\Keuangan;
use App\Models\PAM;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class KeuanganPAMImportTemplate implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PAM([

        'idDataPam'=>$row[0],
        'nomor_pegawai'=>$row[1],
        'nama'=>$row[2],
        'alamat'=>$row[3],
        'nomor_rekening'=>$row[4],
        'pemakaian'=>$row[5],
        'plafon'=>$row[6],
        'beban_perusahaan'=>$row[7],
        'keterangan'=>$row[8],
        'tanggal'=>$row[9],
        ]);
    }

     public function startRow(): int
     {
        return 2;
    }
}

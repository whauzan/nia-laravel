<?php

namespace App\Imports;

use App\Models\Keuangan;
use App\Models\PAM;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PAMImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PAM([
        'nomor_pegawai'=>$row[0],
        'nama'=>$row[1],
        'alamat'=>$row[2],
        'nomor_rekening'=>$row[3],
        'pemakaian'=>$row[4],
        'plafon'=>$row[5],
        'beban_perusahaan'=>$row[6],
        'keterangan'=>$row[7],
        'tanggal'=>transformDate($row[8]),
        ]);
    }

      public function startRow(): int
     {
        return 2;
    }

}

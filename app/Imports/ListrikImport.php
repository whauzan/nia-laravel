<?php

namespace App\Imports;

use App\Models\Listrik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ListrikImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Listrik([
            'nomor_pegawai'=>$row[0],
            'nama'=>$row[1],
            'alamat'=>$row[2],
            'nomor_kontrol'=>$row[3],
            'tagihan'=>$row[4],
            'biaya_admin'=>$row[5],
            'pemakaian_FG'=>$row[6],
            'pemakaian'=>$row[7],
            'plafon'=>$row[8],
            'beban_pegawai'=>$row[9],
            'beban_perusahaan'=>$row[10],
            'keterangan'=>$row[11],
            'tanggal'=>transformDate($row[12]),
        ]);
    }

      public function startRow(): int
     {
        return 2;
    }
}

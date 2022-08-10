<?php

namespace App\Imports;

use App\Models\Listrik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class KeuanganListrikImportTemplate implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Listrik([
             'idDataListrik'=>$row[0],
            'nomor_pegawai'=>$row[1],
            'nama'=>$row[2],
            'alamat'=>$row[3],
            'nomor_kontrol'=>$row[4],
            'tagihan'=>$row[5],
            'biaya_admin'=>$row[6],
            'pemakaian_FG'=>$row[7],
            'pemakaian'=>$row[8],
            'plafon'=>$row[9],
            'beban_pegawai'=>$row[10],
            'beban_perusahaan'=>$row[11],
            'keterangan'=>$row[12],
            'tanggal'=>$row[13],
        ]);
    }

      public function startRow(): int
     {
        return 2;
    }
}

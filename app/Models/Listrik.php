<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listrik extends Model
{
     protected $table = "listriks";
    protected $fillable = [
    'idDataListrik',
    'nomor_pegawai',
    'nama',
    'alamat',
    'nomor_kontrol',
    'tagihan',
    'biaya_admin',
    'pemakaian_FG',
    'pemakaian',
    'plafon',
    'beban_pegawai',
    'beban_perusahaan',
    'keterangan',
    'tanggal',
    ];
}

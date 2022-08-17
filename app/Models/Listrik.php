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
        'pemakaian',
        'biaya_admin',
        'pemakaian_FG',
        'plafon',
        'beban_pegawai',
        'beban_perusahaan',
        'keterangan',
        'tanggal',
        'is_verified',
    ];
    protected $primaryKey = 'idDataListrik';
}

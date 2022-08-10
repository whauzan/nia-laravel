<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PAM extends Model
{
   protected $table = "pams";

    protected $fillable = [
        'idDataPam',
        'nomor_pegawai',
        'nama',
        'alamat',
        'nomor_rekening',
        'pemakaian',
        'plafon',
        'beban_perusahaan',
        'keterangan',
        'tanggal'
    ];
}

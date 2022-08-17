<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    protected $table = "pulsas";

    protected $fillable = [
        'idDataPulsa',
        'nomor_pegawai',
        'nama',
        'no_hp',
        'pemakaian',
        'plafon',
        'roaming_ln',
        'beban_pegawai',
        'beban_perusahaan',
        'tagihan',
        'tanggal',
        'is_verified',
    ];

    protected $primaryKey = 'idDataPulsa';
}

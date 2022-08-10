<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = "pulsa_keuangan";

    protected $fillable = [
    'idDataPulsa',
    'nomor_pegawai',
    'nama',
    'nomor_hp',
    'pemakaian',
    'plafon',
    'roaming_ln',
    'beban_pegawai',
    'beban_perusahaan',
    'tagihan',
    'tanggal'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvKabel extends Model
{
    protected $table = "tvkabels";

    protected $fillable = [
        'idDataTvkabel',
        'nomor_pegawai',
        'nama',
        'no_hp',
        'jenis_tv',
        'pemakaian',
        'plafon',
        'roaming_ln',
        'beban_pegawai',
        'beban_perusahaan',
        'tagihan',
        'tanggal',
        'is_verified',
    ];

    protected $primaryKey = 'idDataTvkabel';
}

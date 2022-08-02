<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvKabel extends Model
{
  protected $table = "tvkabels";

    protected $fillable = [
    'nomor_pegawai',
    'nama',
    'nomor_hp',
    'pemakaian',
    'plafon',
    'roaming_ln',
    'beban_pegawai',
    'beban_perusahaan',
    ];
}

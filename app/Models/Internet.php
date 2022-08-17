<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    // use HasFactory;
    protected $table = "internets";
    protected $fillable = [
        'idDataInternet',
        'nomor_hp',
        'pemakaian',
        'biaya_admin',
        'total',
        'tanggal',
        'is_verified',
    ];
    protected $primaryKey = 'idDataInternet';
}

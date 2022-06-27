<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi3 extends Model
{
    use HasFactory;

    protected $table = 'registrasi';
    
    protected $fillable = [
        'resto_id','lokasi_meja', 'jenis_meja', 'jumlah_meja',
    ];
}

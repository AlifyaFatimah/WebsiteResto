<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_riwayat extends Model
{
    use HasFactory;
    protected $table = 'transaksi_riwayat';
    protected $primaryKey ='idReservasi';
    protected $fillable = [
        'idReservasi', 'resto_id', 'idCust', 'date_reservasi', 'time_reservasi', 'no_table'
    ];
}

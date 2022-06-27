<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_masuk extends Model
{
    use HasFactory;
    protected $table = 'transaksi_masuk';
    protected $primaryKey ='idReservasi';
    protected $fillable = [
        'idReservasi', 'resto_id', 'idCust', 'date_reservasi', 'time_reservasi', 'no_table'
    ];
    // public static function insertData($data){
    //     $value=tubes_abp::table('transaksi_masuk')->('idReservasi', $data['idReservasi'])->get();
    //     if($value->count() == 0){
    //         $insertData = tubes_abp::table('transaksi_masuk')->insertGetId($data);
    //         return $insertData;
    //     }else{
    //         return 0;
    //     }
    // }

    // public static function deleteData($id=0){
    //     tubes_abp::table('transaksi_masuk')->where('idReservasi','=',$id)->delete();
    // }
}

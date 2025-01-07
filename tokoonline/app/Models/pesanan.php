<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'id_barang', 
        'total_harga', 
        'tanggal',
        'jumlah_barang',
    ];
    public function user(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
    public function barang(){
        return $this->belongsTo('App\barang', 'id_barang', 'id_barang');
    }
}

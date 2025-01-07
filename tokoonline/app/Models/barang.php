<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    public function pesanan(){
        return $this->hasMany('App/pesanan','id_barang', 'id_barang');
    }
}

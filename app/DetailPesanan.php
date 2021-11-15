<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    public function barang(){
        return $this->belongsTo('App\Barang','id_barang', 'id');
    }

    public function pesanan(){
        return $this->belongsTo('App\Pesanan','id_pesanan', 'id');
    }
}

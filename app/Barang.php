<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function detail_pesanan() {
        return $this->hasMany('App\DetailPesanan','id_barang', 'id');
    }
}

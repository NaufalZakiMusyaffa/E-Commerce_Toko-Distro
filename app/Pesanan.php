<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user(){
        return $this->belongsTo('App\User','id_user', 'id');
    }

    public function detail_pesanan() {
        return $this->hasMany('App\DetailPesanan','id_pesanan', 'id');
    }

}

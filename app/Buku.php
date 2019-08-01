<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function pasoks(){
    	return $this->hasMany('App\Pasok');
    }

    public function penjualans(){
    	return $this->hasMany('App\Penjualan');
    }
}

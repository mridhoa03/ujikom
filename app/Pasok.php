<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    public function pasok(){
    	return $this->belongsTo('App\Pasok');
    }
}

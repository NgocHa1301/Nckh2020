<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diemchuan extends Model
{
    //
    public function TinTuc()
    {
    	return $this->hasMany('App\TinTuc','idDiemChuan','id');
    }
}

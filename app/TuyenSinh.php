<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuyenSinh extends Model
{
    //
    protected $table = "TuyenSinh";
    public function TinTuc()
    {
    	return $this->hasMany('App\TinTuc','idTuyenSinh','id');
    }
}

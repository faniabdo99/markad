<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hijen extends Model{
    protected $guarded = [];
    public function section(){
        return $this->belongsTo('App/HijenSection' , 'section');
    }
}

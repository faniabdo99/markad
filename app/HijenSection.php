<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Hijen;
class HijenSection extends Model{
    protected $guarded = [];
    public function Articles(){
        return $this->hasMany('App\Hijen' , 'section');
    }
}

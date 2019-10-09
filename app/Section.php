<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function Posts(){
        return $this->hasMany('App\Post' , 'p_section');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $fillable = ['is_important'];
    protected $table = 'posts';
    protected $dates = ['created_at', 'updated_at'];
    public function Author(){
        return $this->belongsTo('App\User' , 'author_id')->withDefault([
            'name' => 'غير معروف / محذوف'
        ]);
    }
    public function Section(){
        return $this->belongsTo('App\Section' , 'p_section')->withDefault([
            's_title' => 'قسم محذوف'
        ]);
    }
}

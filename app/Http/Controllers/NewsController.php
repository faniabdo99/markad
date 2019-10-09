<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class NewsController extends Controller{

    public function getIndex(){
        $ImportantPosts = Post::where('is_important' , 1)->get();
        $SuperImportant = Post::where('is_important' , 2)->first();
        $AllPosts = Post::OrderBy('created_at' , 'desc')->paginate(10);
        return view('blog.index')->with(['AllPosts' => $AllPosts , 'ImportantPosts' => $ImportantPosts , 'SuperImportant' => $SuperImportant]);

    }

    public function getSingle($slug){
        $PostDetailes = Post::where('p_slug' , $slug)->first();
        return view('blog.single')->with(['PostDetailes' => $PostDetailes]);
    }

}





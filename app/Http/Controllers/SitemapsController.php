<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Post;
class SitemapsController extends Controller{
    public function getSitemap(){
        $Posts = new Post;
        $AllPosts = $Posts::all();
        return response()->view('layout.sitemap' , ['AllPosts' => $AllPosts] )->header('Content-Type', 'text/xml');
    }
    
}

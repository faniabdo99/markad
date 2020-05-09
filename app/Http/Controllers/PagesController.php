<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\HijenSection;
class PagesController extends Controller{
  public function ChangeLanguage($locale){
      if (in_array($locale, \Config::get('app.locales'))) {
        session(['locale' => $locale]);
      }
      return redirect()->back();

  }
    public function getLandingPage(){
      $ThreePosts = Post::orderBy('created_at' , 'desc')->where('id' , '!=' , 1)->limit(5)->get();
      return view('LandingPage' , compact('ThreePosts'));
    }
    public function getContest(){
      return view('contest');
    }
    public function getContactPage(){
      return view('contact');
    }

    public function getPrivacy(){
      return view('privacy');
    }

}

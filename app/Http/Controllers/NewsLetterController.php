<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetter;
class NewsLetterController extends Controller{
    public function postNewsLetter(Request $r){
        //Check if Already Exists
        $CheckEmail = NewsLetter::where('email' , $r->email)->first();
        if(isset($CheckEmail->exists)){
            $arr = array('msg' => '<p class="success">'.__('LandingPage.NewsLetterExists').'</p>');
            return Response()->json($arr);
        }else{
            $data = $r->all();
            $NewsLetter = new NewsLetter();
            $NewsLetter->email = $r->email;
            $check = $NewsLetter->save();
            $arr = array('msg' => '<p class="error">'.__('LandingPage.NewsLetterFailur').'</p>');
            if($check){ 
            $arr = array('msg' => '<p class="success">'.__('LandingPage.NewsLetterSuccess').'</p>');
            }
            return Response()->json($arr);
        }
     
    }
}

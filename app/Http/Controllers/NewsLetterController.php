<?php

namespace App\Http\Controllers;
use Validator;
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
            //Validate is an Email 
            $Validator = Validator::make($data , ['email' => 'required|email']);
            if($Validator->fails()){
                $arr = array('msg' => '<p class="error">'.__('LandingPage.NewsletterEmailInvalid').'</p>');
            }else{
                $NewsLetter = new NewsLetter();
                $NewsLetter->email = $r->email;
                $check = $NewsLetter->save();
                $arr = array('msg' => '<p class="error">'.__('LandingPage.NewsLetterFailur').'</p>');
                if($check){ 
                $arr = array('msg' => '<p class="success">'.__('LandingPage.NewsLetterSuccess').'</p>');
                }
            }
            return Response()->json($arr);
        }
     
    }
    public function getOutNewsLetter(){
        return view('newsletter-out');
    }
    public function postOutNewsLetter(Request $r){
        if($r->email == null or empty($r->email) or $r->email == ""){
            return back()->withErrors(trans('Pages.NewsletterLeaveEmailRequired'));
        }else{
            $NewsLetter = NewsLetter::where('email' , $r->email)->first();
            if(isset($NewsLetter->exists)){
                $NewsLetter->delete();
                return back()->withSuccess(trans('Pages.NewsletterLeaveDeleted'));
            }else {
                return back()->withErrors(trans('Pages.NewsletterLeaveNotFound'));
            }
        }
    }
}

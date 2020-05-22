<?php
//The Father Of All Controllers ...
namespace App\Http\Controllers;
//Additionall Needed Facades
use Illuminate\Http\Request;
use Mail;
//Models
use App\Message;
//Mails
use App\Mail\ContactNoticeMail;
class ContactController extends Controller{
      //Get Request From User and Validate it
      public function ProccessContact(Request $r){
        //Get the Message Type
        ($r->has('sendSupport') ? $isSupportTicket = true : $isSupportTicket = false);
        //Validate The Data
        $Validator = $r->validate([
          'user_name' => 'required|max:255|min:10',
          'user_contact_method' => 'required|max:255',
          'message' => 'required|min:10',
          'captcha' => 'required',
          'captcha_res' => 'required'
        ] , [
          'user_name.required' => 'Username is required',
          'user_name.max' => 'Username can\'t be more than 255 letters',
          'user_name.min' => 'Username can\'t be less than 10 letters',
          'user_contact_method.required' => 'Contact method is required',
          'user_contact_method.max' => 'Contact method can\'t be more than 255 letters',
          'message.required' => 'The message is required',
          'message.min' => 'Message can\'t be less than 10 letters'
        ]);
        //The Validator Passed , Insert The Data
        if($r->captcha == $r->captcha_res){
          //The Captcha Passed ...
          $Message = new Message();
          $Message->user_name = $r->user_name;
          $Message->user_contact_method = $r->user_contact_method;
          $Message->message = $r->message;
          $Message->is_support_ticket = $isSupportTicket;
          $Message->save();
          //Mail The Admin About The New Message Here.
          Mail::to('salem@markadracing.com')->send(new ContactNoticeMail($r->all()));
          return back()->withSuccess('Your Message Has Been Recived , Thank You !');
        }else{
          return back()->with('captcha_error','Wrong Captcha Answer ! Try Again');
        }



      }

}

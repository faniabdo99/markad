<?php
//The Father Of All Controllers ...
namespace App\Http\Controllers;
//Additionall Needed Facades
use Illuminate\Http\Request;
//Models
use App\Message;
class ContactController extends Controller{

      //Get Request From User and Validate it
      public function ProccessContact(Request $r){
        //Get the Message Type
        ($r->has('sendSupport') ? $isSupportTicket = true : $isSupportTicket = false);
        //Validate The Data
        $Validator = $r->validate([
          'user_name' => 'required|max:255|min:10',
          'user_contact_method' => 'required|max:255',
          'message' => 'required|min:10'
        ]);
        //The Validator Passed , Insert The Data
        $Message = new Message();
        $Message->user_name = $r->user_name;
        $Message->user_contact_method = $r->user_contact_method;
        $Message->message = $r->message;
        $Message->is_support_ticket = $isSupportTicket;
        $Message->save();
        //Mail The Admin About The New Message Here.
        return back()->withSuccess('Your Message Has Been Recived , Thank You !');


      }

}

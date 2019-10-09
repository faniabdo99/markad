<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Post;
use App\NewsLetter;


class BlogController extends Controller{
    public function getIndex(){
        if(Post::where('is_important', 1)->first() === null){
         $ImportantPost = Post::OrderBy('p_views','desc')->first();
        }else{
            $ImportantPost = Post::where('is_important', 1)->first();
        }
        $AllPosts = Post::OrderBy('created_at' , 'desc')->paginate(10);
        return view('blog.index')->with(['PageTitle' => 'المدونة',
                                         'PageDescription' => 'تعرف على جديد الموقع عبر هذه المدونة',
                                         'ImportantPost' => $ImportantPost,
                                         'AllPosts' => $AllPosts]);
    }

    public function getSingle($slug){
        $PostDetailes = Post::where('p_slug' , $slug)->first();
        return view('blog.single')->with(['PageTitle' => 'المدونة',
                                          'PageDescription' => 'تعرف على جديد الموقع عبر هذه المدونة',
                                          'PostDetailes' => $PostDetailes]);
    }

    public function joinNewsLetter(Request $request){
        //Validate the Data Befor Posting to DB
        $NewsletterEmailRules = [
            'email' => 'required|email',
        ];
        $ValidatorErros = [
            'email.required' => 'يرجى ادخال بريدك الإلكتروني' ,
            'email.email' => 'يجب أن تدخل بريد الكتروني صحيح'  
        ];
        $validatedData = Validator::make( $request->all(), $NewsletterEmailRules, $ValidatorErros );
        if($validatedData->fails()){
            $response = "<b class='text-danger'>البريد الإلكتروني الذي قمت بادخاله غير صالح</b>";
        }else{
            $Newsletter = new NewsLetter();
            //Check if there is a record
            $Duplicates = $Newsletter::where('email' , $request->input('email'))->first();
            if($Duplicates){
                $response = "<b class='text-warning'>انت مشترك فعلاً في القائمة البريدية</b>";
            }else{
                $Newsletter->email = $request->input('email');
                $Newsletter->save();
                $response ="<b class='text-success'>تمت اضافتك بنجاح الى القائمة البريدية</b>";
            }
        }
        return response()->json($response);
     

    }
}

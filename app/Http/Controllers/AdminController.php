<?php
//Name Spaced
namespace App\Http\Controllers;
//Facades
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
//Models
use App\Post;
use App\Message;


class AdminController extends Controller{
    //Get the All Posts Page (Index)
    public function getIndex(){
        $AllPosts = Post::all();
        $AllMessages = Message::all();
        $Tickets = Message::where('is_support_ticket' , 1)->get();
        $Archived = Message::where('is_archived' , 1)->get();
        return view('admin.index')->with(['PageTitle' => 'لوحة التحكم','PageDescription' => 'صفحة خاصة بلوحة تحكم المدير' , 'AllPosts' => $AllPosts , 'AllMessages' => $AllMessages , 'Tickets' => $Tickets , 'Archived' => $Archived ]);
    }
    //Get the new post page (the form)
    public function getNewPost(){
        return view('admin.newPost')->with(['PageTitle' => 'لوحة التحكم - مقال جديد','PageDescription' => 'صفحة خاصة بلوحة تحكم المدير' ]);
    }
    public function getAllPosts(){
        $Post = new Post;
        $AllPosts = $Post::all();
        return view('admin.allPosts')->with(['PageTitle' => 'لوحة التحكم - جميع المنشورات','PageDescription' => 'صفحة خاصة بلوحة تحكم المدير' , 'AllPosts' => $AllPosts]);
    }

    public function UploadPost(Request $request){
        //Validate the Data Befor Posting to DB
        $BlogPostRules = [
            'p_title' => 'required|max:255',
            'p_slug' => 'required|unique:posts,p_slug',
            'p_keywords' => 'required',
            'p_description' => 'required|max:800',
            'p_body' => 'required',
            'p_image' => 'image'
        ];
        $ValidatorErros = [
            'p_title.required' => 'لا يمكن لحقل عنوان المقال أن يكون فارغاً' ,
            'p_title.max' => 'لا يمكن لحقل عنوان المقال أن يزيد عن 255 حرف' ,
            'p_slug.required' => 'لا يمكن لحقل رابط المقال أن يكون فارغاً' ,
            'p_slug.unique' => 'رابط المقال مكرر , يرجى تغيير الرابط و اعادة المحاولة' ,
            'p_image.image' => 'الملف الذي تحاول رفعه ليس صورة' ,
            'p_keywords.required' => 'لا يمكن لحقل الكلمات المفتاحية أن يكون فارغاً' ,
            'p_description.required' => 'لا يمكن لحقل شرح المقال المختصر أن يكون فارغاً' ,
            'p_description.max' => 'لا يمكن لحقل شرح المقال أن يزيد عن 800 حرف' ,
            'p_body.required' => 'لا يمكن لحقل نص المقال أن يكون فارغاً' 
        ];
        $validatedData = Validator::make( $request->all(), $BlogPostRules, $ValidatorErros );
        if ($validatedData->fails()) {
            return back()->withInput()->withErrors($validatedData->errors()->all());
        }else{
            if($request->has('p_image')){
                $imageName = time().'.'.request()->p_image->getClientOriginalExtension();
                request()->p_image->move(public_path('images/blog'), $imageName);
            }else{
                $imageName = 'default.png';
            }
            $p_slug = str_replace(' ' , '-' , $request->input('p_slug'));
            $author_id = auth()->user()->id;
            //Upload to Databse
            $Post = new Post;
            $Post->p_title = $request->input('p_title');
            $Post->p_slug = $p_slug ;
            $Post->p_image = $imageName;
            $Post->p_keywords = $request->input('p_keywords');
            $Post->p_description = $request->input('p_description');
            $Post->p_body = $request->input('p_body');
            $Post->author_id = $author_id;
            $Post->save();
            return back()->with('success' , 'تم انشاء المقال الجديد بنجاح!');
            
        }
    }

    public function DeletePost($id){
        $Post = new Post; 
        $PostExist = $Post::find($id);
        if($PostExist == null){
            //Redirect back 
            return back()->withErrors('تم حذف المقال بالفعل');
        }else{
            $PostOwner = $PostExist->author_id;
            if($PostOwner == auth()->user()->id){
                echo "THis is your post and will be deleteed";
                $PostExist->delete();
                return back()->withSuccess('تم حذف المقال بنجاح');
            }else{
                return back()->withErrors('ليس لديك الصلاحيات الكافية لحذف المقال ');
            }
        }
    }

    public function EditPost($id){
        $Post = new Post;
        $ThePost = $Post::find($id);
        return view('admin.editPost')->with(['PageTitle' => 'لوحة التحكم - تحديث مقال','PageDescription' => 'صفحة خاصة بلوحة تحكم المدير' , 'ThePost' => $ThePost ]);
    }
    public function UpadatePost($id , Request $request){
        //Validate the Data Befor Posting to DB
        $BlogPostRules = [
            'p_title' => 'required|max:255',
            'p_slug' => 'required',
            'p_keywords' => 'required',
            'p_description' => 'required|max:800',
            'p_body' => 'required',
        ];
        $ValidatorErros = [
            'p_title.required' => 'لا يمكن لحقل عنوان المقال أن يكون فارغاً' ,
            'p_title.max' => 'لا يمكن لحقل عنوان المقال أن يزيد عن 255 حرف' ,
            'p_slug.required' => 'لا يمكن لحقل رابط المقال أن يكون فارغاً' ,
            'p_keywords.required' => 'لا يمكن لحقل الكلمات المفتاحية أن يكون فارغاً' ,
            'p_description.required' => 'لا يمكن لحقل شرح المقال المختصر أن يكون فارغاً' ,
            'p_description.max' => 'لا يمكن لحقل شرح المقال أن يزيد عن 800 حرف' ,
            'p_body.required' => 'لا يمكن لحقل نص المقال أن يكون فارغاً' 
        ];
        $validatedData = Validator::make( $request->all(), $BlogPostRules, $ValidatorErros );
        if ($validatedData->fails()) {
            return back()->withInput()->withErrors($validatedData->errors()->all());
        }else{
            $Post = new Post;
            $ThePost = $Post::find($id);
            $author_id = auth()->user()->id;
            $ThePost->where('id' , $id)
                    ->update([
                        'p_title' => $request->input('p_title'),
                        'p_slug' => $request->input('p_slug'),
                        'p_keywords' => $request->input('p_keywords'),
                        'p_description' => $request->input('p_description'),
                        'p_body' => $request->input('p_body'),
                        'author_id' => $author_id
                     ]);         
            return back()->with('success' , 'تم تحديث المقال بنجاح!');
    }
}

public function logout(){
    auth()->logout();
    return redirect('/');
}


//Messages Logic 
//First Function , Get All The Messages and Loop Through'em 
public function getMessages(){
    $AllMessages = Message::orderBy('is_support_ticket' , 'desc')->where('is_archived' , '!=' , '1')->get();
    $AllArchived = Message::where('is_archived' , '=' , '1')->get();
    return view('admin.messages')->with(['AllMessages' => $AllMessages , 'AllArchived' => $AllArchived]);
}
public function DeleteMessage($id){
    $MessageItSelf = Message::find($id);
    if($MessageItSelf == null){
        //Do Nothing 
        return back()->withError('Message Already Deleted');
    }else{
        $MessageItSelf->delete();
        return back()->withSuccess('Message Deleted Succefully !');
    }
}

public function ArchiveMessage($id){
    $MessageItSelf = Message::find($id);
    if($MessageItSelf->is_archived == 1){
        //Do Nothing 
        return back()->withError('Message Already Archived');
    }else{
        $MessageClass = new Message;
        $MessageClass->where('id' , $id)
                     ->update([
                        'is_archived' => 1
                     ]);
        return back()->withSuccess('Message Archived Succefully !');
    }
}

}
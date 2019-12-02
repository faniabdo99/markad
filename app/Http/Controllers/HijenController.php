<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Hijen;
use App\HijenSection;
class HijenController extends Controller{
    public function AdminAll(){
        $AllPosts = Hijen::latest()->get();
        return view('admin.hijen.all' , compact('AllPosts'));
    }
    public function getAllSections(){
        $AllSections = HijenSection::latest()->get();
        return view('admin.hijen.all-sections' , compact('AllSections'));
    }
    public function PostNewSection(Request $r){
        //Make Error Messages
        $errorMessages = [
            'title.required' => 'لا يمكن لحقل العنوان أن يكون فارغاً',
            'slug.required' => 'لا يمكن لحقل الرابط أن يكون فارغاً',
            'slug.alpha_dash' => 'لا يسمح بالفراغات في حقل الرابط',
            'image.image' => 'الملف الي قمت بتحميله ليس بصورة',
            'description.required' => 'حقل شرح القسم مطلوب'
        ];
        //Validate The Data
        $validation = Validator::make($r->all() , [
            'title' => 'required',
            'slug' => 'required|alpha_dash',
            'image' => 'file|image',
            'description' => 'required'
        ] , $errorMessages);

        if($validation->fails()){
            return back()->withErrors($validation->errors()->all());
        }else{
            $UplodadeData = $r->except(['_token' , 'image']);
            if($r->has('image')){
                $imagePath = time().'.'.$r->image->getClientOriginalExtension();
                $r->image->storeAs('images/sections' , $imagePath);
                //Deal With The Image
                $UplodadeData['image'] = $imagePath;
            }
            //All Good , Upload 
            $NewSection = HijenSection::create($UplodadeData);
            return back()->withSuccess('تم انشاء القسم بنجاح');
        }
        //Validation Passed !
    }
    public function GetNewPost(){
        $Sections = HijenSection::latest()->get();
        return view('admin.hijen.new' , compact('Sections'));
    }
    public function PostNewPost(Request $r){
        //Validate The Request
        $NewPostErrorMessages = [
            'title.required' => 'لا يمكن لحقل العنوان أن يكون فارغاً',
            'slug.required' => 'لا يمكن لحقل الرابط أن يكون فارغاً',
            'slug.alpha_dash' => 'لا يسمح بالفراغات في حقل الرابط',
            'image.image' => 'الملف الي قمت بتحميله ليس بصورة',
            'description.required' => 'حقل شرح القسم مطلوب',
            'section.required' => 'عليك اختيار أحد الأقسام',
            'body.required' => 'حقل نص المقال مطلوب'
        ];
        $validation = Validator::make($r->all() , [
            'title' => 'required',
            'slug' => 'required|alpha_dash',
            'image' => 'file|image',
            'section' => 'required',
            'description' => 'required',
            'body' => 'required'
        ] , $NewPostErrorMessages);
        if($validation->fails()){
            return back()->withErrors($validation->errors()->all());
        }else{
            //All Good , To Upload
            $UplodadeData = $r->except(['_token' , 'image' , 'file']);
            if($r->has('image')){
                $imagePath = time().'.'.$r->image->getClientOriginalExtension();
                $r->image->storeAs('images/posts' , $imagePath);
                //Deal With The Image
                $UplodadeData['image'] = $imagePath;
            }
            if($r->has('file')){
                $FilePath = time().'.'.$r->file->getClientOriginalExtension();
                $r->file->storeAs('files/posts' , $FilePath);
                //Deal With The Image
                $UplodadeData['file'] = $FilePath;
            }
            $ThePost = Hijen::create($UplodadeData);
            return back()->withSuccess('تم رفع المنشور بنجاح');
        }
    }

    //Admin Done ====================================
     public function getSingleSection($slug = null){
        if($slug == null){abort(404);}
        $SectionDetails = HijenSection::where('slug' , $slug)->first();
        $SectionPosts = HijenSection::find($SectionDetails->id)->Articles;
        return view('hijen.section' , compact('SectionDetails' , 'SectionPosts'));
    }
    public function getSinglePost($slug = null){
        if($slug == null){abort(404);}
        $PostDetails = Hijen::where('slug' , $slug)->first();
        return view('hijen.single' , compact('PostDetails'));
    }
}

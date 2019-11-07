@include('layout.header')
<body class="admin-body">
    @include('layout.navbar')
    <main>
        @php $PageName = "تعديل مقال " . $ThePost->p_title; @endphp
        @include('admin.adminHeader')
        <div class="container-fluid">
        <section class="admin-statics">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="admin-card">
                        @if ($errors->any())
                        <br>
                        <div class="errors-list">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if(session()->has('success'))
                        <br>
                            <div class="success-list">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <h4>اضافة مقال جديد</h4>
                        <form action="{{ route('admin.UpdatePost' , $ThePost->id) }}" method="POST">
                            @csrf
                            <div class="new-post-group">
                                <label>عنوان المقال</label>
                                <input maxlength="255" type="text" name="p_title" value="{{$ThePost->p_title}}" >
                                <p class="tip">ينصح ان لا يزيد عنوان المقال عن 60 حرف , وان يحتوي على كلمة معينة تستخدمها ككلمة مفتاحية طول المقال , جرب استخدام <a href="#" target="_blank">Google Trends</a> لتحديد الكلمة المفتاحية اﻷنسب</p>
                            </div>
                            <div class="new-post-group">
                                <label>رابط المقال</label>
                                <input maxlength="255" dir="rtl" type="text" name="p_slug" value="{{$ThePost->p_slug}}" >
                                <p class="tip">تعرف باسم Slug , لا بد أن تكون بالانجليزي فقط وبدون حروف غريبة , ويتم استبدال المسافات بال - او _ , مقال : how-to-do-somthing</p>
                            </div>
                            <div class="new-post-group">
                                <label>صورة المقال</label>
                                <input type="file" name="p_image">
                                <p class="tip">ينصح خبراء ال SEO ان تكون الصورة صغيرة الحجم قدر الامكان وان يكون اسم الصورة مشابه لعنوان المقال أو مطابق له</p>
                            </div>
                            <div class="new-post-group">
                                <label>الكلمات المفتاحية</label>
                                <input maxlength="255" type="text" name="p_keywords" value="{{$ThePost->p_keywords}}" >
                                <p class="tip">كلمات المقال المفتاحية يجب أن تكون مفصولة بفاصلة , مثال : برمجة , تصميم , محاسبة </p>
                            </div>
                            <div class="new-post-group">
                                <label>شرح مختصر للمقال</label>
                                <textarea maxlength="799" rows="3" name="p_description">{{$ThePost->p_description}}</textarea>
                                <p class="tip">ينصح أن لا يزيد عن 255 حرف وأن يحتوي الكلمة المفتاحية , هذا الحقل هو شرح بسيط وليس المقال بحد ذاته</p>
                            </div>
                            <div class="new-post-group">
                                <label>محتوى المقال</label>
                                <textarea name="p_body" id="editor">
                                    {{$ThePost->p_body}}
                                </textarea>
                            </div>
                            <div class="new-post-group">
                               <input type="submit" value="تحديث المقال" >
                            </div>
                        </form>
                    </div>
                </div>
              </div>
        </section>
        </div>
    </main>


    @include('layout.scripts')
    <script src="{{asset('public/js')}}/tinymce/jquery.tinymce.min.js"></script>
    <script src="{{asset('public/js')}}/tinymce/tinymce.min.js?apiKey=kexg697506qd0eiwt6t8a4kd9xvcgmgrxlwobxgrqk52z8vy"></script>
    <script>
    tinymce.init({
        selector: '#editor',
        plugins: "anchor autoresize link autolink advlist image codesample lists media textpattern directionality emoticons",
        toolbar: "styleselect removeformat | anchor link | bold italic emoticons | numlist bullist | ltr rtl |alignleft aligncenter alignright |codesample | image media",
        menubar: false,
        language: 'ar',
        directionality : 'rtl',
        default_link_target: "_blank",
        image_caption: true,
        image_advtab: true,
        image_title: true,
        image_uploadtab: true,
        images_upload_url: "https://www.somewhere.com"





        });
    </script>
</body>
</html>

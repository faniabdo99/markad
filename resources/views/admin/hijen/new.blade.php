@include('layout.header')
<body class="admin-body">
    @include('layout.navbar')
    <main>
        @php $PageName = "اضافة محتوى جديد" @endphp
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
                        <h4>اضافة محتوى جديد</h4>
                        <form action="{{ route('admin.hijen.UploadPost') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="new-post-group">
                                <label>عنوان المحتوى</label>
                                <input maxlength="255" type="text" name="title" @if (old('title')) value="{{old('title')}}" @endif >
                            </div>
                            <div class="new-post-group">
                                <label>رابط المحتوى</label>
                                <input maxlength="255" dir="rtl" type="text" name="slug" @if (old('slug')) value="{{old('slug')}}" @endif >
                            </div>
                            <div class="new-post-group">
                                <label>صورة المحتوى</label>
                                <input type="file" name="image">
                            </div>
                            <div class="new-post-group">
                                <label>ملف اضافي المحتوى</label>
                                <input type="file" name="file">
                            </div>
                            <div class="new-post-group">
                                <label>القسم</label>
                                <select name="section">
                                    @forelse($Sections as $Section)
                                    <option value="{{$Section->id}}">{{$Section->title}}</option>
                                    @empty 
                                    <option value="">يرجى اضافة قسم أولاً</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="new-post-group">
                                <label>شرح مختصر للمحتوى</label>
                                <textarea maxlength="799" rows="3" name="description"> @if (old('description')) {{old('description')}} @endif </textarea>
                            </div>
                            
                            <div class="new-post-group">
                                <label>نص المحتوى</label>
                                <textarea name="body" id="editor"> @if (old('body')) {{old('body')}} @endif </textarea>
                            </div>
                            <div class="new-post-group">
                               <input type="submit" value="نشر" >
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
    <br><br><br>
</body>
</html>

@include('layout.header')
<body class="admin-body">
    @include('layout.navbar')
    <main>
        @php $PageName = "اضافة قسم جديد" @endphp
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
                        <h4>اضافة قسم جديد</h4>
                        <form action="{{ route('admin.hijenSection.post') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="new-post-group">
                                <label>عنوان القسم</label>
                                <input maxlength="255" type="text" name="title" @if (old('title')) value="{{old('title')}}" @endif >
                            </div>
                            <div class="new-post-group">
                                <label>رابط القسم</label>
                                <input maxlength="255" dir="rtl" type="text" name="slug" @if (old('slug')) value="{{old('slug')}}" @endif >
                            </div>
                            <div class="new-post-group">
                                <label>صورة القسم</label>
                                <input type="file" name="image">
                            </div>
                            <div class="new-post-group">
                                <label>شرح القسم</label>
                                <textarea maxlength="799" rows="3" name="description"> @if (old('description')) {{old('description')}} @endif </textarea>
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
</body>
</html>

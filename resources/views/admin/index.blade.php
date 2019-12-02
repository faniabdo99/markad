@include('layout.header')
<body class="admin-body">
    @include('layout.navbar')
    <main>
        @php $PageName = "مرحباً بك في لوحة التحكم" @endphp
        @include('admin.adminHeader')
        <div class="container-fluid">
        <section class="admin-statics">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="admin-card">
                        <h4>الأخبار و المقالات</h4>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <a href="{{route('admin.allPosts')}}">
                                    <div class="card-single bordered">
                                        <i class="fas fa-edit"></i>
                                        <p><span>{{$AllPosts->count()}}</span> مقالات</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <a href="{{route('admin.new')}}">
                                    <div class="card-single">
                                        <i class="fas fa-plus"></i>
                                        <p>اضافة مقال جديد</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="admin-card">
                        <h4>مركز الهجن</h4>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <a href="{{route('admin.hijen.all')}}">
                                    <div class="card-single bordered">
                                        <i class="fas fa-edit"></i>
                                        <p><span>{{$Hijen}}</span> جميع الموارد</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <a href="{{route('admin.sections.all')}}">
                                    <div class="card-single bordered">
                                        <i class="fas fa-edit"></i>
                                        <p><span>{{$HijenSection}}</span> تعديل الأقسام</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <a href="{{route('admin.hijen.new')}}">
                                    <div class="card-single">
                                        <i class="fas fa-plus"></i>
                                        <p>اضافة محتوى جديد</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="admin-card">
                        <h4>طلبات الدعم الفني و الرسائل</h4>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <a href="{{route('admin.allMessages')}}">
                                    <div class="card-single bordered">
                                        <i class="fas fa-envelope"></i>
                                        <p>رسائل مؤرشفة <span>{{count($Archived)}}</span></p>
                                    </div>
                               </a>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <a href="{{route('admin.allMessages')}}">
                                    <div class="card-single bordered">
                                        <i class="fas fa-bell"></i>
                                        <p>طلبات الدعم الفني <span>{{count($Tickets)}}</span></p>
                                    </div>
                               </a>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <a href="{{route('admin.allMessages')}}">
                                    <div class="card-single">
                                        <b>{{$AllMessages->count()}}</b>
                                        <p>مجموع الرسائل</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </section>
        </div>
    </main>
    @include('layout.scripts')
</body>
</html>
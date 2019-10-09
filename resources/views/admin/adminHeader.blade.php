<section class="admin-hero-section">
    <h1>{{$PageName}}</h1>
    <p>مسجل دخول بحساب <b>{{auth()->user()->name}}</b></p>
    <ul class="admin-navbar">
        <li><a href="{{ route('admin.home')}}">لوحة التحكم</a></li>
        <li><a href="{{ route('admin.new')}}">اضافة مقال</a></li>
        <li><a href="{{ route('admin.allMessages')}}">الرسائل</a></li>
        <li><a href="{{ route('link.logout') }}">تسجيل الخروج</a></li>
    </ul>
</section>
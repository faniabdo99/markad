@include('layout.header' , ['PageTitle' => $PostDetails->title . ' - ' . __('layout.GameTitle') , 'PageDesc' => $PostDetails->description])
<body class="news-home-body">
    @include('layout.navbar' , ['AlwaysActive' => 'all-scrolled'])
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="news-single-post" >
                    <ul class="{{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
                        <li>{{$PostDetails->created_at->toFormattedDateString()}}</li>
                    </ul>
                    <h1 class="{{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}" >{{$PostDetails->title}}</h1>
                    <img src="{{url('storage/app/images/posts/')."/".$PostDetails->image}}" alt="{{$PostDetails->title}}" title="{{$PostDetails->title}}" >
                </div>
                <br><br>
                    <div class="news-single-post-content {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
                        {!! $PostDetails->body !!}
                        @if($PostDetails->file)
                        <a class="download-post-pdf" href="{{url('storage/app/files/posts/')."/".$PostDetails->file}}" target="_blank"> <i class="fas fa-download"></i> تنزيل الملف المرفق</a>
                        @endif
                    </div>
            </div>
         </div>
    </div>
    @include('layout.footer')
    @include('layout.scripts')
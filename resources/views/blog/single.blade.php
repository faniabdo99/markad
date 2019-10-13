@include('layout.header' , ['PageTitle' => $PostDetailes->p_title . ' - ' . __('layout.GameTitle') , 'PageDesc' => $PostDetailes->p_description , 'PageKeywords' => $PostDetailes->p_keywords])
<body class="news-home-body">
    @include('layout.navbar' , ['AlwaysActive' => 'all-scrolled'])
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="news-single-post" >
                    <ul class="{{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
                        <li>{{$PostDetailes->created_at->toFormattedDateString()}}</li>
                        <li><i class="fas fa-eye"></i> {{Counter::showAndCount('SingleBlog', $PostDetailes->id)}} </li>
                        <li><i class="fas fa-user"></i> {{$PostDetailes->Author->name}}</li>
                    </ul>
                    <h1 class="{{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}" >{{$PostDetailes->p_title}}</h1>
                    <img src="{{ asset('public/images/blog')}}/{{$PostDetailes->p_image}}" alt="{{$PostDetailes->p_title}}" title="{{$PostDetailes->p_title}}" >
                </div>
                <br><br>
                    <div class="news-single-post-content {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
                        {!! $PostDetailes->p_body !!}
                    </div>
            </div>
         </div>
    </div>
    @include('layout.footer')
    @include('layout.scripts')
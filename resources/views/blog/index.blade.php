@include('layout.header' , ['PageTitle' => __('Pages.NewsHeadTitle')])
<body class="news-home-body">
    @include('layout.navbar' , ['AlwaysActive' => 'all-scrolled'])
    <div class="container-fluid">
    <!-- Important News -->
    <div class="row" dir="{{__('LandingPage.dir')}}">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <h1 class="news-home-heading {{__('LandingPage.textClass')}}">{{__('Pages.NewsHeading')}}</h1>
        </div>
        @forelse ($AllPosts as $Post)
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="news-home-posts {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
                    <a href="{{route('blog.single' , $Post->p_slug)}}">
                        <img src="storage/app/images/blog/{{$Post->p_image}}" alt="{{$Post->p_title}}" title="{{$Post->p_title}}" >
                        <div class="text-container">
                            <h2>{{$Post->p_title}}</h2>
                            <ul>
                                <li>{{$Post->created_at->toFormattedDateString()}}</li>
                                <li><i class="fas fa-eye"></i> {{Counter::show('SingleBlog', $Post->id)}} </li>
                                <li><i class="fas fa-user"></i> {{$Post->Author->name}} </li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            @empty 
            <p class="text-center">Nothing here yet .</p>
            @endforelse
         </div>
        </div>
    </div>
    @include('layout.footer')
    @include('layout.scripts')
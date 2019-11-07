@include('layout.header' , ['PageTitle' => __('Pages.NewsHeadTitle')])
<body class="news-home-body">
    @include('layout.navbar' , ['AlwaysActive' => 'all-scrolled'])
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <section class="news-top-hero {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
                    @if (isset($SuperImportant))
                    <div class="main-post" style="background:url('storage/app/images/blog/{{$SuperImportant->p_image}}') no-repeat center center;">
                       <div class="main-post-content">
                            <div class="main-post-headlines">
                                <h2><a href="{{route('blog.single' , $SuperImportant->p_slug)}}">{{$SuperImportant->p_title}}</a></h2>
                                <ul class="main-post-items">
                                    <li>{{$SuperImportant->created_at->toFormattedDateString()}}</li>
                                    <li><i class="fas fa-eye"></i> {{Counter::show('SingleBlog', $SuperImportant->id)}} </li>
                                    <li><i class="fas fa-user"></i> {{$SuperImportant->Author->name}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @else 
                    @endif
                    @forelse ($ImportantPosts as $ImportantPost)
                    <div class="news-secondary-post {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}" style="background:url('storage/app/images/blog/{{$ImportantPost->p_image}}') no-repeat center center;">
                        <div class="news-secondary-post-content">
                            <h2><a href="{{route('blog.single' , $ImportantPost->p_slug)}}">{{$ImportantPost->p_title}}</a></h2>
                        </div>
                    </div>
                    @empty 
                    <p>Nothing to Be Shown here yet</p>
                    @endforelse
                </section>
            </div>
        </div>
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
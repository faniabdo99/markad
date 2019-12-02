@include('layout.header' , ['PageTitle' => $SectionDetails->title])
<body class="news-home-body">
    @include('layout.navbar' , ['AlwaysActive' => 'all-scrolled'])
    <div class="container-fluid">
    <!-- Important News -->
    <div class="row" dir="{{__('LandingPage.dir')}}">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <h1 class="news-home-heading {{__('LandingPage.textClass')}}">{{$SectionDetails->title}}</h1>
            <p class=" {{__('LandingPage.textClass')}}">{{$SectionDetails->description}}</p>
        </div>
        @forelse ($SectionPosts as $Section)
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="news-home-posts {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
                    <a href="{{route('hijen.single' , $Section->slug)}}">
                        @if($Section->image)<img src="../storage/app/images/posts/{{$Section->image}}" alt="{{$Section->title}}" title="{{$Section->title}}" >@endif
                        <div class="text-container">
                            <h2>{{$Section->title}}</h2>
                            <ul>
                                <li>{{$Section->created_at->toFormattedDateString()}}</li>
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
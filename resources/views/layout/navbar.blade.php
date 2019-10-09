<header>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top {{ $AlwaysActive ?? '' }}">
  <a class="navbar-brand" href="{{route('LandingPageRoute')}}">
    <img src="{{asset('public/images')}}/logo.png" alt="{{__('layout.GameTitle')}}" title="{{__('layout.GameTitle')}}" >
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" dir="{{__('LandingPage.dir')}}">
      <li class="nav-item"><a class="nav-link" href="{{route('LandingPageRoute')}}">{{__('layout.Home')}}</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">{{__('layout.News')}}</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('ContactRoute')}}">{{__('layout.Contact')}}</a></li>
      <li class="nav-item special-link pull-right"><a class="nav-link" href="#downloads"><i class="fas fa-download"></i> {{__('layout.Downloads')}}</a></li>

    </ul>

  </div>
</nav>
</header>

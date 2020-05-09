<header>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top {{ $AlwaysActive ?? '' }}">
  <a class="navbar-brand" href="{{route('LandingPageRoute')}}">
    <img src="{{asset('public/images')}}/logo-fill.jpg" alt="{{__('layout.GameTitle')}}" title="{{__('layout.GameTitle')}}" >
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" dir="{{__('LandingPage.dir')}}">
      <li class="nav-item"><a class="nav-link" href="{{route('LandingPageRoute')}}">{{__('layout.Home')}}</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">{{__('layout.News')}}</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('ContactRoute')}}">{{__('layout.Contact')}}</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('Contest')}}">{{__('layout.Contest')}}</a></li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          مركز الهجن
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @php //$Sections = App\HijenSection::latest()->get(); @endphp
          @forelse($Sections as $Section)
          <a class="dropdown-item" href="{{route('section.single' , $Section->slug)}}">{{$Section->title}}</a>
          @empty
          <a class="dropdown-item" href="#">لا يوجد محتوى بعد</a>
          @endforelse
        </div>
      </li> --}}
      {{-- <li class="nav-item"><a class="nav-link" href="{{route('LandingPageRoute')}}#team">{{__('layout.Team')}}</a></li> --}}
      <li class="nav-item">
          <span class="nav-link"><i class="fas fa-translate"></i><a class="text-white" href="{{route('changeLang' , 'ar')}}">عربي</a> / <a class="text-white" href="{{route('changeLang' , 'en')}}">EN</a></span>
      </li>
      <li class="nav-item"><a id="navbar-newsletter-link" class="nav-link" href="javascript:;"><i class="fas fa-envelope"></i></a></li>

    </ul>
    <ul class="navbar-nav mr-auto" dir="{{__('LandingPage.dir')}}">
        <li class="nav-item special-link pull-right"><a class="nav-link" href="{{route('LandingPageRoute')}}#downloads"><i class="fas fa-download"></i> {{__('layout.Downloads')}}</a></li>
    </ul>
  </div>
</nav>
</header>
<div class="newsletter-navbar-form" dir="{{__('LandingPage.dir')}}">
    <h3>{{__('LandingPage.NewsletterHeading')}}</h3>
    <p>{{__('LandingPage.NewsLetterP')}}</p>
    <form id="newsletter-form" action="#" method="post">
      @csrf
      <label class="{{__('LandingPage.textClass')}}">{{__('LandingPage.NewsLetterLabel')}}</label>
      <input type="email" name="email" required placeholder="{{__('LandingPage.NewsLetterPlaceholder')}}">
      <input type="submit" id="join-newsletter" value="{{__('LandingPage.NewsLetterB')}}">
      <div class="ajax-response"></div>
    </form>
  </div>

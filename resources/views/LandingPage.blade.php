@include('layout.header')
<body>
  @include('layout.navbar')
  <section class="hero">
    <div class="hero-content">
      <div class="container-fluid">
        <div class="row" dir="{{__('LandingPage.dir')}}">
          <div class="col-md-7 col-xs-12 col-sm-12">
              <h1 class="{{__('LandingPage.textClass')}}">{{ __('LandingPage.PageHeader') }}</h1>
              <p  class="{{__('LandingPage.textClass')}}">{{ __('LandingPage.PageDescription')}}</p>
              <ul class="hero-buttons">
                <li><a class="get-started" href="#feauters">{{ __('LandingPage.LearnMore')}}</a></li>
                <li><a class="watch-trailer" href="#"><i class="fab fa-youtube"></i>  {{ __('LandingPage.WatchTrailer')}}</a></li>
              </ul>
            </div>
            <div class="col-md-5 col-xs-12 col-sm-12">
              <div class="trailer-in-mobile">
                <img src="{{asset('public/images')}}/mobile-frame.png" alt="Mobile frame" title="Mobile frame" >
                <video muted controls autoplay>
                  <source src="{{asset('public/videos')}}/trailer.mp4" type="video/mp4">
                    {{ __('LandingPage.OutdatedBrowser')}}
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="cursor">
          <i class="fas fa-circle"></i>
        </div>
    </div>
  </section>
  <div class="container">

  <section {{ __('LandingPage.dir')}} id="feauters" class="game-feauters">
    <div class="row" >
      <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
          <h2 class="section-heading">{{ __('LandingPage.FeautersHeading')}}</h2>
      </div>
      @if(__('LandingPage.dir') == 'rtl')
      <div class="col-md-5 col-xs-12 col-sm-12">
          <img src="{{asset('public/images')}}/single_player.jpg" class="single-row-image" alt="MARKAD RACING SCREENSHOTS" title="MARKAD RACING SCREENSHOTS" >
          <img src="{{asset('public/images')}}/Al-Remah.jpg" class="single-row-image" alt="MARKAD RACING SCREENSHOTS" title="MARKAD RACING SCREENSHOTS" >
        </div>
      <div class="col-md-7 col-xs-12 col-sm-12  {{__('LandingPage.textClass')}}">
          <div class="single-feature">
            <div class="feauter-img">
              <img src="{{asset('/public/images')}}/arab.png" alt="{{ __('LandingPage.TradStyRacingH')}}" title="{{ __('LandingPage.TradStyRacingH')}}" >
            </div>
            <div class="feauter-text">
              <h3>{{ __('LandingPage.TradStyRacingH')}}</h3>
              <p>{{ __('LandingPage.TradStyRacingP')}}</p>
            </div>
          </div>
  
          <div class="single-feature">
            <div class="feauter-img">
              <img src="{{asset('/public/images')}}/tree.png" alt="{{ __('LandingPage.RealLiveEH')}}" title="{{ __('LandingPage.RealLiveEH')}}" >
            </div>
            <div class="feauter-text">
              <h3>{{ __('LandingPage.RealLiveEH')}}</h3>
              <p>{{ __('LandingPage.RealLiveEP')}}</p>
            </div>
          </div>
  
          <div class="single-feature">
            <div class="feauter-img">
              <img src="{{asset('/public/images')}}/upgrades.png" alt="{{ __('LandingPage.AccAndUpgradesH')}}" title="{{ __('LandingPage.AccAndUpgradesH')}}" >
            </div>
            <div class="feauter-text">
              <h3>{{ __('LandingPage.AccAndUpgradesH')}}</h3>
              <p>{{ __('LandingPage.AccAndUpgradesP')}}</p>
            </div>
          </div>
  
          <div class="single-feature">
            <div class="feauter-img">
              <img src="{{asset('/public/images')}}/engage.png" alt="{{ __('LandingPage.EngaingGameplayH')}}" title="{{ __('LandingPage.EngaingGameplayH')}}" >
            </div>
            <div class="feauter-text">
              <h3>{{ __('LandingPage.EngaingGameplayH')}}</h3>
              <p>{{ __('LandingPage.EngaingGameplayP')}}</p>
            </div>
          </div>
  
  
        </div>

      @else 

      <div class="col-md-7 col-xs-12 col-sm-12">
        <div class="single-feature">
          <div class="feauter-img">
            <img src="{{asset('/public/images')}}/arab.png" alt="{{ __('LandingPage.TradStyRacingH')}}" title="{{ __('LandingPage.TradStyRacingH')}}" >
          </div>
          <div class="feauter-text">
            <h3>{{ __('LandingPage.TradStyRacingH')}}</h3>
            <p>{{ __('LandingPage.TradStyRacingP')}}</p>
          </div>
        </div>

        <div class="single-feature">
          <div class="feauter-img">
            <img src="{{asset('/public/images')}}/tree.png" alt="{{ __('LandingPage.RealLiveEH')}}" title="{{ __('LandingPage.RealLiveEH')}}" >
          </div>
          <div class="feauter-text">
            <h3>{{ __('LandingPage.RealLiveEH')}}</h3>
            <p>{{ __('LandingPage.RealLiveEP')}}</p>
          </div>
        </div>

        <div class="single-feature">
          <div class="feauter-img">
            <img src="{{asset('/public/images')}}/upgrades.png" alt="{{ __('LandingPage.AccAndUpgradesH')}}" title="{{ __('LandingPage.AccAndUpgradesH')}}" >
          </div>
          <div class="feauter-text">
            <h3>{{ __('LandingPage.AccAndUpgradesH')}}</h3>
            <p>{{ __('LandingPage.AccAndUpgradesP')}}</p>
          </div>
        </div>

        <div class="single-feature">
          <div class="feauter-img">
            <img src="{{asset('/public/images')}}/engage.png" alt="{{ __('LandingPage.EngaingGameplayH')}}" title="{{ __('LandingPage.EngaingGameplayH')}}" >
          </div>
          <div class="feauter-text">
            <h3>{{ __('LandingPage.EngaingGameplayH')}}</h3>
            <p>{{ __('LandingPage.EngaingGameplayP')}}</p>
          </div>
        </div>


      </div>
      <div class="col-md-5 col-xs-12 col-sm-12">
        <img src="{{asset('public/images')}}/single_player.jpg" class="single-row-image" alt="" title="" >
        <img src="{{asset('public/images')}}/Al-Remah.jpg" class="single-row-image" alt="" title="" >
      </div>
      @endif
    </div>
    <img src="{{asset('public/images')}}/camel-from-left.png" class="landing-page-camels" alt="Camel From Left" title="Camel From Left" >
  </section>
  <section class="game-mods">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <h2 class="section-heading">{{ __('LandingPage.GameModesHeading')}}</h2>
      </div>
      <div class="col-md-6 col-xs-6 col-sm-6">
        <div class="single-game-mode {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">
          <div class="image-container">
            <img src="{{asset('public/images')}}/single_player.jpg" alt="{{ __('LandingPage.SPH')}}" title="{{ __('LandingPage.SPH')}}" >
          </div>
          <div class="text-container">
            <h3>{{ __('LandingPage.SPH')}}</h3>
            <p>{{ __('LandingPage.SPP')}}</p>
            <a class="youtube-link"><i class="fab fa-youtube"></i> {{ __('LandingPage.WatchGameplay')}}</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xs-6 col-sm-6">
        <div class="single-game-mode  {{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}" >
          <div class="image-container">
            <img src="{{asset('public/images')}}/multi_player.jpg" alt="{{ __('LandingPage.MPH')}}" title="{{ __('LandingPage.MPH')}}" >
          </div>
          <div class="text-container">
            <h3>{{ __('LandingPage.MPH')}}</h3>
            <p>{{ __('LandingPage.MPP')}}</p>
            <a class="youtube-link"><i class="fab fa-youtube"></i> {{ __('LandingPage.WatchGameplay')}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="game-tracks">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <h2 class="section-heading">{{__('LandingPage.GameTracksHeading')}}</h2>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-12">
        <div class="single-game-track {{__('LandingPage.textClass')}}">
          <img src="{{asset('public/images')}}/al-marmoom.jpg" alt="Al Marmoom Track" title="Al Marmoom Track" >
          <div class="text-container">
            <h3>{{__('LandingPage.Track1H')}}</h3>
            <p>{{__('LandingPage.Track1P')}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-12">
        <div class="single-game-track {{__('LandingPage.textClass')}}">
          <img src="{{asset('public/images')}}/al-remah.jpg" alt="Al Remah Track" title="Al Remah Track" >
          <div class="text-container">
            <h3>{{__('LandingPage.Track2H')}}</h3>
            <p>{{__('LandingPage.Track2P')}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-12">
        <div class="single-game-track {{__('LandingPage.textClass')}}">
          <img src="{{asset('public/images')}}/al-wathba.jpg" alt="Al Wathba Track" title="Al Wathba Track" >
          <div class="text-container">
            <h3>{{__('LandingPage.Track3H')}}</h3>
            <p>{{__('LandingPage.Track3P')}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="media-section">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <h2 class="section-heading">{{__('LandingPage.MediaHeading')}}</h2>
      </div>
      <div class="col-md-7 col-xs-12 col-sm-12">
        <div class="media-video">
          <video muted controls autoplay>
            <source src="{{asset('public/videos')}}/gameplay.mp4" type="video/mp4">
              {{__('LandingPage.OutdatedBrowser')}}
          </video>
        </div>
      </div>
      <div class="col-md-5 col-xs-12 col-sm-12">
        <h3 class="{{__('LandingPage.textClass')}}">{{__('LandingPage.SeeInAction')}}</h3>
        <br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('public/images/media-slider')}}/image1.jpg" alt="" title="">
            
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/images/media-slider')}}/image2.jpg" alt="" title="">
            
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/images/media-slider')}}/image3.jpg" alt="" title="">
            
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/images/media-slider')}}/image4.jpg" alt="" title="">
            
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/images/media-slider')}}/image5.jpg" alt="" title="">
            
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/images/media-slider')}}/image6.jpg" alt="" title="">
            
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/images/media-slider')}}/image7.jpg" alt="" title="">
            
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/images/media-slider')}}/image8.jpg" alt="" title="">
            
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </section>
</div>
  <section class="ads-service">
      <div class="container">
      <div class="row">
        <div class="col">
          <h2>{{__('LandingPage.AdServiceHeading')}}</h2>
          <h3 class="{{__('LandingPage.textClass')}}">{{__('LandingPage.AdServiceSubHeading')}}</h3>
          <br>
          <p class="{{__('LandingPage.textClass')}}" dir="{{__('LandingPage.dir')}}">{{__('LandingPage.AdService1P')}}
            <br><br>
            {{__('LandingPage.AdService2P')}}
           </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
          <img src="{{asset('public/images/media-slider')}}/image1.jpg" alt="" title="">
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
          <img src="{{asset('public/images/media-slider')}}/image2.jpg" alt="" title="">
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
          <img src="{{asset('public/images/media-slider')}}/image3.jpg" alt="" title="">
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
          <img src="{{asset('public/images/media-slider')}}/image4.jpg" alt="" title="">
        </div>
      </div>
      </div>
    </div>
  </section>
<div class="container">
  <section class="home-news">
    <div class="row">
      <div class="col">
        <h2 class="section-heading">{{__('LandingPage.NewsHeading')}}</h2>
      </div>
    </div>
    <div class="row">
      @forelse ($ThreePosts as $Post)
      <div class="col-md-4 col-xs-12 col-sm-12">
        <div class="home-single-news">
          <img src="{{asset('public/images/blog')}}/{{$Post->p_image}}" alt="{{$Post->p_title}}" title="{{$Post->p_title}}">
          <div class="text-container">
            <h3 class="text-left">{{str_limit($Post->p_title , 40)}}</h3>
            <p class="text-left">{{str_limit($Post->p_description , 195)}}</p>
          </div>
          <a class="read-more" href="{{route('blog.single' , $Post->p_slug )}}">{{__('LandingPage.ReadMore')}}</a>
        </div>
      </div>
      @empty 
      <p>Our News Will Be Posted Soon !</p>
      @endforelse
    </div>
  </section>
  <section class="downloads" id="downloads">
    <h2 class="section-heading">{{__('LandingPage.DownloadsHeading')}}</h2>
    <div class="row">
      <div class="col-md-6 col-xs-12 col-sm-12 " dir="{{__('LandingPage.dir')}}">
        <h3 class="{{__('LandingPage.textClass')}}">{{__('layout.GameTitle')}}</h3>
        <p class="{{__('LandingPage.textClass')}}">{{__('LandingPage.DownloadsP')}}</p>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-12">
        <a href="#" class="download-btn"><i class="fab fa-google-play"></i> {{__('LandingPage.DownloadFromGooglePlay')}}</a>
        <a href="#" class="download-btn"><i class="fab fa-apple"></i> {{__('LandingPage.DownloadFromAppStore')}}</a>
      </div>
    </div>
  </section>
  <section class="team" id="team">
    <div class="row">
      <div class="col">
          <h2 class="section-heading">{{__('LandingPage.TeamHeading')}}</h2>
        <br><br>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/aboud.jpeg" alt="Aboud Elzubair Mabloul Image" title="Aboud Elzubair Mabloul Image" >
          <h3>{{__('LandingPage.AZN')}}</h3>
          <p>{!!__('LandingPage.AZR')!!}</p>
        </div>
      </div>
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/Project_Manager.jpg" alt="Noor-ul-Ain Fatima Image" title="Noor-ul-Ain Fatima Image" >
          <h3>{{__('LandingPage.NFN')}}</h3>
          <p>{!!__('LandingPage.NFR')!!}</p>
        </div>
      </div>
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/Developer.jpg" alt="Shoaib Sadaqat Image" title="Shoaib Sadaqat Image" >
          <h3>{{__('LandingPage.SSN')}}</h3>
          <p>{!!__('LandingPage.SSR')!!}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/Artist.jpg" alt="Muhammad Arsalan Image" title="Muhammad Arsalan Image" >
          <h3>{{__('LandingPage.MAN')}}</h3>
          <p>{!!__('LandingPage.MAR')!!}</p>
        </div>
      </div>
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/BackendDev.jpg" alt="Jazeb Munir Image" title="Jazeb Munir Image" >
          <h3>{{__('LandingPage.JMN')}}</h3>
          <p>{!!__('LandingPage.JMR')!!}</p>
        </div>
      </div>
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/GameDesigner.jpg" alt="Maha Nawaz Image" title="Maha Nawaz Image" >
          <h3>{{__('LandingPage.MNN')}}</h3>
          <p>{!!__('LandingPage.MNR')!!}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/animator.jpg" alt="Gi E. Valdez Image" title="Gi E. Valdez Image" >
          <h3>{{__('LandingPage.GVN')}}</h3>
          <p>{!!__('LandingPage.GVR')!!}<br><br></p>
        </div>
      </div>
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/lecturer.jpeg" alt="Ahmed Gamal Fouad Image" title="Ahmed Gamal Fouad Image" >
          <h3>{{__('LandingPage.AFN')}}</h3>
          <p>{!!__('LandingPage.AFR')!!}<br><br></p>
        </div>
      </div>
      <div class="col">
        <div class="team-member">
          <img src="{{asset('public/images/team')}}/consultor.jpeg" alt="Tarun Luthra Image" title="Tarun Luthra Image" >
          <h3>{{__('LandingPage.TLN')}}</h3>
          <p>{{__('LandingPage.TLR')}}<br><br></p>
        </div>
      </div>
    </div>
  </section>
</div>
</body>
@include('layout.footer')
@include('layout.scripts')

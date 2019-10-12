<footer>
  <div class="container">
    <div dir="{{__('LandingPage.dir')}}" class="row {{__('LandingPage.textClass')}}">
      <div class="col-md-4 col-xs-12 col-sm-12">
        <div class="footer-about">
          <div class="footer-about-headings">
            <span>
                <h4>{{ __('layout.GameTitle')}}</h4>
                <p>{{ __('layout.HeadDesc')}}</p>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-12">
        <div class="footer-links">
          <div class="row">
            <div class="col">
              <ul>
                <li><a href="{{route('LandingPageRoute')}}">{{__('layout.Home')}}</a></li>
                <li><a href="{{route('blog.index')}}">{{__('layout.News')}}</a></li>
                <li><a href="#team">{{__('layout.Team')}}</a></li>
                <li><a href="{{route('ContactRoute')}}">{{__('layout.Contact')}}</a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="{{route('changeLang' , 'en')}}">English</a></li>
                <li><a href="{{route('changeLang' , 'ar')}}">عربي</a></li>
              </ul>
            </div>
        </div>
       </div>
      </div>
    <div class="col-md-4 col-xs-12 col-sm-12">
      <div class="footer-contact">
        <ul>
          <li><i class="fas fa-envelope"></i> <a href="mailto:Info@markadracing.com">Info@markadracing.com</a></li>
          <li><i class="fas fa-phone"></i> +971 1125 2 51</li>
          <li><i class="fas fa-globe"></i> <a href="https://markadracing.com/">markadracing.com</a></li>
          <li><i class="fas fa-copyright"></i> Markad Racing 2020 &copy;</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>

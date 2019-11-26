<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ddabcb743be710e1d1edde2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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
                {{-- <li><a href="#team">{{__('layout.Team')}}</a></li> --}}
                <li><a href="{{route('ContactRoute')}}">{{__('layout.Contact')}}</a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="https://www.facebook.com/markadracing/" target="_blank"><i class="fab fa-facebook"></i></a><a href="https://twitter.com/markadracing/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/markad_racing/" target="_blank"><i class="fab fa-instagram"></i></a><a href="https://www.youtube.com/channel/UChXbWoZqt5S-FH3mM4QeQcQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
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

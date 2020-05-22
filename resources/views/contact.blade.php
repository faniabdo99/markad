@include('layout.header' , ['PageTitle' => __('Pages.ContactPageTitle')])
<body>
  @include('layout.navbar')
  <section class="contact-us-hero">
    <div class="contact-us-image">
    </div>
  </section>
  <div class="contact-us-text {{__('LandingPage.textClass')}}">
    <h1>{{__('Pages.ContactUsHeading')}}</h1>
    <p>{{__('Pages.ContactUsP')}}</p>
    <div class="contact-form">
      <form action="{{route('ContactRouteProccess')}}" dir="{{__('LandingPage.dir')}}" method="post">
        @if(session()->has('captcha_error'))
          <span class="form-error-message">{{session('captcha_error')}}</span>
        @endif
        @if(session()->has('success'))
          <span class="form-success-message">{{session('success')}}</span>
        @endif
        @csrf
        <label class="{{__('LandingPage.textClass')}}">{{__('Pages.Name')}}</label>
        @error('user_name') <span class="form-error-message">{{$message}}</span> @enderror
        <input name="user_name" type="text" placeholder="{{__('Pages.NamePlaceholder')}}" required maxlength="255" >
        <label class="{{__('LandingPage.textClass')}}">{{__('Pages.ContactMethod')}}</label>
        @error('user_contact_method') <span class="form-error-message">{{$message}}</span> @enderror
        <input name="user_contact_method" type="text" placeholder="{{__('Pages.ContactMethodPlaceholder')}}" required maxlength="255" >
        @error('message') <span class="form-error-message">{{$message}}</span> @enderror
        <input type="number" required name="captcha" class="contact-input" >
        <input type="hidden" name="captcha_res" >
        <label class="{{__('LandingPage.textClass')}}">{{__('Pages.Message')}}</label>
        <textarea name="message" placeholder="{{__('Pages.MessagePlaceholder')}}" required maxlength="1500"></textarea>
        <input type="submit" name="sendContactUs" value="{{__('Pages.SendAsContact')}}" >
        <input type="submit" name="sendSupport" value="{{__('Pages.SendAsTicket')}}" >
      </form>
    </div>
  </div>
</body>
@include('layout.scripts')
<script>
 $(document).ready(function(){
   function randomInt(min, max) {
     return min + Math.floor((max - min) * Math.random());
   }
   var RandomNumber1 =  randomInt(1,10);
   var RandomNumber2 =  randomInt(1,10);
   var resulte = RandomNumber2 + RandomNumber1;
   console.log(resulte);
   $('input[name="captcha"]').attr('placeholder' , 'ما نتيجة جمع ' + RandomNumber1 + ' و ' + RandomNumber2 + ' ؟' );
   $('input[name="captcha_res"]').val(resulte);
 });
 </script>

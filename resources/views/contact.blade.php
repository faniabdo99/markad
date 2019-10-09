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
        @csrf
        <label class="{{__('LandingPage.textClass')}}">{{__('Pages.Name')}}</label>
        @error('user_name') <span class="form-error-message">{{$message}}</span> @enderror
        <input name="user_name" type="text" placeholder="{{__('Pages.NamePlaceholder')}}" required maxlength="255" >
        <label class="{{__('LandingPage.textClass')}}">{{__('Pages.ContactMethod')}}</label>
        @error('user_contact_method') <span class="form-error-message">{{$message}}</span> @enderror
        <input name="user_contact_method" type="text" placeholder="{{__('Pages.ContactMethodPlaceholder')}}" required maxlength="255" >
        <label class="{{__('LandingPage.textClass')}}">{{__('Pages.Message')}}</label>
        @error('message') <span class="form-error-message">{{$message}}</span> @enderror
        <textarea name="message" placeholder="{{__('Pages.MessagePlaceholder')}}" required maxlength="1500"></textarea>
        <input type="submit" name="sendContactUs" value="{{__('Pages.SendAsContact')}}" >
        <input type="submit" name="sendSupport" value="{{__('Pages.SendAsTicket')}}" >
        @if(session()->has('success'))
          <span class="form-success-message">{{session('success')}}</span>
        @endif
      </form>
    </div>
  </div>
</body>
{{-- @include('layout.footer') --}}
@include('layout.scripts')

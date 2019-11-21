@include('layout.header' , ['PageTitle' => __('Pages.NewsletterLeaveTitle')])
<body>
  @include('layout.navbar')
  <div class="leave-newsletter">
    <h1>{{__('Pages.NewsletterLeaveTitle')}}</h1>
    <p dir="{{__('LandingPage.dir')}}">{{__('Pages.NewsletterLeaveP')}}</p>
  </div>
  @if ($errors->any())
  <br>
  <div class="errors-list">
          @foreach ($errors->all() as $error)
              {{ $error }}
          @endforeach
  </div>
  @endif
  @if(session()->has('success'))
  <br>
      <div class="success-list">
          {{ session()->get('success') }}
      </div>
  @endif
  <div class="leave-newsletter-form {{__('LandingPage.textClass')}}"  dir="{{__('LandingPage.dir')}}" >
      <h2>{{__('Pages.NewsletterLeaveEnterEmailH')}}</h2>
      <form action="{{route('newsletter.out.post')}}" method="post">
        @csrf 
        <input dir="ltr" type="email" name="email" required placeholder="{{__('Pages.NewsletterLeavePlaceholder')}}">
        <input type="submit" value="{{__('Pages.NewsletterLeaveSubmit')}}">
      </form>
  </div>
</body>
{{-- @include('layout.footer') --}}
@include('layout.scripts')

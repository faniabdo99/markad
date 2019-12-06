@include('layout.header')
<div class="container-fluid" dir="{{__('LandingPage.dir')}}">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="error-page-heading {{__('LandingPage.textClass')}}">
                <h1>{{__('Pages.Error404H')}}</h1>
                <p>{{__('Pages.Error404P')}}</p>
                <ul>
                    <li><a href="{{route('LandingPageRoute')}}">{{__('layout.Home')}}</a></li>
                    <li><a href="{{route('blog.index')}}">{{__('layout.News')}}</a></li>
                    <li><a href="{{route('ContactRoute')}}">{{__('layout.Contact')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12">
            <div class="error-page-image"></div>
        </div>
    </div>
</div>
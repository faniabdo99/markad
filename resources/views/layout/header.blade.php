<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146525245-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-146525245-2');
    </script>
    <!-- Page Encoding -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <!-- Important Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@if(isset($PageDesc)){{$PageDesc}}@else{{__('layout.HeadDesc')}}@endif">
  	 <meta name="keywords" content="@if(isset($PageKeywords)){{$PageKeywords}}@else{{__('layout.HeadKeywords')}}@endif">
    <link rel="canonical" href="{{url()->current()}}" >
    <title>@if(isset($PageTitle)) {{$PageTitle}} @else {{__('layout.HeadTitle')}} @endif</title>
    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{asset('public/css')}}/bootstrap.min.css" >
    <link rel="stylesheet" href="{{asset('public/css')}}/app.css" >
    @if(strstr(Request::path() , 'admin'))<link rel="stylesheet" href="{{asset('public/css')}}/admin.css" >@endif
    <!-- CDN Includes -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel='icon' href="{{asset('public/images')}}/logo.png" type='image/x-icon'/>
    <!-- Open Graph -->
    <meta property="og:title" content="@if(isset($PageTitle)){{$PageTitle}}@else {{__('layout.HeadTitle')}}@endif">
    <meta property="og:description" content="@if(isset($PageDesc)){{$PageDesc}}@else{{__('layout.HeadDesc')}}@endif">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('public/images')}}/logo-fill/jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Markad Racing">
    <meta property="twitter:card" content="summary" />
    <meta name="twitter:site" content="@markadRacing">
    <meta name="twitter:creator" content="@markadRacing">
  </head>

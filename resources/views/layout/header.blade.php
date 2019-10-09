<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Page Encoding -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <!-- Important Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{__('layout.HeadDesc')}}">
  	 <meta name="keywords" content="{{__('layout.HeadKeywords')}}">
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
  </head>

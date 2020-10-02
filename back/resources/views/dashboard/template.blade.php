<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Circle Video | @yield('page-title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-circle-video.css') }}" rel="stylesheet">

    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
    
    @yield('css')
</head>

<body class="@if(Request::route()->getName() == 'videos.show') single-video  @endif @if(Request::route()->getName() == 'channel.videos' || Request::route()->getName() == 'channel.edit') channel @endif light">
    @if(Auth::check())
        @include('dashboard.header')
    @else 
        @include('layouts.header')
    @endif

    @yield('content')


    @include('layouts.footer')

    @include('dashboard.scripts')
    @yield('scripts')
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('css/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/libs/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<div class="splash-container" id="app">
    <div class="card ">
        <div class="card-header text-center"><a href="/index.html"><img class="logo-img" src="frontEnd/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">


            @yield('content')

    </div>
    </div>
</body>
</html>

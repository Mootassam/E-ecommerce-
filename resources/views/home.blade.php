<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    </head>

<body>
    <div class="dashboard-main-wrapper">
@include('backEnd.layouts.header')
@include('backEnd.layouts.nav')
<div class="dashboard-wrapper"  id="content" >
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
<!--main-container-part-->

    @yield('content')

        </div>
</div>
</div>
@include('backEnd.layouts.footer')
    </div>
    <script src="{{asset('js/jss/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('js/jss/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('js/jss/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('js/jss/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('js/jss/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('js/jss/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('js/jss/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('js/jss/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('js/jss/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('js/jss/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('js/jss/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('js/jss/libs/dashboard-ecommerce.js')}}"></script>
</body>

</html>

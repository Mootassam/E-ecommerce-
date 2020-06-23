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
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link href="{{asset('css/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('css/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts/flag-icon-css/flag-icon.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/vendor/datepicker/tempusdominus-bootstrap-4.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/inputmask/css/inputmask.css')}}" />


    <title>Home page </title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper" id="app">

        <example-component></example-component>



        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->


                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

<sidebar></sidebar>
                            <router-view></router-view>



                </div>
            </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <br><br><br><br><br><br><br> <br><br>
            <br><br>
            <!-- ============================================================== -->
            <footers></footers>

            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>


    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->

    <script src="{{asset('js/jss/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('js/jss/jquery/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('js/jss/jquery/jquery-1.12.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/jss/jquery/popper.min.js')}}"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="{{asset('js/jss/jquery/bootstrap.min.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('js/jss/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('js/libs/main-js.js')}}"></script>
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
    <script src="{{asset('js/libs/dashboard-ecommerce.js')}}"></script>
    <script src="{{asset('js/libs/js/main-js.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>

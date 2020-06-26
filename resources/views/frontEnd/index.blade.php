<!doctype html>
<html class="no-js" lang="zxx">

<!-- index-431:41-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Version Four || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/material-design-iconic-font.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/font-awesome.min.css')}}">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{asset('css/fronts/css/fontawesome-stars.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/meanmenu.css')}}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/owl.carousel.min.css')}}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/slick.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/animate.css')}}">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/jquery-ui.min.css')}}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/venobox.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/nice-select.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/magnific-popup.css')}}">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/bootstrap.min.css')}}">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/helper.css')}}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('css/fronts/css/responsive.css')}}">
        <!-- Modernizr js -->
        <script src="{{asset('js/jsf/vendor/modernizr-2.8.3.min.js')}}"></script>


    </head>
    <body>
        <div class="body-wrapper" id="app">
<site-component></site-component>

<router-view></router-view>

<foot-component></foot-component>

        </div>
    <!-- Body Wrapper End Here -->
    <!-- jQuery-V1.12.4 -->
    <script src="{{asset('js/jsf/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Popper js -->

    <script src="{{asset('js/jsf/vendor/popper.min.js')}}"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->

    <!-- Ajax Mail js -->
    <script src="{{asset('js/jsf/ajax-mail.js')}}"></script>
    <!-- Meanmenu js -->
    <script src="{{asset('js/jsf/jquery.meanmenu.min.js')}}"></script>
    <!-- Wow.min js -->
    <script src="{{asset('js/jsf/wow.min.js')}}"></script>
    <!-- Slick Carousel js -->
    <script src="{{asset('js/jsf/js/slick.min.js')}}"></script>
    <!-- Owl Carousel-2 js -->
    <script src="{{asset('js/jsf/owl.carousel.min.js')}}"></script>
    <!-- Magnific popup js -->
    <script src="{{asset('js/jsf/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope js -->
    <script src="{{asset('js/jsf/isotope.pkgd.min.js')}}"></script>
    <!-- Imagesloaded js -->
    <script src="{{asset('js/jsf/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Mixitup js -->
    <script src="{{asset('js/jsf/jquery.mixitup.min.js')}}"></script>
    <!-- Countdown -->
    <script src="{{asset('js/jsf/jquery.countdown.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('js/jsf/jquery.counterup.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jsf/waypoints.min.js')}}"></script>
    <!-- Barrating -->
    <script src="{{asset('js/jsf/jquery.barrating.min.js')}}"></script>
    <!-- Jquery-ui -->
    <script src="{{asset('js/jsf/jquery-ui.min.js')}}"></script>
    <!-- Venobox -->
    <script src="{{asset('js/jsf/venobox.min.js')}}"></script>
    <!-- Nice Select js -->
    <script src="{{asset('js/jsf/jquery.nice-select.min.js')}}"></script>
    <!-- ScrollUp js -->
    <script src="{{asset('js/jsf/scrollUp.min.js')}}"></script>
    <!-- Main/Activator js -->
    <script src="{{asset('js/jsf/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>


    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>

    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 10,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(36.63298049050398, 10.319612140625004), // New York
                // How you would like to style the map.
                // This is where you would paste any style found on
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('google-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(36.63298049050398, 10.319612140625004),
                map: map,
                title: 'E-ELECTRO',
                animation: google.maps.Animation.BOUNCE
            });
        }
    </script>
</body>

<!-- index-431:47-->
</html>

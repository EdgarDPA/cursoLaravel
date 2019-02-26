<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        
        <link rel="shortcut icon" href="{{ asset('plantilla/assets/images/favicon.ico')}}">

        <title>Minton - Responsive Admin Dashboard Template</title>

        <link href="{{ asset('plantilla/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('plantilla/plugins/jquery-circliful/css/jquery.circliful.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('plantilla/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plantilla/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plantilla/assets/css/style.css')}}" rel="stylesheet" type="text/css">

        <script src="{{ asset('plantilla/assets/js/modernizr.min.js')}}"></script>

        
    </head>


    <body class="fixed-left">
        @include('bienvenida.layouts.topbar')

        @include('bienvenida.layouts.sidebar')

        @yield('content') 


    
        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="{{asset('plantilla/assets/js/jquery.min.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{asset('plantilla/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/detect.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/fastclick.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/waves.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/wow.min.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{asset('plantilla/plugins/switchery/switchery.min.js') }}"></script>

        <!-- Counter Up  -->
        <script src="{{asset('plantilla/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{asset('plantilla/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- circliful Chart -->
        <script src="{{asset('plantilla/plugins/jquery-circliful/js/jquery.circliful.min.js') }}"></script>
        <script src="{{asset('plantilla/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- skycons -->
        <script src="{{asset('plantilla/plugins/skyicons/skycons.min.js') }}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{asset('plantilla/assets/pages/jquery.dashboard.js') }}"></script>

        <!-- Custom main Js -->
        <script src="{{asset('plantilla/assets/js/jquery.core.js') }}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.app.js') }}"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>


    </body>
</html>
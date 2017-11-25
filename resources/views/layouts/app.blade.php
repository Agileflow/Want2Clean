<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title> @yield('title') </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="keywords" content="Need a maid in London, Essex or Kent? | Looking for a quality cleaning service? | Professional cleaning service in London, Essex, Kent | UK's favourite house cleaning service provider | Basic cleaning, Deep cleaning, Moving In/Out an apartment cleaning, Window cleaning, Bedroom cleaning, Bathroom cleaning, Kitchen cleaning, Club cleaning in London, Essex, Kent | Club cleaner in London, Essex, Kent | Domestic cleaners in London, Esses, Kent | House maid in London, Essex, Kent | House Cleaner in London, Essex, Kent | Residential cleaning service in London, Essex, Kent | Book a cleaner online now | Get started by investing in your free time with our cleaning service | Need a maid in London, Essex or Kent? | Looking for a quality cleaning service? | Professional cleaning service in London, Essex, Kent | Book a cleaner online now | Need the service of a maid/cleaner in London, Essex, Kent">

    <meta name="author" content="">
   
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon-building.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-misc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail-style.css') }}">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>
  

    <!--[if lt IE 8]>
  <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>
    
    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-header">
                                <span><a href="phone:8298494723878"><i class="fa fa-phone"></i>074 1106 8666</a></span>
                                <span><a href="mailto:info@want2clean.co.uk"><i class="fa fa-envelope"></i>info@want2clean.co.uk</a></span>
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <div class="right-header text-right">
                                <ul class="social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-6">
                            <div class="logo">
                                <h1><a href="{{ url('/') }}" title="Go to home">W2C</a></h1>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-10 col-sm-10 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">
                                @yield('navbar')
                            </div> <!-- /.menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="{{ url('#') }}" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            @yield('menu-toggle')
                        </div> <!-- /.menu -->
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home -->

    @yield('content-1')

    @yield('content-2')

    @yield('content-3')

    @yield('content-4')

    @yield('content-5')

    @yield('content-6')

    <style type="text/css">
    .quick-links ul li{
        float: left;
        font-size: 0.7em;
    }
    .quick-links ul li a:hover{
        font-size: 0.8em;
    }
    
    </style>

    <div class="site-footer">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <p> <i class="fa fa-cog"></i> {{ date('Y') }} Want 2 Clean | Powered by AgileTech.</p>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="go-top">
                        <a href="#" id="go-top">
                            <i class="fa fa-4x fa-angle-up"></i>
                        </a>
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    
    <!-- core javascript for service toggle -->
    <script src="js/process.js"></script>
    <script src="js/require.js"></script>
    <script src="js/selector.js" data-require="[&quot;sa&quot;]"></script>
    <script src="js/modernizer.js" data-require="[&quot;j/modernizr&quot;,&quot;j/jquery&quot;,&quot;j/jquery.ui&quot;,&quot;j/ui.touch&quot;,&quot;j/ui.wheel&quot;,&quot;j/ui.draw&quot;,&quot;j/timezone&quot;,&quot;moment&quot;,&quot;static&quot;,&quot;j/jquery.cookie&quot;,&quot;extensions&quot;,&quot;uri&quot;,&quot;behaviors&quot;,&quot;form&quot;,&quot;adapter&quot;,&quot;video&quot;]"></script>

    <script type="text/javascript">

        function initialize() {
          var mapOptions = {
        scrollwheel: false,
            zoom: 15,
            center: new google.maps.LatLng(13.758468,100.567481)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>
</html>
{{--}}Template Name: Snappy
File Name: index.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/--}}
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png"/>
        <title>Kinametli</title>
        <!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        {{--<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">--}}
        <!-- Custom styles for this template -->         
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>  
        <script src="{{ asset('js/custom.js') }}"></script>      
    </head>
    <body id="myPage">
        <div class="section-page-wrap">
            <div id="preloader-container">
                <div class="preloader">
                    <span class="bubble-01"></span>
                    <span class="bubble-02"></span>
                    <span class="bubble-03"></span>
                </div>
            </div>

            <div class="share">
                <div class="icon first facebook"><i class="fa fa-facebook"></i></div>
                <div class="icon twitter"><i class="fa fa-twitter"></i></div>
                <div class="icon google-plus"><i class="fa fa-google-plus"></i></div>
                <div class="icon pinterest last"><i class="fa fa-pinterest-p"></i></div>
                <div class="label">Comparte</div>
            </div>

            <header class="top-nav-bar"> 
                @include('partials.navbar')
            </header>
            <div class="banner-full-image">
                <div class="banner-title">
                    @yield('title')                    
                    <a class="btn btn-primary" href="about.html">read more</a>
                </div>
            </div>                    
                 @yield('content')           

            <!---footer--->
            <footer>
                <div class="container text-center">
                    <div class="copyright">
                        <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink-->
                        &copy; 2017 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
                    </div>
                </div>
            </footer>
            <div id="back-to-top" style="display: none">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i> Top
            </div>
        </div>
           
        <script>
            jQuery(window).load(function () {
                $('#preloader-container').delay(650).fadeOut('slow')
                        ;
            });
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="esp" >
	<head>
		<title>MyR Material Electrico Reforma</title>
		<meta charset="utf-8">
		<!-- <meta name="keywords" content="">
		<meta name="description" content=""> -->
		<!--<meta http-equiv="X-UA-Compatible" content="IE=Edge">-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/favicon.ico" />
		{{--  <link rel="stylesheet" href="css/animate.min.css">  --}}
		{{--  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>  --}}
		{{--  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">  --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">		
        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
		@stack('csss')
		{{--  <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css')}}">  --}}
		{{--  <script src="{{asset('js/jquery.min.js')}}"></script>  --}}
		{{--  
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/validator.min.js"></script>  --}}
		<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109211210-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109211210-1');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-109211210-1', 'auto');
  ga('send', 'pageview');
</script> --}}
	</head>
	<body id="top">
		<!-- start preloader -->
		{{--  <div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>  --}}
        <header>
            @include('partials.header')
        </header>
        @include('partials.navbar')
        @yield('content')
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                       	Derechos Reservados &copy; MyR Material electrico Reforma</p>
                    </div>
                </div>
            </div>
		</footer>
		<!--<script type="text/javascript" src="js/mailto.js"></script>-->
        <!-- end copyright -->

    </body>
	<script src="{{ asset('js/app.js') }}"></script>
	{{-- <script src="{{ asset('js/productosC.js') }}"></script> --}}
	@stack('scripts')
	{{--  <script src="{{ asset('plugins/fontawesome/js/all.js') }}"></script>  --}}
	{{--  <script src="js/form-scripts.js"></script>  --}}
    {{--  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script> 
	<script src="{{ asset('plugins/js/popper.min.js') }}"></script>  --}}

</html>

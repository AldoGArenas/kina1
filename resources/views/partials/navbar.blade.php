{{--  <nav class="navbar navbar-default templatemo-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <div class="logo">
            <a href="#" class="navbar-brand"><img src="{{ asset('images/MyR logo oficial HD.png')}}" width="180"/></a>
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top">INICIO</a></li>
                <li><a href="#about">NOSOTROS</a></li>
                <!--<li><a href="#team">EQUIPO</a></li>-->
                <li><a href="#service">SERVICIOS</a></li>
                <li><a href="{{route('productos')}}">PRODUCTOS</a></li>
                <li><a href="#contact">CONTACTO</a></li>
            </ul>
        </div>
    </div>
</nav>  --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light templatemo-nav">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="logo">
        <a href="#" class="navbar-brand"><img src="{{ asset('images/MyR logo oficial HD.png')}}" width="180"/></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="{{ Request::is('/') ? 'active' : '' }} nav-item ">
                <a class="nav-link" href="{{route('home')}}">INICIO</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#about">NOSOTROS</a>
            </li>
            <li class="{{ Request::is('servicios') ? 'active' : '' }} nav-item">
                <a class="nav-link" href="{{route('servicios')}}">SERVICIOS</a>
            </li>
            <li class="{{ Request::is('productos') ? 'active' : '' }} nav-item">
                <a class="nav-link" href="{{route('productos')}}">PRODUCTOS</a>
            </li>
            <li class="{{ Request::is('contacto') ? 'active' : '' }} nav-item">
                <a class="nav-link" href="{{route('contacto')}}">CONTACTO</a>
            </li>
            {{--  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>  --}}
        </ul>
      {{--  <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>  --}}
    </div>
  </nav>
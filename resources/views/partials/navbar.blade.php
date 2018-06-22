
<div id="toggle">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
</div>

<div id="menu">
    <ul class="menu-view list-unstyled">
        <li class=" {{ Request::is( 'inicio') ?'active' : '' }}"><a href="{{route('inicio')}}"><img src="{{asset('images/icons/home-hover.png')}}"></a></li>
        <li class=" {{ Request::is( 'nosotros') ? 'active' : '' }}"><a href="{{route('nosotros')}}"><img src="{{asset('images/icons/about.png')}}" onmouseover="this.src = '{{asset('images/icons/about-hover.png')}}'" onmouseout="this.src = '{{asset('images/icons/about.png')}}'"></a></li>
        <li class=" {{ Request::is( 'acerca') ? 'active' : '' }}"><a href="{{route('acerca')}}"><img src="images/icons/portfolio.png" onmouseover="this.src = 'images/icons/portfolio-hover.png'" onmouseout="this.src = 'images/icons/portfolio.png'"></a></li>
        <li class=" {{ Request::is( 'contacto') ? 'active' : '' }}"><a href="{{route('contacto')}}"><img src="images/icons/contact.png" onmouseover="this.src = 'images/icons/contact-hover.png'" onmouseout="this.src = 'images/icons/contact.png'"></a></li>
    </ul>
</div>
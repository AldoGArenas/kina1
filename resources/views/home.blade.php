@extends('main')
@section('content')
<section id="">
    <div class="header">
    <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="{{asset('video/intro1.mp4')}}" type="video/mp4">
            </video>
                <div class="container h-100">
                    <div class="d-flex h-100 text-center align-items-end">
                        <div class="w-100 text-white">
                            <img src="{{asset('images/Industronic-Logo-2018.png')}}" alt="">
                            {{--  <h1 class="display-5">MyR Material Eléctrico Reforma</h1>  --}}
                            {{--  <p class="lead mb-0">Distribuidor autorizado Industronic</p>  --}}
                        </div>
                    </div>
                </div>
        {{--  <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">Bienvenidos a:</h1>
               <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s"><span>MyR Material Eléctrico Reforma</span> </h1>
                <div class="element">
                    <div class="sub-element">Distribuidor autorizado</div>
                    <div class="sub-element">De la marca Industronic</div>
                    <div class="sub-element">¿Quieres conocer mas? da clic aquí...</div>
                </div>
                <a data-scroll href="#portfolio" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">Productos</a>
            </div>
        </div>  --}}
    </div>
</section>
<!-- end home -->

<!-- start about -->
<section id="about" class="fondocontainer" >
    <div class="container">
            <div class="acerca-de"></div>
        <div class="row">
            <div class="col-md-4">
                {{--  <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">QUIENES<span> SOMOS</span></h2>  --}}
                <div class="col-sm-12 col-md-12 col-xs-12" style ="">
                    <img  src="images/Logo.png" class="img-responsive"  style="display: block; margin: auto; width:100px;">
                </div>
                <p style="text-align:center; font-size: 18px"><span> MYR Material Eléctrico Reforma S.A. de C.V.</span></p>
                <p class="text-justify">Es una empresa distribuidora y comercializadora de una amplia gama de productos utilizados en el sector eléctrico, para instalaciones residenciales, industriales, comerciales y otras aplicaciones especializadas.</p>
            </div>
            {{--  <div class="col-sm-12 col-md-12 col-xs-12" style=" margin-bottom:25px">
                
                </div>
                <br>  --}}

            <div class="col-md-4 my-auto">
                <div class=" wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
                    <div class="media">
                        <div class="media-heading-wrapper">
                            <div class="media-object pull-left">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h3 class="media-heading">MISIÓN</h3>
                        </div>
                        <div class="media-body">
                            <p style="font-size:16px">Dar el mejor servicio a nuestros clientes así como brindarles la seguridad que nuestra experiencia.</p>
                        </div>
                    </div>
                </div>
                <div class=" wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                    <div class="media">
                        <div class="media-heading-wrapper">
                            <div class="media-object pull-left">
                                <i class="fa fa-building"></i>
                            </div>
                            <h3 class="media-heading">VISIÓN</h3>
                        </div>
                        <div class="media-body">
                            <p style="font-size:16px"> Consolidarnos como una empresa altamente competitiva en el mercado nacional.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 text-center">
                    <img class="iconoinicio" src="{{asset('images/customer-support.svg')}}" alt="">
                </div>
                <div class="col-md-12 text-center">
                        <img class="iconoinicio" src="{{asset('images/delivery-man.svg')}}" alt="">
                </div>
            </div>
            
           
        </div>
    </div>
</section>
@endsection

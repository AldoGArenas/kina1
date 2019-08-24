@extends('main')
@section('content')
<section id="">
    <div class="overlay">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="{{asset('video/intro1.mp4')}}" type="video/mp4">
                </video>
                <div class="container h-100">
                        <div class="d-flex h-100 text-center align-items-center">
                          <div class="w-100 text-white">
                            <h1 class="display-3">Video Header</h1>
                            <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
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
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">QUIENES<span> SOMOS</span></h2>

                    <div class="col-sm-12 col-md-12 col-xs-12" style ="">
                    <img  src="images/Logo.png" class="img-responsive"  style="display: block; margin: auto; width:100px;">
                    </div>
                <div class="col-sm-12 col-md-12 col-xs-12" style=" margin-bottom:25px">
                <p style="text-align:center; font-size: 18px"><span> MYR Material Eléctrico Reforma S.A. de C.V.</span> es una empresa distribuidora y comercializadora de una amplia gama de productos utilizados en el sector eléctrico, para instalaciones residenciales, industriales, comerciales y otras aplicaciones especializadas.</p>
                </div>
                <br>

            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
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
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
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
    </div>
</section>
@endsection

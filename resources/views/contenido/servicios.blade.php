@extends('home')
@section('content')
<section id="contact" class="section-padding fondo-servicio">    
        <div class="row py-4 div-servicio  justify-content-center">
            <div class="col-md-2 text-right">
                    <i class="fas fa-inbox"></i>
            </div> 
            <div class="col-md-2 text-center">
                <img src="images/Soporte.jpg" class="img-responsive imagen-servicio" alt="team img 1">
            </div>
            <div class="col-md-4 text-left">
                    <h4 style="color:#28A7E9 !important">SOPORTE</h4>
                    <ul class="clearfix">
                        <li> Mantenimiento preventivo y correctivo</li>                       
                        <li> Refaccionamiento</li>
                    </ul>
            </div>
        </div>               
        <div class="row py-4 div-servicio  justify-content-center ">
            <div class="col-md-4 text-right">
                    <h4>ENVIO</h4>
                    <ul class="clearfix">
                        <li> Stock en Oficina de Puebla para entrega inmediata </li>
                        <li> Entrega en Puebla y área metropolitana sin costo (a pie de camión)</li>
                    </ul>
            </div>
            <div class="col-md-2 text-center">
                    <img src="images/Envio.jpg" class="img-responsive imagen-servicio" alt="team img 2">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row py-4 div-servicio justify-content-center">
                <div class="col-md-2"></div> 
            <div class="col-md-2 text-center">
                <img src="images/Asesoria.jpg" class="img-responsive imagen-servicio" alt="team img 2">
            </div>
            <div class="col-md-4">
                    <h4>ASESORIA</h4>  
                    <ul class="clearfix">
                        <li> Atención personalizada </li>
                        <li> Dimensionamiento de equipo de acuerdo a tus necesidades</li>
                    </ul>
            </div>
        </div>
        <div class="row py-4 div-servicio justify-content-center">            
            <div class="col-md-4 text-right">
                <h4>VENTA</h4>
                <ul class="clearfix">
                    <li> Material eléctrico de alta, media y baja tension </li>
                    <li> Precios de fabrica a distribuidores e integradores en equipo industronic </li>
                </ul> 
            </div>
            <div class="col-md-2 text-center">
                <img src="images/Venta.jpg" class="img-responsive imagen-servicio" alt="team img 2">
            </div>
            <div class="col-md-2"></div>
        </div>
   
</section>
@endsection

{{--  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>SERVICIOS </span> MyR</h2>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
            <div class="team-wrapper">
                <img src="images/Soporte.png" class="img-responsive" alt="team img 1">
                    <div class="team-des">
                        
                        <!--<span>Designer</span>-->
                        
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
            <div class="team-wrapper">
                
                    <div class="team-des">
                        
                        
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
            <div class="team-wrapper">
                <img src="images/Asesoria.png" class="img-responsive" alt="team img 3">
                    <div class="team-des">
                        <ul class="clearfix">
                            <li> Atención personalizada </li>
                            <br>
                            <li> Dimensionamiento de equipo de acuerdo a tus necesidades</li>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
            <div class="team-wrapper">
                <img src="images/Venta.png" class="img-responsive" alt="team img 4">
                    <div class="team-des">
                        <h4>VENTA</h4>
                        <ul class="clearfix">
                            <li> Material eléctrico de alta, media y baja tension </li>
                            <br>
                            <li> Precios de fabrica a distribuidores e integradores en equipo industronic </li>
                            </ul>
                    </div>
            </div>
        </div>
    </div>
</div>  --}}
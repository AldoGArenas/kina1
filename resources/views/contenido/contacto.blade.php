@extends('home')
@section('content')
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"> <span>CONTACTANOS</span></h2>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                <form role="form" id="contactForm" data-toggle="validator" class="shake">
                    <div class="form-group ">
                    <label for="nombre">NOMBRE</label>
                    <input name="nombre"  type="text" class="form-control" id="nombre"required data-error="Escribe un nombre">
                    <div class="help-block with-errors" style="color:rgb(255, 196, 0)"></div>
                         </div>

                     <div class="form-group ">
                    <label for="email">EMAIL</label>
                    <input name="email" type="email" class="form-control" id="email" required >
                    <div class="help-block with-errors" style="color:rgb(255, 196, 0)"></div>
                        </div>

                     <div class="form-group ">
                    <label for="telefono">TELEFONO</label>
                    <input name="telefono" type="number" class="form-control" id="telefono" required >
                    <div class="help-block with-errors" style="color:rgb(255, 196, 0)"></div>
                    </div>

                    <div class="form-group ">
                    <label for="producto">PRODUCTO</label>
                    <input name="producto" type="text" class="form-control" id="producto" required >
                    <div class="help-block with-errors"style="color:rgb(255, 196, 0)"></div>
                    </div>

                    <div class="form-group ">
                    <label for="mensaje">MENSAJE</label>
                    <textarea name="mensaje" rows="4" class="form-control" id="mensaje" required > </textarea>
                    <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit" id="form-submit" class="btn btn-default "> ENVIAR </button>
                    <!--<button type="submit" id="form-submit" class="btn-success "> LOL </button>-->
                    <div id="msgSubmit" class="h3 text-center hidden" style="color:rgb(255, 196, 0)"></div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                <address>
                    <p class="address-title">¿Quieres comunicarte con nosotros?</p>
                    <span>Dejanos un mensaje y te responderemos en breve o aqui te dejamos algunos datos extra para que podemos resolver tus dudas.</span>
                    <p style="font-weight:bold">Nuestros telefonos </p>
                    <p style="color:gold">Si estas en movil puedes enviarnos un Whatsapp directo del botón</p>
                    <p><i class="fa fa-whatsapp"></i> 01 (222) 1-30-14-55 <a href="https://api.whatsapp.com/send?phone=522221301455&text=Hola%20%20deseo%20mas%20informacion%20de%20sus%20Productos" target="_blank" class="btn-whats" >Enviar Whatsapp</a></p>
                    <p><i class= "fa fa-whatsapp"></i> 01 (222) 4-04-66-27 <a href="https://api.whatsapp.com/send?phone=522224046627&text=Hola%20%20deseo%20mas%20informacion%20de%20sus%20Productos" target="_blank" class="btn-whats" >Enviar Whatsapp</a></p>
                    <p><i class="fa fa-envelope-o"></i> myr.reformasadecv@gmail.com</p>
                    <p><i class="fa fa-map-marker"></i> Sonora #45 Col. San Rafael Poniente, Puebla de Zaragoza, México</p>
                    <div align="center">

                    </div>
                </address>
                <a href="https://www.facebook.com/myrmaterialelectricoreforma/" class="fab fa-facebook-f"></a>

                <ul class="social-icon">
                    <li><h4>NUESTRAS REDES</h4></li>
                    <li>
                    </li>
                    <!--<li><a href="#" class="fa fa-twitter"></a></li>-->

                    <!--<li><a href="#" class="fa fa-instagram"></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')
<section id="contact" class="section-padding">
    <div class="container">
        <div class="text-head">
            <h2>contact us</h2>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 width-set-60">
                <h1 class="maintitle"><span><i class="fa fa-envelope"></i> Get in Touch</span></h1>
                <div class="wrapcontact">
                    <div class="done" style="display: none">
                        <div class="alert-box success ">Your message has been sent. Thank you! <a class="close" href="javascript:void(0)">x</a></div>
                    </div>
                    <form id="contactform">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">	
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Message" cols="30" class="form-control" rows="10"></textarea>
                                </div>

                                <input type="submit" class="btn btn-primary" value="submit">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12 width-set-40">
                <h1 class="maintitle"><span><i class="fa fa-map-marker"></i> Locations</span></h1>
                <dl>
                    <dt>701 Old York Drive Richmond USA.</dt>
                    <dd><span>Telephone:</span><a href="tel:+1-202-555-0100"> +1-202-555-0100</a></dd>
                    <dd><span>E-mail:</span><a href="mailto:demo@info.com"> demo@info.com</a></dd>
                </dl>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('home')
@section('title')
<h1>¡La grandeza está en tí!</h1>
@endsection
@section('content')
<section id="gallery-block" class="section-padding">
    <div class="container">
        <div class="text-head">
            <h2>Gallery</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image1.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image1.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">flowers</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image2.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image2.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">nature</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image3.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image3.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">love</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image4.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image4.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">adventure</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image5.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image5.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">travel</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image6.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image6.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">hotel</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image7.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image7.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">architecture</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image8.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image8.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">sport</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gallery-list">
                <div class="port-image">
                    <img src="images/gallery-image9.png" alt="Gallery-Image" class="img-responsive">
                    <div class="overlay">
                        <div class="text"><a href="images/gallery-image9.png" class="image-popup"><img src="images/pin.png"></a></div>
                    </div>
                </div>
                <h1 class="port-title">shopping</h1>
            </div>
        </div>
    </div>
</section>

<!---------insta images block--------->
<section id="insta-post" class="section-padding">
    <div class="container">
        <div class="text-head">
            <h2 >our instagram post</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 insta-image-list">
                <div id="instafeed"></div>
            </div>
        </div>
    </div>
</section>
@endsection
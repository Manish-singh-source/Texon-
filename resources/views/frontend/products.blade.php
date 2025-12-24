@extends('frontend.layouts.masters')
@section('content')
<!-- Page Header Section Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Products </h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Our Features Section Start -->
<div class="our-features">
    <div class="container">
        <!-- <div class="row section-row">
            <div class="col-lg-12">
                 
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Featured Products</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">High-Quality Precision <span>Instruments and
                            Measurement Solutions</span></h2>
                </div>
                 
            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-12">
                <!-- Feature Item Box Start -->
                <div class="feature-item-box">



                    <div class="feature-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod3.png"
                                    alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>MB ruler GONIOMETER</h3>
                            <p>This transparent plastic goniometer permits observation of a joint's axis of motion and
                                its range of motion. </p>
                            <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                                <a href="{{route('product-details')}}">
                                    <p><span>Learn More</span> </p>
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="feature-item box-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod4.png"
                                    alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>Sysmex Manual Mandibulometer</h3>
                            <p>Mandibular length, mandibular angle, and maximum ramus height measurements used during
                                forensic evaluation of skeletal remains require use of a mandibulometer..</p>
                            <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                                <a href="{{route('product-details')}}">
                                    <p><span>Learn More</span> </p>
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="feature-item box-5 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod5.png"
                                    alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>CanDo Pedal Exerciser - with Digital Display, Fold-up</h3>
                            <p>The CanDo fold-up digital pedal exerciser ships pre-assembled - just add tension knob!
                                This model folds for easy storage, transportation and shipping. </p>
                            <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                                <a href="{{route('product-details')}}">
                                    <p><span>Learn More</span> </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Feature Item Box End -->
            </div>

            <!-- <div class="col-lg-12">
                 
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                    <p><span>View All Products</span> </p>

                </div>  
            </div> -->
        </div>
    </div>
</div>
<!-- Our Features Section End -->
@endsection
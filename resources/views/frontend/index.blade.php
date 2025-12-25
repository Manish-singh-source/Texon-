@extends('frontend.layouts.masters')
@section('content')
<!-- Hero Section Start -->
@if($banners->count() > 0)
    @php $banner = $banners->first(); @endphp
    <div class="hero hero-bg-image hero-video dark-section" @if($banner->banner_image) style="background-image: url('{{ asset('storage/' . $banner->banner_image) }}');" @endif>
        <!-- Video Start -->
        @if($banner->video_upload)
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop id="myvideo" height="100vh">
                <source src="{{ asset('storage/' . $banner->video_upload) }}" type="video/mp4">
            </video>
            <!-- Selfhosted Video End -->
        </div>
        @endif
        <!-- Video End -->
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-10">
                    <!-- Hero Box Start -->
                    <div class="hero-box">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                @if($banner->heading)
                                <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $banner->heading }}</h1>
                                @endif
                                @if($banner->subheading)
                                <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $banner->subheading }}</p>
                                @endif
                            </div>
                            <!-- Section Title End -->

                            <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Hero Button Start -->
                                @if($banner->button_name && $banner->button_url)
                                <div class="hero-btn">
                                    <a href="{{ $banner->button_url }}" class="btn-default btn-highlighted">{{ $banner->button_name }}</a>
                                </div>
                                @endif
                                <!-- Hero Button End -->
                            </div>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                    <!-- Hero Box End -->
                </div>
            </div>
        </div>
    </div>
@else
    <!-- Default Hero if no banners -->
    <div class="hero hero-bg-image hero-video dark-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop id="myvideo" height="100vh">
                <source src="assets1/videos/video1.mp4" type="video/mp4">
            </video>
            <!-- Selfhosted Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-10">
                    <!-- Hero Box Start -->
                    <div class="hero-box">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <!-- Default content if needed -->
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Hero Content End -->
                    </div>
                    <!-- Hero Box End -->
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Hero Section End -->

<!-- Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            @foreach($brands as $brand)
                <span><img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}"></span>
            @endforeach
            
        </div>

        <div class="scrolling-content">
            @foreach($brands as $brand)
                <span><img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}"></span>
            @endforeach
           
        </div>
    </div>
    <!-- Scrolling Ticker End -->
</div>
<!-- Scrolling Ticker Section End -->
<!-- Why Choose Us Section Start -->
<div class="why-choose-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <!-- Why Choose Image Box Start -->
                <div class="why-choose-image-box wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Why Choose Image Box 1 Start -->
                    <div class="why-choose-img-box-1">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image image-1">
                            <figure class="image-anime reveal">
                                <img src="images/why-choose-image-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->

                        <!-- Year Experience Box Start -->
                        <div class="year-experience-box">
                            <h2><span class="counter">25</span>+</h2>
                            <p>Years Of Experience</p>
                        </div>
                        <!-- Year Experience Box End -->
                    </div>
                    <!-- Why Choose Image Box 1 End -->

                    <!-- Why Choose Image Box 2 Start -->
                    <div class="why-choose-img-box-2">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image image-2">
                            <figure class="image-anime reveal">
                                <img src="images/why-choose-image-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->

                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image image-3">
                            <figure class="image-anime reveal">
                                <img src="images/why-choose-image-3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->
                    </div>
                    <!-- Why Choose Image Box 1 End -->
                </div>
                <!-- Why Choose Image Box End -->
            </div>
            <div class="col-xl-6">
                <!-- Why Choose Content Start -->
                <div class="why-choose-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Why Choose Us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Future ready cybersecurity that
                            <span>goes beyond defense</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We don't just stop attacks—we prepare your
                            business to withstand them. By combining proactive defense, real-time intelligence, and
                            long-term strategies.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why Choose Body Start -->
                    <div class="why-choose-body wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Why Choose Counter Content Start -->
                        <div class="why-choose-counter-content">
                            <!-- Why Choose Counter Start -->
                            <div class="why-choose-counter">
                                <div class="circle" data-value="0.95">
                                    <div class="progress_value"><span class="pro_data"></span><span>%</span></div>
                                </div>
                            </div>
                            <!-- Why Choose Counter End -->

                            <!-- Why Choose Counter Info Start -->
                            <div class="why-choose-counter-info">
                                <p>“Cybersecurity is not just about protecting systems, it's about protecting
                                    trust.”</p>
                            </div>
                            <!-- Why Choose Counter Info End -->
                        </div>
                        <!-- Why Choose Counter Content End -->

                        <!-- Why Choose Counter List Start -->
                        <div class="why-choose-counter-list">
                            <ul>
                                <li>Future-Ready Security</li>
                                <li>24/7 Support</li>
                                <li>Advance data protection</li>
                            </ul>
                        </div>
                        <!-- Why Choose Counter List End -->
                    </div>
                    <!-- Why Choose Body End -->

                    <!-- Why Choose Item List Start -->
                    <div class="why-choose-item-list wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="images/icon-why-choose-1.svg" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Proactive Threat Detection</h3>
                                <p>We don't just wait for threats to strike - our advanced monitoring tools
                                    identify.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="images/icon-why-choose-2.svg" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>Tailored Security Solutions</h3>
                                <p>We design customized cybersecurity strategy that align with your industry.</p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Item List End -->

                    <!-- Why Choose Button Start -->
                    <div class="why-choose-btn wow fadeInUp" data-wow-delay="0.8s">
                        <a href="contact.html" class="btn-default">Learn more</a>
                    </div>
                    <!-- Why Choose Button End -->
                </div>
                <!-- Why Choose Content End -->
            </div>

        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Our Features Section Start -->
<div class="our-features">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Featured Products</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">High-Quality Precision <span>Instruments and
                            Measurement Solutions</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Feature Item Box Start -->
                <div class="feature-item-box">
                    <!-- Feature Item Start -->
                    <div class="feature-item box-1 wow fadeInUp">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod1.png" alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>Bending Beam Load cell</h3>
                            <p>Load cell Ideally suited for high accuracy industrial weighing applications such as
                                dosing machines and tank, vessel or hopper weighing.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-2 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Scrolling Ticker Box Start -->
                        <!-- <div class="scrolling-ticker feature-scrolling-ticker">
                                <div class="scrolling-ticker-box">
                                    <div class="scrolling-content">
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                    </div>

                                    <div class="scrolling-content">
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                    </div>
                                </div>

                                <div class="scrolling-ticker-box scroll-reverse">
                                    <div class="scrolling-content">
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                    </div>

                                    <div class="scrolling-content">
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Risk Management</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Next-Gen Security</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Network Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Data Protection</span>
                                        <span><img src="assets1/images/icon-feature-ticker.svg" alt="">Cyber Defense</span>
                                    </div>
                                </div>
                            </div> -->
                        <!-- Scrolling Ticker Box End -->
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod2.png" alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>Delsys Wireless EMG </h3>
                            <p>Delsys EMG systems are advanced tools designed for the precise measurement and analysis
                                of muscle activity through electromyography (EMG).</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod3.png" alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>MB ruler GONIOMETER</h3>
                            <p>This transparent plastic goniometer permits observation of a joint's axis of motion and
                                its range of motion. </p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod4.png" alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>Sysmex Manual Mandibulometer</h3>
                            <p>Mandibular length, mandibular angle, and maximum ramus height measurements used during
                                forensic evaluation of skeletal remains require use of a mandibulometer..</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-5 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/prod5.png" alt="" class="imgh">
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>CanDo Pedal Exerciser - with Digital Display, Fold-up</h3>
                            <p>The CanDo fold-up digital pedal exerciser ships pre-assembled - just add tension knob!
                                This model folds for easy storage, transportation and shipping. </p>
                        </div>
                    </div>
                    <!-- Feature Item End -->
                </div>
                <!-- Feature Item Box End -->
            </div>

            <div class="col-lg-12">
                <!-- Section Footer Text Start -->
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                    <p><span>View All Products</span> </p>
                    <!-- <p>Protecting what matters most - <a href="contact.html">See how our services
                                keep you safe!</a></p> -->
                </div>
                <!-- Section Footer Text End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Features Section End -->



<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-xl-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Our Benifits</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Empowering Businesses And Research With
                        <span>Precision And Reliability</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-xl-5">
                <!-- Section Content Btn Start -->
                <div class="section-content-btn">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We provide high-quality measurement instruments
                            and engineering solutions designed to meet diverse industrial, research, and educational
                            needs.</p>
                    </div>
                    <!-- Section Title Content End -->

                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="btn-default">View All Benefits</a>
                    </div>
                    <!-- Section Btn End -->
                </div>
                <!-- Section Content Btn End -->
            </div>
        </div>

        <div class="row service-list">
            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <!-- Service Item Body Start -->
                    <div class="service-item-body">
                        <!-- Service Item Header Start -->
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <h3><a href="javascript:void(0);">High Accuracy</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Ensures precise measurements for research, industrial, and clinical applications.
                            </p>
                        </div>
                        <!-- Service Item Content End -->
                    </div>
                    <!-- Service Item Body End -->

                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="assets1/images/icon-service-item-1.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Bg Icon Start -->
                    <div class="service-bg-icon">
                        <img src="assets1/images/icon-service-item-1-bg.svg" alt="">
                    </div>
                    <!-- Service Bg Icon End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item active wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Service Item Body Start -->
                    <div class="service-item-body">
                        <!-- Service Item Header Start -->
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <h3><a href="javascript:void(0);">Reliability</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Durable and consistent performance under demanding conditions.</p>
                        </div>
                        <!-- Service Item Content End -->
                    </div>
                    <!-- Service Item Body End -->

                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="assets1/images/icon-service-item-2.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Bg Icon Start -->
                    <div class="service-bg-icon">
                        <img src="assets1/images/icon-service-item-2-bg.svg" alt="">
                    </div>
                    <!-- Service Bg Icon End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Service Item Body Start -->
                    <div class="service-item-body">
                        <!-- Service Item Header Start -->
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <h3><a href="javascript:void(0);">Wide Range of Solutions</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Instruments for load measurement, dynamometry, clinical analysis, and more.</p>
                        </div>
                        <!-- Service Item Content End -->
                    </div>
                    <!-- Service Item Body End -->

                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="assets1/images/icon-service-item-3.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Bg Icon Start -->
                    <div class="service-bg-icon">
                        <img src="assets1/images/icon-service-item-3-bg.svg" alt="">
                    </div>
                    <!-- Service Bg Icon End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Service Item Body Start -->
                    <div class="service-item-body">
                        <!-- Service Item Header Start -->
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <h3><a href="javascript:void(0);">Global Standards</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Products sourced from trusted international manufacturers meeting rigorous quality
                                benchmarks.
                            </p>
                        </div>
                        <!-- Service Item Content End -->
                    </div>
                    <!-- Service Item Body End -->

                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="assets1/images/icon-service-item-4.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Bg Icon Start -->
                    <div class="service-bg-icon">
                        <img src="assets1/images/icon-service-item-4-bg.svg" alt="">
                    </div>
                    <!-- Service Bg Icon End -->
                </div>
                <!-- Service Item End -->
            </div>

            <!-- <div class="col-lg-12">
                    
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p><span>Free</span> Protecting what matters most - <a href="contact.html">See how our services
                                keep you safe!</a></p>
                    </div>
                   
                </div> -->
        </div>
    </div>
</div>
<!-- Our Services Section End -->


<!-- Our Testimonial Section Start -->
<div class="our-testimonials dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <!-- Testimonial Content Start -->
                <div class="our-testimonial-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">What our clients say about <span>partnering
                                with us</span>

                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Discover how our precision instruments and
                            measurement solutions have empowered businesses and research with reliability and accuracy.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Testimonial Button Start -->
                    <div class="testimonial-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="btn-default btn-highlighted">View All Reviews</a>
                    </div>
                    <!-- Testimonial Button End -->

                    <!-- Testimonial Google Review Start -->
                    <!-- <div class="testimonial-google-review wow fadeInUp" data-wow-delay="0.6s">
                            
                            <div class="about-google-review-header">
                                <div class="icon-box">
                                    <img src="assets1/images/icon-google.svg" alt="">
                                </div>
                                <div class="about-google-review-content">
                                    <p>Google Reviews</p>
                                </div>
                            </div>
                            
                            <div class="google-review-content">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p>(<span class="counter">4.9</span>)</p>
                            </div>
                            
                        </div> -->
                    <!-- Testimonial Google Review End -->
                </div>
                <!-- Testimonial Content End -->
            </div>

            <div class="col-xl-7 col-lg-6">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            @foreach($testimonials as $testimonial)
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-logo">
                                            @if($testimonial->testimonial_image)
                                                <img src="{{ asset('storage/' . $testimonial->testimonial_image) }}" alt="{{ $testimonial->name }}">
                                            @else
                                                <img src="assets1/images/testimonial-company-logo-1.svg" alt="">
                                            @endif
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="assets1/images/testimonial-quote.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>“{{ $testimonial->message }}”</p>
                                        </div>
                                        <div class="testimonial-author-content">
                                            <div class="testimonial-stars">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $testimonial->rating)
                                                        ⭐
                                                    @else
                                                        ☆
                                                    @endif
                                                @endfor
                                            </div>
                                            <h3>{{ $testimonial->name }}</h3>
                                            <p>{{ $testimonial->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                            @endforeach
                        </div>

                        <!-- Testimonial Slider Button Start -->
                        <!-- <div class="testimonial-slider-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div> -->
                        <!-- Testimonial Slider Button End -->
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Testimonial Section End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-xl-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">latest Blogs</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Innovation & Applications in Precision
                        Measurement</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-xl-5">
                <!-- Section Content Btn Start -->
                <div class="section-content-btn">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p> Texon Corporation’s blog shares useful insights and expert knowledge on precision
                            measurement, sensors, and testing systems for R&D, healthcare, and industrial applications.
                        </p>
                    </div>
                    <!-- Section Title Content End -->

                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="btn-default">View All Blogs</a>
                    </div>
                    <!-- Section Btn End -->
                </div>
                <!-- Section Content Btn End -->
            </div>
        </div>

        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" @if($loop->index > 0) data-wow-delay="{{ 0.2 * $loop->index }}s" @endif>
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="javascript:void(0);" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="javascript:void(0);">{{ $blog->title }}</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="javascript:void(0);" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Our Blog Section End -->



@endsection
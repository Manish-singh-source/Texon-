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
            <div class="col-xl-6 order2">
                <!-- Why Choose Image Box Start -->
                <div class="why-choose-image-box wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Why Choose Image Box 2 Start -->
                    <div class="why-choose-img-box-2">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image image-2">
                            <figure class="image-anime reveal">
                                <img src="assets1/img/aa2.png" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->

                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image image-3">
                            <figure class="image-anime reveal">
                                <img src="assets1/img/aa3.png" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->
                    </div>
                    <!-- Why Choose Image Box 1 Start -->
                    <div class="why-choose-img-box-1">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image image-1">
                            <figure class="image-anime reveal">
                                <img src="assets1/img/aa1.png" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->

                        <!-- Year Experience Box Start -->
                        <div class="year-experience-box">
                            <h2><span class="counter">7</span>+</h2>
                            <p>Years Of Experience</p>
                        </div>
                        <!-- Year Experience Box End -->
                    </div>
                    <!-- Why Choose Image Box 1 End -->

                    
                    <!-- Why Choose Image Box 1 End -->
                </div>
                <!-- Why Choose Image Box End -->
            </div>
            <div class="col-xl-6">
                <!-- Why Choose Content Start -->
                <div class="why-choose-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Precision Instrumentation and Analysis
                            Solutions by <span>Texon Corporation</span>
                        </h2>
                        <p class="wow fadeInUp">Texon Corporation was established as a sole proprietorship
                            instrumentation firm in Mumbai, India, and has been operating since 2019, The company
                            began with a focused mission to deliver precision sensors, measurement & Analysis
                            systems, and engineering solutions that cater to R&D, industrial, clinical, and
                            performance analysis needs.</p>
                        <p class="wow fadeInUp">Over the years, Texon Corporation has developed a reputation
                            for supplying a broad range of high-quality instruments—from load cells and dynamometers
                            to specialized clinical measurement devices—serving customers across sectors such as
                            healthcare, industrial automation, research laboratories, and technical education.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Today, Texon’s offerings are trusted not only
                            within India but also exported to markets such as Nepal , Bhutan , Bangladesh and Sri
                            Lanka, reflecting its commitment to quality, reliability, and responsive service in
                            precision measurement technology.</p>
                    </div>
                   <!-- Section Title End -->                                  

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
                    @foreach($featuredProducts as $index => $product)
                    <!-- Feature Item Start -->
                    <div class="feature-item box-{{ $index + 1 }} wow fadeInUp" @if($index > 0) data-wow-delay="{{ 0.2 * $index }}s" @endif>
                        <div class="feature-image">
                            <figure>
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->heading }}" class="imgh">
                                @else
                                    <img src="assets1/img/prod{{ $index + 1 }}.png" alt="" class="imgh">
                                @endif
                            </figure>
                        </div>
                        <div class="feature-item-content">
                            <h3>{{ $product->heading }}</h3>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->
                    @endforeach
                </div>
                <!-- Feature Item Box End -->
            </div>

            <div class="col-lg-12">
                <!-- Section Footer Text Start -->
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                    <p><a href="{{ route('category') }}" style="text-decoration: none;"><span>View All Products </span>   </a> </p>
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
                    <!-- <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="btn-default">View All Benefits</a>
                    </div> -->
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
                                <h3><a href="javascript:void(0);">Proven Technical Expertise</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Deep domain knowledge in advanced motion capture, tracking software, and engineering technologies ensures reliable and accurate solutions.
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
                                <h3><a href="javascript:void(0);">Customized Solutions</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>We understand that every project is unique. Our solutions are tailored to meet specific application, industry, and research requirements.</p>
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
                                <h3><a href="javascript:void(0);">End-to-End Support</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>From consultation and system design to installation, training, and after-sales support, we provide complete lifecycle assistance.</p>
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
                                <h3><a href="javascript:void(0);">Scalable & Future-Ready</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Our solutions are designed to scale as your needs grow, ensuring long-term value and flexibility.
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
                        <a href="{{route('blogs')}}" class="btn-default">View All Blogs</a>
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
                        <a href="{{route('blog-details', $blog->id)}}" data-cursor-text="View">
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
                            <h2><a href="{{route('blog-details', $blog->id)}}">{{ $blog->title }}</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{route('blog-details', $blog->id)}}" class="readmore-btn">read more</a>
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

@if($promotionalBanner)
<!-- Promotional Banner Modal -->
<div class="modal fade" id="promotionalModal" tabindex="-1" aria-labelledby="promotionalModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            @if($promotionalBanner->title)
            <div class="modal-header border-0 bg-primary text-white">
                <h5 class="modal-title fw-bold" id="promotionalModalLabel">{{ $promotionalBanner->title }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @else
            <div class="modal-header border-0 bg-primary text-white justify-content-end">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @endif
            <div class="modal-body p-0">
                @if($promotionalBanner->banner_image)
                    <div class="promotional-banner-image">
                        <img src="{{ asset('storage/' . $promotionalBanner->banner_image) }}" class="img-fluid w-100" alt="{{ $promotionalBanner->title ?? 'Promotional Banner' }}" style="max-height: 400px; object-fit: cover;">
                    </div>
                @endif
                @if($promotionalBanner->description)
                    <div class="p-4">
                        <p class="mb-0 text-center fs-5">{{ $promotionalBanner->description }}</p>
                    </div>
                @endif
            </div>
            <div class="modal-footer border-0 justify-content-center pb-4">
                <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    #promotionalModal .modal-content {
        border-radius: 15px;
        overflow: hidden;
    }
    #promotionalModal .modal-header {
        padding: 1.5rem;
    }
    #promotionalModal .promotional-banner-image {
        position: relative;
        overflow: hidden;
    }
    #promotionalModal .promotional-banner-image img {
        transition: transform 0.3s ease;
    }
    #promotionalModal .promotional-banner-image:hover img {
        transform: scale(1.05);
    }
</style>

<script>
@if($promotionalBanner)
document.addEventListener('DOMContentLoaded', function() {
    // Check if modal was already shown in this session
    if (!sessionStorage.getItem('promotionalModalShown')) {
        var promotionalModal = new bootstrap.Modal(document.getElementById('promotionalModal'));
        promotionalModal.show();

        // Mark as shown in session storage
        sessionStorage.setItem('promotionalModalShown', 'true');
    }
});
@endif
</script>
@endif

@endsection
@extends('frontend.layouts.masters')
@section('content')
<!-- Intro Video Section Start -->
<div class="intro-videos dark-section parallaxie">

    <!-- Background Video -->
    <video class="bg-video" autoplay muted loop playsinline>
        <source src="assets1/videos/video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay (optional dark layer) -->
    <div class="video-overlay"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-video-box">
                    <div class="section-title section-title-center">
                        <h2 class="text-anime-style-2 hd" data-cursor="-opaque">
                            Trigno
                            <span>Centro </span>
                        </h2>
                        <div class="intro-video-list wow fadeInUp" data-wow-delay="0.2s">
                            <p class="text-center pb-50 cl-white para">Solving complex problems with advanced sensing
                                solutions</p>
                            <a href="{{route('get-a-quote')}}" class="btn-default text-center">Get a Quote</a> &nbsp;&nbsp;
                            <a href="javascript:void(0);" class="btn-default text-center">Download Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->
</div>



<div class="about-us pb-60 bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 gl">
                <!-- About Image Box Start -->
                <div class="image-gallery" style="position: relative;">
                    <figure>
                        <img id="sidebar-image" src="assets1/img/pd1.png" alt="Product Image"  >
                    </figure>
                    <div class="thumbnails">
                        <img src="assets1/img/pd1.png" alt="" class="thumbnail active" data-index="0">
                        <img src="assets1/img/pd2.png" alt="" class="thumbnail" data-index="1">
                        <img src="assets1/img/pd3.png" alt="" class="thumbnail" data-index="2">
                        <img src="assets1/img/pd4.png" alt="" class="thumbnail" data-index="3">
                        <img src="assets1/img/pd5.png" alt="" class="thumbnail" data-index="4">
                    </div>
                    <button id="prev-btn" class="btn-defaults"
                        style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);"> <img
                            src="assets1/img/left-arrow.png" alt=""> </button>
                    <button id="next-btn" class="btn-defaults"
                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"> <img
                            src="assets1/img/right-arrow.png" alt=""> </button>
                </div>
            </div>

            <!-- About Content End -->

            <div class="col-lg-6">
                <!-- Sidebar Content Start -->
                <div class="sidebar-content">
                    <div class="section-sub-title">
                        <h3 class="wow fadeInUp">About Product </h3>
                    </div>
                    <div class="section-title">
                        <h2 class="text-effect" data-cursor="-opaque">Trigno Centro</h2>
                        <p class="wow fadeInUp">Created from over 30 years of experience and close collaboration with
                            the EMG research community, Trigno Centro represents an evolutionary leap at the heart of
                            our product ecosystem.</p>
                        <p class="wow fadeInUp">Engineered to deliver uncompromising signal quality, Trigno Centro
                            provides a powerful, centralized platform for acquiring and synchronizing high-fidelity
                            biosignals. Its modular architecture supports a wide range of sensors and experimental
                            configurations, enabling seamless adaptation across human movement science, engineering, and
                            neurophysiology applications..</p>
                        <p class="wow fadeInUp">With advanced data integrity, low latency performance, and robust
                            scalability, Trigno Centro empowers researchers to design complex experiments with
                            confidence. Whether capturing subtle neuromuscular activity or integrating multimodal data
                            streams, the system ensures precision without sacrificing flexibility. </p>
                    </div>

                </div>
                <!-- Sidebar Content End -->
            </div>
        </div>
    </div>
</div>


<section class="services-section">
    <div class="containers container">

        <!-- LEFT STICKY -->
        <div class="left">
            <div class="sticky-box">
                <div class="video-box" onclick="openVideo()">
                    <img src="assets1/img/prd1.jpg" alt="Business">                    
                </div>
                <h2 class="title text-white text-anime-style-2" data-cursor="-opaque">
                    Services Built for
                    <span>Business</span> Goal
                    Success
                </h2>

                <button class="btn">More services →</button>
            </div>
        </div>

        <!-- RIGHT SCROLLABLE -->
        <div class="right">
            <div class="service">
                <div class="img-box">
                    <h3 class="title text-white">01. Business process optimization</h3>
                    <p>
                        In today’s dynamic business environment, the key to success lies
                        in strategic planning and operational excellence.
                    </p>
                </div>

                <div class="service-item-btn">
                    <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                </div>
            </div>

            <div class="service">
                <div class="img-box">
                    <h3 class="title text-white">02. Strategic planning & execution</h3>
                    <p>
                        In today’s dynamic business environment, the key to success lies
                        in strategic planning and operational excellence.
                    </p>
                </div>
                <div class="service-item-btn">
                    <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                </div>
            </div>


            <div class="service">
                <div class="img-box">
                    <h3 class="title text-white">03. Leadership executive coaching</h3>
                    <p>
                        In today’s dynamic business environment, the key to success lies
                        in strategic planning and operational excellence.
                    </p>
                </div>
                <div class="service-item-btn">
                    <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                </div>
            </div>

            <div class="service">
                <div class="img-box">
                    <h3 class="title text-white">04. Business process optimization</h3>
                    <p>
                        In today’s dynamic business environment, the key to success lies
                        in strategic planning and operational excellence.
                    </p>
                </div>
                <div class="service-item-btn">
                    <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                </div>
            </div>
            <div class="service">
                <div class="img-box">
                    <h3 class="title text-white">05. Business process optimization</h3>
                    <p>
                        In today’s dynamic business environment, the key to success lies
                        in strategic planning and operational excellence.
                    </p>
                </div>
                <div class="service-item-btn">
                    <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Our Features Section Start -->
<div class="our-features">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Product</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Compatible with all <span>Trigno EMG
                            Sensors</span></h2>
                    <p>Trigno Centro offers unparalleled flexibility. Design your system to be as unique as your
                        research.</p>
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
                                <img src="assets1/img/p1.png" alt="">
                            </figure>
                        </div>

                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-2 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Scrolling Ticker Box Start -->

                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/p5.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/p2.png" alt="">
                            </figure>
                        </div>

                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/p3.webp" alt="">
                            </figure>
                        </div>

                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature-item box-5 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-image">
                            <figure>
                                <img src="assets1/img/p4.png" alt="">
                            </figure>
                        </div>

                    </div>
                    <!-- Feature Item End -->
                </div>
                <!-- Feature Item Box End -->
            </div>


        </div>
    </div>
</div>
<!-- Our Features Section End -->
<!-- Intro Video Section Start -->
<div class="intro-video dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Intro Video Box Start -->
                <div class="intro-video-box">
                    <!-- Our Video Circle Start -->
                    <div class="our-video-circle">
                        <a href="https://www.youtube.com/watch?v=kZDcKwCoZRY" class="popup-video"
                            data-cursor-text="Play">
                            <img src="assets1/images/our-video-circle.svg" alt="">
                        </a>
                    </div>
                    <!-- Our Video Circle End -->

                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">A journey built on trust, innovation,
                            and <span>unwavering security</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Intro Video List Start -->
                    <div class="intro-video-list wow fadeInUp" data-wow-delay="0.2s">
                        <ul>
                            <li>From a Bold Vision to a Trusted Reality</li>
                            <li>Evolving With the Digital Landscape</li>
                            <li>Built on Trust, Innovation and Partnership</li>
                        </ul>
                    </div>
                    <!-- Intro Video List End -->
                </div>
                <!-- Intro Video Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Intro Video Section End -->


<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-xl-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Capture EMG Your Way</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">For every application,<span> Trigno Centro
                            Supports
                        </span> your research</h2>
                </div>
            </div>
        </div>

        <div class="row service-list">
            <div class="col-xl-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <!-- Service Item Body Start -->
                    <div class="service-item-body">
                        <!-- Service Item Header Start -->
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <h3><a href="javascript:void(0);">Engineering</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>We Texon Corpporation offer class C3 Load cells for precesie weighing applications. our
                                Load cell range starts from 110 gm to 300 Ton.
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

            <div class="col-xl-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item active wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Service Item Body Start -->
                    <div class="service-item-body">
                        <!-- Service Item Header Start -->
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <h3><a href="javascript:void(0);">Movement Sciences</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Movement Sciences studies human movement to enhance performance, prevent injuries, and
                                promote overall physical health.</p>
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

            <div class="col-xl-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Service Item Body Start -->
                    <div class="service-item-body">
                        <!-- Service Item Header Start -->
                        <div class="service-item-header">
                            <div class="service-item-title">
                                <h3><a href="javascript:void(0);">Neurophysiology</a></h3>
                            </div>
                            <div class="service-item-btn">
                                <a href="javascript:void(0);"><img src="assets1/images/arrow-primary.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Service Item Header End -->

                        <!-- Service Item Content Start -->
                        <div class="service-item-content">
                            <p>Neurophysiology studies how the nervous system functions, transmitting signals that
                                control movement, behavior, and bodily processes.</p>
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
        </div>
    </div>
</div>




<script>
const images = ['assets1/img/pd1.png', 'assets1/img/pd2.png', 'assets1/img/pd3.png', 'assets1/img/pd4.png', 'assets1/img/pd5.png'];
let currentIndex = 0;
const imgElement = document.getElementById('sidebar-image');

function updateImage() {
    imgElement.src = images[currentIndex];
}

document.getElementById('prev-btn').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
    updateActiveThumbnail();
});

document.getElementById('next-btn').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
    updateActiveThumbnail();
});

const thumbnails = document.querySelectorAll('.thumbnail');
thumbnails.forEach((thumb, index) => {
    thumb.addEventListener('click', () => {
        currentIndex = index;
        updateImage();
        updateActiveThumbnail();
    });
});

function updateActiveThumbnail() {
    thumbnails.forEach((thumb, idx) => {
        thumb.classList.toggle('active', idx === currentIndex);
    });
}

// Initial load
updateImage();
updateActiveThumbnail();
</script>
<script>
function openVideo() {
    document.getElementById("videoModal").style.display = "flex";
    document.getElementById("videoFrame").src =
        "https://www.youtube.com/embed/VIDEO_ID?autoplay=1";
}

function closeVideo() {
    document.getElementById("videoModal").style.display = "none";
    document.getElementById("videoFrame").src = "";
}
</script>


@endsection
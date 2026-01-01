@extends('frontend.layouts.masters')
@section('content')
<style>
    .footer-scrolling-ticker .scrolling-content span {
    display: block;
}
    </style>
    <!-- Banner Section Start -->
    @if($product->banner_active)
    <div class="intro-videos dark-section parallaxie"
        @if (
            $product->productBanners->first() &&
                !$product->productBanners->first()->video_upload &&
                $product->productBanners->first()->banner_image) style="background-image: url('{{ asset('storage/' . $product->productBanners->first()->banner_image) }}');" @endif>

        <!-- Background Video -->
        @if ($product->productBanners->first() && $product->productBanners->first()->video_upload)
            <video class="bg-video" autoplay muted loop playsinline>
                <source src="{{ asset('storage/' . $product->productBanners->first()->video_upload) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif

        <!-- Overlay (optional dark layer) -->
        <div class="video-overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-video-box">
                        <div class="section-title section-title-center">
                            <h2 class="text-anime-style-2 hd" data-cursor="-opaque">
                                {{ $product->product_name }}
                            </h2>
                            <div class="intro-video-list wow fadeInUp" data-wow-delay="0.2s">
                                <p class="text-center pb-50 cl-white para">
                                    {{ $product->productBanners->first()->heading ?? 'Add Heading' }}</p>
                                <a href="{{ route('get-a-quote', $product->id) }}" class="btn-default text-center">Get a Quote</a>
                                &nbsp;&nbsp;
                                <a href="{{ $product->productBanners->first()->button_url ?? 'javascript:void(0);' }}"
                                    class="btn-default text-center">{{ $product->productBanners->first()->button_name ?? 'Download Brochure' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Video Section End -->
    </div>
    @endif
    <!-- Banner Section End -->

    <!-- About Product Section Start -->
    @if($product->about_product_active)
    <div class="about-us pb-60 bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 gl order2">
                    <!-- About Image Box Start -->
                    <div class="image-gallery" style="position: relative;">
                        @php
                            $aboutProduct = $product->aboutProducts->first();
                            $productImages = [];

                            if ($aboutProduct && $aboutProduct->images) {
                                // Check if images is already an array or needs to be decoded
                                if (is_string($aboutProduct->images)) {
                                    $productImages = json_decode($aboutProduct->images, true) ?? [];
                                } elseif (is_array($aboutProduct->images)) {
                                    $productImages = $aboutProduct->images;
                                }
                            }

                            $firstImage = !empty($productImages)
                                ? asset('storage/' . $productImages[0])
                                : asset('assets1/img/pd1.png');
                        @endphp

                        <figure>
                            <img id="sidebar-image" src="{{ $firstImage }}" alt="Product Image">
                        </figure>
                        <div class="thumbnails">
                            @if (!empty($productImages) && is_array($productImages))
                                @foreach ($productImages as $index => $image)
                                    <img src="{{ asset('storage/' . $image) }}" alt=""
                                        class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                        data-index="{{ $index }}">
                                @endforeach
                            @else
                                <img src="{{ asset('assets1/img/pd1.png') }}" alt="" class="thumbnail active"
                                    data-index="0">
                            @endif
                        </div>
                        <button id="prev-btn" class="btn-defaults"
                            style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);"> <img
                                src="{{ asset('assets1/img/left-arrow.png') }}" alt=""> </button>
                        <button id="next-btn" class="btn-defaults"
                            style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"> <img
                                src="{{ asset('assets1/img/right-arrow.png') }}" alt=""> </button>
                    </div>
                </div>

                <!-- About Content End -->

                <div class="col-lg-6">
                    <!-- Sidebar Content Start -->
                    <div class="sidebar-content">
                        <div class="section-sub-title">
                            <h3 class="wow fadeInUp">{{ $product->aboutProducts->first()->subheading ?? 'About Product' }}
                            </h3>
                        </div>
                        <div class="section-title">
                            <h2 class="text-effect" data-cursor="-opaque">
                                {{ $product->aboutProducts->first()->heading ?? $product->product_name }}</h2>
                            <div class="wow fadeInUp">{!! $product->aboutProducts->first()->description ?? $product->sort_description !!}</div>
                        </div>

                    </div>
                    <!-- Sidebar Content End -->
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- About Product Section End -->

    <!-- Product Key Points Section Start -->
    @if($product->key_points_active)
    <section class="services-section">
        <div class="containers container">
            @php
                $keyPoint = $product->productKeyPoints->where('type', 'card1')->first();
            @endphp

            <!-- LEFT STICKY -->
            <div class="left">
                <div class="sticky-box">
                    <div class="video-box">
                        <img src="{{ $keyPoint && $keyPoint->image ? asset('storage/' . $keyPoint->image) : 'assets1/img/prd1.jpg' }}"
                            alt="Business">
                    </div>
                    <h2 class="title text-white text-anime-style-2" data-cursor="-opaque">
                        {!! $keyPoint && $keyPoint->title ? $keyPoint->title : 'Services Built for <span>Business</span> Goal Success' !!}
                    </h2>

                    <a href="{{ $keyPoint && $keyPoint->url ? $keyPoint->url : 'javascript:void(0);' }}"
                        class="btn">{{ $keyPoint && $keyPoint->button ? $keyPoint->button : 'More services →' }}</a>
                </div>
            </div>

            <!-- RIGHT SCROLLABLE -->
            <div class="right">
                @foreach ($product->productKeyPoints->where('type', 'card2') as $index => $keyPoint)
                    <div class="service">
                        <div class="img-box">
                            <h3 class="title text-white">{{ str_pad($index + 0, 2, '0', STR_PAD_LEFT) }}.
                                {{ $keyPoint->heading }}</h3>
                            <p>
                                {{ $keyPoint->description }}
                            </p>
                        </div>

                        <div class="service-item-btn">
                            <a href="javascript:void(0);"><img src="{{ asset('assets1/images/arrow-primary.svg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    @endif
    <!-- Product Key Points Section End -->

    <!-- Product Gallery Section Start -->
    @if($product->gallery_active)
    <div class="our-features">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">{{ $product->productGalleries->first()->heading ?? 'Our Product' }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            {{ $product->productGalleries->first()->subheading ?? 'Heading' }}</h2>
                        <p>{!! $product->productGalleries->first()->description ??
                            'Trigno Centro offers unparalleled flexibility. Design your system to be as unique as your research.' !!}</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Feature Item Box Start -->
                    <div class="feature-item-box">
                        @php
                            $gallery = $product->productGalleries->first();
                            $galleryImages = $gallery && $gallery->images ? json_decode($gallery->images, true) : [];
                        @endphp
                        <!-- Feature Item Start -->
                        <div class="feature-item box-1 wow fadeInUp">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ isset($galleryImages[0]) ? asset('storage/' . $galleryImages[0]) : 'assets1/img/p1.png' }}"
                                        alt="">
                                </figure>
                            </div>

                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-2 wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Scrolling Ticker Box Start -->

                            <div class="feature-image">
                                <figure>
                                    <img src="{{ isset($galleryImages[1]) ? asset('storage/' . $galleryImages[1]) : 'assets1/img/p5.png' }}"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ isset($galleryImages[2]) ? asset('storage/' . $galleryImages[2]) : 'assets1/img/p2.png' }}"
                                        alt="">
                                </figure>
                            </div>

                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ isset($galleryImages[3]) ? asset('storage/' . $galleryImages[3]) : 'assets1/img/p3.webp' }}"
                                        alt="">
                                </figure>
                            </div>

                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-5 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ isset($galleryImages[4]) ? asset('storage/' . $galleryImages[4]) : 'assets1/img/p4.png' }}"
                                        alt="">
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
    @endif
    <!-- Product Gallery Section End -->

    <!-- Banner Video Section Start -->
    @if($product->banner_video_active)
    @php
        $bannerVideo = $product->bannerVideos->first();
    @endphp
    <div class="intro-video dark-section parallaxie"
        @if ($bannerVideo && $bannerVideo->banner_image) style="background-image: url('{{ asset('storage/' . $bannerVideo->banner_image) }}');" @endif>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <!-- Our Video Circle Start -->
                        <div class="our-video-circle">
                            <a href="{{ $bannerVideo->banner_video_url ?? 'https://www.youtube.com/watch?v=kZDcKwCoZRY' }}"
                                class="popup-video" data-cursor-text="Play">
                                <img src="{{ asset('assets1/images/our-video-circle.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Our Video Circle End -->

                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                {{ $bannerVideo->banner_title ?? 'A journey built on trust, innovation, and unwavering security' }}
                            </h2>
                        </div>
                        <!-- Section Title End -->

                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Banner Video Section End -->

    <!-- Product Features Section Start -->
    @if($product->features_active)
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        @php
                            $card1Feature = $product->productFeatures->where('type', 'card1')->first();
                        @endphp
                        <h3 class="wow fadeInUp">
                            {{ $card1Feature ? $card1Feature->page_heading : 'Capture EMG Your Way' }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            {{ $card1Feature ? $card1Feature->sub_heading : 'For every application, your research' }}</h2>
                    </div>
                </div>
            </div>

            <div class="row service-list">
                @foreach ($product->productFeatures->where('type', 'card2') as $index => $feature)
                    <div class="col-xl-4 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item {{ $index === 0 ? 'active' : '' }} wow fadeInUp"
                            data-wow-delay="{{ $index * 0.2 }}s">
                            <!-- Service Item Body Start -->
                            <div class="service-item-body">
                                <!-- Service Item Header Start -->
                                <div class="service-item-header">
                                    <div class="service-item-title">
                                        <h3><a href="javascript:void(0);">{{ $feature->title }}</a></h3>
                                    </div>
                                    <div class="service-item-btn">
                                        <a href="javascript:void(0);"><img
                                                src="{{ asset('assets1/images/arrow-primary.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <!-- Service Item Header End -->

                                <!-- Service Item Content Start -->
                                <div class="service-item-content">
                                    <p>{{ $feature->description }}</p>
                                </div>
                                <!-- Service Item Content End -->
                            </div>
                            <!-- Service Item Body End -->

                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ $feature->icon_image ? asset('storage/' . $feature->icon_image) : 'assets1/images/icon-service-item-' . ($index + 1) . '.svg' }}"
                                    alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Service Bg Icon Start -->
                            {{-- <div class="service-bg-icon">
                        <img src="{{ $feature->icon_image ? asset('storage/' . $feature->icon_image) : 'assets1/images/icon-service-item-' . ($index + 1) . '.svg' }}" alt="">
                    </div> --}}
                            <!-- Service Bg Icon End -->
                        </div>
                        <!-- Service Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- Product Features Section End -->

    <script>
        @php
            $aboutProduct = $product->aboutProducts->first();
            $productImages = [];

            if ($aboutProduct && $aboutProduct->images) {
                // Check if images is already an array or needs to be decoded
                if (is_string($aboutProduct->images)) {
                    $productImages = json_decode($aboutProduct->images, true) ?? [];
                } elseif (is_array($aboutProduct->images)) {
                    $productImages = $aboutProduct->images;
                }
            }
        @endphp

        const images = [
            @if (!empty($productImages) && is_array($productImages))
                @foreach ($productImages as $index => $image)
                    '{{ asset('storage/' . $image) }}'
                    {{ $index < count($productImages) - 1 ? ',' : '' }}
                @endforeach
            @else
                '{{ asset('assets1/img/pd1.png') }}'
            @endif
        ];

        let currentIndex = 0;
        const imgElement = document.getElementById('sidebar-image');

        function updateImage() {
            if (imgElement && images.length > 0) {
                imgElement.src = images[currentIndex];
            }
        }

        document.getElementById('prev-btn')?.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateImage();
            updateActiveThumbnail();
        });

        document.getElementById('next-btn')?.addEventListener('click', () => {
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

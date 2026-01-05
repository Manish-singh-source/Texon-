@extends('frontend.layouts.masters')
@section('content')
    <style>
        .footer-scrolling-ticker .scrolling-content span {
            display: block;
        }
    </style>
    <!-- Banner Section Start -->
    @if ($product->banner_active)
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
                                    <a href="{{ route('get-a-quote', $product->id) }}" class="btn-default text-center">Get a
                                        Quote</a>
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
    @if ($product->about_product_active)
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

                                // Check if first media is video or image
                                $firstMedia = !empty($productImages) ? $productImages[0] : null;
                                $firstExt = $firstMedia ? strtolower(pathinfo($firstMedia, PATHINFO_EXTENSION)) : null;
                                $firstIsVideo = $firstExt && in_array($firstExt, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                            @endphp

                            <figure id="main-media-container">
                                @if ($firstIsVideo && $firstMedia)
                                    <video id="sidebar-video" style="border-radius: 10px; width: 100%; height: auto;"
                                        controls>
                                        <source src="{{ asset('storage/' . $firstMedia) }}"
                                            type="video/{{ $firstExt }}">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <img id="sidebar-image"
                                        src="{{ $firstMedia ? asset('storage/' . $firstMedia) : asset('assets1/img/pd1.png') }}"
                                        style="border-radius: 10px;" alt="Product Image">
                                @endif
                            </figure>
                            <div class="thumbnails">
                                @if (!empty($productImages) && is_array($productImages))
                                    @foreach ($productImages as $index => $media)
                                        @php
                                            $ext = strtolower(pathinfo($media, PATHINFO_EXTENSION));
                                            $isVideo = in_array($ext, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                                        @endphp
                                        @if ($isVideo)
                                            <div class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                                data-index="{{ $index }}" data-type="video"
                                                data-src="{{ asset('storage/' . $media) }}" data-ext="{{ $ext }}"
                                                style="position: relative; cursor: pointer; border: 2px solid {{ $index === 0 ? '#007bff' : 'transparent' }}; border-radius: 5px; overflow: hidden; display: inline-block; width: 80px; height: 80px;">
                                                <video
                                                    style="width: 100%; height: 100%; object-fit: cover; pointer-events: none;">
                                                    <source src="{{ asset('storage/' . $media) }}"
                                                        type="video/{{ $ext }}">
                                                </video>
                                                <div
                                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0,0,0,0.6); border-radius: 50%; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bx bx-play" style="color: white; font-size: 16px;"></i>
                                                </div>
                                            </div>
                                        @else
                                            <img src="{{ asset('storage/' . $media) }}" alt=""
                                                class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                                data-index="{{ $index }}" data-type="image"
                                                data-src="{{ asset('storage/' . $media) }}"
                                                style="cursor: pointer; border: 2px solid {{ $index === 0 ? '#007bff' : 'transparent' }}; border-radius: 5px;">
                                        @endif
                                    @endforeach
                                @else
                                    <img src="{{ asset('assets1/img/pd1.png') }}" alt="" class="thumbnail active"
                                        data-index="0" data-type="image" data-src="{{ asset('assets1/img/pd1.png') }}"
                                        style="cursor: pointer; border: 2px solid #007bff; border-radius: 5px;">
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
                                <h3 class="wow fadeInUp">
                                    {{ $product->aboutProducts->first()->subheading ?? 'About Product' }}
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
    @if ($product->key_points_active)
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

    <!-- Product Features Section Start -->
    @if ($product->features_active)
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
                                {{ $card1Feature ? $card1Feature->sub_heading : 'For every application, your research' }}
                            </h2>
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
                                                    src="{{ asset('assets1/images/arrow-primary.svg') }}"
                                                    alt=""></a>
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


     <!-- Banner Video Section Start -->
    @if ($product->banner_video_active)
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


    <!-- Related Products Section Start -->
    @if ($product->category)
        @php
            $relatedProducts = \App\Models\Product::where('category', $product->category)
                ->where('id', '!=', $product->id)
                ->where('status', 'active')
                ->limit(5)
                ->get();
        @endphp
        @if ($relatedProducts->isNotEmpty())
            <div class="our-features">
                <div class="container">
                    <div class="row section-row">
                        <div class="col-lg-12">
                            <!-- Section Title Start -->
                            <div class="section-title section-title-center">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Relevant Products</h2>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Feature Item Box Start -->
                            <div class="feature-item-box">
                                @foreach ($relatedProducts as $index => $relatedProduct)
                                    <div class="feature-item box-{{ $index + 1 }} wow fadeInUp"
                                        data-wow-delay="{{ 0.4 + $index * 0.2 }}s">
                                        <div class="feature-image">
                                            <figure>
                                                <img src="{{ asset('./storage/' . $relatedProduct->product_thumbnail) }}"
                                                    alt="" class="imgh">
                                            </figure>
                                        </div>
                                        <div class="feature-item-content">
                                            <h3>{{ $relatedProduct->product_name }}</h3>
                                            <p>{!! $relatedProduct->sort_description !!}</p>
                                            <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                                                @php
                                                    $hasActiveSectionRel =
                                                        $relatedProduct->banner_active ||
                                                        $relatedProduct->about_product_active ||
                                                        $relatedProduct->key_points_active ||
                                                        $relatedProduct->gallery_active ||
                                                        $relatedProduct->banner_video_active ||
                                                        $relatedProduct->features_active;
                                                @endphp
                                                @if ($hasActiveSectionRel)
                                                    <a href="{{ route('product-details', $relatedProduct->id) }}">
                                                        <p><span>Learn More</span></p>
                                                    </a>
                                                @else
                                                    <a href="javascript:void(0);"
                                                        style="opacity: 0.5; cursor: not-allowed;"
                                                        title="Product details not available">
                                                        <p><span>Coming Soon</span></p>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Feature Item Box End -->
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
    <!-- Related Products Section End -->
    <!-- Product Gallery Section Start -->
    @if ($product->gallery_active)
        <div class="our-features">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">{{ $product->productGalleries->first()->heading ?? 'Our Product' }}
                            </h3>
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
                                $galleryImages =
                                    $gallery && $gallery->images ? json_decode($gallery->images, true) : [];
                            @endphp
                            <!-- Feature Item Start -->
                            <div class="feature-item box-1 wow fadeInUp">
                                <div class="feature-image">
                                    <figure>
                                        @if (isset($galleryImages[0]))
                                            @php
                                                $ext0 = strtolower(pathinfo($galleryImages[0], PATHINFO_EXTENSION));
                                                $isVideo0 = in_array($ext0, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                                            @endphp
                                            @if ($isVideo0)
                                                <video
                                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                                                    controls>
                                                    <source src="{{ asset('storage/' . $galleryImages[0]) }}"
                                                        type="video/{{ $ext0 }}">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img src="{{ asset('storage/' . $galleryImages[0]) }}" alt="">
                                            @endif
                                        @else
                                            <img src="assets1/img/p1.png" alt="">
                                        @endif
                                    </figure>
                                </div>

                            </div>
                            <!-- Feature Item End -->

                            <!-- Feature Item Start -->
                            <div class="feature-item box-2 wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Scrolling Ticker Box Start -->

                                <div class="feature-image">
                                    <figure>
                                        @if (isset($galleryImages[1]))
                                            @php
                                                $ext1 = strtolower(pathinfo($galleryImages[1], PATHINFO_EXTENSION));
                                                $isVideo1 = in_array($ext1, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                                            @endphp
                                            @if ($isVideo1)
                                                <video
                                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                                                    controls>
                                                    <source src="{{ asset('storage/' . $galleryImages[1]) }}"
                                                        type="video/{{ $ext1 }}">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img src="{{ asset('storage/' . $galleryImages[1]) }}" alt="">
                                            @endif
                                        @else
                                            <img src="assets1/img/p5.png" alt="">
                                        @endif
                                    </figure>
                                </div>
                            </div>
                            <!-- Feature Item End -->

                            <!-- Feature Item Start -->
                            <div class="feature-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="feature-image">
                                    <figure>
                                        @if (isset($galleryImages[2]))
                                            @php
                                                $ext2 = strtolower(pathinfo($galleryImages[2], PATHINFO_EXTENSION));
                                                $isVideo2 = in_array($ext2, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                                            @endphp
                                            @if ($isVideo2)
                                                <video
                                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                                                    controls>
                                                    <source src="{{ asset('storage/' . $galleryImages[2]) }}"
                                                        type="video/{{ $ext2 }}">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img src="{{ asset('storage/' . $galleryImages[2]) }}" alt="">
                                            @endif
                                        @else
                                            <img src="assets1/img/p2.png" alt="">
                                        @endif
                                    </figure>
                                </div>

                            </div>
                            <!-- Feature Item End -->

                            <!-- Feature Item Start -->
                            <div class="feature-item box-4 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="feature-image">
                                    <figure>
                                        @if (isset($galleryImages[3]))
                                            @php
                                                $ext3 = strtolower(pathinfo($galleryImages[3], PATHINFO_EXTENSION));
                                                $isVideo3 = in_array($ext3, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                                            @endphp
                                            @if ($isVideo3)
                                                <video
                                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                                                    controls>
                                                    <source src="{{ asset('storage/' . $galleryImages[3]) }}"
                                                        type="video/{{ $ext3 }}">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img src="{{ asset('storage/' . $galleryImages[3]) }}" alt="">
                                            @endif
                                        @else
                                            <img src="assets1/img/p3.webp" alt="">
                                        @endif
                                    </figure>
                                </div>

                            </div>
                            <!-- Feature Item End -->

                            <!-- Feature Item Start -->
                            <div class="feature-item box-5 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="feature-image">
                                    <figure>
                                        @if (isset($galleryImages[4]))
                                            @php
                                                $ext4 = strtolower(pathinfo($galleryImages[4], PATHINFO_EXTENSION));
                                                $isVideo4 = in_array($ext4, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                                            @endphp
                                            @if ($isVideo4)
                                                <video
                                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                                                    controls>
                                                    <source src="{{ asset('storage/' . $galleryImages[4]) }}"
                                                        type="video/{{ $ext4 }}">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img src="{{ asset('storage/' . $galleryImages[4]) }}" alt="">
                                            @endif
                                        @else
                                            <img src="assets1/img/p4.png" alt="">
                                        @endif
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

        const mediaItems = [
            @if (!empty($productImages) && is_array($productImages))
                @foreach ($productImages as $index => $media)
                    @php
                        $ext = strtolower(pathinfo($media, PATHINFO_EXTENSION));
                        $isVideo = in_array($ext, ['mp4', 'avi', 'mov', 'webm', 'ogg']);
                    @endphp {
                        src: '{{ asset('storage/' . $media) }}',
                        type: '{{ $isVideo ? 'video' : 'image' }}',
                        ext: '{{ $ext }}'
                    }
                    {{ $index < count($productImages) - 1 ? ',' : '' }}
                @endforeach
            @else
                {
                    src: '{{ asset('assets1/img/pd1.png') }}',
                    type: 'image',
                    ext: 'png'
                }
            @endif
        ];

        let currentIndex = 0;
        const mainMediaContainer = document.getElementById('main-media-container');

        function updateMedia() {
            if (mainMediaContainer && mediaItems.length > 0) {
                const currentMedia = mediaItems[currentIndex];

                if (currentMedia.type === 'video') {
                    mainMediaContainer.innerHTML = `
                        <video id="sidebar-video" style="border-radius: 10px; width: 100%; height: auto;" controls>
                            <source src="${currentMedia.src}" type="video/${currentMedia.ext}">
                            Your browser does not support the video tag.
                        </video>
                    `;
                } else {
                    mainMediaContainer.innerHTML = `
                        <img id="sidebar-image" src="${currentMedia.src}" style="border-radius: 10px;" alt="Product Image">
                    `;
                }
            }
        }

        document.getElementById('prev-btn')?.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + mediaItems.length) % mediaItems.length;
            updateMedia();
            updateActiveThumbnail();
        });

        document.getElementById('next-btn')?.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % mediaItems.length;
            updateMedia();
            updateActiveThumbnail();
        });

        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                currentIndex = index;
                updateMedia();
                updateActiveThumbnail();
            });
        });

        function updateActiveThumbnail() {
            thumbnails.forEach((thumb, idx) => {
                if (idx === currentIndex) {
                    thumb.classList.add('active');
                    thumb.style.border = '2px solid #007bff';
                } else {
                    thumb.classList.remove('active');
                    thumb.style.border = '2px solid transparent';
                }
            });
        }

        // Initial load
        updateMedia();
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

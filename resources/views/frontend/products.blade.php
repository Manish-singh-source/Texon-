@extends('frontend.layouts.masters')
@section('content')
<!-- Page Header Section Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Portfolio </h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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
                    @if($products->isEmpty())
                        <div class="text-center">No record found</div>
                    @else
                        @foreach($products as $index => $product)
                        <div class="feature-item box-{{3 + $index}} wow fadeInUp" data-wow-delay="{{0.4 + $index * 0.2}}s">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ asset("./storage/".$product->product_thumbnail) }}" alt="" class="imgh">
                                </figure>
                            </div>
                            <div class="feature-item-content">
                                <h3>{{ $product->product_name }}</h3>
                                <p>{{ $product->sort_description }}</p>
                                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                                    @php
                                        $hasActiveSection = $product->banner_active ||
                                                           $product->about_product_active ||
                                                           $product->key_points_active ||
                                                           $product->gallery_active ||
                                                           $product->banner_video_active ||
                                                           $product->features_active;
                                    @endphp
                                    @if($hasActiveSection)
                                        <a href="{{ route('product-details', $product->id) }}">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    @else
                                        <a href="javascript:void(0);" style="opacity: 0.5; cursor: not-allowed;" title="Product details not available">
                                            <p><span>Coming Soon</span></p>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                @if(!$products->isEmpty())
                <div class="pt-3 d-flex justify-content-center">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
                @endif
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
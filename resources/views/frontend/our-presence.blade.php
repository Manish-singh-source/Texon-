@extends('frontend.layouts.masters')
@section('content')
<!-- Page Header Section Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Our Presence</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Presence</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

  <!-- Photo Gallery Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @foreach($presences as $index => $presence)
                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                        <a href="{{ asset('storage/' . $presence->image) }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset('storage/' . $presence->image) }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>
                @endforeach
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery End -->

@endsection
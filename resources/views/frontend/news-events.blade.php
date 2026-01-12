@extends('frontend.layouts.masters')
@section('content')
<!-- Page Header Section Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">News & Events</h1>
                    
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- News & Events Cards Section Start -->
<section class="news-events-cards">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="news-card" style="background-image: url('{{ asset('https://www.sfsgalsi.org/images/courses/8.jpg') }}');">
                    <div class="card-overlay">
                        <h3 class="card-title">News Title 1</h3>
                        <p class="card-date">January 12, 2026</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="news-card" style="background-image: url('{{ asset('assets/img/bg/card-bg-03.png') }}');">
                    <div class="card-overlay">
                        <h3 class="card-title">News Title 2</h3>
                        <p class="card-date">January 11, 2026</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="news-card" style="background-image: url('{{ asset('assets/img/bg/card-bg-05.png') }}');">
                    <div class="card-overlay">
                        <h3 class="card-title">News Title 3</h3>
                        <p class="card-date">January 10, 2026</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News & Events Cards Section End -->

 

@endsection
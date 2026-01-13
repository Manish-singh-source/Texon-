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
            @foreach($presences as $presence)
            <div class="col-lg-4 col-md-6">
                <div class="news-card" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('storage/' . $presence->featured_image) }}');">
                    <div class="card-overlay">
                        <h3 class="card-title">{{ $presence->title }}</h3>
                        <p class="card-date">{{ $presence->published_date ? \Carbon\Carbon::parse($presence->published_date)->format('F d, Y') : 'N/A' }}</p>
                        <a href="{{ route('presence-details', $presence->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- News & Events Cards Section End -->

 

@endsection
@extends('frontend.layouts.masters')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Blogs</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Blogs</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->


<!-- Page Blog Start -->
<div class="page-blog">
    <div class="container">
        <div class="row">
            @foreach($blogs as $index => $blog)
            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{ route('blog-details', $blog->id) }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ $blog->featured_image ? asset('storage/' . $blog->featured_image) : 'assets1/images/post-1.jpg' }}" alt="{{ $blog->title }}">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->
                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ route('blog-details', $blog->id) }}">{{ $blog->title }}</a></h2>
                        </div>
                        <!-- Post Item Content End -->
                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{ route('blog-details', $blog->id) }}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>
            @endforeach
            <div class="col-lg-12">
                <!-- Page Pagination Start -->
                <div class="page-pagination wow fadeInUp" data-wow-delay="1s">
                    {!! $blogs->links() !!}
                </div>
                <!-- Page Pagination End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Blog End -->


@endsection
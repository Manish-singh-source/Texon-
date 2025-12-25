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
            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{route('blog-details')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets1/images/post-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{route('blog-details')}}">Top 10 Cybersecurity Threats Every Business Must Watch Out
                                    for in 2025</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{route('blog-details')}}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{route('blog-details')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets1/images/post-2.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{route('blog-details')}}">Ransomware Attack Explain Preventin Response & Recovery
                                    Strategies</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{route('blog-details')}}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{route('blog-details')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets1/images/post-3.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{route('blog-details')}}">Essential Security Tips to Protect Your Remote Workforce and
                                    Data</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{route('blog-details')}}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{route('blog-details')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets1/images/post-4.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{route('blog-details')}}">The Future of Cyber Threats Key Risks and Trends to Watch in
                                    2025</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{route('blog-details')}}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.8s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{route('blog-details')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets1/images/post-5.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{route('blog-details')}}">Why Employee Training Is the First Line of Defense Against
                                    Cyber Attack</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{route('blog-details')}}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="1s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{route('blog-details')}}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="assets1/images/post-6.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{route('blog-details')}}">Cloud Security Best Practice Business Should Follow to Stay
                                    Protected</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{route('blog-details')}}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-12">
                <!-- Page Pagination Start -->
                <div class="page-pagination wow fadeInUp" data-wow-delay="1s">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- Page Pagination End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Blog End -->


@endsection
@extends('frontend.layouts.masters')
@section('content')
<!-- Page Header Section Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Category </h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->


<!-- Our Case Studies Section Start -->
<div class="our-case-study">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Category</h3>
                    <h2 class="text-effect" data-cursor="-opaque"> Texon Corporation at a Glance

                    </h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <!-- Case Study Item Start -->
                <div class="case-study-item wow fadeInUp">
                    <!-- Case Study Image Start -->
                    <div class="case-study-image">
                        <a href="products.php" data-cursor-text="View">
                            <figure>
                                <img src="assets1/img/e1.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Case Study Image End -->

                    <!-- Case Study Item Button Start -->
                    <div class="case-study-item-btn">
                        <a href="products.php">
                            <img src="assets1/images/arrow-white.svg" alt="">
                        </a>
                    </div>
                    <!-- Case Study Item Button End -->

                    <!-- Case Study Iten Content Start -->
                    <div class="case-study-item-content">
                        <h3><a href="products.php">Engineering</a></h3>
                       
                    </div>
                    <!-- Case Study Item Content End -->
                </div>
                <!-- Case Study Item End -->
            </div>

            <div class="col-xl-6 col-md-6">
                <!-- Case Study Item Start -->
                <div class="case-study-item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Case Study Image Start -->
                    <div class="case-study-image">
                        <a href="products.php" data-cursor-text="View">
                            <figure>
                                <img src="assets1/img/e2.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Case Study Image End -->

                    <!-- Case Study Item Button Start -->
                    <div class="case-study-item-btn">
                        <a href="products.php">
                            <img src="assets1/images/arrow-white.svg" alt="">
                        </a>
                    </div>
                    <!-- Case Study Item Button End -->

                    <!-- Case Study Iten Content Start -->
                    <div class="case-study-item-content">
                        <h3><a href="products.php">Life Science</a></h3>
                        
                    </div>
                    <!-- Case Study Item Content End -->
                </div>
                <!-- Case Study Item End -->
            </div>




        </div>
    </div>
</div>
<!-- Our Case Studies Section End -->
@endsection
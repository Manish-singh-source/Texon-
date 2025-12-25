@extends('frontend.layouts.masters')
@section('content')

<!-- Page Header Section Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>Us</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->
<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Contact Info List Start -->
                <div class="contact-info-list">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="assets1/images/icon-phone-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Contact us</h3>
                            <p><a href="tel:+919769606708">+91 9769 60 6708</a></p>
                            <!-- <p><a href="tel:+798765878">+(798) 765-878</a></p> -->
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="assets1/images/icon-mail-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Email us</h3>
                            <p><a href="mailto:admin@texon-corporation.com">admin@texon-corporation.com</a></p>
                            <!-- <p><a href="mailto:support@domainname.com">support@domainname.com</a></p> -->
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="assets1/images/icon-location-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Address</h3>
                            <p>Mumbai </p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->



                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="assets1/img/social-media.png" alt="">
                        </div>
                        <div class="contact-info-content ">
                            <h3>Social Media</h3>
                            <div class="social-medias ">
                                <ul>
                                    <li> <a href="" target="_blank"><img src="assets1/img/whatsapp.png" alt=""></a> </li>
                                    <li><a href="" target="_blank"><img src="assets1/img/facebook.png" alt=""> </a> </li>
                                    <li><a href="" target="_blank"><img src="assets1/img/linkedin.png" alt=""></a> </li>
                                    <li><a href="" target="_blank"><img src="assets1/img/twitter.png" alt=""></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>
                <!-- Contact Info List End -->
            </div>

            <div class="col-xl-5">
                <!-- Contact Us Content Start -->
                <div class="contact-content-box">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Get In Touch</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Contact us</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions or need help? Contact Texon
                            Corporation today and let us know how we can assist you.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.4s">
                        <img src="assets1/img/map.png" alt="" class="map">
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
                <!-- Contact Us Content End -->
            </div>

            <div class="col-xl-7">
                <!-- Contact Us Form Start -->
                <div class="contact-us-form">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-2">Fill up the <span>form</span></h2>
                        <!-- <p class="wow fadeInUp">Simply fill out the form below with your details and requirements, and
                            the Texon team will get back to you promptly with the right solutions tailored to your
                            needs.</p> -->
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Start -->
                    <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                        data-wow-delay="0.2s">
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">First Name *</label>
                                <input type="text" name="fname" class="form-control" id="fname"
                                    placeholder="Your First Name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Last Name *</label>
                                <input type="text" name="lname" class="form-control" id="lname"
                                    placeholder="Your Last Name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Your Email Address" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Phone Number *</label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    placeholder="Your Phone Number" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <label class="form-label">Product Name *</label>
                                <input type="text" name="product" class="form-control" id="product"
                                    placeholder="Your Product Name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <label class="form-label">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="5"
                                    placeholder="Any Message..."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-form-btn">
                                    <button type="submit" class="btn-default"><span>Submit Form</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->

@endsection
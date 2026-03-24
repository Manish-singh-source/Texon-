@extends('frontend.layouts.masters')
@section('content')
<style>
.post-social-sharing{
    z-index: 1;
    position: relative;
}
</style>
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
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
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
                            <p><a href="tel:+919769606708">+91 - 976960708</a></p>
                            <p><a href="tel:+919867636276">+91 - 9867636276</a></p>
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
                            <p><a href="mailto:sales@texon-corporation.com">sales@texon-corporation.com</a></p>
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
                            <p>111,Infinity Business square , Golani Industrial Area
Vasai (East), Mumbai, Maharashtra ,India 401208 
</p>
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
                            <div class="">
                                <div class="post-social-sharing wow fadeInUp text-center" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <ul>
                                    <li><a href="https://in.linkedin.com/company/texoncorporation" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com/texon_corporation/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@texoncorporation" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
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
                       
                    </div>
                    <!-- Section Title End -->

                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.4s">
                        <img src="assets1/images/image.png" alt="" class="map">
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
                         <p class="wow fadeInUp" data-wow-delay="0.2s">We'd love to hear from you. Get in touch with Texon Corporation for product inquiries, demos, support, or consultations.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Start -->
                    @php($recaptchaSiteKey = config('services.recaptcha.site_key'))
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <form id="contactForm" action="{{ route('contact-us.store') }}" method="POST" data-toggle="validator" class="wow fadeInUp"
                        data-wow-delay="0.2s">
                        @csrf
                        <input type="hidden" name="page" value="contact-us">
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">First Name *</label>
                                <input type="text" name="fname" class="form-control" id="fname"
                                    placeholder="Your First Name" value="{{ old('fname') }}" required>
                                @error('fname')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Last Name *</label>
                                <input type="text" name="lname" class="form-control" id="lname"
                                    placeholder="Your Last Name" value="{{ old('lname') }}" required>
                                @error('lname')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Your Email Address" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Phone Number *</label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    placeholder="Your Phone Number" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Company Name *</label>
                                <input type="text" name="company" class="form-control" id="company"
                                    placeholder="Your Company Name" value="{{ old('company') }}" required>
                                @error('company')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Application</label>
                                <input type="text" name="application" class="form-control" id="application"
                                    placeholder="Your Application" value="{{ old('application') }}">
                                @error('application')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <label class="form-label">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="5"
                                    placeholder="Any Message...">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                @if($recaptchaSiteKey)
                                    <div class="g-recaptcha" data-sitekey="{{ $recaptchaSiteKey }}"></div>
                                @else
                                    <div class="alert alert-warning mb-0">reCAPTCHA is not configured. Add `RECAPTCHA_SITE_KEY` and `RECAPTCHA_SECRET_KEY` in `.env`.</div>
                                @endif
                                @error('g-recaptcha-response')
                                    <div class="text-danger small mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-form-btn">
                                    <button type="submit" id="myBtn" class="btn-default"><span>Submit Form</span></button>
                                    {{-- <div id="msgSubmit" class="h3 hidden"></div> --}}
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
@if($recaptchaSiteKey)
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endif
<script>
document.getElementById("contactForm").addEventListener("submit", function () {
    const btn = document.getElementById("myBtn");
    btn.disabled = true;
    btn.textContent = "Loading...";
});
</script>

@endsection



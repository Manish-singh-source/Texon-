@extends('frontend.layouts.masters')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Request A <span>Quote</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Request a Quote</li>
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
                    @php($recaptchaSiteKey = config('services.recaptcha.site_key'))
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <div id="requestQuoteFormAlert"></div>
                    <form id="requestQuoteForm" action="{{ route('request-a-quote.store') }}" method="POST" data-toggle="validator" class="wow fadeInUp"
                        data-wow-delay="0.2s">
                        @csrf
                        <input type="hidden" name="page" value="request-a-quote">
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

                            <div class="form-group col-md-12 mb-4">
                                <label class="form-label">Product Name *</label>
                                <input type="text" name="product" class="form-control" id="product"
                                    placeholder="Your Product Name" value="{{ old('product') }}" required>
                                @error('product')
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
                                    <button type="submit" id="requestQuoteBtn" class="btn-default"><span>Submit Form</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Contact Form End -->
                </div>
            </div>
            <div class="col-xl-5">
                <!-- Contact Us Content Start -->
                <div class="contact-content-box">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Request Your Free Quote</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Experience the Texon difference</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Get in touch with Texon today for a free quote and discover solutions designed to meet your exact needs. We are committed to quality, efficiency, and customer satisfaction.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Google Map IFrame Start -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3767.7701736415747!2d72.83828007520857!3d19.205237982026066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDEyJzE4LjkiTiA3MsKwNTAnMjcuMSJF!5e0!3m2!1sen!2sin!4v1766642264015!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- Google Map IFrame End -->
                </div>
                <!-- Contact Us Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->
@if($recaptchaSiteKey)
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endif
<script>
$(function () {
    const $form = $("#requestQuoteForm");
    const $button = $("#requestQuoteBtn");
    const $alert = $("#requestQuoteFormAlert");

    function setButtonState(loading) {
        $button.prop("disabled", loading);
        $button.html(loading ? "<span>Loading...</span>" : "<span>Submit Form</span>");
    }

    function showAlert(type, message) {
        $alert.html(`<div class="alert alert-${type}">${message}</div>`);
    }

    $form.on("submit", function (e) {
        e.preventDefault();
        $alert.html("");

        if (this.checkValidity && !this.checkValidity()) {
            this.reportValidity();
            return;
        }

        if (typeof grecaptcha !== "undefined" && grecaptcha.getResponse().length === 0) {
            showAlert("danger", "Please complete the reCAPTCHA verification.");
            return;
        }

        setButtonState(true);

        $.ajax({
            url: $form.attr("action"),
            type: "POST",
            data: $form.serialize(),
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            },
            success: function (response) {
                if (response.status === "success") {
                    window.location.reload();
                    return;
                }

                showAlert("danger", response.message || "Request completed.");
            },
            error: function (xhr) {
                if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                    const messages = Object.values(xhr.responseJSON.errors).flat().join("<br>");
                    showAlert("danger", messages);
                } else {
                    showAlert("danger", "Something went wrong. Please try again.");
                }

                if (typeof grecaptcha !== "undefined") {
                    grecaptcha.reset();
                }
            },
            complete: function () {
                setButtonState(false);
            }
        });
    });
});
</script>

@endsection

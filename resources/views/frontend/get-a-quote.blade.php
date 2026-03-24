@extends('frontend.layouts.masters')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Get A <span>Quote</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Get a Quote</li>
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
                    <div id="quoteFormAlert"></div>
                    <form id="contactForm1" action="{{ route('get-a-quote.store', $product->id) }}" method="POST" class="wow fadeInUp"
                        data-wow-delay="0.2s">
                        @csrf
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
                                <label class="form-label">Company Name *</label>
                                <input type="text" name="company" class="form-control" id="company"
                                    placeholder="Your Company Name" value="{{ old('company') }}" required>
                                @error('company')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-5">
                                <label class="form-label">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="5"
                                    placeholder="Any Message...">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-5">
                                <label class="form-label">Application</label>
                                <textarea name="application" class="form-control" id="application" rows="5"
                                    placeholder="Any Message...">{{ old('application') }}</textarea>
                                @error('application')
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
                        <h3 class="wow fadeInUp">Our Product</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Product Detail</h2>
                        
                    </div>
                    <!-- Section Title End -->

                    <!-- Product Detail Start -->
                    <div class="product-detail-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="product-image pb-30">
                            @php
                                $aboutProduct = $product->aboutProducts->first();
                                $productImages = [];

                                if ($aboutProduct && $aboutProduct->images) {
                                    if (is_string($aboutProduct->images)) {
                                        $productImages = json_decode($aboutProduct->images, true) ?? [];
                                    } elseif (is_array($aboutProduct->images)) {
                                        $productImages = $aboutProduct->images;
                                    }
                                }

                                $firstImage = !empty($productImages)
                                    ? asset('storage/' . $productImages[0])
                                    : ($product->product_thumbnail ? asset('storage/' . $product->product_thumbnail) : asset('assets1/img/pd1.png'));
                            @endphp
                            <img src="{{ $firstImage }}" alt="{{ $product->product_name }}" style="width: 300px; height: auto; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        </div>
                        <div class="product-info">
                            <h3>{{ $product->product_name }}</h3>
                            <p>{!! $product->sort_description ?: 'No description available.' !!}</p>
                        </div>
                    </div>
                     
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
    const $form = $("#contactForm1");
    const $button = $("#myBtn");
    const $alert = $("#quoteFormAlert");

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




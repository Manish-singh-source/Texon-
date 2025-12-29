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
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form id="contactForm" action="{{ route('get-a-quote.store', $product->id) }}" method="POST" class="wow fadeInUp"
                        data-wow-delay="0.2s">
                        @csrf
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
                                <label class="form-label">Company Name *</label>
                                <input type="text" name="company" class="form-control" id="company"
                                    placeholder="Your Company Name" required>
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
                                    <button type="submit" id="submitBtn" class="btn-default">
                                        <span id="btnText">Submit Form</span>
                                        <span id="btnLoader" style="display: none;">
                                            <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle; margin-right: 8px;">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none" opacity="0.25"/>
                                                <path d="M12 2 A10 10 0 0 1 22 12" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round">
                                                    <animateTransform attributeName="transform" type="rotate" from="0 12 12" to="360 12 12" dur="1s" repeatCount="indefinite"/>
                                                </path>
                                            </svg>
                                            Submitting...
                                        </span>
                                    </button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
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

<style>
    #submitBtn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        pointer-events: none;
    }

    .alert {
        padding: 15px;
        margin-top: 20px;
        border-radius: 5px;
        font-size: 16px;
    }

    .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
    }

    .alert-danger {
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }

    .hidden {
        display: none;
    }
</style>

<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        var form = $(this);
        var submitBtn = $('#submitBtn');
        var btnText = $('#btnText');
        var btnLoader = $('#btnLoader');
        var msgSubmit = $('#msgSubmit');

        // Disable the submit button and show loader
        submitBtn.prop('disabled', true);
        btnText.hide();
        btnLoader.show();

        // Clear previous messages
        msgSubmit.removeClass('alert alert-success alert-danger').addClass('hidden').text('');

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(response) {
                // Show success message
                msgSubmit.removeClass('hidden').addClass('alert alert-success').text(response.message);

                // Reset the form
                form[0].reset();

                // Re-enable the submit button and hide loader
                submitBtn.prop('disabled', false);
                btnLoader.hide();
                btnText.show();

                // Scroll to success message
                $('html, body').animate({
                    scrollTop: msgSubmit.offset().top - 100
                }, 500);
            },
            error: function(xhr) {
                var errorMessage = 'An error occurred. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    errorMessage = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                }

                // Show error message
                msgSubmit.removeClass('hidden').addClass('alert alert-danger').html(errorMessage);

                // Re-enable button on error so user can try again
                submitBtn.prop('disabled', false);
                btnLoader.hide();
                btnText.show();

                // Scroll to error message
                $('html, body').animate({
                    scrollTop: msgSubmit.offset().top - 100
                }, 500);
            }
        });
    });
});
</script>

@endsection
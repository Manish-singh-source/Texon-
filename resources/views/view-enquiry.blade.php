@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Enquiry Details</h2>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2">
                        <a href="{{ route('enquiries') }}" class="btn btn-outline-primary d-flex align-items-center"><i class="ti ti-arrow-left me-2"></i>Back to Enquiries</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="card">
                <div class="card-body">

                    <div class="row align-items-start">

                        <!-- Left Profile -->
                        <div class="col-md-4">
                            <div class="d-flex align-items-start">
                                <div
                                    style="width:120px;height:120px;background:#e0e0e0;border-radius:4px;
						display:flex;align-items:center;justify-content:center;">
                                    <img src="{{ $product->product_thumbnail ? asset('storage/' . $product->product_thumbnail) : asset('assets1/img/pd1.png') }}" alt="{{ $product->product_name }}" style="width:100%; height:100%; object-fit:cover; border-radius:4px;">
                                </div>

                                <div class="ms-3">
                                    <h3 class="mb-1">{{ $enquiry->user_name }}</h3>
                                    <p class="mb-0 text-muted">Enquiry Date {{ $enquiry->created_at->format('d M Y') }}</p>
                                    <p class="text-muted">Product: {{ $product->product_name }}</p>

                                    <a href="{{ route('edit-enquiry', $enquiry->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Info -->
                        <div class="col-md-8">
                            <div class="border rounded">

                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <span>Email</span>
                                    <strong>{{ $enquiry->user_email }}</strong>
                                </div>

                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <span>Phone</span>
                                    <strong>{{ $enquiry->user_phone }}</strong>
                                </div>

                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <span>Company</span>
                                    <strong>{{ $enquiry->company }}</strong>
                                </div>

                                <div class="d-flex justify-content-between p-3">
                                    <span>Status</span>
                                    <span class="badge bg-{{ $enquiry->status == 'pending' ? 'warning' : ($enquiry->status == 'responded' ? 'success' : 'secondary') }}">{{ ucfirst($enquiry->status) }}</span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <hr class="my-4">

                    <!-- Product Information -->
                    <h5 class="mb-3">Product Information</h5>

                    <div class="card-body pb-0">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">Product Name</p>
                                    <h6 class="fw-normal">{{ $product->product_name }}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">Category</p>
                                    <h6 class="fw-normal">{{ $product->category ?? 'N/A' }}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">Enquiry ID</p>
                                    <h6 class="fw-normal">{{ $enquiry->enquiry_id }}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">Created At</p>
                                    <h6 class="fw-normal">{{ $enquiry->created_at->format('d M Y') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enquiry Message -->
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Enquiry Message</h5>
                        </div>
                        <div class="card-body">
                            <p>{{ $enquiry->message ?: 'No message provided.' }}</p>
                        </div>
                    </div>

                    <!-- Application -->
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Application</h5>
                        </div>
                        <div class="card-body">
                            <p>{{ $enquiry->application ?: 'No application details provided.' }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <div class="footer d-flex align-items-center justify-content-center bg-white border-top p-3">
                <p class="mb-0">
                    © 2025 - Made by
                    <a href="https://technofra.com/" class="text-primary">Technofra</a>
                </p>
            </div>
            <!-- /Footer -->
            <!-- /Page Wrapper -->

        </div>
        <!-- /Page Wrapper -->
@endsection
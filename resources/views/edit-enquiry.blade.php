@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Edit Enquiry</h2>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2">
                        <a href="{{ route('view-enquiry', $enquiry->id) }}" class="btn btn-outline-primary d-flex align-items-center"><i class="ti ti-arrow-left me-2"></i>Back to Enquiry</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('edit-enquiry.update', $enquiry->id) }}" method="POST">
                        @csrf
                        @method('PUT')

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
                                    </div>
                                </div>
                            </div>

                            <!-- Right Info -->
                            <div class="col-md-8">
                                <div class="border rounded p-3">

                                    <div class="mb-3">
                                        <label for="user_name" class="form-label">User Name</label>
                                        <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $enquiry->user_name }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="user_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="user_email" name="user_email" value="{{ $enquiry->user_email }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="user_phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="user_phone" name="user_phone" value="{{ $enquiry->user_phone }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control" id="company" name="company" value="{{ $enquiry->company }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="pending" {{ $enquiry->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="responded" {{ $enquiry->status == 'responded' ? 'selected' : '' }}>Responded</option>
                                            <option value="closed" {{ $enquiry->status == 'closed' ? 'selected' : '' }}>Closed</option>
                                        </select>
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
                                <textarea class="form-control" id="message" name="message" rows="4">{{ $enquiry->message }}</textarea>
                            </div>
                        </div>

                        <!-- Application -->
                        <div class="card mt-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Application</h5>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control" id="application" name="application" rows="4">{{ $enquiry->application }}</textarea>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Update Enquiry</button>
                            <a href="{{ route('view-enquiry', $enquiry->id) }}" class="btn btn-secondary">Cancel</a>
                        </div>

                    </form>

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
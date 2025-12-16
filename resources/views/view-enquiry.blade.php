@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Enquiry Details</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/enquiries">Enquiries</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Enquiry Details</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                    <div class="mb-2">
                        <a href="/enquiries" class="btn btn-outline-primary d-flex align-items-center"><i class="ti ti-arrow-left me-2"></i>Back to Enquiries</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title">Product Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product Name</label>
                                        <p>Laptop</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product SKU</label>
                                        <p>LAPTOP-001</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product Category</label>
                                        <p>Electronics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Information -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title">User Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">User Name</label>
                                        <p>John Doe</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">User Email</label>
                                        <p>john@example.com</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">User Phone</label>
                                        <p>+1234567890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enquiry Details -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Enquiry Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Enquiry Message</label>
                                        <p>Interested in this product. Can you provide more details about the specifications and pricing?</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Enquiry Status</label>
                                        <p><span class="badge badge-warning">Pending</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Created At</label>
                                        <p>12 Sep 2024</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Updated At</label>
                                        <p>15 Sep 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
            <p>Designed & Developed By <a href="javascript:void(0);" class="text-primary">Technofra</a></p>
        </div>

    </div>
    <!-- /Page Wrapper -->
@endsection
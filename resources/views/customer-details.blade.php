@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Customer Details</h2>
                    <!--<nav>
           <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
             <a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
            </li>
            <li class="breadcrumb-item">
             Application
            </li>
            <li class="breadcrumb-item active" aria-current="page">Invoices</li>
           </ol>
          </nav>-->
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <!--<div class="mb-2">
           <a href="#" class="btn btn-dark d-flex align-items-center"><i class="ti ti-download me-2"></i>Download</a>
          </div>-->
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
                                    400 × 400
                                </div>

                                <div class="ms-3">
                                    <h3 class="mb-1">{{ $customer->first_name }} {{ $customer->last_name }}</h3>
                                    <p class="mb-0 text-muted">Joining Date {{ $customer->created_at->format('d M Y') }}</p>
                                    <p class="text-muted">Total Branch 1</p>

                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Info -->
                        <div class="col-md-8">
                            <div class="border rounded">

                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <span>Email</span>
                                    <strong>{{ $customer->email }}</strong>
                                </div>

                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <span>Phone</span>
                                    <strong>{{ $customer->phone }}</strong>
                                </div>

                                <div class="d-flex justify-content-between p-3">
                                    <span>Gender</span>
                                    <span
                                        class="badge bg-success">{{ $customer->gender == 1 ? 'Male' : ($customer->gender == 2 ? 'Female' : 'Other') }}</span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <hr class="my-4">

                    <!-- Branch Information -->
                    <h5 class="mb-3">Other Information</h5>

                    <div class="card-body pb-0">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">Adress</p>
                                    <h6 class="fw-normal">{{ $customer->company_address ?? 'N/A' }}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">City</p>
                                    <h6 class="fw-normal">{{ $customer->city ?? 'N/A' }}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">Country</p>
                                    <h6 class="fw-normal">{{ $customer->country ?? 'N/A' }}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">State</p>
                                    <h6 class="fw-normal">{{ $customer->state ?? 'N/A' }}</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <p class="mb-1">Email</p>
                                    <h6 class="fw-normal">{{ $customer->email }}</h6>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div>
            </div>

            <!-- Services Source -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Orders</h5>
                </div>

                <div class="card-body p-0">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Products & HSN</th>
                                <th>Order Totals</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th>Invoice</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    No service records found for this customer.
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

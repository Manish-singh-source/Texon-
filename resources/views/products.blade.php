@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Product</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="https://smarthr.co.in/demo/html/template/index.html"><i
                                        class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Product
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Product List</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
                        <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                            <a href="https://smarthr.co.in/demo/html/template/products.html"
                                class="btn btn-icon btn-sm active bg-primary text-white me-1"><i
                                    class="ti ti-list-tree"></i></a>
                            <a href="https://smarthr.co.in/demo/html/template/products-grid.html"
                                class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
                        </div>
                    </div>
                    <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-2">
                        <a href="/add-new-product" class="btn btn-primary d-flex align-items-center"><i
                                class="ti ti-circle-plus me-2"></i>Add Product</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="row">

                <!-- Total Products -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-dark rounded-circle"><i
                                            class="ti ti-package"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Total Products</p>
                                    <h4>150</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-purple badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Products -->

                <!-- In Stock -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-success rounded-circle"><i
                                            class="ti ti-check-circle"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">In Stock</p>
                                    <h4>120</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-primary badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /In Stock -->

                <!-- Out of Stock -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-danger rounded-circle"><i
                                            class="ti ti-x-circle"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Out of Stock</p>
                                    <h4>30</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-dark badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Out of Stock -->

                <!-- New Arrivals -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-info rounded-circle"><i class="ti ti-plus"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">New Arrivals</p>
                                    <h4>10</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-secondary badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /New Arrivals -->

            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Product List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange"
                                    placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Designation
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Developer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Executive</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Select Status
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Sort By : Last 7 Days
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="no-sort">
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox" id="select-all">
                                        </div>
                                    </th>
                                    <th>Product ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                    <th>Added Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-001</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Laptop</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$999.99</td>
                                     <td>Electronics</td>
                                     <td>50</td>
                                     <td>12 Sep 2024</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-002</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Smartphone</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$699.99</td>
                                     <td>Electronics</td>
                                     <td>30</td>
                                     <td>15 Oct 2024</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-003</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Tablet</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$499.99</td>
                                     <td>Electronics</td>
                                     <td>20</td>
                                     <td>20 Nov 2024</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-004</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Headphones</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$199.99</td>
                                     <td>Electronics</td>
                                     <td>100</td>
                                     <td>05 Dec 2024</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-005</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Monitor</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$299.99</td>
                                     <td>Electronics</td>
                                     <td>15</td>
                                     <td>10 Jan 2025</td>
                                     <td>
                                         <span class="badge badge-danger d-inline-flex align-items-center badge-sm">
                                             <i class="ti ti-point-filled me-1"></i>Inactive
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-006</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Keyboard</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$89.99</td>
                                     <td>Electronics</td>
                                     <td>50</td>
                                     <td>25 Feb 2025</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-007</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Mouse</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$49.99</td>
                                     <td>Electronics</td>
                                     <td>80</td>
                                     <td>12 Mar 2025</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-008</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Printer</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$249.99</td>
                                     <td>Electronics</td>
                                     <td>10</td>
                                     <td>18 Apr 2025</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-009</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Router</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$129.99</td>
                                     <td>Electronics</td>
                                     <td>25</td>
                                     <td>30 May 2025</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a
                                             href="https://smarthr.co.in/demo/html/template/product-details.html">Prod-010</a>
                                     </td>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                 class="avatar avatar-md" data-bs-toggle="modal"
                                                 data-bs-target="#view_details"><img
                                                     src="https://placehold.co/100x100"
                                                     class="img-fluid rounded-circle" alt="img"></a>
                                             <div class="ms-2">
                                                 <p class="text-dark mb-0"><a
                                                         href="https://smarthr.co.in/demo/html/template/product-details.html"
                                                         data-bs-toggle="modal" data-bs-target="#view_details">Webcam</a>
                                                 </p>
                                                 <span class="fs-12">Electronics</span>
                                             </div>
                                         </div>
                                     </td>
                                     <td>$79.99</td>
                                     <td>Electronics</td>
                                     <td>40</td>
                                     <td>14 Jun 2025</td>
                                     <td>
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Active
                                         </span>
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="/view-product" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="#" class="me-2" data-bs-toggle="modal"
                                                 data-bs-target="#edit_product"><i class="ti ti-edit"></i></a>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                     class="ti ti-trash"></i></a>
                                         </div>
                                     </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
            <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
        </div>

    </div>
    <!-- /Page Wrapper -->


    <!-- Edit Product -->
    <div class="modal fade" id="edit_product">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <h4 class="modal-title me-2">Edit Product</h4><span>Product ID : PROD -0024</span>
                    </div>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="https://smarthr.co.in/demo/html/template/products.html">
                    <div class="contact-grids-tab">
                        <ul class="nav nav-underline" id="myTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="info-tab2" data-bs-toggle="tab"
                                    data-bs-target="#basic-info2" type="button" role="tab"
                                    aria-selected="true">Basic Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="address-tab2" data-bs-toggle="tab"
                                    data-bs-target="#address2" type="button" role="tab"
                                    aria-selected="false">Permissions</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="basic-info2" role="tabpanel"
                            aria-labelledby="info-tab2" tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                            <div
                                                class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                <img src="https://placehold.co/100x100"
                                                    alt="img" class="rounded-circle">
                                            </div>
                                            <div class="profile-upload">
                                                <div class="mb-2">
                                                    <h6 class="mb-1">Upload Product Image</h6>
                                                    <p class="fs-12">Image should be below 4 mb</p>
                                                </div>
                                                <div class="profile-uploader d-flex align-items-center">
                                                    <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                        Upload
                                                        <input type="file" class="form-control image-sign"
                                                            multiple="">
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Product Name <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="Laptop">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Product ID <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="Prod-001">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Price <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" value="$999.99">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Stock Quantity <span class="text-danger">
                                                    *</span></label>
                                            <input type="number" class="form-control" value="50">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Added Date <span class="text-danger">
                                                    *</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy" value="17-10-2022">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Supplier</label>
                                            <input type="text" class="form-control" value="Tech Supplier Inc.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Electronics</option>
                                                <option>Clothing</option>
                                                <option>Home & Garden</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Subcategory</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Laptops</option>
                                                <option>Phones</option>
                                                <option>Accessories</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description <span class="text-danger">
                                                    *</span></label>
                                            <textarea class="form-control" rows="3">High-performance laptop for professionals.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-light border me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2"
                            tabindex="0">
                            <div class="modal-body">
                                <div class="card bg-light-500 shadow-none">
                                    <div
                                        class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h6>Enable Options</h6>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="form-check form-switch me-2">
                                                <label class="form-check-label mt-0">
                                                    <input class="form-check-input me-2" type="checkbox" role="switch">
                                                    Enable all Module
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center">
                                                <label class="form-check-label mt-0">
                                                    <input class="form-check-input" type="checkbox" checked="">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive border rounded">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch" checked>
                                                            Holidays
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                checked="">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                checked="">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Leaves
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Clients
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Projects
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Tasks
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Chats
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch" checked>
                                                            Assets
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                checked="">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                checked="">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Timing Sheets
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-light border me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#success_modal">Save </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Employee -->

    <!-- Add Product Success -->
    <div class="modal fade" id="success_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center p-3">
                        <span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
                                class="ti ti-check fs-24"></i></span>
                        <h5 class="mb-2">Product Added Successfully</h5>
                        <p class="mb-3">Laptop has been added with Product ID : <span class="text-primary">#PROD -
                                0001</span>
                        </p>
                        <div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <a href="https://smarthr.co.in/demo/html/template/products.html"
                                        class="btn btn-dark w-100">Back to List</a>
                                </div>
                                <div class="col-6">
                                    <a href="https://smarthr.co.in/demo/html/template/product-details.html"
                                        class="btn btn-primary w-100">Detail Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Product Success -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked products, this cant be undone once you delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="https://smarthr.co.in/demo/html/template/products.html" class="btn btn-danger">Yes,
                            Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection

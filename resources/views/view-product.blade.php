@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Product Details</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/products">Products</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                    <div class="mb-2">
                        <a href="/products" class="btn btn-outline-primary d-flex align-items-center"><i class="ti ti-arrow-left me-2"></i>Back to Products</a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Product Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-light w-100 rounded p-3 mb-4">
                                        <h6 class="mb-3">Product Media</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Thumbnail</label>
                                                    <div>
                                                        <img src="https://placehold.co/200x200" alt="Product Thumbnail" class="img-fluid rounded">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Image Gallery</label>
                                                    <div class="d-flex">
                                                        <img src="https://placehold.co/100x100" alt="Gallery Image 1" class="img-fluid rounded me-2">
                                                        <img src="https://placehold.co/100x100" alt="Gallery Image 2" class="img-fluid rounded me-2">
                                                        <img src="https://placehold.co/100x100" alt="Gallery Image 3" class="img-fluid rounded">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">SKU</label>
                                                    <p>LAPTOP-001</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Video</label>
                                                    <p>No video uploaded</p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product Name</label>
                                        <p>Laptop</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product ID</label>
                                        <p>Prod-001</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand / Manufacturer</label>
                                        <p>TechCorp</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tags / Keywords</label>
                                        <p>laptop, electronics, computer</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Regular Price</label>
                                        <p>$999.99</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Sale / Discount Price</label>
                                        <p>$899.99</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Cost Price</label>
                                        <p>$800.00</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tax Class / Tax Rate</label>
                                        <p>10%</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Stock Quantity</label>
                                        <p>50</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Stock Status</label>
                                        <p>In stock</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Low Stock Threshold</label>
                                        <p>5</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Added Date</label>
                                        <p>12 Sep 2024</p>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Weight</label>
                                        <p>1.5 kg</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Dimensions (L×W×H)</label>
                                        <p>35x25x2 cm</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <p>Electronics</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Subcategory</label>
                                        <p>Laptops</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <p>High-performance laptop for professionals.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Detailed Description</label>
                                        <p>High-performance laptop for professionals. Perfect for work and entertainment with powerful specs.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Specifications / Attributes</label>
                                        <p>Processor: Intel i7, RAM: 16GB, Storage: 512GB SSD, Screen: 15.6" FHD</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Variants (Colors / Sizes / Styles)</label>
                                        <p>Color: Black - SKU: BLACK001 - Price: 999 - Stock: 20; Color: Silver - SKU: SILVER001 - Price: 999 - Stock: 30</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <p>Buy Laptop Online - High Performance Laptop</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <p>Shop the best laptop for work and play. High performance, great price.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug / URL</label>
                                        <p>laptop-high-performance</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Promotions / Discounts</label>
                                        <p>10% off for first purchase</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Related Products</label>
                                        <p>Prod-002, Prod-003</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Custom Attributes</label>
                                        <p>Eco-friendly: Yes, Warranty: 1 year</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Availability Date / Launch Date</label>
                                        <p>01 Oct 2024</p>
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
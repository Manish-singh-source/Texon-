@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Add New Product</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Product
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="head-icons ms-2">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
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
                        <form action="https://smarthr.co.in/demo/html/template/products.html" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-light w-100 rounded p-3 mb-4">
                                        <h6 class="mb-3">Product Media</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Thumbnail</label>
                                                    <input type="file" class="form-control" name="product_thumbnail" accept="image/*">
                                                    <small class="text-muted">Upload a single thumbnail image (max 4MB)</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Image Gallery</label>
                                                    <input type="file" class="form-control" name="image_gallery[]" multiple accept="image/*">
                                                    <small class="text-muted">Upload multiple images for gallery (max 4MB each)</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">SKU <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="sku">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Video</label>
                                                    <input type="file" class="form-control" name="product_video" accept="video/*">
                                                    <small class="text-muted">Upload product video (optional)</small>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product Name <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" name="product_name">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand / Manufacturer</label>
                                        <input type="text" class="form-control" name="brand">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tags / Keywords</label>
                                        <input type="text" class="form-control" name="tags" placeholder="Comma separated">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Regular Price <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Sale / Discount Price</label>
                                        <input type="text" class="form-control" name="sale_price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Cost Price</label>
                                        <input type="text" class="form-control" name="cost_price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tax Class / Tax Rate</label>
                                        <input type="text" class="form-control" name="tax_rate" placeholder="e.g. 10%">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Stock Quantity <span class="text-danger"> *</span></label>
                                        <input type="number" class="form-control" name="stock_quantity">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">PDF<span class="text-danger"> *</span></label>
                                        <input type="file" class="form-control" name="pdf">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Stock Status</label>
                                        <select class="select" name="stock_status">
                                            <option>Select</option>
                                            <option>In stock</option>
                                            <option>Out of stock</option>
                                            <option>Backorder</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Added Date <span class="text-danger"> *</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" name="added_date" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Weight</label>
                                        <input type="text" class="form-control" name="weight" placeholder="e.g. 1.5 kg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Dimensions (L×W×H)</label>
                                        <input type="text" class="form-control" name="dimensions" placeholder="e.g. 10x5x2 cm">
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="select" name="category">
                                            <option>Select</option>
                                            <option>Electronics</option>
                                            <option>Clothing</option>
                                            <option>Home & Garden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Subcategory</label>
                                        <select class="select" name="subcategory">
                                            <option>Select</option>
                                            <option>Laptops</option>
                                            <option>Phones</option>
                                            <option>Accessories</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea class="form-control" rows="2" name="short_description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Detailed Description <span class="text-danger"> *</span></label>
                                        <textarea class="form-control" rows="3" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Specifications / Attributes</label>
                                        <textarea class="form-control" rows="3" name="specifications" placeholder="e.g. Size: Large, Weight: 1.5kg, Color: Blue"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Variants (Colors / Sizes / Styles)</label>
                                        <textarea class="form-control" rows="3" name="variants" placeholder="e.g. Color: Red - SKU: RED001 - Price: 100 - Stock: 10; Size: M - SKU: M001 - Price: 95 - Stock: 5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" rows="2" name="meta_description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug / URL</label>
                                        <input type="text" class="form-control" name="slug">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Promotions / Discounts</label>
                                        <input type="text" class="form-control" name="promotions" placeholder="e.g. 20% off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Related Products</label>
                                        <input type="text" class="form-control" name="related_products" placeholder="Comma separated product IDs">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Custom Attributes</label>
                                        <textarea class="form-control" rows="2" name="custom_attributes" placeholder="e.g. Eco-friendly: Yes, Warranty: 1 year"></textarea>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Product</button>
                            </div>
                        </form>
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
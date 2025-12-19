@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Add New Product</h2>
                
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
                                        <label class="form-label">Tags / Keywords</label>
                                        <input type="text" class="form-control" name="tags" placeholder="Comma separated">
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


                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Product</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-tabs flex-column" id="myTab" role="tablist" style="background-color: #f8f9fa; padding: 10px;">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active btn btn-outline-primary w-100 mb-2 text-start" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true" style="border: 1px solid #007bff;">Banner</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false" style="border: 1px solid #007bff;">Product Features</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false" style="border: 1px solid #007bff;">Product Gallery</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false" style="border: 1px solid #007bff;">promotional Banners and Images</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false" style="border: 1px solid #007bff;">Image Content</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content card-s" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5>General</h5>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="toggle1">
                                                <label class="form-check-label" for="toggle1"></label>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Video Upload</label>
                                                        <input type="file" class="form-control" name="video_upload" accept="video/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Banner Image Upload</label>
                                                        <input type="file" class="form-control" name="banner_image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Heading</label>
                                                        <input type="text" class="form-control" name="heading">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Subheading</label>
                                                        <input type="text" class="form-control" name="subheading">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Button Name</label>
                                                        <input type="text" class="form-control" name="button_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Button URL</label>
                                                        <input type="url" class="form-control" name="button_url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                       
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                         <div class="card mt-3">
                                             <div class="card-header" style="border-bottom: 1px solid #dee2e6;">
                                                 <h5>Page Heading</h5>
                                             </div>
                                             <div class="card-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Heading</label>
                                                                <input type="text" class="form-control" name="card_heading">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Subheading</label>
                                                                <input type="text" class="form-control" name="card_subheading">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card clone">
                                        <div class="card-body d-flex  justify-content-between align-items-center mb-3">
                                            <h5>Card Box</h5>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="toggle2">
                                                <label class="form-check-label" for="toggle2"></label>
                                            </div>
                                        </div>
                                        <form class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Icon Image Upload</label>
                                                        <input type="file" class="form-control" name="icon_image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Heading</label>
                                                        <input type="text" class="form-control" name="heading">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Paragraph</label>
                                                        <textarea class="form-control" name="paragraph" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Stock Quantity</label>
                                                        <input type="number" class="form-control" name="stock">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Supplier</label>
                                                        <input type="text" class="form-control" name="supplier">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
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
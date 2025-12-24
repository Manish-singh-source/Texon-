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
                        <form action="{{ route('add-new-product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                            @foreach($categories as $category)
                                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                                            @endforeach
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


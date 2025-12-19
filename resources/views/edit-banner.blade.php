@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Edit Banner</h2>

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
                        <h5 class="card-title">Banner Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('edit-banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-light w-100 rounded p-3 mb-4">
                                        <h6 class="mb-3">Banner Media</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Video Upload</label>
                                                    <input type="file" class="form-control" name="video_upload" accept="video/*">
                                                    <small class="text-muted">Upload banner video (max 10MB). Leave empty to keep current video.</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Banner Image</label>
                                                    <input type="file" class="form-control" name="banner_image" accept="image/*">
                                                    <small class="text-muted">Upload banner image (max 4MB). Leave empty to keep current image.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Heading <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" name="heading" value="{{ $banner->heading }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Subheading</label>
                                        <input type="text" class="form-control" name="subheading" value="{{ $banner->subheading }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Button Name</label>
                                        <input type="text" class="form-control" name="button_name" value="{{ $banner->button_name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Button URL</label>
                                        <input type="url" class="form-control" name="button_url" value="{{ $banner->button_url }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status <span class="text-danger"> *</span></label>
                                        <select class="select" name="status">
                                            <option value="">Select</option>
                                            <option value="active" {{ $banner->status == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ $banner->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="{{ route('banners') }}" class="btn btn-outline-light border me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Banner</button>
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
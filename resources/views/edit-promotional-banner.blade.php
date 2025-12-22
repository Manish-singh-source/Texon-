@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Edit Promotional Banner</h2>

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
                        <h5 class="card-title">Promotional Banner Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('edit-promotional-banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" name="banner_image" accept="image/*">
                                        <small class="text-muted">Upload banner image (max 4MB)</small>
                                        @if($banner->banner_image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $banner->banner_image) }}" alt="Current Image" style="width: 100px; height: 100px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" name="title" value="{{ $banner->title }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date <span class="text-danger"> *</span></label>
                                        <input type="date" class="form-control" name="start_date" value="{{ $banner->start_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">End Date <span class="text-danger"> *</span></label>
                                        <input type="date" class="form-control" name="end_date" value="{{ $banner->end_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="description" rows="3">{{ $banner->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status <span class="text-danger"> *</span></label>
                                        <select class="select" name="status">
                                            <option value="active" {{ $banner->status == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ $banner->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="{{ route('promotional-banners') }}" class="btn btn-outline-light border me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Promotional Banner</button>
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
@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Edit Testimonial</h2>
                {{-- <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Testimonial
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Testimonial</li>
                    </ol>
                </nav> --}}
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
                        <h5 class="card-title">Testimonial Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('edit-testimonial.update', $testimonial->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="remove_image" id="remove_image" value="0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-light w-100 rounded p-3 mb-4">
                                        <h6 class="mb-3">Testimonial Media</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Testimonial Image</label>
                                                    <input type="file" class="form-control" name="testimonial_image" accept="image/*">
                                                    <small class="text-muted">Upload testimonial image (max 4MB)</small>
                                                    @if($testimonial->testimonial_image)
                                                        <div class="mt-2 position-relative" id="image-preview">
                                                            <img src="{{ asset('storage/' . $testimonial->testimonial_image) }}" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover;">
                                                            <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0" onclick="removeImage()" style="padding: 2px 5px; font-size: 12px;">
                                                                <i class="ti ti-x"></i>
                                                            </button>
                                                            <p class="text-muted">Current image</p>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Position</label>
                                        <input type="text" class="form-control" name="position" value="{{ $testimonial->position }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Rating <span class="text-danger"> *</span></label>
                                        <select class="select" name="rating">
                                            <option>Select Rating</option>
                                            <option value="1" {{ $testimonial->rating == 1 ? 'selected' : '' }}>1 Star</option>
                                            <option value="2" {{ $testimonial->rating == 2 ? 'selected' : '' }}>2 Stars</option>
                                            <option value="3" {{ $testimonial->rating == 3 ? 'selected' : '' }}>3 Stars</option>
                                            <option value="4" {{ $testimonial->rating == 4 ? 'selected' : '' }}>4 Stars</option>
                                            <option value="5" {{ $testimonial->rating == 5 ? 'selected' : '' }}>5 Stars</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Message <span class="text-danger"> *</span></label>
                                        <textarea class="form-control" rows="4" name="message">{{ $testimonial->message }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status <span class="text-danger"> *</span></label>
                                        <select class="select" name="status">
                                            <option>Select</option>
                                            <option value="active" {{ $testimonial->status == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ $testimonial->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="{{ route('testimonials') }}" class="btn btn-outline-light border me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Testimonial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
        <p class="mb-0">2025 &copy; Texon.</p>
        
    </div>

</div>
<!-- /Page Wrapper -->

<script>
function removeImage() {
    document.getElementById('remove_image').value = '1';
    document.getElementById('image-preview').style.display = 'none';
}
</script>

@endsection
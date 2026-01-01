@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Website Banners</h2>
                    
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                 
                    <div class="mb-2">
                        <a href="{{ route('add-banner') }}" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add New Banner</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Banner List</h5>
                    
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
                                    <th>Sr No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Button Name</th>
                                    <th>Button Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $index => $banner)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($banner->banner_image)
                                                <img src="{{ asset('storage/' . $banner->banner_image) }}" class="img-fluid rounded-circle" alt="Banner Image" style="width: 50px; height: 50px;">
                                            @else
                                                <img src="https://placehold.co/100x100" class="img-fluid rounded-circle" alt="Banner Image" style="width: 50px; height: 50px;">
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $banner->heading }}</td>
                                    <td>{{ $banner->subheading }}</td>
                                    <td>{{ $banner->button_name }}</td>
                                    <td>{{ $banner->button_url }}</td>
                                    <td>
                                        @if($banner->status == 'active')
                                            <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        @else
                                            <span class="badge badge-danger d-inline-flex align-items-center badge-sm">
                                                <i class="ti ti-point-filled me-1"></i>Inactive
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="{{ route('edit-banner', $banner->id) }}" class="me-2"><i class="ti ti-edit"></i></a>
                                            <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this banner?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 text-danger" style="border:none; background:none;"><i class="ti ti-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2025 &copy; Texon.</p>
            
        </div>

    </div>
    <!-- /Page Wrapper -->

@endsection
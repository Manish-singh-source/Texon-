`@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Testimonials</h2>
                    {{-- <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Testimonials
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Testimonials List</li>
                        </ol> --}}
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
                        <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                            <a href="testimonials" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-list-tree"></i></a>
                        </div>
                    </div>
                    <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-2">
                        <a href="{{ route('add-testimonial') }}" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add New Testimonial</a>
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
                    <h5>Testimonial List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Status
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
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                                    <th>Sr No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Message</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testimonials as $index => $testimonial)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $testimonial->testimonial_image ? asset('storage/' . $testimonial->testimonial_image) : 'https://placehold.co/100x100' }}" class="img-fluid rounded-circle" alt="Testimonial Image" style="width: 50px; height: 50px;">
                                        </div>
                                    </td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->position ?? '-' }}</td>
                                    <td>{{ $testimonial->message }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="ti ti-star-filled {{ $i <= $testimonial->rating ? 'text-warning' : 'text-muted' }}"></i>
                                            @endfor
                                            {{-- <span class="ms-1">{{ $testimonial->rating }}</span> --}}
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge {{ $testimonial->status == 'active' ? 'badge-success' : 'badge-danger' }} d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>{{ ucfirst($testimonial->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="{{ route('edit-testimonial', $testimonial->id) }}" class="me-2"><i class="ti ti-edit"></i></a>
                                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 text-danger" onclick="return confirm('Are you sure you want to delete this testimonial?')">
                                                    <i class="ti ti-trash"></i>
                                                </button>
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

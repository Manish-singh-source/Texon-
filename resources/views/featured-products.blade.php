@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Featured Products List</h2>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="mb-3" style="margin-right: 10px;">
                            <a href="{{ route('add-featured-product') }}" class="btn btn-primary d-flex align-items-center">Create Featured Product</a>
                        </div>
                        <div class="ms-2 head-icons">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <!-- Featured Products Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="custom-datatable-filter table-responsive">
                            <table id="featured-products-table" class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="no-sort">
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox" id="select-all">
                                            </div>
                                        </th>
                                        <th>Sr. No.</th>
                                        <th>Image</th>
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($featuredProducts as $index => $featuredProduct)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td><a href="#">{{ $index + 1 }}</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">
                                                    @if($featuredProduct->image)
                                                        <img src="{{ asset('storage/' . $featuredProduct->image) }}"
                                                             class="img-fluid rounded-circle" alt="img">
                                                    @else
                                                        <img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-32.jpg"
                                                             class="img-fluid rounded-circle" alt="img">
                                                    @endif
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $featuredProduct->heading }}</td>
                                        <td>{{ Str::limit($featuredProduct->description, 50) }}</td>
                                        <td>
                                            @if($featuredProduct->status == 'active')
                                                <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Active
                                                </span>
                                            @else
                                                <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Inactive
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">

                                                <!-- Edit -->
                                                <a href="{{ route('edit-featured-product', $featuredProduct->id) }}" class="me-2">
                                                    <i class="ti ti-edit"></i>
                                                </a>
                                                <!-- Delete -->
                                                <form action="{{ route('featured-products.destroy', $featuredProduct->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this featured product?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0" style="color: inherit;">
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

                    <!-- /Add Featured Product -->


                </div>
                <!-- /Main Wrapper -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection
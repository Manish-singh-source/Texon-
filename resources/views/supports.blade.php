@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Supports</h2>

                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

                    <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Supports List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange"
                                    placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
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
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Product</th>
                                    <th>Page</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($supports as $support)
                                <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td>{{ $support->id }}</td>
                                     <td>{{ $support->first_name }}</td>
                                     <td>{{ $support->last_name }}</td>
                                     <td>{{ $support->email }}</td>
                                     <td>{{ $support->phone }}</td>
                                     <td>{{ Str::limit($support->message, 50) }}</td>
                                     <td>{{ $support->product ?? 'N/A' }}</td>
                                     <td>{{ $support->page }}</td>
                                     <td>{{ $support->created_at->format('d/m/Y') }}</td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <form action="#" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this support?')">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-link p-0 text-danger" style="border: none; background: none;"><i class="ti ti-trash"></i></button>
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


    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked supports, this cant be undone once you delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="/supports" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection
@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Enquiries</h2>
                    
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

            <div class="row">

                <!-- Total Enquiries -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-dark rounded-circle"><i
                                            class="ti ti-message"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Total Enquiries</p>
                                    <h4>{{ $totalEnquiries }}</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-purple badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Enquiries -->

                <!-- Pending -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-warning rounded-circle"><i
                                            class="ti ti-clock"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Pending</p>
                                    <h4>{{ $pending }}</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-primary badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Pending -->

                <!-- Responded -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-success rounded-circle"> <i class="fas fa-reply"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Responded</p>
                                    <h4>{{ $responded }}</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-dark badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Responded -->

                <!-- Closed -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-danger rounded-circle">  <i class="fas fa-lock"></i> </span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Closed</p>
                                    <h4>{{ $closed }}</h4>
                                </div>
                            </div>
                            <div>
                                <span class="badge badge-soft-secondary badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Closed -->

            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Enquiries List</h5>
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
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Status
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Responded</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Closed</a>
                                </li>
                            </ul>
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
                                    <th>Enquiry ID</th>
                                    <th>Product Name</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Phone</th>
                                    <th>Company</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enquiries as $enquiry)
                                <tr>
                                     <td>
                                         <div class="form-check form-check-md">
                                             <input class="form-check-input" type="checkbox">
                                         </div>
                                     </td>
                                     <td><a href="{{ route('view-enquiry', $enquiry->id) }}">{{ $enquiry->enquiry_id }}</a></td>
                                     <td>{{ $enquiry->product->product_name ?? 'N/A' }}</td>
                                     <td>{{ $enquiry->user_name }}</td>
                                     <td>{{ $enquiry->user_email }}</td>
                                     <td>{{ $enquiry->user_phone }}</td>
                                     <td>{{ $enquiry->company }}</td>
                                     <td>{{ Str::limit($enquiry->message, 50) }}</td>
                                     <td>
                                         @if($enquiry->status == 'pending')
                                         <span class="badge badge-warning d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Pending
                                         </span>
                                         @elseif($enquiry->status == 'responded')
                                         <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Responded
                                         </span>
                                         @elseif($enquiry->status == 'closed')
                                         <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                             <i class="ti ti-point-filled me-1"></i>Closed
                                         </span>
                                         @endif
                                     </td>
                                     <td>
                                         <div class="action-icon d-inline-flex">
                                             <a href="{{ route('view-enquiry', $enquiry->id) }}" class="me-2"><i class="ti ti-eye"></i></a>
                                             <a href="{{ route('edit-enquiry', $enquiry->id) }}" class="me-2"><i class="ti ti-edit"></i></a>
                                             <form action="{{ route('enquiries.destroy', $enquiry->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this enquiry?')">
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
                    <p class="mb-3">You want to delete all the marked enquiries, this cant be undone once you delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="/enquiries" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection
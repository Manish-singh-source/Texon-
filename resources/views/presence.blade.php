@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Presence List</h2>
                        <!--<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Brands</li>
							</ol>
						</nav>-->
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="mb-3" style="margin-right: 10px;">
                            <a href="{{ route('add-presence') }}" class="btn btn-primary d-flex align-items-center">Create Presence</a>
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

                <!-- Brands Table -->
                <div class="card">
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
                                        <th>Sr. No.</th>
                                        <th>Presence Image</th>
                                        <th>Presence Name</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td><a href="#">
                                                1</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md" data-bs-toggle="modal"
                                                    data-bs-target="#view_details"><img
                                                        src="https://smarthr.co.in/demo/html/template/assets/img/users/user-32.jpg"
                                                        class="img-fluid rounded-circle" alt="img"></a>
                                            </div>
                                        </td>
                                        <td>Nike</td>
                                                                  <td>
                                            <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span>
                                        </td>
                                        <td>

                                            <div class="action-icon d-inline-flex">

                                              

                                                <!-- Edit (Modal) -->
                                                <a href="edit-brand.html" class="me-2">
                                                    <i class="ti ti-edit"></i>
                                                </a>

                                                <!-- Delete (Modal) -->
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                    <i class="ti ti-trash"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- /Add Brand -->

                    <!-- Delete Modal -->
                    <div class="modal fade" id="delete_modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                                        <i class="ti ti-trash-x fs-36"></i>
                                    </span>
                                    <h4 class="mb-1">Confirm Delete</h4>
                                    <p class="mb-3">You want to delete all the marked items, this cant be undone once
                                        you delete.</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="javascript:void(0);" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">Cancel</a>
                                        <a href="https://smarthr.co.in/demo/html/template/brands.html"
                                            class="btn btn-danger">Yes,
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Delete Modal -->


                </div>
                <!-- /Main Wrapper -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection
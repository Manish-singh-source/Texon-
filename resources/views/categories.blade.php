@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Categories List</h2>
                        <!--<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Categories</li>
							</ol>
						</nav>-->
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="mb-3" style="margin-right: 10px;">
                            <a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                                data-bs-target="#add_category">Create Categories</a>
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

                <!-- Categories Table -->
                <div class="card">
                    <!--<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Category List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                           
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sort By : Last 7 Days
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
									</li>
								</ul>
							</div>
						</div>
					</div>-->
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
                                        <th>Category Iamge</th>
                                        <th>Category Name</th>
                                        <th>Product</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $index => $category)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md">
                                                    <img src="{{ $category->image ? asset('storage/' . $category->image) : 'https://smarthr.co.in/demo/html/template/assets/img/users/user-32.jpg' }}" class="img-fluid rounded-circle" alt="img">
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>0</td>
                                        <td>
                                            <span class="badge badge-{{ $category->status == 'active' ? 'success' : 'danger' }} d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>{{ ucfirst($category->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">
                                                <a href="#" class="me-2">
                                                    <i class="ti ti-edit"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                    <i class="ti ti-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </div>
                    </div>

                    <!-- /Add Category -->

                    <!-- Add Department -->
                    <div class="modal fade" id="add_category">
                        <div class="modal-dialog modal-dialog-centered modal-lg ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Create Categories</h4>
                                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="ti ti-x"></i>
                                    </button>
                                </div>
                                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body pb-0">
                                        <div class="row">
                                            <!-- Row 1 -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter Category Name">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Category Image</label>
                                                    <input type="file" class="form-control" name="image"
                                                        accept="image/*">
                                                </div>
                                            </div>


                                            <!-- Row 2 -->

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">General Status <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="status">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Add Categories</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Add Department -->

                    <!-- Add Department -->
                    <div class="modal fade" id="sub_categories">
                        <div class="modal-dialog modal-dialog-centered modal-lg ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Sub Categories</h4>
                                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="ti ti-x"></i>
                                    </button>
                                </div>
                                <form action="">
                                    <div class="modal-body pb-0">
                                        <div class="row">
                                            <!-- Row 1 -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Parent Name</label>
                                                    <select class="form-select" name="general_status">
                                                        <option>Select Parent</option>
                                                        <option>Laptop</option>
                                                        <option>Mobile</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Sub Category</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Sub Categories">
                                                </div>
                                            </div>
                                        </div>
                                    



                                    <!-- Row 2 -->

                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Feature Image</label>
                                            <input type="file" class="form-control" name="category_image"
                                                accept="image/*">
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Icon Image</label>
                                            <input type="file" class="form-control" name="category_image"
                                                accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Add Categories</button>
                                    </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Add Department -->



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
                                        <a href="https://smarthr.co.in/demo/html/template/categories.html"
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
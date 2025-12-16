@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Products Categories</h2>
						<!--<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Departments</li>
							</ol>
						</nav>-->
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="dropdown">
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
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_department"
								class="btn btn-primary d-flex align-items-center">Add Products Categories</a>
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

				<!-- Performance Indicator list -->
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
										<th>Sub Categories Value</th>
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
										<td>
											1
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">Finance</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>

										<td>
											2
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">Application Development</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											3
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">IT Management</a></h6>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>

										<td>
											4
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">Web Development</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>

										<td>
											5
										</td>
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">Sales</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>

										<td>
											6
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">UI / UX</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>

										<td>
											7
										</td>

										<td>

											<h6 class="fw-medium"><a href="#">Account Management</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>

									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>

										<td>
											8
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">Marketing</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>

										</td>

										<td>
											9
										</td>
										<td>

											<h6 class="fw-medium"><a href="#">Administration</a></h6>


										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>

										<td>
											10
										</td>
										<td>
											<h6 class="fw-medium"><a href="#">Business Development</a></h6>

										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_department"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal"
													data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Performance Indicator list -->

			</div>

			<div class="footer d-flex align-items-center justify-content-center bg-white border-top p-3">
				<p class="mb-0">
					© 2025 - Made by
					<a href="https://technofra.com/" class="text-primary">Technofra</a>
				</p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Department -->
		<div class="modal fade" id="add_department">
			<div class="modal-dialog modal-dialog-centered modal-lg ">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Categories</h4>
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
										<label class="form-label">Category Name</label>
										<input type="text" class="form-control" placeholder="Enter Category Name">
									</div>
								</div>

								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category url</label>
										<input type="text" class="form-control" placeholder="Enter Image URL">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category Image</label>
										<input type="file" class="form-control" name="category_image" accept="image/*">
										<small class="text-muted">Upload category image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
									</div>
								</div>


								<!-- Row 2 -->
								 <div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Sort Order</label>
										<input type="text" class="form-control" placeholder="Enter Sort Order">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">General Status</label>
										<select class="form-select" name="general_status">
											<option value="active">Active</option>
											<option value="inactive">Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Categories</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Department -->

		<!-- Edit Department -->
		<div class="modal fade" id="edit_department">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Sub Categories</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="view-category.html" method="get">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Department Name</label>
										<input type="text" class="form-control" value="Finance">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Category Image</label>
										<input type="file" class="form-control" name="category_image" accept="image/*">
										<small class="text-muted">Upload category image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Category Image</label>
										<input type="file" class="form-control" name="category_image" accept="image/*">
										<small class="text-muted">Upload category image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
									</div>
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary"><a href="view-category.html">Update Categories</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Department -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Confirm Delete</h4>
						<p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.
						</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a href="https://smarthr.co.in/demo/html/template/departments.html"
								class="btn btn-danger">Yes, Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->


            @endsection
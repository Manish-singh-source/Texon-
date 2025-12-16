@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Brands</h2>
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
							<a href="{{ route('add-brand') }}" class="btn btn-primary d-flex align-items-center">Add Brands</a>
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

				<!-- Brands list -->
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
										<th>Brand Name</th>
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
											<h6 class="fw-medium"><a href="#">Nike</a></h6>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_brand"><i class="ti ti-edit"></i></a>
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
											<h6 class="fw-medium"><a href="#">Adidas</a></h6>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_brand"><i class="ti ti-edit"></i></a>
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
											<h6 class="fw-medium"><a href="#">Puma</a></h6>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_brand"><i class="ti ti-edit"></i></a>
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
											<h6 class="fw-medium"><a href="#">Reebok</a></h6>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_brand"><i class="ti ti-edit"></i></a>
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
											<h6 class="fw-medium"><a href="#">Under Armour</a></h6>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal"
													data-bs-target="#edit_brand"><i class="ti ti-edit"></i></a>
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
				<!-- /Brands list -->

			</div>

			<div class="footer d-flex align-items-center justify-content-center bg-white border-top p-3">
				<p class="mb-0">
					© 2025 - Made by
					<a href="https://technofra.com/" class="text-primary">Technofra</a>
				</p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Brand -->
		<div class="modal fade" id="add_brand">
			<div class="modal-dialog modal-dialog-centered modal-lg ">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Brand</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Brand Name</label>
										<input type="text" class="form-control" placeholder="Enter Brand Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Brand Image</label>
										<input type="file" class="form-control" name="brand_image" accept="image/*">
										<small class="text-muted">Upload brand image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Brand</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Brand -->

		<!-- Edit Brand -->
		<div class="modal fade" id="edit_brand">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Brand</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Brand Name</label>
										<input type="text" class="form-control" value="Nike">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Brand Image</label>
										<input type="file" class="form-control" name="brand_image" accept="image/*">
										<small class="text-muted">Upload brand image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
									</div>
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Update Brand</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Brand -->

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
							<a href="https://smarthr.co.in/demo/html/template/brands.html"
								class="btn btn-danger">Yes, Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->


            @endsection
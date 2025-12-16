@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Customer List</h2>
						<nav>
							<!--<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Performance
								</li>
								<li class="breadcrumb-item active" aria-current="page">Promotion</li>
							</ol>-->
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap">


						<div class="mb-2">
							<a href="{{route('add-customer')}}" class="btn btn-primary d-flex align-items-center">
								Add New Customer
							</a>
						</div>

						<div class="head-icons ms-2">
							<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
								title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>

					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Promotion List -->
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div
								class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
								<h5 class="d-flex align-items-center">All Customers</h5>
								<div class="d-flex align-items-center flex-wrap row-gap-3">
									<!--<div class="input-icon position-relative me-2">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy ">
                                    </div>-->
									<!--<div class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center fs-12" data-bs-toggle="dropdown">
                                            <p class="fs-12 d-inline-flex me-1">Sort By : </p>
                                            Last 7 Days
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
                                    </div>-->
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
												<th>Name</th>
												<th>Username</th>
												<th>Email</th>
												<th>Contact Number</th>
												<th>No Of Orders</th>
												<th>Status</th>
												<th>Joined At</th>

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
													<div class="d-flex align-items-center">
														<a href="https://smarthr.co.in/demo/html/template/invoice-details.html"
															class="avatar avatar-md me-2">
															<img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-32.jpg"
																class="rounded-circle" alt="user">
														</a>
														<h6 class="fw-medium"><a
																href="https://smarthr.co.in/demo/html/template/invoice-details.html">Anthony
																Lewis</a></h6>
													</div>
												</td>
												<td>Amisha</td>
												<td>accountant@gmail.com</td>
												<td>+ 9111 55 9999</td>
												<td>1</td>
												<td>Active</td>
												<td>14 Jan 2024</td>


												<td>
													<div class="action-icon d-inline-flex">

														<!-- View Customer Details (Page Navigation) -->
														<a href="{{route('view-customer')}}" class="me-2">
															<i class="ti ti-eye"></i>
														</a>

														<!-- Edit (Modal) -->
														<a href="edit-customer.html" class="me-2">
															<i class="ti ti-edit"></i>
														</a>

														<!-- Delete (Modal) -->
														<a href="#" data-bs-toggle="modal"
															data-bs-target="#delete_modal">
															<i class="ti ti-trash"></i>
														</a>

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
													<div class="d-flex align-items-center">
														<a href="https://smarthr.co.in/demo/html/template/invoice-details.html"
															class="avatar avatar-md me-2">
															<img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-09.jpg"
																class="rounded-circle" alt="user">
														</a>
														<h6 class="fw-medium"><a
																href="https://smarthr.co.in/demo/html/template/invoice-details.html">Brian
																Villalobos</a></h6>
													</div>
												</td>
												<td>Pradnya</td>
												<td>developer@gmail.com</td>
												<td>+ 9111 55 9999</td>
												<td>2</td>
												<td>Active</td>
												<td>21 Jan 2024</td>


												<td>
													<div class="action-icon d-inline-flex">

														<!-- View Customer Details (Page Navigation) -->
														<a href="{{route('view-customer')}}" class="me-2">
															<i class="ti ti-eye"></i>
														</a>

														<!-- Edit (Modal) -->
														<a href="edit-customer.html" class="me-2">
															<i class="ti ti-edit"></i>
														</a>

														<!-- Delete (Modal) -->
														<a href="#" data-bs-toggle="modal"
															data-bs-target="#delete_modal">
															<i class="ti ti-trash"></i>
														</a>

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
													<div class="d-flex align-items-center">
														<a href="https://smarthr.co.in/demo/html/template/invoice-details.html"
															class="avatar avatar-md me-2">
															<img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-01.jpg"
																class="rounded-circle" alt="user">
														</a>
														<h6 class="fw-medium"><a
																href="https://smarthr.co.in/demo/html/template/invoice-details.html">Harvey
																Smith</a></h6>
													</div>
												</td>
												<td>Manish</td>
												<td>Web@gmail.com</td>
												<td>+ 9111 55 9999</td>
												<td>3</td>
												<td>Active</td>
												<td>20 Feb 2024</td>


												<td>
													<div class="action-icon d-inline-flex">

														<!-- View Customer Details (Page Navigation) -->
														<a href="{{route('view-customer')}}" class="me-2">
															<i class="ti ti-eye"></i>
														</a>

														<!-- Edit (Modal) -->
														<a href="edit-customer.html" class="me-2">
															<i class="ti ti-edit"></i>
														</a>

														<!-- Delete (Modal) -->
														<a href="#" data-bs-toggle="modal"
															data-bs-target="#delete_modal">
															<i class="ti ti-trash"></i>
														</a>

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
													<div class="d-flex align-items-center">
														<a href="https://smarthr.co.in/demo/html/template/invoice-details.html"
															class="avatar avatar-md me-2">
															<img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-33.jpg"
																class="rounded-circle" alt="user">
														</a>
														<h6 class="fw-medium"><a
																href="https://smarthr.co.in/demo/html/template/invoice-details.html">Stephan
																Peralt</a></h6>
													</div>
												</td>
												<td>Khushi</td>
												<td>Designer@gmail.com</td>
												<td>+ 9111 55 9999</td>
												<td>4</td>
												<td>Active</td>
												<td>15 Mar 2024</td>

												<td>
													<div class="action-icon d-inline-flex">

														<!-- View Customer Details (Page Navigation) -->
														<a href="{{route('view-customer')}}" class="me-2">
															<i class="ti ti-eye"></i>
														</a>

														<!-- Edit (Modal) -->
														<a href="edit-customer.html" class="me-2">
															<i class="ti ti-edit"></i>
														</a>

														<!-- Delete (Modal) -->
														<a href="#" data-bs-toggle="modal"
															data-bs-target="#delete_modal">
															<i class="ti ti-trash"></i>
														</a>

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
													<div class="d-flex align-items-center">
														<a href="https://smarthr.co.in/demo/html/template/invoice-details.html"
															class="avatar avatar-md me-2">
															<img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-34.jpg"
																class="rounded-circle" alt="user">
														</a>
														<h6 class="fw-medium"><a
																href="https://smarthr.co.in/demo/html/template/invoice-details.html">Doglas
																Martini</a></h6>
													</div>
												</td>
												<td>Roshan</td>
												<td>Analyst@gmail.com</td>
												<td>+ 9111 55 9999</td>
												<td>6</td>
												<td>Active</td>
												<td>10 Apr 2024</td>



												<td>
													<div class="action-icon d-inline-flex">

														<!-- View Customer Details (Page Navigation) -->
														<a href="{{route('view-customer')}}" class="me-2">
															<i class="ti ti-eye"></i>
														</a>

														<!-- Edit (Modal) -->
														<a href="edit-customer.html" class="me-2">
															<i class="ti ti-edit"></i>
														</a>

														<!-- Delete (Modal) -->
														<a href="#" data-bs-toggle="modal"
															data-bs-target="#delete_modal">
															<i class="ti ti-trash"></i>
														</a>

													</div>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Promotion List  -->
			</div>

			<!-- Footer -->
			<div class="footer d-flex align-items-center justify-content-center bg-white border-top p-3">
				<p class="mb-0">
					© 2025 - Made by
					<a href="https://technofra.com/" class="text-primary">Technofra</a>
				</p>
			</div>
			<!-- /Footer -->
		</div>
		<!-- /Page Wrapper -->

@endsection
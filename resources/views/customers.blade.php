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
												<th>Email</th>
												<th>Phone</th>
												<th>Gender</th>
												<th>Customer Type</th>
												<th>Country</th>
												<th>Joined At</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($customers as $customer)
											<tr>
												<td>
													<div class="form-check form-check-md">
														<input class="form-check-input" type="checkbox">
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<h6 class="fw-medium">{{ $customer->first_name }} {{ $customer->last_name }}</h6>
													</div>
												</td>
												<td>{{ $customer->email }}</td>
												<td>{{ $customer->phone }}</td>
												<td>@if($customer->gender == 1) Male @elseif($customer->gender == 2) Female @endif</td>
												<td>{{ $customer->customer_type ?? 'N/A' }}</td>
												
												<td>{{ $customer->country ?? 'N/A' }}</td>
												<td>{{ $customer->created_at->format('d M Y') }}</td>
												<td>
													<div class="action-icon d-inline-flex">
														<!-- View Customer Details (Page Navigation) -->
														<a href="{{ route('view-customer', $customer->id) }}" class="me-2">
															<i class="ti ti-eye"></i>
														</a>
														<!-- Edit (Modal) -->
														<a href="{{ route('edit-customer', $customer->id) }}" class="me-2">
															<i class="ti ti-edit"></i>
														</a>
														<!-- Delete -->
														<form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline;">
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-link p-0 text-danger" onclick="return confirm('Are you sure you want to delete this customer?')">
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
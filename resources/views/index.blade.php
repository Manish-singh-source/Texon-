@extends('layouts.masters')
@section('content') 
<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Sales Overview Dashboard</h2>
						
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						
						<div class="mb-2">
							<div class="input-icon w-100 position-relative">
								<span class="input-icon-addon">
									<i class="ti ti-calendar text-gray-9"></i>
								</span>
								<input type="text" class="form-control daterange" placeholder="Select Date Range">
							</div>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

			

				<!-- KPI Cards -->
				<div class="row mb-3">
					<div class="col-md-4">
						<div class="card text-center kpi-card" data-bs-toggle="tooltip" data-bs-placement="top" title="Total revenue from sales">
							<div class="card-body">
								<h5 class="card-title text-primary">Total Sales Revenue</h5>
								<h3 class="text-success">₹1,250,000</h3>
								<p class="text-muted">Last Month</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-center kpi-card" data-bs-toggle="tooltip" data-bs-placement="top" title="Total number of transactions">
							<div class="card-body">
								<h5 class="card-title text-primary">Number of Transactions</h5>
								<h3 class="text-success">15,420</h3>
								<p class="text-muted">This Month</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-center kpi-card" data-bs-toggle="tooltip" data-bs-placement="top" title="Growth compared to previous period">
							<div class="card-body">
								<h5 class="card-title text-primary">Growth Percentage</h5>
								<h3 class="text-success">+12.5%</h3>
								<p class="text-muted">Compared to Last Month</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /KPI Cards -->

				<div class="row">

					<!-- Monthly Income Trends -->
					<div class="col-xl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Monthly Income Trends</h5>
								<div class="d-flex align-items-center">
									<div class="dropdown mb-2">
										<a href="javascript:void(0);" class="dropdown-toggle btn btn-white border-0 btn-sm d-inline-flex align-items-center fs-13 me-2" data-bs-toggle="dropdown">
											All Departments
										</a>
										<ul class="dropdown-menu  dropdown-menu-end p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">UI/UX Designer</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">HR Manager</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item rounded-1">Junior Tester</a>
											</li>
										</ul>
									</div>	
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<div class="d-flex align-items-center mb-1">
										<p class="fs-13 text-gray-9 me-3 mb-0"><i class="ti ti-square-filled me-2 text-primary"></i>Income</p>
										<p class="fs-13 text-gray-9 mb-0"><i class="ti ti-square-filled me-2 text-gray-2"></i>Expenses</p>
									</div>
									<p class="fs-13 mb-1">Last Updated at 11:30PM</p>
								</div>
								<div id="sales-income"></div>
							</div>
						</div>
					</div>
					<!-- /Sales Overview -->

					<!-- Income Distribution -->
					<div class="col-xl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Income Distribution</h5>
							</div>
							<div class="card-body">
								<div id="income-distribution"></div>
							</div>
						</div>
					</div>
					<!-- /Income Distribution -->

				</div>

				<!-- Project Data Cards -->
				<div class="row">
					<div class="col-md-4 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<span class="avatar rounded-circle bg-primary mb-2">
									<i class="ti ti-message-circle fs-16"></i>
								</span>
								<h6 class="fs-13 fw-medium text-default mb-1">Total Enquiries</h6>
								<h3 class="mb-3">245 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+15.3%</span></h3>
								<div class="d-flex justify-content-between mb-2">
									<span class="fs-12 text-muted">Pending: 10</span>
									<span class="fs-12 text-muted">Replied: 5</span>
									<span class="fs-12 text-muted">New: 3</span>
								</div>
								<a href="#" class="link-default">View All Enquiries</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<span class="avatar rounded-circle bg-secondary mb-2">
									<i class="ti ti-package fs-16"></i>
								</span>
								<h6 class="fs-13 fw-medium text-default mb-1">Total Products</h6>
								<h3 class="mb-3">156 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+8.7%</span></h3>
								<div class="d-flex justify-content-between mb-2">
									<span class="fs-12 text-muted">Active: 150</span>
									<span class="fs-12 text-muted">Inactive: 6</span>
									<span class="fs-12 text-muted">New: 12</span>
								</div>
								<a href="#" class="link-default">View All Products</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<span class="avatar rounded-circle bg-info mb-2">
									<i class="ti ti-category fs-16"></i>
								</span>
								<h6 class="fs-13 fw-medium text-default mb-1">Total Categories</h6>
								<h3 class="mb-3">42 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+5.2%</span></h3>
								<div class="d-flex justify-content-between mb-2">
									<span class="fs-12 text-muted">Active: 40</span>
									<span class="fs-12 text-muted">Sub: 20</span>
									<span class="fs-12 text-muted">Empty: 2</span>
								</div>
								<a href="#" class="link-default">View All Categories</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<span class="avatar rounded-circle bg-pink mb-2">
									<i class="ti ti-star fs-16"></i>
								</span>
								<h6 class="fs-13 fw-medium text-default mb-1">Total Testimonials</h6>
								<h3 class="mb-3">89 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+12.1%</span></h3>
								<div class="d-flex justify-content-between mb-2">
									<span class="fs-12 text-muted">Published: 85</span>
									<span class="fs-12 text-muted">Pending: 4</span>
									<span class="fs-12 text-muted">5-Star: 70</span>
								</div>
								<a href="#" class="link-default">View All Testimonials</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<span class="avatar rounded-circle bg-purple mb-2">
									<i class="ti ti-brand-dribbble fs-16"></i>
								</span>
								<h6 class="fs-13 fw-medium text-default mb-1">Total Brands</h6>
								<h3 class="mb-3">28 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+3.4%</span></h3>
								<div class="d-flex justify-content-between mb-2">
									<span class="fs-12 text-muted">Active: 25</span>
									<span class="fs-12 text-muted">Inactive: 3</span>
									<span class="fs-12 text-muted">Premium: 10</span>
								</div>
								<a href="#" class="link-default">View All Brands</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<span class="avatar rounded-circle bg-success mb-2">
									<i class="ti ti-users fs-16"></i>
								</span>
								<h6 class="fs-13 fw-medium text-default mb-1">Total Customers</h6>
								<h3 class="mb-3">1347 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+22.5%</span></h3>
								<div class="d-flex justify-content-between mb-2">
									<span class="fs-12 text-muted">Active: 1300</span>
									<span class="fs-12 text-muted">New: 50</span>
									<span class="fs-12 text-muted">VIP: 100</span>
								</div>
								<a href="#" class="link-default">View All Customers</a>
							</div>
						</div>
					</div>
					<!-- /Project Data Cards -->
				</div>

				</div>

				

				<div class="row">

					<!-- Enquiries Details -->
					<div class="col-xxl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Recent Enquiries</h5>
								<a href="#" class="btn btn-light btn-md mb-2">View All</a>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between mb-4">
									<div class="d-flex align-items-center">
										<a href="#" class="avatar overflow-hidden flex-shrink-0">
											<img src="https://placehold.co/100x100" class="img-fluid rounded-circle" alt="img">
										</a>
										<div class="ms-2 overflow-hidden">
											<p class="text-dark fw-medium text-truncate mb-0"><a href="#">John Doe</a></p>
											<span class="fs-13 d-inline-flex align-items-center">Product Inquiry <i class="ti ti-circle-filled fs-4 mx-2 text-primary"></i>john@example.com</span>
										</div>
									</div>
									<span class="badge badge-secondary badge-xs">Pending</span>
								</div>
								<div class="d-flex align-items-center justify-content-between mb-4">
									<div class="d-flex align-items-center">
										<a href="#" class="avatar overflow-hidden flex-shrink-0">
											<img src="https://placehold.co/100x100" class="img-fluid rounded-circle" alt="img">
										</a>
										<div class="ms-2 overflow-hidden">
											<p class="text-dark fw-medium text-truncate mb-0"><a href="#">Jane Smith</a></p>
											<span class="fs-13 d-inline-flex align-items-center">Category Question <i class="ti ti-circle-filled fs-4 mx-2 text-primary"></i>jane@example.com</span>
										</div>
									</div>
									<span class="badge badge-info badge-xs">Replied</span>
								</div>
								<div class="d-flex align-items-center justify-content-between mb-0">
									<div class="d-flex align-items-center">
										<a href="javascript:void(0);" class="avatar overflow-hidden flex-shrink-0">
											<img src="https://placehold.co/100x100" class="img-fluid rounded-circle" alt="img">
										</a>
										<div class="ms-2 overflow-hidden">
											<p class="text-dark fw-medium text-truncate mb-0"><a href="javascript:void(0);">Mike Johnson</a></p>
											<span class="fs-13 d-inline-flex align-items-center">Brand Partnership <i class="ti ti-circle-filled fs-4 mx-2 text-primary"></i>mike@example.com</span>
										</div>
									</div>
									<span class="badge badge-purple badge-xs">New</span>
								</div>
							</div>
						</div>
					</div>
					<!-- /Enquiries Details -->

					<!-- Products Overview -->
					<div class="col-xxl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Top Products</h5>
								<a href="#" class="btn btn-light btn-md mb-2">View All</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table table-nowrap mb-0">
										<thead>
											<tr>
												<th>Product</th>
												<th>Category</th>
												<th>Sales</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar">
															<img src="https://placehold.co/100x100" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="javascript:void(0);">Texon Grooved Pegboard</a></h6>
															<span class="fs-12">Electronics</span>
														</div>
													</div>
												</td>
												<td>
													<span class="badge badge-secondary-transparent badge-xs">Electronics</span>
												</td>
												<td>245</td>
												<td>
													<span class="badge badge-success d-inline-flex align-items-center badge-xs">
														<i class="ti ti-point-filled me-1"></i>Active
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="avatar">
															<img src="https://placehold.co/100x100" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="#">Rehabilitation Equipment</a></h6>
															<span class="fs-12">Electronics</span>
														</div>
													</div>
												</td>
												<td>
													<span class="badge badge-danger-transparent badge-xs">Electronics</span>
												</td>
												<td>189</td>
												<td>
													<span class="badge badge-success d-inline-flex align-items-center badge-xs">
														<i class="ti ti-point-filled me-1"></i>Active
													</span>
												</td>
											</tr>
											<tr>
												<td class="border-0">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar">
															<img src="https://placehold.co/100x100" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="javascript:void(0);">Fashion Bag</a></h6>
															<span class="fs-12">Fashion</span>
														</div>
													</div>
												</td>
												<td class="border-0">
													<span class="badge badge-info-transparent badge-xs">Fashion</span>
												</td>
												<td class="border-0">156</td>
												<td class="border-0">
													<span class="badge badge-success d-inline-flex align-items-center badge-xs">
														<i class="ti ti-point-filled me-1"></i>Active
													</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /Products Overview -->

				</div>


			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Todo -->
		<div class="modal fade" id="add_todo">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Todo</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="https://smarthr.co.in/demo/html/template/index.html">
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Todo Title</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Tag</label>
										<select class="select">
											<option>Select</option>
											<option>Internal</option>
											<option>Projects</option>
											<option>Meetings</option>
											<option>Reminder</option> 	 
										</select>
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Priority</label>
										<select class="select">
											<option>Select</option>
											<option>Medium</option>
											<option>High</option>
											<option>Low</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3">
										<label class="form-label">Descriptions</label>
										<div class="summernote"></div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Add Assignee</label>
										<select class="select">
											<option>Select</option>
											<option>Sophie</option>
											<option>Cameron</option>
											<option>Doris</option>
											<option>Rufana</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-0">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option>Completed</option>
											<option>Pending</option>
											<option>Onhold</option>
											<option>Inprogress</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add New Todo</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Todo -->

		<!-- Add Project -->
		<div class="modal fade" id="add_project" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header header-border align-items-center justify-content-between">
						<div class="d-flex align-items-center">
							<h5 class="modal-title me-2">Add Project </h5>
							<p class="text-dark">Project ID : PRO-0004</p>
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="add-info-fieldset">
						<div class="add-details-wizard p-3 pb-0">
							<ul class="progress-bar-wizard d-flex align-items-center border-bottom">
								<li class="active p-2 pt-0">
									<h6 class="fw-medium">Basic Information</h6>
								</li>
								<li class="p-2 pt-0">									
									<h6 class="fw-medium">Members</h6>
								</li>
							</ul>
						</div>
						<fieldset id="first-field-file">
							<form action="https://smarthr.co.in/demo/html/template/projects.html">
								<div class="modal-body">
									<div class="row">
										<div class="col-md-12">
											<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
												<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
													<i class="ti ti-photo text-gray-2 fs-16"></i>
												</div>                                              
												<div class="profile-upload">
													<div class="mb-2">
														<h6 class="mb-1">Upload Project Logo</h6>
														<p class="fs-12">Image should be below 4 mb</p>
													</div>
													<div class="profile-uploader d-flex align-items-center">
														<div class="drag-upload-btn btn btn-sm btn-primary me-2">
															Upload
															<input type="file" class="form-control image-sign" multiple="">
														</div>
														<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
													</div>
													
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">Project Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">Client</label>
												<select class="select">
													<option>Select</option>
													<option>Anthony Lewis</option>
													<option>Brian Villalobos</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">Start Date</label>
														<div class="input-icon-end position-relative">
															<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
															<span class="input-icon-addon">
																<i class="ti ti-calendar text-gray-7"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">End Date</label>
														<div class="input-icon-end position-relative">
															<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
															<span class="input-icon-addon">
																<i class="ti ti-calendar text-gray-7"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">Priority</label>
														<select class="select">
															<option>Select</option>
															<option>High</option>
															<option>Medium</option>
															<option>Low</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">Project Value</label>
														<input type="text" class="form-control" value="$">
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">Total Working Hours</label>
														<div class="input-icon-end position-relative">
															<input type="text" class="form-control timepicker" placeholder="-- : -- : --" value="02-05-2024">
															<span class="input-icon-addon">
																<i class="ti ti-clock-hour-3 text-gray-7"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">Extra Time</label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-0">
												<label class="form-label">Description</label>
												<div class="summernote"></div>
											</div>
										</div>
									</div>								
								</div>
								<div class="modal-footer">
									<div class="d-flex align-items-center justify-content-end">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
										<button class="btn btn-primary wizard-next-btn" type="button">Add Team Member</button>
									</div>
								</div>
							</form>
						</fieldset>
						<fieldset>
							<form action="https://smarthr.co.in/demo/html/template/projects.html">
								<div class="modal-body">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label me-2">Team Members</label>
												<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Jerald,Andrew,Philip,Davis">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label me-2">Team Leader</label>
												<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Hendry,James">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label me-2">Project Manager</label>
												<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Dwight">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">Status</label>
												<select class="select">
													<option>Select</option>
													<option>Active</option>
													<option>Inactive</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div>
												<label class="form-label">Tags</label>
												<select class="select">
													<option>Select</option>
													<option>High</option>
													<option>Low</option>
													<option>Medium</option>
												</select>
											</div>
										</div>
									</div>								
								</div>
								<div class="modal-footer">
									<div class="d-flex align-items-center justify-content-end">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
										<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#success_modal">Save</button>
									</div>
								</div>
							</form>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Project -->

		<!-- Add Leaves -->
		
		<div class="modal fade" id="add_leaves">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Leave Request</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="https://smarthr.co.in/demo/html/template/index.html">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Employee Name</label>
										<select class="select">
											<option>Select</option>
											<option>Anthony Lewis</option>
											<option>Brian Villalobos</option>
											<option>Harvey Smith</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Leave Type</label>
										<select class="select">
											<option>Select</option>
											<option>Medical Leave</option>
											<option>Casual Leave</option>
											<option>Annual Leave</option>
										</select>
									</div>	
								</div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">From </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">To </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>   
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">No of Days</label>
										<input type="text" class="form-control" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Remaining Days</label>
										<input type="text" class="form-control" disabled>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Leaves</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Leaves -->
		@endsection
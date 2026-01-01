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
						
						
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

			


				<!-- Project Data Cards -->
				<div class="row">
					<div class="col-md-4 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<span class="avatar rounded-circle bg-primary mb-2">
									<i class="ti ti-message-circle fs-16"></i>
								</span>
								<h6 class="fs-13 fw-medium text-default mb-1">Total Enquiries</h6>
								<h3 class="mb-3">{{ $totalEnquiries }}</h3>
								
								<a href="{{ route('enquiries') }}" class="link-default">View All Enquiries</a>
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
								<h3 class="mb-3">{{ $totalProducts }}</h3>
								
								<a href="{{ route('products') }}" class="link-default">View All Products</a>
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
								<h3 class="mb-3">{{ $totalCategories }}</h3>
								
								<a href="{{ route('categories') }}" class="link-default">View All Categories</a>
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
								<h3 class="mb-3">{{ $totalTestimonials }}</h3>
								
								<a href="{{ route('testimonials') }}" class="link-default">View All Testimonials</a>
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
								<h3 class="mb-3">{{ $totalBrands }}</h3>
								
								<a href="{{ route('brands') }}" class="link-default">View All Brands</a>
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
								<h3 class="mb-3">{{ $totalCustomers }}</h3>
								
								<a href="{{ route('customers') }}" class="link-default">View All Customers</a>
							</div>
						</div>
					</div>
					<!-- /Project Data Cards -->
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
								@foreach($recentEnquiries as $enquiry)
								<div class="d-flex align-items-center justify-content-between {{ $loop->last ? 'mb-0' : 'mb-4' }}">
									<div class="d-flex align-items-center">
										
										<div class="ms-2 overflow-hidden">
											<p class="text-dark fw-medium text-truncate mb-0"><a href="#">{{ $enquiry->user_name }}</a></p>
											<span class="fs-13 d-inline-flex align-items-center">{{ $enquiry->product ? $enquiry->product->product_name : 'General' }} <i class="ti ti-circle-filled fs-4 mx-2 text-primary"></i>{{ $enquiry->user_email }}</span>
										</div>
									</div>
									<span class="badge badge-{{ $enquiry->status == 'pending' ? 'secondary' : ($enquiry->status == 'replied' ? 'info' : 'purple') }} badge-xs">{{ ucfirst($enquiry->status) }}</span>
								</div>
								@endforeach
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
											@foreach($topProducts as $product)
											<tr {{ $loop->last ? 'class="border-0"' : '' }}>
												<td {{ $loop->last ? 'class="border-0"' : '' }}>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar">
															<img src="{{ asset('storage/' . $product->product_thumbnail) }}" class="img-fluid rounded-circle" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="javascript:void(0);">{{ $product->product_name }}</a></h6>
															<span class="fs-12">{{ $product->category }}</span>
														</div>
													</div>
												</td>
												<td {{ $loop->last ? 'class="border-0"' : '' }}>
													<span class="badge badge-secondary-transparent badge-xs">{{ $product->category }}</span>
												</td>
												<td {{ $loop->last ? 'class="border-0"' : '' }}>0</td>
												<td {{ $loop->last ? 'class="border-0"' : '' }}>
													<span class="badge badge-success d-inline-flex align-items-center badge-xs">
														<i class="ti ti-point-filled me-1"></i>{{ ucfirst($product->status) }}
													</span>
												</td>
											</tr>
											@endforeach
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
				<p class="mb-0">2025 &copy; Texon.</p>
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
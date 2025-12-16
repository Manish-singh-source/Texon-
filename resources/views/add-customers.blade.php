@extends('layouts.masters')
@section('content')
    
<!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Add Customer</h3>
						</div>
                        <nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html">Home</a>
								</li>
								<li class="breadcrumb-item">
									Customer
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Customer</li>
							</ol>
						</nav>
					</div>
				</div>
				<!-- /Page Header -->

				

				<div class="row">
					<div class="col-md-12">
						<div class="card">
						
							<div class="card-body">
								<form action="#">
									<h5 class="card-title">Personal Information</h5>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="mb-3">
												<label class="form-label">Phone Number</label>
												<input type="text" class="form-control">
											</div>
											<div class="mb-3">
												<label class="form-label">Gender</label>
												<select class="select">
													<option>Select</option>
													<option value="1">Male</option>
													<option value="2">Female</option>
													
												</select>
											</div>
											
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="mb-3">
												<label class="form-label">E-mail Addres</label>
												<input type="text" class="form-control">
											</div>

											<div class="mb-3">
												<label class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control">


												
											</div>
											
										</div>
									</div>
									
									
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Other Details</h5>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Customer Type</label>
												<select class="select">
													<option>Select</option>
													<option value="1">Retail</option>
													<option value="2">Wholesaler</option>
                                                    <option value="3">Corporate</option>
													
												</select>
											</div>
											<div class="mb-3">
												<label class="form-label">GST Number</label>
												<input type="text" class="form-control">
											</div>
                                            <div class="mb-3">
												<label class="form-label">PAN Number</label>
                                                <input type="text" class="form-control">
											</div>
											
											
										</div>
										<div class="col-md-6">
											<div class="row">
                                                
											<div class="mb-3">
												<label class="form-label">Company Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="mb-3">
												<label class="form-label">Company Addres</label>
												<input type="text" class="form-control">
											</div>
											
										</div>
												
											</div>
										</div>
									</div>
									<div class="text-end" style="margin-bottom: 20px; margin-right: 20px;">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>


@endsection
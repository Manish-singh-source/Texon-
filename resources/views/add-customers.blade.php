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
								@if(session('success'))
									<div class="alert alert-success">{{ session('success') }}</div>
								@endif
								@if($errors->any())
									<div class="alert alert-danger">
										<ul class="mb-0">
											@foreach($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								<form action="{{ route('add-customer.store') }}" method="POST">
									@csrf
									<h5 class="card-title">Personal Information</h5>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">First Name</label>
												<input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
											</div>
											<div class="mb-3">
												<label class="form-label">Phone Number</label>
												<input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
											</div>
											<div class="mb-3">
												<label class="form-label">Gender</label>
												<select name="gender" class="select">
													<option value="">Select</option>
													<option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Male</option>
													<option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>Female</option>

												</select>
											</div>

										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Last Name</label>
												<input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
											</div>
											<div class="mb-3">
												<label class="form-label">E-mail Address</label>
												<input type="email" name="email" class="form-control" value="{{ old('email') }}">
											</div>

											<div class="mb-3">
												<label class="form-label">Date of Birth</label>
							                                         <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">


											</div>

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
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">Customer Type</label>
														<select name="customer_type" class="select">
															<option value="">Select</option>
															<option value="1" {{ old('customer_type') == '1' ? 'selected' : '' }}>Retail</option>
															<option value="2" {{ old('customer_type') == '2' ? 'selected' : '' }}>Wholesaler</option>
															<option value="3" {{ old('customer_type') == '3' ? 'selected' : '' }}>Corporate</option>

														</select>
													</div>
													<div class="mb-3">
														<label class="form-label">GST Number</label>
														<input type="text" name="gst_number" class="form-control" value="{{ old('gst_number') }}">
													</div>
													 <div class="mb-3">
														<label class="form-label">PAN Number</label>
														 <input type="text" name="pan_number" class="form-control" value="{{ old('pan_number') }}">
													</div>


												</div>
												<div class="col-md-6">
													<div class="row">

													<div class="mb-3">
														<label class="form-label">Company Name</label>
														<input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">
													</div>
													<div class="mb-3">
														<label class="form-label">Company Address</label>
														<textarea name="company_address" class="form-control" rows="3">{{ old('company_address') }}</textarea>
													</div>

												</div>

													</div>
												</div>
											</div>
											<div class="text-end" style="margin-bottom: 20px; margin-right: 20px;">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				</form>
						</div>
					</div>
				</div>

				
			</div>


@endsection
@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Add Brand</h3>
						</div>
                        <nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html">Home</a>
								</li>
								<li class="breadcrumb-item">
									Brand
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Brand</li>
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
									<h5 class="card-title">Brand Information</h5>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Brand Name</label>
												<input type="text" class="form-control" placeholder="Enter Brand Name">
											</div>
											<div class="mb-3">
												<label class="form-label">Brand Image</label>
												<input type="file" class="form-control" name="brand_image" accept="image/*">
												<small class="text-muted">Upload brand image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
											</div>

										</div>
										<div class="col-md-6">
											
											<div class="mb-3">
												<label class="form-label">Status</label>
												<select class="form-select">
													<option value="active">Active</option>
													<option value="inactive">Inactive</option>
												</select>
											</div>


										</div>
									</div>

									<div class="text-end">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>



			</div>


@endsection
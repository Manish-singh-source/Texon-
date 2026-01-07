@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Add Featured Product</h3>
						</div>

					</div>
				</div>
				<!-- /Page Header -->



				<div class="row">
					<div class="col-md-12">
						<div class="card">

							<div class="card-body">
								<form action="{{ route('add-featured-product.store') }}" method="POST" enctype="multipart/form-data">
									@csrf
									<h5 class="card-title">Featured Product Information</h5>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Product <span class="text-danger">*</span></label>
												<select class="form-select" name="product_id">
													<option value="">Select Product</option>
													@foreach($products as $product)
														<option value="{{ $product->id }}">{{ $product->product_name }}</option>
													@endforeach
												</select>
											</div>
											<div class="mb-3">
												<label class="form-label">Heading <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="heading" placeholder="Enter Heading">
											</div>
											<div class="mb-3">
												<label class="form-label">Description <span class="text-danger">*</span></label>
												<textarea class="form-control" name="description" rows="4" placeholder="Enter Description"></textarea>
											</div>
											<div class="mb-3">
												<label class="form-label">Featured Product Image <span class="text-danger">( 170*41 PX )</span></label>
												<input type="file" class="form-control" name="featured_product_image" accept="image/*">
												<small class="text-muted">Upload featured product image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
											</div>

										</div>
										<div class="col-md-6">

											<div class="mb-3">
												<label class="form-label">Status <span class="text-danger">*</span></label>
												<select class="form-select" name="status">
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
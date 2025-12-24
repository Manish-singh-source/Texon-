@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Add Presence</h3>
						</div>

					</div>
				</div>
				<!-- /Page Header -->



				<div class="row">
					<div class="col-md-12">
						<div class="card">

							<div class="card-body">
								<form action="{{ route('add-presence.store') }}" method="POST" enctype="multipart/form-data">
									@csrf
									<h5 class="card-title">Presence Information</h5>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Presence Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="name" placeholder="Enter Presence Name">
											</div>
											<div class="mb-3">
												<label class="form-label">Presence Image</label>
												<input type="file" class="form-control" name="presence_image" accept="image/*">
												<small class="text-muted">Upload presence image (JPEG, PNG, JPG, GIF - Max: 2MB)</small>
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
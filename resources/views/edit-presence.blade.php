@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Edit Presence</h3>
						</div>

					</div>
				</div>
				<!-- /Page Header -->



				<div class="row">
					<div class="col-md-12">
						<div class="card">

							<div class="card-body">
								<form action="{{ route('edit-presence.update', $presence->id) }}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PUT')
									<h5 class="card-title">Presence Information</h5>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Presence Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="name" value="{{ $presence->name }}" placeholder="Enter Presence Name">
											</div>
											<div class="mb-3">
												<label class="form-label">Presence Image</label>
												@if($presence->image)
													<div class="mb-2">
														<img src="{{ asset('storage/' . $presence->image) }}" alt="Current Image" style="max-width: 100px;">
													</div>
												@endif
												<input type="file" class="form-control" name="presence_image" accept="image/*">
												<small class="text-muted">Upload new presence image (JPEG, PNG, JPG, GIF - Max: 2MB). Leave empty to keep current image.</small>
											</div>

										</div>
										<div class="col-md-6">

											<div class="mb-3">
												<label class="form-label">Status <span class="text-danger">*</span></label>
												<select class="form-select" name="status">
													<option value="active" {{ $presence->status == 'active' ? 'selected' : '' }}>Active</option>
													<option value="inactive" {{ $presence->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
												</select>
											</div>


										</div>
									</div>

									<div class="text-end">
										<button type="submit" class="btn btn-primary">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>



			</div>


@endsection
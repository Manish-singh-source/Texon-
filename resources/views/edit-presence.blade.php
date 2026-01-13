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
								<form action="{{ route('edit-presence.update', $presence->id) }}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PUT')
									<h5 class="card-title">Presence Information</h5>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Title <span class="text-danger">*</span></label>
												<input type="text" name="title" class="form-control" value="{{ old('title', $presence->title) }}">
											</div>
											<div class="mb-3">
												<label class="form-label">Author <span class="text-danger">*</span></label>
												<input type="text" name="author" class="form-control" value="{{ old('author', $presence->author) }}">
											</div>

										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Tags</label>
												<input type="text" name="tags" class="form-control" value="{{ old('tags', $presence->tags) }}" data-role="tagsinput">
											</div>
											<div class="mb-3">
												<label class="form-label">Status <span class="text-danger">*</span></label>
												<select name="status" class="select">
													<option value="draft" {{ old('status', $presence->status) == 'draft' ? 'selected' : '' }}>Draft</option>
													<option value="published" {{ old('status', $presence->status) == 'published' ? 'selected' : '' }}>Published</option>

												</select>
											</div>

											<div class="mb-3">
												<label class="form-label">Published Date</label>
											                                     <input type="date" name="published_date" class="form-control" value="{{ old('published_date', $presence->published_date ? \Carbon\Carbon::parse($presence->published_date)->format('Y-m-d') : '') }}">


											</div>
											<div class="mb-3">
												<label class="form-label">Featured Image</label>
												<input type="file" name="featured_image" class="form-control" accept="image/*">
												@if($presence->featured_image)
													<img src="{{ asset('storage/' . $presence->featured_image) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
												@endif
											</div>

										</div>
									</div>


								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Content</h5>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<div class="mb-3">
															    <label class="form-label">Presence Content <span class="text-danger">*</span></label>
															    <textarea name="content" id="presence-content-editor" class="form-control" rows="10">{{ old('content', $presence->content) }}</textarea>
															</div>
												</div>

											</div>
											<div class="text-end" style="margin-bottom: 20px; margin-right: 20px;">
												<button type="submit" class="btn btn-primary">Update</button>
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

<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<script>
			 ClassicEditor
			     .create( document.querySelector( '#presence-content-editor' ) )
			     .catch( error => {
			         console.error( error );
			     } );
</script>

@endsection
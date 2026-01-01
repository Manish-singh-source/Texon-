@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Blog List</h2>
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
							<a href="{{route('add-blog')}}" class="btn btn-primary d-flex align-items-center">
								Add New Blog
							</a>
						</div>
						<div class="dropdown mb-2" style="margin-left: 10px;">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
								Actions
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<li><a class="dropdown-item cursor-pointer" id="delete-selected">Delete Selected</a></li>
							</ul>
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

				<!-- Blog List -->
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div
								class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
								<h5 class="d-flex align-items-center">All Blogs</h5>
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
												<th>Title</th>
												<th>Author</th>
												<th>Category</th>
												<th>Status</th>
												<th>Published Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($blogs as $blog)
											<tr>
												<td>
													<div class="form-check form-check-md">
														<input class="form-check-input row-checkbox" type="checkbox" name="ids[]" value="{{ $blog->id }}">
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="me-2">
															<img src="{{ asset( 'storage/' . $blog->featured_image) }}" alt="blog image" width="40">
														</div>
														<h6 class="fw-medium">{{ $blog->title }}</h6>
													</div>
												</td>
												<td>{{ $blog->author }}</td>
												<td>{{ $blog->category ?? 'N/A' }}</td>
												<td>@if($blog->status == 'published') <span class="badge bg-success">Published</span> @elseif($blog->status == 'draft') <span class="badge bg-warning">Draft</span> @endif</td>
												<td>{{ $blog->published_date ? $blog->published_date->format('d M Y') : 'N/A' }}</td>
												<td>
													<div class="action-icon d-inline-flex">
														<!-- View Blog Details (Page Navigation) -->
														<a href="{{ route('view-blog', $blog->id) }}" class="me-2">
															<i class="ti ti-eye"></i>
														</a>
														<!-- Edit (Modal) -->
														<a href="{{ route('edit-blog', $blog->id) }}" class="me-2">
															<i class="ti ti-edit"></i>
														</a>
														<!-- Delete -->
														<form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-link p-0 text-danger" onclick="return confirm('Are you sure you want to delete this blog?')">
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
				<!-- /Blog List  -->
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

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				// Select All functionality
				const selectAll = document.getElementById('select-all');
				const checkboxes = document.querySelectorAll('.row-checkbox');
				selectAll.addEventListener('change', function() {
					checkboxes.forEach(cb => cb.checked = selectAll.checked);
				});

				// Delete Selected functionality
				document.getElementById('delete-selected').addEventListener('click', function() {
					let selected = [];
					document.querySelectorAll('.row-checkbox:checked').forEach(cb => {
						selected.push(cb.value);
					});
					if (selected.length === 0) {
						alert('Please select at least one record.');
						return;
					}
					if (confirm('Are you sure you want to delete selected records?')) {
						// Create a form and submit
						let form = document.createElement('form');
						form.method = 'POST';
						form.action = '{{ route('delete.selected.blog') }}';
						form.innerHTML = `
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="ids" value="${selected.join(',')}">
						`;
						document.body.appendChild(form);
						form.submit();
					}
				});
			});
		</script>

	@endsection
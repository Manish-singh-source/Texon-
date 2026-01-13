@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Presence List</h2>
                        <!--<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Presence</li>
							</ol>
						</nav>-->
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="dropdown mb-3" style="margin-right: 10px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item cursor-pointer" id="delete-selected">Delete Selected</a></li>
                            </ul>
                        </div>
                        <div class="mb-3" style="margin-right: 10px;">
                            <a href="{{ route('add-presence') }}" class="btn btn-primary d-flex align-items-center">Create News & Events</a>
                        </div>
                        <div class="ms-2 head-icons">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <!-- Presence Table -->
                <div class="card">
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
                                        <th>Sr. No.</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Published Date</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($presences as $index => $presence)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input row-checkbox" type="checkbox" name="ids[]" value="{{ $presence->id }}">
                                            </div>
                                        </td>
                                        <td><a href="#">{{ $index + 1 }}</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    @if($presence->featured_image)
                                                        <img src="{{ asset('storage/' . $presence->featured_image) }}" alt="presence image" width="40">
                                                    @else
                                                        <img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-32.jpg" alt="default image" width="40">
                                                    @endif
                                                </div>
                                                <h6 class="fw-medium">{{ $presence->title }}</h6>
                                            </div>
                                        </td>
                                        <td>{{ $presence->author }}</td>
                                        <td>{{ $presence->published_date ? \Carbon\Carbon::parse($presence->published_date)->format('d M Y') : 'N/A' }}</td>
                                        <td>
                                            @if($presence->status == 'published')
                                                <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Published
                                                </span>
                                            @else
                                                <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Draft
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">

                                                <!-- Edit -->
                                                <a href="{{ route('edit-presence', $presence->id) }}" class="me-2">
                                                    <i class="ti ti-edit"></i>
                                                </a>
                                                <!-- Delete -->
                                                <form action="{{ route('presence.destroy', $presence->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this presence?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0" style="color: inherit;">
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

                    <!-- /Add Presence -->


                </div>
                <!-- /Main Wrapper -->
            </div>
        </div>
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
                    form.action = '{{ route('delete.selected.presence') }}';
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
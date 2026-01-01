    @extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Brands List</h2>
                        <!--<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Brands</li>
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
                            <a href="{{ route('add-brand') }}" class="btn btn-primary d-flex align-items-center">Create Brands</a>
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

                <!-- Brands Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="custom-datatable-filter table-responsive">
                            <table id="brands-table" class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="no-sort">
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox" id="select-all">
                                            </div>
                                        </th>
                                        <th>Sr. No.</th>
                                        <th>Brand Image</th>
                                        <th>Brand Name</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($brands as $index => $brand)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input row-checkbox" type="checkbox" name="ids[]" value="{{ $brand->id }}">
                                            </div>
                                        </td>
                                        <td><a href="#">{{ $index + 1 }}</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                    class="avatar avatar-md" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">
                                                    @if($brand->image)
                                                        <img src="{{ asset('storage/' . $brand->image) }}"
                                                             class="img-fluid rounded-circle" alt="img">
                                                    @else
                                                        <img src="https://smarthr.co.in/demo/html/template/assets/img/users/user-32.jpg"
                                                             class="img-fluid rounded-circle" alt="img">
                                                    @endif
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $brand->name }}</td>
                                        <td>
                                            @if($brand->status == 'active')
                                                <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Active
                                                </span>
                                            @else
                                                <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Inactive
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-icon d-inline-flex">

                                                <!-- Edit -->
                                                <a href="{{ route('edit-brand', $brand->id) }}" class="me-2">
                                                    <i class="ti ti-edit"></i>
                                                </a>
                                                <!-- Delete -->
                                                <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this brand?')">
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

                    <!-- /Add Brand -->


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
                    form.action = '{{ route('delete.selected.brand') }}';
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
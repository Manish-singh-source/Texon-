@extends('layouts.masters')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Analytics Dashboard</h2>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="ms-2 head-icons">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        @if(isset($error))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <!-- Analytics Data Cards -->
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <span class="avatar rounded-circle bg-primary mb-2">
                            <i class="ti ti-users fs-16"></i>
                        </span>
                        <h6 class="fs-13 fw-medium text-default mb-1">Total Visitors (Last 7 Days)</h6>
                        <h3 class="mb-3">{{ number_format($totalVisitors) }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <span class="avatar rounded-circle bg-secondary mb-2">
                            <i class="ti ti-eye fs-16"></i>
                        </span>
                        <h6 class="fs-13 fw-medium text-default mb-1">Total Page Views (Last 7 Days)</h6>
                        <h3 class="mb-3">{{ number_format($totalPageViews) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Analytics Data Cards -->

        <!-- Top Pages Table -->
        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                        <h5 class="mb-2">Top 5 Most Visited Pages (Last 7 Days)</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Page Title</th>
                                        <th>URL</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($topPages as $page)
                                    <tr {{ $loop->last ? 'class="border-0"' : '' }}>
                                        <td {{ $loop->last ? 'class="border-0"' : '' }}>
                                            {{ $page['pageTitle'] ?? 'N/A' }}
                                        </td>
                                        <td {{ $loop->last ? 'class="border-0"' : '' }}>
                                            {{ $page['fullPageUrl'] ?? $page['pagePath'] ?? 'N/A' }}
                                        </td>
                                        <td {{ $loop->last ? 'class="border-0"' : '' }}>
                                            {{ number_format($page['screenPageViews'] ?? $page['pageViews'] ?? 0) }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-4">No data available</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Pages Table -->

    </div>

    <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
        <p class="mb-0">2025 &copy; Texon.</p>
    </div>

</div>
<!-- /Page Wrapper -->
@endsection
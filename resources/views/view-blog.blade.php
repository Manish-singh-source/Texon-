@extends('layouts.masters')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Blog Details</h2>
                    <!--<nav>
           <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
             <a href="https://smarthr.co.in/demo/html/template/index.html"><i class="ti ti-smart-home"></i></a>
            </li>
            <li class="breadcrumb-item">
             Application
            </li>
            <li class="breadcrumb-item active" aria-current="page">Invoices</li>
           </ol>
          </nav>-->
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <!--<div class="mb-2">
           <a href="#" class="btn btn-dark d-flex align-items-center"><i class="ti ti-download me-2"></i>Download</a>
          </div>-->
                </div>
            </div>
            <!-- /Breadcrumb -->



            <div class="card">
                <div class="card-body">

                    <div class="row align-items-start">

                        <!-- Left Blog Info -->
                        <div class="col-md-4">
                            <div class="d-flex align-items-start">
                                @if($blog->featured_image)
                                    <img src="{{ asset($blog->featured_image) }}" alt="Featured Image" style="width:120px;height:120px;border-radius:4px;object-fit:cover;">
                                @else
                                    <div
                                        style="width:120px;height:120px;background:#e0e0e0;border-radius:4px;
      display:flex;align-items:center;justify-content:center;">
                                        No Image
                                    </div>
                                @endif

                                <div class="ms-3">
                                    <h3 class="mb-1">{{ $blog->title }}</h3>
                                    <p class="mb-0 text-muted">Published on {{ $blog->published_date ? $blog->published_date->format('d M Y') : 'N/A' }}</p>
                                    <p class="text-muted">Category {{ $blog->category ?? 'N/A' }}</p>

                                    <a href="{{ route('edit-blog', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Info -->
                        <div class="col-md-8">
                            <div class="border rounded">

                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <span>Author</span>
                                    <strong>{{ $blog->author }}</strong>
                                </div>

                                <div class="d-flex justify-content-between border-bottom p-3">
                                    <span>Status</span>
                                    <span class="badge bg-success">{{ $blog->status == 'published' ? 'Published' : 'Draft' }}</span>
                                </div>

                                <div class="d-flex justify-content-between p-3">
                                    <span>Tags</span>
                                    <strong>{{ $blog->tags ?? 'N/A' }}</strong>
                                </div>

                            </div>
                        </div>

                    </div>

                    <hr class="my-4">

                    <!-- Blog Content -->
                    <h5 class="mb-3">Content</h5>

                    <div class="card-body pb-0">
                        <p>{{ $blog->content }}</p>
                    </div>

                </div>
            </div>

            <!-- Comments Section -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Comments</h5>
                </div>

                <div class="card-body p-0">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Comment</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($blog->comments ?? [] as $comment)
                            <tr>
                                <td>{{ $comment->content }}</td>
                                <td>{{ $comment->author }}</td>
                                <td>{{ $comment->created_at->format('d M Y') }}</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    No comments found for this blog.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer d-flex align-items-center justify-content-center bg-white border-top p-3">
                <p class="mb-0">
                    © 2025 - Made by
                    <a href="https://technofra.com/" class="text-primary">Technofra</a>
                </p>
            </div>
            <!-- /Footer -->
            <!-- /Page Wrapper -->


        </div>
        <!-- /Page Wrapper -->
    @endsection
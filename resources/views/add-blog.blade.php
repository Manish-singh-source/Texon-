@extends('layouts.masters')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper cardhead">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Add Blog</h3>
                    </div>
                    {{-- <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="https://smarthr.co.in/demo/html/template/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                Blog
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
                        </ol>
                    </nav> --}}
                </div>
            </div>
            <!-- /Page Header -->



            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('add-blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="card-title">Blog Information</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Author <span class="text-danger">*</span></label>
                                            <input type="text" name="author" class="form-control"
                                                value="{{ old('author') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select name="category" class="select">
                                                <option value="">Select</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->name }}" {{ old('category') == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Featured Image</label>
                                            <input type="file" name="featured_image" class="form-control"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tags</label>
                                            <input type="text" name="tags" class="form-control"
                                                value="{{ old('tags') }}" data-role="tagsinput">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="select">
                                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>
                                                    Draft</option>
                                                <option value="published"
                                                    {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Published Date</label>
                                            <input type="date" name="published_date" class="form-control"
                                                value="{{ old('published_date') }}">


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
                                                <label class="form-label">Blog Content <span class="text-danger">*</span></label>
                                                <textarea name="content" id="blog_content" class="form-control" rows="10">{{ old('content') }}</textarea>
                                                @error('content')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-end" style="margin-bottom: 20px; margin-right: 20px;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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

<!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#blog_content'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                        'outdent', 'indent', '|',
                        'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
                        'undo', 'redo', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                        'alignment', 'horizontalLine', 'code', 'codeBlock'
                    ]
                },
                language: 'en',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:inline',
                        'imageStyle:block',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                }
            })
            .then(editor => {
                window.editor = editor;
                console.log('CKEditor initialized successfully');
            })
            .catch(error => {
                console.error('Error initializing CKEditor:', error);
            });
    });
</script>

@endsection

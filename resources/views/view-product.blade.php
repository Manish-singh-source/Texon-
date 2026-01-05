@extends('layouts.masters')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">View Product</h2>

                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Product Information</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('view-product.update', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-light w-100 rounded p-3 mb-4">
                                            <h6 class="mb-3">Product Media</h6>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Thumbnail</label>
                                                        <input type="file" class="form-control" name="product_thumbnail"
                                                            accept="image/*">
                                                        @if ($product->product_thumbnail)
                                                            <div class="mt-2">
                                                                <img src="{{ asset('storage/' . $product->product_thumbnail) }}?t={{ time() }}"
                                                                    class="img-fluid" style="max-width: 100px;">
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Image Gallery</label>
                                                        <input type="file" class="form-control" name="image_gallery[]"
                                                            multiple accept="image/*">
                                                        @if ($product->image_gallery)
                                                            @php $gallery = json_decode($product->image_gallery, true); @endphp
                                                            @if (is_array($gallery))
                                                                <div class="mt-2 row">
                                                                    @foreach ($gallery as $image)
                                                                        <div class="col-3 mb-2">
                                                                            <img src="{{ asset('storage/' . $image) }}"
                                                                                class="img-fluid" style="max-width: 100px;">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Video</label>
                                                        <input type="file" class="form-control" name="product_video"
                                                            accept="video/*">
                                                        @if ($product->product_video)
                                                            <div class="mt-2">
                                                                <video width="150" controls>
                                                                    <source
                                                                        src="{{ asset('storage/' . $product->product_video) }}"
                                                                        type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Product Name <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" name="product_name"
                                                value="{{ $product->product_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tags / Keywords</label>
                                            <input type="text" class="form-control" name="tags"
                                                placeholder="Comma separated" value="{{ $product->tags }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select class="form-select" name="category">
                                                <option>Select</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->name }}"
                                                        {{ $product->category == $category->name ? 'selected' : '' }}>
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option value="active"
                                                    {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="inactive"
                                                    {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Sort Description</label>
                                            <textarea class="form-control" name="sort_description" rows="3">{{ $product->sort_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary me-2">Save</button>
                                    <a href="{{ route('products') }}" class="btn btn-outline-light border">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add section</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="nav nav-tabs flex-column" id="myTab" role="tablist"
                                        style="background-color: #f8f9fa; padding: 10px;">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active btn btn-outline-primary w-100 mb-2 text-start"
                                                id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                                                type="button" role="tab" aria-controls="tab1" aria-selected="true"
                                                style="border: 1px solid #007bff;">Banner</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start"
                                                id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5"
                                                type="button" role="tab" aria-controls="tab5" aria-selected="false"
                                                style="border: 1px solid #007bff;">About Product</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start"
                                                id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6"
                                                type="button" role="tab" aria-controls="tab6" aria-selected="false"
                                                style="border: 1px solid #007bff;">Product Key Points</button>
                                        </li>
                                        {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start"
                                            id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                                            role="tab" aria-controls="tab2" aria-selected="false"
                                            style="border: 1px solid #007bff;">Product Gallery</button>
                                    </li> --}}
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start"
                                                id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4"
                                                type="button" role="tab" aria-controls="tab4" aria-selected="false"
                                                style="border: 1px solid #007bff;">Product Features</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start"
                                                id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                                type="button" role="tab" aria-controls="tab3" aria-selected="false"
                                                style="border: 1px solid #007bff;">Banner Video</button>
                                        </li>



                                    </ul>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content card-s" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                            aria-labelledby="tab1-tab">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5>Banner Section</h5>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input section-toggle" type="checkbox"
                                                        id="toggle-banner" data-section="banner"
                                                        {{ $product->banner_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toggle-banner">
                                                        <span
                                                            class="badge {{ $product->banner_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $product->banner_active ? 'Active' : 'Inactive' }}
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('view-product.store-banner', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Video Upload <span
                                                                    class="text-danger">(1913*549)</span></label>
                                                            <input type="file" class="form-control"
                                                                name="video_upload" accept="video/*">
                                                            @if (isset($productBanner) && $productBanner->video_upload)
                                                                <div class="mt-2">
                                                                    <video width="200" controls>
                                                                        <source
                                                                            src="{{ asset('storage/' . $productBanner->video_upload) }}"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Banner Image Upload <span
                                                                    class="text-danger">(1913*549)</span></label>
                                                            <input type="file" class="form-control"
                                                                name="banner_image" accept="image/*">
                                                            @if (isset($productBanner) && $productBanner->banner_image)
                                                                <div class="mt-2 position-relative banner-image"
                                                                    data-image="{{ $productBanner->banner_image }}">
                                                                    <img src="{{ asset('storage/' . $productBanner->banner_image) }}"
                                                                        class="img-fluid" style="max-width: 200px;">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-danger position-absolute top-0 start-0"
                                                                        onclick="removeBannerImage(this)">×</button>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Heading</label>
                                                            <input type="text" class="form-control" name="heading"
                                                                value="{{ $productBanner->heading ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Button Name</label>
                                                            <input type="text" class="form-control" name="button_name"
                                                                value="{{ $productBanner->button_name ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Button URL</label>
                                                            <input type="url" class="form-control" name="button_url"
                                                                value="{{ $productBanner->button_url ?? '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="tab-pane fade" id="tab5" role="tabpanel"
                                            aria-labelledby="tab5-tab">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5>About Product Section</h5>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input section-toggle" type="checkbox"
                                                        id="toggle-about-product" data-section="about_product"
                                                        {{ $product->about_product_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toggle-about-product">
                                                        <span
                                                            class="badge {{ $product->about_product_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $product->about_product_active ? 'Active' : 'Inactive' }}
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('view-product.store-about', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Media Upload <span
                                                                    class="text-danger">(635*440)</span></label>
                                                            <input type="file" class="form-control" name="media[]"
                                                                multiple accept="image/*,video/*">
                                                            <small class="text-muted">Upload multiple images and
                                                                videos</small>
                                                            @if (isset($aboutProduct) && $aboutProduct->images)
                                                                <div class="mt-2 row" id="about-media-preview">
                                                                    @foreach (json_decode($aboutProduct->images, true) as $media)
                                                                        @php
                                                                            $ext = strtolower(
                                                                                pathinfo($media, PATHINFO_EXTENSION),
                                                                            );
                                                                            $isVideo = in_array($ext, [
                                                                                'mp4',
                                                                                'avi',
                                                                                'mov',
                                                                                'webm',
                                                                                'ogg',
                                                                            ]);
                                                                        @endphp
                                                                        <div class="col-md-3 mb-2 position-relative about-media"
                                                                            data-image="{{ $media }}">
                                                                            @if ($isVideo)
                                                                                <video width="100" controls>
                                                                                    <source
                                                                                        src="{{ asset('storage/' . $media) }}"
                                                                                        type="video/{{ $ext }}">
                                                                                    Your browser does not support the video
                                                                                    tag.
                                                                                </video>
                                                                            @else
                                                                                <img src="{{ asset('storage/' . $media) }}"
                                                                                    class="img-fluid"
                                                                                    style="max-width: 100px;">
                                                                            @endif
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-danger position-absolute top-0 start-0"
                                                                                onclick="removeAboutMedia(this)">×</button>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Heading</label>
                                                            <input type="text" class="form-control" name="heading"
                                                                value="{{ $aboutProduct->heading ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Subheading</label>
                                                            <input type="text" class="form-control" name="subheading"
                                                                value="{{ $aboutProduct->subheading ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea class="form-control" name="description" rows="3">{{ $aboutProduct->description ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab6" role="tabpanel"
                                            aria-labelledby="tab6-tab">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5>Product Key Points Section</h5>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input section-toggle" type="checkbox"
                                                        id="toggle-key-points" data-section="key_points"
                                                        {{ $product->key_points_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toggle-key-points">
                                                        <span
                                                            class="badge {{ $product->key_points_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $product->key_points_active ? 'Active' : 'Inactive' }}
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('view-product.store-keypoints', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Card 1</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Image Upload <span
                                                                            class="text-danger">(638*442)</span></label>
                                                                    <input type="file" class="form-control"
                                                                        name="image" accept="image/*">
                                                                    @php $card1 = $keyPoints->where('type', 'card1')->first(); @endphp
                                                                    @if ($card1 && $card1->image)
                                                                        <div class="mt-2">
                                                                            <img src="{{ asset('storage/' . $card1->image) }}"
                                                                                class="img-fluid"
                                                                                style="max-width: 200px;">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Title</label>
                                                                    <input type="text" class="form-control"
                                                                        name="title" value="{{ $card1->title ?? '' }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Button</label>
                                                                    <input type="text" class="form-control"
                                                                        name="button"
                                                                        value="{{ $card1->button ?? '' }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">URL</label>
                                                                    <input type="url" class="form-control"
                                                                        name="url" value="{{ $card1->url ?? '' }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mt-3">
                                                    <div
                                                        class="card-header d-flex justify-content-between align-items-center">
                                                        <h5>Card 2</h5>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            id="add-card2"><i class="ti ti-plus"></i> Add List</button>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="card2-container">
                                                            @php $card2s = $keyPoints->where('type', 'card2'); @endphp
                                                            @foreach ($card2s as $index => $card2)
                                                                <div class="card2-item mb-3">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Heading</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="heading[]"
                                                                                    value="{{ $card2->heading }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    class="form-label">Description</label>
                                                                                <textarea class="form-control" name="description[]" rows="3">{{ $card2->description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-sm remove-card2"><i
                                                                            class="ti ti-trash"></i> Remove</button>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5>Product Gallery Section</h5>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input section-toggle" type="checkbox"
                                                    id="toggle-gallery" data-section="gallery"
                                                    {{ $product->gallery_active ? 'checked' : '' }}>
                                                <label class="form-check-label" for="toggle-gallery">
                                                    <span class="badge {{ $product->gallery_active ? 'bg-success' : 'bg-secondary' }}">
                                                        {{ $product->gallery_active ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <h5>Product Gallery</h5>
                                            </div>
                                            <div class="card-body">
                                                <form method="POST"
                                                    action="{{ route('view-product.store-gallery', $product->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Heading</label>
                                                                <input type="text" class="form-control" name="heading"
                                                                    value="{{ $productGallery->heading ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Subheading</label>
                                                                <input type="text" class="form-control"
                                                                    name="subheading"
                                                                    value="{{ $productGallery->subheading ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control" name="description"
                                                                    rows="3">{{ $productGallery->description ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Upload Images</label>
                                                                <input type="file" class="form-control" name="images[]"
                                                                    multiple accept="image/*">
                                                                <small class="text-muted">Upload multiple images. You
                                                                    can arrange the order after upload.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="image-previews-gallery" class="row">
                                                        @if (isset($productGallery) && $productGallery->images)
                                                        @php $galleryImages = json_decode($productGallery->images,
                                                        true); @endphp
                                                        @if (is_array($galleryImages))
                                                        @foreach ($galleryImages as $index => $image)
                                                        <div class="col-md-3 mb-3 position-relative gallery-image"
                                                            data-order="{{ $index }}" data-image="{{ $image }}">
                                                            <img src="{{ asset('storage/' . $image) }}"
                                                                class="img-thumbnail"
                                                                style="width:100%; height:200px; object-fit:contain;">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary position-absolute top-0 end-0"
                                                                onclick="moveUpGallery(this)">↑</button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary position-absolute bottom-0 end-0"
                                                                onclick="moveDownGallery(this)">↓</button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-danger position-absolute top-0 start-0"
                                                                onclick="removeImage(this)">×</button>
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        @endif
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
                                        <div class="tab-pane fade" id="tab3" role="tabpanel"
                                            aria-labelledby="tab3-tab">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5>Banner Video Section</h5>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input section-toggle" type="checkbox"
                                                        id="toggle-banner-video" data-section="banner_video"
                                                        {{ $product->banner_video_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toggle-banner-video">
                                                        <span
                                                            class="badge {{ $product->banner_video_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $product->banner_video_active ? 'Active' : 'Inactive' }}
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('view-product.store-banner-video', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Banner Image</label>
                                                            <input type="file" class="form-control"
                                                                name="banner_image" accept="image/*">
                                                            @if (isset($bannerVideo) && $bannerVideo->banner_image)
                                                                <div class="mt-2">
                                                                    <img src="{{ asset('storage/' . $bannerVideo->banner_image) }}"
                                                                        class="img-fluid" style="max-width: 200px;">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Banner Video URL (YouTube)</label>
                                                            <input type="url" class="form-control"
                                                                name="banner_video_url"
                                                                placeholder="https://www.youtube.com/watch?v=..."
                                                                value="{{ $bannerVideo->banner_video_url ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Banner Title</label>
                                                            <input type="text" class="form-control"
                                                                name="banner_title"
                                                                value="{{ $bannerVideo->banner_title ?? '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel"
                                            aria-labelledby="tab4-tab">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5>Product Features Section</h5>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input section-toggle" type="checkbox"
                                                        id="toggle-features" data-section="features"
                                                        {{ $product->features_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="toggle-features">
                                                        <span
                                                            class="badge {{ $product->features_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $product->features_active ? 'Active' : 'Inactive' }}
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('view-product.store-features', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Card 1</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                          @php
                                                            $card1 = $productFeatures->where('type', 'card1')->first();
                                                            @endphp
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Page Heading</label>
                                                                    <input type="text" class="form-control"
                                                                        name="page_heading"
                                                                        value="{{ $card1->page_heading ?? '' }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Sub Heading</label>
                                                                    <input type="text" class="form-control"
                                                                        name="sub_heading"
                                                                        value="{{ $card1->sub_heading ?? '' }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mt-3">
                                                    <div
                                                        class="card-header d-flex justify-content-between align-items-center">
                                                        <h5>Card 2</h5>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            id="add-card2-tab4"><i class="ti ti-plus"></i> Add
                                                            List</button>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="card2-tab4-container">
                                                            @php $card2s = $productFeatures->where('type', 'card2'); @endphp
                                                            @foreach ($card2s as $index => $card2)
                                                                <div class="card2-tab4-item mb-3">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Title</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="title[]"
                                                                                    value="{{ $card2->title }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Icon
                                                                                    Image</label>
                                                                                <input type="file" class="form-control"
                                                                                    name="icon_image[]" accept="image/*">
                                                                                @if ($card2->icon_image)
                                                                                    <div class="mt-2">
                                                                                        <img src="{{ asset('storage/' . $card2->icon_image) }}"
                                                                                            class="img-fluid"
                                                                                            style="max-width: 100px;">
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    class="form-label">Description</label>
                                                                                <textarea class="form-control" name="description[]" rows="3">{{ $card2->description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-sm remove-card2-tab4"><i
                                                                            class="ti ti-trash"></i> Remove</button>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2025 &copy; Texon.</p>

        </div>

    </div>
    <!-- /Page Wrapper -->
@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#tab5 textarea[name=description]'), {
                toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('textarea[name=sort_description]'), {
                toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
            })
            .catch(error => {
                console.error(error);
            });

        document.getElementById('add-card2').addEventListener('click', function() {
            const container = document.getElementById('card2-container');
            const newItemHTML = `
        <div class="card2-item mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading[]">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description[]" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove-card2"><i class="ti ti-trash"></i> Remove</button>
        </div>
    `;
            container.insertAdjacentHTML('beforeend', newItemHTML);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-card2')) {
                e.target.closest('.card2-item').remove();
            }
            if (e.target.classList.contains('remove-card2-tab4')) {
                e.target.closest('.card2-tab4-item').remove();
            }
        });

        let card2Tab4Count = 2;

        document.getElementById('add-card2-tab4').addEventListener('click', function() {
            const container = document.getElementById('card2-tab4-container');
            const newItemHTML = `
        <div class="card2-tab4-item mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title[]">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Icon Image</label>
                        <input type="file" class="form-control" name="icon_image[]" accept="image/*">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description[]" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove-card2-tab4"><i class="ti ti-trash"></i> Remove</button>
        </div>
    `;
            container.insertAdjacentHTML('beforeend', newItemHTML);
        });

        $('input[name="images[]"]').on('change', function(e) {
            const previews = $('#image-previews-gallery');
            const existingCount = previews.find('.gallery-image').length;

            $.each(e.target.files, function(index, file) {
                const reader = new FileReader();

                reader.onload = function(evt) {
                    const div = $('<div>', {
                        class: 'col-md-3 mb-3 position-relative gallery-image',
                        'data-order': existingCount + index,
                        html: `
                    <img src="${evt.target.result}" class="img-thumbnail" style="width:100%; height:200px; object-fit:contain;">
                    <button type="button" class="btn btn-sm btn-secondary position-absolute top-0 end-0" onclick="moveUpGallery(this)">↑</button>
                    <button type="button" class="btn btn-sm btn-secondary position-absolute bottom-0 end-0" onclick="moveDownGallery(this)">↓</button>
                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 start-0" onclick="removeImage(this)">×</button>
                `
                    });

                    previews.append(div);
                };

                reader.readAsDataURL(file);
            });
        });


        function moveUpGallery(btn) {
            const item = btn.parentElement;
            const prev = item.previousElementSibling;
            if (prev) {
                item.parentElement.insertBefore(item, prev);
            }
        }

        function moveDownGallery(btn) {
            const item = btn.parentElement;
            const next = item.nextElementSibling;
            if (next) {
                item.parentElement.insertBefore(next, item);
            }
        }

        function removeImage(btn) {
            const div = btn.parentElement;
            const image = div.dataset.image;
            const form = document.querySelector('form[action*="store-gallery"]');
            const hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'delete_images[]';
            hidden.value = image;
            form.appendChild(hidden);
            div.remove();
        }

        function removeAboutMedia(btn) {
            const div = btn.parentElement;
            const media = div.dataset.image;
            const form = document.querySelector('#tab5 form');
            const hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'delete_media[]';
            hidden.value = media;
            form.appendChild(hidden);
            div.remove();
        }

        function removeBannerImage(btn) {
            const div = btn.parentElement;
            const image = div.dataset.image;
            const form = document.querySelector('#tab1 form');
            const hidden = document.createElement('input');
            hidden.type = 'hidden';
            hidden.name = 'delete_banner_image';
            hidden.value = image;
            form.appendChild(hidden);
            div.remove();
        }

        // Handle form submit to include image order
        $('form[action*="store-gallery"]').on('submit', function(e) {
            const images = $('#image-previews-gallery .gallery-image');

            const orderInput = $('<input>', {
                type: 'hidden',
                name: 'image_order',
                value: images.map(function() {
                    return $(this).data('order');
                }).get().join(',')
            });

            $(this).append(orderInput);
        });


        // Section Toggle Functionality using jQuery
        $(document).ready(function() {
            console.log('Toggle script loaded with jQuery');

            $('.section-toggle').on('change', function() {
                console.log('Toggle changed:', $(this).attr('id'), 'Checked:', $(this).is(':checked'));

                const $toggle = $(this);
                const productId = {{ $product->id }};
                const section = $toggle.data('section');
                const isChecked = $toggle.is(':checked');

                console.log('Product ID:', productId, 'Section:', section, 'Checked:', isChecked);

                // Find the badge element
                const $badge = $toggle.next('label').find('.badge');

                console.log('Badge found:', $badge.length > 0);

                if ($badge.length === 0) {
                    console.error('Badge element not found for section:', section);
                    alert('Badge element not found. Please check the console.');
                    return;
                }

                // Get CSRF token
                const csrfToken = $('meta[name="csrf-token"]').attr('content');
                if (!csrfToken) {
                    console.error('CSRF token not found');
                    alert('CSRF token not found. Please refresh the page.');
                    $toggle.prop('checked', !isChecked);
                    return;
                }

                console.log('CSRF Token found');

                const url = `/admin/products/${productId}/toggle-section`;
                const payload = {
                    section: section,
                    active: isChecked ? 1 : 0
                };

                console.log('Sending AJAX request to:', url);
                console.log('Payload:', payload);

                $.ajax({
                    url: url,
                    type: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    contentType: 'application/json',
                    data: JSON.stringify(payload),
                    success: function(data) {
                        console.log('Response data:', data);
                        if (data.success) {
                            // Update badge
                            if (isChecked) {
                                $badge.removeClass('bg-secondary').addClass('bg-success').text(
                                    'Active');
                            } else {
                                $badge.removeClass('bg-success').addClass('bg-secondary').text(
                                    'Inactive');
                            }

                            // Show success message
                            const alertHtml = `
                        <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3" style="z-index: 9999;">
                            <strong>Success!</strong> Section ${isChecked ? 'activated' : 'deactivated'} successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    `;
                            $('body').append(alertHtml);

                            setTimeout(function() {
                                $('.alert-success').remove();
                            }, 3000);
                        } else {
                            // Revert toggle on error
                            console.error('Server returned error:', data.message);
                            $toggle.prop('checked', !isChecked);
                            alert('Error updating section status: ' + (data.message ||
                                'Unknown error'));
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', status, error);
                        console.error('Response:', xhr.responseText);
                        $toggle.prop('checked', !isChecked);
                        alert('Error updating section status: ' + error);
                    }
                });
            });
        });
    </script>
@endsection

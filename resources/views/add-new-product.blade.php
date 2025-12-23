@extends('layouts.masters')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Add New Product</h2>
                
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <div class="head-icons ms-2">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
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
                        <form action="https://smarthr.co.in/demo/html/template/products.html" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-light w-100 rounded p-3 mb-4">
                                        <h6 class="mb-3">Product Media</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Thumbnail</label>
                                                    <input type="file" class="form-control" name="product_thumbnail" accept="image/*">
                                                    <small class="text-muted">Upload a single thumbnail image (max 4MB)</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Image Gallery</label>
                                                    <input type="file" class="form-control" name="image_gallery[]" multiple accept="image/*">
                                                    <small class="text-muted">Upload multiple images for gallery (max 4MB each)</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Video</label>
                                                    <input type="file" class="form-control" name="product_video" accept="video/*">
                                                    <small class="text-muted">Upload product video (optional)</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product Name <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" name="product_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tags / Keywords</label>
                                        <input type="text" class="form-control" name="tags" placeholder="Comma separated">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="select" name="category">
                                            <option>Select</option>
                                            <option>Electronics</option>
                                            <option>Clothing</option>
                                            <option>Home & Garden</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Product</button>
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
                                <ul class="nav nav-tabs flex-column" id="myTab" role="tablist" style="background-color: #f8f9fa; padding: 10px;">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active btn btn-outline-primary w-100 mb-2 text-start" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true" style="border: 1px solid #007bff;">Banner</button>
                                    </li>
                                     <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false" style="border: 1px solid #007bff;">About Product</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="false" style="border: 1px solid #007bff;">Product Key Points</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false" style="border: 1px solid #007bff;">Product Gallery</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false" style="border: 1px solid #007bff;">Banner Video</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-outline-primary w-100 mb-2 text-start" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false" style="border: 1px solid #007bff;">Product Features</button>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content card-s" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5>General</h5>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="toggle1">
                                                <label class="form-check-label" for="toggle1"></label>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Video Upload</label>
                                                        <input type="file" class="form-control" name="video_upload" accept="video/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Banner Image Upload</label>
                                                        <input type="file" class="form-control" name="banner_image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Heading</label>
                                                        <input type="text" class="form-control" name="heading">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Subheading</label>
                                                        <input type="text" class="form-control" name="subheading">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Button Name</label>
                                                        <input type="text" class="form-control" name="button_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Button URL</label>
                                                        <input type="url" class="form-control" name="button_url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                       
                                    </div>
                                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Image Upload</label>
                                                        <input type="file" class="form-control" name="images[]" multiple accept="image/*">
                                                        <small class="text-muted">Upload multiple images</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Heading</label>
                                                        <input type="text" class="form-control" name="heading">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Subheading</label>
                                                        <input type="text" class="form-control" name="subheading">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" name="description" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Card 1</h5>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Image Upload</label>
                                                                <input type="file" class="form-control" name="image" accept="image/*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Title</label>
                                                                <input type="text" class="form-control" name="title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Button</label>
                                                                <input type="text" class="form-control" name="button">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">URL</label>
                                                                <input type="url" class="form-control" name="url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5>Card 2</h5>
                                                <button type="button" class="btn btn-primary btn-sm" id="add-card2"><i class="ti ti-plus"></i> Add List</button>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Heading</label>
                                                                <input type="text" class="form-control" name="heading">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control" name="description2" rows="3"></textarea>
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
                                   <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                       <div class="card mt-3">
                                           <div class="card-header">
                                               <h5>Content</h5>
                                           </div>
                                           <div class="card-body">
                                               <form>
                                                   <div class="row">
                                                       <div class="col-md-12">
                                                           <div class="mb-3">
                                                               <label class="form-label">Heading</label>
                                                               <input type="text" class="form-control" name="heading_tab2">
                                                           </div>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <div class="mb-3">
                                                               <label class="form-label">Subheading</label>
                                                               <input type="text" class="form-control" name="subheading_tab2">
                                                           </div>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <div class="mb-3">
                                                               <label class="form-label">Description</label>
                                                               <textarea class="form-control" name="description_tab2" rows="3"></textarea>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="text-end">
                                                       <button type="submit" class="btn btn-primary">Save</button>
                                                   </div>
                                               </form>
                                           </div>
                                       </div>
                                       <div class="card mt-3">
                                           <div class="card-header">
                                               <h5>Images</h5>
                                           </div>
                                           <div class="card-body">
                                               <form>
                                                   <div class="mb-3">
                                                       <label class="form-label">Upload Images</label>
                                                       <input type="file" class="form-control" name="images_tab2[]" multiple accept="image/*">
                                                   </div>
                                                   <div id="image-previews-tab2" class="row"></div>
                                                   <div class="text-end">
                                                       <button type="submit" class="btn btn-primary">Save</button>
                                                   </div>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                        <form>
                                            <div class="row">
                                               
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Banner Image</label>
                                                        <input type="file" class="form-control" name="banner_image" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Banner Video URL</label>
                                                        <input type="url" class="form-control" name="banner_video_url">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Banner Title</label>
                                                        <input type="text" class="form-control" name="banner_title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                     <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                         <div class="card">
                                             <div class="card-header">
                                                 <h5>Card 1</h5>
                                             </div>
                                             <div class="card-body">
                                                 <form>
                                                     <div class="row">
                                                         <div class="col-md-6">
                                                             <div class="mb-3">
                                                                 <label class="form-label">Page Heading</label>
                                                                 <input type="text" class="form-control" name="page_heading">
                                                             </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                             <div class="mb-3">
                                                                 <label class="form-label">Sub Heading</label>
                                                                 <input type="text" class="form-control" name="sub_heading">
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="text-end">
                                                         <button type="submit" class="btn btn-primary">Save</button>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                         <div class="card mt-3">
                                             <div class="card-header d-flex justify-content-between align-items-center">
                                                 <h5>Card 2</h5>
                                                 <button type="button" class="btn btn-primary btn-sm" id="add-card2-tab4"><i class="ti ti-plus"></i> Add List</button>
                                             </div>
                                             <div class="card-body">
                                                 <form>
                                                     <div class="row">
                                                         <div class="col-md-6">
                                                             <div class="mb-3">
                                                                 <label class="form-label">Title</label>
                                                                 <input type="text" class="form-control" name="title">
                                                             </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                             <div class="mb-3">
                                                                 <label class="form-label">Icon Image</label>
                                                                 <input type="file" class="form-control" name="icon_image" accept="image/*">
                                                             </div>
                                                         </div>
                                                         <div class="col-md-12">
                                                             <div class="mb-3">
                                                                 <label class="form-label">Description</label>
                                                                 <textarea class="form-control" name="description_tab4" rows="3"></textarea>
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
        </div>

    </div>

    <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
        <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
        <p>Designed & Developed By <a href="javascript:void(0);" class="text-primary">Technofra</a></p>
    </div>

</div>
<!-- /Page Wrapper -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create( document.querySelector( 'textarea[name=description]' ), {
        toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
    } )
    .catch( error => {
        console.error( error );
    } );

ClassicEditor
    .create( document.querySelector( 'textarea[name=description2]' ), {
        toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
    } )
    .catch( error => {
        console.error( error );
    } );

let card2Count = 2;

document.getElementById('add-card2').addEventListener('click', function() {
    const card = this.closest('.card');
    const newCardHTML = `
        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Card 2</h5>
                <button type="button" class="btn btn-danger btn-sm delete-card2"><i class="ti ti-trash"></i></button>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Heading</label>
                                <input type="text" class="form-control" name="heading">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description${card2Count}" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    `;
    const newCard = document.createRange().createContextualFragment(newCardHTML);
    card.parentNode.insertBefore(newCard, card.nextSibling);
    const newTextarea = card.parentNode.lastElementChild.querySelector('textarea');
    const deleteBtn = card.parentNode.lastElementChild.querySelector('.delete-card2');
    deleteBtn.addEventListener('click', function() {
        this.closest('.card').remove();
    });
    ClassicEditor
        .create( newTextarea, {
            toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
        } )
        .catch( error => {
            console.error( error );
        } );
    card2Count++;
});

let card2Tab4Count = 2;

document.getElementById('add-card2-tab4').addEventListener('click', function() {
    const card = this.closest('.card');
    const newCardHTML = `
        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Card 2</h5>
                <button type="button" class="btn btn-danger btn-sm delete-card2-tab4"><i class="ti ti-trash"></i></button>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Icon Image</label>
                                <input type="file" class="form-control" name="icon_image" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description_tab4_${card2Tab4Count}" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    `;
    const newCard = document.createRange().createContextualFragment(newCardHTML);
    card.parentNode.insertBefore(newCard, card.nextSibling);
    const deleteBtn = card.parentNode.lastElementChild.querySelector('.delete-card2-tab4');
    deleteBtn.addEventListener('click', function() {
        this.closest('.card').remove();
    });
    card2Tab4Count++;
});

ClassicEditor
    .create( document.querySelector( 'textarea[name=description_tab2]' ), {
        toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
    } )
    .catch( error => {
        console.error( error );
    } );

document.querySelector('input[name="images_tab2[]"]').addEventListener('change', function(e) {
    const previews = document.getElementById('image-previews-tab2');
    previews.innerHTML = '';
    Array.from(e.target.files).forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const div = document.createElement('div');
            div.className = 'col-md-3 mb-3 position-relative';
            div.innerHTML = `
                <img src="${e.target.result}" class="img-thumbnail" style="width:100%; height:200px; object-fit:contain;">
                <button type="button" class="btn btn-sm btn-secondary position-absolute top-0 end-0" onclick="moveUp(this)">↑</button>
                <button type="button" class="btn btn-sm btn-secondary position-absolute bottom-0 end-0" onclick="moveDown(this)">↓</button>
            `;
            previews.appendChild(div);
        };
        reader.readAsDataURL(file);
    });
});

function moveUp(btn) {
    const item = btn.parentElement;
    const prev = item.previousElementSibling;
    if (prev) {
        item.parentElement.insertBefore(item, prev);
    }
}

function moveDown(btn) {
    const item = btn.parentElement;
    const next = item.nextElementSibling;
    if (next) {
        item.parentElement.insertBefore(next, item);
    }
}
</script>
@endsection


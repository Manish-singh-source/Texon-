<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Log, Validator};
use App\Models\Product;
use App\Models\ProductBanner;
use App\Models\AboutProduct;
use App\Models\ProductKeyPoint;
use App\Models\ProductGallery;
use App\Models\BannerVideo;
use App\Models\ProductFeature;
use App\Models\Category;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('add-new-product', compact('categories'));
    }

    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $productBanner = $product->productBanners()->latest()->first(); // Get the latest banner
        $aboutProduct = $product->aboutProducts()->latest()->first(); // Get the latest about product
        $keyPoints = $product->productKeyPoints; // Get all key points
        $productGallery = $product->productGalleries()->latest()->first(); // Get the latest gallery
        $bannerVideo = $product->bannerVideos()->latest()->first(); // Get the latest banner video
        $productFeatures = $product->productFeatures; // Get all product features
        return view('view-product', compact('product', 'categories', 'productBanner', 'aboutProduct', 'keyPoints', 'productGallery', 'bannerVideo', 'productFeatures'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'category' => 'nullable|string',
            'sort_description' => 'nullable|string',
            'status' => 'nullable|string|in:active,inactive',
            'product_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'image_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'product_video' => 'nullable|mimes:mp4,avi,mov|max:10240',
        ], [
            'product_name.required' => 'Product name is required.',
            'product_name.string' => 'Product name must be a valid string.',
            'product_name.max' => 'Product name must not exceed 255 characters.',
            'tags.string' => 'Tags must be a valid string.',
            'category.string' => 'Category must be a valid string.',
            'status.string' => 'Status must be a valid string.',
            'status.in' => 'Status must be either active or inactive.',
            'product_thumbnail.image' => 'Product thumbnail must be a valid image file.',
            'product_thumbnail.mimes' => 'Product thumbnail must be one of the following types: jpeg, png, jpg, gif.',
            'product_thumbnail.max' => 'Product thumbnail size must not exceed 4MB.',
            'image_gallery.*.image' => 'Each gallery image must be a valid image file.',
            'image_gallery.*.mimes' => 'Each gallery image must be one of the following types: jpeg, png, jpg, gif.',
            'image_gallery.*.max' => 'Each gallery image size must not exceed 4MB.',
            'product_video.mimes' => 'Product video must be one of the following types: mp4, avi, mov.',
            'product_video.max' => 'Product video size must not exceed 10MB.',
        ]);

        $data = $request->only(['product_name', 'tags', 'category', 'sort_description', 'status']);

        // Handle thumbnail
        if ($request->hasFile('product_thumbnail')) {
            $file = $request->file('product_thumbnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/thumbnails'), $filename);
            $data['product_thumbnail'] = 'products/thumbnails/' . $filename;
        }

        // Handle gallery
        $galleryPaths = [];
        if ($request->hasFile('image_gallery')) {
            foreach ($request->file('image_gallery') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/products/gallery'), $filename);
                $galleryPaths[] = 'products/gallery/' . $filename;
            }
        }
        $data['image_gallery'] = json_encode($galleryPaths);

        // Handle video
        if ($request->hasFile('product_video')) {
            $file = $request->file('product_video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/videos'), $filename);
            $data['product_video'] = 'products/videos/' . $filename;
        }

        Product::create($data);

        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    public function storeProductBanner(Request $request, $productId)
    {
        $request->validate([
            'video_upload' => 'nullable|mimes:mp4,avi,mov|max:10240',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'delete_banner_image' => 'nullable|string',
            'delete_video_upload' => 'nullable|string',
            'heading' => 'nullable|string|max:255',
            'button_name' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
        ], [
            'video_upload.mimes' => 'Video upload must be one of the following types: mp4, avi, mov.',
            'video_upload.max' => 'Video upload size must not exceed 10MB.',
            'banner_image.image' => 'Banner image must be a valid image file.',
            'banner_image.mimes' => 'Banner image must be one of the following types: jpeg, png, jpg, gif.',
            'banner_image.max' => 'Banner image size must not exceed 4MB.',
            'delete_banner_image.string' => 'Delete banner image must be a string.',
            'delete_video_upload.string' => 'Delete video upload must be a string.',
            'heading.string' => 'Heading must be a valid string.',
            'heading.max' => 'Heading must not exceed 255 characters.',
            'button_name.string' => 'Button name must be a valid string.',
            'button_name.max' => 'Button name must not exceed 255 characters.',
            'button_url.url' => 'Button URL must be a valid URL.',
        ]);

        $data = $request->only(['heading', 'button_name', 'button_url']);

        // Get existing banner
        $existingBanner = ProductBanner::where('product_id', $productId)->first();

        // Handle delete banner image
        if ($request->has('delete_banner_image') && $existingBanner && $existingBanner->banner_image) {
            if (file_exists(public_path('storage/' . $existingBanner->banner_image))) {
                unlink(public_path('storage/' . $existingBanner->banner_image));
            }
            $data['banner_image'] = null;
        }

        // Handle delete video upload
        if ($request->has('delete_video_upload') && $existingBanner && $existingBanner->video_upload) {
            if (file_exists(public_path('storage/' . $existingBanner->video_upload))) {
                unlink(public_path('storage/' . $existingBanner->video_upload));
            }
            $data['video_upload'] = null;
        }

        // Handle video upload
        if ($request->hasFile('video_upload')) {
            // Delete old video if exists
            if ($existingBanner && $existingBanner->video_upload) {
                if (file_exists(public_path('storage/' . $existingBanner->video_upload))) {
                    unlink(public_path('storage/' . $existingBanner->video_upload));
                }
            }
            $file = $request->file('video_upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/banners/videos'), $filename);
            $data['video_upload'] = 'products/banners/videos/' . $filename;
        }

        // Handle banner image
        if ($request->hasFile('banner_image')) {
            // Delete old image if exists
            if ($existingBanner && $existingBanner->banner_image) {
                if (file_exists(public_path('storage/' . $existingBanner->banner_image))) {
                    unlink(public_path('storage/' . $existingBanner->banner_image));
                }
            }
            $file = $request->file('banner_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/banners/images'), $filename);
            $data['banner_image'] = 'products/banners/images/' . $filename;
        }

        // Update or create the banner for this product
        ProductBanner::updateOrCreate(
            ['product_id' => $productId],
            $data
        );

        return redirect()->back()->with('success', 'Product banner saved successfully!');
    }

    public function storeAboutProduct(Request $request, $productId)
    {
        $request->validate([
            'media.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,mp4,avi,mov|max:10240',
            'delete_media' => 'nullable|array',
            'delete_media.*' => 'nullable|string',
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ], [
            'media.*.file' => 'Each media file must be a valid file.',
            'media.*.mimes' => 'Each media file must be one of the following types: jpeg, png, jpg, gif, webp, mp4, avi, mov.',
            'media.*.max' => 'Each media file size must not exceed 10MB.',
            'delete_media.array' => 'Delete media must be an array.',
            'delete_media.*.string' => 'Each delete media must be a string.',
            'heading.string' => 'Heading must be a valid string.',
            'heading.max' => 'Heading must not exceed 255 characters.',
            'subheading.string' => 'Subheading must be a valid string.',
            'subheading.max' => 'Subheading must not exceed 255 characters.',
            'description.string' => 'Description must be a valid string.',
        ]);

        $data = $request->only(['heading', 'subheading', 'description']);

        // Get existing about product
        $existingAbout = AboutProduct::where('product_id', $productId)->first();
        $existingMedia = $existingAbout ? json_decode($existingAbout->images, true) : [];

        // Remove deleted media
        if ($request->has('delete_media') && is_array($request->delete_media)) {
            $existingMedia = array_diff($existingMedia, $request->delete_media);
        }

        // Handle multiple media uploads
        $mediaPaths = [];
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/products/about/media'), $filename);
                $mediaPaths[] = 'products/about/media/' . $filename;
            }
        }

        // Combine existing (minus deleted) and new media
        $allMedia = array_merge($existingMedia, $mediaPaths);
        $data['images'] = json_encode($allMedia);

        // Update or create the about product for this product
        AboutProduct::updateOrCreate(
            ['product_id' => $productId],
            $data
        );

        return redirect()->back()->with('success', 'About product saved successfully!');
    }

    public function storeProductKeyPoints(Request $request, $productId)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'title' => 'nullable|string|max:255',
            'button' => 'nullable|string|max:255',
            'url' => 'nullable|url',
            'heading' => 'nullable|array',
            'heading.*' => 'nullable|string|max:255',
            'description' => 'nullable|array',
            'description.*' => 'nullable|string',
        ], [
            'image.image' => 'Image must be a valid image file.',
            'image.mimes' => 'Image must be one of the following types: jpeg, png, jpg, gif.',
            'image.max' => 'Image size must not exceed 4MB.',
            'title.string' => 'Title must be a valid string.',
            'title.max' => 'Title must not exceed 255 characters.',
            'button.string' => 'Button must be a valid string.',
            'button.max' => 'Button must not exceed 255 characters.',
            'url.url' => 'URL must be a valid URL.',
            'heading.array' => 'Heading must be an array.',
            'heading.*.string' => 'Each heading must be a valid string.',
            'heading.*.max' => 'Each heading must not exceed 255 characters.',
            'description.array' => 'Description must be an array.',
            'description.*.string' => 'Each description must be a valid string.',
        ]);

        // Delete existing key points for this product
        ProductKeyPoint::where('product_id', $productId)->delete();

        // Handle card1
        $card1Data = [
            'product_id' => $productId,
            'type' => 'card1',
            'title' => $request->title,
            'button' => $request->button,
            'url' => $request->url,
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/keypoints/images'), $filename);
            $card1Data['image'] = 'products/keypoints/images/' . $filename;
        }

        if ($request->title || $request->button || $request->url || $request->hasFile('image')) {
            ProductKeyPoint::create($card1Data);
        }

        // Handle card2
        if ($request->heading && is_array($request->heading)) {
            foreach ($request->heading as $index => $heading) {
                $description = $request->description[$index] ?? '';
                if ($heading || $description) {
                    ProductKeyPoint::create([
                        'product_id' => $productId,
                        'type' => 'card2',
                        'heading' => $heading,
                        'description' => $description,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Product key points saved successfully!');
    }

    public function storeProductGallery(Request $request, $productId)
    {
        $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ], [
            'heading.string' => 'Heading must be a valid string.',
            'heading.max' => 'Heading must not exceed 255 characters.',
            'subheading.string' => 'Subheading must be a valid string.',
            'subheading.max' => 'Subheading must not exceed 255 characters.',
            'description.string' => 'Description must be a valid string.',
            'images.*.image' => 'Each image must be a valid image file.',
            'images.*.mimes' => 'Each image must be one of the following types: jpeg, png, jpg, gif.',
            'images.*.max' => 'Each image size must not exceed 4MB.',
        ]);

        $data = $request->only(['heading', 'subheading', 'description']);

        // Handle multiple image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/products/gallery/images'), $filename);
                $imagePaths[] = 'products/gallery/images/' . $filename;
            }
        }

        // Get existing gallery to merge images
        $existingGallery = ProductGallery::where('product_id', $productId)->first();
        $existingImages = $existingGallery ? json_decode($existingGallery->images, true) : [];

        // Remove deleted images
        if ($request->has('delete_images') && is_array($request->delete_images)) {
            $existingImages = array_diff($existingImages, $request->delete_images);
        }

        // Combine existing and new images
        $allImages = array_merge($existingImages, $imagePaths);

        // If order is provided, reorder the images
        if ($request->has('image_order') && !empty($request->image_order)) {
            $order = explode(',', $request->image_order);
            $orderedImages = [];
            foreach ($order as $index) {
                if (isset($allImages[$index])) {
                    $orderedImages[] = $allImages[$index];
                }
            }
            $allImages = $orderedImages;
        }

        $data['images'] = json_encode($allImages);

        // Update or create the product gallery for this product
        ProductGallery::updateOrCreate(
            ['product_id' => $productId],
            $data
        );

        return redirect()->back()->with('success', 'Product gallery saved successfully!');
    }

    public function storeBannerVideo(Request $request, $productId)
    {
        $request->validate([
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'banner_video_url' => [
                'nullable',
                'url',
                'regex:/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\//'
            ],
            'banner_title' => 'nullable|string|max:255',
        ], [
            'banner_image.image' => 'Banner image must be a valid image file.',
            'banner_image.mimes' => 'Banner image must be one of the following types: jpeg, png, jpg, gif.',
            'banner_image.max' => 'Banner image size must not exceed 4MB.',
            'banner_video_url.url' => 'Banner video URL must be a valid URL.',
            'banner_video_url.regex' => 'Banner video URL must be a valid YouTube URL.',
            'banner_title.string' => 'Banner title must be a valid string.',
            'banner_title.max' => 'Banner title must not exceed 255 characters.',
        ]);


        $data = $request->only(['banner_video_url', 'banner_title']);

        // Handle banner image
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/banner-video/images'), $filename);
            $data['banner_image'] = 'products/banner-video/images/' . $filename;
        }

        // Update or create the banner video for this product
        BannerVideo::updateOrCreate(
            ['product_id' => $productId],
            $data
        );

        return redirect()->back()->with('success', 'Banner video saved successfully!');
    }

    public function storeProductFeatures(Request $request, $productId)
    {
        $request->validate([
            'page_heading' => 'nullable|string|max:255',
            'sub_heading' => 'nullable|string|max:255',
            'title' => 'nullable|array',
            'title.*' => 'nullable|string|max:255',
            'icon_image' => 'nullable|array',
            'icon_image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'description' => 'nullable|array',
            'description.*' => 'nullable|string',
        ], [
            'page_heading.string' => 'Page heading must be a valid string.',
            'page_heading.max' => 'Page heading must not exceed 255 characters.',
            'sub_heading.string' => 'Sub heading must be a valid string.',
            'sub_heading.max' => 'Sub heading must not exceed 255 characters.',
            'title.array' => 'Title must be an array.',
            'title.*.string' => 'Each title must be a valid string.',
            'title.*.max' => 'Each title must not exceed 255 characters.',
            'icon_image.array' => 'Icon image must be an array.',
            'icon_image.*.image' => 'Each icon image must be a valid image file.',
            'icon_image.*.mimes' => 'Each icon image must be one of the following types: jpeg, png, jpg, gif.',
            'icon_image.*.max' => 'Each icon image size must not exceed 4MB.',
            'description.array' => 'Description must be an array.',
            'description.*.string' => 'Each description must be a valid string.',
        ]);

        // Delete existing features for this product
        ProductFeature::where('product_id', $productId)->delete();

        // Handle card1
        $card1Data = [
            'product_id' => $productId,
            'type' => 'card1',
            'page_heading' => $request->page_heading,
            'sub_heading' => $request->sub_heading,
        ];

        if ($request->page_heading || $request->sub_heading) {
            ProductFeature::create($card1Data);
        }

        // Handle card2
        if ($request->title && is_array($request->title)) {
            foreach ($request->title as $index => $title) {
                $description = $request->description[$index] ?? '';
                $iconImagePath = null;

                if (isset($request->file('icon_image')[$index])) {
                    $file = $request->file('icon_image')[$index];
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('storage/products/features/icons'), $filename);
                    $iconImagePath = 'products/features/icons/' . $filename;
                }

                if ($title || $description || $iconImagePath) {
                    ProductFeature::create([
                        'product_id' => $productId,
                        'type' => 'card2',
                        'title' => $title,
                        'icon_image' => $iconImagePath,
                        'description' => $description,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Product features saved successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'category' => 'nullable|string',
            'sort_description' => 'nullable|string',
            'status' => 'nullable|string|in:active,inactive',
            'product_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'image_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'product_video' => 'nullable|mimes:mp4,avi,mov|max:10240',
        ], [
            'product_name.required' => 'Product name is required.',
            'product_name.string' => 'Product name must be a valid string.',
            'product_name.max' => 'Product name must not exceed 255 characters.',
            'tags.string' => 'Tags must be a valid string.',
            'category.string' => 'Category must be a valid string.',
            'status.string' => 'Status must be a valid string.',
            'status.in' => 'Status must be either active or inactive.',
            'product_thumbnail.image' => 'Product thumbnail must be a valid image file.',
            'product_thumbnail.mimes' => 'Product thumbnail must be one of the following types: jpeg, png, jpg, gif.',
            'product_thumbnail.max' => 'Product thumbnail size must not exceed 4MB.',
            'image_gallery.*.image' => 'Each gallery image must be a valid image file.',
            'image_gallery.*.mimes' => 'Each gallery image must be one of the following types: jpeg, png, jpg, gif.',
            'image_gallery.*.max' => 'Each gallery image size must not exceed 4MB.',
            'product_video.mimes' => 'Product video must be one of the following types: mp4, avi, mov.',
            'product_video.max' => 'Product video size must not exceed 10MB.',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->only(['product_name', 'tags', 'category', 'sort_description', 'status']);

        // Handle thumbnail
        if ($request->hasFile('product_thumbnail')) {
            $file = $request->file('product_thumbnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/thumbnails'), $filename);
            $data['product_thumbnail'] = 'products/thumbnails/' . $filename;
        }

        // Handle gallery
        $galleryPaths = [];
        if ($request->hasFile('image_gallery')) {
            foreach ($request->file('image_gallery') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/products/gallery'), $filename);
                $galleryPaths[] = 'products/gallery/' . $filename;
            }
        }
        if (!empty($galleryPaths)) {
            $data['image_gallery'] = json_encode($galleryPaths);
        }

        // Handle video
        if ($request->hasFile('product_video')) {
            $file = $request->file('product_video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/products/videos'), $filename);
            $data['product_video'] = 'products/videos/' . $filename;
        }

        $product->update($data);

        return redirect()->back()->with('success', 'Product updated successfully!');
    }

    public function toggleStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = $product->status == 'active' ? 'inactive' : 'active';
        $product->save();

        return response()->json(['status' => $product->status]);
    }

    public function toggleSection(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'section' => 'required|in:banner,about_product,key_points,gallery,banner_video,features',
            'active' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Invalid data'], 422);
        }

        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);
            $field = $request->section . '_active';
            $product->$field = $request->active;
            $product->save();

            DB::commit();
            // activity()->performedOn($product)->causedBy(Auth::user())->log('Section toggle: ' . $request->section);

            return response()->json(['success' => true, 'active' => $product->$field]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete related data
        $product->productBanners()->delete();
        $product->aboutProducts()->delete();
        $product->productKeyPoints()->delete();
        $product->productGalleries()->delete();
        $product->bannerVideos()->delete();
        $product->productFeatures()->delete();

        // Delete the product
        $product->delete();

        return redirect()->route('products')->with('success', 'Product deleted successfully!');
    }

    public function deleteSelected(Request $request)
    {
        $ids = is_array($request->ids) ? $request->ids : explode(',', $request->ids);
        $products = Product::whereIn('id', $ids)->get();
        foreach ($products as $product) {
            // Delete related data
            $product->productBanners()->delete();
            $product->aboutProducts()->delete();
            $product->productKeyPoints()->delete();
            $product->productGalleries()->delete();
            $product->bannerVideos()->delete();
            $product->productFeatures()->delete();
        }
        Product::destroy($ids);
        return redirect()->back()->with('success', 'Selected products deleted successfully.');
    }
}

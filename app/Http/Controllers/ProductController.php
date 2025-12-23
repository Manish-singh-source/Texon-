<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductBanner;
use App\Models\AboutProduct;
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
        return view('view-product', compact('product', 'categories', 'productBanner', 'aboutProduct'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'category' => 'nullable|string',
            'product_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'image_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'product_video' => 'nullable|mimes:mp4,avi,mov|max:10240',
        ]);

        $data = $request->only(['product_name', 'tags', 'category']);

        // Handle thumbnail
        if ($request->hasFile('product_thumbnail')) {
            $data['product_thumbnail'] = $request->file('product_thumbnail')->store('products/thumbnails', 'public');
        }

        // Handle gallery
        $galleryPaths = [];
        if ($request->hasFile('image_gallery')) {
            foreach ($request->file('image_gallery') as $file) {
                $galleryPaths[] = $file->store('products/gallery', 'public');
            }
        }
        $data['image_gallery'] = json_encode($galleryPaths);

        // Handle video
        if ($request->hasFile('product_video')) {
            $data['product_video'] = $request->file('product_video')->store('products/videos', 'public');
        }

        Product::create($data);

        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    public function storeProductBanner(Request $request, $productId)
    {
        $request->validate([
            'video_upload' => 'nullable|mimes:mp4,avi,mov|max:10240',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'button_name' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
        ]);

        $data = $request->only(['heading', 'subheading', 'button_name', 'button_url']);

        // Handle video upload
        if ($request->hasFile('video_upload')) {
            $data['video_upload'] = $request->file('video_upload')->store('products/banners/videos', 'public');
        }

        // Handle banner image
        if ($request->hasFile('banner_image')) {
            $data['banner_image'] = $request->file('banner_image')->store('products/banners/images', 'public');
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
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['heading', 'subheading', 'description']);

        // Handle multiple image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imagePaths[] = $file->store('products/about/images', 'public');
            }
        }
        $data['images'] = json_encode($imagePaths);

        // Update or create the about product for this product
        AboutProduct::updateOrCreate(
            ['product_id' => $productId],
            $data
        );

        return redirect()->back()->with('success', 'About product saved successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'category' => 'nullable|string',
            'product_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'image_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'product_video' => 'nullable|mimes:mp4,avi,mov|max:10240',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->only(['product_name', 'tags', 'category']);

        // Handle thumbnail
        if ($request->hasFile('product_thumbnail')) {
            $data['product_thumbnail'] = $request->file('product_thumbnail')->store('products/thumbnails', 'public');
        }

        // Handle gallery
        $galleryPaths = [];
        if ($request->hasFile('image_gallery')) {
            foreach ($request->file('image_gallery') as $file) {
                $galleryPaths[] = $file->store('products/gallery', 'public');
            }
        }
        if (!empty($galleryPaths)) {
            $data['image_gallery'] = json_encode($galleryPaths);
        }

        // Handle video
        if ($request->hasFile('product_video')) {
            $data['product_video'] = $request->file('product_video')->store('products/videos', 'public');
        }

        $product->update($data);

        return redirect()->back()->with('success', 'Product updated successfully!');
    }
}

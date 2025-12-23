<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        return view('view-product', compact('product', 'categories'));
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

        return redirect()->back()->with('success', 'Product added successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedProduct;
use Illuminate\Support\Facades\Storage;

class FeaturedProductController extends Controller
{
    public function index()
    {
        $featuredProducts = FeaturedProduct::all();
        return view('featured-products', compact('featuredProducts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'featured_product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
        ]);

        $imagePath = null;
        if ($request->hasFile('featured_product_image')) {
            $file = $request->file('featured_product_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/featured-products'), $filename);
            $imagePath = 'featured-products/' . $filename;
        }

        FeaturedProduct::create([
            'heading' => $request->heading,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('featured-products')->with('success', 'Featured Product added successfully.');
    }

    public function edit($id)
    {
        $featuredProduct = FeaturedProduct::findOrFail($id);
        return view('edit-featured-products', compact('featuredProduct'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'featured_product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
        ]);

        $featuredProduct = FeaturedProduct::findOrFail($id);

        $imagePath = $featuredProduct->image;
        if ($request->hasFile('featured_product_image')) {
            // Delete old image if exists
            if ($featuredProduct->image) {
                unlink(public_path('storage/' . $featuredProduct->image));
            }
            $file = $request->file('featured_product_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/featured-products'), $filename);
            $imagePath = 'featured-products/' . $filename;
        }

        $featuredProduct->update([
            'heading' => $request->heading,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('featured-products')->with('success', 'Featured Product updated successfully.');
    }

    public function destroy($id)
    {
        $featuredProduct = FeaturedProduct::findOrFail($id);

        // Delete image if exists
        if ($featuredProduct->image && file_exists(public_path('storage/' . $featuredProduct->image))) {
            unlink(public_path('storage/' . $featuredProduct->image));
        }

        $featuredProduct->delete();

        return redirect()->route('featured-products')->with('success', 'Featured Product deleted successfully.');
    }

    public function deleteSelected(Request $request)
    {
        $ids = is_array($request->ids) ? $request->ids : explode(',', $request->ids);
        $featuredProducts = FeaturedProduct::whereIn('id', $ids)->get();
        foreach ($featuredProducts as $product) {
            if ($product->image && file_exists(public_path('storage/' . $product->image))) {
                unlink(public_path('storage/' . $product->image));
            }
        }
        FeaturedProduct::destroy($ids);
        return redirect()->back()->with('success', 'Selected featured products deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
        ]);

        $imagePath = null;
        if ($request->hasFile('brand_image')) {
            $file = $request->file('brand_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/brands'), $filename);
            $imagePath = 'brands/' . $filename;
        }

        Brand::create([
            'name' => $request->name,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('brands')->with('success', 'Brand added successfully.');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('edit-brands', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
        ]);

        $brand = Brand::findOrFail($id);

        $imagePath = $brand->image;
        if ($request->hasFile('brand_image')) {
            // Delete old image if exists
            if ($brand->image) {
                unlink(public_path('storage/' . $brand->image));
            }
            $file = $request->file('brand_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/brands'), $filename);
            $imagePath = 'brands/' . $filename;
        }

        $brand->update([
            'name' => $request->name,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('brands')->with('success', 'Brand updated successfully.');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        // Delete image if exists
        if ($brand->image) {
            if (file_exists(public_path('storage/' . $brand->image))) {
                unlink(public_path('storage/' . $brand->image));
            }
        }

        $brand->delete();

        return redirect()->route('brands')->with('success', 'Brand deleted successfully.');
    }

    public function deleteSelected(Request $request)
    {
        $ids = is_array($request->ids) ? $request->ids : explode(',', $request->ids);
        $brands = Brand::whereIn('id', $ids)->get();
        foreach ($brands as $brand) {
            if ($brand->image && file_exists(public_path('storage/' . $brand->image))) {
                unlink(public_path('storage/' . $brand->image));
            }
        }
        Brand::destroy($ids);
        return redirect()->back()->with('success', 'Selected brands deleted successfully.');
    }
}

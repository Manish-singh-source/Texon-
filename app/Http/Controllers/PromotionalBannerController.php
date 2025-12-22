<?php

namespace App\Http\Controllers;

use App\Models\PromotionalBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionalBannerController extends Controller
{
    public function index()
    {
        $promotionalBanners = PromotionalBanner::all();
        return view('promotional-banners', compact('promotionalBanners'));
    }

    public function create()
    {
        return view('add-promotional-banner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:4096', // 4MB
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->only(['title', 'start_date', 'end_date', 'description', 'status']);

        if ($request->hasFile('banner_image')) {
            $data['banner_image'] = $request->file('banner_image')->store('promotional_banners/images', 'public');
        }

        PromotionalBanner::create($data);

        return redirect()->route('promotional-banners')->with('success', 'Promotional Banner created successfully.');
    }

    public function destroy($id)
    {
        $banner = PromotionalBanner::findOrFail($id);

        // Delete associated file if any
        if ($banner->banner_image) {
            Storage::disk('public')->delete($banner->banner_image);
        }

        $banner->delete();

        return redirect()->route('promotional-banners')->with('success', 'Promotional Banner deleted successfully.');
    }

    public function edit($id)
    {
        $banner = PromotionalBanner::findOrFail($id);
        return view('edit-promotional-banner', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = PromotionalBanner::findOrFail($id);

        $request->validate([
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:4096',
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->only(['title', 'start_date', 'end_date', 'description', 'status']);

        if ($request->hasFile('banner_image')) {
            // Delete old image if exists
            if ($banner->banner_image) {
                Storage::disk('public')->delete($banner->banner_image);
            }
            $data['banner_image'] = $request->file('banner_image')->store('promotional_banners/images', 'public');
        }

        $banner->update($data);

        return redirect()->route('promotional-banners')->with('success', 'Promotional Banner updated successfully.');
    }
}

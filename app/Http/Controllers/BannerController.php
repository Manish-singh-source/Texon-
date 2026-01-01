<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banners', compact('banners'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'button_name' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'status' => 'required|in:active,inactive',
            'video_upload' => 'nullable|file|mimes:mp4,avi,mov', // 10MB
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif', // 4MB
        ]);
        
        $data = $request->only(['heading', 'subheading', 'button_name', 'button_url', 'status']);

        if ($request->hasFile('video_upload')) {
            $file = $request->file('video_upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/banners/videos'), $filename);
            $data['video_upload'] = 'banners/videos/' . $filename;
        }

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/banners/images'), $filename);
            $data['banner_image'] = 'banners/images/' . $filename;
        }

        Banner::create($data);

        return redirect()->route('banners')->with('success', 'Banner created successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Delete associated files if any
        if ($banner->banner_image) {
            if (file_exists(public_path('storage/' . $banner->banner_image))) {
                unlink(public_path('storage/' . $banner->banner_image));
            }
        }
        if ($banner->video_upload) {
            if (file_exists(public_path('storage/' . $banner->video_upload))) {
                unlink(public_path('storage/' . $banner->video_upload));
            }
        }

        $banner->delete();

        return redirect()->route('banners')->with('success', 'Banner deleted successfully.');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('edit-banner', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'button_name' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'status' => 'required|in:active,inactive',
            'video_upload' => 'nullable|file|mimes:mp4,avi,mov',
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->only(['heading', 'subheading', 'button_name', 'button_url', 'status']);

        if ($request->hasFile('video_upload')) {
            $file = $request->file('video_upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/banners/videos'), $filename);
            $newVideoPath = 'banners/videos/' . $filename;
            // Delete old video if exists
            if ($banner->video_upload) {
                unlink(public_path('storage/' . $banner->video_upload));
            }
            $data['video_upload'] = $newVideoPath;
        }

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/banners/images'), $filename);
            $newImagePath = 'banners/images/' . $filename;
            // Delete old image if exists
            if ($banner->banner_image) {
                unlink(public_path('storage/' . $banner->banner_image));
            }
            $data['banner_image'] = $newImagePath;
        }

        $banner->update($data);

        return redirect()->route('banners')->with('success', 'Banner updated successfully.');
    }
}

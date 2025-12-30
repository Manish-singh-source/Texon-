<?php

namespace App\Http\Controllers;

use App\Models\PromotionalBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Log, Validator, Storage};

class PromotionalBannerController extends Controller
{
    public function index()
    {
        $promotionalBanners = PromotionalBanner::paginate(15);
        return view('promotional-banners', compact('promotionalBanners'));
    }

    public function create()
    {
        return view('add-promotional-banner');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:5120',
            'title' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $data = $request->only(['title', 'start_date', 'end_date', 'description', 'status']);

            if ($request->hasFile('banner_image')) {
                $data['banner_image'] = $request->file('banner_image')->store('promotional_banners/images', 'public');
            }

            $banner = PromotionalBanner::create($data);

            DB::commit();

            // activity()
            //     ->performedOn($banner)
            //     ->causedBy(Auth::user())
            //     ->log('Promotional Banner created');

            return redirect()->route('promotional-banners')->with('success', 'Promotional Banner created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Promotional Banner creation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $banner = PromotionalBanner::findOrFail($id);

            // Delete associated file if any
            if ($banner->banner_image) {
                Storage::disk('public')->delete($banner->banner_image);
            }

            $banner->delete();

            DB::commit();

            // activity()
            //     ->performedOn($banner)
            //     ->causedBy(Auth::user())
            //     ->log('Promotional Banner deleted');

            return redirect()->route('promotional-banners')->with('success', 'Promotional Banner deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Promotional Banner deletion failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $banner = PromotionalBanner::findOrFail($id);
        return view('edit-promotional-banner', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:5120',
            'title' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $banner = PromotionalBanner::findOrFail($id);

            $data = $request->only(['title', 'start_date', 'end_date', 'description', 'status']);

            if ($request->hasFile('banner_image')) {
                // Delete old image if exists
                if ($banner->banner_image) {
                    Storage::disk('public')->delete($banner->banner_image);
                }
                $data['banner_image'] = $request->file('banner_image')->store('promotional_banners/images', 'public');
            }

            $banner->update($data);

            DB::commit();

            // activity()
            //     ->performedOn($banner)
            //     ->causedBy(Auth::user())
            //     ->log('Promotional Banner updated');

            return redirect()->route('promotional-banners')->with('success', 'Promotional Banner updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Promotional Banner update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }
}

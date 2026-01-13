<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;
use Illuminate\Support\Facades\{DB, Log, Validator, Storage};

class PresenceController extends Controller
{
    public function index()
    {
        $presences = Presence::all();
        return view('presence', compact('presences'));
    }

    public function create()
    {
        return view('add-presence');
    }

    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_date' => 'nullable|date',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $data = $request->only(['title', 'author', 'tags', 'status', 'published_date', 'content']);

            // Handle featured image upload
            if ($request->hasFile('featured_image')) {
                $file = $request->file('featured_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/presences'), $filename);
                $data['featured_image'] = 'presences/' . $filename;
            }

            // Create presence
            $presence = Presence::create($data);

            DB::commit();

            return redirect()->route('presence')->with('success', 'Presence created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Presence creation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error creating presence: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $presence = Presence::findOrFail($id);
        return view('edit-presence', compact('presence'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_date' => 'nullable|date',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $presence = Presence::findOrFail($id);
            $data = $request->only(['title', 'author', 'tags', 'status', 'published_date', 'content']);

            // Handle featured image upload
            if ($request->hasFile('featured_image')) {
                // Delete old image if exists
                if ($presence->featured_image) {
                    unlink(public_path('storage/' . $presence->featured_image));
                }

                $file = $request->file('featured_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/presences'), $filename);
                $data['featured_image'] = 'presences/' . $filename;
            }

            // Update presence
            $presence->update($data);

            DB::commit();

            return redirect()->route('presence')->with('success', 'Presence updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Presence update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error updating presence: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        $presence = Presence::findOrFail($id);

        // Delete featured image if exists
        if ($presence->featured_image) {
            if (file_exists(public_path('storage/' . $presence->featured_image))) {
                unlink(public_path('storage/' . $presence->featured_image));
            }
        }

        $presence->delete();

        return redirect()->route('presence')->with('success', 'Presence deleted successfully.');
    }

    public function deleteSelected(Request $request)
    {
        $ids = is_array($request->ids) ? $request->ids : explode(',', $request->ids);
        $presences = Presence::whereIn('id', $ids)->get();
        foreach ($presences as $presence) {
            if ($presence->featured_image && file_exists(public_path('storage/' . $presence->featured_image))) {
                unlink(public_path('storage/' . $presence->featured_image));
            }
        }
        Presence::destroy($ids);
        return redirect()->back()->with('success', 'Selected presences deleted successfully.');
    }
}

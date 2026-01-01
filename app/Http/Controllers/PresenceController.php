<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;
use Illuminate\Support\Facades\Storage;

class PresenceController extends Controller
{
    public function index()
    {
        $presences = Presence::all();
        return view('presence', compact('presences'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'presence_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
        ]);

        $imagePath = null;
        if ($request->hasFile('presence_image')) {
            $file = $request->file('presence_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/presences'), $filename);
            $imagePath = 'presences/' . $filename;
        }

        Presence::create([
            'name' => $request->name,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('presence')->with('success', 'Presence added successfully.');
    }

    public function edit($id)
    {
        $presence = Presence::findOrFail($id);
        return view('edit-presence', compact('presence'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'presence_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
        ]);

        $presence = Presence::findOrFail($id);

        $imagePath = $presence->image;
        if ($request->hasFile('presence_image')) {
            // Delete old image if exists
            if ($presence->image) {
                Storage::disk('public')->delete($presence->image);
            }
            $file = $request->file('presence_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/presences'), $filename);
            $imagePath = 'presences/' . $filename;
        }

        $presence->update([
            'name' => $request->name,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('presence')->with('success', 'Presence updated successfully.');
    }

    public function destroy($id)
    {
        $presence = Presence::findOrFail($id);

        // Delete image if exists
        if ($presence->image) {
            Storage::disk('public')->delete($presence->image);
        }

        $presence->delete();

        return redirect()->route('presence')->with('success', 'Presence deleted successfully.');
    }

    public function deleteSelected(Request $request)
    {
        $ids = is_array($request->ids) ? $request->ids : explode(',', $request->ids);
        $presences = Presence::whereIn('id', $ids)->get();
        foreach ($presences as $presence) {
            if ($presence->image && file_exists(public_path('storage/' . $presence->image))) {
                unlink(public_path('storage/' . $presence->image));
            }
        }
        Presence::destroy($ids);
        return redirect()->back()->with('success', 'Selected presences deleted successfully.');
    }
}

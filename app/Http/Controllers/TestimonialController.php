<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials', compact('testimonials'));
    }

    public function create()
    {
        return view('add-testimonial');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
            'status' => 'required|in:active,inactive',
            'testimonial_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $imagePath = null;
        if ($request->hasFile('testimonial_image')) {
            $file = $request->file('testimonial_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/testimonials'), $filename);
            $imagePath = 'testimonials/' . $filename;
        }

        Testimonial::create([
            'name' => $request->name,
            'position' => $request->position,
            'rating' => $request->rating,
            'message' => $request->message,
            'status' => $request->status,
            'testimonial_image' => $imagePath,
        ]);

        return redirect()->route('testimonials')->with('success', 'Testimonial added successfully.');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('edit-testimonial', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
            'status' => 'required|in:active,inactive',
            'testimonial_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data = $request->only(['name', 'position', 'rating', 'message', 'status']);

        if ($request->hasFile('testimonial_image')) {
            $file = $request->file('testimonial_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/testimonials'), $filename);
            $newImagePath = 'testimonials/' . $filename;
            // Delete old image if exists
            if ($testimonial->testimonial_image && file_exists(public_path('storage/' . $testimonial->testimonial_image))) {
                unlink(public_path('storage/' . $testimonial->testimonial_image));
            }
            $data['testimonial_image'] = $newImagePath;
        } elseif ($request->input('remove_image') == '1') {
            // Remove the image
            if ($testimonial->testimonial_image && file_exists(public_path('storage/' . $testimonial->testimonial_image))) {
                unlink(public_path('storage/' . $testimonial->testimonial_image));
            }
            $data['testimonial_image'] = null;
        }

        $testimonial->update($data);

        return redirect()->route('testimonials')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Delete the image file if it exists
        if ($testimonial->testimonial_image && file_exists(public_path('storage/' . $testimonial->testimonial_image))) {
            unlink(public_path('storage/' . $testimonial->testimonial_image));
        }

        $testimonial->delete();

        return redirect()->route('testimonials')->with('success', 'Testimonial deleted successfully.');
    }
}

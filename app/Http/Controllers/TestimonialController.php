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
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
            'status' => 'required|in:active,inactive',
            'testimonial_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $imagePath = null;
        if ($request->hasFile('testimonial_image')) {
            $imagePath = $request->file('testimonial_image')->store('testimonials', 'public');
        }

        Testimonial::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'message' => $request->message,
            'status' => $request->status,
            'testimonial_image' => $imagePath,
        ]);

        return redirect()->route('testimonials')->with('success', 'Testimonial added successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Delete the image file if it exists
        if ($testimonial->testimonial_image && Storage::disk('public')->exists($testimonial->testimonial_image)) {
            Storage::disk('public')->delete($testimonial->testimonial_image);
        }

        $testimonial->delete();

        return redirect()->route('testimonials')->with('success', 'Testimonial deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Log, Validator, Storage};

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('add-blog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_date' => 'nullable|date',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $data = $request->only(['title', 'author', 'category', 'tags', 'status', 'published_date', 'content']);

            // Handle featured image upload
            if ($request->hasFile('featured_image')) {
                $file = $request->file('featured_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/blogs'), $filename);
                $data['featured_image'] = 'blogs/' . $filename;
            }

            // Create blog
            $blog = Blog::create($data);

            DB::commit();

            return redirect()->route('blog')->with('success', 'Blog created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Blog creation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error creating blog: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('view-blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        return view('edit-blog', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_date' => 'nullable|date',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $blog = Blog::findOrFail($id);
            $data = $request->only(['title', 'author', 'category', 'tags', 'status', 'published_date', 'content']);

            // Handle featured image upload
            if ($request->hasFile('featured_image')) {
                // Delete old image if exists
                if ($blog->featured_image) {
                    unlink(public_path('storage/' . $blog->featured_image));
                }

                $file = $request->file('featured_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('storage/blogs'), $filename);
                $data['featured_image'] = 'blogs/' . $filename;
            }

            // Update blog
            $blog->update($data);

            DB::commit();

            return redirect()->route('blog')->with('success', 'Blog updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Blog update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error updating blog: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        // Delete featured image if exists
        if ($blog->featured_image) {
            unlink(public_path('storage/' . $blog->featured_image));
        }

        $blog->delete();

        return redirect()->route('blog')->with('success', 'Blog deleted successfully.');
    }
}

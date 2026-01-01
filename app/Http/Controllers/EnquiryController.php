<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Product;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::with('product')->get();
        $totalEnquiries = Enquiry::count();
        $pending = Enquiry::where('status', 'pending')->count();
        $responded = Enquiry::where('status', 'responded')->count();
        $closed = Enquiry::where('status', 'closed')->count();
        return view('enquiries', compact('enquiries', 'totalEnquiries', 'pending', 'responded', 'closed'));
    }

    public function show($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $product = Product::with(['aboutProducts'])->findOrFail($enquiry->product_id);
        return view('view-enquiry', compact('enquiry', 'product'));
    }

    public function edit($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $product = Product::with(['aboutProducts'])->findOrFail($enquiry->product_id);
        return view('edit-enquiry', compact('enquiry', 'product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'user_phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'status' => 'required|in:pending,responded,closed',
            'message' => 'nullable|string',
        ]);

        $enquiry = Enquiry::findOrFail($id);
        $enquiry->update($request->only(['user_name', 'user_email', 'user_phone', 'company', 'status', 'message']));

        return redirect()->route('view-enquiry', $id)->with('success', 'Enquiry updated successfully.');
    }

    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return redirect()->route('enquiries')->with('success', 'Enquiry deleted successfully.');
    }

    public function deleteSelected(Request $request)
    {
        $ids = is_array($request->ids) ? $request->ids : explode(',', $request->ids);
        Enquiry::destroy($ids);
        return redirect()->back()->with('success', 'Selected enquiries deleted successfully.');
    }
}

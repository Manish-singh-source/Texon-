<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Product;
use Illuminate\Support\Facades\{Auth, DB, Log, Validator};

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
        DB::beginTransaction();
        try {
            $enquiry = Enquiry::findOrFail($id);
            $product = Product::with(['aboutProducts'])->findOrFail($enquiry->product_id);

            // Mark enquiry as read when viewed
            if (!$enquiry->is_read) {
                $enquiry->is_read = true;
                $enquiry->save();

                // activity()
                //     ->performedOn($enquiry)
                //     ->causedBy(Auth::user())
                //     ->log('Enquiry marked as read');
            }

            DB::commit();
            return view('view-enquiry', compact('enquiry', 'product'));
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error viewing enquiry: ' . $e->getMessage());
            return redirect()->route('enquiries')->with('error', 'Error: ' . $e->getMessage());
        }
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
            'application' => 'nullable|string',
        ]);

        $enquiry = Enquiry::findOrFail($id);
        $enquiry->update($request->only(['user_name', 'user_email', 'user_phone', 'company', 'status', 'message', 'application']));

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

    /**
     * Mark a single enquiry as read
     */
    public function markAsRead($id)
    {
        DB::beginTransaction();
        try {
            $enquiry = Enquiry::findOrFail($id);
            $enquiry->is_read = true;
            $enquiry->save();

            DB::commit();

            if (request()->ajax()) {
                return response()->json(['success' => true, 'message' => 'Enquiry marked as read']);
            }

            return redirect()->back()->with('success', 'Enquiry marked as read');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error marking enquiry as read: ' . $e->getMessage());

            if (request()->ajax()) {
                return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
            }

            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    /**
     * Mark all enquiries as read
     */
    public function markAllAsRead()
    {
        DB::beginTransaction();
        try {
            Enquiry::unread()->update(['is_read' => true]);

            DB::commit();

            if (request()->ajax()) {
                return response()->json(['success' => true, 'message' => 'All enquiries marked as read']);
            }

            return redirect()->back()->with('success', 'All enquiries marked as read');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error marking all enquiries as read: ' . $e->getMessage());

            if (request()->ajax()) {
                return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
            }

            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserThankYouEmail;
use App\Mail\AdminEnquiryNotificationEmail;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::all();
        return view('supports', compact('supports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'application' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'product' => 'nullable|string|max:255',
            'page' => 'required|string|max:255',
        ]);

        $support = Support::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'application' => $request->application,
            'message' => $request->message,
            'product' => $request->product,
            'page' => $request->page,
        ]);

        // Send thank you email to user
        Mail::to($support->email)->send(new UserThankYouEmail($support));

        // Send notification to admin
        Mail::to(config('mail.from.address'))->send(new AdminEnquiryNotificationEmail($support));

        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }

    public function destroy($id)
    {
        $support = Support::findOrFail($id);
        $support->delete();

        return redirect()->back()->with('success', 'Support entry deleted successfully!');
    }

    public function deleteSelected(Request $request)
    {
        $ids = is_array($request->ids) ? $request->ids : explode(',', $request->ids);
        if ($ids) {
            Support::destroy($ids);
            return redirect()->back()->with('success', 'Selected support entries deleted successfully!');
        }
        return redirect()->back()->with('error', 'No entries selected.');
    }
}

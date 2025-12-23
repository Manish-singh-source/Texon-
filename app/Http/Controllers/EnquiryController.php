<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::all();
        $totalEnquiries = Enquiry::count();
        $pending = Enquiry::where('status', 'pending')->count();
        $responded = Enquiry::where('status', 'responded')->count();
        $closed = Enquiry::where('status', 'closed')->count();
        return view('enquiries', compact('enquiries', 'totalEnquiries', 'pending', 'responded', 'closed'));
    }
}

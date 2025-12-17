<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('add-customers');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|max:20',
            'gender' => 'required|string',
            'date_of_birth' => 'nullable|date',
            'customer_type' => 'nullable|string',
            'gst_number' => 'nullable|string',
            'pan_number' => 'nullable|string',
            'company_name' => 'nullable|string',
            'company_address' => 'nullable|string',
        ]);

        Customer::create($request->only(['first_name', 'last_name', 'email', 'phone', 'gender', 'date_of_birth', 'customer_type', 'gst_number', 'pan_number', 'company_name', 'company_address']));

        return redirect()->back()->with('success', 'Customer added successfully!');
    }
}

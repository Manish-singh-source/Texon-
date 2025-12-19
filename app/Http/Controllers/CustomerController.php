<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers', compact('customers'));
    }

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
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
        ]);

        Customer::create($request->only(['first_name', 'last_name', 'email', 'phone', 'gender', 'date_of_birth', 'customer_type', 'gst_number', 'pan_number', 'company_name', 'company_address', 'city', 'state', 'country']));

        return redirect()->back()->with('success', 'Customer added successfully!');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('edit-customers', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone' => 'required|string|max:20',
            'gender' => 'required|string',
            'date_of_birth' => 'nullable|date',
            'customer_type' => 'nullable|string',
            'gst_number' => 'nullable|string',
            'pan_number' => 'nullable|string',
            'company_name' => 'nullable|string',
            'company_address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
        ]);

        $customer->update($request->only(['first_name', 'last_name', 'email', 'phone', 'gender', 'date_of_birth', 'customer_type', 'gst_number', 'pan_number', 'company_name', 'company_address', 'city', 'state', 'country']));

        return redirect()->route('customers')->with('success', 'Customer updated successfully!');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer-details', compact('customer'));
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->back()->with('success', 'Customer deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = \App\Models\Enquiry::latest()->paginate(20);
        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function show(\App\Models\Enquiry $enquiry)
    {
        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function updateStatus(\Illuminate\Http\Request $request, \App\Models\Enquiry $enquiry)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:new,read,replied',
        ]);

        $enquiry->update($validated);

        return back()->with('success', 'Status updated successfully.');
    }

    public function destroy(\App\Models\Enquiry $enquiry)
    {
        $enquiry->delete();
        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry deleted.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        \App\Models\Enquiry::create($validated);

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}

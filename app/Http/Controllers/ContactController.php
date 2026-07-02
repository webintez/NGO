<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'interest_area' => 'required|string',
            'message' => 'required|string',
        ]);

        ContactInquiry::create($validated);

        return redirect()->back()->with('success', 'Thank you for reaching out! We have received your inquiry regarding ' . $request->interest_area . ' and will contact you shortly.');
    }
}

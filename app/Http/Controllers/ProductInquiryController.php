<?php

namespace App\Http\Controllers;

use App\Models\ProductInquiry;
use Illuminate\Http\Request;

class ProductInquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ProductInquiry::create($validated);

        return redirect()->back()->with('success', 'Your inquiry for "' . $request->product_name . '" has been sent. We will coordinate with the artisan and contact you!');
    }
}

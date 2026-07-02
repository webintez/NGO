<?php

namespace App\Http\Controllers;

use App\Models\DonationRecord;
use App\Models\Setting;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $settings = Setting::firstOrCreate(
            ['id' => 1],
            [
                'razorpay_key' => 'rzp_test_39f70d21f475',
                'razorpay_secret' => 'sec_test_3422d0a72a1c',
                'is_enabled' => false,
            ]
        );
        return view('donation', compact('settings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cause' => 'required|string',
            'amount' => 'required|numeric|min:1',
            'payment_method' => 'required|string',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'razorpay_payment_id' => 'nullable|string|max:255',
        ]);

        DonationRecord::create($validated);

        $msg = 'Thank you for your generous support! Your donation of ₹' . number_format($request->amount) . ' for ' . $request->cause . ' has been recorded.';
        if (!empty($request->razorpay_payment_id)) {
            $msg .= ' (Razorpay Txn: ' . $request->razorpay_payment_id . ')';
        }

        return redirect()->back()->with('success', $msg);
    }
}

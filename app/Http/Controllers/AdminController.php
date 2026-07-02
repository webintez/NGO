<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\DonationRecord;
use App\Models\ProductInquiry;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $contactInquiries = ContactInquiry::latest()->paginate(10, ['*'], 'contacts');
        $productInquiries = ProductInquiry::latest()->paginate(10, ['*'], 'products');
        $donationRecords = DonationRecord::latest()->paginate(10, ['*'], 'donations');

        // Calculate donation stats
        $totalDonations = DonationRecord::sum('amount');
        
        $causeStats = DonationRecord::select('cause', \DB::raw('SUM(amount) as total'))
            ->groupBy('cause')
            ->pluck('total', 'cause')
            ->toArray();

        // Get Razorpay settings
        $settings = Setting::firstOrCreate(
            ['id' => 1],
            [
                'razorpay_key' => 'rzp_test_39f70d21f475',
                'razorpay_secret' => 'sec_test_3422d0a72a1c',
                'is_enabled' => false,
            ]
        );

        return view('admin.dashboard', compact(
            'contactInquiries', 
            'productInquiries', 
            'donationRecords', 
            'totalDonations',
            'causeStats',
            'settings'
        ));
    }

    public function updateSettings(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'razorpay_key' => 'nullable|string|max:255',
            'razorpay_secret' => 'nullable|string|max:255',
        ]);

        $validated['is_enabled'] = $request->has('is_enabled');

        Setting::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return redirect()->back()->with('success', 'Razorpay settings updated successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function updateContentBlock(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $request->validate([
            'page' => 'required|string',
            'section' => 'required|string',
            'element_key' => 'required|string',
            'type' => 'required|string',
        ]);

        $newValue = '';

        if ($request->type === 'image') {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                
                // Create directory if it doesn't exist
                if (!file_exists(public_path('images/uploads'))) {
                    mkdir(public_path('images/uploads'), 0755, true);
                }
                
                $file->move(public_path('images/uploads'), $filename);
                $newValue = '/images/uploads/' . $filename;
            } else {
                $newValue = $request->value;
            }
        } else {
            $newValue = $request->value;
        }

        \App\Models\ContentBlock::updateOrCreate(
            [
                'page' => $request->page,
                'section' => $request->section,
                'element_key' => $request->element_key,
            ],
            [
                'type' => $request->type,
                'value' => $newValue,
            ]
        );

        return response()->json([
            'success' => true,
            'value' => $newValue,
        ]);
    }
}

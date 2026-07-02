@extends('layouts.app')

@section('title', 'Admin Dashboard | Universal Peace Council')

@section('styles')
<style>
    .dashboard-tab-content {
        display: none;
    }
    .dashboard-tab-content.active {
        display: block;
    }
</style>
@endsection

@section('content')
<main class="py-12 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <!-- Header -->
    <header class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-12 border-b border-primary/10 pb-6">
        <div>
            <h1 class="font-display-xl text-3xl font-extrabold text-primary uppercase">Management Dashboard</h1>
            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest font-label-caps mt-1">Reviewing submissions & funds</p>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-secondary text-on-secondary px-6 py-3 rounded-full font-label-caps text-label-caps font-bold hover:scale-105 active:scale-95 transition-transform flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">logout</span> Logout
            </button>
        </form>
    </header>

    <!-- Stats Summary Cards -->
    <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
        <div class="glass-card p-6 border border-white/20">
            <span class="text-gray-500 font-bold text-[10px] font-label-caps uppercase block mb-1">TOTAL FUNDS RAISED</span>
            <p class="text-3xl font-extrabold text-primary">₹{{ number_format($totalDonations, 2) }}</p>
            <span class="text-xs text-secondary font-semibold">From online transactions</span>
        </div>
        <div class="glass-card p-6 border border-white/20">
            <span class="text-gray-500 font-bold text-[10px] font-label-caps uppercase block mb-1">CONTACT INQUIRIES</span>
            <p class="text-3xl font-extrabold text-primary">{{ \App\Models\ContactInquiry::count() }}</p>
            <span class="text-xs text-secondary font-semibold">Messages received</span>
        </div>
        <div class="glass-card p-6 border border-white/20">
            <span class="text-gray-500 font-bold text-[10px] font-label-caps uppercase block mb-1">ARTISAN CRAFT ORDERS</span>
            <p class="text-3xl font-extrabold text-primary">{{ \App\Models\ProductInquiry::count() }}</p>
            <span class="text-xs text-secondary font-semibold">Handicraft inquiries</span>
        </div>
        <div class="glass-card p-6 border border-white/20">
            <span class="text-gray-500 font-bold text-[10px] font-label-caps uppercase block mb-1">REGISTERED BLOG POSTS</span>
            <p class="text-3xl font-extrabold text-primary">{{ \App\Models\BlogPost::count() }}</p>
            <span class="text-xs text-secondary font-semibold">Live in library</span>
        </div>
    </section>

    <!-- Detailed stats breakdown by Cause -->
    <section class="glass-card p-8 mb-12 border border-white/20">
        <h3 class="font-title-md text-primary font-bold mb-4 uppercase text-sm">Donations breakdown by sector</h3>
        <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
            @php
                $causes = [
                    'Animal Rescue' => 'pets',
                    'Health Camps' => 'medical_services',
                    'Child Education' => 'child_care',
                    'Adult Literacy' => 'person',
                    'Reforestation' => 'forest',
                    'Support Artisans' => 'palette'
                ];
            @endphp
            @foreach($causes as $causeName => $icon)
                <div class="bg-white/30 p-4 rounded-xl border border-white/40 text-center">
                    <span class="material-symbols-outlined text-secondary text-2xl mb-1">{{ $icon }}</span>
                    <span class="block text-xs font-bold text-gray-500 line-clamp-1">{{ $causeName }}</span>
                    <span class="text-sm font-extrabold text-primary">₹{{ number_format($causeStats[$causeName] ?? 0, 0) }}</span>
                </div>
            @endforeach
    </section>

    <!-- Tabbed Navigation Panels -->
    <section class="glass-card p-8 border border-white/20">
        <div class="flex flex-wrap border-b border-primary/10 mb-8" id="dashboard-tabs">
            <button class="flex-1 md:flex-none md:px-8 py-3 font-label-caps text-label-caps font-bold border-b-2 border-secondary text-secondary text-xs" data-dash-tab="donations" onclick="switchDashTab('donations')">Donations Log</button>
            <button class="flex-1 md:flex-none md:px-8 py-3 font-label-caps text-label-caps font-bold text-on-surface-variant text-xs" data-dash-tab="contacts" onclick="switchDashTab('contacts')">Contact Messages</button>
            <button class="flex-1 md:flex-none md:px-8 py-3 font-label-caps text-label-caps font-bold text-on-surface-variant text-xs" data-dash-tab="products" onclick="switchDashTab('products')">Artisan Orders</button>
            <button class="flex-1 md:flex-none md:px-8 py-3 font-label-caps text-label-caps font-bold text-on-surface-variant text-xs" data-dash-tab="settings" onclick="switchDashTab('settings')">Razorpay Config</button>
        </div>

        <!-- Donations Table Content -->
        <div class="dashboard-tab-content active" id="dash-donations">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-700">
                    <thead class="text-xs uppercase bg-primary/5 text-primary border-b border-primary/10">
                        <tr>
                            <th class="px-6 py-3">Cause / Sector</th>
                            <th class="px-6 py-3">Amount</th>
                            <th class="px-6 py-3">Method</th>
                            <th class="px-6 py-3">Donor details</th>
                            <th class="px-6 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($donationRecords as $don)
                            <tr class="border-b border-primary/5 hover:bg-white/20">
                                <td class="px-6 py-4 font-bold text-primary">{{ $don->cause }}</td>
                                <td class="px-6 py-4 font-extrabold text-secondary">₹{{ number_format($don->amount) }}</td>
                                <td class="px-6 py-4"><span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase bg-primary/10 text-primary">{{ $don->payment_method }}</span></td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold">{{ $don->name }}</div>
                                    <div class="text-xs text-gray-500">{{ $don->email }} | {{ $don->phone }}</div>
                                </td>
                                <td class="px-6 py-4 text-xs text-gray-500">{{ $don->created_at->format('M d, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-8 text-center text-gray-500 italic">No donations registered yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                {{ $donationRecords->appends(['contacts' => $contactInquiries->currentPage(), 'products' => $productInquiries->currentPage()])->links() }}
            </div>
        </div>

        <!-- Contact Messages Table Content -->
        <div class="dashboard-tab-content" id="dash-contacts">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-700">
                    <thead class="text-xs uppercase bg-primary/5 text-primary border-b border-primary/10">
                        <tr>
                            <th class="px-6 py-3">Interest Area</th>
                            <th class="px-6 py-3">Visitor details</th>
                            <th class="px-6 py-3">Message</th>
                            <th class="px-6 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contactInquiries as $msg)
                            <tr class="border-b border-primary/5 hover:bg-white/20">
                                <td class="px-6 py-4"><span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase bg-amber-100 text-amber-800 border border-amber-300">{{ $msg->interest_area }}</span></td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-primary">{{ $msg->name }}</div>
                                    <div class="text-xs text-gray-500">{{ $msg->email }} | {{ $msg->phone }}</div>
                                </td>
                                <td class="px-6 py-4 text-xs text-gray-600 max-w-xs truncate" title="{{ $msg->message }}">{{ $msg->message }}</td>
                                <td class="px-6 py-4 text-xs text-gray-500">{{ $msg->created_at->format('M d, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-gray-500 italic">No contact inquiries registered yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                {{ $contactInquiries->appends(['donations' => $donationRecords->currentPage(), 'products' => $productInquiries->currentPage()])->links() }}
            </div>
        </div>

        <!-- Artisan Product Inquiries Table Content -->
        <div class="dashboard-tab-content" id="dash-products">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-700">
                    <thead class="text-xs uppercase bg-primary/5 text-primary border-b border-primary/10">
                        <tr>
                            <th class="px-6 py-3">Product Name</th>
                            <th class="px-6 py-3">Buyer details</th>
                            <th class="px-6 py-3">Custom Note</th>
                            <th class="px-6 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($productInquiries as $prod)
                            <tr class="border-b border-primary/5 hover:bg-white/20">
                                <td class="px-6 py-4 font-bold text-primary">{{ $prod->product_name }}</td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold">{{ $prod->name }}</div>
                                    <div class="text-xs text-gray-500">{{ $prod->email }} | {{ $prod->phone }}</div>
                                </td>
                                <td class="px-6 py-4 text-xs text-gray-600 max-w-xs truncate" title="{{ $prod->message }}">{{ $prod->message }}</td>
                                <td class="px-6 py-4 text-xs text-gray-500">{{ $prod->created_at->format('M d, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-gray-500 italic">No product inquiries registered yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                {{ $productInquiries->appends(['donations' => $donationRecords->currentPage(), 'contacts' => $contactInquiries->currentPage()])->links() }}
            </div>
        </div>

        <!-- Razorpay Settings Form Content -->
        <div class="dashboard-tab-content" id="dash-settings">
            <div class="max-w-xl mx-auto p-6 bg-white/40 rounded-2xl border border-white/45">
                <h4 class="font-title-md text-primary font-bold mb-4 uppercase text-lg">Razorpay Credentials</h4>
                
                <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6" autocomplete="off">
                    @csrf
                    <div>
                        <label class="font-label-caps text-xs text-primary font-bold uppercase block mb-2">Razorpay Key ID</label>
                        <input name="razorpay_key" type="text" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="rzp_test_..." value="{{ $settings->razorpay_key }}"/>
                    </div>
                    
                    <div>
                        <label class="font-label-caps text-xs text-primary font-bold uppercase block mb-2">Razorpay Secret Key</label>
                        <input name="razorpay_secret" type="password" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="Enter secret key" value="{{ $settings->razorpay_secret }}"/>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <input name="is_enabled" id="is_enabled" type="checkbox" value="1" class="w-5 h-5 rounded text-secondary border-primary focus:ring-secondary focus:ring-2" {{ $settings->is_enabled ? 'checked' : '' }}/>
                        <label for="is_enabled" class="font-title-md text-sm text-primary font-bold select-none cursor-pointer">Enable Razorpay Payment Gateway</label>
                    </div>
                    
                    <button type="submit" class="w-full bg-primary text-white py-4 rounded-xl font-bold uppercase tracking-wider text-sm hover:bg-secondary transition-colors shadow-lg active:scale-95">
                        Save Configurations
                    </button>
                </form>
            </div>
        </div>

    </section>
</main>
@endsection

@section('scripts')
<script>
    function switchDashTab(tabName) {
        // Toggle tab highlights
        document.querySelectorAll('#dashboard-tabs button').forEach(btn => {
            if (btn.getAttribute('data-dash-tab') === tabName) {
                btn.classList.add('border-b-2', 'border-secondary', 'text-secondary');
            } else {
                btn.classList.remove('border-b-2', 'border-secondary', 'text-secondary');
            }
        });

        // Toggle table contents
        document.querySelectorAll('.dashboard-tab-content').forEach(content => {
            if (content.id === `dash-${tabName}`) {
                content.classList.add('active');
            } else {
                content.classList.remove('active');
            }
        });
    }
</script>
@endsection

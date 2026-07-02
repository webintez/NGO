@extends('layouts.app')

@section('title', 'Donation | Universal Peace Council')

@section('styles')
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-content {
        animation: fadeIn 0.5s ease forwards;
    }
</style>
@endsection

@section('content')
<main class="pt-10">
    <!-- Donation Hero -->
    <section class="py-12 text-center max-w-3xl mx-auto px-margin-mobile">
        <h1 class="font-headline-lg text-headline-lg-mobile md:text-5xl font-extrabold text-primary mb-6" {!! \App\Helpers\ContentHelper::editable('donation', 'hero', 'title', 'text', 'Hero Title') !!}>{{ \App\Helpers\ContentHelper::get('donation', 'hero', 'title', 'Invest in Radical Empathy') }}</h1>
        <p class="font-body-lg text-body-lg max-w-2xl mx-auto text-on-surface-variant text-gray-700" {!! \App\Helpers\ContentHelper::editable('donation', 'hero', 'subtitle', 'textarea', 'Hero Subtitle') !!}>{{ \App\Helpers\ContentHelper::get('donation', 'hero', 'subtitle', 'Your contribution fuels a movement of radical empathy. Choose a cause that resonates with your spirit and watch the ripple effect of your kindness.') }}</p>
    </section>

    <!-- Cause Selection Tabs & Form -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        
        <!-- Cause Selection Tabs -->
        <div class="flex overflow-x-auto gap-4 mb-12 justify-start md:justify-center pb-2 scrollbar-none" id="cause-tabs">
            <button class="cause-tab glass-card px-6 py-4 rounded-xl flex items-center gap-3 border-2 border-secondary transition-all hover:border-secondary active:scale-95 text-primary flex-shrink-0" data-tab="animal" onclick="switchTab('animal')">
                <span class="material-symbols-outlined">pets</span>
                <span class="font-title-md text-sm font-bold">Animal Rescue</span>
            </button>
            <button class="cause-tab glass-card px-6 py-4 rounded-xl flex items-center gap-3 border-2 border-transparent transition-all hover:border-secondary active:scale-95 text-primary opacity-60 flex-shrink-0" data-tab="health" onclick="switchTab('health')">
                <span class="material-symbols-outlined">medical_services</span>
                <span class="font-title-md text-sm font-bold">Health Camps</span>
            </button>
            <button class="cause-tab glass-card px-6 py-4 rounded-xl flex items-center gap-3 border-2 border-transparent transition-all hover:border-secondary active:scale-95 text-primary opacity-60 flex-shrink-0" data-tab="child" onclick="switchTab('child')">
                <span class="material-symbols-outlined">child_care</span>
                <span class="font-title-md text-sm font-bold">Child Education</span>
            </button>
            <button class="cause-tab glass-card px-6 py-4 rounded-xl flex items-center gap-3 border-2 border-transparent transition-all hover:border-secondary active:scale-95 text-primary opacity-60 flex-shrink-0" data-tab="adult" onclick="switchTab('adult')">
                <span class="material-symbols-outlined">person</span>
                <span class="font-title-md text-sm font-bold">Adult Literacy</span>
            </button>
            <button class="cause-tab glass-card px-6 py-4 rounded-xl flex items-center gap-3 border-2 border-transparent transition-all hover:border-secondary active:scale-95 text-primary opacity-60 flex-shrink-0" data-tab="forest" onclick="switchTab('forest')">
                <span class="material-symbols-outlined">forest</span>
                <span class="font-title-md text-sm font-bold">Reforestation</span>
            </button>
            <button class="cause-tab glass-card px-6 py-4 rounded-xl flex items-center gap-3 border-2 border-transparent transition-all hover:border-secondary active:scale-95 text-primary opacity-60 flex-shrink-0" data-tab="art" onclick="switchTab('art')">
                <span class="material-symbols-outlined">palette</span>
                <span class="font-title-md text-sm font-bold">Support Artisans</span>
            </button>
        </div>

        <!-- Bento Grid Content Area -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            
            <!-- Impact Details (Left side) -->
            <div class="lg:col-span-7 flex flex-col gap-6" id="impact-container">
                <div class="glass-card p-8 rounded-2xl flex-1 animate-content" id="impact-detail">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="p-3 bg-secondary/10 rounded-lg text-secondary material-symbols-outlined text-4xl" id="impact-icon">pets</span>
                        <div>
                            <h3 class="font-headline-lg text-headline-lg-mobile text-primary text-2xl font-bold" id="impact-title">Animal Rescue</h3>
                            <p class="font-label-caps text-[10px] text-secondary tracking-widest font-bold" id="impact-label">WILDLIFE PROTECTION & STRAY CARE</p>
                        </div>
                    </div>
                    
                    <p class="font-body-lg text-on-surface-variant mb-8 text-gray-700 leading-relaxed" id="impact-desc">
                        Every creature deserves a life free from pain. Our rescue teams operate 24/7 to provide medical aid, shelter, and rehabilitation to injured strays and trafficked wildlife. Your donation ensures surgical kits, nutrient-rich food, and forever-homes for those who cannot speak for themselves.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-white/30 p-4 rounded-xl border border-white/40">
                            <span class="font-title-md text-primary block text-lg font-bold" id="impact-stat1">12,400+</span>
                            <span class="font-body-md text-on-surface-variant text-xs text-gray-600" id="impact-label1">Animals Treated Yearly</span>
                        </div>
                        <div class="bg-white/30 p-4 rounded-xl border border-white/40">
                            <span class="font-title-md text-primary block text-lg font-bold" id="impact-stat2">45</span>
                            <span class="font-body-md text-on-surface-variant text-xs text-gray-600" id="impact-label2">Active Mobile Clinics</span>
                        </div>
                    </div>
                </div>
                <div class="h-64 rounded-2xl overflow-hidden glass-card relative border border-white/20">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 hover:scale-110" id="impact-img" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAkpSMfJ4CQfyYf9NjxNQX6ZSreDeE4BweW8F0EUj_yLdloPPQtIjfLCmIOUk-ZQVTH5JPcmarjs6-RI9UO6StTp3Tu54_HPN_1TFCV3XUbSkq776CbGuoJMp8pSPgKnNaK4U4zsA5bi1uBZrMGMp0yFf6qTrzA43Agt8BZgz0fVis8dyUuITWiZzSMnZfpeP8ECRbbg1mcAHgiiBHpfL9rzRKQQQtQm3by3aeh53W_yP4CCTP6vN4h')"></div>
                </div>
            </div>

            <!-- Donation Widget Form (Right side) -->
            <div class="lg:col-span-5">
                <div class="glass-card p-8 rounded-2xl border border-white/20">
                    
                    <form action="{{ route('donation.store') }}" method="POST" id="donation-form" class="flex flex-col gap-5" autocomplete="off">
                        @csrf
                        <input type="hidden" name="cause" id="input-cause" value="Animal Rescue">
                        <input type="hidden" name="payment_method" id="input-payment" value="UPI">
                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" value="">

                        <h4 class="font-title-md text-primary font-bold text-lg">Select Contribution</h4>
                        
                        <!-- Preset Amount Buttons -->
                        <div class="grid grid-cols-3 gap-3">
                            <button type="button" class="amt-btn border-2 border-primary/10 py-3 rounded-xl hover:border-secondary transition-all group active:scale-95" onclick="setAmount(500, this)">
                                <span class="block font-title-md text-primary group-hover:text-secondary font-bold">₹500</span>
                                <span class="text-[9px] font-label-caps text-on-surface-variant uppercase font-bold text-gray-500">Small Help</span>
                            </button>
                            <button type="button" class="amt-btn border-2 border-secondary py-3 rounded-xl transition-all group active:scale-95 bg-secondary/5" id="default-amt-btn" onclick="setAmount(1000, this)">
                                <span class="block font-title-md text-secondary font-bold">₹1000</span>
                                <span class="text-[9px] font-label-caps text-on-surface-variant uppercase font-bold text-gray-500">Impactful</span>
                            </button>
                            <button type="button" class="amt-btn border-2 border-primary/10 py-3 rounded-xl hover:border-secondary transition-all group active:scale-95" onclick="setAmount(5000, this)">
                                <span class="block font-title-md text-primary group-hover:text-secondary font-bold">₹5000</span>
                                <span class="text-[9px] font-label-caps text-on-surface-variant uppercase font-bold text-gray-500">Change Agent</span>
                            </button>
                        </div>

                        <!-- Custom Amount Input -->
                        <div class="relative">
                            <span class="absolute left-3 top-2.5 text-primary/60 font-bold">₹</span>
                            <input type="number" name="amount" id="input-amount" class="w-full bg-white/40 border-b-2 border-primary py-2 pl-7 pr-3 focus:border-secondary focus:ring-0 outline-none transition-all placeholder:text-on-surface-variant/40 rounded-xl" placeholder="Or enter custom amount" value="1000" min="1" required oninput="updateCustomAmount(this.value)"/>
                        </div>

                        <!-- Impact Description Banner -->
                        <div class="p-4 bg-primary/5 rounded-xl border border-primary/10">
                            <p class="font-body-md text-primary italic text-xs leading-relaxed" id="impact-text">
                                "This will provide 1 month of specialized medical supplies for a rescued street animal."
                            </p>
                        </div>

                        <!-- Personal Information Fields (Crucial for database logging) -->
                        <div class="flex flex-col gap-4 border-t border-primary/10 pt-4">
                            <h5 class="font-title-md text-primary font-bold text-sm">Donor Information</h5>
                            <div>
                                <label class="font-label-caps text-[9px] text-gray-600 block mb-1 font-bold">FULL NAME</label>
                                <input name="name" class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm" placeholder="Dr. Soma Basu" type="text" required/>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="font-label-caps text-[9px] text-gray-600 block mb-1 font-bold">EMAIL ADDRESS</label>
                                    <input name="email" class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm" placeholder="donor@gmail.com" type="email" required/>
                                </div>
                                <div>
                                    <label class="font-label-caps text-[9px] text-gray-600 block mb-1 font-bold">PHONE NUMBER</label>
                                    <input name="phone" class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm" placeholder="9833571660" type="text" required/>
                                </div>
                            </div>
                        </div>

                        @if(!$settings->is_enabled)
                            <!-- Payment Method Tabs (Offline/Simulation Mode) -->
                            <div class="border-t border-primary/10 pt-4">
                                <h5 class="font-title-md text-primary font-bold text-sm mb-4">Payment Method (Simulation Mode)</h5>
                                <div class="flex border-b border-on-surface-variant/10 mb-6">
                                    <button type="button" class="flex-1 py-3 font-label-caps text-label-caps border-b-2 border-secondary text-secondary font-bold text-xs" id="tab-upi" onclick="checkoutTab('upi')">UPI / QR CODE</button>
                                    <button type="button" class="flex-1 py-3 font-label-caps text-label-caps text-on-surface-variant font-bold text-xs" id="tab-card" onclick="checkoutTab('card')">CARD DETAILS</button>
                                </div>

                                <!-- UPI QR Code Showcase -->
                                <div class="flex flex-col items-center animate-content" id="checkout-upi">
                                    <div class="bg-white p-4 rounded-xl mb-4 shadow-sm border border-white/50">
                                        <img alt="UPI QR Code" class="w-32 h-32" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDanvihphDDiKuqr91vcAHmHFRrg_5DgFPvO7pouM22-0r6Ls3NsmtWjGxopj_kuYVBq6OmNKgsM-jR44T3WibhRikwpfGznrqx-J1u1MkE1NUW3mczKsCY3UU3c1iU9utU20fGXfhgIfdiLM9YRaJYtfmIjNgbvoiHi0VIAg2SSODLv0jpWem7MT-l8bQh4RhXRL7aU1Wu3J-Y-jb4uZ8X8jAR2552bJCyLnTAr8s5kNdpG46RUbS0"/>
                                    </div>
                                    <p class="font-label-caps text-[9px] text-gray-500 mb-2 font-bold">Scan to pay with any UPI App</p>
                                    <span class="font-title-md text-primary tracking-wider font-bold">upc@upi</span>
                                </div>

                                <!-- Card Details Fields -->
                                <div class="hidden flex flex-col gap-4 animate-content" id="checkout-card">
                                    <div>
                                        <label class="font-label-caps text-[9px] text-gray-600 block mb-1 font-bold">CARD NUMBER</label>
                                        <input class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm" placeholder="XXXX XXXX XXXX XXXX" type="text"/>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label class="font-label-caps text-[9px] text-gray-600 block mb-1 font-bold">EXPIRY DATE</label>
                                            <input class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm" placeholder="MM/YY" type="text"/>
                                        </div>
                                        <div>
                                            <label class="font-label-caps text-[9px] text-gray-600 block mb-1 font-bold">CVV CODE</label>
                                            <input class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm" placeholder="***" type="password"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="border-t border-primary/10 pt-4 text-center">
                                <span class="material-symbols-outlined text-secondary text-4xl mb-2">payments</span>
                                <h5 class="font-title-md text-primary font-bold text-sm">Secure Payment Gateway</h5>
                                <p class="text-xs text-gray-500 mt-1">Payment will be processed securely via Razorpay Checkout.</p>
                            </div>
                        @endif

                        <!-- Complete Donation Submit Button -->
                        <button type="submit" class="w-full bg-primary text-white py-4 rounded-xl font-headline-lg text-body-lg hover:bg-secondary transition-colors shadow-lg active:scale-95 font-bold uppercase tracking-wider text-sm mt-2">
                            @if($settings->is_enabled) Pay via Razorpay @else Complete Donation @endif
                        </button>
                        <p class="text-[9px] text-center text-gray-500 uppercase tracking-widest">Secure 256-bit encrypted transaction</p>
                    </form>

                </div>
            </div>

        </div>
    </section>

    <!-- Global Movement Stats -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="glass-card p-10 rounded-2xl text-center group">
                <span class="material-symbols-outlined text-4xl text-secondary mb-4 group-hover:scale-110 transition-transform inline-block">groups</span>
                <h5 class="font-headline-lg text-headline-lg-mobile text-primary text-3xl font-extrabold">124k+</h5>
                <p class="font-label-caps text-label-caps text-on-surface-variant font-bold text-xs">Global Visitors</p>
            </div>
            <div class="glass-card p-10 rounded-2xl text-center group">
                <span class="material-symbols-outlined text-4xl text-secondary mb-4 group-hover:scale-110 transition-transform inline-block">volunteer_activism</span>
                <h5 class="font-headline-lg text-headline-lg-mobile text-primary text-3xl font-extrabold">₹18M+</h5>
                <p class="font-label-caps text-label-caps text-on-surface-variant font-bold text-xs">Funds Disbursed</p>
            </div>
            <div class="glass-card p-10 rounded-2xl text-center group">
                <span class="material-symbols-outlined text-4xl text-secondary mb-4 group-hover:scale-110 transition-transform inline-block">public</span>
                <h5 class="font-headline-lg text-headline-lg-mobile text-primary text-3xl font-extrabold">12</h5>
                <p class="font-label-caps text-label-caps text-on-surface-variant font-bold text-xs">States Impacted</p>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
@if($settings->is_enabled)
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endif
<script>
    const impactData = {
        animal: {
            title: "Animal Rescue",
            label: "WILDLIFE PROTECTION & STRAY CARE",
            icon: "pets",
            desc: "Every creature deserves a life free from pain. Our rescue teams operate 24/7 to provide medical aid, shelter, and rehabilitation to injured strays and trafficked wildlife. Your donation ensures surgical kits, nutrient-rich food, and forever-homes for those who cannot speak for themselves.",
            stat1: "12,400+",
            label1: "Animals Treated Yearly",
            stat2: "45",
            label2: "Active Mobile Clinics",
            imgUrl: "https://lh3.googleusercontent.com/aida-public/AB6AXuAkpSMfJ4CQfyYf9NjxNQX6ZSreDeE4BweW8F0EUj_yLdloPPQtIjfLCmIOUk-ZQVTH5JPcmarjs6-RI9UO6StTp3Tu54_HPN_1TFCV3XUbSkq776CbGuoJMp8pSPgKnNaK4U4zsA5bi1uBZrMGMp0yFf6qTrzA43Agt8BZgz0fVis8dyUuITWiZzSMnZfpeP8ECRbbg1mcAHgiiBHpfL9rzRKQQQtQm3by3aeh53W_yP4CCTP6vN4h"
        },
        health: {
            title: "Health Camps",
            label: "REMOTE MEDICAL INTERVENTION",
            icon: "medical_services",
            desc: "Bringing world-class healthcare to the doorstep of the underserved. We organize weekly health camps in rural belts, offering free diagnostics, medication, and specialized surgeries. From pediatric care to geriatric support, we ensure distance is never a barrier to health.",
            stat1: "85,000+",
            label1: "Patients Screened",
            stat2: "120+",
            label2: "Volunteer Doctors",
            imgUrl: "https://lh3.googleusercontent.com/aida-public/AB6AXuDO0b5nYcQKimcBQxKDb1WkgnwQxE36FB_LaihLD4WYsMDEljMDbyDVCAe-LulBYDcRXJdtsJuAiqo7pnKniYK7HbBqXYGOumt0HxjT_ZMwKP-SwJ3IUKGFWzdyRMUjna8FvCxou-rawhsLPNAZMcwyX4kr-fwIDrpTiIhdtbJ-DRR4vMPzRWa0yBvSrSklo2daHfHQJb76Amu8nL8VIll59Ge4drZ9jhVR2xS1k69034ak4l5lMp2W"
        },
        child: {
            title: "Child Education",
            label: "EMPOWERING FUTURE LEADERS",
            icon: "child_care",
            desc: "Education is the greatest equalizer. We provide comprehensive schooling support, digital literacy, and creative arts exposure to children from marginalized communities. Your donation covers school kits, midday meals, and teacher salaries.",
            stat1: "3,200",
            label1: "Students Sponsored",
            stat2: "18",
            label2: "Learning Centers",
            imgUrl: "https://lh3.googleusercontent.com/aida-public/AB6AXuCT2G_Uzp0Z-jSbEcsY61CSfiqu0Hgs7qVeWj65vlS8NlXhN0rcgFrpuVR9-THQj8mTHuiXYqyZTzkETAXq6sexRsA54B4eEbWtUF4B5bqMQDMYKEAgV9E-34pTSvi1Z38sgqOXs1ttWrL97IJmI83hnC2uRmoo5zgyy1PTptdqQdlf-wZTc97pSukSuzwFicYGb7m8wpqRBqI3j_ImewcbhFUKX5eSUfC82xMrCdgtpv-ouUPX4cqp"
        },
        adult: {
            title: "Adult Literacy",
            label: "BREAKING CYCLES OF SILENCE",
            icon: "person",
            desc: "It is never too late to learn. Our evening classes empower adults with basic reading, writing, and financial literacy skills. By educating an adult, we uplift an entire household, enabling them to navigate the modern world with dignity and confidence.",
            stat1: "950+",
            label1: "Adult Graduates",
            stat2: "72%",
            label2: "Women Participants",
            imgUrl: "https://lh3.googleusercontent.com/aida-public/AB6AXuAXrgcd2jnXyJgxOpiQgtwBp9SFG7T8h007dfboaBmqP4tB_QdLUQHtmfvC1JyEOzkIf1p2r_vXfR2nGQqZxvSV29J8GHWShlbH1Q5MwOynkUiPtusR920uPu1uQUoq8ISHJvRVKp-FBcfWlSkjQpLKk5CMKlvyb-XiVq79FqRQls3MDZ3kx0TsiL0AgXKiV7_PZMiRnJ3_M-FOEZXcfrISunn90Sa1umPioY2dzfMVX9Itg0l881--"
        },
        forest: {
            title: "Reforestation",
            label: "HEALING THE MOTHER EARTH",
            icon: "forest",
            desc: "Our mission to plant trees is a battle against climate change. We restore indigenous forests that provide habitat for wildlife and clean air for our cities. We involve local communities in 'Seed-to-Tree' monitoring programs.",
            stat1: "450k+",
            label1: "Saplings Planted",
            stat2: "2,400",
            label2: "Acres Restored",
            imgUrl: "https://lh3.googleusercontent.com/aida-public/AB6AXuBxOZh8VE7eYPCvSKjGXUn0Dsy7aZsJIwIszHaj5Hz_1Ow3ZJpyuSDq4azT-T-EiX6_gt8dp96XxT6tbWaeoll60UY8JPZnJJLxhMDqHVhb5Mb5Mum9NdFHyyV2bHbELZiEIWLTbJhRPbQBmN5Dzux8vHgyXqGYnIILySBSB_rNc2bcbv0QvboY5lfX3_qqd4iJmTUmVJgvbVtBQziMG6Iwr01qwqS6gelx29k5vkyMnYrU1zJ-1AqR"
        },
        art: {
            title: "Support Artisans",
            label: "PRESERVING CULTURAL SOUL",
            icon: "palette",
            desc: "Protecting ancient crafts from the onslaught of mass production. We provide traditional artisans with better tools, fair-trade markets, and design workshops. Your support ensures that our heritage doesn't just survive, but thrives.",
            stat1: "420",
            label1: "Artisan Families",
            stat2: "15",
            label2: "Traditional Crafts",
            imgUrl: "https://lh3.googleusercontent.com/aida-public/AB6AXuBGrmxuABT4jn6qc7pXGm8kTi1BUJPnk8qtY3x4v-Kjma80ki0iRwy9aybU24pgYDeLzPDV66Y77zwQsilhb9P9HLgX8Xsn4-DQAFU8tR5t2p_ymtA_y6kl3SwGc0Fo8Ow19kn6Cuz9JAJsaZF9R89ojz4YYhgMasMbvKOx7E8k3M-cUbfvEN7ZOzGI098Uh7NNTTHLgkO54tA7qMLJB4qmGer5w6eQQe3qTqbh3lXKvVHIyWrpwqSP"
        }
    };

    const impactMessages = {
        500: "This will fund urgent field care and rescue operations.",
        1000: "This will fund essential diagnostic screenings and care kits.",
        5000: "This will sponsor critical long-term learning materials or artisan equipment."
    };

    function switchTab(cause) {
        const data = impactData[cause];
        const detailEl = document.getElementById('impact-detail');
        const imgEl = document.getElementById('impact-img');
        
        // Update Tab styles
        document.querySelectorAll('.cause-tab').forEach(btn => {
            btn.classList.add('opacity-60');
            btn.classList.remove('border-secondary');
        });
        document.querySelector(`[data-tab="${cause}"]`).classList.remove('opacity-60');
        document.querySelector(`[data-tab="${cause}"]`).classList.add('border-secondary');

        // Animate transition
        detailEl.classList.remove('animate-content');
        void detailEl.offsetWidth; // Trigger reflow
        detailEl.classList.add('animate-content');

        // Update Content
        detailEl.querySelector('h3').innerText = data.title;
        detailEl.querySelector('p.font-label-caps').innerText = data.label;
        detailEl.querySelector('#impact-icon').innerText = data.icon;
        detailEl.querySelector('#impact-desc').innerText = data.desc;
        detailEl.querySelector('#impact-stat1').innerText = data.stat1;
        detailEl.querySelector('#impact-stat2').innerText = data.stat2;
        detailEl.querySelector('#impact-label1').innerText = data.label1;
        detailEl.querySelector('#impact-label2').innerText = data.label2;
        imgEl.style.backgroundImage = `url('${data.imgUrl}')`;

        // Update hidden input cause
        document.getElementById('input-cause').value = data.title;
    }

    function setAmount(amt, btn) {
        // Update active class on preset amount buttons
        document.querySelectorAll('.amt-btn').forEach(b => {
            b.classList.add('border-primary/10');
            b.classList.remove('border-secondary', 'bg-secondary/5');
            b.querySelector('span').classList.add('text-primary');
            b.querySelector('span').classList.remove('text-secondary');
        });
        if (btn) {
            btn.classList.remove('border-primary/10');
            btn.classList.add('border-secondary', 'bg-secondary/5');
            btn.querySelector('span').classList.remove('text-primary');
            btn.querySelector('span').classList.add('text-secondary');
        }

        // Set value in inputs
        document.getElementById('input-amount').value = amt;
        
        // Update impact message
        const msg = impactMessages[amt] || "Thank you for supporting this vital initiative!";
        document.getElementById('impact-text').innerText = `"${msg}"`;
    }

    function updateCustomAmount(val) {
        // Deselect preset buttons when typing custom
        document.querySelectorAll('.amt-btn').forEach(b => {
            b.classList.add('border-primary/10');
            b.classList.remove('border-secondary', 'bg-secondary/5');
            b.querySelector('span').classList.add('text-primary');
            b.querySelector('span').classList.remove('text-secondary');
        });
        document.getElementById('impact-text').innerText = `"Thank you for contributing ₹${Number(val).toLocaleString()} to our cause!"`;
    }

    function checkoutTab(type) {
        const upiEl = document.getElementById('checkout-upi');
        const cardEl = document.getElementById('checkout-card');
        const tabUpi = document.getElementById('tab-upi');
        const tabCard = document.getElementById('tab-card');

        if (type === 'upi') {
            upiEl.classList.remove('hidden');
            cardEl.classList.add('hidden');
            tabUpi.classList.add('border-b-2', 'border-secondary', 'text-secondary');
            tabCard.classList.remove('border-b-2', 'border-secondary', 'text-secondary');
            document.getElementById('input-payment').value = "UPI";
        } else {
            upiEl.classList.add('hidden');
            cardEl.classList.remove('hidden');
            tabCard.classList.add('border-b-2', 'border-secondary', 'text-secondary');
            tabUpi.classList.remove('border-b-2', 'border-secondary', 'text-secondary');
            document.getElementById('input-payment').value = "Card";
        }
    }

    // Razorpay Integration Listener
    document.getElementById('donation-form').addEventListener('submit', function(e) {
        @if($settings->is_enabled)
            // If razorpay_payment_id has been set, submit the form normally
            if (document.getElementById('razorpay_payment_id').value !== '') {
                return true;
            }
            
            // Prevent standard form submission
            e.preventDefault();

            // Retrieve form inputs
            const cause = document.getElementById('input-cause').value;
            const amount = document.getElementById('input-amount').value;
            const name = this.querySelector('input[name="name"]').value;
            const email = this.querySelector('input[name="email"]').value;
            const phone = this.querySelector('input[name="phone"]').value;

            // Setup Razorpay options
            var options = {
                "key": "{{ $settings->razorpay_key }}",
                "amount": amount * 100, // Amount is in paise (subunit)
                "currency": "INR",
                "name": "Universal Peace Council",
                "description": "Donation for " + cause,
                "image": "https://lh3.googleusercontent.com/aida-public/AB6AXuBGrmxuABT4jn6qc7pXGm8kTi1BUJPnk8qtY3x4v-Kjma80ki0iRwy9aybU24pgYDeLzPDV66Y77zwQsilhb9P9HLgX8Xsn4-DQAFU8tR5t2p_ymtA_y6kl3SwGc0Fo8Ow19kn6Cuz9JAJsaZF9R89ojz4YYhgMasMbvKOx7E8k3M-cUbfvEN7ZOzGI098Uh7NNTTHLgkO54tA7qMLJB4qmGer5w6eQQe3qTqbh3lXKvVHIyWrpwqSP",
                "handler": function (response) {
                    // Inject transaction payment ID
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('input-payment').value = "Razorpay";
                    document.getElementById('donation-form').submit(); // Trigger form submit
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },
                "theme": {
                    "color": "#130c5f"
                }
            };
            
            var rzp1 = new Razorpay(options);
            rzp1.open();
        @endif
    });
</script>
@endsection

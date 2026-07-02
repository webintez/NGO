@extends('layouts.app')

@section('title', 'Contact Us | Universal Peace Council')

@section('content')
<main class="pt-10">
    <!-- Contact Hero -->
    <section class="py-12 text-center max-w-3xl mx-auto px-margin-mobile">
        <span class="font-label-caps text-label-caps text-secondary tracking-widest block mb-4 font-bold">GET IN TOUCH</span>
        <h1 class="font-headline-lg text-headline-lg-mobile md:text-5xl font-extrabold text-primary mb-6" {!! \App\Helpers\ContentHelper::editable('contact', 'hero', 'title', 'text', 'Hero Title') !!}>{{ \App\Helpers\ContentHelper::get('contact', 'hero', 'title', "Let's Create Peace Together") }}</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto text-gray-700" {!! \App\Helpers\ContentHelper::editable('contact', 'hero', 'subtitle', 'textarea', 'Hero Subtitle') !!}>{{ \App\Helpers\ContentHelper::get('contact', 'hero', 'subtitle', 'Have questions about our initiatives or want to get involved? Reach out to our global coordination center in Mumbai.') }}</p>
    </section>

    <!-- Main Interaction Area: Bento Grid Layout -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24 grid grid-cols-1 lg:grid-cols-12 gap-gutter">
        
        <!-- Inquiry Form (Glass Card) -->
        <div class="lg:col-span-7 glass-card p-8 md:p-12 rounded-3xl border border-white/20">
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" autocomplete="off">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-label-caps text-xs text-primary uppercase font-bold block">Full Name</label>
                        <input name="name" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="John Doe" type="text" required/>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-caps text-xs text-primary uppercase font-bold block">Phone Number</label>
                        <input name="phone" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="+91 98335 71660" type="tel" required/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-label-caps text-xs text-primary uppercase font-bold block">Email Address</label>
                        <input name="email" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="john@example.com" type="email" required/>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-caps text-xs text-primary uppercase font-bold block">Interest Area</label>
                        <select name="interest_area" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" required>
                            <option value="Volunteering">Volunteering</option>
                            <option value="Donation Inquiry">Donation Inquiry</option>
                            <option value="Animal Rescue">Animal Rescue</option>
                            <option value="Climate Action">Climate Action</option>
                            <option value="Humanity Projects">Humanity Projects</option>
                        </select>
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label class="font-label-caps text-xs text-primary uppercase font-bold block">Your Message</label>
                    <textarea name="message" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="How can we help?" rows="4" required></textarea>
                </div>
                
                <button class="w-full md:w-auto bg-primary text-white px-12 py-4 rounded-full font-label-caps text-label-caps hover:bg-secondary transition-all transform hover:-translate-y-1 font-bold shadow-lg" type="submit">
                    Send Inquiry
                </button>
            </form>
        </div>

        <!-- Contact Info Panel -->
        <div class="lg:col-span-5 space-y-gutter">
            <!-- Info Card -->
            <div class="glass-card p-8 rounded-3xl space-y-8 border border-white/20">
                <div class="flex items-start gap-4">
                    <div class="bg-secondary p-3 rounded-2xl">
                        <span class="material-symbols-outlined text-white">mail</span>
                    </div>
                    <div>
                        <p class="font-label-caps text-xs text-gray-500 uppercase font-bold">Email Us</p>
                        <p class="font-title-md text-primary font-bold">upc@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-primary p-3 rounded-2xl">
                        <span class="material-symbols-outlined text-white">call</span>
                    </div>
                    <div>
                        <p class="font-label-caps text-xs text-gray-500 uppercase font-bold">Call Us</p>
                        <p class="font-title-md text-primary font-bold">+91 9833571660</p>
                        <p class="font-body-md text-on-surface-variant text-sm text-gray-600">+91 9833564223, +91 9987586414</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-emerald-600 p-3 rounded-2xl">
                        <span class="material-symbols-outlined text-white">chat</span>
                    </div>
                    <div>
                        <p class="font-label-caps text-xs text-gray-500 uppercase font-bold">WhatsApp</p>
                        <p class="font-title-md text-primary font-bold">+91 9833571660</p>
                    </div>
                </div>
            </div>
            
            <!-- Location Preview (Map) -->
            <div class="glass-card rounded-3xl overflow-hidden h-64 relative group border border-white/20">
                <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-700 hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDCSIajAvxcKB5pMB2Sag-N-Jx6IONEL9LGodyFESeF_m573OM5ocy_41Bk9Qqv0-2ldNM_-0nA__AbX6WyFGsKXxrEzPmsV4SxTmgsieuOTKx3yY4_H7wAe7Jydl7PiHhU7YVmFe5QYuX1hbFE_MxIspekWqmUmI3dv4dMQ1mR3mJPYEJBLDQ9NoEXL33e7j0idGbgrdLM22oZ6gOiA0GscLIFz2nI5-KaHQZjMqUIBIDZGwnqXyvE')"></div>
                <div class="absolute bottom-4 left-4 z-10 glass-card bg-white/80 border border-white/20 px-4 py-2 rounded-full flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary text-sm">location_on</span>
                    <span class="text-xs font-label-caps text-primary font-bold">Royal Palms, Mumbai</span>
                </div>
                <a class="absolute inset-0 z-20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-primary/20 backdrop-blur-sm" href="https://maps.google.com" target="_blank">
                    <span class="bg-white text-primary px-6 py-2 rounded-full font-label-caps text-label-caps font-bold shadow-lg">Open in Google Maps</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Peace Divider -->
    <div class="my-24 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="rainbow-divider">
            <div class="peace-icon-anchor">
                <span class="material-symbols-outlined text-secondary text-3xl">public</span>
            </div>
        </div>
    </div>

    <!-- Client Reviews Carousel -->
    <section class="space-y-12 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="flex flex-col md:flex-row justify-between items-end gap-6">
            <div class="space-y-2">
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-3xl text-primary font-extrabold uppercase">Voices of Hope</h2>
                <p class="font-body-lg text-gray-700">Hear from the people whose lives have been touched by UPC.</p>
            </div>
            <div class="flex gap-4">
                <button class="p-4 rounded-full border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all active:scale-90" onclick="scrollCarousel(-1)">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>
                <button class="p-4 rounded-full border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all active:scale-90" onclick="scrollCarousel(1)">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
        
        <div class="flex gap-gutter overflow-x-auto scroll-smooth pb-8" id="review-carousel" style="scroll-snap-type: x mandatory;">
            <!-- Review 1 -->
            <div class="min-w-[320px] md:min-w-[400px] glass-card p-8 rounded-3xl space-y-6 flex-shrink-0 border border-white/20" style="scroll-snap-align: start;">
                <div class="flex text-amber-500">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <p class="italic text-on-surface-variant font-body-md text-sm text-gray-700">"The Universal Peace Council transformed our local school's infrastructure. Their transparent approach and radical empathy for the children made a lasting impact on our community."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full overflow-hidden bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCimUv0eb7eyY_JXBQQHOrM_NgWzRo0SIdM5IaBIGpvV0dZoh23S0jsfErZ7mzjSSIjAbJjGMDe5rxto0d-3Rt2tlkMVcEQmha3nw8WxCGuNUrUZAFxOejIQ6wkbnTgnhqP46fCKQadh2lhADEpZl4uPxAdqY3B3iHr79Uon9xf-x9z0SEHwhhSZNDpoR0MLTZUWysEfdVXeO2mVxYyUkZ36jNQ_JJ6eeuJCjMyTJPmh26El_GcPdP-')"></div>
                    <div>
                        <h4 class="font-title-md text-body-md font-bold text-primary text-sm">Dr. Sarah Jenkins</h4>
                        <p class="text-[9px] font-label-caps text-on-surface-variant font-bold text-gray-500">COMMUNITY COORDINATOR</p>
                    </div>
                </div>
            </div>
            
            <!-- Review 2 -->
            <div class="min-w-[320px] md:min-w-[400px] glass-card p-8 rounded-3xl space-y-6 flex-shrink-0 border-2 border-secondary/20" style="scroll-snap-align: start;">
                <div class="flex text-amber-500">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <p class="italic text-on-surface-variant font-body-md text-sm text-gray-700">"As a donor, I've never felt more connected to where my contributions go. Their reporting is precise, and the progress on animal shelters in Mumbai is truly phenomenal."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full overflow-hidden bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCAVsl7Y2lMhs3cZBS5xkDXvDK_bzeCaPKVKB8u_RX1pa2SoYmqRtMgjhkkXJa82LiTReBKYm0IolT3PwyTQi2cUXMoVs-kRHqzbZBhlZWPlqDvzCXNGqB6tVn3WUetrORdjSgmE8Hswvczv5T7_jFv0DSDZ_u5BVy0kLpbTdIXdoMO7zoRkXAQVsJyylSt5EKmZQ4Gl7YDcpz_K4CByd5-cjsmAZ1cVQ2tfzMszCJwrhd-zVl3c-6A')"></div>
                    <div>
                        <h4 class="font-title-md text-body-md font-bold text-primary text-sm">Vikram Malhotra</h4>
                        <p class="text-[9px] font-label-caps text-on-surface-variant font-bold text-gray-500">LEGACY PARTNER</p>
                    </div>
                </div>
            </div>
            
            <!-- Review 3 -->
            <div class="min-w-[320px] md:min-w-[400px] glass-card p-8 rounded-3xl space-y-6 flex-shrink-0 border border-white/20" style="scroll-snap-align: start;">
                <div class="flex text-amber-500">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <p class="italic text-on-surface-variant font-body-md text-sm text-gray-700">"The UPC education scholarships changed my life. I'm now studying to be a climate scientist, all thanks to the council's vision for a better world."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full overflow-hidden bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCwZzrprckzCsca5CyrjPBVcv8z0T67n4Au0m7yWKXT0ReMu1upKb6dfKl8ztMhy_6S75H092VAbpCyfHb27R0t20NC1VxFjWjzrux0YOII09IHsP2G4GVf1xEQGEPwQ9XElejg5dvx8XKuZY8X8EdW52fQs-ZtA1eI7u6QdxNjmfBlZGL7BcLQFxh4MhSOa4tWw2xeM2-iOAry-8cvKjWJEknuLmGqqlBvOq3COLetrMmzuf2JrshM')"></div>
                    <div>
                        <h4 class="font-title-md text-body-md font-bold text-primary text-sm">Amara Okezie</h4>
                        <p class="text-[9px] font-label-caps text-on-surface-variant font-bold text-gray-500">SCHOLARSHIP RECIPIENT</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script>
    function scrollCarousel(direction) {
        const container = document.getElementById('review-carousel');
        const cardWidth = container.firstElementChild.offsetWidth + 24; // Card width + gap
        container.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
    }
</script>
@endsection

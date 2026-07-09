@extends('layouts.app')

@section('title', 'About Us | Universal Peace Council')

@section('styles')
<style>
    .shader-bg {
        background-color: #fcf8ff;
        background-image: radial-gradient(at 0% 0%, hsla(289,100%,90%,1) 0, transparent 50%), 
                          radial-gradient(at 50% 0%, hsla(247,100%,94%,1) 0, transparent 50%), 
                          radial-gradient(at 100% 0%, hsla(289,100%,90%,1) 0, transparent 50%);
    }
</style>
@endsection

@section('content')
<main class="pt-10">


    <!-- Section: Our Vision for a Better World -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24 animate-content">
        <div class="glass-card p-8 md:p-16 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 rainbow-gradient"></div>
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="font-label-caps text-label-caps text-secondary tracking-[0.2em] mb-2 block font-bold">OUR DIRECTION</span>
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-4xl text-primary font-extrabold uppercase">Our Vision for a Better World</h2>
                <p class="font-body-md text-on-surface-variant text-gray-600 mt-2">
                    Guided by radical empathy, we operate across seven foundational pillars to build a more harmonious world.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Pillar 1 -->
                <div class="bg-white/30 border border-white/50 p-6 rounded-2xl flex gap-4 items-start hover:scale-[1.02] transition-transform duration-300">
                    <div class="p-3 bg-secondary/10 text-secondary rounded-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl font-bold">school</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-primary font-bold text-sm mb-1">1. Education</h4>
                        <p class="text-xs text-gray-700 leading-relaxed">Education for Underprivileged Children along with school supplies, snacks & uniforms.</p>
                    </div>
                </div>
                
                <!-- Pillar 2 -->
                <div class="bg-white/30 border border-white/50 p-6 rounded-2xl flex gap-4 items-start hover:scale-[1.02] transition-transform duration-300">
                    <div class="p-3 bg-primary/10 text-primary rounded-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl font-bold">menu_book</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-primary font-bold text-sm mb-1">2. Adult Literacy</h4>
                        <p class="text-xs text-gray-700 leading-relaxed">Adult Literacy with lessons in health & hygiene. They are also provided with Vocational Training.</p>
                    </div>
                </div>
                
                <!-- Pillar 3 -->
                <div class="bg-white/30 border border-white/50 p-6 rounded-2xl flex gap-4 items-start hover:scale-[1.02] transition-transform duration-300">
                    <div class="p-3 bg-emerald-100 text-emerald-800 rounded-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl font-bold">pets</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-primary font-bold text-sm mb-1">3. Animal Rescue</h4>
                        <p class="text-xs text-gray-700 leading-relaxed">Animal Rescue & Rehabilitation. Rescued animals are vet-checked, adoptable, or sheltered.</p>
                    </div>
                </div>
                
                <!-- Pillar 4 -->
                <div class="bg-white/30 border border-white/50 p-6 rounded-2xl flex gap-4 items-start hover:scale-[1.02] transition-transform duration-300">
                    <div class="p-3 bg-sky-100 text-sky-800 rounded-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl font-bold">medical_services</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-primary font-bold text-sm mb-1">4. Medical Camps</h4>
                        <p class="text-xs text-gray-700 leading-relaxed">Medical Camps are set up from time to time for free sugar, BP, Eye checkups & hospital referrals.</p>
                    </div>
                </div>
                
                <!-- Pillar 5 -->
                <div class="bg-white/30 border border-white/50 p-6 rounded-2xl flex gap-4 items-start hover:scale-[1.02] transition-transform duration-300">
                    <div class="p-3 bg-amber-100 text-amber-800 rounded-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl font-bold">forest</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-primary font-bold text-sm mb-1">5. Wildlife Conservation</h4>
                        <p class="text-xs text-gray-700 leading-relaxed">Wildlife Conservation is needed to save species from extinction & maintain ecological balance.</p>
                    </div>
                </div>
                
                <!-- Pillar 6 -->
                <div class="bg-white/30 border border-white/50 p-6 rounded-2xl flex gap-4 items-start hover:scale-[1.02] transition-transform duration-300">
                    <div class="p-3 bg-fuchsia-100 text-fuchsia-800 rounded-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl font-bold">eco</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-primary font-bold text-sm mb-1">6. Climate Awareness</h4>
                        <p class="text-xs text-gray-700 leading-relaxed">Environment & Climate Awareness seminars, cleanups, planting trees, and harvesting rainwater.</p>
                    </div>
                </div>

                <!-- Pillar 7 -->
                <div class="bg-white/30 border border-white/50 p-6 rounded-2xl flex gap-4 items-start hover:scale-[1.02] transition-transform duration-300 md:col-span-2 lg:col-span-3">
                    <div class="p-3 bg-indigo-100 text-indigo-800 rounded-xl flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl font-bold">palette</span>
                    </div>
                    <div>
                        <h4 class="font-title-md text-primary font-bold text-sm mb-1">7. Indian Arts & Crafts</h4>
                        <p class="text-xs text-gray-700 leading-relaxed">Encouraging Traditional Arts & Crafts of India by empowering rural artisans with tools and direct market access.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: Schools & Orphanages -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
            <div class="order-2 md:order-1 space-y-6">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                        <span class="material-symbols-outlined text-3xl">child_care</span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg-mobile text-primary font-bold" {!! \App\Helpers\ContentHelper::editable('about', 'init_4', 'title', 'text', 'Initiative 4 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_4', 'title', 'Education') }}</h2>
                </div>
                <p class="text-body-lg text-on-surface-variant text-gray-700" {!! \App\Helpers\ContentHelper::editable('about', 'init_4', 'desc', 'textarea', 'Initiative 4 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_4', 'desc', 'Running free bridging schools, scholarship campaigns, and digital literacy labs for girls.') }}</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="text-gray-700 font-semibold" {!! \App\Helpers\ContentHelper::editable('about', 'init_4', 'bullet_1', 'text', 'Bullet point 1') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_4', 'bullet_1', 'Full residential care and support') }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="text-gray-700 font-semibold" {!! \App\Helpers\ContentHelper::editable('about', 'init_4', 'bullet_2', 'text', 'Bullet point 2') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_4', 'bullet_2', 'Digital-first learning environments') }}</span>
                    </li>
                </ul>
            </div>
            <div class="order-1 md:order-2">
                <div class="glass-card p-2 rounded-[2.5rem]">
                    <img class="w-full h-96 object-cover rounded-[2rem]" src="{{ \App\Helpers\ContentHelper::get('about', 'init_4', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCT2G_Uzp0Z-jSbEcsY61CSfiqu0Hgs7qVeWj65vlS8NlXhN0rcgFrpuVR9-THQj8mTHuiXYqyZTzkETAXq6sexRsA54B4eEbWtUF4B5bqMQDMYKEAgV9E-34pTSvi1Z38sgqOXs1ttWrL97IJmI83hnC2uRmoo5zgyy1PTptdqQdlf-wZTc97pSukSuzwFicYGb7m8wpqRBqI3j_ImewcbhFUKX5eSUfC82xMrCdgtpv-ouUPX4cqp') }}" alt="Schools & Orphanages" {!! \App\Helpers\ContentHelper::editable('about', 'init_4', 'img', 'image', 'Education Image') !!}/>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Adult Literacy & Upskilling -->
    <section class="bg-primary py-24 text-on-primary">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="glass-card p-2 rounded-[2.5rem] border-white/10">
                    <img class="w-full h-96 object-cover rounded-[2rem]" src="{{ \App\Helpers\ContentHelper::get('about', 'init_5', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAXrgcd2jnXyJgxOpiQgtwBp9SFG7T8h007dfboaBmqP4tB_QdLUQHtmfvC1JyEOzkIf1p2r_vXfR2nGQqZxvSV29J8GHWShlbH1Q5MwOynkUiPtusR920uPu1uQUoq8ISHJvRVKp-FBcfWlSkjQpLKk5CMKlvyb-XiVq79FqRQls3MDZ3kx0TsiL0AgXKiV7_PZMiRnJ3_M-FOEZXcfrISunn90Sa1umPioY2dzfMVX9Itg0l881--') }}" alt="Adult Literacy" {!! \App\Helpers\ContentHelper::editable('about', 'init_5', 'img', 'image', 'Adult Literacy Image') !!}/>
                </div>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center text-white">
                            <span class="material-symbols-outlined text-3xl">person</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg-mobile text-white font-bold" {!! \App\Helpers\ContentHelper::editable('about', 'init_5', 'title', 'text', 'Initiative 5 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_5', 'title', 'Artisan Revival') }}</h2>
                    </div>
                    <p class="text-body-lg text-primary-fixed text-gray-200" {!! \App\Helpers\ContentHelper::editable('about', 'init_5', 'desc', 'textarea', 'Initiative 5 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_5', 'desc', 'Supporting traditional potters and saree weavers through fair market access and tools support.') }}</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-primary">
                        <div class="bg-white/10 p-4 rounded-xl">
                            <h4 class="font-title-md text-secondary-fixed mb-1 font-bold text-fuchsia-300 text-sm">Blue Pottery</h4>
                            <p class="text-xs opacity-85 text-white">Traditional hand-painted patterns on glazed ceramic kitchen and decor wares.</p>
                        </div>
                        <div class="bg-white/10 p-4 rounded-xl">
                            <h4 class="font-title-md text-secondary-fixed mb-1 font-bold text-fuchsia-300 text-sm">Traditional Bags</h4>
                            <p class="text-xs opacity-85 text-white">Promoting handcrafted eco-friendly cotton, canvas, and jute utility accessories.</p>
                        </div>
                        <div class="bg-white/10 p-4 rounded-xl">
                            <h4 class="font-title-md text-secondary-fixed mb-1 font-bold text-fuchsia-300 text-sm">Rope Articles</h4>
                            <p class="text-xs opacity-85 text-white">Upskilling local artisans in crafting durable, organic utility rope decor and goods.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="my-24 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="rainbow-divider">
            <div class="peace-icon-anchor">
                <span class="material-symbols-outlined text-secondary text-3xl">public</span>
            </div>
        </div>
    </div>

    <!-- Section 3: General Health Camps -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="flex flex-col md:flex-row gap-12 items-stretch">
            <div class="flex-1 glass-card p-8 rounded-3xl border-secondary/20 border-2">
                <div class="w-16 h-16 rounded-2xl bg-primary flex items-center justify-center text-white mb-6">
                    <span class="material-symbols-outlined text-3xl">medical_services</span>
                </div>
                <h3 class="font-headline-lg-mobile text-headline-lg-mobile text-primary mb-4 font-bold" {!! \App\Helpers\ContentHelper::editable('about', 'init_1', 'title', 'text', 'Initiative 1 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_1', 'title', 'Humanity & Health') }}</h3>
                <p class="text-body-md text-on-surface-variant leading-relaxed text-gray-700 mb-4" {!! \App\Helpers\ContentHelper::editable('about', 'init_1', 'desc', 'textarea', 'Initiative 1 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_1', 'desc', 'Running daily health clinics, emergency ambulance teams, and basic diagnostic support in rural belts.') }}</p>
                <p class="text-body-md text-on-surface-variant leading-relaxed text-gray-700"><strong class="text-secondary">Referrals:</strong> Patients with severe conditions are referred to major hospitals, often accompanied by direct financial assistance from our funds.</p>
            </div>
            <div class="flex-1">
                <img class="w-full h-full object-cover rounded-3xl min-h-[300px] border border-white/20" src="{{ \App\Helpers\ContentHelper::get('about', 'init_1', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDO0b5nYcQKimcBQxKDb1WkgnwQxE36FB_LaihLD4WYsMDEljMDbyDVCAe-LulBYDcRXJdtsJuAiqo7pnKniYK7HbBqXYGOumt0HxjT_ZMwKP-SwJ3IUKGFWzdyRMUjna8FvCxou-rawhsLPNAZMcwyX4kr-fwIDrpTiIhdtbJ-DRR4vMPzRWa0yBvSrSklo2daHfHQJb76Amu8nL8VIll59Ge4drZ9jhVR2xS1k69034ak4l5lMp2W') }}" alt="Medical Camps" {!! \App\Helpers\ContentHelper::editable('about', 'init_1', 'img', 'image', 'Medical Camps Image') !!}/>
            </div>
        </div>
    </section>

    <!-- Section 4: Animal Welfare -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="glass-card overflow-hidden rounded-[3rem]">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-12 space-y-6 flex flex-col justify-center">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-full bg-tertiary-container flex items-center justify-center text-tertiary-fixed">
                            <span class="material-symbols-outlined text-3xl">pets</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg-mobile text-primary font-bold" {!! \App\Helpers\ContentHelper::editable('about', 'init_2', 'title', 'text', 'Initiative 2 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_2', 'title', 'Animal Welfare') }}</h2>
                    </div>
                    <p class="text-body-lg text-on-surface-variant text-gray-700" {!! \App\Helpers\ContentHelper::editable('about', 'init_2', 'desc', 'textarea', 'Initiative 2 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_2', 'desc', 'Establishing stray shelters, veterinary clinics, and vaccination drives across Mumbai suburban pockets.') }}</p>
                    <a href="{{ route('gallery') }}" class="bg-secondary text-on-secondary self-start px-8 py-4 rounded-full font-bold glossy-button text-center">Meet our Rescues</a>
                </div>
                <div class="relative h-96 lg:h-auto">
                    <img class="w-full h-full object-cover" src="{{ \App\Helpers\ContentHelper::get('about', 'init_2', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAX4PSGHinXyLvB3c-doh8b6s9Se2Ma3Qzc2_iFmvZbMxc0MFNf7je2KIN7kcsJKwXEOkVxR_qgdL9Cvn3R3j517lroofbzVQz5ES23AE1xuZmXchyucnxdVZQUOI3G0WkbxphWIKeY7zh4-1E4eQGcHljtUGFz6AZkaSE03v1kTTEX9cu1Axrnw-n2MbNVkxv5ascO6jA7Wl33sVVXViLGhDFvKjoDhxLDpYeXfjDB8dp6tvpNFSQ-') }}" alt="Animal Welfare" {!! \App\Helpers\ContentHelper::editable('about', 'init_2', 'img', 'image', 'Animal Welfare Image') !!}/>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Climate Action -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-emerald-100 text-emerald-800 mb-6">
                <span class="material-symbols-outlined text-4xl">park</span>
            </div>
            <h2 class="font-headline-lg text-headline-lg-mobile text-primary mb-4 font-bold" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'title', 'text', 'Initiative 3 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'title', 'Climate Action') }}</h2>
            <p class="text-body-lg text-on-surface-variant text-gray-700" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'desc', 'textarea', 'Initiative 3 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'desc', 'Organizing river cleanups, local lake aeration systems, and urban rooftop afforestation campaigns.') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="glass-card p-6 rounded-2xl border-emerald-200 border flex flex-col justify-between">
                <div>
                    <img class="w-full h-48 object-cover rounded-xl mb-4" src="{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'img_1', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBxOZh8VE7eYPCvSKjGXUn0Dsy7aZsJIwIszHaj5Hz_1Ow3ZJpyuSDq4azT-T-EiX6_gt8dp96XxT6tbWaeoll60UY8JPZnJJLxhMDqHVhb5Mb5Mum9NdFHyyV2bHbELZiEIWLTbJhRPbQBmN5Dzux8vHgyXqGYnIILySBSB_rNc2bcbv0QvboY5lfX3_qqd4iJmTUmVJgvbVtBQziMG6Iwr01qwqS6gelx29k5vkyMnYrU1zJ-1AqR') }}" alt="Afforestation" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'img_1', 'image', 'Saplings Image') !!}/>
                    <h4 class="font-title-md text-primary font-bold mb-2" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'box_1_title', 'text', 'Box 1 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'box_1_title', '10k+ Saplings') }}</h4>
                    <p class="text-sm text-on-surface-variant text-gray-600" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'box_1_desc', 'textarea', 'Box 1 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'box_1_desc', 'Planted annually in and around Aarey Colony and Royal Palms. Transforming dry patches into green forests.') }}</p>
                </div>
            </div>
            <div class="glass-card p-6 rounded-2xl border-emerald-200 border flex flex-col justify-between">
                <div>
                    <img class="w-full h-48 object-cover rounded-xl mb-4" src="{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'img_2', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDVnczhTQeC98qq9eQGoe6MgEusKhVqXO2zJ5pngOUmR4vse3sRumSKEtGO6FFJHdGnzMBRTxEqMUnDBHw7JlH2sdCi_bbKvnCNxwJuwgJfHWzKq3S0bafNZ9w64c42RAGZS7alGYa-Bm-d8T7ZAm6YJjAyuOORwDLOPImNKeRXo9-5GJMCl5HAsBELACaI3hZ_87Uwc-stKvFCCX9G0aDpLrJThpWZ1SEj7mMtJMlnCiFqFfjSE6g2') }}" alt="Water Protection" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'img_2', 'image', 'Water Defense Image') !!}/>
                    <h4 class="font-title-md text-primary font-bold mb-2" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'box_2_title', 'text', 'Box 2 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'box_2_title', 'Water BOD Defense') }}</h4>
                    <p class="text-sm text-on-surface-variant text-gray-600" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'box_2_desc', 'textarea', 'Box 2 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'box_2_desc', 'Encouraging citizens not to throw flowers, coconuts, or milk in rivers to prevent oxygen depletion. Weekly cleanups.') }}</p>
                </div>
            </div>
            <div class="glass-card p-6 rounded-2xl border-emerald-200 border flex flex-col justify-between">
                <div>
                    <img class="w-full h-48 object-cover rounded-xl mb-4" src="{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'img_3', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCQwcoHMChcGQx2O5sENJvLw8PmXjmbRqzft2fuToVwW5vniI6c9yKxltN-1UZn-I5liZKsOvz3rr2UdXuhRJgh4zzYBv-YyHCW-yMzUP9Og90FjbM_EVQOfHWZ9wI_a7eu7arXumHkL-1vHy-N2UUkl8_V0BEOdTfhc4ZKQ6__Q1puxOeYpcKG5NuloJOWtkcrDX8TiBY7W6EL6_uh_5BaaBE27T2N6YdU33sfIJFuTuFFvHPq9IAW') }}" alt="Rooftop Mini-Jungles" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'img_3', 'image', 'Rooftop Image') !!}/>
                    <h4 class="font-title-md text-primary font-bold mb-2" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'box_3_title', 'text', 'Box 3 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'box_3_title', 'Rooftop Mini-Jungles') }}</h4>
                    <p class="text-sm text-on-surface-variant text-gray-600" {!! \App\Helpers\ContentHelper::editable('about', 'init_3', 'box_3_desc', 'textarea', 'Box 3 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_3', 'box_3_desc', 'Training homeowners to plant greens on roofs, lowering household heat index and attracting birds and bees.') }}</p>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

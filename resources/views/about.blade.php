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
    <!-- Hero Section: Founder Narrative -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="glass-card rounded-[2rem] overflow-hidden p-4 rotate-3 transform transition-transform hover:rotate-0 duration-500">
                    <img class="w-full aspect-square object-cover rounded-[1.5rem]" src="{{ \App\Helpers\ContentHelper::get('about', 'founder', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuC424L1ndM-_hVAwCO4zMi4i7CAIJtfB9RDzdl2-FmM1r_3p63d1nDusUhZkSxLlPegD6ODS_GDjsqbFMgWlBBT4MX4fGuPjDWGDnpNouzNBfEyjy4Sq-YXJt0NMBT2S8Zl8nZu-79NIT0_zvck4qm_uDIB3z3l5QAbQNtbfR0bW0drokUw8yv76vixPpSTxodyyAWBnsww93IN4AN2u1TUdBitYjg1vyPxv-Bf4t-mJaGyvBdQ48G8') }}" alt="Dr. Soma Basu Sharma" {!! \App\Helpers\ContentHelper::editable('about', 'founder', 'img', 'image', 'Founder Image') !!}/>
                </div>
                <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-secondary/20 blur-3xl rounded-full"></div>
            </div>
            <div class="space-y-8">
                <div>
                    <span class="font-label-caps text-label-caps text-secondary tracking-[0.2em] mb-4 block font-bold" {!! \App\Helpers\ContentHelper::editable('about', 'founder', 'title', 'text', 'Founder Section Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'founder', 'title', 'OUR VISIONARY FOUNDER') }}</span>
                    <h1 class="font-headline-lg text-headline-lg-mobile md:text-5xl font-extrabold text-primary mb-6" {!! \App\Helpers\ContentHelper::editable('about', 'founder', 'name', 'text', 'Founder Name') !!}>{{ \App\Helpers\ContentHelper::get('about', 'founder', 'name', 'Dr. Soma Basu Sharma') }}</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed italic text-indigo-900 font-semibold" {!! \App\Helpers\ContentHelper::editable('about', 'vision', 'description', 'textarea', 'Vision Quote') !!}>
                        "{{ \App\Helpers\ContentHelper::get('about', 'vision', 'description', 'The idea is to leave the world at least same, if not better than what we received.') }}"
                    </p>
                </div>
                <div class="space-y-4 font-body-md text-body-md text-on-surface text-gray-700">
                    <p {!! \App\Helpers\ContentHelper::editable('about', 'founder', 'bio', 'textarea', 'Founder Biography') !!}>{{ \App\Helpers\ContentHelper::get('about', 'founder', 'bio', 'Dr. Soma Basu Sharma is a visionary leader, environment scientist, and child activist based in Royal Palms, Mumbai. She dedicated her life to building community structures that merge modern sciences with empathy.') }}</p>
                </div>
                <div class="flex gap-4">
                    <div class="glass-card px-6 py-4 rounded-2xl flex flex-col items-center justify-center flex-1">
                        <span class="font-headline-lg text-headline-lg-mobile text-secondary font-extrabold">15+</span>
                        <span class="font-label-caps text-label-caps text-on-surface-variant font-bold">Years Active</span>
                    </div>
                    <div class="glass-card px-6 py-4 rounded-2xl flex flex-col items-center justify-center flex-1">
                        <span class="font-headline-lg text-headline-lg-mobile text-secondary font-extrabold">124k</span>
                        <span class="font-label-caps text-label-caps text-on-surface-variant font-bold">Lives Impacted</span>
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
                    <div class="grid grid-cols-2 gap-4 text-primary">
                        <div class="bg-white/10 p-4 rounded-xl">
                            <h4 class="font-title-md text-secondary-fixed mb-1 font-bold text-fuchsia-300" {!! \App\Helpers\ContentHelper::editable('about', 'init_5', 'box_1_title', 'text', 'Box 1 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_5', 'box_1_title', 'Financial Literacy') }}</h4>
                            <p class="text-sm opacity-80 text-white" {!! \App\Helpers\ContentHelper::editable('about', 'init_5', 'box_1_desc', 'textarea', 'Box 1 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_5', 'box_1_desc', 'Banking, savings, phone transactions, and micro-loan management.') }}</p>
                        </div>
                        <div class="bg-white/10 p-4 rounded-xl">
                            <h4 class="font-title-md text-secondary-fixed mb-1 font-bold text-fuchsia-300" {!! \App\Helpers\ContentHelper::editable('about', 'init_5', 'box_2_title', 'text', 'Box 2 Title') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_5', 'box_2_title', 'Practical Skills') }}</h4>
                            <p class="text-sm opacity-80 text-white" {!! \App\Helpers\ContentHelper::editable('about', 'init_5', 'box_2_desc', 'textarea', 'Box 2 Description') !!}>{{ \App\Helpers\ContentHelper::get('about', 'init_5', 'box_2_desc', 'Hygiene, first-aid, and basic self-defense drills.') }}</p>
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

    <!-- Team Section -->
    <section class="bg-surface-container py-24">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="text-center mb-16">
                <span class="font-label-caps text-secondary tracking-widest block mb-4 font-bold">MEET THE LEADERS</span>
                <h2 class="font-headline-lg text-headline-lg-mobile text-primary font-bold">Our Global Team</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter">
                <div class="glass-card p-6 flex flex-col items-center text-center">
                    <img class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-secondary" src="{{ \App\Helpers\ContentHelper::get('about', 'team_1', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS') }}" alt="Dr. Soma Sharma" {!! \App\Helpers\ContentHelper::editable('about', 'team_1', 'img', 'image', 'Leader 1 Image') !!}/>
                    <h4 class="font-title-md text-primary font-bold mb-1" {!! \App\Helpers\ContentHelper::editable('about', 'team_1', 'name', 'text', 'Leader 1 Name') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_1', 'name', 'Dr. Soma Sharma') }}</h4>
                    <p class="text-xs text-secondary font-bold uppercase tracking-wider mb-3" {!! \App\Helpers\ContentHelper::editable('about', 'team_1', 'role', 'text', 'Leader 1 Role') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_1', 'role', 'Founder & Director') }}</p>
                    <p class="text-xs text-on-surface-variant" {!! \App\Helpers\ContentHelper::editable('about', 'team_1', 'bio', 'textarea', 'Leader 1 Bio') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_1', 'bio', 'Overseeing scientific mapping of environment and health grids.') }}</p>
                </div>
                <div class="glass-card p-6 flex flex-col items-center text-center">
                    <img class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-white/20" src="{{ \App\Helpers\ContentHelper::get('about', 'team_2', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS') }}" alt="Prof. Amit Roy" {!! \App\Helpers\ContentHelper::editable('about', 'team_2', 'img', 'image', 'Leader 2 Image') !!}/>
                    <h4 class="font-title-md text-primary font-bold mb-1" {!! \App\Helpers\ContentHelper::editable('about', 'team_2', 'name', 'text', 'Leader 2 Name') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_2', 'name', 'Prof. Amit Roy') }}</h4>
                    <p class="text-xs text-secondary font-bold uppercase tracking-wider mb-3" {!! \App\Helpers\ContentHelper::editable('about', 'team_2', 'role', 'text', 'Leader 2 Role') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_2', 'role', 'Climate Co-ordinator') }}</p>
                    <p class="text-xs text-on-surface-variant" {!! \App\Helpers\ContentHelper::editable('about', 'team_2', 'bio', 'textarea', 'Leader 2 Bio') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_2', 'bio', 'Directing Solar Aerator deployments and urban heat metrics.') }}</p>
                </div>
                <div class="glass-card p-6 flex flex-col items-center text-center">
                    <img class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-white/20" src="{{ \App\Helpers\ContentHelper::get('about', 'team_3', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS') }}" alt="Sarah D'Souza" {!! \App\Helpers\ContentHelper::editable('about', 'team_3', 'img', 'image', 'Leader 3 Image') !!}/>
                    <h4 class="font-title-md text-primary font-bold mb-1" {!! \App\Helpers\ContentHelper::editable('about', 'team_3', 'name', 'text', 'Leader 3 Name') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_3', 'name', "Sarah D'Souza") }}</h4>
                    <p class="text-xs text-secondary font-bold uppercase tracking-wider mb-3" {!! \App\Helpers\ContentHelper::editable('about', 'team_3', 'role', 'text', 'Leader 3 Role') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_3', 'role', 'Humanity Camps Lead') }}</p>
                    <p class="text-xs text-on-surface-variant" {!! \App\Helpers\ContentHelper::editable('about', 'team_3', 'bio', 'textarea', 'Leader 3 Bio') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_3', 'bio', 'Managing bridging schools setups and diagnostics distributions.') }}</p>
                </div>
                <div class="glass-card p-6 flex flex-col items-center text-center">
                    <img class="w-32 h-32 rounded-full object-cover mb-6 border-4 border-white/20" src="{{ \App\Helpers\ContentHelper::get('about', 'team_4', 'img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS') }}" alt="Dr. Kunal Sen" {!! \App\Helpers\ContentHelper::editable('about', 'team_4', 'img', 'image', 'Leader 4 Image') !!}/>
                    <h4 class="font-title-md text-primary font-bold mb-1" {!! \App\Helpers\ContentHelper::editable('about', 'team_4', 'name', 'text', 'Leader 4 Name') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_4', 'name', 'Dr. Kunal Sen') }}</h4>
                    <p class="text-xs text-secondary font-bold uppercase tracking-wider mb-3" {!! \App\Helpers\ContentHelper::editable('about', 'team_4', 'role', 'text', 'Leader 4 Role') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_4', 'role', 'Chief Stray Vet') }}</p>
                    <p class="text-xs text-on-surface-variant" {!! \App\Helpers\ContentHelper::editable('about', 'team_4', 'bio', 'textarea', 'Leader 4 Bio') !!}>{{ \App\Helpers\ContentHelper::get('about', 'team_4', 'bio', 'Performing life saving stray surgeries and handling vaccination drives.') }}</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

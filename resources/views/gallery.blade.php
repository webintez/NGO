@extends('layouts.app')

@section('title', 'Gallery & Artisan Shop | Universal Peace Council')

@section('styles')
<style>
    /* Masonry grid support */
    .masonry-grid {
        column-count: 1;
        column-gap: 24px;
    }
    @media (min-width: 768px) {
        .masonry-grid {
            column-count: 2;
        }
    }
    @media (min-width: 1024px) {
        .masonry-grid {
            column-count: 3;
        }
    }
    .masonry-item {
        break-inside: avoid;
        margin-bottom: 24px;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .hover-overlay {
        background: linear-gradient(180deg, rgba(19, 12, 95, 0) 0%, rgba(19, 12, 95, 0.85) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .masonry-item:hover .hover-overlay {
        opacity: 1;
    }
</style>
@endsection

@section('content')
<main class="pt-10">
    <!-- Gallery Hero -->
    <section class="py-12 text-center max-w-3xl mx-auto px-margin-mobile">
        <span class="font-label-caps text-label-caps text-secondary tracking-widest block mb-4 font-bold" {!! \App\Helpers\ContentHelper::editable('gallery', 'hero', 'badge', 'text', 'Badge') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'hero', 'badge', 'IMPACT IN ACTIONS') }}</span>
        <h1 class="font-headline-lg text-headline-lg-mobile md:text-5xl font-extrabold text-primary mb-6" {!! \App\Helpers\ContentHelper::editable('gallery', 'hero', 'title', 'text', 'Hero Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'hero', 'title', 'Gallery & Field Logs') }}</h1>
        <p class="text-body-lg text-on-surface-variant text-gray-700 mb-10" {!! \App\Helpers\ContentHelper::editable('gallery', 'hero', 'subtitle', 'textarea', 'Hero Subtitle') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'hero', 'subtitle', 'Visual proof of radical empathy. Browse snapshots of our environmental restoration projects, stray rescues, medical setups, and vocational school classes.') }}</p>
        
        <!-- Filter Buttons -->
        <div class="flex flex-wrap gap-3 justify-center mb-8">
            <button class="gallery-filter px-6 py-3 rounded-full bg-primary text-on-primary shadow-lg font-label-caps text-label-caps font-bold transition-all" data-category="all" onclick="filterGallery('all')">All</button>
            <button class="gallery-filter px-6 py-3 rounded-full glass-card text-primary font-label-caps text-label-caps hover:bg-primary hover:text-on-primary transition-all font-bold" data-category="humanity" onclick="filterGallery('humanity')">Humanity & Health</button>
            <button class="gallery-filter px-6 py-3 rounded-full glass-card text-primary font-label-caps text-label-caps hover:bg-primary hover:text-on-primary transition-all font-bold" data-category="animals" onclick="filterGallery('animals')">Animal Welfare</button>
            <button class="gallery-filter px-6 py-3 rounded-full glass-card text-primary font-label-caps text-label-caps hover:bg-primary hover:text-on-primary transition-all font-bold" data-category="climate" onclick="filterGallery('climate')">Climate & Water</button>
            <button class="gallery-filter px-6 py-3 rounded-full glass-card text-primary font-label-caps text-label-caps hover:bg-primary hover:text-on-primary transition-all font-bold" data-category="artisans" onclick="filterGallery('artisans')">Artisan Crafts</button>
        </div>
    </section>

    <!-- Gallery Masonry Grid -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="masonry-grid" id="gallery-grid">
            <!-- Item 1: Humanity -->
            <div class="masonry-item humanity cursor-pointer group relative overflow-hidden rounded-xl glass-card border border-white/20">
                <img class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110" src="{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_1_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDOTP--x46oybEB0uJNigd39GnqPfsIubWWlk1aGsFwUD88J4oErRjMb1SGQzjvRG9piuwMKifDX0f7DuAr8WwLOmTVyDpHKwyw2y5C2EH6RtfF3TS_U4o3Y89m6_kSIue3ZFa6r94DKq7CtVWCwqqczslyKIkrR1D7F5vf_m1edLiJQnesibtnT2eZZAQsuLMT8ZkurO3P7Srpe1IRs9lqramaRSCtrXlIfKIrLhOsmhIXFeqV-Vmb') }}" alt="Medical Camp" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_1_img', 'image', 'Item 1 Image') !!}/>
                <div class="hover-overlay absolute inset-0 flex flex-col justify-end p-6 text-white" onclick="openLightbox('{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_1_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDOTP--x46oybEB0uJNigd39GnqPfsIubWWlk1aGsFwUD88J4oErRjMb1SGQzjvRG9piuwMKifDX0f7DuAr8WwLOmTVyDpHKwyw2y5C2EH6RtfF3TS_U4o3Y89m6_kSIue3ZFa6r94DKq7CtVWCwqqczslyKIkrR1D7F5vf_m1edLiJQnesibtnT2eZZAQsuLMT8ZkurO3P7Srpe1IRs9lqramaRSCtrXlIfKIrLhOsmhIXFeqV-Vmb') }}', '{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_1_caption', 'Medical Relief Camp in Rural Mumbai') }}')">
                    <span class="font-label-caps text-label-caps mb-2 tracking-widest opacity-80 uppercase font-bold text-fuchsia-300">Humanity & Health</span>
                    <h3 class="font-title-md text-lg font-bold uppercase leading-tight" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_1_title', 'text', 'Item 1 Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_1_title', 'Medical Relief Camps') }}</h3>
                </div>
            </div>
            <!-- Item 2: Climate -->
            <div class="masonry-item climate cursor-pointer group relative overflow-hidden rounded-xl glass-card border border-white/20">
                <img class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110" src="{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_2_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBiE7jwpWzOcQ9BiyJKxkya_ob6_ENpf7QoCx_zo2IpjUXn-SuvziEcP-70hZ98Dzr-IyG_pKRePbV_xNpqw7sKf_ocLRu7F0cmlz24hYGXfeqZ8VBQfc7h8cLfCXxzfCUZ8JutUCDUmkEkpNKNP4ogWGNvCguyzwiXQAiy0veNKBY79-LcLbWfrQTXNmvgjcKMvGpV2ucU0z5f4RrobXah1JFS9xARdmVCCq_1N79m6Q1m9dtPrFeh') }}" alt="Afforestation Drive" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_2_img', 'image', 'Item 2 Image') !!}/>
                <div class="hover-overlay absolute inset-0 flex flex-col justify-end p-6 text-white" onclick="openLightbox('{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_2_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBiE7jwpWzOcQ9BiyJKxkya_ob6_ENpf7QoCx_zo2IpjUXn-SuvziEcP-70hZ98Dzr-IyG_pKRePbV_xNpqw7sKf_ocLRu7F0cmlz24hYGXfeqZ8VBQfc7h8cLfCXxzfCUZ8JutUCDUmkEkpNKNP4ogWGNvCguyzwiXQAiy0veNKBY79-LcLbWfrQTXNmvgjcKMvGpV2ucU0z5f4RrobXah1JFS9xARdmVCCq_1N79m6Q1m9dtPrFeh') }}', '{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_2_caption', 'Before and After Afforestation Project') }}')">
                    <span class="font-label-caps text-label-caps mb-2 tracking-widest opacity-80 uppercase font-bold text-fuchsia-300">Climate</span>
                    <h3 class="font-title-md text-lg font-bold uppercase leading-tight" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_2_title', 'text', 'Item 2 Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_2_title', 'Afforestation Drive') }}</h3>
                </div>
            </div>
            <!-- Item 3: Animals -->
            <div class="masonry-item animals cursor-pointer group relative overflow-hidden rounded-xl glass-card border border-white/20">
                <img class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110" src="{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_3_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDU9GWH0fePWgxgdycCk2cuewevbJyPG-krhic0rI5MbE8deVL5RBMTGjH_eXY0AA_Nhjf_nmjMp0rGW8DTbltDQU3N_-WUEUA8zamkWKIppHcLdrlX8QTGNVpjFOwlGEaFjl7fhw5CI-0P8opyC_NjF4yrqbI1vUk49k4UIX5tkdrkqdig3B42qFLzeR3FeO4xaDAJ_G3wI7DtbzxP2R52mD44RjgJTyaTnZkhL6kohj9TWXEd-ZqZ') }}" alt="Stray Care" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_3_img', 'image', 'Item 3 Image') !!}/>
                <div class="hover-overlay absolute inset-0 flex flex-col justify-end p-6 text-white" onclick="openLightbox('{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_3_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDU9GWH0fePWgxgdycCk2cuewevbJyPG-krhic0rI5MbE8deVL5RBMTGjH_eXY0AA_Nhjf_nmjMp0rGW8DTbltDQU3N_-WUEUA8zamkWKIppHcLdrlX8QTGNVpjFOwlGEaFjl7fhw5CI-0P8opyC_NjF4yrqbI1vUk49k4UIX5tkdrkqdig3B42qFLzeR3FeO4xaDAJ_G3wI7DtbzxP2R52mD44RjgJTyaTnZkhL6kohj9TWXEd-ZqZ') }}', '{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_3_caption', 'Community Stray Animal Care') }}')">
                    <span class="font-label-caps text-label-caps mb-2 tracking-widest opacity-80 uppercase font-bold text-fuchsia-300">Animals</span>
                    <h3 class="font-title-md text-lg font-bold uppercase leading-tight" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_3_title', 'text', 'Item 3 Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_3_title', 'Stray Care Program') }}</h3>
                </div>
            </div>
            <!-- Item 4: Artisans -->
            <div class="masonry-item artisans cursor-pointer group relative overflow-hidden rounded-xl glass-card border border-white/20">
                <img class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110" src="{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_4_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBGrmxuABT4jn6qc7pXGm8kTi1BUJPnk8qtY3x4v-Kjma80ki0iRwy9aybU24pgYDeLzPDV66Y77zwQsilhb9P9HLgX8Xsn4-DQAFU8tR5t2p_ymtA_y6kl3SwGc0Fo8Ow19kn6Cuz9JAJsaZF9R89ojz4YYhgMasMbvKOx7E8k3M-cUbfvEN7ZOzGI098Uh7NNTTHLgkO54tA7qMLJB4qmGer5w6eQQe3qTqbh3lXKvVHIyWrpwqSP') }}" alt="Artisans weaving" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_4_img', 'image', 'Item 4 Image') !!}/>
                <div class="hover-overlay absolute inset-0 flex flex-col justify-end p-6 text-white" onclick="openLightbox('{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_4_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBGrmxuABT4jn6qc7pXGm8kTi1BUJPnk8qtY3x4v-Kjma80ki0iRwy9aybU24pgYDeLzPDV66Y77zwQsilhb9P9HLgX8Xsn4-DQAFU8tR5t2p_ymtA_y6kl3SwGc0Fo8Ow19kn6Cuz9JAJsaZF9R89ojz4YYhgMasMbvKOx7E8k3M-cUbfvEN7ZOzGI098Uh7NNTTHLgkO54tA7qMLJB4qmGer5w6eQQe3qTqbh3lXKvVHIyWrpwqSP') }}', '{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_4_caption', 'Local Artisans Weaving Sarees') }}')">
                    <span class="font-label-caps text-label-caps mb-2 tracking-widest opacity-80 uppercase font-bold text-fuchsia-300">Artisans</span>
                    <h3 class="font-title-md text-lg font-bold uppercase leading-tight" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_4_title', 'text', 'Item 4 Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_4_title', 'Mastering Craftsmanship') }}</h3>
                </div>
            </div>
            <!-- Item 5: Humanity -->
            <div class="masonry-item humanity cursor-pointer group relative overflow-hidden rounded-xl glass-card border border-white/20">
                <img class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110" src="{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_5_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAhmP00XI_r8KWTAJPupV1SAYABFXN83S1EEL45IlKjaAdVDbRavZX2Xuw4JfcZfaGIKMs9vJfLJUoE4t1z5AokJv24QD4gVkeJ2sNteCJd_pxRkB5UI4kHiQl6f_Koow_HmSaACkgWFlNcE-rFTm0CQqLKrRuaODpSoJYix2EYjGOrt_m1vto8nsaLo8wzyfsXSLIL1W-b9I4-NwdlX6SdYgTRaPEiSD-ik_GuMT6Vr90L9Jf8yKx3') }}" alt="Education for All" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_5_img', 'image', 'Item 5 Image') !!}/>
                <div class="hover-overlay absolute inset-0 flex flex-col justify-end p-6 text-white" onclick="openLightbox('{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_5_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAhmP00XI_r8KWTAJPupV1SAYABFXN83S1EEL45IlKjaAdVDbRavZX2Xuw4JfcZfaGIKMs9vJfLJUoE4t1z5AokJv24QD4gVkeJ2sNteCJd_pxRkB5UI4kHiQl6f_Koow_HmSaACkgWFlNcE-rFTm0CQqLKrRuaODpSoJYix2EYjGOrt_m1vto8nsaLo8wzyfsXSLIL1W-b9I4-NwdlX6SdYgTRaPEiSD-ik_GuMT6Vr90L9Jf8yKx3') }}', '{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_5_caption', 'Children in Eco-friendly Bridging School') }}')">
                    <span class="font-label-caps text-label-caps mb-2 tracking-widest opacity-80 uppercase font-bold text-fuchsia-300">Humanity & Education</span>
                    <h3 class="font-title-md text-lg font-bold uppercase leading-tight" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_5_title', 'text', 'Item 5 Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_5_title', 'Education for All') }}</h3>
                </div>
            </div>
            <!-- Item 6: Climate -->
            <div class="masonry-item climate cursor-pointer group relative overflow-hidden rounded-xl glass-card border border-white/20">
                <img class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110" src="{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_6_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCjh6w7rGSRxv2hxp_ocaEHbI5oaAppt4g-DE8BapFuFxUJFbXzmtPXK0mZnuRYHiu66kdzZlTY1tTQ62H2h5i0ahcT3PppaFv37nNbrJxDk2ZoAMB-ESY9JNiOOnX8y136cl7Y8GvfokYetopyzVtzSv5lmim_Rzx_xbEGA9GGe0LbMkuwpHoUMooNDtu66bRLZiLMO8cjiBgY61kg7OqpxIQwSHoFbTWIlkNXBpADi1SfP3DINDX_') }}" alt="Rooftop jungles" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_6_img', 'image', 'Item 6 Image') !!}/>
                <div class="hover-overlay absolute inset-0 flex flex-col justify-end p-6 text-white" onclick="openLightbox('{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_6_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCjh6w7rGSRxv2hxp_ocaEHbI5oaAppt4g-DE8BapFuFxUJFbXzmtPXK0mZnuRYHiu66kdzZlTY1tTQ62H2h5i0ahcT3PppaFv37nNbrJxDk2ZoAMB-ESY9JNiOOnX8y136cl7Y8GvfokYetopyzVtzSv5lmim_Rzx_xbEGA9GGe0LbMkuwpHoUMooNDtu66bRLZiLMO8cjiBgY61kg7OqpxIQwSHoFbTWIlkNXBpADi1SfP3DINDX_') }}', '{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_6_caption', 'Mini Rooftop Gardens in Mumbai') }}')">
                    <span class="font-label-caps text-label-caps mb-2 tracking-widest opacity-80 uppercase font-bold text-fuchsia-300">Climate</span>
                    <h3 class="font-title-md text-lg font-bold uppercase leading-tight" {!! \App\Helpers\ContentHelper::editable('gallery', 'masonry', 'item_6_title', 'text', 'Item 6 Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'masonry', 'item_6_title', 'Urban Rooftop Jungles') }}</h3>
                </div>
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

    <!-- Indigenous Artisan Shop Showcase -->
    <section class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto mb-24">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="font-label-caps text-label-caps text-secondary tracking-widest block mb-4 font-bold" {!! \App\Helpers\ContentHelper::editable('gallery', 'artisan', 'badge', 'text', 'Shop Badge') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'artisan', 'badge', 'ARTISAN ENCOURAGEMENT') }}</span>
            <h2 class="font-headline-lg text-headline-lg-mobile md:text-4xl font-extrabold text-primary mb-4" {!! \App\Helpers\ContentHelper::editable('gallery', 'artisan', 'title', 'text', 'Shop Title') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'artisan', 'title', 'Indigenous Support Shop') }}</h2>
            <p class="text-body-lg text-on-surface-variant text-gray-700" {!! \App\Helpers\ContentHelper::editable('gallery', 'artisan', 'desc', 'textarea', 'Shop Description') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'artisan', 'desc', 'We help rural potters and traditional weavers reach urban markets. Direct inquires facilitate order logistics, and 100% of proceeds go directly to the artisan cooperative.') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <!-- Product 1 -->
            <div class="glass-card p-6 rounded-2xl flex flex-col border border-white/20 hover:scale-[1.02] transition-transform duration-300">
                <img class="w-full h-56 object-cover rounded-xl mb-4 border border-white/20" src="{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_1_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBGrmxuABT4jn6qc7pXGm8kTi1BUJPnk8qtY3x4v-Kjma80ki0iRwy9aybU24pgYDeLzPDV66Y77zwQsilhb9P9HLgX8Xsn4-DQAFU8tR5t2p_ymtA_y6kl3SwGc0Fo8Ow19kn6Cuz9JAJsaZF9R89ojz4YYhgMasMbvKOx7E8k3M-cUbfvEN7ZOzGI098Uh7NNTTHLgkO54tA7qMLJB4qmGer5w6eQQe3qTqbh3lXKvVHIyWrpwqSP') }}" alt="Jaipur Blue Pottery" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_1_img', 'image', 'Product 1 Image') !!}/>
                <div class="flex-grow">
                    <span class="text-[9px] font-bold text-secondary uppercase font-label-caps tracking-widest block mb-1" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_1_category', 'text', 'Product 1 Category') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_1_category', 'Glazed Ceramics') }}</span>
                    <h3 class="font-title-md text-primary font-bold text-lg mb-2" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_1_name', 'text', 'Product 1 Name') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_1_name', 'Jaipur Blue Pottery') }}</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-6" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_1_desc', 'textarea', 'Product 1 Description') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_1_desc', 'Exquisite hand-painted designs on traditional quartz glazed pottery, crafted by master generational potters.') }}</p>
                </div>
                <button onclick="openInquiryModal('{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_1_name', 'Jaipur Blue Pottery') }}')" class="w-full bg-primary text-white py-3 rounded-xl font-bold font-label-caps text-xs hover:bg-secondary transition-colors text-center active:scale-95 shadow-md mt-auto">
                    Inquire to Buy
                </button>
            </div>

            <!-- Product 2 -->
            <div class="glass-card p-6 rounded-2xl flex flex-col border border-white/20 hover:scale-[1.02] transition-transform duration-300">
                <img class="w-full h-56 object-cover rounded-xl mb-4 border border-white/20" src="{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_2_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBGrmxuABT4jn6qc7pXGm8kTi1BUJPnk8qtY3x4v-Kjma80ki0iRwy9aybU24pgYDeLzPDV66Y77zwQsilhb9P9HLgX8Xsn4-DQAFU8tR5t2p_ymtA_y6kl3SwGc0Fo8Ow19kn6Cuz9JAJsaZF9R89ojz4YYhgMasMbvKOx7E8k3M-cUbfvEN7ZOzGI098Uh7NNTTHLgkO54tA7qMLJB4qmGer5w6eQQe3qTqbh3lXKvVHIyWrpwqSP') }}" alt="Traditional Handcrafted Bags" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_2_img', 'image', 'Product 2 Image') !!}/>
                <div class="flex-grow">
                    <span class="text-[9px] font-bold text-secondary uppercase font-label-caps tracking-widest block mb-1" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_2_category', 'text', 'Product 2 Category') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_2_category', 'Eco-Accessories') }}</span>
                    <h3 class="font-title-md text-primary font-bold text-lg mb-2" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_2_name', 'text', 'Product 2 Name') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_2_name', 'Traditional Handcrafted Bags') }}</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-6" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_2_desc', 'textarea', 'Product 2 Description') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_2_desc', 'Handwoven utility totes, bags, and articles made using organic jute and cotton with ancestral weaving patterns.') }}</p>
                </div>
                <button onclick="openInquiryModal('{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_2_name', 'Traditional Handcrafted Bags') }}')" class="w-full bg-primary text-white py-3 rounded-xl font-bold font-label-caps text-xs hover:bg-secondary transition-colors text-center active:scale-95 shadow-md mt-auto">
                    Inquire to Buy
                </button>
            </div>

            <!-- Product 3 -->
            <div class="glass-card p-6 rounded-2xl flex flex-col border border-white/20 hover:scale-[1.02] transition-transform duration-300">
                <img class="w-full h-56 object-cover rounded-xl mb-4 border border-white/20" src="{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_3_img', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBGrmxuABT4jn6qc7pXGm8kTi1BUJPnk8qtY3x4v-Kjma80ki0iRwy9aybU24pgYDeLzPDV66Y77zwQsilhb9P9HLgX8Xsn4-DQAFU8tR5t2p_ymtA_y6kl3SwGc0Fo8Ow19kn6Cuz9JAJsaZF9R89ojz4YYhgMasMbvKOx7E8k3M-cUbfvEN7ZOzGI098Uh7NNTTHLgkO54tA7qMLJB4qmGer5w6eQQe3qTqbh3lXKvVHIyWrpwqSP') }}" alt="Rope Decor & Utility Goods" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_3_img', 'image', 'Product 3 Image') !!}/>
                <div class="flex-grow">
                    <span class="text-[9px] font-bold text-secondary uppercase font-label-caps tracking-widest block mb-1" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_3_category', 'text', 'Product 3 Category') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_3_category', 'Organic Utility') }}</span>
                    <h3 class="font-title-md text-primary font-bold text-lg mb-2" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_3_name', 'text', 'Product 3 Name') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_3_name', 'Rope Decor & Utility Goods') }}</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-6" {!! \App\Helpers\ContentHelper::editable('gallery', 'products', 'product_3_desc', 'textarea', 'Product 3 Description') !!}>{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_3_desc', 'Sturdy utility articles, hanging baskets, and home decor items crafted from eco-friendly, locally sourced ropes.') }}</p>
                </div>
                <button onclick="openInquiryModal('{{ \App\Helpers\ContentHelper::get('gallery', 'products', 'product_3_name', 'Rope Decor & Utility Goods') }}')" class="w-full bg-primary text-white py-3 rounded-xl font-bold font-label-caps text-xs hover:bg-secondary transition-colors text-center active:scale-95 shadow-md mt-auto">
                    Inquire to Buy
                </button>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="fixed inset-0 z-[100] hidden bg-black/95 backdrop-blur-xl flex items-center justify-center p-4" id="lightbox">
        <button class="absolute top-8 right-8 text-white hover:text-secondary transition-colors" onclick="closeLightbox()">
            <span class="material-symbols-outlined text-4xl">close</span>
        </button>
        <div class="max-w-5xl w-full flex flex-col items-center">
            <img class="max-h-[80vh] w-auto rounded-lg border-2 border-white/20 shadow-2xl" id="lightbox-img" src=""/>
            <div class="mt-8 text-center">
                <h3 class="text-white font-headline-lg-mobile text-xl uppercase tracking-wide font-bold" id="lightbox-caption"></h3>
            </div>
        </div>
    </div>

    <!-- Artisan Product Inquiry Modal -->
    <div class="fixed inset-0 z-[100] hidden bg-primary/95 backdrop-blur-xl flex items-center justify-center p-4" id="inquiry-modal">
        <div class="glass-card p-8 rounded-3xl max-w-md w-full border border-white/20 shadow-2xl relative text-primary">
            <button class="absolute top-4 right-4 text-primary hover:text-secondary" onclick="closeInquiryModal()">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
            
            <h3 class="font-headline-lg-mobile text-xl text-primary font-bold mb-1 uppercase text-center" id="inquiry-title-header">Artisan Inquiry</h3>
            <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest font-label-caps text-center mb-2">100% of proceeds go directly to artisans</p>
            <p class="text-xs text-on-surface-variant text-center mb-6 text-gray-700 font-semibold">Please leave a message with your requirements, and we’ll get back to you soon</p>

            <form action="{{ route('product.inquiry.store') }}" method="POST" class="space-y-4" autocomplete="off">
                @csrf
                <input type="hidden" name="product_name" id="inquiry-product-name" value=""/>

                <div>
                    <label class="font-label-caps text-[9px] text-primary block mb-1 font-bold">FULL NAME</label>
                    <input name="name" class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm text-primary" placeholder="Your Name" type="text" required/>
                </div>
                <div>
                    <label class="font-label-caps text-[9px] text-primary block mb-1 font-bold">PHONE NUMBER</label>
                    <input name="phone" class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm text-primary" placeholder="+91 98335 71660" type="tel" required/>
                </div>
                <div>
                    <label class="font-label-caps text-[9px] text-primary block mb-1 font-bold">EMAIL ADDRESS</label>
                    <input name="email" class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm text-primary" placeholder="name@email.com" type="email" required/>
                </div>
                <div>
                    <label class="font-label-caps text-[9px] text-primary block mb-1 font-bold">INQUIRY MESSAGE</label>
                    <textarea name="message" rows="3" class="w-full bg-white/40 border-b-2 border-primary py-2 px-3 focus:border-secondary focus:ring-0 outline-none transition-all rounded-lg text-sm text-primary" placeholder="Describe size, custom parameters, or delivery queries..." required></textarea>
                </div>
                <button type="submit" class="w-full bg-primary text-white py-3 rounded-xl font-bold uppercase tracking-wider text-xs shadow-lg hover:scale-105 active:scale-95 transition-all mt-4">
                    Send Inquiry Details
                </button>
            </form>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script>
    function filterGallery(category) {
        // Handle filter active style toggles
        document.querySelectorAll('.gallery-filter').forEach(btn => {
            if (btn.getAttribute('data-category') === category) {
                btn.classList.add('bg-primary', 'text-on-primary', 'shadow-lg');
                btn.classList.remove('glass-card', 'text-primary');
            } else {
                btn.classList.remove('bg-primary', 'text-on-primary', 'shadow-lg');
                btn.classList.add('glass-card', 'text-primary');
            }
        });

        // Hide/Show masonry items
        document.querySelectorAll('.masonry-item').forEach(item => {
            if (category === 'all' || item.classList.contains(category)) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, 10);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 400);
            }
        });
    }

    // Lightbox Controls
    function openLightbox(src, caption) {
        // Prevent open when clicking admin editing attributes
        @if(auth()->check())
            if (event.target.closest('[data-editable="true"]')) {
                return;
            }
        @endif
        
        const lightbox = document.getElementById('lightbox');
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox-caption').innerText = caption;
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    // Product Inquiry Dialog Controls
    function openInquiryModal(productName) {
        // Prevent open when clicking admin editing attributes
        @if(auth()->check())
            if (event.target.closest('[data-editable="true"]')) {
                return;
            }
        @endif

        const modal = document.getElementById('inquiry-modal');
        document.getElementById('inquiry-product-name').value = productName;
        document.getElementById('inquiry-title-header').innerText = productName;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeInquiryModal() {
        const modal = document.getElementById('inquiry-modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }
</script>
@endsection

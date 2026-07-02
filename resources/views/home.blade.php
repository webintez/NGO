@extends('layouts.app')

@section('title', 'Universal Peace Council | Serving Humanity, Animals & Earth')

@section('content')
<!-- Glassmorphic Hero Carousel Section -->
<section class="relative h-[90vh] w-full overflow-hidden">
    <!-- Slides Container -->
    <div id="hero-slider" class="absolute inset-0">
        <!-- Slide 1: Medical Camp -->
        <div class="hero-slide absolute inset-0 opacity-100 transition-opacity duration-1000">
            <div class="absolute inset-0 bg-black/40 z-10"></div>
            <div class="w-full h-full bg-cover bg-center" style="background-image: url('{{ \App\Helpers\ContentHelper::get('home', 'hero', 'image_1', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS') }}')" {!! \App\Helpers\ContentHelper::editable('home', 'hero', 'image_1', 'image', 'Hero Slide 1 Image') !!}></div>
        </div>
        <!-- Slide 2: Children Learning -->
        <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000">
            <div class="absolute inset-0 bg-black/40 z-10"></div>
            <div class="w-full h-full bg-cover bg-center" style="background-image: url('{{ \App\Helpers\ContentHelper::get('home', 'hero', 'image_2', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAwkvnmMOCrxQOKH5ikxM3633PEI00ps2f_8R9tM8iA_7KRvRM4Fj4WbZHYiSxcSZbWEVceKhwRd7Sj3vryEKS35UDdojjGMSAz-cs8zA2OxAhoLgH3VgFiLQKJvcWRymAjq2TIT-jf-hAFz_y2DNSep9QzpSLxVVJE4eJYkr47H3mr5gSMTkZdtKpNl8xNt080fJJ7PzzBZJ-AZYJLpFlFuxFQeZJBlbatsRVIce2dLRuebbqNZWkb') }}')" {!! \App\Helpers\ContentHelper::editable('home', 'hero', 'image_2', 'image', 'Hero Slide 2 Image') !!}></div>
        </div>
        <!-- Slide 3: Volunteer & Animals -->
        <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000">
            <div class="absolute inset-0 bg-black/40 z-10"></div>
            <div class="w-full h-full bg-cover bg-center" style="background-image: url('{{ \App\Helpers\ContentHelper::get('home', 'hero', 'image_3', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNYt5H_fmaIDredC2R_u6F8nT668rWXFFPbninZkyaJcWRGU6wHp5TbL4f-87pClHNYbbg2rxnfJ4cdy4_xqL4Ydhpi1XDEnSdhEYrPzAEWM06vkkENc08rQo247H0egdmjZFG_Q5UMGNn355Um0b0IG3oi3KcnZjMyV0hkROgwNps3hLQaMlaJ9ns8dtWArT8RKUHEeJulOrrz2F864yknlemMLJQolzWk9U_cO8fidC68uv0A0GS') }}')" {!! \App\Helpers\ContentHelper::editable('home', 'hero', 'image_3', 'image', 'Hero Slide 3 Image') !!}></div>
        </div>
    </div>
    <div class="relative z-20 h-full flex flex-col justify-center items-center text-center px-margin-mobile">
        <div class="max-w-4xl">
            <h1 class="font-display-xl text-3xl md:text-display-xl text-white mb-8 leading-tight transition-all duration-700 opacity-0 transform translate-y-10 text-glow" id="animated-headline">
                <span {!! \App\Helpers\ContentHelper::editable('home', 'hero', 'title', 'text', 'Hero Title Line') !!}>{{ \App\Helpers\ContentHelper::get('home', 'hero', 'title', 'SERVING HUMANITY. PROTECTING ANIMALS. SAFEGUARDING THE EARTH.') }}</span>
            </h1>
            <div class="flex gap-4 justify-center">
                <a href="{{ route('about') }}" class="bg-secondary text-on-secondary px-10 py-4 rounded-full font-label-caps text-label-caps hover:scale-105 transition-transform text-center font-bold">Our Missions</a>
                <a href="{{ route('gallery') }}" class="bg-white/20 backdrop-blur-md text-white border border-white/40 px-10 py-4 rounded-full font-label-caps text-label-caps hover:bg-white/30 transition-all font-bold">View Gallery</a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex gap-2">
        <div class="slider-dot w-12 h-1 bg-white rounded-full cursor-pointer opacity-100 transition-opacity"></div>
        <div class="slider-dot w-12 h-1 bg-white rounded-full cursor-pointer opacity-40 transition-opacity"></div>
        <div class="slider-dot w-12 h-1 bg-white rounded-full cursor-pointer opacity-40 transition-opacity"></div>
    </div>
</section>

<!-- Motto Card Section -->
<section class="py-20 px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto">
        <div class="glass-card p-12 md:p-20 text-center relative overflow-hidden group">
            <div class="absolute top-0 left-0 w-full h-1 rainbow-gradient"></div>
            <p class="font-label-caps text-secondary tracking-widest mb-6 font-bold">OUR COMMITMENT</p>
            <h2 class="font-headline-lg text-headline-lg-mobile md:text-4xl text-primary max-w-4xl mx-auto leading-[1.2] uppercase font-extrabold" {!! \App\Helpers\ContentHelper::editable('home', 'hero', 'subtitle', 'textarea', 'Commitment Statement') !!}>
                "{{ \App\Helpers\ContentHelper::get('home', 'hero', 'subtitle', 'Our goal is to build a peaceful future through community welfare, environmental action, and wildlife conservation.') }}"
            </h2>
            <div class="mt-12 flex justify-center items-center gap-4">
                <div class="h-[1px] w-12 bg-primary/20"></div>
                <span class="font-title-md text-primary/60 font-semibold">Universal Peace Council</span>
                <div class="h-[1px] w-12 bg-primary/20"></div>
            </div>
        </div>
    </div>
</section>

<!-- 3-Block Grid -->
<section class="pb-20 px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <!-- Block 1: Humanity -->
        <div class="glass-card p-8 flex flex-col items-center text-center group hover:scale-[1.02] transition-transform duration-500">
            <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center text-white mb-8 group-hover:rotate-12 transition-transform">
                <span class="material-symbols-outlined text-4xl">volunteer_activism</span>
            </div>
            <h3 class="font-title-md text-primary mb-4 font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_1_title', 'text', 'Block 1 Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_1_title', 'Humanity & Health') }}</h3>
            <p class="font-body-md text-on-surface-variant mb-8 text-sm" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_1_desc', 'textarea', 'Block 1 Description') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_1_desc', 'Empowering marginalized communities through health camps, adult literacy upskilling, and clean water access.') }}</p>
            <div class="w-full bg-primary/10 h-2 rounded-full overflow-hidden mb-4">
                <div class="rainbow-gradient h-full w-[85%]"></div>
            </div>
            <span class="font-label-caps text-secondary font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_1_goal', 'text', 'Block 1 Goal') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_1_goal', '85% GOAL REACHED') }}</span>
        </div>
        <!-- Block 2: Animal Rescue -->
        <div class="glass-card p-8 flex flex-col items-center text-center group hover:scale-[1.02] transition-transform duration-500">
            <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center text-white mb-8 group-hover:rotate-12 transition-transform">
                <span class="material-symbols-outlined text-4xl">pets</span>
            </div>
            <h3 class="font-title-md text-primary mb-4 font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_2_title', 'text', 'Block 2 Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_2_title', 'Animal Rescue') }}</h3>
            <p class="font-body-md text-on-surface-variant mb-8 text-sm" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_2_desc', 'textarea', 'Block 2 Description') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_2_desc', 'Rescuing, treating, and finding homes for stray dogs, cats, and farm animals in high-tech shelters.') }}</p>
            <div class="w-full bg-primary/10 h-2 rounded-full overflow-hidden mb-4">
                <div class="rainbow-gradient h-full w-[90%]"></div>
            </div>
            <span class="font-label-caps text-secondary font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_2_goal', 'text', 'Block 2 Goal') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_2_goal', '90% GOAL REACHED') }}</span>
        </div>
        <!-- Block 3: Earth Care -->
        <div class="glass-card p-8 flex flex-col items-center text-center group hover:scale-[1.02] transition-transform duration-500">
            <div class="w-16 h-16 bg-primary-container rounded-2xl flex items-center justify-center text-white mb-8 group-hover:rotate-12 transition-transform">
                <span class="material-symbols-outlined text-4xl">eco</span>
            </div>
            <h3 class="font-title-md text-primary mb-4 font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_3_title', 'text', 'Block 3 Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_3_title', 'Earth Care') }}</h3>
            <p class="font-body-md text-on-surface-variant mb-8 text-sm" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_3_desc', 'textarea', 'Block 3 Description') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_3_desc', 'Safeguarding the environment through afforestation, river cleanup drives, and green energy advocacy.') }}</p>
            <div class="w-full bg-primary/10 h-2 rounded-full overflow-hidden mb-4">
                <div class="rainbow-gradient h-full w-[70%]"></div>
            </div>
            <span class="font-label-caps text-secondary font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blocks', 'init_3_goal', 'text', 'Block 3 Goal') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blocks', 'init_3_goal', '70% GOAL REACHED') }}</span>
        </div>
    </div>
</section>

<!-- News / Latest Blogs Section -->
@if($latestPosts->count() > 0)
<section class="pb-20 px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto">
        <div class="flex justify-between items-center mb-10">
            <div>
                <p class="font-label-caps text-secondary tracking-widest font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blog', 'badge', 'text', 'Blog Section Badge') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blog', 'badge', 'UPDATES & STORIES') }}</p>
                <h2 class="font-headline-lg text-2xl md:text-3xl text-primary font-bold" {!! \App\Helpers\ContentHelper::editable('home', 'blog', 'title', 'text', 'Blog Section Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'blog', 'title', 'Latest Impact News') }}</h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            @foreach($latestPosts as $post)
            <div class="glass-card p-6 flex flex-col hover:scale-[1.02] transition-transform duration-300">
                <div class="h-48 w-full bg-cover bg-center rounded-xl mb-6 border border-white/20" style="background-image: url('{{ $post->image_url }}')"></div>
                <span class="text-xs font-bold text-secondary tracking-wider font-label-caps mb-2">{{ strtoupper($post->category) }}</span>
                <h3 class="font-title-md text-lg text-primary font-bold mb-3 line-clamp-2">{{ $post->title }}</h3>
                <p class="font-body-md text-on-surface-variant text-sm mb-6 flex-grow line-clamp-3">{{ $post->summary }}</p>
                <div class="flex justify-between items-center border-t border-primary/10 pt-4 mt-auto">
                    <span class="text-xs text-gray-500 font-medium">{{ $post->reading_time }}</span>
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-secondary hover:text-primary font-bold text-sm flex items-center gap-1 font-label-caps">
                        Read Story <span class="material-symbols-outlined text-xs">arrow_forward</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Peace Divider -->
<div class="peace-divider">
    <div class="peace-icon-cap">
        <span class="material-symbols-outlined">people_outline</span>
    </div>
</div>

<!-- Impact Stats Marquee -->
<section class="py-12 bg-primary overflow-hidden">
    <div class="animate-marquee">
        <div class="flex items-center space-x-24 text-on-primary whitespace-nowrap">
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">01</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_1_count', 'text', 'Stat 1 Value') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_1_count', '1.2M') }}</span> 
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_1_label', 'text', 'Stat 1 Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_1_label', 'LIVES TOUCHED') }}</span>
                </span>
            </div>
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">02</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_2_count', 'text', 'Stat 2 Value') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_2_count', '50K') }}</span> 
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_2_label', 'text', 'Stat 2 Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_2_label', 'ANIMALS SAVED') }}</span>
                </span>
            </div>
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">03</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_3_count', 'text', 'Stat 3 Value') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_3_count', '10M') }}</span> 
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_3_label', 'text', 'Stat 3 Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_3_label', 'TREES PLANTED') }}</span>
                </span>
            </div>
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">04</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_4_count', 'text', 'Stat 4 Value') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_4_count', '200+') }}</span> 
                    <span {!! \App\Helpers\ContentHelper::editable('home', 'stats', 'stat_4_label', 'text', 'Stat 4 Title') !!}>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_4_label', 'LOCAL PROJECTS') }}</span>
                </span>
            </div>
        </div>
        <!-- Duplicate for infinite effect -->
        <div class="flex items-center space-x-24 text-on-primary whitespace-nowrap ml-24">
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">01</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_1_count', '1.2M') }}</span> 
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_1_label', 'LIVES TOUCHED') }}</span>
                </span>
            </div>
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">02</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_2_count', '50K') }}</span> 
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_2_label', 'ANIMALS SAVED') }}</span>
                </span>
            </div>
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">03</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_3_count', '10M') }}</span> 
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_3_label', 'TREES PLANTED') }}</span>
                </span>
            </div>
            <div class="flex items-center gap-4">
                <span class="font-display-xl opacity-50 text-4xl font-extrabold">04</span>
                <span class="font-headline-lg-mobile text-lg font-bold">
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_4_count', '200+') }}</span> 
                    <span>{{ \App\Helpers\ContentHelper::get('home', 'stats', 'stat_4_label', 'LOCAL PROJECTS') }}</span>
                </span>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Hero Slider Logic
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const headline = document.getElementById('animated-headline');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
            dots[i].style.opacity = i === index ? '1' : '0.4';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000);

    // Headline Animation
    window.onload = () => {
        setTimeout(() => {
            headline.classList.remove('opacity-0', 'translate-y-10');
            headline.classList.add('opacity-100', 'translate-y-0');
        }, 500);
    };
</script>
@endsection

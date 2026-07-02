<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Universal Peace Council | Serving Humanity, Animals & Earth')</title>
    
    <!-- Scripts & Styles -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=Outfit:wght@400;600;700&family=Inter:wght@400;500&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&family=Syne:wght@100..900&display=swap" rel="stylesheet"/>

    <!-- Tailwind Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-primary": "#c3c0ff",
                        "on-error": "#ffffff",
                        "surface-container-highest": "#e5e1e8",
                        "on-secondary-fixed": "#36003e",
                        "on-secondary-fixed-variant": "#7c008e",
                        "on-surface-variant": "#474651",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#bd8abc",
                        "primary-fixed-dim": "#c3c0ff",
                        "background": "{{ \App\Helpers\ContentHelper::get('global', 'theme', 'background_color', '#ffc7fd') }}",
                        "inverse-surface": "#313035",
                        "on-primary-fixed": "#11095e",
                        "on-surface": "#1b1b20",
                        "tertiary-fixed-dim": "#ebb5ea",
                        "surface-container-high": "#eae7ee",
                        "on-primary-container": "#9492e5",
                        "tertiary-container": "#4b234e",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "surface-dim": "#dcd9e0",
                        "outline-variant": "#c8c5d2",
                        "secondary-container": "#ea57ff",
                        "on-secondary-container": "#580066",
                        "error-container": "#ffdad6",
                        "on-background": "#1b1b20",
                        "primary-container": "#2a2774",
                        "tertiary": "#330c37",
                        "surface-tint": "#5755a3",
                        "primary": "{{ \App\Helpers\ContentHelper::get('global', 'theme', 'primary_color', '#130c5f') }}",
                        "outline": "#777682",
                        "inverse-on-surface": "#f3eff7",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#f0ecf4",
                        "primary-fixed": "#e2dfff",
                        "on-primary-fixed-variant": "#3f3d8a",
                        "surface-variant": "#e5e1e8",
                        "secondary": "{{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }}",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#fbabff",
                        "on-tertiary-fixed-variant": "#623764",
                        "surface-container-low": "#f6f2fa",
                        "surface": "#fcf8ff",
                        "secondary-fixed": "#ffd6fd",
                        "tertiary-fixed": "#ffd6fc",
                        "surface-bright": "#fcf8ff",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#310a35"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "64px",
                        "base": "8px",
                        "margin-mobile": "16px",
                        "container-max": "1280px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Syne"],
                        "headline-lg-mobile": ["Syne"],
                        "display-xl": ["Syne"],
                        "title-md": ["Outfit"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-caps": ["Outfit"]
                    },
                    "fontSize": {
                        "headline-lg": ["48px", { "lineHeight": "110%", "letterSpacing": "0.01em", "fontWeight": "800" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "110%", "fontWeight": "800" }],
                        "display-xl": ["80px", { "lineHeight": "100%", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                        "title-md": ["24px", { "lineHeight": "140%", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "160%", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "160%", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "100%", "letterSpacing": "0.1em", "fontWeight": "700" }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: {{ \App\Helpers\ContentHelper::get('global', 'theme', 'background_color', '#ffc7fd') }};
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-top: 1.5px solid rgba(255, 255, 255, 0.2);
            border-left: 1.5px solid rgba(255, 255, 255, 0.2);
            border-bottom: 1.5px solid rgba(19, 12, 95, 0.1);
            border-right: 1.5px solid rgba(19, 12, 95, 0.1);
            border-radius: 2rem;
        }

        .rainbow-gradient {
            background: linear-gradient(90deg, {{ \App\Helpers\ContentHelper::get('global', 'theme', 'primary_color', '#130c5f') }} 0%, {{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }} 50%, #ea57ff 100%);
        }

        .hero-slide {
            transition: opacity 1s ease-in-out;
        }

        .text-glow {
            text-shadow: 0 0 20px rgba(162, 0, 186, 0.3);
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .animate-marquee {
            display: flex;
            width: 200%;
            animation: marquee 30s linear infinite;
        }

        .peace-divider {
            height: 4px;
            background: linear-gradient(90deg, {{ \App\Helpers\ContentHelper::get('global', 'theme', 'primary_color', '#130c5f') }}, {{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }}, #ea57ff);
            position: relative;
        }

        .peace-icon-cap {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: {{ \App\Helpers\ContentHelper::get('global', 'theme', 'primary_color', '#130c5f') }};
            border-radius: 50%;
            padding: 8px;
            color: white;
            z-index: 10;
        }

        .rainbow-divider {
            height: 4px;
            background: linear-gradient(90deg, {{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }} 0%, {{ \App\Helpers\ContentHelper::get('global', 'theme', 'primary_color', '#130c5f') }} 50%, #c3c0ff 100%);
            width: 100%;
            position: relative;
        }

        .peace-icon-anchor {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 8px;
            border-radius: 9999px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .glossy-button {
            background: linear-gradient(180deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 100%), {{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }};
            transition: all 0.3s ease;
        }

        .glossy-button:hover {
            filter: brightness(1.1);
            transform: translateY(-2px);
        }

        .shader-bg {
            background-color: #fcf8ff;
            background-image: radial-gradient(at 0% 0%, hsla(289,100%,90%,1) 0, transparent 50%), 
                              radial-gradient(at 50% 0%, hsla(247,100%,94%,1) 0, transparent 50%), 
                              radial-gradient(at 100% 0%, hsla(289,100%,90%,1) 0, transparent 50%);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* 3D Glassmorphic Logo Container */
        .logo-3d-container {
            position: relative;
            background: rgba(255, 255, 255, 0.45);
            backdrop-filter: blur(16px);
            border: 1.5px solid rgba(255, 255, 255, 0.5);
            box-shadow: inset 0 0 15px rgba(217, 70, 239, 0.2), inset 0 0 30px rgba(42, 39, 116, 0.1);
            transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
        }
        .logo-3d-container:hover {
            transform: rotateY(15deg) rotateX(-10deg) scale(1.05);
        }

        /* Admin visual editor styles */
        @if(auth()->check())
            [data-editable="true"] {
                position: relative;
                cursor: pointer;
                transition: outline 0.2s ease, box-shadow 0.2s ease;
            }
            [data-editable="true"]:hover {
                outline: 2px dashed {{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }} !important;
                box-shadow: 0 0 12px rgba(162, 0, 186, 0.3);
            }
            [data-editable="true"]::after {
                content: 'edit';
                font-family: 'Material Symbols Outlined';
                position: absolute;
                top: 2px;
                right: 2px;
                background: {{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }};
                color: white;
                font-size: 14px;
                padding: 4px;
                border-radius: 4px;
                opacity: 0;
                pointer-events: none;
                transition: opacity 0.2s ease;
                z-index: 40;
                line-height: 1;
                font-weight: normal;
                font-style: normal;
            }
            [data-editable="true"]:hover::after {
                opacity: 1;
            }
        @endif
    </style>
    @yield('styles')
</head>
<body class="font-body-md text-primary overflow-x-hidden shader-bg pt-20">

    <!-- Top Navigation Bar -->
    <header class="fixed top-0 w-full z-50 bg-white/40 backdrop-blur-md border-b-[1.5px] border-white/20">
        <div class="flex justify-between items-center h-20 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <!-- Glossy 3D Logo Container Simulation -->
                <div class="logo-3d-container p-2 rounded-full flex items-center justify-center w-16 h-16">
                    <img src="{{ asset('images/logo.png') }}" alt="Universal Peace Council Logo" class="w-12 h-12 object-contain">
                </div>
                <span class="font-headline-lg text-headline-lg-mobile md:text-2xl font-extrabold text-primary tracking-wide">UPC</span>
            </a>
            
            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-8">
                <a class="{{ Request::routeIs('home') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant font-medium hover:text-secondary' }} transition-colors duration-300 font-label-caps text-label-caps" href="{{ route('home') }}">Home</a>
                <a class="{{ Request::routeIs('about') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant font-medium hover:text-secondary' }} transition-colors duration-300 font-label-caps text-label-caps" href="{{ route('about') }}">About Us</a>
                <a class="{{ Request::routeIs('gallery') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant font-medium hover:text-secondary' }} transition-colors duration-300 font-label-caps text-label-caps" href="{{ route('gallery') }}">Gallery</a>
                <a class="{{ Request::routeIs('donation') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant font-medium hover:text-secondary' }} transition-colors duration-300 font-label-caps text-label-caps" href="{{ route('donation') }}">Donation</a>
                <a class="{{ Request::routeIs('contact') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant font-medium hover:text-secondary' }} transition-colors duration-300 font-label-caps text-label-caps" href="{{ route('contact') }}">Contact Us</a>
            </nav>

            <!-- Action Button / Mobile Menu Toggle -->
            <div class="flex items-center gap-4">
                <a href="{{ route('donation') }}" class="hidden md:inline-block bg-primary text-on-primary px-8 py-3 rounded-full font-label-caps text-label-caps hover:scale-105 transition-transform active:scale-95 text-center">
                    Donate Now
                </a>
                <button id="mobile-menu-btn" class="block md:hidden text-primary focus:outline-none p-1.5" onclick="toggleMobileMenu()">
                    <span class="material-symbols-outlined text-3xl font-bold">menu</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Drawer overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[100] hidden bg-white/95 backdrop-blur-xl flex-col p-6 animate-content md:hidden">
        <div class="flex justify-between items-center mb-10 border-b border-primary/10 pb-4">
            <a href="{{ route('home') }}" class="flex items-center gap-2" onclick="toggleMobileMenu()">
                <div class="logo-3d-container p-2 rounded-full flex items-center justify-center w-12 h-12">
                    <img src="{{ asset('images/logo.png') }}" alt="Universal Peace Council Logo" class="w-8 h-8 object-contain">
                </div>
                <span class="font-headline-lg text-xl font-extrabold text-primary tracking-wide">UPC</span>
            </a>
            <button class="text-primary hover:text-secondary focus:outline-none p-1.5" onclick="toggleMobileMenu()">
                <span class="material-symbols-outlined text-3xl font-bold">close</span>
            </button>
        </div>
        
        <nav class="flex flex-col gap-6 text-center">
            <a class="{{ Request::routeIs('home') ? 'text-secondary font-bold text-xl' : 'text-primary font-semibold text-xl' }}" href="{{ route('home') }}" onclick="toggleMobileMenu()">Home</a>
            <a class="{{ Request::routeIs('about') ? 'text-secondary font-bold text-xl' : 'text-primary font-semibold text-xl' }}" href="{{ route('about') }}" onclick="toggleMobileMenu()">About Us</a>
            <a class="{{ Request::routeIs('gallery') ? 'text-secondary font-bold text-xl' : 'text-primary font-semibold text-xl' }}" href="{{ route('gallery') }}" onclick="toggleMobileMenu()">Gallery & Shop</a>
            <a class="{{ Request::routeIs('donation') ? 'text-secondary font-bold text-xl' : 'text-primary font-semibold text-xl' }}" href="{{ route('donation') }}" onclick="toggleMobileMenu()">Donation</a>
            <a class="{{ Request::routeIs('contact') ? 'text-secondary font-bold text-xl' : 'text-primary font-semibold text-xl' }}" href="{{ route('contact') }}" onclick="toggleMobileMenu()">Contact Us</a>
            
            <a href="{{ route('donation') }}" class="bg-primary text-white py-4 rounded-xl font-bold uppercase tracking-wider text-sm mt-8 shadow-md" onclick="toggleMobileMenu()">
                Donate Now
            </a>
        </nav>
    </div>

    <!-- Success Toast Notifications -->
    @if(session('success'))
        <div id="toast-success" class="fixed top-24 right-4 z-50 flex items-center w-full max-w-md p-4 mb-4 text-primary bg-white/80 backdrop-blur-md rounded-xl border border-secondary shadow-lg transition-opacity duration-500" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-white bg-secondary rounded-lg">
                <span class="material-symbols-outlined">done</span>
            </div>
            <div class="ml-3 text-sm font-semibold">{{ session('success') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-transparent text-primary/60 hover:text-primary rounded-lg p-1.5 inline-flex items-center justify-center h-8 w-8" onclick="document.getElementById('toast-success').remove()" aria-label="Close">
                <span class="material-symbols-outlined text-sm">close</span>
            </button>
        </div>
    @endif

    <!-- Error Toast Notifications -->
    @if($errors->any())
        <div id="toast-error" class="fixed top-24 right-4 z-50 flex flex-col w-full max-w-md p-4 mb-4 text-red-800 bg-red-50/95 backdrop-blur-md rounded-xl border border-red-300 shadow-lg transition-opacity duration-500" role="alert">
            <div class="flex items-center w-full">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-white bg-red-600 rounded-lg">
                    <span class="material-symbols-outlined">error</span>
                </div>
                <div class="ml-3 text-sm font-bold">Please correct the following:</div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-transparent text-red-500 hover:text-red-800 rounded-lg p-1.5 inline-flex items-center justify-center h-8 w-8" onclick="document.getElementById('toast-error').remove()" aria-label="Close">
                    <span class="material-symbols-outlined text-sm">close</span>
                </button>
            </div>
            <ul class="mt-2 ml-11 text-xs list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Global Floating Contact Actions (Sticky widget) -->
    <div class="fixed bottom-base right-base flex flex-col gap-base z-50 mb-margin-mobile mr-margin-mobile items-end">
        <div class="bg-white/60 backdrop-blur-md p-4 rounded-xl mb-2 text-right hidden md:block border border-white/20">
            <p class="font-label-caps text-[10px] text-secondary">GET IN TOUCH</p>
            <p class="font-title-md text-primary text-sm font-bold">Active WhatsApp & Call Support</p>
        </div>
        <!-- Click-to-Call Widget (Triggers numbers) -->
        <a href="tel:9833571660" title="Call Universal Peace Council" class="bg-primary text-on-primary rounded-full p-4 shadow-xl hover:scale-110 transition-transform active:scale-90 flex items-center justify-center">
            <span class="material-symbols-outlined">call</span>
        </a>
        <!-- Click-to-WhatsApp Widget -->
        <a href="https://wa.me/919833571660" target="_blank" title="Chat on WhatsApp" class="bg-emerald-500 text-white rounded-full p-4 shadow-xl hover:scale-110 transition-transform active:scale-90 flex items-center justify-center">
            <span class="material-symbols-outlined">chat</span>
        </a>
    </div>

    <!-- Main Content Yield -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary w-full py-12 border-t-4 border-secondary">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-white">
            <div class="flex flex-col gap-6">
                <span class="font-headline-lg-mobile text-inverse-primary font-extrabold text-xl">Universal Peace Council</span>
                <p class="font-body-md text-surface-variant max-w-xs text-sm text-gray-300">
                    Idea is to leave the world at least same, if not better than what we received.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary transition-colors" href="https://facebook.com" target="_blank">
                        <span class="material-symbols-outlined">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-secondary transition-colors" href="mailto:upc@gmail.com">
                        <span class="material-symbols-outlined">mail</span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <h4 class="font-label-caps text-on-primary text-label-caps text-sm tracking-widest text-fuchsia-300 font-bold">OUR PAGES</h4>
                <div class="flex flex-col gap-3 text-sm">
                    <a class="font-body-md text-surface-variant hover:text-inverse-primary hover:translate-x-1 transition-all duration-200 text-gray-300" href="{{ route('home') }}">Home</a>
                    <a class="font-body-md text-surface-variant hover:text-inverse-primary hover:translate-x-1 transition-all duration-200 text-gray-300" href="{{ route('about') }}">About Us</a>
                    <a class="font-body-md text-surface-variant hover:text-inverse-primary hover:translate-x-1 transition-all duration-200 text-gray-300" href="{{ route('gallery') }}">Gallery</a>
                    <a class="font-body-md text-surface-variant hover:text-inverse-primary hover:translate-x-1 transition-all duration-200 text-gray-300" href="{{ route('donation') }}">Donation</a>
                    <a class="font-body-md text-surface-variant hover:text-inverse-primary hover:translate-x-1 transition-all duration-200 text-gray-300" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <h4 class="font-label-caps text-on-primary text-label-caps text-sm tracking-widest text-fuchsia-300 font-bold">CONTACT & STATS</h4>
                <p class="font-body-md text-surface-variant text-gray-300 text-sm">Royal Palms, Mumbai, Maharashtra</p>
                <p class="font-body-md text-surface-variant text-gray-300 text-sm">Total Visitors: <span class="font-bold text-secondary-container">124,853</span></p>
                
                <div class="glass-card bg-white/5 border border-white/10 p-4 mt-2">
                    <p class="font-label-caps text-[10px] text-secondary-fixed text-fuchsia-300 font-bold">COMMUNITY WELFARE</p>
                    <p class="font-body-md text-white text-xs">Join our monthly volunteers and donors making a real impact today.</p>
                </div>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-white/10 text-center text-gray-400">
            <p class="font-label-caps text-[10px]">© 2026 UNIVERSAL PEACE COUNCIL. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>

    <!-- Admin Visual Editor HTML overlays -->
    @if(auth()->check())
        <!-- Admin Live Editing Mode Controller Bar -->
        <div class="fixed bottom-4 left-4 z-[99] bg-primary/90 backdrop-blur-md text-white px-6 py-4 rounded-2xl border border-white/20 shadow-2xl flex items-center gap-4">
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 bg-emerald-500 rounded-full animate-ping"></span>
                <span class="font-label-caps text-[10px] font-bold uppercase tracking-wider">Live Editor Mode</span>
            </div>
            <div class="h-6 w-px bg-white/25"></div>
            <button onclick="toggleVisualEditor()" class="bg-secondary text-white font-label-caps text-[10px] uppercase font-bold px-4 py-2 rounded-lg hover:scale-105 active:scale-95 transition-transform flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">settings_suggest</span> Theme Colors
            </button>
            <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-secondary font-label-caps text-[10px] uppercase font-bold transition-colors">
                Admin Panel
            </a>
        </div>

        <!-- Theme Colors Modal Panel -->
        <div id="theme-editor-modal" class="fixed inset-0 z-[101] hidden items-center justify-center bg-black/60 backdrop-blur-sm p-4">
            <div class="glass-card p-8 max-w-md w-full border border-white/30 text-primary">
                <h3 class="font-headline-lg-mobile text-2xl font-bold mb-6 text-primary">Theme Color Variables</h3>
                <form id="theme-color-form" onsubmit="saveThemeColors(event)" class="space-y-6">
                    <div>
                        <label class="font-label-caps text-xs text-primary font-bold block mb-2">Background Color</label>
                        <div class="flex gap-3">
                            <input type="color" name="background_color" value="{{ \App\Helpers\ContentHelper::get('global', 'theme', 'background_color', '#ffc7fd') }}" class="w-12 h-12 rounded-lg cursor-pointer border-none outline-none">
                            <input type="text" id="bg-color-text" value="{{ \App\Helpers\ContentHelper::get('global', 'theme', 'background_color', '#ffc7fd') }}" class="w-full bg-white/50 border-b border-primary p-2 outline-none text-sm font-mono font-bold" oninput="updateColorPreview('background_color', this.value)">
                         </div>
                    </div>
                    <div>
                        <label class="font-label-caps text-xs text-primary font-bold block mb-2">Primary Text/Accents</label>
                        <div class="flex gap-3">
                            <input type="color" name="primary_color" value="{{ \App\Helpers\ContentHelper::get('global', 'theme', 'primary_color', '#130c5f') }}" class="w-12 h-12 rounded-lg cursor-pointer border-none outline-none">
                            <input type="text" id="primary-color-text" value="{{ \App\Helpers\ContentHelper::get('global', 'theme', 'primary_color', '#130c5f') }}" class="w-full bg-white/50 border-b border-primary p-2 outline-none text-sm font-mono font-bold" oninput="updateColorPreview('primary_color', this.value)">
                        </div>
                    </div>
                    <div>
                        <label class="font-label-caps text-xs text-primary font-bold block mb-2">Secondary Color (Accents)</label>
                        <div class="flex gap-3">
                            <input type="color" name="secondary_color" value="{{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }}" class="w-12 h-12 rounded-lg cursor-pointer border-none outline-none">
                            <input type="text" id="secondary-color-text" value="{{ \App\Helpers\ContentHelper::get('global', 'theme', 'secondary_color', '#a200ba') }}" class="w-full bg-white/50 border-b border-primary p-2 outline-none text-sm font-mono font-bold" oninput="updateColorPreview('secondary_color', this.value)">
                        </div>
                    </div>
                    <div class="flex justify-end gap-3 pt-4">
                        <button type="button" onclick="toggleVisualEditor()" class="bg-gray-200 text-gray-700 px-5 py-2.5 rounded-xl font-bold text-sm">Cancel</button>
                        <button type="submit" class="bg-primary text-white px-5 py-2.5 rounded-xl font-bold text-sm">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Inline Element Editor Drawer Panel -->
        <div id="inline-editor-drawer" class="fixed right-0 top-0 bottom-0 z-[101] w-full max-w-md bg-white/95 backdrop-blur-xl shadow-2xl border-l border-primary/10 p-8 flex flex-col justify-between translate-x-full transition-transform duration-300">
            <div class="flex flex-col h-full overflow-y-auto pb-4 pr-1">
                <div class="flex justify-between items-center mb-8 pb-4 border-b border-primary/10 flex-shrink-0">
                    <h3 class="font-headline-lg-mobile text-xl font-extrabold text-primary" id="editor-drawer-title">Edit Element</h3>
                    <button onclick="closeInlineEditor()" class="text-primary hover:text-secondary focus:outline-none">
                        <span class="material-symbols-outlined text-3xl font-bold">close</span>
                    </button>
                </div>

                <form id="inline-editor-form" class="space-y-6 flex-grow">
                    <input type="hidden" name="page" id="editor-page">
                    <input type="hidden" name="section" id="editor-section">
                    <input type="hidden" name="element_key" id="editor-key">
                    <input type="hidden" name="type" id="editor-type">

                    <!-- Dynamic Input Fields based on type -->
                    <div id="editor-input-container">
                        <!-- Input will be dynamically injected here by JS -->
                    </div>
                </form>
            </div>

            <div class="flex gap-4 border-t border-primary/10 pt-6 flex-shrink-0">
                <button onclick="closeInlineEditor()" class="w-1/2 bg-gray-200 text-gray-700 py-3.5 rounded-xl font-bold text-sm transition-colors hover:bg-gray-300">Cancel</button>
                <button onclick="saveInlineElement()" class="w-1/2 bg-primary text-white py-3.5 rounded-xl font-bold text-sm transition-transform hover:scale-105 active:scale-95">Save Element</button>
            </div>
        </div>
    @endif

    <!-- Global responsive JavaScript -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menu.classList.add('flex');
                document.body.style.overflow = 'hidden';
            } else {
                menu.classList.remove('flex');
                menu.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }
    </script>

    <!-- Admin Live Editor JavaScript Actions -->
    @if(auth()->check())
        <script>
            function toggleVisualEditor() {
                const modal = document.getElementById('theme-editor-modal');
                if (modal.classList.contains('hidden')) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                } else {
                    modal.classList.remove('flex');
                    modal.classList.add('hidden');
                }
            }

            function updateColorPreview(name, val) {
                const colorInput = document.querySelector(`input[type="color"][name="${name}"]`);
                if (colorInput) colorInput.value = val;
            }

            // Sync hex code text input when selecting from color picker
            document.querySelectorAll('#theme-editor-modal input[type="color"]').forEach(picker => {
                picker.addEventListener('input', (e) => {
                    const textInput = e.target.nextElementSibling;
                    if (textInput) textInput.value = e.target.value;
                });
            });

            function saveThemeColors(e) {
                e.preventDefault();
                const form = document.getElementById('theme-color-form');
                const bg = form.elements['background_color'].value;
                const pri = form.elements['primary_color'].value;
                const sec = form.elements['secondary_color'].value;

                // We save these 3 values using content update AJAX
                const promises = [
                    saveElementAjax('global', 'theme', 'background_color', 'color', bg),
                    saveElementAjax('global', 'theme', 'primary_color', 'color', pri),
                    saveElementAjax('global', 'theme', 'secondary_color', 'color', sec)
                ];

                Promise.all(promises).then(() => {
                    window.location.reload();
                }).catch(err => {
                    alert('Failed to update theme colors.');
                });
            }

            function saveElementAjax(page, section, key, type, value, file = null) {
                const formData = new FormData();
                formData.append('page', page);
                formData.append('section', section);
                formData.append('element_key', key);
                formData.append('type', type);
                
                if (file) {
                    formData.append('image', file);
                } else {
                    formData.append('value', value);
                }

                return fetch('{{ route("admin.content.update") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                }).then(res => res.json());
            }

            // Inline elements editor
            let activeEditableElement = null;

            document.querySelectorAll('[data-editable="true"]').forEach(el => {
                el.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    openInlineEditor(el);
                });
            });

            function openInlineEditor(el) {
                activeEditableElement = el;
                const page = el.getAttribute('data-page');
                const section = el.getAttribute('data-section');
                const key = el.getAttribute('data-key');
                const type = el.getAttribute('data-type');
                const label = el.getAttribute('data-label') || key;

                document.getElementById('editor-page').value = page;
                document.getElementById('editor-section').value = section;
                document.getElementById('editor-key').value = key;
                document.getElementById('editor-type').value = type;
                document.getElementById('editor-drawer-title').innerText = 'Edit ' + label;

                const inputContainer = document.getElementById('editor-input-container');
                inputContainer.innerHTML = '';

                if (type === 'text') {
                    const val = el.innerText.trim();
                    inputContainer.innerHTML = `
                        <div>
                            <label class="font-label-caps text-xs text-primary font-bold block mb-2">Content Value</label>
                            <input type="text" name="value" id="editor-value-field" value="${val.replace(/"/g, '&quot;')}" class="w-full bg-white/50 border border-primary p-3 rounded-xl outline-none font-body-md text-primary">
                        </div>
                    `;
                } else if (type === 'textarea') {
                    const val = el.innerText.trim();
                    inputContainer.innerHTML = `
                        <div>
                            <label class="font-label-caps text-xs text-primary font-bold block mb-2">Content Value</label>
                            <textarea name="value" id="editor-value-field" rows="8" class="w-full bg-white/50 border border-primary p-3 rounded-xl outline-none font-body-md text-primary">${val}</textarea>
                        </div>
                    `;
                } else if (type === 'image') {
                    let currentSrc = '';
                    if (el.tagName === 'IMG') {
                        currentSrc = el.src;
                    } else {
                        const innerImg = el.querySelector('img');
                        if (innerImg) {
                            currentSrc = innerImg.src;
                        } else {
                            let bgStyle = el.style.backgroundImage;
                            if (!bgStyle) {
                                const childWithBg = el.querySelector('[style*="background-image"]');
                                if (childWithBg) bgStyle = childWithBg.style.backgroundImage;
                            }
                            if (bgStyle) {
                                currentSrc = bgStyle.replace(/url\(['"]?(.*?)['"]?\)/i, '$1');
                            }
                        }
                    }

                    inputContainer.innerHTML = `
                        <div class="space-y-4">
                            <label class="font-label-caps text-xs text-primary font-bold block">Upload New Image</label>
                            <div class="border-2 border-dashed border-primary/20 rounded-2xl p-6 text-center bg-white/50 cursor-pointer" onclick="document.getElementById('editor-file-field').click()">
                                <span class="material-symbols-outlined text-4xl text-primary/60 mb-2">upload_file</span>
                                <p class="text-xs text-gray-500 font-bold uppercase tracking-wider">Drag & drop or click to choose</p>
                                <input type="file" id="editor-file-field" name="image" class="hidden" onchange="previewUploadedImage(this)">
                            </div>
                            <div id="image-upload-preview" class="rounded-2xl overflow-hidden max-h-48 border border-primary/10">
                                <img src="${currentSrc}" class="w-full h-full object-cover">
                            </div>
                        </div>
                    `;
                }

                const drawer = document.getElementById('inline-editor-drawer');
                drawer.classList.remove('translate-x-full');
            }

            function previewUploadedImage(input) {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.querySelector('#image-upload-preview img').src = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function closeInlineEditor() {
                const drawer = document.getElementById('inline-editor-drawer');
                drawer.classList.add('translate-x-full');
            }

            function saveInlineElement() {
                const page = document.getElementById('editor-page').value;
                const section = document.getElementById('editor-section').value;
                const key = document.getElementById('editor-key').value;
                const type = document.getElementById('editor-type').value;

                let val = '';
                let file = null;

                if (type === 'image') {
                    const fileInput = document.getElementById('editor-file-field');
                    if (fileInput.files && fileInput.files[0]) {
                        file = fileInput.files[0];
                    } else {
                        closeInlineEditor();
                        return;
                    }
                } else {
                    val = document.getElementById('editor-value-field').value;
                }

                saveElementAjax(page, section, key, type, val, file).then(res => {
                    if (res.success) {
                        if (type === 'image') {
                            if (activeEditableElement.tagName === 'IMG') {
                                activeEditableElement.src = res.value;
                            } else {
                                const childWithBg = activeEditableElement.querySelector('[style*="background-image"]');
                                if (childWithBg) {
                                    childWithBg.style.backgroundImage = `url(${res.value})`;
                                } else {
                                    activeEditableElement.style.backgroundImage = `url(${res.value})`;
                                }
                            }
                        } else {
                            activeEditableElement.innerText = res.value;
                        }
                        closeInlineEditor();
                        window.location.reload();
                    } else {
                        alert('Error updating content.');
                    }
                });
            }
        </script>
    @endif
    @yield('scripts')
</body>
</html>

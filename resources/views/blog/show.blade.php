@extends('layouts.app')

@section('title', $post->title . ' | Universal Peace Council')

@section('content')
<main class="pt-10">
    <article class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-24">
        <!-- Breadcrumbs & Header -->
        <header class="mb-12 text-center max-w-4xl mx-auto">
            <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest font-label-caps inline-block mb-4 
                @if($post->category == 'Climate Action') bg-emerald-100 text-emerald-800 border border-emerald-300
                @elseif($post->category == 'Humanity & Health' || $post->category == 'Underprivileged Education') bg-amber-100 text-amber-800 border border-amber-300
                @else bg-fuchsia-100 text-fuchsia-800 border border-fuchsia-300 @endif">
                {{ $post->category }}
            </span>
            <h1 class="font-display-xl text-3xl md:text-5xl font-extrabold text-primary mb-6 leading-tight uppercase">{{ $post->title }}</h1>
            
            <div class="flex items-center justify-center gap-6 text-sm text-gray-600 font-medium font-label-caps">
                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">person</span> {{ $post->author }}</span>
                <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span> {{ $post->reading_time }}</span>
                <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                <span>{{ $post->created_at->format('M d, Y') }}</span>
            </div>
        </header>

        <!-- Featured Image -->
        <div class="h-[50vh] min-h-[300px] w-full bg-cover bg-center rounded-3xl mb-16 border border-white/20 shadow-xl" style="background-image: url('{{ $post->image_url }}')"></div>

        <!-- Grid Layout: Sidebar & Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            
            <!-- Aside Meta Info (Left) -->
            <aside class="lg:col-span-3 space-y-6">
                <div class="glass-card p-6 rounded-2xl border border-white/20">
                    <p class="font-label-caps text-xs text-secondary font-bold mb-4 uppercase tracking-widest">ABOUT CAUSE</p>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">public</span>
                        </div>
                        <div>
                            <p class="font-bold text-xs text-primary">{{ $post->category }}</p>
                            <p class="text-[9px] text-gray-500 font-bold uppercase">Initiative</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">done_all</span>
                        </div>
                        <div>
                            <p class="font-bold text-xs text-primary">Active Campaign</p>
                            <p class="text-[9px] text-gray-500 font-bold uppercase">Status</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl border-2 border-dashed border-secondary/30 space-y-4 text-center">
                    <span class="material-symbols-outlined text-secondary text-4xl">format_quote</span>
                    <p class="text-xs font-semibold text-primary italic leading-relaxed">
                        "Leave the world at least same, if not better than what we received."
                    </p>
                </div>
            </aside>

            <!-- Main Article Content (Right) -->
            <section class="lg:col-span-9 space-y-8 glass-card p-8 md:p-12 border border-white/20">
                <div class="prose prose-indigo max-w-none text-gray-700 leading-relaxed font-body-md text-base space-y-6">
                    <!-- Dynamic Body Text -->
                    @php
                        // Format content into paragraphs
                        $paragraphs = explode("\n\n", $post->content);
                    @endphp

                    @foreach($paragraphs as $p)
                        @if(trim($p))
                            <p class="first-letter:text-3xl first-letter:font-bold first-letter:text-secondary first-letter:mr-1 @if($loop->first) text-lg text-primary/80 font-medium @endif">
                                {!! nl2br(e($p)) !!}
                            </p>
                        @endif
                    @endforeach
                </div>

                <!-- Shared Infographic styling -->
                @if($post->category == 'Climate Action')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-12 pt-6 border-t border-primary/10">
                    <div class="bg-primary/5 p-6 rounded-2xl border border-primary/10">
                        <span class="material-symbols-outlined text-3xl text-secondary mb-3">tsunami</span>
                        <h4 class="font-title-md text-primary font-bold mb-2">Organic Overload</h4>
                        <p class="text-gray-600 text-xs leading-relaxed">Fallen logs, flowers, and sewage deplete dissolved oxygen in local lakes and rivers. High BOD levels create critical aquatic dead zones.</p>
                    </div>
                    <div class="bg-primary text-white p-6 rounded-2xl flex flex-col justify-between">
                        <h4 class="font-title-md font-bold mb-2 text-fuchsia-300">Biocontrol & Conservation</h4>
                        <p class="text-gray-200 text-xs leading-relaxed">Protecting native dragonflies near clear water bodies to naturalize mosquito populations and restore healthy river bio-activity.</p>
                    </div>
                </div>
                @endif

                <!-- Back button -->
                <div class="pt-8 border-t border-primary/10 flex justify-between items-center">
                    <a href="{{ route('home') }}" class="text-sm font-bold text-primary hover:text-secondary flex items-center gap-1 font-label-caps">
                        <span class="material-symbols-outlined text-sm">arrow_back</span> Back to Home
                    </a>
                    <a href="{{ route('donation') }}" class="px-6 py-3 bg-secondary text-on-secondary rounded-full text-xs font-bold font-label-caps hover:scale-105 transition-transform text-center shadow-md">
                        Donate to this Cause
                    </a>
                </div>
            </section>
        </div>
    </article>

    <!-- Related Posts Suggestions -->
    @if($relatedPosts->count() > 0)
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-24 border-t border-primary/10 pt-16">
        <h3 class="font-headline-lg text-xl md:text-2xl text-primary font-bold mb-8 uppercase text-center">Related Initiatives & News</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            @foreach($relatedPosts as $rel)
            <div class="glass-card p-6 flex flex-col hover:scale-[1.02] transition-transform duration-300">
                <div class="h-40 w-full bg-cover bg-center rounded-xl mb-4" style="background-image: url('{{ $rel->image_url }}')"></div>
                <span class="text-[10px] font-bold text-secondary uppercase font-label-caps mb-1">{{ $rel->category }}</span>
                <h4 class="font-title-md text-sm text-primary font-bold mb-3 line-clamp-2">{{ $rel->title }}</h4>
                <a href="{{ route('blog.show', $rel->slug) }}" class="text-secondary hover:text-primary font-bold text-xs flex items-center gap-1 font-label-caps mt-auto">
                    Read Story <span class="material-symbols-outlined text-xs">arrow_forward</span>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    @endif
</main>
@endsection

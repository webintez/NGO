@extends('layouts.app')

@section('title', 'Admin Login | Universal Peace Council')

@section('content')
<main class="min-h-[70vh] flex items-center justify-center py-12 px-margin-mobile">
    <div class="glass-card p-8 md:p-12 w-full max-w-md border border-white/20 shadow-2xl relative">
        <div class="absolute top-0 left-0 w-full h-1 rainbow-gradient rounded-t-2xl"></div>
        
        <div class="text-center mb-8">
            <img src="{{ asset('images/logo.png') }}" alt="UPC Logo" class="w-16 h-16 object-contain mx-auto mb-4">
            <h1 class="font-headline-lg text-2xl font-extrabold text-primary uppercase">Admin Portal</h1>
            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest font-label-caps mt-1">Authorized Access Only</p>
        </div>

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-6" autocomplete="off">
            @csrf
            <div>
                <label class="font-label-caps text-xs text-primary font-bold uppercase block mb-2">Email Address</label>
                <input name="email" type="email" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="upc@gmail.com" value="{{ old('email') }}" required autofocus/>
                @error('email')
                    <span class="text-xs text-error font-bold mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="font-label-caps text-xs text-primary font-bold uppercase block mb-2">Secret Password</label>
                <input name="password" type="password" class="w-full bg-white/50 border-b-2 border-primary focus:border-secondary transition-colors outline-none p-3 rounded-xl font-body-md" placeholder="Enter password" required/>
                @error('password')
                    <span class="text-xs text-error font-bold mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-primary text-white py-4 rounded-xl font-bold uppercase tracking-wider text-sm hover:bg-secondary transition-colors shadow-lg active:scale-95">
                Authenticate
            </button>
        </form>
    </div>
</main>
@endsection

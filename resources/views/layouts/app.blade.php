<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0D3B6E">
    <meta name="description" content="UCC IT Department – Student Portal">
    <title>@yield('title', 'UCC IT Department')</title>

    {{-- PWA Manifest (erag/laravel-pwa) --}}
    @laravelPWA

    {{-- Google Fonts --}}
    <link rel="manifest" href="/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    {{-- App Stylesheet --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    {{-- Top App Bar --}}
    <header class="app-bar">
        <div class="app-bar__inner">
            @if(request()->routeIs('home'))
                <div class="app-bar__logo">
                    <img src="{{ asset('icons/ucc-logo.png') }}" alt="UCC Logo" class="logo-img" onerror="this.style.display='none'">
                    <span class="app-bar__title">Welcome to UCC's IT Program</span>
                </div>
            @else
                <a href="{{ route('home') }}" class="back-btn" aria-label="Go back">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M20 12H4M4 12L10 6M4 12L10 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <span class="app-bar__title">@yield('page-title', 'UCC IT')</span>
            @endif
        </div>
    </header>

    {{-- Main Content --}}
    <main class="main-content">
        @yield('content')
    </main>

    {{-- Email FAB --}}
    <a href="mailto:hod.it@ucc.edu.jm?subject=Student%20Inquiry" class="fab" aria-label="Email the HOD">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
            <path d="M3 8L10.89 13.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="fab__label">Email HOD</span>
    </a>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

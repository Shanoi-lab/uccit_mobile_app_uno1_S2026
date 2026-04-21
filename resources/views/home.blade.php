@extends('layouts.app')

@section('title', 'UCC IT – Home')

@section('content')
<div class="home-hero">
    <div class="hero-badge">Department of Information Technology</div>
    <h1 class="hero-title">University of the<br>Commonwealth Caribbean</h1>
    <p class="hero-sub">Your student portal for IT resources</p>
</div>

<nav class="menu-grid" aria-label="Main Features">

    <a href="{{ route('directory.index') }}" class="menu-card" style="--accent:#1A73E8">
        <div class="menu-card__icon" style="background:#E8F0FE">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"
                      stroke="#1A73E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="menu-card__text">
            <h2 class="menu-card__title">Faculty &amp; Staff</h2>
            <p class="menu-card__desc">Directory with contacts</p>
        </div>
        <div class="menu-card__arrow">›</div>
    </a>

    <a href="{{ route('courses.index') }}" class="menu-card" style="--accent:#00897B">
        <div class="menu-card__icon" style="background:#E0F2F1">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
                      stroke="#00897B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="menu-card__text">
            <h2 class="menu-card__title">Courses</h2>
            <p class="menu-card__desc">Browse 10 IT programmes</p>
        </div>
        <div class="menu-card__arrow">›</div>
    </a>

    <a href="{{ route('admissions.index') }}" class="menu-card" style="--accent:#E53935">
        <div class="menu-card__icon" style="background:#FFEBEE">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                      stroke="#E53935" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="menu-card__text">
            <h2 class="menu-card__title">Admissions</h2>
            <p class="menu-card__desc">Requirements &amp; apply</p>
        </div>
        <div class="menu-card__arrow">›</div>
    </a>

    <a href="{{ route('social.index') }}" class="menu-card" style="--accent:#7B1FA2">
        <div class="menu-card__icon" style="background:#F3E5F5">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                      stroke="#7B1FA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="menu-card__text">
            <h2 class="menu-card__title">Social Media</h2>
            <p class="menu-card__desc">Facebook, Twitter, Instagram</p>
        </div>
        <div class="menu-card__arrow">›</div>
    </a>

</nav>
@endsection

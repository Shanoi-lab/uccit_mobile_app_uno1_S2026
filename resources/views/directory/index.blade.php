@extends('layouts.app')

@section('title', 'Faculty & Staff Directory')
@section('page-title', 'Faculty & Staff')

@section('content')
<div class="page-intro">
    <p>Meet the Department of Information Technology team. Tap a card to call or email directly.</p>
</div>

<div class="directory-grid">
    @foreach($staff as $member)
    <div class="staff-card">
        <div class="staff-card__photo-wrap">
            @if($member->photo)
                <img src="{{ asset('images/staff/' . $member->photo) }}"
                     alt="{{ $member->name }}"
                     class="staff-card__photo"
                     onerror="this.src='{{ asset('images/staff/placeholder.png') }}'">
            @else
                <div class="staff-card__photo staff-card__photo--placeholder">
                    <span>{{ strtoupper(substr($member->name, 0, 2)) }}</span>
                </div>
            @endif
        </div>

        <div class="staff-card__info">
            <h2 class="staff-card__name">{{ $member->name }}</h2>
            <p class="staff-card__role">{{ $member->role }}</p>

            <div class="staff-card__actions">
                <a href="tel:{{ $member->phone }}" class="action-btn action-btn--call" aria-label="Call {{ $member->name }}">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    {{ $member->phone }}
                </a>

                <a href="mailto:{{ $member->email }}" class="action-btn action-btn--email" aria-label="Email {{ $member->name }}">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    {{ $member->email }}
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

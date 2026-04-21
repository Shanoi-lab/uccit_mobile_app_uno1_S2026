@extends('layouts.app')

@section('title', 'Admissions')
@section('page-title', 'Admissions')

@section('content')
<div class="admissions-page">

    <div class="admit-hero">
        <div class="admit-hero__icon">🎓</div>
        <h1 class="admit-hero__title">Join the IT Department</h1>
        <p class="admit-hero__sub">Start your journey in Information Technology at UCC</p>
    </div>

    <section class="admit-section">
        <h2 class="section-title">General Entry Requirements</h2>
        <ul class="req-list">
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>Five (5) CXC/CSEC passes including <strong>English Language</strong> and <strong>Mathematics</strong></span>
            </li>
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>Minimum Grade II in each subject</span>
            </li>
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>Valid government-issued photo ID</span>
            </li>
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>Completed application form</span>
            </li>
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>Two (2) passport-sized photographs</span>
            </li>
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>Certified copies of all academic certificates</span>
            </li>
        </ul>
    </section>

    <section class="admit-section">
        <h2 class="section-title">IT-Specific Requirements</h2>
        <ul class="req-list">
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>A pass in <strong>Information Technology</strong> at CSEC level is an asset</span>
            </li>
            <li class="req-item">
                <span class="req-icon">✓</span>
                <span>CAPE passes in IT or related subjects may earn advanced standing</span>
            </li>
        </ul>
    </section>

    <section class="admit-section">
        <h2 class="section-title">Programme Offerings</h2>
        <div class="programme-chips">
            <span class="chip">BSc Information Technology</span>
            <span class="chip">Associate Degree in Computing</span>
            <span class="chip">Diploma in Networking</span>
            <span class="chip">Certificate in IT Support</span>
        </div>
    </section>

    <section class="admit-section">
        <h2 class="section-title">How to Apply</h2>
        <ol class="steps-list">
            <li>Review entry requirements above</li>
            <li>Gather all required documents</li>
            <li>Complete the online application form</li>
            <li>Pay the application fee</li>
            <li>Await your admissions decision by email</li>
        </ol>
    </section>

    <div class="apply-cta">
        <a href="https://www.ucc.edu.jm/apply" target="_blank" rel="noopener noreferrer" class="apply-btn">
            Apply to UCC Now
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <p class="apply-note">You will be taken to the official UCC admissions portal</p>
    </div>

</div>
@endsection

@extends('layouts.app')

@section('title', 'Social Media')
@section('page-title', 'Social Media')

@section('content')
<div class="social-page">

    <div class="social-tabs" role="tablist">
        <button class="social-tab active" data-tab="facebook" role="tab" aria-selected="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
            </svg>
            Facebook
        </button>
        <button class="social-tab" data-tab="twitter" role="tab" aria-selected="false">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
            </svg>
            Twitter
        </button>
        <button class="social-tab" data-tab="instagram" role="tab" aria-selected="false">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                <circle cx="12" cy="12" r="4"/>
                <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/>
            </svg>
            Instagram
        </button>
    </div>

    <div class="social-panels">
        <div class="social-panel active" id="panel-facebook">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUCCJamaica&tabs=timeline&width=400&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true"
                class="social-iframe"
                title="UCC Facebook Page"
                scrolling="no"
                frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
            </iframe>
        </div>

        <div class="social-panel" id="panel-twitter">
            <a class="twitter-timeline"
               href="https://twitter.com/UCCJamaica"
               data-height="600"
               data-theme="light">
                Tweets by @UCCJamaica
            </a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div class="social-panel" id="panel-instagram">
            <div class="instagram-embed-wrap">
                <p class="instagram-note">View UCC on Instagram</p>
                <a href="https://www.instagram.com/uccjamaica/" target="_blank" rel="noopener noreferrer" class="insta-link-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="20" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/>
                    </svg>
                    Open @uccjamaica on Instagram
                </a>
                <p class="insta-note-small">Instagram does not allow direct embedding. Tap above to view in-app.</p>
            </div>
        </div>
    </div>

</div>

<script>
document.querySelectorAll('.social-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        document.querySelectorAll('.social-tab, .social-panel').forEach(el => {
            el.classList.remove('active');
            el.setAttribute('aria-selected', 'false');
        });
        tab.classList.add('active');
        tab.setAttribute('aria-selected', 'true');
        document.getElementById('panel-' + tab.dataset.tab).classList.add('active');
    });
});
</script>
@endsection

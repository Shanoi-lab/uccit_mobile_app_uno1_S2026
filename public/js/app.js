// UCC IT PWA – app.js

// Register Service Worker (handled by erag/laravel-pwa package)
// The @laravelPWA directive in the layout handles SW registration automatically.

// Optional: show install prompt for PWA
let deferredPrompt;
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
});

// Smooth active state on menu cards
document.querySelectorAll('.menu-card').forEach(card => {
    card.addEventListener('touchstart', () => card.classList.add('touching'), { passive: true });
    card.addEventListener('touchend', () => card.classList.remove('touching'));
});

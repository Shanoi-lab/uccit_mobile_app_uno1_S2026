// UCC IT Student Portal - Service Worker
// Cache name - update the version number whenever you make changes to your site
const CACHE_NAME = 'ucc-it-cache-v2';

// All the pages/assets to cache when the app is first installed
const urlsToCache = [
    '/',
    '/courses',
    '/admissions',
    '/directory',
    '/social',
    '/manifest.json',
    '/icons/ucc-logo.png',
    '/icons/icon-192x192.png',
    '/icons/icon-512x512.png'
];

// =====================
// INSTALL — runs once when service worker is first registered
// Caches all your core pages and assets
// =====================
self.addEventListener('install', function(event) {
    console.log('[ServiceWorker] Installing...');
    event.waitUntil(
        caches.open(CACHE_NAME).then(function(cache) {
            console.log('[ServiceWorker] Caching app shell');
            return cache.addAll(urlsToCache);
        })
    );
    self.skipWaiting(); // Activate immediately, don't wait
});

// =====================
// ACTIVATE — runs after install
// Cleans up any old caches from previous versions
// =====================
self.addEventListener('activate', function(event) {
    console.log('[ServiceWorker] Activating...');
    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    if (cacheName !== CACHE_NAME) {
                        console.log('[ServiceWorker] Deleting old cache:', cacheName);
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
    self.clients.claim(); // Take control of all open tabs immediately
});

// =====================
// FETCH — runs on every network request
// Strategy: Network first, fall back to cache if offline
// =====================
self.addEventListener('fetch', function(event) {
    // Only handle GET requests
    if (event.request.method !== 'GET') return;

    event.respondWith(
        fetch(event.request)
            .then(function(networkResponse) {
                // If we got a valid response, clone it and update the cache
                if (networkResponse && networkResponse.status === 200) {
                    const responseClone = networkResponse.clone();
                    caches.open(CACHE_NAME).then(function(cache) {
                        cache.put(event.request, responseClone);
                    });
                }
                return networkResponse;
            })
            .catch(function() {
                // Network failed (offline) — try to serve from cache
                return caches.match(event.request).then(function(cachedResponse) {
                    if (cachedResponse) {
                        return cachedResponse;
                    }
                    // If page not in cache either, show a fallback for navigation requests
                    if (event.request.mode === 'navigate') {
                        return caches.match('/');
                    }
                });
            })
    );
});

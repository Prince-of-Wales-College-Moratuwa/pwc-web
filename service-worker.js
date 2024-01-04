// service-worker.js

const cacheName = 'pwa-cache-v1.5';

// List of assets to cache
const assetsToCache = [
  '/resources/css/style.css',
  '/resources/js/main.js',
  '/content/icons/logo-70x70-pwc.png',
  '/content/icons/logo-android-chrome-icon-pwc.png',
  '/offline.php' // An offline fallback page
];

// Install event: Cache assets
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(cacheName)
      .then(cache => cache.addAll(assetsToCache))
  );
});

self.addEventListener('fetch', event => {
  if (!navigator.onLine) {
    event.respondWith(caches.match('/offline.php'));
    return;
  }

  event.respondWith(
    caches.match(event.request)
      .then(cachedResponse => {
        return cachedResponse || fetch(event.request);
      })
  );
});

// Activate event: Clean up old caches
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.filter(name => name !== cacheName)
            .map(name => caches.delete(name))
        );
      })
  );
});

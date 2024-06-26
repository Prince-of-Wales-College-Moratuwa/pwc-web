const CACHE_NAME = 'my-pwa-cache-v5';
const urlsToCache = [
  '/offline',
  '/content/icons/logo-70x70-pwc.webp',
  '/content/icons/logo-apple-touch-icon-pwc.webp',
  '/content/icons/logo-android-chrome-icon-pwc.webp',
  '/resources/lib/animate/animate.min.css',
  '/resources/lib/owlcarousel/assets/owl.carousel.min.css',
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
  'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
  '/resources/css/bootstrap.min.css',
  '/resources/css/style.css',
  'https://code.jquery.com/jquery-3.7.1.min.js',
  'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
  '/resources/lib/wow/wow.min.js',
  '/resources/lib/easing/easing.min.js',
  '/resources/lib/waypoints/waypoints.min.js',
  '/resources/js/main.js'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        if (response) {
          return response; 
        }
        return fetch(event.request)
          .catch(() => caches.match('/offline'));
      })
  );
});

self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (!cacheWhitelist.includes(cacheName)) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
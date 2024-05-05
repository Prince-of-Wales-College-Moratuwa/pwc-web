const CACHE_NAME = 'my-pwa-cache-v4';
const urlsToCache = [
  '/content/icons/logo-70x70-pwc.webp',
  '/content/icons/logo-apple-touch-icon-pwc.webp',
  '/content/icons/logo-android-chrome-icon-pwc.webp',
  '/content/icons/logo-70x70-pwc.webp',
  '/lib/animate/animate.min.css',
  '/lib/owlcarousel/assets/owl.carousel.min.css',
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
  'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
  '/css/bootstrap.min.css',
  '/css/style.css',
  'https://code.jquery.com/jquery-3.7.1.min.js',
  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
  '/lib/wow/wow.min.js',
  '/lib/easing/easing.min.js',
  '/lib/waypoints/waypoints.min.js',
  '/js/main.js'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache);
      })
      .catch(error => {
        console.error('Failed to open cache:', error);
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

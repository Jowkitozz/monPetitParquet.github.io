const CACHE_NAME = 'mpp-cache-v1';

const FILES_TO_CACHE = [
  '/index.html'];

var FILES_TO_CACHE = [
  './',
  './index.html'
];

self.addEventListener('install', function (event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function (cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});


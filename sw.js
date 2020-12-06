const CACHE_NAME = 'solar';
const urlsToCache = [ 
    '/',
    '/res/site/css/style.css',
    '/res/site/css/bootstrap.min.css',
    '/res/site/css/font-awesome.min.css',
    '/res/site/css/owl.carousel.css',
    '/res/site/css/responsive.css',
    '/main.js'
]
self.addEventListener('install', function(event){
    event.waitUntil(
        caches.open(CACHE_NAME)
        .then(function(cache){
            console.log('Opened cache');
            return cache.addAll(urlsToCache)
        })
    );
});
self.addEventListener('activate', event => {
    event.waitUntil(self.clients.claim())
});

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request).then( response =>{
            return response || fetch(event.request)
        })
    );
});
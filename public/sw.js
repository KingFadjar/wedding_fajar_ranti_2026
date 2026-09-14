const CACHE_VERSION = 'fajar-ranti-gallery-v1';

const STATIC_CACHE = `${CACHE_VERSION}-static`;

const IMAGE_CACHE = `${CACHE_VERSION}-images`;

const PAGE_CACHE = `${CACHE_VERSION}-pages`;


/*
|--------------------------------------------------------------------------
| Install
|--------------------------------------------------------------------------
|
| Service worker langsung aktif tanpa menunggu tab ditutup.
|
*/

self.addEventListener('install', (event) => {

    self.skipWaiting();

});


/*
|--------------------------------------------------------------------------
| Activate
|--------------------------------------------------------------------------
|
| Hapus cache versi lama.
|
*/

self.addEventListener('activate', (event) => {

    event.waitUntil(

        caches
            .keys()
            .then((cacheNames) => {

                return Promise.all(

                    cacheNames.map((cacheName) => {

                        if (
                            ! cacheName.startsWith(
                                CACHE_VERSION
                            )
                        ) {

                            return caches.delete(
                                cacheName
                            );

                        }

                    })

                );

            })
            .then(() => {

                return self.clients.claim();

            })

    );

});


/*
|--------------------------------------------------------------------------
| Fetch
|--------------------------------------------------------------------------
*/

self.addEventListener('fetch', (event) => {

    const request = event.request;

    const url = new URL(
        request.url
    );


    /*
    |--------------------------------------------------------------------------
    | Hanya GET
    |--------------------------------------------------------------------------
    */

    if (request.method !== 'GET') {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | Jangan intercept request beda domain tertentu
    |--------------------------------------------------------------------------
    */

    if (
        url.protocol !== 'http:'
        &&
        url.protocol !== 'https:'
    ) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | IMAGE CACHE
    |--------------------------------------------------------------------------
    |
    | Foto gallery:
    |
    | /assets/images/adat/*
    | /assets/images/modern/*
    |
    | Strategi:
    | CACHE FIRST
    |
    */

    if (
        url.pathname.startsWith(
            '/assets/images/adat/'
        )
        ||
        url.pathname.startsWith(
            '/assets/images/modern/'
        )
    ) {

        event.respondWith(

            cacheFirstImage(
                request
            )

        );

        return;

    }


    /*
    |--------------------------------------------------------------------------
    | GALLERY PAGE
    |--------------------------------------------------------------------------
    |
    | /galeri
    |
    | Setelah pertama kali terbuka,
    | halaman berikutnya bisa langsung dari cache.
    |
    */

    if (
        url.origin === self.location.origin
        &&
        (
            url.pathname === '/galeri'
            ||
            url.pathname === '/galeri/'
        )
    ) {

        event.respondWith(

            cacheFirstPage(
                request
            )

        );

        return;

    }


    /*
    |--------------------------------------------------------------------------
    | STATIC RESOURCE
    |--------------------------------------------------------------------------
    */

    if (
        request.destination === 'style'
        ||
        request.destination === 'script'
        ||
        request.destination === 'font'
    ) {

        event.respondWith(

            staleWhileRevalidate(
                request
            )

        );

    }

});


/*
|--------------------------------------------------------------------------
| Cache First Image
|--------------------------------------------------------------------------
*/

async function cacheFirstImage(request)
{

    const cache =
        await caches.open(
            IMAGE_CACHE
        );


    const cachedResponse =
        await cache.match(
            request
        );


    if (cachedResponse) {

        return cachedResponse;

    }


    try {

        const networkResponse =
            await fetch(
                request
            );


        if (
            networkResponse
            &&
            networkResponse.ok
        ) {

            cache.put(
                request,
                networkResponse.clone()
            );

        }


        return networkResponse;

    }
    catch (error) {

        return new Response(
            '',
            {
                status: 408,
                statusText: 'Image unavailable'
            }
        );

    }

}


/*
|--------------------------------------------------------------------------
| Cache First Page
|--------------------------------------------------------------------------
*/

async function cacheFirstPage(request)
{

    const cache =
        await caches.open(
            PAGE_CACHE
        );


    const cachedResponse =
        await cache.match(
            request
        );


    if (cachedResponse) {

        return cachedResponse;

    }


    try {

        const networkResponse =
            await fetch(
                request
            );


        if (
            networkResponse
            &&
            networkResponse.ok
        ) {

            cache.put(
                request,
                networkResponse.clone()
            );

        }


        return networkResponse;

    }
    catch (error) {

        return new Response(

            `
            <!doctype html>

            <html>

            <head>

                <meta
                    name="viewport"
                    content="width=device-width,initial-scale=1"
                >

                <title>
                    Galeri Offline
                </title>

            </head>

            <body>

                <div
                    style="
                        min-height:100vh;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-family:Arial,sans-serif;
                        background:#fff8f5;
                        color:#800020;
                        text-align:center;
                        padding:30px;
                    "
                >

                    <div>

                        <h2>
                            Galeri belum tersedia offline
                        </h2>

                        <p>
                            Silakan buka galeri sekali saat
                            terhubung internet.
                        </p>

                    </div>

                </div>

            </body>

            </html>
            `,

            {
                headers: {
                    'Content-Type':
                        'text/html; charset=UTF-8'
                }
            }

        );

    }

}


/*
|--------------------------------------------------------------------------
| Stale While Revalidate
|--------------------------------------------------------------------------
*/

async function staleWhileRevalidate(request)
{

    const cache =
        await caches.open(
            STATIC_CACHE
        );


    const cachedResponse =
        await cache.match(
            request
        );


    const networkPromise =
        fetch(
            request
        )
        .then((networkResponse) => {

            if (
                networkResponse
                &&
                networkResponse.ok
            ) {

                cache.put(
                    request,
                    networkResponse.clone()
                );

            }


            return networkResponse;

        })
        .catch(() => {

            return null;

        });


    return (
        cachedResponse
        ||
        networkPromise
    );

}
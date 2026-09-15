<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Galeri Fajar & Ranti</title>


    {{-- =========================================================
        TAILWIND
    ========================================================== --}}

    <script src="https://cdn.tailwindcss.com"></script>


    {{-- =========================================================
        GOOGLE FONT
    ========================================================== --}}

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Manrope:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >


    {{-- =========================================================
        MATERIAL ICON
    ========================================================== --}}

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet"
    >


    {{-- =========================================================
        TAILWIND CONFIG
    ========================================================== --}}

    <script>

        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        primary: '#570013',

                        maroon: '#800020',

                        gold: '#d4af37',

                        goldlight: '#ffe088',

                        cream: '#fff8f5',

                        surface: '#fff8f5',

                        soft: '#f5ece7',

                        textmain: '#1e1b18',

                        muted: '#584141',

                    },

                    fontFamily: {

                        serif: [
                            'Libre Caslon Text',
                            'serif'
                        ],

                        sans: [
                            'Manrope',
                            'sans-serif'
                        ],

                    },

                },

            },

        };

    </script>


    <style>

        html {
            scroll-behavior: smooth;
        }

        * {
            box-sizing: border-box;
        }

        body {

            margin: 0;

            font-family:
                'Manrope',
                sans-serif;

            background:
                #fff8f5;

            color:
                #1e1b18;

            overflow-x:
                hidden;

        }

        img {

            display:
                block;

            max-width:
                100%;

        }


        /* =========================================================
           SONGKET BACKGROUND
        ========================================================= */

        .songket-bg {

            background-image:

                url(
                    'data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 0L40 20L20 40L0 20L20 0ZM20 4L4 20L20 36L36 20L20 4Z" fill="%23800020" fill-opacity="0.035"/></svg>'
                );

            background-repeat:
                repeat;

        }


        /* =========================================================
           GALLERY MASONRY
        ========================================================= */

        .gallery-masonry {

            columns:
                3;

            column-gap:
                18px;

        }


        .gallery-photo {

            break-inside:
                avoid;

            margin-bottom:
                18px;

        }


        .gallery-item {

            position:
                relative;

            width:
                100%;

            overflow:
                hidden;

            border-radius:
                14px;

            background:
                #ede4de;

            cursor:
                pointer;

            box-shadow:

                0
                8px
                24px
                rgba(
                    80,
                    20,
                    31,
                    .08
                );

        }


        .gallery-item img {

            width:
                100%;

            height:
                auto;

            display:
                block;

            transition:

                transform
                .5s
                ease,

                filter
                .5s
                ease;

        }


        .gallery-item:hover img {

            transform:
                scale(1.035);

            filter:
                brightness(.78);

        }


        /* =========================================================
           OVERLAY
        ========================================================= */

        .gallery-overlay {

            position:
                absolute;

            inset:
                0;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            opacity:
                0;

            background:

                linear-gradient(
                    to top,
                    rgba(
                        87,
                        0,
                        19,
                        .60
                    ),
                    rgba(
                        0,
                        0,
                        0,
                        .02
                    )
                );

            transition:
                opacity
                .3s
                ease;

        }


        .gallery-item:hover
        .gallery-overlay {

            opacity:
                1;

        }


        /* =========================================================
           FILTER
        ========================================================= */

        .filter-button {

            padding:
                11px
                22px;

            border:

                1px
                solid
                rgba(
                    128,
                    0,
                    32,
                    .20
                );

            border-radius:
                999px;

            background:
                white;

            color:
                #800020;

            font-family:
                'Manrope',
                sans-serif;

            font-size:
                11px;

            font-weight:
                700;

            letter-spacing:
                .09em;

            text-transform:
                uppercase;

            cursor:
                pointer;

            transition:
                all
                .25s
                ease;

        }


        .filter-button:hover,
        .filter-button.active {

            color:
                #ffe088;

            background:
                #800020;

            border-color:
                #800020;

            transform:
                translateY(-1px);

        }


        /* =========================================================
           CACHE STATUS
        ========================================================= */

        .cache-status {

            position:
                fixed;

            left:
                50%;

            bottom:
                18px;

            transform:
                translateX(-50%);

            z-index:
                10000;

            display:
                none;

            align-items:
                center;

            gap:
                8px;

            padding:
                10px
                16px;

            max-width:
                calc(100vw - 30px);

            border:

                1px
                solid
                rgba(
                    212,
                    175,
                    55,
                    .45
                );

            border-radius:
                999px;

            background:
                rgba(
                    87,
                    0,
                    19,
                    .94
                );

            color:
                #ffe088;

            font-size:
                11px;

            font-weight:
                700;

            letter-spacing:
                .05em;

            box-shadow:

                0
                10px
                30px
                rgba(
                    0,
                    0,
                    0,
                    .20
                );

            backdrop-filter:
                blur(8px);

        }


        .cache-status.active {

            display:
                flex;

        }


        /* =========================================================
           LIGHTBOX
        ========================================================= */

        .lightbox {

            position:
                fixed;

            inset:
                0;

            z-index:
                99999;

            display:
                none;

            align-items:
                center;

            justify-content:
                center;

            padding:
                24px;

            background:

                rgba(
                    12,
                    6,
                    7,
                    .95
                );

            backdrop-filter:
                blur(8px);

        }


        .lightbox.active {

            display:
                flex;

        }


        .lightbox-image {

            max-width:

                min(
                    1200px,
                    92vw
                );

            max-height:
                88vh;

            width:
                auto;

            height:
                auto;

            object-fit:
                contain;

            border-radius:
                8px;

            box-shadow:

                0
                30px
                100px
                rgba(
                    0,
                    0,
                    0,
                    .55
                );

        }


        .lightbox-close {

            position:
                absolute;

            top:
                20px;

            right:
                24px;

            width:
                46px;

            height:
                46px;

            border:

                1px
                solid
                rgba(
                    255,
                    255,
                    255,
                    .30
                );

            border-radius:
                50%;

            color:
                white;

            background:

                rgba(
                    255,
                    255,
                    255,
                    .08
                );

            font-size:
                27px;

            cursor:
                pointer;

        }


        .lightbox-nav {

            position:
                absolute;

            top:
                50%;

            transform:
                translateY(-50%);

            width:
                50px;

            height:
                50px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            border:

                1px
                solid
                rgba(
                    255,
                    255,
                    255,
                    .30
                );

            border-radius:
                50%;

            color:
                white;

            background:

                rgba(
                    255,
                    255,
                    255,
                    .07
                );

            font-size:
                30px;

            cursor:
                pointer;

            transition:
                background
                .2s
                ease;

        }


        .lightbox-nav:hover,
        .lightbox-close:hover {

            background:

                rgba(
                    255,
                    255,
                    255,
                    .17
                );

        }


        .lightbox-prev {

            left:
                25px;

        }


        .lightbox-next {

            right:
                25px;

        }


        .lightbox-counter {

            position:
                absolute;

            bottom:
                22px;

            left:
                50%;

            transform:
                translateX(-50%);

            color:

                rgba(
                    255,
                    255,
                    255,
                    .75
                );

            font-size:
                12px;

            font-weight:
                600;

            letter-spacing:
                .15em;

        }


        /* =========================================================
           TABLET
        ========================================================= */

        @media (
            max-width: 900px
        ) {

            .gallery-masonry {

                columns:
                    2;

            }

        }


        /* =========================================================
           MOBILE
        ========================================================= */

        @media (
            max-width: 640px
        ) {

            .gallery-masonry {

                columns:
                    1;

            }


            .gallery-photo {

                margin-bottom:
                    14px;

            }


            .gallery-item {

                border-radius:
                    10px;

            }


            .lightbox {

                padding:
                    10px;

            }


            .lightbox-image {

                max-width:
                    96vw;

                max-height:
                    82vh;

            }


            .lightbox-nav {

                width:
                    40px;

                height:
                    40px;

                font-size:
                    23px;

            }


            .lightbox-prev {

                left:
                    7px;

            }


            .lightbox-next {

                right:
                    7px;

            }


            .lightbox-close {

                top:
                    10px;

                right:
                    10px;

                width:
                    40px;

                height:
                    40px;

            }


            .cache-status {

                bottom:
                    12px;

                font-size:
                    10px;

            }

        }

    

        /* =========================================================
           FUTURISTIC SCROLL + MUSIC
        ========================================================= */
        :root {
            --fx-maroon: #800020;
            --fx-maroon-dark: #570013;
            --fx-gold: #d4af37;
            --fx-gold-light: #ffe088;
        }

        #fx-scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            z-index: 99999;
            pointer-events: none;
            background: rgba(128, 0, 32, .06);
        }

        #fx-scroll-progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(
                90deg,
                var(--fx-maroon-dark),
                var(--fx-maroon),
                var(--fx-gold),
                var(--fx-gold-light)
            );
            box-shadow:
                0 0 12px rgba(128,0,32,.38),
                0 0 20px rgba(212,175,55,.20);
            transition: width .08s linear;
        }

        .fx-ambient {
            position: fixed;
            border-radius: 999px;
            filter: blur(90px);
            pointer-events: none;
            z-index: 0;
            opacity: .12;
            will-change: transform;
        }

        .fx-ambient.fx-a {
            width: 280px;
            height: 280px;
            top: 10vh;
            left: -120px;
            background: var(--fx-maroon);
        }

        .fx-ambient.fx-b {
            width: 330px;
            height: 330px;
            top: 55vh;
            right: -150px;
            background: var(--fx-gold);
            opacity: .08;
        }

        .fx-reveal {
            opacity: 0;
            transform:
                perspective(1100px)
                translate3d(0, 38px, 0)
                scale(.985);
            filter: blur(6px);
            transition:
                opacity .8s cubic-bezier(.16,1,.3,1),
                transform .95s cubic-bezier(.16,1,.3,1),
                filter .8s ease;
            will-change: opacity, transform, filter;
        }

        .fx-reveal.fx-visible {
            opacity: 1;
            transform:
                perspective(1100px)
                translate3d(0,0,0)
                scale(1);
            filter: blur(0);
        }

        .fx-left {
            transform:
                perspective(1100px)
                translate3d(-44px, 28px, 0)
                rotateY(4deg)
                scale(.985);
        }

        .fx-right {
            transform:
                perspective(1100px)
                translate3d(44px, 28px, 0)
                rotateY(-4deg)
                scale(.985);
        }

        .fx-left.fx-visible,
        .fx-right.fx-visible {
            transform:
                perspective(1100px)
                translate3d(0,0,0)
                rotateY(0)
                scale(1);
        }

        .fx-card {
            position: relative;
            overflow: hidden;
            transition:
                transform .28s ease,
                box-shadow .28s ease,
                border-color .28s ease;
            transform-style: preserve-3d;
        }

        .fx-card::after {
            content: "";
            position: absolute;
            inset: -120%;
            background: linear-gradient(
                115deg,
                transparent 42%,
                rgba(255,255,255,.26) 50%,
                rgba(255,224,136,.12) 53%,
                transparent 61%
            );
            transform: translateX(-40%) rotate(8deg);
            transition: transform .85s cubic-bezier(.16,1,.3,1);
            pointer-events: none;
            z-index: 5;
        }

        .fx-card:hover {
            transform: translateY(-4px);
            box-shadow:
                0 18px 45px rgba(87,0,19,.14),
                0 0 0 1px rgba(212,175,55,.10);
        }

        .fx-card:hover::after {
            transform: translateX(42%) rotate(8deg);
        }

        .fx-heading {
            transition: text-shadow .6s ease;
        }

        .fx-heading.fx-visible,
        .fx-visible .fx-heading {
            text-shadow:
                0 0 22px rgba(128,0,32,.10),
                0 0 34px rgba(212,175,55,.08);
        }

        .music-control {
            position: fixed;
            left: 16px;
            bottom: 16px;
            z-index: 99990;
            width: 48px;
            height: 48px;
            border: 1px solid rgba(255,224,136,.55);
            border-radius: 999px;
            background: rgba(128,0,32,.92);
            color: #ffe088;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow:
                0 12px 30px rgba(87,0,19,.28),
                0 0 0 1px rgba(255,255,255,.05) inset;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition:
                transform .25s ease,
                box-shadow .25s ease;
        }

        .music-control:hover {
            transform: translateY(-3px) scale(1.04);
            box-shadow:
                0 18px 36px rgba(87,0,19,.34),
                0 0 18px rgba(255,224,136,.15);
        }

        .music-control.is-playing {
            animation: fxMusicPulse 2.2s ease-in-out infinite;
        }

        .music-control .music-icon {
            font-size: 22px;
            line-height: 1;
        }

        .music-tip {
            position: fixed;
            left: 74px;
            bottom: 22px;
            z-index: 99989;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255,248,245,.95);
            color: #800020;
            border: 1px solid rgba(128,0,32,.12);
            box-shadow: 0 10px 26px rgba(87,0,19,.12);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            opacity: 0;
            transform: translateX(-8px);
            pointer-events: none;
            transition:
                opacity .3s ease,
                transform .3s ease;
        }

        .music-tip.show {
            opacity: 1;
            transform: translateX(0);
        }

        @keyframes fxMusicPulse {
            0%,100% {
                box-shadow:
                    0 12px 30px rgba(87,0,19,.28),
                    0 0 0 0 rgba(255,224,136,.18);
            }
            50% {
                box-shadow:
                    0 14px 34px rgba(87,0,19,.34),
                    0 0 0 10px rgba(255,224,136,0);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }

            .fx-reveal {
                opacity: 1 !important;
                transform: none !important;
                filter: none !important;
            }

            .fx-ambient {
                display: none;
            }
        }

</style>

</head>


<body class="songket-bg">

<div id="fx-scroll-progress" aria-hidden="true">
    <div id="fx-scroll-progress-bar"></div>
</div>

<div class="fx-ambient fx-a" aria-hidden="true"></div>
<div class="fx-ambient fx-b" aria-hidden="true"></div>

<audio
    id="wedding-music"
    preload="auto"
    loop
    playsinline
>
    <source
        src="{{ asset('assets/audio/wedding-song.mp3') }}"
        type="audio/mpeg"
    >
</audio>

<button
    id="music-control"
    class="music-control"
    type="button"
    aria-label="Putar atau jeda musik"
    aria-pressed="false"
>
    <span id="music-icon" class="music-icon">♪</span>
</button>

<div id="music-tip" class="music-tip" aria-hidden="true">
    Tap untuk musik
</div>



{{-- =============================================================
     HEADER
============================================================= --}}

<header
    class="
        bg-white/90
        backdrop-blur
        border-b
        border-maroon/10
        sticky
        top-0
        z-40
    "
>

    <div
        class="
            max-w-6xl
            mx-auto
            px-4
            sm:px-5
            py-4
            sm:py-5
            flex
            items-center
            justify-between
            gap-4
        "
    >

        <a
            href="{{ route('wedding.invitation') }}"
            class="
                font-serif
                text-[20px]
                sm:text-[22px]
                md:text-[28px]
                font-bold
                text-maroon
                whitespace-nowrap
            "
        >
            Fajar & Ranti
        </a>


        <a
            href="{{ route('wedding.invitation') }}"
            class="
                text-[9px]
                sm:text-[11px]
                md:text-[12px]
                font-bold
                tracking-widest
                uppercase
                text-maroon
                text-right
            "
        >
            ← Kembali ke Undangan
        </a>

    </div>

</header>



{{-- =============================================================
     HERO
============================================================= --}}

<section
    class="
        py-14
        sm:py-16
        md:py-24
        px-5
        text-center
    "
>

    <div
        class="
            max-w-4xl
            mx-auto
        "
    >

        <span
            class="
                text-gold
                font-bold
                text-[10px]
                sm:text-[11px]
                tracking-[0.28em]
                uppercase
            "
        >
            Dokumentasi & Kenangan
        </span>


        <h1
            class="
                font-serif
                text-[36px]
                sm:text-[48px]
                md:text-[64px]
                leading-tight
                text-maroon
                mt-4
            "
        >
            Galeri Fajar & Ranti
        </h1>


        <p
            class="
                max-w-2xl
                mx-auto
                text-muted
                text-[13px]
                sm:text-[14px]
                md:text-[16px]
                leading-7
                md:leading-8
                mt-6
                italic
            "
        >
            Potret kenangan adat Minangkabau
            dan nuansa modern yang mengabadikan
            perjalanan menuju hari bahagia kami.
        </p>


        <div
            class="
                flex
                items-center
                justify-center
                mt-8
                opacity-60
            "
        >

            <div
                class="
                    h-px
                    w-16
                    sm:w-20
                    bg-maroon
                "
            ></div>


            <span
                class="
                    text-maroon
                    mx-4
                "
            >
                ❖
            </span>


            <div
                class="
                    h-px
                    w-16
                    sm:w-20
                    bg-maroon
                "
            ></div>

        </div>

    </div>

</section>



{{-- =============================================================
     SUMMARY
============================================================= --}}

<section
    class="
        px-4
        sm:px-5
        pb-10
        sm:pb-12
    "
>

    <div
        class="
            max-w-4xl
            mx-auto
            grid
            grid-cols-3
            bg-white
            border
            border-maroon/10
            rounded-xl
            overflow-hidden
            shadow-sm
        "
    >

        {{-- TOTAL --}}

        <div
            class="
                text-center
                p-4
                sm:p-6
                border-r
                border-maroon/10
            "
        >

            <div
                class="
                    font-serif
                    text-[25px]
                    sm:text-[30px]
                    md:text-[38px]
                    text-maroon
                "
            >
                {{
                    count($adatPhotos)
                    +
                    count($modernPhotos)
                }}
            </div>


            <div
                class="
                    text-[7px]
                    sm:text-[11px]
                    uppercase
                    tracking-widest
                    text-muted
                    mt-1
                "
            >
                Total Foto
            </div>

        </div>



        {{-- ADAT --}}

        <div
            class="
                text-center
                p-4
                sm:p-6
                border-r
                border-maroon/10
            "
        >

            <div
                class="
                    font-serif
                    text-[25px]
                    sm:text-[30px]
                    md:text-[38px]
                    text-maroon
                "
            >
                {{ count($adatPhotos) }}
            </div>


            <div
                class="
                    text-[7px]
                    sm:text-[11px]
                    uppercase
                    tracking-widest
                    text-muted
                    mt-1
                "
            >
                Adat
            </div>

        </div>



        {{-- MODERN --}}

        <div
            class="
                text-center
                p-4
                sm:p-6
            "
        >

            <div
                class="
                    font-serif
                    text-[25px]
                    sm:text-[30px]
                    md:text-[38px]
                    text-maroon
                "
            >
                {{ count($modernPhotos) }}
            </div>


            <div
                class="
                    text-[7px]
                    sm:text-[11px]
                    uppercase
                    tracking-widest
                    text-muted
                    mt-1
                "
            >
                Modern
            </div>

        </div>

    </div>

</section>



{{-- =============================================================
     FILTER
============================================================= --}}

<section
    class="
        px-4
        sm:px-5
        pb-10
        sm:pb-12
    "
>

    <div
        class="
            max-w-5xl
            mx-auto
            flex
            flex-wrap
            justify-center
            gap-2
            sm:gap-3
        "
    >

        <button
            type="button"
            class="
                filter-button
                active
            "
            data-filter="all"
        >
            Semua
        </button>


        <button
            type="button"
            class="
                filter-button
            "
            data-filter="adat"
        >
            Adat
        </button>


        <button
            type="button"
            class="
                filter-button
            "
            data-filter="modern"
        >
            Modern
        </button>

    </div>

</section>



{{-- =============================================================
     GALLERY
============================================================= --}}

<section
    class="
        px-3
        sm:px-5
        pb-24
    "
>

    <div
        class="
            max-w-6xl
            mx-auto
        "
    >

        @if (empty($adatPhotos) && empty($modernPhotos))

            <div
                class="
                    bg-white
                    border
                    border-maroon/10
                    rounded-xl
                    text-center
                    py-20
                    px-6
                "
            >

                <span
                    class="
                        material-symbols-outlined
                        text-[52px]
                        text-maroon/30
                    "
                >
                    photo_library
                </span>


                <h2
                    class="
                        font-serif
                        text-[27px]
                        text-maroon
                        mt-5
                    "
                >
                    Belum Ada Foto
                </h2>


                <p
                    class="
                        text-muted
                        text-sm
                        mt-3
                    "
                >
                    Tambahkan foto ke folder
                    adat atau modern.
                </p>

            </div>

        @else

            <div
                id="gallery"
                class="gallery-masonry"
            >


                {{-- =================================================
                    FOTO ADAT
                ================================================= --}}

                @foreach ($adatPhotos as $photo)

                    <div
                        class="
                            gallery-photo
                        "
                        data-category="adat"
                    >

                        <div
                            class="
                                gallery-item
                            "
                            data-src="{{ $photo['url'] }}"
                            data-name="{{ $photo['name'] }}"
                        >

                            <img
                                src="{{ $photo['url'] }}"
                                alt="Foto adat Fajar dan Ranti"
                                loading="lazy"
                                decoding="async"
                            >


                            <div
                                class="
                                    gallery-overlay
                                "
                            >

                                <div
                                    class="
                                        w-12
                                        h-12
                                        rounded-full
                                        border
                                        border-white/60
                                        bg-white/10
                                        backdrop-blur
                                        flex
                                        items-center
                                        justify-center
                                    "
                                >

                                    <span
                                        class="
                                            material-symbols-outlined
                                            text-white
                                            text-[27px]
                                        "
                                    >
                                        zoom_in
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach



                {{-- =================================================
                    FOTO MODERN
                ================================================= --}}

                @foreach ($modernPhotos as $photo)

                    <div
                        class="
                            gallery-photo
                        "
                        data-category="modern"
                    >

                        <div
                            class="
                                gallery-item
                            "
                            data-src="{{ $photo['url'] }}"
                            data-name="{{ $photo['name'] }}"
                        >

                            <img
                                src="{{ $photo['url'] }}"
                                alt="Foto modern Fajar dan Ranti"
                                loading="lazy"
                                decoding="async"
                            >


                            <div
                                class="
                                    gallery-overlay
                                "
                            >

                                <div
                                    class="
                                        w-12
                                        h-12
                                        rounded-full
                                        border
                                        border-white/60
                                        bg-white/10
                                        backdrop-blur
                                        flex
                                        items-center
                                        justify-center
                                    "
                                >

                                    <span
                                        class="
                                            material-symbols-outlined
                                            text-white
                                            text-[27px]
                                        "
                                    >
                                        zoom_in
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </div>

</section>



{{-- =============================================================
     FOOTER
============================================================= --}}

<footer
    class="
        bg-maroon
        text-white
        text-center
        py-16
        px-5
    "
>

    <div
        class="
            max-w-xl
            mx-auto
        "
    >

        <div
            class="
                text-goldlight
                text-xl
                mb-5
            "
        >
            ❖
        </div>


        <h2
            class="
                font-serif
                text-[32px]
            "
        >
            Fajar & Ranti
        </h2>


        <p
            class="
                text-white/65
                text-[12px]
                mt-4
                leading-6
            "
        >
            Terima kasih telah menjadi bagian
            dari perjalanan dan hari bahagia kami.
        </p>


        <a
            href="{{ route('wedding.invitation') }}"
            class="
                inline-flex
                mt-8
                px-7
                py-3
                rounded-full
                border
                border-gold/60
                text-goldlight
                text-[11px]
                font-bold
                tracking-widest
                uppercase
                hover:bg-gold
                hover:text-maroon
                transition
            "
        >
            Kembali ke Undangan
        </a>

    </div>

</footer>



{{-- =============================================================
     CACHE STATUS
============================================================= --}}

<div
    id="cache-status"
    class="cache-status"
>

    <span
        class="
            material-symbols-outlined
            text-[17px]
        "
    >
        cloud_download
    </span>

    <span id="cache-status-text">
        Menyimpan galeri...
    </span>

</div>



{{-- =============================================================
     LIGHTBOX
============================================================= --}}

<div
    id="lightbox"
    class="lightbox"
>

    <button
        type="button"
        id="lightbox-close"
        class="lightbox-close"
        aria-label="Tutup foto"
    >
        ×
    </button>


    <button
        type="button"
        id="lightbox-prev"
        class="
            lightbox-nav
            lightbox-prev
        "
        aria-label="Foto sebelumnya"
    >
        ‹
    </button>


    <img
        id="lightbox-image"
        class="lightbox-image"
        src=""
        alt="Foto Fajar dan Ranti"
    >


    <button
        type="button"
        id="lightbox-next"
        class="
            lightbox-nav
            lightbox-next
        "
        aria-label="Foto berikutnya"
    >
        ›
    </button>


    <div
        id="lightbox-counter"
        class="lightbox-counter"
    >
    </div>

</div>



{{-- =============================================================
     GALLERY + LIGHTBOX SCRIPT
============================================================= --}}

<script>

document.addEventListener(
    'DOMContentLoaded',
    function ()
    {

        /*
        |--------------------------------------------------------------------------
        | Elements
        |--------------------------------------------------------------------------
        */

        const filterButtons =
            document.querySelectorAll(
                '.filter-button'
            );


        const galleryPhotos =
            document.querySelectorAll(
                '.gallery-photo'
            );


        const lightbox =
            document.getElementById(
                'lightbox'
            );


        const lightboxImage =
            document.getElementById(
                'lightbox-image'
            );


        const lightboxClose =
            document.getElementById(
                'lightbox-close'
            );


        const lightboxPrev =
            document.getElementById(
                'lightbox-prev'
            );


        const lightboxNext =
            document.getElementById(
                'lightbox-next'
            );


        const lightboxCounter =
            document.getElementById(
                'lightbox-counter'
            );


        let visibleImages = [];

        let currentIndex =
            0;


        /*
        |--------------------------------------------------------------------------
        | Build Visible Images
        |--------------------------------------------------------------------------
        */

        function rebuildVisibleImages()
        {

            visibleImages =

                Array.from(
                    galleryPhotos
                )

                .filter(
                    function (
                        item
                    )
                    {

                        return (
                            item.style.display
                            !==
                            'none'
                        );

                    }
                )

                .map(
                    function (
                        item
                    )
                    {

                        return item
                            .querySelector(
                                '.gallery-item'
                            );

                    }
                );

        }



        /*
        |--------------------------------------------------------------------------
        | Filter
        |--------------------------------------------------------------------------
        */

        filterButtons.forEach(
            function (
                button
            )
            {

                button.addEventListener(
                    'click',
                    function ()
                    {

                        const filter =
                            this.dataset.filter;


                        filterButtons.forEach(
                            function (
                                item
                            )
                            {

                                item.classList.remove(
                                    'active'
                                );

                            }
                        );


                        this.classList.add(
                            'active'
                        );


                        galleryPhotos.forEach(
                            function (
                                photo
                            )
                            {

                                const category =
                                    photo.dataset.category;


                                if (
                                    filter === 'all'
                                    ||
                                    category === filter
                                ) {

                                    photo.style.display =
                                        '';

                                }
                                else {

                                    photo.style.display =
                                        'none';

                                }

                            }
                        );


                        rebuildVisibleImages();

                    }
                );

            }
        );



        /*
        |--------------------------------------------------------------------------
        | Show Image
        |--------------------------------------------------------------------------
        */

        function showImage()
        {

            if (
                visibleImages.length
                ===
                0
            ) {

                return;

            }


            const item =
                visibleImages[
                    currentIndex
                ];


            lightboxImage.src =
                item.dataset.src;


            lightboxImage.alt =
                item.dataset.name
                ||
                'Foto Fajar dan Ranti';


            lightboxCounter.textContent =

                (
                    currentIndex
                    +
                    1
                )

                +

                ' / '

                +

                visibleImages.length;

        }



        /*
        |--------------------------------------------------------------------------
        | Open Lightbox
        |--------------------------------------------------------------------------
        */

        function openLightbox(
            item
        )
        {

            rebuildVisibleImages();


            currentIndex =
                visibleImages.indexOf(
                    item
                );


            if (
                currentIndex
                <
                0
            ) {

                return;

            }


            showImage();


            lightbox.classList.add(
                'active'
            );


            document.body.style.overflow =
                'hidden';

        }



        /*
        |--------------------------------------------------------------------------
        | Close
        |--------------------------------------------------------------------------
        */

        function closeLightbox()
        {

            lightbox.classList.remove(
                'active'
            );


            document.body.style.overflow =
                '';

        }



        /*
        |--------------------------------------------------------------------------
        | Next
        |--------------------------------------------------------------------------
        */

        function nextImage()
        {

            if (
                visibleImages.length
                ===
                0
            ) {

                return;

            }


            currentIndex =

                (
                    currentIndex
                    +
                    1
                )

                %

                visibleImages.length;


            showImage();

        }



        /*
        |--------------------------------------------------------------------------
        | Previous
        |--------------------------------------------------------------------------
        */

        function previousImage()
        {

            if (
                visibleImages.length
                ===
                0
            ) {

                return;

            }


            currentIndex =

                (
                    currentIndex
                    -
                    1
                    +
                    visibleImages.length
                )

                %

                visibleImages.length;


            showImage();

        }



        /*
        |--------------------------------------------------------------------------
        | Click Photo
        |--------------------------------------------------------------------------
        */

        document
            .querySelectorAll(
                '.gallery-item'
            )
            .forEach(
                function (
                    item
                )
                {

                    item.addEventListener(
                        'click',
                        function ()
                        {

                            openLightbox(
                                this
                            );

                        }
                    );

                }
            );



        /*
        |--------------------------------------------------------------------------
        | Buttons
        |--------------------------------------------------------------------------
        */

        if (
            lightboxClose
        ) {

            lightboxClose
                .addEventListener(
                    'click',
                    closeLightbox
                );

        }


        if (
            lightboxNext
        ) {

            lightboxNext
                .addEventListener(
                    'click',
                    nextImage
                );

        }


        if (
            lightboxPrev
        ) {

            lightboxPrev
                .addEventListener(
                    'click',
                    previousImage
                );

        }



        /*
        |--------------------------------------------------------------------------
        | Click Background
        |--------------------------------------------------------------------------
        */

        if (
            lightbox
        ) {

            lightbox
                .addEventListener(
                    'click',
                    function (
                        event
                    )
                    {

                        if (
                            event.target
                            ===
                            lightbox
                        ) {

                            closeLightbox();

                        }

                    }
                );

        }



        /*
        |--------------------------------------------------------------------------
        | Keyboard
        |--------------------------------------------------------------------------
        */

        document
            .addEventListener(
                'keydown',
                function (
                    event
                )
                {

                    if (
                        ! lightbox
                        ||
                        ! lightbox
                            .classList
                            .contains(
                                'active'
                            )
                    ) {

                        return;

                    }


                    if (
                        event.key
                        ===
                        'Escape'
                    ) {

                        closeLightbox();

                    }


                    if (
                        event.key
                        ===
                        'ArrowRight'
                    ) {

                        nextImage();

                    }


                    if (
                        event.key
                        ===
                        'ArrowLeft'
                    ) {

                        previousImage();

                    }

                }
            );


        rebuildVisibleImages();

    }
);

</script>



{{-- =============================================================
     SERVICE WORKER REGISTRATION
============================================================= --}}

<script>

document.addEventListener(
    'DOMContentLoaded',
    function ()
    {

        if (
            'serviceWorker'
            in
            navigator
        ) {

            navigator
                .serviceWorker
                .register(
                    '/sw.js'
                )
                .then(
                    function (
                        registration
                    )
                    {

                        console.log(
                            'Service Worker aktif:',
                            registration.scope
                        );

                    }
                )
                .catch(
                    function (
                        error
                    )
                    {

                        console.error(
                            'Service Worker gagal:',
                            error
                        );

                    }
                );

        }

    }
);

</script>



{{-- =============================================================
     DEVICE IMAGE CACHE
============================================================= --}}

<script>

window.addEventListener(
    'load',
    async function ()
    {

        /*
        |--------------------------------------------------------------------------
        | Cache Version
        |--------------------------------------------------------------------------
        |
        | HARUS sama dengan versi image cache di public/sw.js
        |
        */

        const CACHE_NAME =
            'fajar-ranti-gallery-v1-images';


        /*
        |--------------------------------------------------------------------------
        | Check Cache API
        |--------------------------------------------------------------------------
        */

        if (
            ! (
                'caches'
                in
                window
            )
        ) {

            return;

        }


        const statusBox =
            document.getElementById(
                'cache-status'
            );


        const statusText =
            document.getElementById(
                'cache-status-text'
            );


        try {

            /*
            |--------------------------------------------------------------------------
            | Ambil semua image URL
            |--------------------------------------------------------------------------
            */

            const galleryImages =
                document.querySelectorAll(
                    '.gallery-item img'
                );


            const imageUrls =

                Array.from(
                    galleryImages
                )

                .map(
                    function (
                        image
                    )
                    {

                        return image.src;

                    }
                );


            /*
            |--------------------------------------------------------------------------
            | Hilangkan Duplikat
            |--------------------------------------------------------------------------
            */

            const uniqueUrls =

                [
                    ...new Set(
                        imageUrls
                    )
                ];


            if (
                uniqueUrls.length
                ===
                0
            ) {

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | Buka Cache
            |--------------------------------------------------------------------------
            */

            const cache =
                await caches.open(
                    CACHE_NAME
                );


            let totalCached =
                0;


            let totalNeedCache =
                0;


            /*
            |--------------------------------------------------------------------------
            | Cek berapa yang sudah cache
            |--------------------------------------------------------------------------
            */

            for (
                const url
                of
                uniqueUrls
            ) {

                const cached =
                    await cache.match(
                        url
                    );


                if (
                    cached
                ) {

                    totalCached++;

                }
                else {

                    totalNeedCache++;

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Semua sudah cache
            |--------------------------------------------------------------------------
            */

            if (
                totalNeedCache
                ===
                0
            ) {

                console.log(
                    'Semua foto sudah ada di cache device.'
                );

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | Tampilkan Progress
            |--------------------------------------------------------------------------
            */

            if (
                statusBox
            ) {

                statusBox.classList.add(
                    'active'
                );

            }


            let newlyCached =
                0;


            /*
            |--------------------------------------------------------------------------
            | Cache satu per satu
            |--------------------------------------------------------------------------
            */

            for (
                const url
                of
                uniqueUrls
            ) {

                const existing =
                    await cache.match(
                        url
                    );


                if (
                    existing
                ) {

                    continue;

                }


                try {

                    const response =
                        await fetch(
                            url,
                            {
                                cache:
                                    'no-cache'
                            }
                        );


                    if (
                        response
                        &&
                        response.ok
                    ) {

                        await cache.put(
                            url,
                            response.clone()
                        );


                        newlyCached++;


                        if (
                            statusText
                        ) {

                            statusText.textContent =

                                'Menyimpan galeri '

                                +

                                newlyCached

                                +

                                ' / '

                                +

                                totalNeedCache;

                        }

                    }

                }
                catch (
                    imageError
                ) {

                    console.warn(
                        'Gagal cache image:',
                        url,
                        imageError
                    );

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Complete
            |--------------------------------------------------------------------------
            */

            if (
                statusText
            ) {

                statusText.textContent =
                    'Galeri tersimpan di device';

            }


            console.log(
                'Gallery cache selesai:',
                newlyCached,
                'foto baru disimpan.'
            );


            setTimeout(
                function ()
                {

                    if (
                        statusBox
                    ) {

                        statusBox.classList.remove(
                            'active'
                        );

                    }

                },
                2200
            );

        }
        catch (
            error
        ) {

            console.error(
                'Gallery Cache Error:',
                error
            );


            if (
                statusBox
            ) {

                statusBox.classList.remove(
                    'active'
                );

            }

        }

    }
);

</script>



<script>
(function () {
    const progressBar = document.getElementById('fx-scroll-progress-bar');
    const orbA = document.querySelector('.fx-ambient.fx-a');
    const orbB = document.querySelector('.fx-ambient.fx-b');
    const audio = document.getElementById('wedding-music');
    const musicButton = document.getElementById('music-control');
    const musicIcon = document.getElementById('music-icon');
    const musicTip = document.getElementById('music-tip');

    let ticking = false;

    function updateScrollFx() {
        const scrollTop =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            0;

        const maxScroll =
            document.documentElement.scrollHeight -
            window.innerHeight;

        if (progressBar) {
            const progress =
                maxScroll > 0
                    ? Math.min(100, (scrollTop / maxScroll) * 100)
                    : 0;

            progressBar.style.width = progress + '%';
        }

        if (orbA) {
            orbA.style.transform =
                'translate3d(0,' +
                (scrollTop * 0.07) +
                'px,0)';
        }

        if (orbB) {
            orbB.style.transform =
                'translate3d(0,' +
                (-scrollTop * 0.04) +
                'px,0)';
        }

        ticking = false;
    }

    window.addEventListener(
        'scroll',
        function () {
            if (!ticking) {
                window.requestAnimationFrame(updateScrollFx);
                ticking = true;
            }
        },
        { passive: true }
    );

    updateScrollFx();

    const revealTargets = Array.from(
        document.querySelectorAll(
            [
                'section',
                'main > div',
                '.gallery-photo',
                '.gallery-item',
                '.mobile-rsvp-card article',
                '.desktop-table tbody tr',
                'footer'
            ].join(',')
        )
    );

    revealTargets.forEach(function (el, index) {
        el.classList.add('fx-reveal');

        if (index % 3 === 1) {
            el.classList.add('fx-left');
        } else if (index % 3 === 2) {
            el.classList.add('fx-right');
        }

        el.dataset.fxDelay =
            String((index % 5) * 60);
    });

    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                const el = entry.target;
                const delay =
                    Number(el.dataset.fxDelay || 0);

                window.setTimeout(function () {
                    el.classList.add('fx-visible');
                }, delay);

                observer.unobserve(el);
            });
        },
        {
            root: null,
            threshold: 0.12,
            rootMargin: '0px 0px -8% 0px'
        }
    );

    revealTargets.forEach(function (el) {
        observer.observe(el);
    });

    document.querySelectorAll(
        [
            '.invitation-card',
            '.gallery-item',
            '.bg-white',
            '.rounded-xl',
            '.rounded-2xl'
        ].join(',')
    ).forEach(function (el) {
        el.classList.add('fx-card');
    });

    document.querySelectorAll(
        'h1, h2, .couple-name, .font-serif, .font-display'
    ).forEach(function (el) {
        el.classList.add('fx-heading');
    });

    if (!audio || !musicButton || !musicIcon) {
        return;
    }

    audio.volume = 0.55;

    let autoplayBlocked = false;
    let userHandled = false;

    function setMusicState(isPlaying) {
        musicButton.classList.toggle(
            'is-playing',
            isPlaying
        );

        musicButton.setAttribute(
            'aria-pressed',
            isPlaying ? 'true' : 'false'
        );

        musicIcon.textContent =
            isPlaying ? '♫' : '♪';
    }

    async function tryPlay() {
        try {
            await audio.play();

            autoplayBlocked = false;
            setMusicState(true);

            if (musicTip) {
                musicTip.classList.remove('show');
            }

            return true;
        } catch (error) {
            autoplayBlocked = true;
            setMusicState(false);

            if (musicTip) {
                musicTip.classList.add('show');

                window.setTimeout(
                    function () {
                        musicTip.classList.remove('show');
                    },
                    4200
                );
            }

            return false;
        }
    }

    function pauseMusic() {
        audio.pause();
        setMusicState(false);
    }

    musicButton.addEventListener(
        'click',
        async function () {
            userHandled = true;

            if (audio.paused) {
                await tryPlay();
            } else {
                pauseMusic();
            }
        }
    );

    audio.addEventListener(
        'play',
        function () {
            setMusicState(true);
        }
    );

    audio.addEventListener(
        'pause',
        function () {
            setMusicState(false);
        }
    );

    window.addEventListener(
        'load',
        function () {
            window.setTimeout(
                tryPlay,
                300
            );
        }
    );

    async function unlockAudio() {
        if (
            userHandled ||
            !audio.paused ||
            !autoplayBlocked
        ) {
            cleanupUnlock();
            return;
        }

        userHandled = true;
        await tryPlay();
        cleanupUnlock();
    }

    function cleanupUnlock() {
        document.removeEventListener(
            'pointerdown',
            unlockAudio
        );

        document.removeEventListener(
            'touchstart',
            unlockAudio
        );

        document.removeEventListener(
            'keydown',
            unlockAudio
        );
    }

    document.addEventListener(
        'pointerdown',
        unlockAudio,
        { passive: true }
    );

    document.addEventListener(
        'touchstart',
        unlockAudio,
        { passive: true }
    );

    document.addEventListener(
        'keydown',
        unlockAudio
    );
})();
</script>

</body>

</html>
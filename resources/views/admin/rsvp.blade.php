<!doctype html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        Rekap RSVP — Fajar & Ranti
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

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
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <script>

        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        maroon: '#800020',

                        gold: '#b89243',

                        cream: '#fbf2ed',

                    },

                    fontFamily: {

                        display: [
                            'Cinzel',
                            'serif'
                        ],

                        serif: [
                            'Libre Caslon Text',
                            'serif'
                        ],

                        sans: [
                            'Plus Jakarta Sans',
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
            overflow-x: hidden;
        }

        /*
        |--------------------------------------------------------------------------
        | Responsive pagination
        |--------------------------------------------------------------------------
        */

        nav[role="navigation"] {
            width: 100%;
        }

        nav[role="navigation"] > div {
            max-width: 100%;
        }

        /*
        |--------------------------------------------------------------------------
        | Mobile card table
        |--------------------------------------------------------------------------
        */

        .mobile-rsvp-card {
            display: none;
        }

        @media (max-width: 767px) {

            .desktop-table {
                display: none;
            }

            .mobile-rsvp-card {
                display: block;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | Header
        |--------------------------------------------------------------------------
        */

        @media (max-width: 640px) {

            .admin-header-inner {
                min-height: 92px;
                height: auto !important;

                padding-top: 12px;
                padding-bottom: 12px;

                display: grid !important;

                grid-template-columns:
                    auto
                    1fr
                    auto;

                gap: 8px;
            }

            .admin-header-title h1 {
                font-size: 16px !important;
                line-height: 1.2;
            }

            .admin-header-title p {
                font-size: 7px !important;
                letter-spacing: .12em !important;
            }

            .admin-header-button {
                padding:
                    8px
                    10px !important;

                font-size:
                    9px !important;

                white-space:
                    nowrap;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | Very small phone
        |--------------------------------------------------------------------------
        */

        @media (max-width: 390px) {

            .admin-header-inner {
                grid-template-columns:
                    1fr
                    1fr;

                row-gap: 10px;
            }

            .admin-header-title {
                grid-column:
                    1 / -1;

                grid-row:
                    1;

                order:
                    -1;
            }

            .admin-header-button {
                width: 100%;
                justify-content: center;
                text-align: center;
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



        /* =========================================================
           MINANG PREMIUM CINEMATIC THEME
           Inspired by supplied TikTok reference
           ========================================================= */
        :root {
            --minang-black: #110b0b;
            --minang-black-soft: #1b1111;
            --minang-maroon: #5b0814;
            --minang-maroon-deep: #35040b;
            --minang-red: #7a0d1c;
            --minang-gold: #d9b86c;
            --minang-gold-soft: #f2ddb0;
            --minang-cream: #f8eee3;
            --minang-line: rgba(217, 184, 108, .38);
            --minang-glass: rgba(18, 10, 10, .74);
        }

        body {
            background:
                radial-gradient(circle at 20% 10%, rgba(122, 13, 28, .18), transparent 28%),
                radial-gradient(circle at 80% 42%, rgba(217, 184, 108, .08), transparent 24%),
                linear-gradient(180deg, #130b0c 0%, #2b080e 52%, #110909 100%) !important;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            opacity: .23;
            background-image:
                linear-gradient(45deg, rgba(217,184,108,.035) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(217,184,108,.035) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, rgba(217,184,108,.035) 75%),
                linear-gradient(-45deg, transparent 75%, rgba(217,184,108,.035) 75%);
            background-size: 34px 34px;
            background-position: 0 0, 0 17px, 17px -17px, -17px 0;
        }

        main,
        .page,
        header,
        footer,
        section {
            position: relative;
            z-index: 1;
        }

        /* cinematic section rhythm */
        section {
            scroll-margin-top: 20px;
        }

        section:not(.invitation-card) {
            border-color: rgba(217,184,108,.12) !important;
        }

        /* dark premium surfaces */
        .bg-surface,
        .bg-surface-container-low,
        .bg-surface-container-lowest,
        .bg-white,
        .bg-\[\#fff8f5\],
        .bg-stone-50,
        .bg-stone-100 {
            background-color: rgba(20, 10, 11, .86) !important;
            color: var(--minang-cream) !important;
        }

        .text-on-surface,
        .text-on-surface-variant,
        .text-stone-800,
        .text-stone-700,
        .text-stone-600,
        .text-stone-500,
        .text-muted,
        .text-textmain {
            color: rgba(248,238,227,.82) !important;
        }

        .text-primary,
        .text-primary-container,
        .text-maroon,
        .text-gold,
        .text-secondary {
            color: var(--minang-gold) !important;
        }

        .border-primary\/20,
        .border-maroon\/10,
        .border-gold\/20,
        .border-stone-100,
        .border-stone-200 {
            border-color: rgba(217,184,108,.20) !important;
        }

        /* ornamental frame */
        .minang-frame,
        .ornate-border,
        .gallery-item,
        .invitation-card {
            position: relative;
            border: 1px solid rgba(217,184,108,.34) !important;
            box-shadow:
                0 24px 70px rgba(0,0,0,.30),
                inset 0 0 0 1px rgba(255,255,255,.02);
        }

        .ornate-border::after,
        .minang-frame::after {
            border-color: rgba(217,184,108,.52) !important;
        }

        /* title typography */
        h1, h2, h3,
        .font-display-lg,
        .font-serif,
        .font-display,
        .couple-name {
            letter-spacing: -.02em;
            text-wrap: balance;
        }

        h1, h2,
        .couple-name {
            text-shadow:
                0 3px 22px rgba(0,0,0,.42),
                0 0 26px rgba(217,184,108,.08);
        }

        /* gold button style like reference */
        a[class*="bg-primary-container"],
        button[class*="bg-primary-container"],
        .open-button,
        .filter-button.active,
        .admin-header-button.bg-maroon {
            background:
                linear-gradient(
                    135deg,
                    #f4dfb0 0%,
                    #d9b86c 50%,
                    #b98c3c 100%
                ) !important;
            color: #2c160d !important;
            border: 1px solid rgba(255,245,220,.72) !important;
            box-shadow:
                0 10px 28px rgba(0,0,0,.24),
                inset 0 1px 0 rgba(255,255,255,.45);
        }

        a[class*="bg-primary-container"]:hover,
        button[class*="bg-primary-container"]:hover,
        .open-button:hover {
            transform: translateY(-2px) scale(1.01);
            box-shadow:
                0 16px 38px rgba(0,0,0,.34),
                0 0 24px rgba(217,184,108,.16);
        }

        /* hero becomes cinematic */
        section:first-of-type,
        .photo-section {
            isolation: isolate;
        }

        section:first-of-type::after,
        .photo-section::after {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(
                    180deg,
                    rgba(10,4,5,.10) 0%,
                    rgba(10,4,5,.12) 48%,
                    rgba(10,4,5,.74) 100%
                );
            z-index: 1;
        }

        /* make first hero photo deeper and premium */
        .hero-parallax,
        .fx-cover-image,
        .photo-section img {
            filter:
                saturate(.82)
                contrast(1.05)
                brightness(.82);
        }

        /* section cards with reference-like black/brown glass */
        .fx-card,
        .ornate-border,
        .gallery-item,
        .mobile-rsvp-card article {
            background:
                linear-gradient(
                    180deg,
                    rgba(27,17,17,.92),
                    rgba(15,9,9,.96)
                ) !important;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        /* timeline/vertical visual cue */
        .fx-section::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 1px;
            height: 34px;
            transform: translateX(-50%);
            background:
                linear-gradient(
                    180deg,
                    rgba(217,184,108,.60),
                    transparent
                );
            opacity: .55;
            pointer-events: none;
        }

        /* songket diamond details */
        .fx-section > * {
            position: relative;
            z-index: 1;
        }

        .fx-section .font-display-lg::before,
        .fx-section .font-serif::before {
            content: "";
        }

        /* inputs */
        input,
        textarea,
        select {
            background: rgba(255,255,255,.06) !important;
            color: var(--minang-cream) !important;
            border-color: rgba(217,184,108,.25) !important;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(248,238,227,.42) !important;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: rgba(217,184,108,.72) !important;
            box-shadow: 0 0 0 3px rgba(217,184,108,.10) !important;
        }

        option {
            background: #1b1111;
            color: #f8eee3;
        }

        /* floating controls */
        .music-control,
        .floating-fx {
            background:
                linear-gradient(145deg, #6c0b18, #35040b) !important;
            color: var(--minang-gold-soft) !important;
            border-color: rgba(217,184,108,.55) !important;
        }

        /* elegant reveal */
        .fx-reveal {
            transform:
                perspective(1100px)
                translate3d(0, 55px, 0)
                scale(.97);
            filter: blur(9px);
            opacity: 0;
        }

        .fx-reveal.fx-visible {
            transform:
                perspective(1100px)
                translate3d(0,0,0)
                scale(1);
            filter: blur(0);
            opacity: 1;
        }

        /* subtle image frame */
        img {
            image-rendering: auto;
        }

        .gallery-item {
            border-radius: 20px !important;
        }

        .gallery-item img {
            transition:
                transform .7s cubic-bezier(.16,1,.3,1),
                filter .7s ease !important;
        }

        .gallery-item:hover img {
            transform: scale(1.055) !important;
            filter: brightness(.72) saturate(.9) !important;
        }

        /* mobile = narrow luxury invitation feel */
        @media (max-width: 640px) {
            body {
                background:
                    linear-gradient(180deg,#150b0c,#300810 45%,#100808) !important;
            }

            section {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .fx-card,
            .ornate-border,
            .gallery-item {
                border-radius: 18px !important;
            }

            h1 {
                line-height: 1.05 !important;
            }

            .music-control {
                width: 46px;
                height: 46px;
            }
        }

</style>

</head>


<body
    class="
        bg-[#fff8f5]
        text-stone-800
        font-sans
        min-h-screen
    "
>

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



{{-- ============================================================
     HEADER
============================================================ --}}

<header
    class="
        sticky
        top-0
        z-40
        bg-[#fff8f5]/90
        backdrop-blur-md
        border-b
        border-gold/20
    "
>

    <div
        class="
            admin-header-inner
            max-w-7xl
            mx-auto
            px-3
            sm:px-6
            lg:px-8
            h-20
            flex
            items-center
            justify-between
            gap-3
        "
    >

        <a
            href="{{ route('wedding.invitation') }}"
            class="
                admin-header-button
                inline-flex
                items-center
                justify-center
                px-3
                sm:px-4
                py-2
                rounded-full
                border
                border-maroon/20
                text-maroon
                text-[10px]
                sm:text-xs
                font-semibold
                uppercase
                transition
                hover:bg-maroon
                hover:text-white
            "
        >
            ← Kembali
        </a>


        <div
            class="
                admin-header-title
                text-center
                min-w-0
            "
        >

            <h1
                class="
                    font-display
                    font-bold
                    text-lg
                    sm:text-2xl
                    text-maroon
                    truncate
                "
            >
                Fajar & Ranti
            </h1>

            <p
                class="
                    text-[8px]
                    sm:text-[10px]
                    tracking-[.18em]
                    sm:tracking-[.25em]
                    text-gold
                    uppercase
                    font-semibold
                    truncate
                "
            >
                Andalas Heritage Elegance
            </p>

        </div>


        <a
            href="{{ route('admin.rsvp.export') }}"
            class="
                admin-header-button
                inline-flex
                items-center
                justify-center
                px-3
                sm:px-4
                py-2
                rounded-full
                bg-maroon
                text-white
                text-[10px]
                sm:text-xs
                font-semibold
                transition
                hover:bg-[#650019]
            "
        >
            Export CSV
        </a>

    </div>

</header>



{{-- ============================================================
     MAIN
============================================================ --}}

<main
    class="
        max-w-7xl
        mx-auto
        px-3
        sm:px-6
        lg:px-8
        py-6
        sm:py-10
        space-y-6
        sm:space-y-8
    "
>


    {{-- ========================================================
         TITLE
    ======================================================== --}}

    <section
        class="
            text-center
            max-w-3xl
            mx-auto
            px-2
        "
    >

        <p
            class="
                text-[9px]
                sm:text-xs
                uppercase
                tracking-[.14em]
                sm:tracking-[.18em]
                text-gold
                font-bold
            "
        >
            Rekapitulasi & Manajemen Kehadiran
        </p>


        <h2
            class="
                font-serif
                text-2xl
                sm:text-3xl
                lg:text-4xl
                leading-tight
                text-maroon
                font-bold
                mt-2
            "
        >
            Daftar Konfirmasi Kehadiran Tamu
        </h2>

    </section>



    {{-- ========================================================
         SUMMARY CARDS
    ======================================================== --}}

    <section
        class="
            grid
            grid-cols-2
            sm:grid-cols-3
            lg:grid-cols-5
            gap-3
            sm:gap-4
        "
    >

        @foreach ([
            ['Estimasi Orang', $summary['guest_total']],
            ['Total Respons', $summary['responses']],
            ['Hadir', $summary['hadir']],
            ['Ragu', $summary['ragu']],
            ['Berhalangan', $summary['tidak_hadir']]
        ] as $card)

            <div
                class="
                    bg-white
                    border
                    border-gold/20
                    rounded-xl
                    sm:rounded-2xl
                    p-4
                    sm:p-5
                    shadow-sm
                    min-w-0
                "
            >

                <div
                    class="
                        text-[9px]
                        sm:text-[11px]
                        uppercase
                        tracking-wider
                        text-stone-500
                        break-words
                    "
                >
                    {{ $card[0] }}
                </div>


                <div
                    class="
                        font-display
                        text-2xl
                        sm:text-3xl
                        text-maroon
                        font-bold
                        mt-2
                    "
                >
                    {{ $card[1] }}
                </div>

            </div>

        @endforeach

    </section>



    {{-- ========================================================
         RSVP CONTAINER
    ======================================================== --}}

    <section
        class="
            bg-white
            border
            border-gold/20
            rounded-xl
            sm:rounded-2xl
            overflow-hidden
            shadow-sm
        "
    >


        {{-- ====================================================
             FILTER
        ==================================================== --}}

        <div
            class="
                p-3
                sm:p-4
                border-b
                border-stone-200
                flex
                gap-2
                flex-wrap
            "
        >

            <a
                href="{{ route('admin.rsvp.index') }}"
                class="
                    px-3
                    py-2
                    rounded-lg
                    text-[10px]
                    sm:text-xs
                    font-semibold

                    {{
                        $status === ''

                        ? 'bg-maroon text-white'

                        : 'bg-stone-100 text-stone-700'
                    }}
                "
            >
                Semua
            </a>


            @foreach ([
                'hadir' => 'Hadir',
                'ragu' => 'Ragu',
                'tidak_hadir' => 'Berhalangan'
            ] as $key => $label)

                <a
                    href="{{ route(
                        'admin.rsvp.index',
                        ['status' => $key]
                    ) }}"
                    class="
                        px-3
                        py-2
                        rounded-lg
                        text-[10px]
                        sm:text-xs
                        font-semibold

                        {{
                            $status === $key

                            ? 'bg-maroon text-white'

                            : 'bg-stone-100 text-stone-700'
                        }}
                    "
                >
                    {{ $label }}
                </a>

            @endforeach

        </div>



        {{-- ====================================================
             DESKTOP TABLE
        ==================================================== --}}

        <div
            class="
                desktop-table
                overflow-x-auto
            "
        >

            <table
                class="
                    w-full
                    min-w-[900px]
                    text-left
                "
            >

                <thead
                    class="
                        bg-stone-100
                        text-[11px]
                        uppercase
                        tracking-wider
                        text-stone-600
                    "
                >

                    <tr>

                        <th class="p-4">
                            No
                        </th>

                        <th class="p-4">
                            Nama Tamu
                        </th>

                        <th class="p-4">
                            Status
                        </th>

                        <th class="p-4 text-center">
                            Jumlah
                        </th>

                        <th class="p-4">
                            Ucapan
                        </th>

                        <th class="p-4 text-right">
                            Waktu
                        </th>

                    </tr>

                </thead>


                <tbody
                    class="
                        divide-y
                        divide-stone-100
                        text-sm
                    "
                >

                    @forelse ($rsvps as $rsvp)

                        <tr
                            class="
                                hover:bg-cream/50
                                transition
                            "
                        >

                            <td
                                class="
                                    p-4
                                    text-stone-400
                                "
                            >
                                {{
                                    $rsvps->firstItem()
                                    +
                                    $loop->index
                                }}
                            </td>


                            <td class="p-4">

                                <div
                                    class="
                                        font-bold
                                    "
                                >
                                    {{ $rsvp->name }}
                                </div>

                                <div
                                    class="
                                        text-xs
                                        text-stone-500
                                        mt-1
                                    "
                                >
                                    {{
                                        $rsvp->institution
                                        ?:
                                        '—'
                                    }}
                                </div>

                            </td>


                            <td class="p-4">

                                <span
                                    class="
                                        px-2.5
                                        py-1
                                        rounded-full
                                        text-xs
                                        font-semibold

                                        {{
                                            $rsvp->attendance === 'hadir'

                                            ? 'bg-emerald-50 text-emerald-700'

                                            : (
                                                $rsvp->attendance === 'ragu'

                                                ? 'bg-amber-50 text-amber-700'

                                                : 'bg-rose-50 text-rose-700'
                                            )
                                        }}
                                    "
                                >

                                    {{
                                        $rsvp->attendance === 'hadir'

                                        ? 'Hadir'

                                        : (
                                            $rsvp->attendance === 'ragu'

                                            ? 'Ragu'

                                            : 'Berhalangan'
                                        )
                                    }}

                                </span>

                            </td>


                            <td
                                class="
                                    p-4
                                    text-center
                                    font-bold
                                "
                            >
                                {{ $rsvp->guest_count }}
                            </td>


                            <td
                                class="
                                    p-4
                                    max-w-md
                                "
                            >

                                <div
                                    class="
                                        line-clamp-2
                                        italic
                                        text-stone-600
                                    "
                                >
                                    {{
                                        $rsvp->message
                                        ?:
                                        '—'
                                    }}
                                </div>

                            </td>


                            <td
                                class="
                                    p-4
                                    text-right
                                    text-xs
                                    text-stone-500
                                    whitespace-nowrap
                                "
                            >

                                {{
                                    optional(
                                        $rsvp->created_at
                                    )
                                    ->timezone(
                                        'Asia/Jakarta'
                                    )
                                    ->format(
                                        'd M Y H:i'
                                    )
                                }}

                            </td>

                        </tr>


                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="
                                    p-12
                                    text-center
                                    text-stone-500
                                "
                            >
                                Belum ada data RSVP.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>



        {{-- ====================================================
             MOBILE CARDS
        ==================================================== --}}

        <div
            class="
                mobile-rsvp-card
                divide-y
                divide-stone-100
            "
        >

            @forelse ($rsvps as $rsvp)

                <article
                    class="
                        p-4
                        space-y-4
                    "
                >


                    {{-- HEADER --}}

                    <div
                        class="
                            flex
                            items-start
                            justify-between
                            gap-3
                        "
                    >

                        <div
                            class="
                                min-w-0
                                flex-1
                            "
                        >

                            <div
                                class="
                                    flex
                                    items-center
                                    gap-2
                                "
                            >

                                <span
                                    class="
                                        text-[10px]
                                        text-stone-400
                                    "
                                >
                                    #{{
                                        $rsvps->firstItem()
                                        +
                                        $loop->index
                                    }}
                                </span>

                                <h3
                                    class="
                                        font-bold
                                        text-sm
                                        text-stone-800
                                        break-words
                                    "
                                >
                                    {{ $rsvp->name }}
                                </h3>

                            </div>


                            <p
                                class="
                                    text-[11px]
                                    text-stone-500
                                    mt-1
                                    break-words
                                "
                            >
                                {{
                                    $rsvp->institution
                                    ?:
                                    '—'
                                }}
                            </p>

                        </div>


                        <span
                            class="
                                shrink-0
                                px-2.5
                                py-1
                                rounded-full
                                text-[10px]
                                font-semibold

                                {{
                                    $rsvp->attendance === 'hadir'

                                    ? 'bg-emerald-50 text-emerald-700'

                                    : (
                                        $rsvp->attendance === 'ragu'

                                        ? 'bg-amber-50 text-amber-700'

                                        : 'bg-rose-50 text-rose-700'
                                    )
                                }}
                            "
                        >

                            {{
                                $rsvp->attendance === 'hadir'

                                ? 'Hadir'

                                : (
                                    $rsvp->attendance === 'ragu'

                                    ? 'Ragu'

                                    : 'Berhalangan'
                                )
                            }}

                        </span>

                    </div>



                    {{-- INFO --}}

                    <div
                        class="
                            grid
                            grid-cols-2
                            gap-3
                        "
                    >

                        <div
                            class="
                                bg-stone-50
                                rounded-lg
                                p-3
                            "
                        >

                            <div
                                class="
                                    text-[9px]
                                    uppercase
                                    tracking-wider
                                    text-stone-400
                                "
                            >
                                Jumlah Tamu
                            </div>

                            <div
                                class="
                                    mt-1
                                    font-bold
                                    text-maroon
                                "
                            >
                                {{ $rsvp->guest_count }} Orang
                            </div>

                        </div>


                        <div
                            class="
                                bg-stone-50
                                rounded-lg
                                p-3
                            "
                        >

                            <div
                                class="
                                    text-[9px]
                                    uppercase
                                    tracking-wider
                                    text-stone-400
                                "
                            >
                                Waktu
                            </div>

                            <div
                                class="
                                    mt-1
                                    text-[11px]
                                    font-semibold
                                    text-stone-600
                                "
                            >

                                {{
                                    optional(
                                        $rsvp->created_at
                                    )
                                    ->timezone(
                                        'Asia/Jakarta'
                                    )
                                    ->format(
                                        'd M Y H:i'
                                    )
                                }}

                            </div>

                        </div>

                    </div>



                    {{-- MESSAGE --}}

                    <div>

                        <div
                            class="
                                text-[9px]
                                uppercase
                                tracking-wider
                                text-stone-400
                                mb-2
                            "
                        >
                            Ucapan & Doa
                        </div>

                        <div
                            class="
                                text-xs
                                leading-6
                                italic
                                text-stone-600
                                break-words
                            "
                        >
                            {{
                                $rsvp->message
                                ?:
                                '—'
                            }}
                        </div>

                    </div>

                </article>


            @empty

                <div
                    class="
                        p-10
                        text-center
                        text-sm
                        text-stone-500
                    "
                >
                    Belum ada data RSVP.
                </div>

            @endforelse

        </div>



        {{-- ====================================================
             PAGINATION
        ==================================================== --}}

        <div
            class="
                p-3
                sm:p-4
                border-t
                border-stone-100
                overflow-x-auto
            "
        >

            {{
                $rsvps
                ->appends(
                    request()->query()
                )
                ->links()
            }}

        </div>

    </section>

</main>



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


<script>
(function () {
    const prefersReduced =
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReduced) return;

    const cards = document.querySelectorAll(
        '.ornate-border, .gallery-item, .fx-card'
    );

    cards.forEach(function(card) {
        card.addEventListener('pointermove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - .5;
            const y = (e.clientY - rect.top) / rect.height - .5;

            card.style.transform =
                'perspective(900px) rotateX(' +
                (-y * 2.2) +
                'deg) rotateY(' +
                (x * 2.2) +
                'deg) translateY(-2px)';
        });

        card.addEventListener('pointerleave', function() {
            card.style.transform = '';
        });
    });

    const hero =
        document.querySelector('.hero-parallax, .fx-cover-image, .photo-section img');

    if (hero) {
        let ticking = false;

        function cinematicParallax() {
            const y = window.scrollY || 0;
            const shift = Math.min(75, y * .12);

            hero.style.transform =
                'translate3d(0,' +
                shift +
                'px,0) scale(1.07)';

            ticking = false;
        }

        window.addEventListener(
            'scroll',
            function() {
                if (!ticking) {
                    requestAnimationFrame(cinematicParallax);
                    ticking = true;
                }
            },
            { passive: true }
        );

        cinematicParallax();
    }
})();
</script>

</body>

</html>
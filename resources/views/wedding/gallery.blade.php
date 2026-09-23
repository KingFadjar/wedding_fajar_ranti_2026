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



        /* =========================================================
           GALLERY REFINEMENT - MATCH INVITATION PREMIUM MINANG STYLE
           ========================================================= */
        body {
            background:
                radial-gradient(circle at 18% 8%, rgba(122, 13, 28, .20), transparent 28%),
                radial-gradient(circle at 80% 38%, rgba(217, 184, 108, .09), transparent 24%),
                linear-gradient(180deg, #140b0c 0%, #2f0910 48%, #100808 100%) !important;
        }

        header {
            background: rgba(17, 9, 10, .84) !important;
            border-color: rgba(217, 184, 108, .16) !important;
            backdrop-filter: blur(18px) saturate(1.05);
            -webkit-backdrop-filter: blur(18px) saturate(1.05);
            box-shadow: 0 8px 26px rgba(0, 0, 0, .18);
        }

        header a {
            color: #f2ddb0 !important;
        }

        header a:first-child {
            font-family: 'Libre Caslon Text', serif !important;
            letter-spacing: -.02em;
            text-shadow: 0 2px 18px rgba(0,0,0,.35);
        }

        /* Hero */
        body > section:first-of-type {
            min-height: 54vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background:
                radial-gradient(circle at 50% 25%, rgba(217,184,108,.08), transparent 34%),
                linear-gradient(180deg, rgba(91,8,20,.28), rgba(17,9,10,.10));
        }

        body > section:first-of-type::before {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(
                    180deg,
                    rgba(0,0,0,.08) 0%,
                    rgba(0,0,0,.00) 50%,
                    rgba(0,0,0,.20) 100%
                );
        }

        body > section:first-of-type h1 {
            color: #f2ddb0 !important;
            text-shadow:
                0 4px 28px rgba(0,0,0,.42),
                0 0 24px rgba(217,184,108,.09);
        }

        body > section:first-of-type p {
            color: rgba(248,238,227,.72) !important;
        }

        /* Summary */
        body > section:nth-of-type(2) > div {
            background:
                linear-gradient(
                    180deg,
                    rgba(27,17,17,.92),
                    rgba(14,8,9,.96)
                ) !important;
            border: 1px solid rgba(217,184,108,.24) !important;
            box-shadow:
                0 20px 56px rgba(0,0,0,.28),
                inset 0 1px 0 rgba(255,255,255,.025);
        }

        body > section:nth-of-type(2) > div > div {
            border-color: rgba(217,184,108,.16) !important;
        }

        body > section:nth-of-type(2) .font-serif {
            color: #d9b86c !important;
        }

        /* Filters */
        .filter-button {
            background: rgba(24,14,15,.82) !important;
            color: rgba(242,221,176,.82) !important;
            border: 1px solid rgba(217,184,108,.24) !important;
            box-shadow: inset 0 1px 0 rgba(255,255,255,.02);
        }

        .filter-button:hover,
        .filter-button.active {
            background:
                linear-gradient(
                    135deg,
                    #f2ddb0,
                    #d9b86c 52%,
                    #b78a3d
                ) !important;
            color: #2c160d !important;
            border-color: rgba(255,244,218,.72) !important;
            transform: translateY(-2px);
            box-shadow:
                0 12px 28px rgba(0,0,0,.26),
                0 0 22px rgba(217,184,108,.12);
        }

        /* Masonry spacing */
        .gallery-masonry {
            column-gap: 20px;
        }

        .gallery-photo {
            margin-bottom: 20px;
        }

        .gallery-item {
            background: #160e0f !important;
            border: 1px solid rgba(217,184,108,.22) !important;
            border-radius: 22px !important;
            box-shadow:
                0 18px 48px rgba(0,0,0,.30),
                inset 0 0 0 1px rgba(255,255,255,.02);
            overflow: hidden;
            isolation: isolate;
        }

        .gallery-item::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            pointer-events: none;
            border-radius: inherit;
            box-shadow:
                inset 0 0 0 1px rgba(242,221,176,.08),
                inset 0 -80px 100px rgba(0,0,0,.08);
        }

        .gallery-item img {
            filter:
                saturate(.90)
                contrast(1.04)
                brightness(.92);
            transition:
                transform .8s cubic-bezier(.16,1,.3,1),
                filter .7s ease !important;
        }

        .gallery-item:hover img {
            transform: scale(1.055) !important;
            filter:
                saturate(.88)
                contrast(1.04)
                brightness(.68) !important;
        }

        .gallery-overlay {
            z-index: 3;
            background:
                linear-gradient(
                    180deg,
                    rgba(53,4,11,.02) 0%,
                    rgba(53,4,11,.22) 46%,
                    rgba(17,8,9,.74) 100%
                ) !important;
        }

        .gallery-overlay > div {
            width: 54px !important;
            height: 54px !important;
            border-color: rgba(242,221,176,.60) !important;
            background: rgba(17,9,10,.46) !important;
            color: #f2ddb0 !important;
            box-shadow:
                0 10px 26px rgba(0,0,0,.28),
                inset 0 1px 0 rgba(255,255,255,.05);
        }

        /* Lightbox */
        .lightbox {
            background:
                radial-gradient(circle at 50% 50%, rgba(91,8,20,.16), transparent 44%),
                rgba(8,4,5,.96) !important;
            backdrop-filter: blur(18px) !important;
            -webkit-backdrop-filter: blur(18px) !important;
        }

        .lightbox-image {
            border: 1px solid rgba(217,184,108,.26);
            border-radius: 16px !important;
            box-shadow:
                0 34px 100px rgba(0,0,0,.58),
                0 0 0 1px rgba(255,255,255,.025);
        }

        .lightbox-close,
        .lightbox-nav {
            border-color: rgba(217,184,108,.34) !important;
            background: rgba(25,13,14,.72) !important;
            color: #f2ddb0 !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .lightbox-close:hover,
        .lightbox-nav:hover {
            background: rgba(91,8,20,.86) !important;
            border-color: rgba(242,221,176,.62) !important;
        }

        .lightbox-counter {
            color: rgba(242,221,176,.78) !important;
        }

        /* Footer */
        footer {
            background:
                linear-gradient(
                    180deg,
                    #3b0710,
                    #17090b
                ) !important;
            border-top: 1px solid rgba(217,184,108,.16);
        }

        footer h2 {
            color: #f2ddb0 !important;
        }

        footer p {
            color: rgba(248,238,227,.64) !important;
        }

        footer a {
            border-color: rgba(217,184,108,.50) !important;
            color: #f2ddb0 !important;
            background: rgba(255,255,255,.02);
        }

        footer a:hover {
            background:
                linear-gradient(
                    135deg,
                    #f2ddb0,
                    #d9b86c
                ) !important;
            color: #2c160d !important;
        }

        /* Cache status */
        .cache-status {
            background: rgba(23,9,12,.94) !important;
            color: #f2ddb0 !important;
            border-color: rgba(217,184,108,.42) !important;
        }

        /* Music */
        .music-control {
            width: 50px !important;
            height: 50px !important;
            background:
                linear-gradient(
                    145deg,
                    rgba(122,13,28,.96),
                    rgba(53,4,11,.97)
                ) !important;
            border: 1px solid rgba(242,221,176,.58) !important;
            color: #f2ddb0 !important;
            box-shadow:
                0 14px 34px rgba(0,0,0,.34),
                0 0 0 1px rgba(255,255,255,.04) inset !important;
        }

        .music-control.is-playing {
            animation: galleryMusicPulse 2.2s ease-in-out infinite !important;
        }

        @keyframes galleryMusicPulse {
            0%,100% {
                box-shadow:
                    0 14px 34px rgba(0,0,0,.34),
                    0 0 0 0 rgba(217,184,108,.18);
            }
            50% {
                box-shadow:
                    0 16px 38px rgba(0,0,0,.40),
                    0 0 0 11px rgba(217,184,108,0);
            }
        }

        .music-tip {
            background: rgba(17,9,10,.92) !important;
            color: #f2ddb0 !important;
            border-color: rgba(217,184,108,.26) !important;
        }

        /* Scroll progress */
        #fx-scroll-progress {
            background: rgba(255,255,255,.025) !important;
        }

        #fx-scroll-progress-bar {
            background:
                linear-gradient(
                    90deg,
                    #5b0814,
                    #a54a45,
                    #d9b86c,
                    #f2ddb0
                ) !important;
        }

        /* Mobile */
        @media (max-width: 640px) {
            body > section:first-of-type {
                min-height: 46vh;
                padding-top: 64px !important;
                padding-bottom: 56px !important;
            }

            .gallery-masonry {
                columns: 1;
            }

            .gallery-photo {
                margin-bottom: 16px;
            }

            .gallery-item {
                border-radius: 18px !important;
            }

            .lightbox-image {
                border-radius: 12px !important;
            }

            .music-control {
                width: 46px !important;
                height: 46px !important;
            }
        }


        #music-control {
            isolation: isolate;
        }

        #music-control::after {
            content: "";
            position: absolute;
            inset: -5px;
            border-radius: 999px;
            border: 1px solid rgba(217,184,108,.20);
            pointer-events: none;
        }

        #music-control.is-playing {
            animation: galleryMusicPulse 2.2s ease-in-out infinite !important;
        }



        /* =========================================================
           FINAL GALLERY STYLE - PREMIUM MINANG + CLEAR SCROLL REVEAL
           ========================================================= */

        body {
            background:
                radial-gradient(circle at 20% 8%, rgba(122,13,28,.22), transparent 28%),
                radial-gradient(circle at 82% 36%, rgba(217,184,108,.08), transparent 24%),
                linear-gradient(180deg, #140b0c 0%, #300910 48%, #100808 100%) !important;
            color: #f8eee3 !important;
        }

        header {
            background: rgba(17, 9, 10, .88) !important;
            border-bottom: 1px solid rgba(217,184,108,.18) !important;
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        header a {
            color: #f2ddb0 !important;
        }

        body > section:first-of-type {
            min-height: 52vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                radial-gradient(circle at 50% 26%, rgba(217,184,108,.08), transparent 36%),
                linear-gradient(180deg, rgba(91,8,20,.22), rgba(17,9,10,.12)) !important;
        }

        body > section:first-of-type h1 {
            color: #f2ddb0 !important;
            text-shadow:
                0 4px 28px rgba(0,0,0,.44),
                0 0 28px rgba(217,184,108,.08) !important;
        }

        body > section:first-of-type p {
            color: rgba(248,238,227,.80) !important;
        }

        body > section:nth-of-type(2) > div {
            background:
                linear-gradient(180deg, rgba(27,17,17,.94), rgba(14,8,9,.98)) !important;
            border: 1px solid rgba(217,184,108,.24) !important;
            box-shadow: 0 20px 56px rgba(0,0,0,.28) !important;
        }

        body > section:nth-of-type(2) .font-serif {
            color: #d9b86c !important;
        }

        body > section:nth-of-type(2) [class*="text-muted"] {
            color: rgba(248,238,227,.68) !important;
        }

        .filter-button {
            background: rgba(24,14,15,.88) !important;
            color: rgba(242,221,176,.88) !important;
            border: 1px solid rgba(217,184,108,.24) !important;
        }

        .filter-button:hover,
        .filter-button.active {
            background:
                linear-gradient(135deg, #f2ddb0 0%, #d9b86c 54%, #b78a3d 100%) !important;
            color: #2c160d !important;
            border-color: rgba(255,244,218,.72) !important;
            box-shadow:
                0 12px 28px rgba(0,0,0,.26),
                0 0 22px rgba(217,184,108,.12) !important;
        }

        .gallery-item {
            background: #160e0f !important;
            border: 1px solid rgba(217,184,108,.24) !important;
            border-radius: 22px !important;
            box-shadow:
                0 18px 48px rgba(0,0,0,.30),
                inset 0 0 0 1px rgba(255,255,255,.02) !important;
            overflow: hidden !important;
        }

        .gallery-item img {
            filter:
                saturate(.92)
                contrast(1.04)
                brightness(.92) !important;
            transition:
                transform .8s cubic-bezier(.16,1,.3,1),
                filter .7s ease !important;
        }

        .gallery-item:hover img {
            transform: scale(1.055) !important;
            filter:
                saturate(.90)
                contrast(1.04)
                brightness(.70) !important;
        }

        .gallery-overlay {
            background:
                linear-gradient(
                    180deg,
                    rgba(53,4,11,.01) 0%,
                    rgba(53,4,11,.20) 48%,
                    rgba(17,8,9,.76) 100%
                ) !important;
        }

        .gallery-overlay > div {
            background: rgba(17,9,10,.48) !important;
            border-color: rgba(242,221,176,.60) !important;
            color: #f2ddb0 !important;
        }

        footer {
            background: linear-gradient(180deg, #3b0710, #17090b) !important;
            border-top: 1px solid rgba(217,184,108,.16) !important;
        }

        footer h2,
        footer a {
            color: #f2ddb0 !important;
        }

        footer p {
            color: rgba(248,238,227,.66) !important;
        }

        /* ---------------------------------------------------------
           ONE BY ONE SCROLL REVEAL
           --------------------------------------------------------- */
        .gallery-reveal {
            opacity: 0 !important;
            transform:
                translate3d(0, 42px, 0)
                scale(.97) !important;
            filter: blur(7px) !important;
            transition:
                opacity .72s cubic-bezier(.16,1,.3,1),
                transform .86s cubic-bezier(.16,1,.3,1),
                filter .72s ease !important;
            will-change: opacity, transform, filter;
        }

        .gallery-reveal.gallery-visible {
            opacity: 1 !important;
            transform:
                translate3d(0, 0, 0)
                scale(1) !important;
            filter: blur(0) !important;
        }

        /* Slight alternating direction, but still subtle */
        .gallery-reveal.from-left {
            transform:
                translate3d(-34px, 34px, 0)
                scale(.97) !important;
        }

        .gallery-reveal.from-right {
            transform:
                translate3d(34px, 34px, 0)
                scale(.97) !important;
        }

        .gallery-reveal.from-left.gallery-visible,
        .gallery-reveal.from-right.gallery-visible {
            transform:
                translate3d(0, 0, 0)
                scale(1) !important;
        }

        /* ---------------------------------------------------------
           MUSIC CONTROL - ALWAYS VISIBLE
           --------------------------------------------------------- */
        #music-control {
            position: fixed !important;
            left: 18px !important;
            bottom: 18px !important;
            z-index: 2147483000 !important;
            width: 56px !important;
            height: 56px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 999px !important;
            border: 1px solid rgba(242,221,176,.78) !important;
            background:
                linear-gradient(145deg, #800020, #35040b) !important;
            color: #f2ddb0 !important;
            box-shadow:
                0 14px 38px rgba(0,0,0,.40),
                0 0 0 1px rgba(255,255,255,.04) inset !important;
            opacity: 1 !important;
            visibility: visible !important;
            pointer-events: auto !important;
            cursor: pointer !important;
        }

        #music-control #music-icon {
            display: block !important;
            color: #f2ddb0 !important;
            font-size: 26px !important;
            line-height: 1 !important;
        }

        #music-control.is-playing {
            animation: finalGalleryMusicPulse 2.2s ease-in-out infinite !important;
        }

        @keyframes finalGalleryMusicPulse {
            0%,100% {
                box-shadow:
                    0 14px 38px rgba(0,0,0,.40),
                    0 0 0 0 rgba(217,184,108,.22);
            }
            50% {
                box-shadow:
                    0 16px 42px rgba(0,0,0,.46),
                    0 0 0 12px rgba(217,184,108,0);
            }
        }

        #music-tip {
            background: rgba(17,9,10,.94) !important;
            color: #f2ddb0 !important;
            border-color: rgba(217,184,108,.28) !important;
        }

        @media (max-width: 640px) {
            .gallery-masonry {
                columns: 1 !important;
            }

            .gallery-photo {
                margin-bottom: 16px !important;
            }

            .gallery-item {
                border-radius: 18px !important;
            }

            #music-control {
                width: 50px !important;
                height: 50px !important;
                left: 14px !important;
                bottom: 14px !important;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .gallery-reveal {
                opacity: 1 !important;
                transform: none !important;
                filter: none !important;
                transition: none !important;
            }
        }


        /* Hide previous experimental music control; use V2 below */
        #music-control,
        #music-tip {
            display: none !important;
        }

        /* =========================================================
           GALLERY MUSIC CONTROL V2 - ALWAYS VISIBLE
           ========================================================= */
        #gallery-music-v2 {
            position: fixed !important;
            left: 18px !important;
            bottom: 18px !important;
            z-index: 2147483646 !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 9px !important;
            min-height: 52px !important;
            padding: 0 18px 0 14px !important;
            border-radius: 999px !important;
            border: 1px solid rgba(242, 221, 176, .78) !important;
            background: linear-gradient(145deg, #800020, #35040b) !important;
            color: #f2ddb0 !important;
            box-shadow:
                0 14px 38px rgba(0,0,0,.42),
                0 0 0 1px rgba(255,255,255,.05) inset !important;
            backdrop-filter: blur(14px) !important;
            -webkit-backdrop-filter: blur(14px) !important;
            cursor: pointer !important;
            opacity: 1 !important;
            visibility: visible !important;
            pointer-events: auto !important;
            font-family: Manrope, sans-serif !important;
            font-size: 11px !important;
            font-weight: 800 !important;
            letter-spacing: .12em !important;
            text-transform: uppercase !important;
        }

        #gallery-music-v2 .gallery-music-v2-icon {
            width: 30px !important;
            height: 30px !important;
            border-radius: 50% !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            background: rgba(242,221,176,.12) !important;
            color: #f2ddb0 !important;
            font-size: 20px !important;
            line-height: 1 !important;
        }

        #gallery-music-v2.is-playing {
            animation: galleryMusicV2Pulse 2.2s ease-in-out infinite !important;
        }

        @keyframes galleryMusicV2Pulse {
            0%,100% {
                box-shadow:
                    0 14px 38px rgba(0,0,0,.42),
                    0 0 0 0 rgba(217,184,108,.20);
            }
            50% {
                box-shadow:
                    0 16px 42px rgba(0,0,0,.48),
                    0 0 0 11px rgba(217,184,108,0);
            }
        }

        @media (max-width: 640px) {
            #gallery-music-v2 {
                left: 12px !important;
                bottom: 12px !important;
                min-height: 48px !important;
                padding: 0 14px 0 11px !important;
                font-size: 10px !important;
            }

            #gallery-music-v2 .gallery-music-v2-icon {
                width: 28px !important;
                height: 28px !important;
                font-size: 18px !important;
            }
        }

</style>

</head>


<body class="songket-bg">

<audio
    id="gallery-wedding-music-v2"
    preload="auto"
    autoplay
    loop
    playsinline
>
    <source
        src="{{ asset('assets/audio/wedding-song.mp3') }}?v=20260923-2"
        type="audio/mpeg"
    >
</audio>

<button
    id="gallery-music-v2"
    type="button"
    aria-label="Putar atau jeda musik"
    aria-pressed="false"
>
    <span
        id="gallery-music-v2-icon"
        class="gallery-music-v2-icon"
        aria-hidden="true"
    >♪</span>

    <span id="gallery-music-v2-label">
        Musik
    </span>
</button>


<div id="fx-scroll-progress" aria-hidden="true">
    <div id="fx-scroll-progress-bar"></div>
</div>

<div class="fx-ambient fx-a" aria-hidden="true"></div>
<div class="fx-ambient fx-b" aria-hidden="true"></div>

<audio
    id="wedding-music"
    preload="auto"
    autoplay
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
    style="
        position:fixed !important;
        left:18px !important;
        bottom:18px !important;
        z-index:2147483000 !important;
        width:54px !important;
        height:54px !important;
        display:flex !important;
        align-items:center !important;
        justify-content:center !important;
        border-radius:999px !important;
        border:1px solid rgba(242,221,176,.75) !important;
        background:linear-gradient(145deg,#800020,#35040b) !important;
        color:#f2ddb0 !important;
        box-shadow:0 12px 36px rgba(0,0,0,.38) !important;
        cursor:pointer !important;
        opacity:1 !important;
        visibility:visible !important;
        pointer-events:auto !important;
    "
>
    <span
        id="music-icon"
        class="music-icon"
        style="
            display:block !important;
            color:#f2ddb0 !important;
            font-size:25px !important;
            line-height:1 !important;
        "
    >♪</span>
</button>

<div
    id="music-tip"
    class="music-tip"
    aria-hidden="true"
    style="
        position:fixed !important;
        left:82px !important;
        bottom:27px !important;
        z-index:2147482999 !important;
    "
>
    Musik
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


<script>
(function () {
    const audio = document.getElementById('wedding-music');
    const button = document.getElementById('music-control');
    const icon = document.getElementById('music-icon');
    const tip = document.getElementById('music-tip');

    if (!audio || !button || !icon) {
        return;
    }

    audio.volume = 0.55;

    let blocked = false;
    let userHandled = false;

    function setUI(playing) {
        button.classList.toggle('is-playing', playing);
        button.setAttribute(
            'aria-pressed',
            playing ? 'true' : 'false'
        );
        icon.textContent = playing ? '♫' : '♪';
    }

    async function startMusic() {
        try {
            await audio.play();
            blocked = false;
            setUI(true);

            if (tip) {
                tip.classList.remove('show');
            }

            return true;
        } catch (error) {
            blocked = true;
            setUI(false);

            if (tip) {
                tip.classList.add('show');

                setTimeout(function () {
                    tip.classList.remove('show');
                }, 4200);
            }

            return false;
        }
    }

    function stopMusic() {
        audio.pause();
        setUI(false);
    }

    button.addEventListener('click', async function (event) {
        event.stopPropagation();
        userHandled = true;

        if (audio.paused) {
            await startMusic();
        } else {
            stopMusic();
        }
    });

    audio.addEventListener('play', function () {
        setUI(true);
    });

    audio.addEventListener('pause', function () {
        setUI(false);
    });

    window.addEventListener('load', function () {
        setTimeout(startMusic, 350);
    });

    async function unlock() {
        if (
            userHandled ||
            !audio.paused ||
            !blocked
        ) {
            cleanup();
            return;
        }

        userHandled = true;
        await startMusic();
        cleanup();
    }

    function cleanup() {
        document.removeEventListener('pointerdown', unlock);
        document.removeEventListener('touchstart', unlock);
        document.removeEventListener('keydown', unlock);
    }

    document.addEventListener(
        'pointerdown',
        unlock,
        { passive: true }
    );

    document.addEventListener(
        'touchstart',
        unlock,
        { passive: true }
    );

    document.addEventListener(
        'keydown',
        unlock
    );
})();
</script>


<script>
(function () {
    function setupGalleryReveal() {
        const photos =
            Array.from(
                document.querySelectorAll('.gallery-photo')
            );

        if (!photos.length) {
            return;
        }

        photos.forEach(function (photo, index) {
            photo.classList.add('gallery-reveal');

            if (index % 3 === 1) {
                photo.classList.add('from-left');
            } else if (index % 3 === 2) {
                photo.classList.add('from-right');
            }

            photo.dataset.galleryRevealIndex =
                String(index);
        });

        const revealObserver =
            new IntersectionObserver(
                function (entries) {
                    entries.forEach(function (entry) {
                        if (!entry.isIntersecting) {
                            return;
                        }

                        const item = entry.target;
                        const index =
                            Number(
                                item.dataset.galleryRevealIndex || 0
                            );

                        /*
                         * Each item appears individually as the
                         * visitor reaches it while scrolling.
                         */
                        const delay =
                            (index % 3) * 90;

                        window.setTimeout(
                            function () {
                                item.classList.add(
                                    'gallery-visible'
                                );
                            },
                            delay
                        );

                        revealObserver.unobserve(item);
                    });
                },
                {
                    root: null,
                    threshold: 0.18,
                    rootMargin: '0px 0px -8% 0px'
                }
            );

        photos.forEach(function (photo) {
            revealObserver.observe(photo);
        });

        /*
         * Filtering can reveal hidden photos later.
         * Re-arm their reveal state when a filter is clicked.
         */
        document
            .querySelectorAll('.filter-button')
            .forEach(function (button) {
                button.addEventListener(
                    'click',
                    function () {
                        window.setTimeout(
                            function () {
                                photos.forEach(function (photo) {
                                    if (
                                        photo.style.display !== 'none' &&
                                        !photo.classList.contains(
                                            'gallery-visible'
                                        )
                                    ) {
                                        revealObserver.observe(photo);
                                    }
                                });
                            },
                            40
                        );
                    }
                );
            });
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            setupGalleryReveal
        );
    } else {
        setupGalleryReveal();
    }
})();
</script>


<script>
(function () {
    function initFinalGalleryMusic() {
        const audio =
            document.getElementById('wedding-music');

        const button =
            document.getElementById('music-control');

        const icon =
            document.getElementById('music-icon');

        const tip =
            document.getElementById('music-tip');

        if (!audio || !button || !icon) {
            return;
        }

        audio.volume = 0.55;

        function updateUI(playing) {
            button.classList.toggle(
                'is-playing',
                playing
            );

            button.setAttribute(
                'aria-pressed',
                playing ? 'true' : 'false'
            );

            icon.textContent =
                playing ? '♫' : '♪';
        }

        async function playMusic() {
            try {
                await audio.play();
                updateUI(true);

                if (tip) {
                    tip.classList.remove('show');
                }

                return true;
            } catch (error) {
                updateUI(false);

                if (tip) {
                    tip.classList.add('show');

                    window.setTimeout(
                        function () {
                            tip.classList.remove('show');
                        },
                        4500
                    );
                }

                return false;
            }
        }

        button.onclick = async function (event) {
            event.preventDefault();
            event.stopPropagation();

            if (audio.paused) {
                await playMusic();
            } else {
                audio.pause();
                updateUI(false);
            }
        };

        audio.addEventListener(
            'play',
            function () {
                updateUI(true);
            }
        );

        audio.addEventListener(
            'pause',
            function () {
                updateUI(false);
            }
        );

        /*
         * First try normal autoplay.
         * If browser blocks it, first user interaction unlocks it.
         */
        window.setTimeout(
            playMusic,
            300
        );

        async function unlockMusic() {
            if (!audio.paused) {
                cleanup();
                return;
            }

            const started =
                await playMusic();

            if (started) {
                cleanup();
            }
        }

        function cleanup() {
            document.removeEventListener(
                'pointerdown',
                unlockMusic
            );

            document.removeEventListener(
                'touchstart',
                unlockMusic
            );

            document.removeEventListener(
                'keydown',
                unlockMusic
            );
        }

        document.addEventListener(
            'pointerdown',
            unlockMusic,
            { passive: true }
        );

        document.addEventListener(
            'touchstart',
            unlockMusic,
            { passive: true }
        );

        document.addEventListener(
            'keydown',
            unlockMusic
        );
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initFinalGalleryMusic
        );
    } else {
        initFinalGalleryMusic();
    }
})();
</script>


<script>
(function () {
    function initGalleryMusicV2() {
        const audio =
            document.getElementById('gallery-wedding-music-v2');

        const button =
            document.getElementById('gallery-music-v2');

        const icon =
            document.getElementById('gallery-music-v2-icon');

        const label =
            document.getElementById('gallery-music-v2-label');

        if (!audio || !button || !icon || !label) {
            return;
        }

        audio.volume = 0.55;

        function setState(playing) {
            button.classList.toggle('is-playing', playing);
            button.setAttribute(
                'aria-pressed',
                playing ? 'true' : 'false'
            );

            icon.textContent =
                playing ? '♫' : '♪';

            label.textContent =
                playing ? 'Musik On' : 'Musik';
        }

        async function playMusic() {
            try {
                await audio.play();
                setState(true);
                return true;
            } catch (error) {
                setState(false);
                return false;
            }
        }

        button.addEventListener(
            'click',
            async function (event) {
                event.preventDefault();
                event.stopPropagation();

                if (audio.paused) {
                    await playMusic();
                } else {
                    audio.pause();
                    setState(false);
                }
            }
        );

        audio.addEventListener(
            'play',
            function () {
                setState(true);
            }
        );

        audio.addEventListener(
            'pause',
            function () {
                setState(false);
            }
        );

        /* Try autoplay first */
        window.setTimeout(
            playMusic,
            250
        );

        /*
         * Audible autoplay can be blocked by Chrome/Safari.
         * The first real interaction starts it automatically.
         */
        async function unlockOnFirstInteraction(event) {
            if (
                event &&
                event.target &&
                event.target.closest &&
                event.target.closest('#gallery-music-v2')
            ) {
                return;
            }

            if (audio.paused) {
                const started =
                    await playMusic();

                if (!started) {
                    return;
                }
            }

            cleanupUnlock();
        }

        function cleanupUnlock() {
            document.removeEventListener(
                'pointerdown',
                unlockOnFirstInteraction
            );

            document.removeEventListener(
                'touchstart',
                unlockOnFirstInteraction
            );

            document.removeEventListener(
                'keydown',
                unlockOnFirstInteraction
            );
        }

        document.addEventListener(
            'pointerdown',
            unlockOnFirstInteraction,
            { passive: true }
        );

        document.addEventListener(
            'touchstart',
            unlockOnFirstInteraction,
            { passive: true }
        );

        document.addEventListener(
            'keydown',
            unlockOnFirstInteraction
        );
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initGalleryMusicV2
        );
    } else {
        initGalleryMusicV2();
    }
})();
</script>


<script>
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.getRegistrations()
        .then(function (registrations) {
            registrations.forEach(function (registration) {
                registration.unregister();
            });
        })
        .catch(function () {});
}
</script>

</body>

</html>
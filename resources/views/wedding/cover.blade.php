<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Fajar & Ranti</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;700&family=Manrope:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        :root {
            --maroon: #7b001b;
            --maroon-dark: #5a0014;

            --gold: #d6a62f;
            --gold-light: #efcf6a;

            --cream: #f8f3ed;
            --white: #ffffff;

            --text: #4f2730;
            --muted: #96878a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;

            font-family: 'Manrope', sans-serif;

            background:
                radial-gradient(
                    circle at top left,
                    rgba(214, 166, 47, 0.08),
                    transparent 35%
                ),
                var(--cream);

            color: var(--text);
        }

        a {
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .page {
            width: 100%;
            min-height: 100vh;

            display: flex;
            flex-direction: column;
        }

        .main {
            flex: 1;

            width: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 24px;
        }

        .invitation-card {
            width: min(1150px, 100%);

            min-height: min(
                800px,
                calc(100vh - 48px)
            );

            display: grid;

            grid-template-columns:
                minmax(0, 1.2fr)
                minmax(360px, 0.8fr);

            overflow: hidden;

            background: #ffffff;

            border-radius: 22px;

            box-shadow:
                0 26px 70px rgba(57, 28, 33, 0.13),
                0 5px 15px rgba(57, 28, 33, 0.05);
        }

        /*
        |--------------------------------------------------------------------------
        | PHOTO SECTION
        |--------------------------------------------------------------------------
        */

        .photo-section {
            position: relative;

            min-height: 760px;

            overflow: hidden;

            background: #30211d;
        }

        .photo-section img {
            position: absolute;
            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;

            object-position: center center;
        }

        .photo-overlay {
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    180deg,
                    rgba(0, 0, 0, 0.07),
                    rgba(0, 0, 0, 0.01) 45%,
                    rgba(0, 0, 0, 0.13)
                );

            pointer-events: none;
        }

        .photo-frame {
            position: absolute;

            inset: 20px;

            border: 1px solid rgba(214, 166, 47, 0.6);

            border-radius: 10px;

            pointer-events: none;
        }

        .photo-frame::before,
        .photo-frame::after {
            content: '';

            position: absolute;

            width: 54px;
            height: 54px;
        }

        .photo-frame::before {
            top: 8px;
            left: 8px;

            border-top: 2px solid var(--gold);
            border-left: 2px solid var(--gold);
        }

        .photo-frame::after {
            right: 8px;
            bottom: 8px;

            border-right: 2px solid var(--gold);
            border-bottom: 2px solid var(--gold);
        }

        /*
        |--------------------------------------------------------------------------
        | CONTENT SECTION
        |--------------------------------------------------------------------------
        */

        .content-section {
            position: relative;

            min-height: 760px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding:
                clamp(44px, 5vw, 78px)
                clamp(32px, 5vw, 64px);

            background:
                linear-gradient(
                    180deg,
                    #ffffff 0%,
                    #fffdfa 100%
                );
        }

        .content {
            width: min(430px, 100%);

            display: flex;
            flex-direction: column;

            align-items: center;

            text-align: center;
        }

        .top-diamond,
        .bottom-diamond {
            width: 12px;
            height: 12px;

            background: var(--gold-light);

            transform: rotate(45deg);
        }

        .top-diamond {
            margin-bottom: 32px;
        }

        .bottom-diamond {
            margin-top: 34px;
        }

        .eyebrow {
            margin-bottom: 20px;

            color: var(--text);

            font-size: 11px;
            font-weight: 600;

            letter-spacing: 0.16em;

            text-transform: uppercase;
        }

        .couple-name {
            font-family: 'Libre Caslon Text', serif;

            font-size:
                clamp(
                    46px,
                    4.7vw,
                    70px
                );

            font-weight: 700;

            line-height: 0.98;

            letter-spacing: -0.035em;

            color: var(--maroon);
        }

        .ampersand {
            margin: 16px 0;

            font-family: 'Libre Caslon Text', serif;

            font-size: 34px;
            font-weight: 700;

            line-height: 1;

            color: var(--gold);
        }

        .full-name {
            margin-top: 26px;

            color: #6d4f55;

            font-size: 13px;
            font-style: italic;

            line-height: 1.65;
        }

        /*
        |--------------------------------------------------------------------------
        | DIVIDER
        |--------------------------------------------------------------------------
        */

        .divider {
            width: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 44px 0;
        }

        .divider-line {
            flex: 1;

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(214, 166, 47, 0.75)
                );
        }

        .divider-line.right {
            background:
                linear-gradient(
                    90deg,
                    rgba(214, 166, 47, 0.75),
                    transparent
                );
        }

        .divider-star {
            padding: 0 14px;

            color: var(--gold-light);

            font-size: 17px;
        }

        /*
        |--------------------------------------------------------------------------
        | DATE
        |--------------------------------------------------------------------------
        */

        .date {
            font-family: 'Libre Caslon Text', serif;

            font-size: 18px;
            font-weight: 700;

            line-height: 1.5;

            color: var(--maroon);
        }

        .year {
            display: block;

            margin-top: 7px;

            font-size: 28px;
        }

        /*
        |--------------------------------------------------------------------------
        | RECIPIENT
        |--------------------------------------------------------------------------
        */

        .recipient {
            width: 100%;

            margin-top: 50px;
        }

        .recipient-label {
            margin-bottom: 22px;

            font-size: 9px;
            font-weight: 600;

            letter-spacing: 0.07em;

            color: #5f444a;

            text-transform: uppercase;
        }

        .recipient-name {
            width: 100%;

            min-height: 40px;

            padding-bottom: 12px;

            border-bottom:
                1px solid rgba(79, 39, 48, 0.18);

            font-family: 'Libre Caslon Text', serif;

            font-size: 18px;
            font-weight: 700;

            color: var(--maroon);
        }

        .recipient-place {
            margin-top: 20px;

            font-size: 10px;

            color: #aaa0a2;
        }

        /*
        |--------------------------------------------------------------------------
        | BUTTON
        |--------------------------------------------------------------------------
        */

        .open-button {
            width: 100%;
            max-width: 280px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 14px;

            margin-top: 30px;

            padding: 16px 26px;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    var(--maroon),
                    var(--maroon-dark)
                );

            color: #ffffff;

            font-size: 13px;
            font-weight: 700;

            box-shadow:
                0 13px 30px rgba(123, 0, 27, 0.22);

            transition:
                transform 0.25s ease,
                box-shadow 0.25s ease;
        }

        .open-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 18px 35px rgba(123, 0, 27, 0.28);
        }

        .open-button:active {
            transform: translateY(0);
        }

        .arrow {
            font-size: 18px;

            line-height: 1;
        }

        /*
        |--------------------------------------------------------------------------
        | LARGE DESKTOP
        |--------------------------------------------------------------------------
        */

        @media (min-width: 1400px) {

            .invitation-card {
                width: min(1220px, 100%);
            }

        }

        /*
        |--------------------------------------------------------------------------
        | TABLET / SMALL LAPTOP
        |--------------------------------------------------------------------------
        */

        @media (max-width: 1000px) {

            .main {
                padding: 18px;
            }

            .invitation-card {
                width: min(860px, 100%);

                grid-template-columns:
                    minmax(0, 1.05fr)
                    minmax(330px, 0.95fr);
            }

            .photo-section,
            .content-section {
                min-height: 680px;
            }

            .content-section {
                padding:
                    42px
                    34px;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | MOBILE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 760px) {

            body {
                background: #ffffff;
            }

            .main {
                padding: 0;
            }

            .invitation-card {
                width: 100%;

                min-height: auto;

                display: block;

                border-radius: 0;

                box-shadow: none;
            }

            .photo-section {
                width: 100%;

                height: min(
                    72vh,
                    620px
                );

                min-height: 500px;
            }

            .photo-section img {
                object-position: center center;
            }

            .photo-frame {
                inset: 14px;
            }

            .content-section {
                min-height: auto;

                padding:
                    54px
                    24px
                    50px;
            }

            .content {
                width: 100%;
            }

            .top-diamond {
                margin-bottom: 26px;
            }

            .eyebrow {
                margin-bottom: 17px;

                font-size: 10px;
            }

            .couple-name {
                font-size:
                    clamp(
                        44px,
                        13vw,
                        60px
                    );
            }

            .ampersand {
                margin: 13px 0;

                font-size: 30px;
            }

            .full-name {
                margin-top: 23px;

                font-size: 12px;
            }

            .divider {
                margin: 36px 0;
            }

            .date {
                font-size: 17px;
            }

            .year {
                font-size: 26px;
            }

            .recipient {
                margin-top: 42px;
            }

            .recipient-label {
                font-size: 8px;
            }

            .recipient-name {
                font-size: 17px;
            }

            .open-button {
                max-width: 100%;

                padding: 17px 24px;

                font-size: 13px;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | SMALL MOBILE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 420px) {

            .photo-section {
                min-height: 460px;

                height: 66vh;
            }

            .content-section {
                padding:
                    44px
                    20px;
            }

            .couple-name {
                font-size: 46px;
            }

            .date {
                font-size: 16px;
            }

            .year {
                font-size: 24px;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | VERY SMALL MOBILE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 360px) {

            .photo-section {
                min-height: 430px;
            }

            .content-section {
                padding:
                    40px
                    16px;
            }

            .couple-name {
                font-size: 42px;
            }

            .full-name {
                font-size: 11px;
            }

        }

        /*
        |--------------------------------------------------------------------------
        | SHORT LANDSCAPE SCREEN
        |--------------------------------------------------------------------------
        */

        @media
            (min-width: 761px)
            and
            (max-height: 760px)
        {

            .main {
                align-items: flex-start;
            }

            .photo-section,
            .content-section {
                min-height: 620px;
            }

            .content-section {
                padding-top: 32px;
                padding-bottom: 32px;
            }

            .divider {
                margin: 27px 0;
            }

            .recipient {
                margin-top: 32px;
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


        .fx-cover-image {
            will-change: transform;
            transform: scale(1.03);
            transition: transform .08s linear;
        }

        .photo-frame {
            box-shadow:
                0 0 28px rgba(214,166,47,.08) inset;
        }

</style>
</head>

<body>

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


<div class="page">

    <main class="main">

        <section class="invitation-card">

            {{-- ======================================================
                 FOTO KIRI
            ======================================================= --}}

            <div class="photo-section fx-cover-photo">

                <img
                    src="{{ asset('assets/images/adat/MONO7455-Edit.jpg') }}"
                    alt="Fajar dan Ranti"
                    class="fx-cover-image"
                >

                <div class="photo-overlay"></div>

                <div class="photo-frame"></div>

            </div>


            {{-- ======================================================
                 CONTENT KANAN
            ======================================================= --}}

            <div class="content-section">

                <div class="content">

                    <div class="top-diamond"></div>

                    <div class="eyebrow">
                        The Wedding Of
                    </div>


                    <h1 class="couple-name">
                        Fajar
                    </h1>


                    <div class="ampersand">
                        &
                    </div>


                    <h1 class="couple-name">
                        Ranti
                    </h1>


                    <div class="full-name">

                        Muhammad Fajar, S.T.

                        <br>

                        &

                        <br>

                        Arianti Fakhrina, SE.

                    </div>


                    {{-- DIVIDER --}}

                    <div class="divider">

                        <div class="divider-line"></div>

                        <div class="divider-star">
                            ✦
                        </div>

                        <div class="divider-line right"></div>

                    </div>


                    {{-- TANGGAL --}}

                    <div class="date">

                        14 - 15 & 17 Oktober

                        <span class="year">
                            2026
                        </span>

                    </div>


                    {{-- NAMA TAMU --}}

                    <div class="recipient">

                        <div class="recipient-label">
                            Kepada Bapak/Ibu/Saudara/i
                        </div>

                        <div class="recipient-name">

                            {{ request('to') ?: 'Tamu Undangan' }}

                        </div>

                        <div class="recipient-place">
                            Di Tempat
                        </div>

                    </div>


                    {{-- BUTTON --}}

                    <a
                        href="{{ route('wedding.invitation') }}"
                        class="open-button"
                    >

                        <span>
                            Buka Undangan
                        </span>

                        <span class="arrow">
                            →
                        </span>

                    </a>


                    <div class="bottom-diamond"></div>

                </div>

            </div>

        </section>

    </main>

</div>


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
    const image = document.querySelector('.fx-cover-image');

    if (!image) return;

    let ticking = false;

    function updateCoverParallax() {
        const y =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            0;

        image.style.transform =
            'translate3d(0,' +
            Math.min(45, y * 0.10) +
            'px,0) scale(1.05)';

        ticking = false;
    }

    window.addEventListener(
        'scroll',
        function () {
            if (!ticking) {
                requestAnimationFrame(updateCoverParallax);
                ticking = true;
            }
        },
        { passive: true }
    );

    updateCoverParallax();
})();
</script>

</body>
</html>
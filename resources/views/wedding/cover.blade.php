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

    </style>
</head>

<body>

<div class="page">

    <main class="main">

        <section class="invitation-card">

            {{-- ======================================================
                 FOTO KIRI
            ======================================================= --}}

            <div class="photo-section">

                <img
                    src="{{ asset('assets/images/adat/MONO7455-Edit.jpg') }}"
                    alt="Fajar dan Ranti"
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

</body>
</html>
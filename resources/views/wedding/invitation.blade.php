<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Fajar & Ranti Wedding Invitation
    </title>


    {{-- =========================================================
        TAILWIND
    ========================================================== --}}

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>


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
        MATERIAL SYMBOL
    ========================================================== --}}

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet"
    >


    {{-- =========================================================
        TAILWIND CONFIG
    ========================================================== --}}

    <script id="tailwind-config">

        tailwind.config = {

            darkMode: "class",

            theme: {

                extend: {

                    colors: {

                        "inverse-surface": "#34302c",

                        "secondary": "#735c00",

                        "secondary-container": "#fed65b",

                        "error": "#ba1a1a",

                        "inverse-on-surface": "#f8efea",

                        "on-surface": "#1e1b18",

                        "on-primary": "#ffffff",

                        "surface": "#fff8f5",

                        "secondary-fixed": "#ffe088",

                        "on-primary-container": "#ff828a",

                        "on-tertiary-fixed-variant": "#4b463c",

                        "surface-bright": "#fff8f5",

                        "surface-container": "#f5ece7",

                        "primary-fixed-dim": "#ffb3b5",

                        "on-secondary-fixed-variant": "#574500",

                        "on-secondary-fixed": "#241a00",

                        "on-tertiary-fixed": "#1e1b13",

                        "on-error-container": "#93000a",

                        "surface-tint": "#af2b3e",

                        "tertiary-fixed": "#e9e2d3",

                        "outline": "#8c7071",

                        "tertiary-fixed-dim": "#cdc6b8",

                        "error-container": "#ffdad6",

                        "primary-fixed": "#ffdada",

                        "tertiary-container": "#413d33",

                        "inverse-primary": "#ffb3b5",

                        "on-secondary-container": "#745c00",

                        "on-tertiary-container": "#aea89a",

                        "surface-dim": "#e1d8d4",

                        "secondary-fixed-dim": "#e9c349",

                        "on-primary-fixed": "#40000b",

                        "surface-container-highest": "#e9e1dc",

                        "surface-container-low": "#fbf2ed",

                        "surface-container-high": "#efe6e2",

                        "background": "#fff8f5",

                        "outline-variant": "#e0bfbf",

                        "on-primary-fixed-variant": "#8e0f28",

                        "on-surface-variant": "#584141",

                        "on-secondary": "#ffffff",

                        "on-error": "#ffffff",

                        "tertiary": "#2b271e",

                        "surface-variant": "#e9e1dc",

                        "on-background": "#1e1b18",

                        "surface-container-lowest": "#ffffff",

                        "primary-container": "#800020",

                        "on-tertiary": "#ffffff",

                        "primary": "#570013"

                    },


                    borderRadius: {

                        DEFAULT: "0.125rem",

                        lg: "0.25rem",

                        xl: "0.5rem",

                        full: "0.75rem"

                    },


                    spacing: {

                        gutter: "24px",

                        "margin-desktop": "64px",

                        "margin-mobile": "20px",

                        unit: "8px",

                        "container-max": "1200px"

                    },


                    fontFamily: {

                        "headline-lg-mobile": [
                            "Libre Caslon Text"
                        ],

                        "body-lg": [
                            "Manrope"
                        ],

                        "headline-lg": [
                            "Libre Caslon Text"
                        ],

                        "body-md": [
                            "Manrope"
                        ],

                        "display-lg": [
                            "Libre Caslon Text"
                        ],

                        "headline-md": [
                            "Libre Caslon Text"
                        ],

                        "label-md": [
                            "Manrope"
                        ]

                    },


                    fontSize: {

                        "headline-lg-mobile": [

                            "28px",

                            {
                                lineHeight: "36px",
                                fontWeight: "600"
                            }

                        ],


                        "body-lg": [

                            "18px",

                            {
                                lineHeight: "28px",
                                fontWeight: "400"
                            }

                        ],


                        "headline-lg": [

                            "32px",

                            {
                                lineHeight: "40px",
                                fontWeight: "600"
                            }

                        ],


                        "body-md": [

                            "16px",

                            {
                                lineHeight: "24px",
                                fontWeight: "400"
                            }

                        ],


                        "display-lg": [

                            "48px",

                            {
                                lineHeight: "56px",
                                letterSpacing: "-0.02em",
                                fontWeight: "700"
                            }

                        ],


                        "headline-md": [

                            "24px",

                            {
                                lineHeight: "32px",
                                fontWeight: "600"
                            }

                        ],


                        "label-md": [

                            "14px",

                            {
                                lineHeight: "20px",
                                letterSpacing: "0.05em",
                                fontWeight: "600"
                            }

                        ]

                    }

                }

            }

        };

    </script>


    <style>

        /* =========================================================
           ORIGINAL STYLE
        ========================================================= */

        .songket-bg {

            background-image:

                url(
                    'data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 0L40 20L20 40L0 20L20 0ZM20 4L4 20L20 36L36 20L20 4Z" fill="%23800020" fill-opacity="0.05"/></svg>'
                );

            background-repeat:
                repeat;

        }


        .bintang-bullet {

            list-style-type:
                none;

            position:
                relative;

            padding-left:
                1.5rem;

        }


        .bintang-bullet::before {

            content:
                '❖';

            position:
                absolute;

            left:
                0;

            color:
                #ffe088;

            font-size:
                0.8rem;

            top:
                50%;

            transform:
                translateY(-50%);

        }


        .ornate-border {

            border:
                2px solid #800020;

            padding:
                4px;

            position:
                relative;

        }


        .ornate-border::after {

            content:
                '';

            position:
                absolute;

            top:
                4px;

            left:
                4px;

            right:
                4px;

            bottom:
                4px;

            border:
                1px solid #ffe088;

            pointer-events:
                none;

        }


        /* =========================================================
           OUR STORY
        ========================================================= */

        .story-section {

            position:
                relative;

            overflow:
                hidden;

        }


        .story-circle-one {

            position:
                absolute;

            width:
                250px;

            height:
                250px;

            right:
                -110px;

            top:
                -100px;

            border-radius:
                50%;

            background:
                rgba(
                    128,
                    0,
                    32,
                    .04
                );

            pointer-events:
                none;

        }


        .story-circle-two {

            position:
                absolute;

            width:
                300px;

            height:
                300px;

            left:
                -130px;

            bottom:
                -150px;

            border-radius:
                50%;

            background:
                rgba(
                    255,
                    224,
                    136,
                    .12
                );

            pointer-events:
                none;

        }


        .story-quote {

            position:
                relative;

            background:
                #ffffff;

            border:
                1px solid
                rgba(
                    128,
                    0,
                    32,
                    .10
                );

            box-shadow:
                0 15px 45px
                rgba(
                    87,
                    0,
                    19,
                    .06
                );

        }


        .story-heart {

            position:
                absolute;

            top:
                -17px;

            left:
                50%;

            transform:
                translateX(-50%);

            width:
                34px;

            height:
                34px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            border-radius:
                50%;

            color:
                #ffe088;

            background:
                #800020;

        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        html,
        body {

            max-width:
                100%;

            overflow-x:
                hidden;

        }


        img,
        iframe,
        video,
        svg {

            max-width:
                100%;

        }


        main {

            width:
                calc(100% - 32px);

            max-width:
                800px;

        }


        .wedding-hero {

            min-height:
                620px;

        }


        .wedding-hero-image {

            object-fit:
                cover;

            object-position:
                center top;

        }


        /* LARGE DESKTOP */

        @media (
            min-width: 1280px
        ) {

            main {

                max-width:
                    800px;

            }


            .wedding-hero {

                height:
                    min(
                        90vh,
                        900px
                    );

            }


            .wedding-hero-image {

                object-position:
                    center 18%;

            }

        }


        /* TABLET */

        @media (
            max-width: 1024px
        ) {

            main {

                width:
                    calc(100% - 40px);

                margin-top:
                    32px !important;

                margin-bottom:
                    32px !important;

            }


            .wedding-hero {

                height:
                    82vh;

                min-height:
                    620px;

            }


            .wedding-title {

                font-size:

                    clamp(
                        44px,
                        8vw,
                        60px
                    ) !important;

            }

        }


        /* MOBILE */

        @media (
            max-width: 768px
        ) {

            main {

                width:
                    100%;

                max-width:
                    100%;

                margin-top:
                    0 !important;

                margin-bottom:
                    0 !important;

                box-shadow:
                    none !important;

            }


            .wedding-hero {

                height:
                    82svh !important;

                min-height:
                    560px;

                max-height:
                    760px;

            }


            .wedding-hero-content {

                padding:
                    24px
                    20px
                    48px !important;

            }


            .wedding-title {

                font-size:

                    clamp(
                        42px,
                        14vw,
                        58px
                    ) !important;

                line-height:
                    1.05 !important;

            }


            section.py-20 {

                padding-top:
                    64px !important;

                padding-bottom:
                    64px !important;

            }


            section.px-12,
            .px-12 {

                padding-left:
                    20px !important;

                padding-right:
                    20px !important;

            }


            .grid.md\:grid-cols-3 {

                grid-template-columns:
                    1fr !important;

            }


            #rekening-bni,
            #rekening-mandiri {

                overflow-wrap:
                    anywhere;

            }

        }


        @media (
            max-width: 480px
        ) {

            .wedding-hero {

                height:
                    76svh !important;

                min-height:
                    520px;

            }


            .wedding-title {

                font-size:
                    42px !important;

            }


            section.py-20 {

                padding-top:
                    54px !important;

                padding-bottom:
                    54px !important;

            }


            section.px-12,
            section.px-6,
            .px-12,
            .px-6 {

                padding-left:
                    16px !important;

                padding-right:
                    16px !important;

            }

        }

    </style>

</head>


<body
    class="
        bg-surface
        text-on-surface
        antialiased
        songket-bg
        min-h-screen
    "
>


<main
    class="
        max-w-[800px]
        mx-auto
        bg-surface-container-lowest/95
        shadow-2xl
        my-8
        md:my-16
        overflow-hidden
    "
>


{{-- =============================================================
     HERO
============================================================= --}}

<section
    class="
        relative
        w-full
        h-[80vh]
        md:h-[90vh]
        overflow-hidden
        wedding-hero
    "
>

    <div
        class="
            absolute
            inset-0
            bg-gradient-to-t
            from-primary/80
            via-black/20
            to-transparent
            z-10
        "
    ></div>


    <img
        alt="Fajar dan Ranti dalam busana adat Minangkabau"
        class="
            absolute
            inset-0
            w-full
            h-full
            object-cover
            object-top
            wedding-hero-image
        "
        src="{{ asset('assets/images/adat/MONO7455-Edit.jpg') }}"
    >


    <div
        class="
            absolute
            inset-0
            z-20
            flex
            flex-col
            items-center
            justify-end
            text-center
            p-8
            pb-16
            wedding-hero-content
        "
    >

        <span
            class="
                font-label-md
                text-label-md
                text-secondary-fixed
                mb-4
                tracking-[0.2em]
                uppercase
                bg-primary-container/90
                px-6
                py-2
                rounded-full
                border
                border-secondary-fixed/50
                shadow-lg
            "
        >
            The Wedding Of
        </span>


        <h1
            class="
                font-display-lg
                text-[64px]
                leading-tight
                text-on-primary
                mb-2
                drop-shadow-xl
                font-bold
                wedding-title
            "
        >
            Fajar &amp; Ranti
        </h1>


        <p
            class="
                font-headline-md
                text-headline-md
                text-secondary-fixed
                mt-4
                max-w-lg
                drop-shadow-md
            "
        >
            14-15 &amp; 17 Oktober 2026
        </p>

    </div>

</section>



{{-- =============================================================
     INTRO
============================================================= --}}

<section
    class="
        py-20
        text-center
        px-12
        max-w-4xl
        mx-auto
    "
>

    <div
        class="
            mb-10
            flex
            justify-center
        "
    >

        <span
            class="
                material-symbols-outlined
                text-primary
                text-5xl
            "
            style="font-variation-settings:'FILL' 1;"
        >
            favorite
        </span>

    </div>


    <p
        class="
            font-display-lg
            text-[20px]
            leading-loose
            text-on-surface-variant
            italic
        "
    >
        "Dan di antara tanda-tanda (kebesaran)-Nya ialah
        Dia menciptakan pasangan-pasangan untukmu dari
        jenismu sendiri, agar kamu cenderung dan merasa
        tenteram kepadanya, dan Dia menjadikan di antaramu
        rasa kasih dan sayang."
    </p>


    <p
        class="
            font-label-md
            text-label-md
            text-primary-container
            mt-6
            uppercase
            tracking-widest
        "
    >
        (QS. Ar-Rum: 21)
    </p>

</section>



{{-- =============================================================
     DIVIDER
============================================================= --}}

<div
    class="
        flex
        items-center
        justify-center
        pb-16
        opacity-50
    "
>

    <div
        class="
            h-[2px]
            w-full
            max-w-[200px]
            bg-primary
        "
    ></div>


    <span
        class="
            text-primary
            mx-6
            text-lg
        "
    >
        ❖
    </span>


    <div
        class="
            h-[2px]
            w-full
            max-w-[200px]
            bg-primary
        "
    ></div>

</div>



{{-- =============================================================
     OUR STORY
============================================================= --}}

<section
    class="
        story-section
        py-20
        px-6
        sm:px-12
        bg-surface-container-low
        border-y
        border-primary/10
    "
>

    <div class="story-circle-one"></div>

    <div class="story-circle-two"></div>


    <div
        class="
            relative
            z-10
            max-w-3xl
            mx-auto
            text-center
        "
    >

        <span
            class="
                font-label-md
                text-[11px]
                sm:text-label-md
                text-secondary
                tracking-[0.22em]
                uppercase
                font-semibold
            "
        >
            Our Story
        </span>


        <h2
            class="
                font-display-lg
                text-[30px]
                sm:text-[38px]
                md:text-[44px]
                leading-tight
                text-primary-container
                mt-3
            "
        >
            Bertemu di Waktu yang Tepat
        </h2>


        <div
            class="
                flex
                items-center
                justify-center
                my-8
                opacity-60
            "
        >

            <div
                class="
                    h-[1px]
                    w-16
                    sm:w-24
                    bg-primary
                "
            ></div>


            <span
                class="
                    text-primary
                    mx-4
                    text-sm
                "
            >
                ❖
            </span>


            <div
                class="
                    h-[1px]
                    w-16
                    sm:w-24
                    bg-primary
                "
            ></div>

        </div>



        {{-- OPENING --}}

        <p
            class="
                font-serif
                text-[18px]
                sm:text-[20px]
                md:text-[22px]
                leading-[1.9]
                text-on-surface-variant
                italic
            "
        >
            Ada begitu banyak kemungkinan dalam hidup,
            begitu banyak waktu dan tempat yang mungkin
            kami lewati.

            Namun dari semua kemungkinan itu,
            kami dipertemukan pada waktu yang tepat,
            di tempat yang tepat,
            dengan cara yang mungkin tidak pernah
            kami rencanakan sebelumnya.
        </p>



        {{-- STORY --}}

        <div
            class="
                mt-10
                space-y-7
                font-body-md
                text-[14px]
                sm:text-[15px]
                md:text-[16px]
                leading-[2]
                text-on-surface-variant
            "
        >

            <p>
                Pertemuan kami mungkin terlihat sederhana,
                tetapi perlahan kami menyadari bahwa
                beberapa pertemuan memang tidak hadir
                hanya karena kebetulan.

                Dari percakapan-percakapan kecil,
                dari waktu yang kami habiskan bersama,
                dan dari setiap langkah yang kami lalui,
                kami semakin belajar mengenal satu sama lain.
            </p>


            <p>
                Kami datang dengan cerita,
                kebiasaan, kelebihan,
                dan kekurangan masing-masing.

                Bukan untuk menjadi dua manusia yang sempurna,
                tetapi untuk belajar hadir dan

                <span
                    class="
                        font-semibold
                        text-primary
                    "
                >
                    saling melengkapi.
                </span>

                Ketika salah satu lelah,
                yang lain belajar menguatkan.

                Ketika salah satu ragu,
                yang lain belajar meyakinkan.

                Dan ketika kehidupan terasa berat,
                kami belajar bahwa semuanya terasa lebih ringan
                ketika dijalani bersama.
            </p>


            <p>
                Bersamanya,
                saya mengerti bahwa rumah
                tidak selalu berbentuk sebuah tempat.

                Terkadang rumah adalah seseorang
                yang membuat kita merasa tenang,
                diterima,
                didengar,
                dan tidak perlu menjadi orang lain
                untuk dicintai.
            </p>

        </div>



        {{-- ROMANTIC QUOTE --}}

        <div
            class="
                story-quote
                max-w-2xl
                mx-auto
                my-12
                px-6
                sm:px-10
                py-8
                sm:py-10
                rounded-xl
            "
        >

            <div
                class="
                    story-heart
                "
            >
                ♥
            </div>


            <p
                class="
                    font-serif
                    text-[19px]
                    sm:text-[22px]
                    md:text-[25px]
                    leading-[1.8]
                    text-primary
                    italic
                "
            >
                “Di antara banyak hal baik yang pernah
                hadir dalam hidup saya,
                salah satu yang paling saya syukuri
                adalah dipertemukan denganmu.

                Saya merasa beruntung karena menemukan
                bukan hanya seseorang yang saya cintai,
                tetapi juga seseorang yang ingin saya pilih
                lagi dan lagi untuk berjalan bersama.”
            </p>

        </div>



        {{-- CONTINUATION --}}

        <div
            class="
                space-y-7
                font-body-md
                text-[14px]
                sm:text-[15px]
                md:text-[16px]
                leading-[2]
                text-on-surface-variant
            "
        >

            <p>
                Saya merasa beruntung dipertemukan
                dengan jodoh yang bagi saya
                merupakan salah satu pemberian terbaik
                dalam hidup.

                Bukan karena perjalanan kami selalu sempurna,
                tetapi karena bersamanya,
                setiap perjalanan terasa layak
                untuk diperjuangkan.
            </p>


            <p>
                Cinta bagi kami bukan hanya
                tentang tertawa ketika semuanya
                sedang baik-baik saja.

                Cinta juga berarti memilih untuk tetap tinggal,
                belajar mendengar,
                memahami,
                memaafkan,
                dan terus berjalan berdampingan
                bahkan ketika hidup sedang tidak sederhana.
            </p>


            <p>
                Kami tidak mengetahui seluruh cerita
                yang menanti di depan.

                Tetapi kami tahu satu hal:
                kami ingin menjalani cerita itu bersama.

                Membuat lebih banyak kenangan,
                bertumbuh bersama,
                menjadi tempat pulang satu sama lain,
                dan suatu hari nanti menua
                dengan tetap menggenggam tangan yang sama.
            </p>


            <p>
                Jika suatu hari kami kembali mengingat
                bagaimana semuanya dimulai,
                semoga kami selalu ingat bahwa
                kebahagiaan terbesar bukan hanya
                tentang menemukan seseorang yang tepat,
                tetapi juga terus berusaha menjadi
                seseorang yang tepat bagi pasangan kita.
            </p>

        </div>



        {{-- CLOSING --}}

        <div
            class="
                mt-12
                pt-10
                border-t
                border-primary/10
            "
        >

            <p
                class="
                    font-serif
                    text-[19px]
                    sm:text-[22px]
                    leading-[1.8]
                    text-primary
                    italic
                "
            >
                “Mungkin kami tidak bertemu lebih awal,
                karena Tuhan sedang mempersiapkan kami
                untuk bertemu pada waktu yang paling tepat.”
            </p>


            <div
                class="
                    mt-8
                    text-secondary
                    text-xl
                "
            >
                ❖
            </div>


            <p
                class="
                    mt-5
                    font-label-md
                    text-[11px]
                    uppercase
                    tracking-[0.20em]
                    text-primary-container
                    font-semibold
                "
            >
                Fajar & Ranti
            </p>

        </div>

    </div>

</section>



{{-- =============================================================
     MEMPELAI
============================================================= --}}

<section
    class="
        py-12
        px-12
        text-center
    "
>

    <h2
        class="
            font-display-lg
            text-headline-lg
            text-primary-container
            mb-16
        "
    >
        Mempelai
    </h2>


    <div
        class="
            grid
            md:grid-cols-2
            gap-16
        "
    >

        <div
            class="
                flex
                flex-col
                items-center
            "
        >

            <h3
                class="
                    font-display-lg
                    text-[28px]
                    text-primary
                    mb-4
                "
            >
                Muhammad Fajar, S.T.
            </h3>


            <p
                class="
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    mb-4
                    italic
                "
            >
                Putra dari
            </p>


            <div
                class="
                    font-headline-md
                    text-[18px]
                    text-on-surface
                "
            >

                <p>
                    Bapak Jamal, Bsc
                </p>

                <p
                    class="
                        text-primary
                        my-1
                    "
                >
                    &amp;
                </p>

                <p>
                    Ibu Ermawati, M.M.Pd
                </p>

            </div>

        </div>


        <div
            class="
                flex
                flex-col
                items-center
            "
        >

            <h3
                class="
                    font-display-lg
                    text-[28px]
                    text-primary
                    mb-4
                "
            >
                Arianti Fakhriana, SE
            </h3>


            <p
                class="
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    mb-4
                    italic
                "
            >
                Putri dari
            </p>


            <div
                class="
                    font-headline-md
                    text-[18px]
                    text-on-surface
                "
            >

                <p>
                    Bapak Ir. Aguska Dwifajra
                </p>

                <p
                    class="
                        text-primary
                        my-1
                    "
                >
                    &amp;
                </p>

                <p>
                    Ibu Rina Lisa, SE.MM
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =============================================================
     EVENTS
============================================================= --}}

<section
    class="
        py-20
        px-12
        bg-surface-container-low
        border-y
        border-primary/20
    "
>

    <h2
        class="
            font-display-lg
            text-headline-lg
            text-primary-container
            text-center
            mb-16
        "
    >
        Rangkaian Acara
    </h2>



    {{-- COUNTDOWN --}}

    <div
        class="
            max-w-xl
            mx-auto
            mb-16
            px-4
        "
    >

        <div
            class="
                text-center
                mb-6
            "
        >

            <p
                class="
                    font-label-md
                    text-label-md
                    text-secondary
                    tracking-[0.2em]
                    uppercase
                "
            >
                Menghitung Hari Bahagia
            </p>

        </div>


        <div
            class="
                grid
                grid-cols-4
                gap-3
                sm:gap-6
                text-center
            "
        >

            <div
                class="
                    ornate-border
                    bg-surface-container-lowest
                    py-5
                    px-2
                    rounded-lg
                    shadow-sm
                    flex
                    flex-col
                    items-center
                    justify-center
                "
            >

                <span
                    id="countdown-days"
                    class="
                        font-display-lg
                        text-[32px]
                        sm:text-[40px]
                        font-bold
                        text-primary-container
                        leading-none
                    "
                >
                    00
                </span>

                <span
                    class="
                        font-label-md
                        text-[11px]
                        sm:text-[13px]
                        text-on-surface-variant
                        uppercase
                        tracking-widest
                        mt-2
                    "
                >
                    Hari
                </span>

            </div>


            <div
                class="
                    ornate-border
                    bg-surface-container-lowest
                    py-5
                    px-2
                    rounded-lg
                    shadow-sm
                    flex
                    flex-col
                    items-center
                    justify-center
                "
            >

                <span
                    id="countdown-hours"
                    class="
                        font-display-lg
                        text-[32px]
                        sm:text-[40px]
                        font-bold
                        text-primary-container
                        leading-none
                    "
                >
                    00
                </span>

                <span
                    class="
                        font-label-md
                        text-[11px]
                        sm:text-[13px]
                        text-on-surface-variant
                        uppercase
                        tracking-widest
                        mt-2
                    "
                >
                    Jam
                </span>

            </div>


            <div
                class="
                    ornate-border
                    bg-surface-container-lowest
                    py-5
                    px-2
                    rounded-lg
                    shadow-sm
                    flex
                    flex-col
                    items-center
                    justify-center
                "
            >

                <span
                    id="countdown-minutes"
                    class="
                        font-display-lg
                        text-[32px]
                        sm:text-[40px]
                        font-bold
                        text-primary-container
                        leading-none
                    "
                >
                    00
                </span>

                <span
                    class="
                        font-label-md
                        text-[11px]
                        sm:text-[13px]
                        text-on-surface-variant
                        uppercase
                        tracking-widest
                        mt-2
                    "
                >
                    Menit
                </span>

            </div>


            <div
                class="
                    ornate-border
                    bg-surface-container-lowest
                    py-5
                    px-2
                    rounded-lg
                    shadow-sm
                    flex
                    flex-col
                    items-center
                    justify-center
                "
            >

                <span
                    id="countdown-seconds"
                    class="
                        font-display-lg
                        text-[32px]
                        sm:text-[40px]
                        font-bold
                        text-primary-container
                        leading-none
                    "
                >
                    00
                </span>

                <span
                    class="
                        font-label-md
                        text-[11px]
                        sm:text-[13px]
                        text-on-surface-variant
                        uppercase
                        tracking-widest
                        mt-2
                    "
                >
                    Detik
                </span>

            </div>

        </div>

    </div>



    {{-- EVENT CARD --}}

    <div
        class="
            grid
            md:grid-cols-2
            gap-12
        "
    >

        {{-- AKAD --}}

        <div
            class="
                ornate-border
                bg-surface-container-lowest
                p-10
                text-center
                flex
                flex-col
                items-center
            "
        >

            <span
                class="
                    bg-primary-container
                    text-secondary-fixed
                    font-label-md
                    text-label-md
                    px-6
                    py-2
                    rounded-full
                    mb-8
                    tracking-widest
                    uppercase
                    shadow-sm
                "
            >
                Akad Nikah & RESEPSI
            </span>


            <div
                class="
                    font-display-lg
                    text-[24px]
                    text-primary
                    mb-6
                "
            >
                Rabu, 14-15 Oktober 2026
            </div>


            <div
                class="
                    flex
                    items-center
                    gap-2
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    mb-8
                "
            >

                <span
                    class="
                        material-symbols-outlined
                        text-primary-container
                    "
                >
                    schedule
                </span>

                Pukul 09.00 WIB s/d selesai

            </div>


            <div
                class="
                    w-16
                    h-[2px]
                    bg-primary/20
                    mb-8
                "
            ></div>


            <div
                class="
                    font-label-md
                    text-label-md
                    text-primary
                    mb-3
                    uppercase
                    tracking-wider
                "
            >
                Lokasi:
            </div>


            <p
                class="
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    max-w-xs
                    leading-relaxed
                "
            >
                Jl. Kartini 2 Padang Baru
                <br>
                (Belakang Bank Nagari)
                <br>
                Lubuk Basung Kab. Agam
            </p>

        </div>



        {{-- RESEPSI --}}

        <div
            class="
                ornate-border
                bg-surface-container-lowest
                p-10
                text-center
                flex
                flex-col
                items-center
            "
        >

            <span
                class="
                    bg-primary-container
                    text-secondary-fixed
                    font-label-md
                    text-label-md
                    px-6
                    py-2
                    rounded-full
                    mb-8
                    tracking-widest
                    uppercase
                    shadow-sm
                "
            >
                Resepsi
            </span>


            <div
                class="
                    font-display-lg
                    text-[24px]
                    text-primary
                    mb-6
                "
            >
                Sabtu, 17 Oktober 2026
            </div>


            <div
                class="
                    flex
                    items-center
                    gap-2
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    mb-8
                "
            >

                <span
                    class="
                        material-symbols-outlined
                        text-primary-container
                    "
                >
                    schedule
                </span>

                Pukul 10.00 WIB s/d selesai

            </div>


            <div
                class="
                    w-16
                    h-[2px]
                    bg-primary/20
                    mb-8
                "
            ></div>


            <div
                class="
                    font-label-md
                    text-label-md
                    text-primary
                    mb-3
                    uppercase
                    tracking-wider
                "
            >
                Lokasi:
            </div>


            <p
                class="
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    max-w-xs
                    leading-relaxed
                "
            >
                Jalan Lintas Manggopoh Pasaman Km 7
                Nagari Sungai Jariang
                <br>
                Lubuk Basung, Kabupaten Agam
            </p>

        </div>

    </div>

</section>



{{-- =============================================================
     LOCATION
============================================================= --}}

<section
    class="
        py-20
        px-12
    "
>

    <h2
        class="
            font-display-lg
            text-headline-lg
            text-primary-container
            text-center
            mb-16
        "
    >
        Denah Lokasi
    </h2>


    <div
        class="
            space-y-20
        "
    >

        {{-- LOCATION FAJAR --}}

        <div>

            <h3
                class="
                    font-display-lg
                    text-[28px]
                    text-primary
                    text-center
                    mb-8
                    border-b-2
                    border-primary-container/30
                    pb-4
                    inline-block
                    w-full
                    max-w-md
                    mx-auto
                "
            >
                Lokasi Resepsi (Fajar)
            </h3>


            <div
                class="
                    grid
                    md:grid-cols-3
                    gap-8
                    items-center
                    bg-surface-container-low
                    p-8
                    rounded-xl
                    border
                    border-primary/10
                "
            >

                <div
                    class="
                        md:col-span-2
                        border-2
                        border-primary/20
                        p-2
                        rounded-lg
                        bg-white
                    "
                >

                    <img
                        alt="Map to Fajar's Location"
                        class="
                            w-full
                            h-auto
                            object-contain
                            rounded
                        "
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCC8EhfhP6NKjhxGMY4hjFk_fYKJUlTJq3e67LvapLfEsmT0GiAPjef6PMRMC0-N8LChqfSkxZVu6m4pJ4-Uf6F9EIQ0k_2GYqxR0WEmOmEoWAwZZsQm0Dq-k6-8vIKNacauljoAYZC89kda5Ulexn41cibrCWjL8n87jgvQgHZ_RGgEZbgPBWZfAs9etuatqppLbW7VwRQvzkl2sjtTiwwX2Ychyrk_IxqwdO-B1oRefJCUmHSq891qzagb7cNX6NtxA"
                    >

                </div>


                <div
                    class="
                        flex
                        flex-col
                        items-center
                        justify-center
                        p-6
                        bg-white
                        rounded-lg
                        border
                        border-primary/10
                        shadow-sm
                        h-full
                    "
                >

                    <img
                        alt="QR Code for Fajar's Location GPS"
                        class="
                            w-full
                            max-w-[200px]
                            h-auto
                            object-contain
                            mb-6
                        "
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKIXqrTvlQZiOnBVMUoOdMfey9CjRYH86uub53gLACqAbHLuhKz9Y_Kgk3wvPRL7Lsjzjqmdqg88WNMkk4UjhZsbm0FFrcZ5S1FpnlgeS7Bntk2L7yHysaygCyaVFVNKHEOArEJpCu_Gu6GeMkoV9ljdxrrPAQHMW289PDZEr0IJZWGXyiMf52aUaMK_j-WTDYtPoQ26QTklFoguIv8pixI_t4TCmnM5uILPNsL3Yop6_f9eL_Sll7srk-3v6hJzFIxQ"
                    >


                    <div
                        class="
                            flex
                            items-center
                            gap-2
                            text-primary-container
                            font-label-md
                            text-label-md
                            uppercase
                            tracking-wider
                        "
                    >

                        <span
                            class="
                                material-symbols-outlined
                            "
                        >
                            qr_code_scanner
                        </span>

                        Scan untuk GPS

                    </div>

                </div>

            </div>

        </div>



        {{-- LOCATION RANTI --}}

        <div>

            <h3
                class="
                    font-display-lg
                    text-[28px]
                    text-primary
                    text-center
                    mb-8
                    border-b-2
                    border-primary-container/30
                    pb-4
                    inline-block
                    w-full
                    max-w-md
                    mx-auto
                "
            >
                Lokasi Akad (Ranti)
            </h3>


            <div
                class="
                    grid
                    md:grid-cols-3
                    gap-8
                    items-center
                    bg-surface-container-low
                    p-8
                    rounded-xl
                    border
                    border-primary/10
                "
            >

                <div
                    class="
                        md:col-span-2
                        border-2
                        border-primary/20
                        p-2
                        rounded-lg
                        bg-white
                    "
                >

                    <img
                        alt="Map to Ranti's Location"
                        class="
                            w-full
                            h-auto
                            object-contain
                            rounded
                        "
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9TAB0TTTNZ9k4PdkpO55xPLVI51kwbuH7VA3cETPZQApAUcJtuz5iUZkNlnSwPnz90SThLlFM111HNB3urCsZdB0mn3RdAQg2O6iPXrswxLAJTEWwhOtZSqgrs_Sa0zWca5AQP_S6NJz4G50eSo7H0SZEahzb_dHDYch4xIciZiRmPP2zTH44xyThKD_U4H295QgOOiUYhENEZhTxkbPwXF1OwSox0UYFc6f4LlUR3kzlb8Zgio4AnJus4YzNHwq_Iw"
                    >

                </div>


                <div
                    class="
                        flex
                        flex-col
                        items-center
                        justify-center
                        p-6
                        bg-white
                        rounded-lg
                        border
                        border-primary/10
                        shadow-sm
                        h-full
                    "
                >

                    <img
                        alt="QR Code for Ranti's Location GPS"
                        class="
                            w-full
                            max-w-[200px]
                            h-auto
                            object-contain
                            mb-6
                        "
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjfSA21pvWgkwr1m_uP6Gm8mSP4676sNLZIFsbgnb5kzUZ6ckxQc2UDWF3I6zg5RPxZgmcIK_tKhtMp11Xp7PXtrV1IdoMlYiWpjL8qCsMtrXETQ45bsJ6emtND_P38EpilUY_EP3TDSMUnF7Yypd1KKb72d2Ff-zB5Ans4LaGO8_xWNxJf7ip0mJtBghNa1oecOrCC2cIRmYL83OFy2hbxC8BNbf0qtS90jy-kxlV17Y9KOBd8Y38xc0mdDm94bf14w"
                    >


                    <div
                        class="
                            flex
                            items-center
                            gap-2
                            text-primary-container
                            font-label-md
                            text-label-md
                            uppercase
                            tracking-wider
                        "
                    >

                        <span
                            class="
                                material-symbols-outlined
                            "
                        >
                            qr_code_scanner
                        </span>

                        Scan untuk GPS

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =============================================================
     GALLERY
============================================================= --}}

<section
    class="
        py-20
        px-6
        sm:px-12
        bg-surface
        text-center
        border-t
        border-primary/20
    "
>

    <div
        class="
            max-w-3xl
            mx-auto
        "
    >

        <div
            class="
                text-center
                mb-10
            "
        >

            <span
                class="
                    font-label-md
                    text-label-md
                    text-secondary
                    tracking-[0.2em]
                    uppercase
                "
            >
                Dokumentasi & Kenangan
            </span>


            <h2
                class="
                    font-display-lg
                    text-headline-lg
                    text-primary-container
                    mt-2
                    mb-4
                "
            >
                Galeri Foto & Prewedding
            </h2>


            <div
                class="
                    flex
                    items-center
                    justify-center
                    opacity-50
                    mb-6
                "
            >

                <div
                    class="
                        h-[2px]
                        w-16
                        bg-primary
                    "
                ></div>

                <span
                    class="
                        text-primary
                        mx-4
                        text-sm
                    "
                >
                    ❖
                </span>

                <div
                    class="
                        h-[2px]
                        w-16
                        bg-primary
                    "
                ></div>

            </div>


            <p
                class="
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    italic
                    leading-relaxed
                    max-w-xl
                    mx-auto
                    mb-8
                "
            >
                Potret kenangan adat Minangkabau
                & nuansa modern yang mengabadikan
                setiap langkah menuju hari bahagia kami.
            </p>

        </div>


        <div
            class="
                ornate-border
                bg-surface-container-lowest
                p-8
                sm:p-10
                rounded-xl
                shadow-md
                flex
                flex-col
                items-center
                justify-center
                text-center
                relative
                overflow-hidden
            "
        >

            <div
                class="
                    w-16
                    h-16
                    rounded-full
                    bg-primary-container/10
                    flex
                    items-center
                    justify-center
                    mb-6
                    border
                    border-primary/20
                "
            >

                <span
                    class="
                        material-symbols-outlined
                        text-primary-container
                        text-[32px]
                    "
                >
                    photo_camera
                </span>

            </div>


            <h3
                class="
                    font-display-lg
                    text-[22px]
                    text-primary
                    mb-3
                    font-semibold
                "
            >
                Abadikan Momen Bersejarah
            </h3>


            <p
                class="
                    font-body-md
                    text-[14px]
                    text-on-surface-variant
                    max-w-md
                    mb-8
                    leading-relaxed
                "
            >
                Jelajahi koleksi dokumentasi foto
                busana tradisional Minangkabau,
                rangkaian persiapan,
                dan kebersamaan kedua mempelai.
            </p>


            <a
                href="{{ route('wedding.gallery') }}"
                class="
                    px-8
                    py-3.5
                    bg-primary-container
                    hover:bg-primary
                    text-secondary-fixed
                    font-label-md
                    text-label-md
                    rounded-full
                    border
                    border-secondary-fixed/50
                    shadow-md
                    transition
                    tracking-widest
                    uppercase
                    flex
                    items-center
                    justify-center
                    gap-3
                "
            >

                <span
                    class="
                        material-symbols-outlined
                        text-[20px]
                    "
                >
                    collections
                </span>

                <span>
                    Buka Galeri Foto
                </span>

            </a>

        </div>

    </div>

</section>



{{-- =============================================================
     RSVP
============================================================= --}}

<section
    class="
        py-20
        px-6
        sm:px-12
        bg-surface-container-low
        border-t
        border-primary/20
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
                text-center
                mb-10
            "
        >

            <span
                class="
                    font-label-md
                    text-label-md
                    text-secondary
                    tracking-[0.2em]
                    uppercase
                "
            >
                RSVP
            </span>


            <h2
                class="
                    font-display-lg
                    text-headline-lg
                    text-primary-container
                    mt-2
                    mb-4
                "
            >
                Konfirmasi Kehadiran
            </h2>


            <p
                class="
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    italic
                    leading-relaxed
                "
            >
                Merupakan suatu kehormatan dan kebahagiaan
                bagi kami apabila Bapak/Ibu/Saudara/i
                berkenan hadir dan memberikan doa restu.
            </p>

        </div>


        <div
            class="
                ornate-border
                bg-surface-container-lowest
                p-8
                sm:p-10
                rounded-xl
                shadow-md
            "
        >

            @if (session('rsvp_success'))

                <div
                    class="
                        mb-6
                        px-5
                        py-4
                        rounded-lg
                        border
                        border-secondary/40
                        bg-secondary-container/25
                        text-primary
                        font-body-md
                        text-sm
                    "
                >
                    {{ session('rsvp_success') }}
                </div>

            @endif


            @if ($errors->any())

                <div
                    class="
                        mb-6
                        px-5
                        py-4
                        rounded-lg
                        border
                        border-error/30
                        bg-error-container
                        text-on-error-container
                        text-sm
                    "
                >

                    <ul
                        class="
                            list-disc
                            pl-5
                            space-y-1
                        "
                    >

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('rsvp.store') }}"
                method="POST"
                class="space-y-6"
            >

                @csrf


                <div
                    class="
                        flex
                        flex-col
                        gap-2
                    "
                >

                    <label
                        class="
                            font-label-md
                            text-label-md
                            text-primary
                            font-semibold
                            tracking-wider
                            uppercase
                        "
                        for="rsvp-name"
                    >
                        Nama Lengkap
                    </label>


                    <input
                        name="name"
                        value="{{ old('name') }}"
                        type="text"
                        id="rsvp-name"
                        required
                        placeholder="Contoh: Bapak Ahmad & Keluarga"
                        class="
                            w-full
                            px-4
                            py-3
                            bg-surface-container-low
                            border
                            border-primary/20
                            rounded-lg
                            text-on-surface
                            font-body-md
                            focus:outline-none
                            focus:border-primary
                            focus:ring-1
                            focus:ring-primary
                        "
                    >

                </div>


                <div
                    class="
                        flex
                        flex-col
                        gap-2
                    "
                >

                    <label
                        class="
                            font-label-md
                            text-label-md
                            text-primary
                            font-semibold
                            tracking-wider
                            uppercase
                        "
                        for="rsvp-institution"
                    >
                        Instansi / Keluarga (opsional)
                    </label>


                    <input
                        name="institution"
                        value="{{ old('institution') }}"
                        type="text"
                        id="rsvp-institution"
                        placeholder="Contoh: Keluarga Besar Bukittinggi"
                        class="
                            w-full
                            px-4
                            py-3
                            bg-surface-container-low
                            border
                            border-primary/20
                            rounded-lg
                            text-on-surface
                            font-body-md
                            focus:outline-none
                            focus:border-primary
                            focus:ring-1
                            focus:ring-primary
                        "
                    >

                </div>


                <div
                    class="
                        flex
                        flex-col
                        gap-2
                    "
                >

                    <label
                        class="
                            font-label-md
                            text-label-md
                            text-primary
                            font-semibold
                            tracking-wider
                            uppercase
                        "
                    >
                        Konfirmasi Kehadiran
                    </label>


                    <div
                        class="
                            grid
                            grid-cols-1
                            sm:grid-cols-3
                            gap-3
                            pt-1
                        "
                    >

                        <label
                            class="
                                flex
                                items-center
                                justify-center
                                p-3
                                border
                                border-primary/20
                                rounded-lg
                                bg-surface
                                hover:bg-surface-container
                                cursor-pointer
                                transition
                                text-center
                            "
                        >

                            <input
                                type="radio"
                                name="attendance"
                                value="hadir"
                                {{ old('attendance', 'hadir') === 'hadir' ? 'checked' : '' }}
                                class="
                                    text-primary-container
                                    focus:ring-primary
                                    mr-2
                                "
                            >

                            <span
                                class="
                                    font-body-md
                                    text-[14px]
                                    text-on-surface
                                    font-medium
                                "
                            >
                                Hadir
                            </span>

                        </label>


                        <label
                            class="
                                flex
                                items-center
                                justify-center
                                p-3
                                border
                                border-primary/20
                                rounded-lg
                                bg-surface
                                hover:bg-surface-container
                                cursor-pointer
                                transition
                                text-center
                            "
                        >

                            <input
                                type="radio"
                                name="attendance"
                                value="tidak_hadir"
                                {{ old('attendance') === 'tidak_hadir' ? 'checked' : '' }}
                                class="
                                    text-primary-container
                                    focus:ring-primary
                                    mr-2
                                "
                            >

                            <span
                                class="
                                    font-body-md
                                    text-[14px]
                                    text-on-surface
                                    font-medium
                                "
                            >
                                Tidak Dapat Hadir
                            </span>

                        </label>


                        <label
                            class="
                                flex
                                items-center
                                justify-center
                                p-3
                                border
                                border-primary/20
                                rounded-lg
                                bg-surface
                                hover:bg-surface-container
                                cursor-pointer
                                transition
                                text-center
                            "
                        >

                            <input
                                type="radio"
                                name="attendance"
                                value="ragu"
                                {{ old('attendance') === 'ragu' ? 'checked' : '' }}
                                class="
                                    text-primary-container
                                    focus:ring-primary
                                    mr-2
                                "
                            >

                            <span
                                class="
                                    font-body-md
                                    text-[14px]
                                    text-on-surface
                                    font-medium
                                "
                            >
                                Masih Ragu
                            </span>

                        </label>

                    </div>

                </div>


                <div
                    class="
                        flex
                        flex-col
                        gap-2
                    "
                >

                    <label
                        class="
                            font-label-md
                            text-label-md
                            text-primary
                            font-semibold
                            tracking-wider
                            uppercase
                        "
                        for="rsvp-guests"
                    >
                        Jumlah Tamu
                    </label>


                    <select
                        name="guest_count"
                        id="rsvp-guests"
                        class="
                            w-full
                            px-4
                            py-3
                            bg-surface-container-low
                            border
                            border-primary/20
                            rounded-lg
                            text-on-surface
                            font-body-md
                            focus:outline-none
                            focus:border-primary
                            focus:ring-1
                            focus:ring-primary
                        "
                    >

                        @for ($i = 0; $i <= 10; $i++)

                            <option
                                value="{{ $i }}"
                                {{ (int) old('guest_count', 1) === $i ? 'selected' : '' }}
                            >
                                {{ $i }} Orang
                            </option>

                        @endfor

                    </select>

                </div>


                <div
                    class="
                        flex
                        flex-col
                        gap-2
                    "
                >

                    <label
                        class="
                            font-label-md
                            text-label-md
                            text-primary
                            font-semibold
                            tracking-wider
                            uppercase
                        "
                        for="rsvp-message"
                    >
                        Ucapan & Doa Restu
                    </label>


                    <textarea
                        name="message"
                        id="rsvp-message"
                        rows="4"
                        placeholder="Tuliskan ucapan selamat & doa restu untuk kedua mempelai..."
                        class="
                            w-full
                            px-4
                            py-3
                            bg-surface-container-low
                            border
                            border-primary/20
                            rounded-lg
                            text-on-surface
                            font-body-md
                            focus:outline-none
                            focus:border-primary
                            focus:ring-1
                            focus:ring-primary
                            resize-none
                        "
                    >{{ old('message') }}</textarea>

                </div>


                <div
                    class="
                        pt-2
                        text-center
                    "
                >

                    <button
                        type="submit"
                        class="
                            w-full
                            sm:w-auto
                            px-10
                            py-3
                            bg-primary-container
                            text-secondary-fixed
                            font-label-md
                            text-label-md
                            rounded-full
                            border
                            border-secondary-fixed/50
                            shadow-md
                            hover:bg-primary
                            transition
                            tracking-widest
                            uppercase
                            flex
                            items-center
                            justify-center
                            gap-2
                            mx-auto
                        "
                    >

                        <span
                            class="
                                material-symbols-outlined
                                text-[18px]
                            "
                        >
                            send
                        </span>

                        <span>
                            Kirim Konfirmasi Kehadiran
                        </span>

                    </button>

                </div>

            </form>

        </div>

    </div>

</section>



{{-- =============================================================
     WEDDING GIFT
============================================================= --}}

<section
    class="
        py-20
        px-6
        sm:px-12
        bg-surface
        text-center
        border-t
        border-primary/20
    "
>

    <div
        class="
            max-w-3xl
            mx-auto
        "
    >

        <div
            class="
                text-center
                mb-12
            "
        >

            <span
                class="
                    font-label-md
                    text-label-md
                    text-secondary
                    tracking-[0.2em]
                    uppercase
                "
            >
                Wedding Gift
            </span>


            <h2
                class="
                    font-display-lg
                    text-headline-lg
                    text-primary-container
                    mt-2
                    mb-4
                "
            >
                Tanda Kasih & Amplop Digital
            </h2>


            <p
                class="
                    font-body-md
                    text-body-md
                    text-on-surface-variant
                    italic
                    leading-relaxed
                    max-w-xl
                    mx-auto
                "
            >
                Doa restu Anda merupakan karunia terindah
                bagi kami. Namun jika memberi adalah
                ungkapan tanda kasih, Anda dapat memberikan
                kado secara non-tunai melalui rekening berikut:
            </p>

        </div>


        <div
            class="
                grid
                md:grid-cols-2
                gap-8
                text-left
            "
        >

            {{-- BNI --}}

            <div
                class="
                    ornate-border
                    bg-surface-container-lowest
                    p-8
                    rounded-xl
                    shadow-md
                    flex
                    flex-col
                    justify-between
                    relative
                    overflow-hidden
                "
            >

                <div
                    class="
                        flex
                        items-center
                        justify-between
                        border-b
                        border-primary/10
                        pb-4
                        mb-6
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
                                font-display-lg
                                text-[22px]
                                font-bold
                                text-primary
                                tracking-wider
                            "
                        >
                            BNI
                        </span>


                        <span
                            class="
                                text-[11px]
                                font-label-md
                                text-on-surface-variant
                                font-semibold
                                uppercase
                                tracking-widest
                                bg-surface-container-high
                                px-2
                                py-1
                                rounded
                            "
                        >
                            Bank BNI
                        </span>

                    </div>


                    <span
                        class="
                            material-symbols-outlined
                            text-secondary
                            text-2xl
                        "
                    >
                        credit_card
                    </span>

                </div>


                <div
                    class="
                        space-y-3
                        mb-6
                    "
                >

                    <div>

                        <span
                            class="
                                font-label-md
                                text-[11px]
                                text-on-surface-variant
                                uppercase
                                tracking-widest
                                block
                                mb-1
                            "
                        >
                            Nomor Rekening
                        </span>


                        <span
                            id="rekening-bni"
                            class="
                                font-headline-md
                                text-[20px]
                                font-bold
                                tracking-wider
                                text-on-surface
                            "
                        >
                            1967256253
                        </span>

                    </div>


                    <div>

                        <span
                            class="
                                font-label-md
                                text-[11px]
                                text-on-surface-variant
                                uppercase
                                tracking-widest
                                block
                                mb-1
                            "
                        >
                            Atas Nama
                        </span>


                        <span
                            class="
                                font-headline-md
                                text-[16px]
                                font-semibold
                                text-primary
                            "
                        >
                            Arianti Fakhriana
                        </span>

                    </div>

                </div>


                <button
                    type="button"
                    onclick="copyAccount('1967256253', 'BNI')"
                    class="
                        w-full
                        py-3
                        bg-surface-container-low
                        hover:bg-primary-container
                        text-primary
                        hover:text-secondary-fixed
                        border
                        border-primary/20
                        rounded-lg
                        font-label-md
                        text-[13px]
                        tracking-wider
                        uppercase
                        font-semibold
                        transition
                        flex
                        items-center
                        justify-center
                        gap-2
                        shadow-sm
                    "
                >

                    <span
                        class="
                            material-symbols-outlined
                            text-[18px]
                        "
                    >
                        content_copy
                    </span>

                    Salin No. Rekening

                </button>

            </div>



            {{-- MANDIRI --}}

            <div
                class="
                    ornate-border
                    bg-surface-container-lowest
                    p-8
                    rounded-xl
                    shadow-md
                    flex
                    flex-col
                    justify-between
                    relative
                    overflow-hidden
                "
            >

                <div
                    class="
                        flex
                        items-center
                        justify-between
                        border-b
                        border-primary/10
                        pb-4
                        mb-6
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
                                font-display-lg
                                text-[22px]
                                font-bold
                                text-[#003d79]
                                tracking-wider
                            "
                        >
                            mandiri
                        </span>


                        <span
                            class="
                                text-[11px]
                                font-label-md
                                text-on-surface-variant
                                font-semibold
                                uppercase
                                tracking-widest
                                bg-surface-container-high
                                px-2
                                py-1
                                rounded
                            "
                        >
                            Bank Mandiri
                        </span>

                    </div>


                    <span
                        class="
                            material-symbols-outlined
                            text-secondary
                            text-2xl
                        "
                    >
                        credit_card
                    </span>

                </div>


                <div
                    class="
                        space-y-3
                        mb-6
                    "
                >

                    <div>

                        <span
                            class="
                                font-label-md
                                text-[11px]
                                text-on-surface-variant
                                uppercase
                                tracking-widest
                                block
                                mb-1
                            "
                        >
                            Nomor Rekening
                        </span>


                        <span
                            id="rekening-mandiri"
                            class="
                                font-headline-md
                                text-[20px]
                                font-bold
                                tracking-wider
                                text-on-surface
                            "
                        >
                            1680002888376
                        </span>

                    </div>


                    <div>

                        <span
                            class="
                                font-label-md
                                text-[11px]
                                text-on-surface-variant
                                uppercase
                                tracking-widest
                                block
                                mb-1
                            "
                        >
                            Atas Nama
                        </span>


                        <span
                            class="
                                font-headline-md
                                text-[16px]
                                font-semibold
                                text-primary
                            "
                        >
                            Muhammad Fajar
                        </span>

                    </div>

                </div>


                <button
                    type="button"
                    onclick="copyAccount('1680002888376', 'Mandiri')"
                    class="
                        w-full
                        py-3
                        bg-surface-container-low
                        hover:bg-primary-container
                        text-primary
                        hover:text-secondary-fixed
                        border
                        border-primary/20
                        rounded-lg
                        font-label-md
                        text-[13px]
                        tracking-wider
                        uppercase
                        font-semibold
                        transition
                        flex
                        items-center
                        justify-center
                        gap-2
                        shadow-sm
                    "
                >

                    <span
                        class="
                            material-symbols-outlined
                            text-[18px]
                        "
                    >
                        content_copy
                    </span>

                    Salin No. Rekening

                </button>

            </div>

        </div>

    </div>

</section>



{{-- =============================================================
     TURUT MENGUNDANG
============================================================= --}}

<section
    class="
        py-20
        px-12
        bg-primary-container
        text-on-primary
    "
>

    <h2
        class="
            font-display-lg
            text-headline-lg
            text-secondary-fixed
            text-center
            mb-12
        "
    >
        Turut Mengundang
    </h2>


    <div
        class="
            max-w-3xl
            mx-auto
        "
    >

        <ul
            class="
                grid
                grid-cols-1
                sm:grid-cols-2
                md:grid-cols-3
                gap-y-6
                gap-x-8
                font-headline-md
                text-[16px]
                text-on-primary/90
            "
        >

            <li class="bintang-bullet">
                Dt. Marajo (Mamak Adat)
            </li>

            <li class="bintang-bullet">
                Ali Nasri (Mamak)
            </li>

            <li class="bintang-bullet">
                Islami (Mamak)
            </li>

            <li class="bintang-bullet">
                Jamal (Mamak)
            </li>

            <li class="bintang-bullet">
                Bu Ayan (Mamak)
            </li>

            <li class="bintang-bullet">
                Lifuardi (Mamak)
            </li>

            <li class="bintang-bullet">
                Alma (Ungku)
            </li>

            <li class="bintang-bullet">
                Deli Usfi (Mamak)
            </li>

            <li class="bintang-bullet">
                Dewi Adya Putri (Kakak)
            </li>

            <li class="bintang-bullet">
                Yunimar (Etek)
            </li>

            <li class="bintang-bullet">
                Yusnita (Etek)
            </li>

            <li class="bintang-bullet">
                Juki Eldi (Sumando)
            </li>

            <li class="bintang-bullet">
                Gustof Triananda (Apak)
            </li>

            <li class="bintang-bullet">
                Yunizar (Mak Wo)
            </li>

            <li class="bintang-bullet">
                Sepri Naldi (Kakak)
            </li>

            <li class="bintang-bullet">
                Yusmaksel (Kakak)
            </li>

            <li class="bintang-bullet">
                Syahrul Asril (Kakak)
            </li>

            <li class="bintang-bullet">
                Putri Nanda (Kakak)
            </li>

            <li class="bintang-bullet">
                Syarah Jelita (Adik)
            </li>

            <li class="bintang-bullet">
                Ir. Edwandi, M.M (Om)
            </li>

            <li class="bintang-bullet">
                A. Dt. Mangkuto Marajo /
                Irma Devitrianti, SE
                (Mamak Adat/Tante)
            </li>

            <li class="bintang-bullet">
                Sylvera, A.Md /
                Yusman
                (Bunda/Ayah)
            </li>

            <li class="bintang-bullet">
                Novira Rahmadini, ST
                (Adik)
            </li>

            <li class="bintang-bullet">
                Ali Mardias (alm) /
                Marni R
                (Inyiak/Iyak)
            </li>

            <li class="bintang-bullet">
                Asrul Deni Putra /
                Silvia Monalisa
                (Apak/Etek)
            </li>

            <li class="bintang-bullet">
                Amiridwan, S.Kom /
                Nurhasniati, S.Pd
                (Apak/Etek)
            </li>

            <li class="bintang-bullet">
                Asna Suryani, S.Pd /
                Hidayat, SH
                (Tante/Om)
            </li>

            <li class="bintang-bullet">
                Syamsu Anwar, A.Md /
                Reni Eka Putri, A.Md.Kep
                (Apak/Etek)
            </li>

            <li class="bintang-bullet">
                Alfian Edison, A.Md /
                Afridalti, S.Pd
                (Apak/Etek)
            </li>

            <li class="bintang-bullet">
                Alfina (Apak)
            </li>

        </ul>

    </div>

</section>



{{-- =============================================================
     HORMAT KAMI
============================================================= --}}

<section
    class="
        py-16
        text-center
        px-12
    "
>

    <h3
        class="
            font-display-lg
            text-[24px]
            text-primary
            mb-6
        "
    >
        Hormat Kami
    </h3>


    <p
        class="
            font-headline-md
            text-[20px]
            text-on-surface-variant
            italic
        "
    >
        Kel. Besar Bapak Jamal
        &amp;
        Ibu Ermawati
    </p>


    <p
        class="
            text-primary
            my-2
        "
    >
        &amp;
    </p>


    <p
        class="
            font-headline-md
            text-[20px]
            text-on-surface-variant
            italic
        "
    >
        Kel. Besar Bapak Ir. Aguska Dwifajra
        &amp;
        Ibu Rina Lisa
    </p>


    <div
        class="
            mt-12
            opacity-50
        "
    >

        <span
            class="
                text-primary
                text-2xl
            "
        >
            ❖
        </span>

    </div>

</section>


</main>



{{-- =============================================================
     COUNTDOWN SCRIPT
============================================================= --}}

<script>

(function () {

    const targetDate =
        new Date(
            '2026-10-14T09:00:00+07:00'
        ).getTime();


    function updateTimer()
    {

        const now =
            new Date().getTime();


        const diff =
            targetDate - now;


        const elDays =
            document.getElementById(
                'countdown-days'
            );

        const elHours =
            document.getElementById(
                'countdown-hours'
            );

        const elMinutes =
            document.getElementById(
                'countdown-minutes'
            );

        const elSeconds =
            document.getElementById(
                'countdown-seconds'
            );


        if (diff <= 0) {

            if (elDays) {
                elDays.innerText = '00';
            }

            if (elHours) {
                elHours.innerText = '00';
            }

            if (elMinutes) {
                elMinutes.innerText = '00';
            }

            if (elSeconds) {
                elSeconds.innerText = '00';
            }

            return;

        }


        const days =
            Math.floor(
                diff /
                (
                    1000 *
                    60 *
                    60 *
                    24
                )
            );


        const hours =
            Math.floor(
                (
                    diff %
                    (
                        1000 *
                        60 *
                        60 *
                        24
                    )
                )
                /
                (
                    1000 *
                    60 *
                    60
                )
            );


        const minutes =
            Math.floor(
                (
                    diff %
                    (
                        1000 *
                        60 *
                        60
                    )
                )
                /
                (
                    1000 *
                    60
                )
            );


        const seconds =
            Math.floor(
                (
                    diff %
                    (
                        1000 *
                        60
                    )
                )
                /
                1000
            );


        if (elDays) {

            elDays.innerText =
                String(days)
                .padStart(
                    2,
                    '0'
                );

        }


        if (elHours) {

            elHours.innerText =
                String(hours)
                .padStart(
                    2,
                    '0'
                );

        }


        if (elMinutes) {

            elMinutes.innerText =
                String(minutes)
                .padStart(
                    2,
                    '0'
                );

        }


        if (elSeconds) {

            elSeconds.innerText =
                String(seconds)
                .padStart(
                    2,
                    '0'
                );

        }

    }


    updateTimer();


    setInterval(
        updateTimer,
        1000
    );

})();



/* =========================================================
   COPY ACCOUNT
========================================================= */

function copyAccount(
    number,
    bank
)
{

    if (
        navigator.clipboard
        &&
        window.isSecureContext
    ) {

        navigator.clipboard
            .writeText(
                number
            )
            .then(
                function () {

                    alert(
                        'Nomor rekening '
                        +
                        bank
                        +
                        ' berhasil disalin!'
                    );

                }
            );

        return;

    }


    const textarea =
        document.createElement(
            'textarea'
        );


    textarea.value =
        number;


    textarea.style.position =
        'fixed';


    textarea.style.opacity =
        '0';


    document.body.appendChild(
        textarea
    );


    textarea.select();


    document.execCommand(
        'copy'
    );


    textarea.remove();


    alert(
        'Nomor rekening '
        +
        bank
        +
        ' berhasil disalin!'
    );

}

</script>



{{-- =============================================================
     FLOATING BUTTON
============================================================= --}}

<div
    style="
        position:fixed;
        right:18px;
        bottom:18px;
        z-index:1000;
        display:flex;
        gap:8px;
        flex-wrap:wrap;
        justify-content:flex-end;
    "
>

    <a
        href="{{ route('wedding.gallery') }}"
        style="
            background:#800020;
            color:#ffe088;
            border:1px solid #d4af37;
            padding:10px 14px;
            border-radius:999px;
            text-decoration:none;
            font-family:Manrope,sans-serif;
            font-size:11px;
            font-weight:700;
        "
    >
        GALERI
    </a>


    <a
        href="{{ route('admin.rsvp.index') }}"
        style="
            background:#fff8f5;
            color:#800020;
            border:1px solid rgba(128,0,32,.25);
            padding:10px 14px;
            border-radius:999px;
            text-decoration:none;
            font-family:Manrope,sans-serif;
            font-size:11px;
            font-weight:700;
        "
    >
        REKAP RSVP
    </a>

</div>


</body>

</html>
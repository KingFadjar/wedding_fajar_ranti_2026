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


</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('deskripsi', 'ISO certified, we deliver high quality construction solutions to international standards.')">
    <meta name="keywords" content="@yield('keywords', 'construction, contractor, building, renovation, infrastructure, ISO certified, Indonesia')">
    <meta name="author" content="PT. KINARYA MAESTRO NUSANTARA">
    <title>PT. Kinarya Maestro Nusantara</title>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="PT. Kinarya Maestro Nusantara">
    <meta property="og:title" content="@yield('judul', 'Maestro - Quality Construction with ISO Standards')">
    <meta property="og:description" content="@yield('deskripsi', 'ISO certified, we deliver high quality construction solutions to international standards.')">
    <meta property="og:image" content="@yield('og_image', asset('img/general/logo.webp'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('judul', 'Maestro - Quality Construction with ISO Standards')">
    <meta property="twitter:description" content="@yield('deskripsi', 'ISO certified, we deliver high quality construction solutions to international standards.')">
    <meta property="twitter:image" content="@yield('og_image', asset('img/general/logo.webp'))">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Schema.org Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('img/general/logo.webp') }}",
        "description": "{{ __('A General Contractor Company with experience in the construction sector, encompassing consultant work, construction implementation, project management, supervision and execution in the construction industry.') }}",
        "foundingDate": "2020",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID",
            "addressRegion": "Indonesia"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-856-5656-8527",
            "contactType": "customer service",
            "availableLanguage": ["Indonesian", "English"]
        },
        "sameAs": [
            "https://api.whatsapp.com/send?phone=6285656568527"
        ],
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "serviceType": "General Contractor",
        "certification": [
            "PB-umku: 122600345236200050001",
            "PB-umku: 122600345236200040001",
            "PB-umku: 122600345236200060001"
        ]
    }
    </script>

    <!-- Schema.org WebSite -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Maestro - Quality Construction with ISO Standards",
        "url": "{{ url('/') }}",
        "description": "{{ __('ISO certified, we deliver high quality construction solutions to international standards.') }}",
        "publisher": {
            "@type": "Organization",
            "name": "PT. KINARYA MAESTRO NUSANTARA"
        }
    }
    </script>

    {{-- tailwind css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:url" content="https://www.maestrokontraktor.com/">
    <meta property="og:site_name" content="PT. Kinarya Maestro Nusantara">
    <meta property="og:title" content="PT. Kinarya Maestro Nusantara">
    <meta property="og:description"
        content="PT Kinarya Maestro Nusantara adalah Perusahaan General Contractor yang berpengalaman dalam bidang konstruksi, diantaranya pekerjaan Konsultan Perencana, Pelaksana Konstruksi, Managemen Proyek, Pengawasan dan Implementasi dalam bidang konstruksi.">


    {{-- link fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-THPT9PMJ');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16632696337"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16632696337');
    </script>

    @yield('kepala')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THPT9PMJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- section navbar --}}
    <header class="font-inter">
        <nav class="bg-hitam fixed w-full z-20 top-0 start-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                    <a href="/">
                        <img src="{{ asset('img/general/logo.webp') }}" class="h-16 md:h-20" alt="Maestro Kontraktor">
                    </a>
                    <a href="https://www.instagram.com/kontraktormaestro/" target="_blank"
                        aria-label="Instagram Account">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 md:h-7" viewBox="0 0 20 20" fill="none">
                            <path
                                d="M6.50008 1.66666H13.5001C16.1667 1.66666 18.3334 3.83332 18.3334 6.49999V13.5C18.3334 14.7819 17.8242 16.0112 16.9178 16.9177C16.0113 17.8241 14.782 18.3333 13.5001 18.3333H6.50008C3.83341 18.3333 1.66675 16.1667 1.66675 13.5V6.49999C1.66675 5.21811 2.17597 3.98873 3.0824 3.08231C3.98882 2.17588 5.2182 1.66666 6.50008 1.66666ZM6.33341 3.33332C5.53777 3.33332 4.7747 3.64939 4.21209 4.212C3.64949 4.77461 3.33341 5.53767 3.33341 6.33332V13.6667C3.33341 15.325 4.67508 16.6667 6.33341 16.6667H13.6667C14.4624 16.6667 15.2255 16.3506 15.7881 15.788C16.3507 15.2254 16.6667 14.4623 16.6667 13.6667V6.33332C16.6667 4.67499 15.3251 3.33332 13.6667 3.33332H6.33341ZM14.3751 4.58332C14.6513 4.58332 14.9163 4.69307 15.1117 4.88842C15.307 5.08377 15.4167 5.34872 15.4167 5.62499C15.4167 5.90126 15.307 6.16621 15.1117 6.36156C14.9163 6.55691 14.6513 6.66666 14.3751 6.66666C14.0988 6.66666 13.8339 6.55691 13.6385 6.36156C13.4432 6.16621 13.3334 5.90126 13.3334 5.62499C13.3334 5.34872 13.4432 5.08377 13.6385 4.88842C13.8339 4.69307 14.0988 4.58332 14.3751 4.58332ZM10.0001 5.83332C11.1052 5.83332 12.165 6.27231 12.9464 7.05371C13.7278 7.83511 14.1667 8.89492 14.1667 9.99999C14.1667 11.1051 13.7278 12.1649 12.9464 12.9463C12.165 13.7277 11.1052 14.1667 10.0001 14.1667C8.89501 14.1667 7.8352 13.7277 7.0538 12.9463C6.2724 12.1649 5.83341 11.1051 5.83341 9.99999C5.83341 8.89492 6.2724 7.83511 7.0538 7.05371C7.8352 6.27231 8.89501 5.83332 10.0001 5.83332ZM10.0001 7.49999C9.33704 7.49999 8.70115 7.76338 8.23231 8.23222C7.76347 8.70106 7.50008 9.33695 7.50008 9.99999C7.50008 10.663 7.76347 11.2989 8.23231 11.7678C8.70115 12.2366 9.33704 12.5 10.0001 12.5C10.6631 12.5 11.299 12.2366 11.7678 11.7678C12.2367 11.2989 12.5001 10.663 12.5001 9.99999C12.5001 9.33695 12.2367 8.70106 11.7678 8.23222C11.299 7.76338 10.6631 7.49999 10.0001 7.49999Z"
                                fill="#C22030" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/maestro-kontraktor-a23799265/" target="_blank"
                        aria-label="Linkedin Account">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 md:h-6" viewBox="0 0 17 17" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.15787 0C0.518394 0 0 0.518395 0 1.15787V15.1546C0 15.7941 0.518395 16.3125 1.15787 16.3125H15.1546C15.7941 16.3125 16.3125 15.7941 16.3125 15.1546V1.15787C16.3125 0.518396 15.7941 0 15.1546 0H1.15787ZM3.66141 5.06587C4.44295 5.06587 5.07651 4.4323 5.07651 3.65076C5.07651 2.86921 4.44295 2.23565 3.66141 2.23565C2.87987 2.23565 2.2463 2.86921 2.2463 3.65076C2.2463 4.4323 2.87987 5.06587 3.66141 5.06587ZM6.37251 6.11167H8.7178V7.18607C8.7178 7.18607 9.35422 5.91321 11.0858 5.91321C12.6305 5.91321 13.9101 6.67416 13.9101 8.99359V13.8846H11.4797V9.58626C11.4797 8.21801 10.7493 8.06752 10.1926 8.06752C9.03745 8.06752 8.83968 9.06395 8.83968 9.76473V13.8846H6.37251V6.11167ZM4.89499 6.11168H2.42782V13.8846H4.89499V6.11168Z"
                                fill="#C22030" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@maestrokontraktor1202" target="_blank"
                        aria-label="Youtube Account">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 md:h-8" viewBox="0 0 25 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.7532 5.33457C21.6568 5.57783 22.3691 6.29022 22.6124 7.19373C23.0642 8.84439 23.0468 12.2847 23.0468 12.2847C23.0468 12.2847 23.0468 15.7076 22.6124 17.3583C22.3691 18.2618 21.6568 18.9742 20.7532 19.2175C19.1026 19.6519 12.5 19.6519 12.5 19.6519C12.5 19.6519 5.9147 19.6519 4.24667 19.2001C3.34315 18.9568 2.63076 18.2444 2.38751 17.3409C1.95312 15.7076 1.95312 12.2673 1.95312 12.2673C1.95312 12.2673 1.95312 8.84439 2.38751 7.19373C2.63076 6.29022 3.36053 5.56045 4.24667 5.3172C5.89733 4.88281 12.5 4.88281 12.5 4.88281C12.5 4.88281 19.1026 4.88281 20.7532 5.33457ZM15.888 12.1467L10.3974 15.309V8.98437L15.888 12.1467Z"
                                fill="#C22030" />
                        </svg>
                    </a>
                </div>
                <div class="flex xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse">
                    <button type="button" aria-label="translate" data-dropdown-toggle="language-dropdown-menu"
                        class="inline-flex items-center justify-center px-4 py-2 text-lg text-white rounded-lg cursor-pointer hover:bg-gray-100 hover:text-merah font-semibold">
                        @if (app()->getLocale() == 'en')
                            <img src="{{ asset('img/general/en.webp') }}" class="w-5 h-5 rounded-full me-3"
                                alt="{{ asset('img/general/en.webp') }}">
                            <p class="hidden sm:block">English (US)</p>
                        @else
                            <img src="{{ asset('img/general/id.webp') }}" class="w-5 h-5 rounded-full me-3"
                                alt="{{ asset('img/general/id.webp') }}">
                            <p class="hidden sm:block">Indonesia (ID)</p>
                        @endif
                    </button>
                    <!-- Dropdown -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                        id="language-dropdown-menu">
                        <ul class="py-2 font-medium" role="none">
                            @if (app()->getLocale() == 'en')
                                <li>
                                    <a href="{{ url('locale/id') }}"
                                        class="block px-4 py-2 text-lg text-gray-700 hover:bg-merah hover:text-white"
                                        role="menuitem">
                                        <div class="inline-flex items-center">
                                            <img src="{{ asset('img/general/id.webp') }}"
                                                class="h-3.5 w-3.5 rounded-full me-2"
                                                alt="{{ asset('img/general/id.webp') }}">
                                            Indonesia (ID)
                                        </div>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ url('locale/en') }}"
                                        class="block px-4 py-2 text-lg hover:bg-merah hover:text-white text-gray-700"
                                        role="menuitem">
                                        <div class="inline-flex items-center">
                                            <img src="{{ asset('img/general/en.webp') }}"
                                                class="h-3.5 w-3.5 rounded-full me-2"
                                                alt="{{ asset('img/general/en.webp') }}">
                                            English (US)
                                        </div>
                                    </a>
                                </li>
                            @endif



                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg xl:hidden hover:bg-transparent focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1"
                    id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 uppercase font-semibold antialiased border border-gray-100 rounded-lg bg-white xl:space-x-8 rtl:space-x-reverse xl:flex-row xl:mt-0 xl:border-0 xl:bg-transparent">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-hitam hover:underline hover:underline-offset-8 hover:decoration-2 hover:bg-merah hover:text-white xl:hover:bg-transparent xl:hover:text-merah {{ route('home') == url()->current() ? 'text-white xl:text-merah bg-merah underline underline-offset-8 decoration-2 rounded' : 'xl:text-white ' }} xl:bg-transparent xl:p-0"
                                aria-current="page">
                                {{ __('home') }}
                            </a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="py-2 px-3 w-full text-left text-hitam rounded hover:underline hover:underline-offset-8 hover:decoration-2 hover:bg-merah hover:text-white xl:hover:bg-transparent xl:hover:text-merah {{ route('about') == url()->current() || route('director') == url()->current() ? 'text-white xl:text-merah bg-merah underline underline-offset-8 decoration-2 rounded xl:bg-transparent' : 'xl:text-white' }} xl:p-0 uppercase flex items-center">
                                {{ __('about us') }}
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-abu divide-y divide-gray-100 shadow w-52">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/about"
                                            class="block px-4 py-2 font-bold hover:text-merah hover:font-bold {{ route('about') == url()->current() ? 'text-merah font-bold' : 'text-white' }}">{{ __('about maestro') }}</a>
                                    </li>
                                    <li>
                                        <a href="/director"
                                            class="block px-4 py-2 font-bold hover:text-merah hover:font-bold {{ route('director') == url()->current() ? 'text-merah font-bold' : 'text-white' }}">{{ __('board of directors') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1"
                                class="py-2 px-3 w-full text-left text-hitam rounded hover:underline hover:underline-offset-8 hover:decoration-2 hover:bg-merah hover:text-white xl:hover:bg-transparent xl:hover:text-merah {{ route('light') == url()->current() || route('heavy') == url()->current() ? 'text-white xl:text-merah bg-merah underline underline-offset-8 decoration-2 rounded xl:bg-transparent' : 'xl:text-white' }} xl:p-0 uppercase flex items-center">
                                {{ __('our service') }}
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar1"
                                class="z-10 hidden font-normal bg-abu divide-y divide-gray-100 shadow w-52">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/heavy"
                                            class="block px-4 py-2 font-bold hover:text-merah hover:font-bold {{ route('heavy') == url()->current() ? 'text-merah font-bold' : 'text-white' }}">
                                            {{ __('heavy constructions') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/light"
                                            class="block px-4 py-2 font-bold hover:text-merah hover:font-bold {{ route('light') == url()->current() ? 'text-merah font-bold' : 'text-white' }}">
                                            {{ __('light constructions') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/structural"
                                            class="block px-4 py-2 font-bold hover:text-merah hover:font-bold {{ route('structural') == url()->current() ? 'text-merah font-bold' : 'text-white' }}">
                                            @if (app()->getLocale() == 'en')
                                                structural constructions
                                            @else
                                                konstruksi struktural
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/portofolio"
                                class="block py-2 px-3 text-hitam hover:underline hover:underline-offset-8 hover:decoration-2 hover:bg-merah hover:text-white xl:hover:bg-transparent xl:hover:text-merah {{ route('portofolio') == url()->current() ? 'text-white xl:text-merah bg-merah underline underline-offset-8 decoration-2 rounded' : 'xl:text-white ' }} xl:bg-transparent xl:p-0">
                                {{ __('portfolio') }}
                            </a>
                        </li>
                        <li>
                            <a href="https://maestrokontraktor.com/artikel/" target="_blank"
                                class="block py-2 px-3 text-hitam rounded hover:underline hover:underline-offset-8 hover:decoration-2 xl:text-white hover:bg-merah hover:text-white xl:hover:bg-transparent xl:hover:text-merah xl:p-0">
                                {{ __('article') }}
                            </a>
                        </li>
                        <li>
                            <a href="/maesgazine"
                                class="block py-2 px-3 text-hitam hover:underline hover:underline-offset-8 hover:decoration-2 hover:bg-merah hover:text-white xl:hover:bg-transparent xl:hover:text-merah {{ route('maesgazine') == url()->current() ? 'text-white xl:text-merah bg-merah underline underline-offset-8 decoration-2 rounded' : 'xl:text-white ' }} xl:bg-transparent xl:p-0">
                                {{ __('maesgazine') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- end section navbar --}}
    @yield('konten')
    @include('layouts.footer')

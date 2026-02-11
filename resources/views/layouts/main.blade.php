<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="@yield('deskripsi', 'Bersertifikat ISO, kami menghadirkan solusi konstruksi berkualitas tinggi sesuai standar internasional.')">
    <title>PT. Kinarya Konstruksi</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-THPT9PMJ');</script>


    @yield('kepala')
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THPT9PMJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <header class="font-inter">
        <nav class="bg-hitam fixed w-full z-50 top-0 start-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex items-center space-x-3">
                    <a href="/"><img src="{{ asset('img/general/logo-baru.webp') }}" class="h-16 md:h-20"
                            alt="Logo"></a>
                    {{-- Social Media Icons --}}
                    <div class="flex space-x-2 border-l border-gray-700 pl-3">
                        <a href="https://www.instagram.com/kontraktormaestro/" target="_blank"
                            class="text-merah text-xl"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.linkedin.com/in/maestro-kontraktor-a23799265/" target="_blank"
                            class="text-merah text-xl"><ion-icon name="logo-linkedin"></ion-icon></a>
                        <a href="https://www.youtube.com/@maestrokontraktor1202" target="_blank"
                            class="text-merah text-xl"><ion-icon name="logo-youtube"></ion-icon></a>
                    </div>
                </div>

                <div class="flex xl:order-2 space-x-3">
                    <button data-collapse-toggle="navbar-sticky" type="button" class="xl:hidden text-white"><ion-icon
                            name="menu" style="font-size: 30px"></ion-icon></button>
                </div>

                <div id="navbar-sticky" class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1">
                    <ul
                        class="flex flex-col p-4 xl:p-0 mt-4 font-semibold uppercase xl:flex-row xl:space-x-8 xl:mt-0 xl:bg-transparent">
                        <li><a href="/" class="block py-2 text-white hover:text-merah">Beranda</a></li>

                        {{-- Dropdown About Us --}}
                        <li>
                            <button id="dropdownAbout" data-dropdown-toggle="dropAbout"
                                class="flex items-center py-2 text-white hover:text-merah uppercase">
                                Tentang Kami <ion-icon name="arrow-dropdown" class="ml-1"></ion-icon>
                            </button>
                            <div id="dropAbout" class="z-10 hidden bg-hitam border border-gray-700 shadow w-44">
                                <ul class="py-2 text-sm text-white font-bold">
                                    <li><a href="/about" class="block px-4 py-2 hover:text-merah">Tentang Maestro</a>
                                    </li>
                                    <li><a href="/director" class="block px-4 py-2 hover:text-merah">Dewan Direksi</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Dropdown Our Service --}}
                        <li>
                            <button id="dropdownService" data-dropdown-toggle="dropService"
                                class="flex items-center py-2 text-white hover:text-merah uppercase">
                                Layanan Kami <ion-icon name="arrow-dropdown" class="ml-1"></ion-icon>
                            </button>
                            <div id="dropService" class="z-10 hidden bg-hitam border border-gray-700 shadow w-52">
                                <ul class="py-2 text-sm text-white font-bold">
                                    <li><a href="/heavy" class="block px-4 py-2 hover:text-merah">Konstruksi Berat</a>
                                    </li>
                                    <li><a href="/light" class="block px-4 py-2 hover:text-merah">Konstruksi Ringan</a>
                                    </li>
                                    <li><a href="/structural" class="block px-4 py-2 hover:text-merah">Konstruksi
                                            Struktural</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="/portofolio" class="block py-2 text-white hover:text-merah">Portofolio</a></li>
                        <li><a href="https://maestrokontraktor.com/artikel/" target="_blank"
                                class="block py-2 text-white hover:text-merah">Artikel</a></li>
                        <li><a href="/maesgazine" class="block py-2 text-white hover:text-merah">Maesgazine</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('konten')

    @include('layouts.footer')

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>
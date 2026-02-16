@extends('layouts.main')
@section('judul', 'PT. Maestro Kontraktor')

@section('kepala')
    <style>
        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .bouncing-ball-custom {
            animation: bounce 3s infinite ease-in-out;
        }

        .bouncing-cube-custom {
            animation: bounce 4s infinite ease-in-out;
        }

        #tranding {
            padding: 4rem 0;
        }

        @media (max-width:1440px) {
            #tranding {
                padding: 0rem 0;
            }
        }

        #tranding .tranding-slider {
            height: auto;
            padding: 2rem 0;
            position: relative;
        }

        @media (max-width:500px) {
            #tranding .tranding-slider {
                height: auto;
            }


        }



        .tranding-slide {
            width: 40rem;
            height: 15rem;
            position: relative;
        }



        @media (max-width:500px) {
            .tranding-slide {
                width: 90% !important;
                height: auto !important;
            }

            .tranding-slide .tranding-slide-img img {
                width: auto !important;
                height: auto !important;
            }
        }

        .tranding-slide .tranding-slide-img img {
            width: 40rem;
            height: 15rem;
            object-fit: cover;
        }
    </style>
    @include('components.schema-org')
    @include('components.schema-testimonial')
    @include('components.schema-portfolio')
@endsection

@section('konten')
    {{-- SECTION BANNER --}}
    <div class="relative swiper mySwiper">
        <div class="swiper-wrapper">
            @forelse ($banner as $b)
                <div class="swiper-slide">
                    <div class="h-[50vh] lg:h-[80vh] xl:h-screen min-[1800px]:h-[80vh] mt-20">
                        <img src="{{ $b->getFirstMediaUrl('banner') ?: asset('img/general/bg-banner.webp') }}"
                            class="object-cover w-full h-full" alt="banner">
                    </div>
                </div>
            @empty
                <div class="swiper-slide">
                    <div class="h-[50vh] lg:h-[80vh] mt-20">
                        <img src="{{ asset('img/general/bg-banner.webp') }}" class="object-cover w-full h-full" alt="">
                    </div>
                </div>
            @endforelse
        </div>

        <div
            class="absolute top-0 z-10 pt-32 pl-10 w-full h-full bg-gradient-to-r to-transparent from-hitam sm:pt-20 2xl:pt-32 font-inter">
            <div class="absolute sm:mt-20 lg:ml-32 min-[1800px]:ml-72">
                <div
                    class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#272757_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold uppercase">
                    Konstruksi
                </div>
                <div
                    class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#272757_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold uppercase -mt-3">
                    Berkualitas
                </div>
                <div
                    class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#272757_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold uppercase -mt-3">
                    dengan
                </div>
                <div
                    class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#272757_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold uppercase -mt-3">
                    Standar ISO
                </div>
                <div class="mt-2 font-extralight text-white capitalize sm:text-2xl">
                    Tersertifikasi ISO, Kami menghadirkan solusi konstruksi <br> berkualitas tinggi dengan standar
                    internasional.
                </div>

                <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                    class="inline-block overflow-hidden relative justify-start items-center px-5 py-3 mt-5 font-bold rounded-full group">
                    <span
                        class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                    <span
                        class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                    <span
                        class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Konsultasi
                        Sekarang</span>
                    <span class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                </a>
            </div>
        </div>
    </div>

    {{-- SECTION WELCOME --}}
    <section class="relative h-auto bg-white">
        <div class="flex absolute right-0 -top-32 sm:-top-40 2xl:-top-80">
            <div class="flex relative">
                @for ($i = 0; $i < 3; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 w-40 sm:w-52 2xl:w-80"
                        style="right: {{ $i * 12 }}rem;" viewBox="0 0 245 529" fill="none">
                        <path opacity="0.71"
                            d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                            stroke="#c22030" />
                    </svg>
                @endfor
            </div>
        </div>
        <div class="container px-6 pt-6 mx-auto lg:pl-20 lg:pt-20">
            <div class="flex flex-col lg:flex-row-reverse">
                <div class="flex relative z-10 justify-center lg:w-1/2">
                    <img src="{{ asset('img/general/welcome.webp') }}" class="lg:absolute lg:bottom-0 lg:right-0"
                        alt="welcome maestro">
                </div>
                <div class="mt-10 lg:w-1/2">
                    <div
                        class="bg-clip-text text-transparent font-league font-bold uppercase text-3xl text-center sm:text-5xl lg:text-left bg-[linear-gradient(180deg,_#C22030_42.16%,_#FFF_100%)]">
                        Selamat Datang Di
                    </div>
                    <div class="relative mt-4 lg:mt-10 mb-20 sm:mb-32 lg:mb-5">
                        {{-- Heading Container --}}
                        <div
                            class="relative z-10 flex flex-col items-center lg:items-start font-league font-bold uppercase text-3xl sm:text-[10rem] leading-[0.8] tracking-tighter">
                            {{-- Word 1 --}}
                            <!-- <div class="relative">
                                                                            <span
                                                                                class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#c22030_42%,_#272757_100%)] block py-4 px-2">
                                                                                Kinarya
                                                                            </span>
                                                                            <span class="absolute top-1 left-0 z-[-1] text-stroke opacity-20 select-none px-2 py-4">
                                                                                Kinarya
                                                                            </span>
                                                                        </div> -->
                            {{-- Word 2 --}}
                            <div class="relative">
                                <h1
                                    class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#C22030_42.16%,_#FFF_100%)] block py-4 px-2">
                                    Maestro
                                </h1>
                                <span class="absolute top-1 left-0 z-[-1] text-stroke opacity-20 select-none px-2 py-4">
                                    Maestro
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-5 text-justify capitalize font-inter text-hitam sm:text-xl lg:text-lg">
                        Menjadi Solusi Terkemuka Bagi Klien/Pelanggan Dalam Kegiatan Konstruksi Yang Dapat Bersaing Dalam
                        Ranah Kegiatan Konstruksi Berat, Konstruksi Bangunan Perumahan Dan Komersial, Aplikator Perbaikan
                        Bangunan, Desain Arsitektur Dan Pemasok Furnitur Terkenal Di Indonesia.
                    </div>
                    <div class="my-5 text-justify capitalize font-inter text-hitam sm:text-xl lg:text-lg">
                        Dengan Hasil Yang Terbaik, Kreatif, Inovatif Sehingga Setiap Pelanggan Mampu Bersaing Dalam Skala
                        Nasional Maupun Internasional Dengan Target Pencapaian Prestasi Pada Tahun 2024 Menjadi
                        Subkontraktor Pilihan Utama Dalam 7 Kontraktor Swasta Terbesar Di Indonesia.
                    </div>
                    <div class="flex mb-14">
                        <div class="px-3 py-1 text-lg font-semibold text-white uppercase bg-merah sm:text-2xl lg:text-xl">
                            SOLUSI SUPER ANDA UNTUK MEMBANGUN!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION ABOUT --}}
    <section class="bg-no-repeat bg-left bg-cover h-auto relative overflow-hidden"
        style="background-image: url('{{ asset('img/general/bg-about.webp') }}')">
        <div class="container relative p-6 mx-auto">
            <div class="absolute top-14 right-16 sm:top-20 sm:right-20 lg:right-32 bouncing-ball">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 sm:w-32 lg:w-52" viewBox="0 0 321 325" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                        fill="#c22030" />
                </svg>
            </div>
            <div class="absolute right-2 top-10 sm:right-0 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32" viewBox="0 0 181 177" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#c22030" />
                </svg>
            </div>

            <div class="relative z-10 my-10 lg:my-32">
                <h3 class="text-4xl font-bold text-center text-white uppercase font-league lg:text-7xl">
                    Tentang <br> maestro
                </h3>
                <div class="-mt-3 text-sm font-bold text-center text-white uppercase lg:text-2xl">
                    Kontraktor Umum
                </div>
                <div class="my-10"></div>
                <div class="font-extralight text-white font-inter sm:text-xl lg:px-32 lg:text-lg">
                    <h1 class="mb-5 text-xl font-bold text-center sm:text-left">
                        PT. Kinarya Maestro Nusantara
                    </h1>
                    <p class="mb-5 text-lg text-justify text-white">
                        <span class="font-bold">Kontraktor Umum</span> perusahaan dengan pengalaman di bidang <span
                            class="font-bold">sektor konstruksi</span>, meliputi <span class="font-bold">pekerjaan
                            konsultan</span>, <span class="font-bold">pelaksanaan konstruksi</span>, <span
                            class="font-bold">manajemen proyek</span>, <span class="font-bold">pengawasan dan
                            eksekusi</span> dalam industri konstruksi. Didukung oleh sumber daya manusia dengan pengalaman
                        yang luas di <span>sektor konstruksi.</span>
                    </p>
                    <p class="text-lg text-justify text-white">
                        maestro didukung oleh tenaga kerja yang kuat dengan <span class="font-bold">pengalaman
                            yang
                            signifikan</span> di sektor konstruksi, menunjukkan komitmen maestro untuk
                        menyediakan <span class="font-bold">layanan berkualitas tinggi.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION OUR SERVICE - ORIGINAL REPLICA --}}
    <section class="h-auto bg-white lg:h-screen 2xl:h-auto font-league">
        <div class="flex flex-col lg:flex-row">
            <div class="bg-hitam w-full lg:w-[30%] h-[60vh] sm:h-screen p-6 sm:py-20 text-white">
                <div class="container relative mx-auto 2xl:pl-10">
                    <div class="relative">
                        <div class="relative mt-52">
                            <div
                                class="absolute bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#272757_100%)] uppercase text-6xl sm:text-[5rem] lg:text-6xl xl:text-[5rem] top-12 sm:top-14  font-[800] left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 animate__animated animate__fadeInLeft">
                                <h2 class="">
                                    kami
                                </h2>
                            </div>
                            <div
                                class="absolute bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#272757_100%)] uppercase text-6xl sm:text-[5rem] lg:text-6xl xl:text-[5rem] top-0 font-[800] left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 animate__animated animate__fadeInLeft">
                                <h2 class="">
                                    Layanan
                                </h2>
                            </div>
                        </div>

                        <h1
                            class="text-stroke-service uppercase absolute bottom-0 sm:bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 text-6xl sm:text-[5rem] lg:text-6xl xl:text-[5rem] animate__animated animate__fadeInDown animate__delay-1s">
                            Layanan
                        </h1>
                        <h1
                            class="text-stroke-service1 uppercase absolute bottom-14 sm:bottom-16 left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 text-6xl sm:text-[5rem] lg:text-6xl xl:text-[5rem] animate__animated animate__fadeInDown animate__delay-2s">
                            Layanan
                        </h1>
                        <h1
                            class="text-stroke-service2 uppercase absolute bottom-28 sm:bottom-32 left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 text-6xl sm:text-[5rem] lg:text-6xl xl:text-[5rem] animate__animated animate__fadeInDown animate__delay-3s">
                            Layanan
                        </h1>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full lg:w-[70%] h-auto">
                <div class="container p-6 mx-auto lg:px-10 2xl:px-32 2xl:pt-20">
                    <div class="swiper swiperService">
                        <div class="swiper-wrapper">
                            {{-- Slide 1 --}}
                            <div class="swiper-slide h-full">
                                <div
                                    class="mt-5 text-lg font-medium tracking-tight leading-6 capitalize sm:text-xl font-inter animate__animated animate__fadeInRight text-hitam">
                                    Sejak awal kami berdiri, <span class="text-merah">kami telah berkomitmen</span> untuk
                                    menyediakan <span class="text-merah">layanan yang dapat diandalkan</span> untuk bisnis
                                    yang membutuhkan layanan kami. Kami dapat <span class="text-merah">mewujudkannya</span>
                                    dalam layanan berikut ini:
                                </div>
                                <div
                                    class="flex justify-center mt-10 animate__animated animate__fadeInDown animate__delay-1s">
                                    <div class="grid grid-cols-2 gap-5 lg:grid-cols-4">
                                        <div class="card h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-5.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        Bangunan Komersial</h1>
                                                    <a href="/heavy/#commercial"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Selengkapnya</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-6.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        Bangunan Rumah</h1>
                                                    <a href="/heavy/#house-building"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Selengkapnya</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-7.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        Infrastruktur</h1>
                                                    <a href="/heavy/#infrastructure"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Selengkapnya</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-8.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        Bangunan Tambahan</h1>
                                                    <a href="/heavy/#building"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Selengkapnya</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Slide 2 --}}
                            <div class="swiper-slide h-full">
                                <div
                                    class="mt-5 text-lg font-medium tracking-tight leading-6 capitalize sm:text-xl font-inter text-hitam">
                                    Raih impian Anda yang paling indah! <span class="text-merah">Membangun rumah
                                        impian</span> yang mewakili kisah hidup Anda. Mulailah perjalanan Anda hari ini.
                                </div>
                                <div class="flex justify-center mt-10">
                                    <div class="grid grid-cols-2 gap-5 lg:grid-cols-4">
                                        <div class="card h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/heavy/light-building-2.png') }}"
                                                class="object-cover w-full h-full">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        Gedung Baru</h1>
                                                    <a href="/light/#new-building"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Selengkapnya</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/heavy/renovation-1.png') }}"
                                                class="object-cover w-full h-full">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        Renovasi</h1>
                                                    <a href="/light/#renovation"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Selengkapnya</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/heavy/interior-3.webp') }}"
                                                class="object-cover w-full h-full">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        Furniture Interior</h1>
                                                    <a href="/light/#interior"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Selengkapnya</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paginat"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION PORTFOLIO - ORIGINAL REPLICA --}}
    <section class="relative pb-10 h-auto bg-hitam overflow-hidden">
        <div class="container relative mx-auto">
            <div class="absolute top-14 left-20 z-10 sm:top-20 xl:left-32 bouncing-ball">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 rotate-180 sm:w-32 xl:w-52" viewBox="0 0 321 325"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                        fill="#c22030" />
                </svg>
            </div>
            <div class="absolute left-5 top-32 z-10 lg:top-40 xl:top-52 lg:left-0 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 rotate-180 sm:w-20 xl:w-32" viewBox="0 0 181 177"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#c22030" />
                </svg>
            </div>
            <div
                class="flex absolute top-1/2 left-1/2 z-10 justify-center mt-20 text-5xl font-bold text-white uppercase transform -translate-x-1/2 -translate-y-1/2 lg:text-7xl font-inter animate__animated animate__fadeInUp">
                Portfolio
            </div>
        </div>

        <div class="swiper portfolioswiper">
            <div class="swiper-wrapper">
                @forelse ($portofolio as $p)
                    <div class="relative swiper-slide">
                        <div class="h-[90vh] lg:h-screen pl-6 lg:pl-96">
                            <img src="{{ $p->getFirstMediaUrl('portofolio') ?: asset('img/general/bg-banner.webp') }}"
                                class="object-cover w-full h-full" alt="portfolio">
                        </div>
                        <div class="absolute w-full h-full bg-gradient-to-r from-[#191919] to-transparent top-0 left-0">
                            <div class="container mx-auto">
                                <div class="text-white mt-40 min-[1800px]:mt-72 ml-3 sm:ml-20 lg:ml-0 xl:ml-40 w-full xl:w-1/2">
                                    <p
                                        class="text-2xl lg:text-5xl relative z-20 font-league uppercase font-bold text-shadow-[0_4px_8px_#1a1a3c]">
                                        {{ $p->judul }}
                                    </p>
                                    <p class="text-lg font-inter">
                                        {{ $p->alamat }}
                                    </p>
                                </div>
                            </div>
                            <div class="container mx-auto mt-10">
                                <div class="flex justify-center lg:justify-start xl:ml-40">
                                    <div class="grid grid-cols-3 gap-3">
                                        @php
                                            $collection = \Spatie\MediaLibrary\MediaCollections\Models\Media::where('model_id', $p->id)
                                                ->where('collection_name', 'another_portofolio')
                                                ->take(6)
                                                ->get();
                                        @endphp
                                        @forelse ($collection as $item)
                                            <div class="w-24 h-24 bg-white sm:w-40 sm:h-40 xl:w-52 xl:h-52">
                                                <img src="{{ $item->getUrl() }}" class="object-cover w-full h-full"
                                                    alt="Portofolio Detail">
                                            </div>
                                        @empty
                                            @for($i = 0; $i < 6; $i++)
                                                <div
                                                    class="w-24 h-24 bg-gray-800 sm:w-40 sm:h-40 xl:w-52 xl:h-52 opacity-20 border border-gray-700">
                                                </div>
                                            @endfor
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="h-screen flex items-center justify-center text-white font-bold text-2xl uppercase">
                        Belum Ada Portfolio
                    </div>
                @endforelse
            </div>
            <div class="px-6 pagiport"></div>
        </div>

        <div class="flex justify-center my-10 relative z-20">
            <a href="/portofolio"
                class="inline-block overflow-hidden relative justify-start items-center px-8 py-3 font-bold rounded-full group">
                <span
                    class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                <span
                    class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                <span
                    class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Lihat
                    Lebih Banyak</span>
                <span class="absolute inset-0 rounded-full border-2 border-tombol"></span>
            </a>
        </div>
    </section>

    {{-- SECTION ROADMAP - ORIGINAL REPLICA --}}
    <section
        class="min-h-screen bg-[url('../../public/img/general/bg-roadmap.webp')] bg-no-repeat bg-cover bg-center relative z-10 overflow-hidden">
        <div class="absolute top-14 left-20 sm:top-96 xl:left-32 bouncing-ball">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 rotate-180 sm:w-32 lg:w-52" viewBox="0 0 321 325"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                    fill="#c22030" />
            </svg>
        </div>
        <div class="absolute top-10 right-20 lg:top-10 bouncing-cube">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 rotate-180 sm:w-20 lg:w-32" viewBox="0 0 181 177"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                    fill="#c22030" />
            </svg>
        </div>
        <div class="container relative mx-auto h-32 sm:h-24 lg:h-32">
            <h1
                class="text-stroke-service uppercase absolute 2xl:right-52 text-5xl sm:text-[4rem] lg:text-[5rem] sm:left-20 lg:left-32 xl:left-64 sm:translate-x-0 top-7 lg:top-10 left-1/2 transform -translate-x-1/2 2xl:left-48 text-center font-league">
                Roadmap Bisnis
            </h1>
            <div
                class="absolute text-transparent bg-clip-text bg-white uppercase text-5xl sm:text-[4rem] lg:text-[5rem] sm:left-20 lg:left-32 xl:left-64 sm:translate-x-0 top-10 lg:top-16 left-1/2 transform -translate-x-1/2 2xl:left-96 text-center font-[800] font-league">
                <h2 class="">Roadmap Bisnis</h2>
            </div>
        </div>
        <div class="container relative p-6 mx-auto">
            <div class="text-center text-white font-inter sm:text-xl">
                Dapatkan manfaat dari layanan yang kami sediakan untuk Anda, jadilah bagian dari mitra kami.
            </div>
        </div>
        <div class="container flex relative z-10 justify-center mx-auto space-x-2 sm:p-6">
            <div class="flex flex-col sm:flex-row">
                {{-- B2C Section --}}
                <div class="p-6 lg:p-10 sm:w-96 lg:w-1/2 xl:w-[600px]">
                    <h4
                        class="text-center uppercase text-shadow-[0_4px_8px_#1a1a3c] text-white font-league font-bold text-4xl">
                        B2C
                    </h4>
                    <div class="mb-5 text-center text-white font-inter">
                        Bisnis ke Klien
                    </div>
                    <div class="w-full">
                        <div id="accordion-color" data-accordion="collapse"
                            data-active-classes="bg-merah text-white font-bold">
                            {{-- Step 1 --}}
                            <h2 id="accordion-color-heading-1">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                                    aria-controls="accordion-color-body-1">
                                    <span class="text-left text-white">1. Survei Lokasi</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">Hampir semua pekerjaan di maestro harus
                                        dimulai dengan
                                        melakukan survei agar Anda dapat menyampaikan semua detail impian bangunan Anda
                                        kepada kami sehingga kami dapat menganalisisnya dengan benar.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 2 --}}
                            <h2 id="accordion-color-heading-2">
                                <button type="button"
                                    class="flex gap-3 justify-between p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-2" aria-expanded="true"
                                    aria-controls="accordion-color-body-2">
                                    <span class="text-left text-white">2. Konsultasi Gambar dan Desain</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">Membantu Anda mendesain gambar dan desain yang
                                        ideal untuk proyek konstruksi atau renovasi Anda. Tim ahli kami akan bekerja sama
                                        dengan Anda untuk memahami kebutuhan, selera, dan visi Anda.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 3 --}}
                            <h2 id="accordion-color-heading-3">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-3" aria-expanded="true"
                                    aria-controls="accordion-color-body-3">
                                    <span class="text-left text-white">3. Pembuatan BoQ dan RAB</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">Tahap pengajuan Rencana Anggaran Biaya akan
                                        dilakukan setelah tahap konsultasi gambar selesai. Kami akan menyusun RAB yang
                                        sesuai dengan kebutuhan dan anggaran Anda.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 4 --}}
                            <h2 id="accordion-color-heading-4">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-4" aria-expanded="true"
                                    aria-controls="accordion-color-body-4">
                                    <span class="text-left text-white">4. Pelaksanaan Pekerjaan</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">Proyek konstruksi yang direncanakan dengan matang
                                        mulai dilaksanakan oleh tim kontraktor yang terampil untuk memastikan standar
                                        kualitas yang ditetapkan.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 5 --}}
                            <h2 id="accordion-color-heading-5">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-5" aria-expanded="true"
                                    aria-controls="accordion-color-body-5">
                                    <span class="text-left text-white">5. Adendum Pekerjaan</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">Adendum pekerjaan dilakukan ketika diperlukan
                                        perubahan atau penambahan untuk menanggapi perubahan kebutuhan atau kendala yang
                                        muncul.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 6 --}}
                            <h2 id="accordion-color-heading-6">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-6" aria-expanded="true"
                                    aria-controls="accordion-color-body-6">
                                    <span class="text-left text-white">6. Serah Terima Pekerjaan</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">Hasil pekerjaan diserahkan dari tim pelaksana
                                        proyek kepada pihak yang akan mengelola atau memanfaatkannya setelah semua dokumen
                                        lengkap.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                        </div>
                    </div>
                </div>

                {{-- B2B Section --}}
                <div class="p-6 lg:p-10 sm:w-96 lg:w-1/2 xl:w-[600px]">
                    <h4
                        class="text-center uppercase text-shadow-[0_4px_8px_#1a1a3c] text-white font-league font-bold text-4xl">
                        B2B
                    </h4>
                    <div class="mb-5 text-center text-white font-inter">
                        Bisnis ke Bisnis
                    </div>
                    <div class="w-full">
                        <div id="accordion-color1" data-accordion="collapse"
                            data-active-classes="bg-merah text-white font-bold">
                            {{-- Step 7 --}}
                            <h2 id="accordion-color-heading-7">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-7" aria-expanded="true"
                                    aria-controls="accordion-color-body-7">
                                    <span class="text-left text-white">1. Dapatkan Informasi Tender</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-7">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">Proses ini melibatkan pencarian dan penerimaan
                                        informasi terkait pengumuman atau permintaan penawaran dari berbagai instansi atau
                                        organisasi.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 8 --}}
                            <h2 id="accordion-color-heading-8">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-8" aria-expanded="true"
                                    aria-controls="accordion-color-body-8">
                                    <span class="text-left text-white">2. Ambil Dokumen Persyaratan & BoQ</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-8" class="hidden" aria-labelledby="accordion-color-heading-8">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">Pengambilan dokumen Persyaratan tender mencakup
                                        informasi tentang proyek, serta dokumen BoQ yang merinci kuantitas material dan
                                        jasa.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 9 --}}
                            <h2 id="accordion-color-heading-9">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-9" aria-expanded="true"
                                    aria-controls="accordion-color-body-9">
                                    <span class="text-left text-white">3. Pengumpulan File Penawaran RAB</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-9" class="hidden" aria-labelledby="accordion-color-heading-9">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">Penyusunan rincian biaya untuk semua pekerjaan,
                                        material, dan jasa agar dapat mengajukan penawaran kompetitif yang memenuhi
                                        spesifikasi proyek.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 10 --}}
                            <h2 id="accordion-color-heading-10">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-10" aria-expanded="true"
                                    aria-controls="accordion-color-body-10">
                                    <span class="text-left text-white">4. Penetapan Pemenang Tender</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-10" class="hidden" aria-labelledby="accordion-color-heading-10">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">Tahap akhir di mana penyelenggara proyek mengevaluasi
                                        semua penawaran yang diterima dan menetapkan pelaksana proyek.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 11 --}}
                            <h2 id="accordion-color-heading-11">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-11" aria-expanded="true"
                                    aria-controls="accordion-color-body-11">
                                    <span class="text-left text-white">5. Kontrak Kerja</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-11" class="hidden" aria-labelledby="accordion-color-heading-11">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">Pembuatan dokumen hukum yang mengatur hubungan, hak,
                                        dan kewajiban antara kedua belah pihak selama pelaksanaan proyek.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>

                            {{-- Step 12 --}}
                            <h2 id="accordion-color-heading-12">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-12" aria-expanded="true"
                                    aria-controls="accordion-color-body-12">
                                    <span class="text-left text-white">6. Survei & Pelaksanaan Pekerjaan</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-12" class="hidden" aria-labelledby="accordion-color-heading-12">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">Tahapan krusial yang melibatkan pemetaan dan
                                        implementasi fisik dari rencana desain yang telah disepakati.</p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                class="px-5 py-3 my-10 text-xl uppercase rounded-full border-2 duration-200 text-tombol border-tombol font-league hover:bg-tombol hover:border-0 hover:text-white">
                DAFTAR SEBAGAI KOLABORATOR
            </a>
        </div>
    </section>

    {{-- SECTION LEGALITY - ORIGINAL REPLICA --}}
    <section class="relative bg-white overflow-hidden pb-20">
        {{-- Background Shapes --}}
        <div class="flex absolute right-0 -top-32 sm:-top-40 2xl:-top-80">
            <div class="flex relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 w-40 sm:w-52 2xl:w-80"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.3"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute top-0 right-24 w-40 sm:w-52 2xl:w-80 sm:right-32 2xl:right-48" viewBox="0 0 245 529"
                    fill="none">
                    <path opacity="0.3"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute top-0 right-48 w-40 sm:w-52 2xl:w-80 sm:right-64 2xl:right-96" viewBox="0 0 245 529"
                    fill="none">
                    <path opacity="0.3"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
            </div>
        </div>

        <div class="container relative z-10 p-6 mx-auto">
            <div
                class="mt-20 text-4xl sm:text-7xl md:text-8xl font-black text-center uppercase font-inter tracking-[2px] sm:tracking-[10px] text-hitam">
                LEGALITAS
            </div>
        </div>

        <div id="tranding" class="container p-6 mx-auto lg:p-0">
            <div class="container relative">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 6; $i++)
                            @php $imgNum = (($i - 1) % 3) + 1; @endphp
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('img/general/legal-corp-' . $imgNum . '.png') }}"
                                        alt="maestro Legalitas {{ $i }}">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                {{-- Navigation --}}
                <div class="hidden absolute left-0 lg:left-10 top-1/2 -translate-y-1/2 z-30 xl:flex">
                    <div class="swiper-legal-prev cursor-pointer">
                        <div
                            class="flex justify-center items-center w-20 h-20 rounded-full bg-merah shadow-xl hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="hidden absolute right-0 lg:right-10 top-1/2 -translate-y-1/2 z-30 xl:flex">
                    <div class="swiper-legal-next cursor-pointer">
                        <div
                            class="flex justify-center items-center w-20 h-20 rounded-full bg-merah shadow-xl hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="pagilegal"></div>
            </div>
        </div>

        <div class="flex justify-center mt-20">
            <a href="/about/#legal"
                class="px-16 py-4 border-2 border-tombol text-tombol font-bold rounded-full hover:bg-tombol hover:text-white transition-all uppercase tracking-widest text-lg bg-white shadow-lg">
                SELENGKAPNYA
            </a>
        </div>
    </section>
    {{-- SECTION VIDEO - PREMIUM REDESIGN --}}
    <section class="relative py-24 bg-hitam overflow-hidden">
        {{-- Background Pattern/Graphic --}}
        <div class="absolute inset-0 opacity-10">
            <img src="{{ asset('img/general/bg-banner.webp') }}" class="w-full h-full object-cover grayscale" alt="">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-hitam via-hitam/80 to-merah/20"></div>

        <div class="container relative z-10 mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                {{-- Left: Content Info --}}
                <div class="w-full lg:w-1/3 text-center lg:text-left">
                    <div
                        class="inline-block px-4 py-1 bg-merah text-white text-sm font-bold tracking-widest uppercase mb-6 rounded-sm">
                        Karya Kami
                    </div>
                    <h2 class="text-5xl lg:text-7xl font-black text-white uppercase font-inter leading-none mb-8">
                        KARYA <br><span class="text-merah">VIDEO</span>
                    </h2>
                    <div class="w-20 h-2 lg:mx-0 mx-auto bg-merah mb-8"></div>
                    <p class="text-gray-300 text-lg lg:text-xl font-inter leading-relaxed">
                        Kami bangga mempersembahkan dokumentasi visual dari karya-karya terbaik PT. maestro dalam
                        mewujudkan impian konstruksi Anda.
                    </p>

                    {{-- Custom Navigation Below Text on Desktop --}}
                    <div class="hidden lg:flex items-center gap-4 mt-12">
                        <div class="swiper-video-prev cursor-pointer group">
                            <div
                                class="flex justify-center items-center w-14 h-14 border border-white/20 rounded-full group-hover:bg-merah group-hover:border-merah transition-all duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 8 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-video-next cursor-pointer group">
                            <div
                                class="flex justify-center items-center w-14 h-14 border border-white/20 rounded-full group-hover:bg-merah group-hover:border-merah transition-all duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 8 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Video Slider --}}
                <div class="w-full lg:w-2/3 relative">
                    <div class="swiper swipervideo rounded-2xl shadow-2xl overflow-hidden border-4 border-white/5">
                        <div class="swiper-wrapper">
                            @php
                                $videos = [
                                    'Yr8qqeh4c4A',
                                    'Ygs9KI4Ez7g',
                                    'EUok52vNg4E',
                                    'zalR4AugQQA'
                                ];
                            @endphp
                            @foreach($videos as $vid)
                                <div class="swiper-slide">
                                    <div class="relative aspect-video bg-black">
                                        <iframe class="w-full h-full"
                                            src="https://www.youtube.com/embed/{{ $vid }}?enablejsapi=1&rel=0"
                                            title="maestro Project Video" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination !bottom-4"></div>
                    </div>

                    {{-- Mobile Navigation --}}
                    <div class="flex lg:hidden justify-center items-center gap-6 mt-8">
                        <div
                            class="swiper-video-prev-mob cursor-pointer w-12 h-12 flex items-center justify-center bg-white/10 rounded-full text-white">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div
                            class="swiper-video-next-mob cursor-pointer w-12 h-12 flex items-center justify-center bg-white/10 rounded-full text-white">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- section Maesgazine --}}
    <section class="overflow-hidden relative h-auto bg-hitam">

        <div class="absolute left-0 top-52 lg:-bottom-52 lg:-left-20">
            <img src="{{ $maesgazinelast ? $maesgazinelast->getFirstMediaUrl('maesgazine') : asset('img/general/bg-banner.webp') }}"
                alt="">
        </div>
        <div class="container relative z-10 p-6 mx-auto">
            <div class="mt-10">
                <h3 class="text-5xl font-bold tracking-normal text-center text-white uppercase font-inter sm:text-6xl">
                    Maesgazine
                </h3>
            </div>
        </div>
        <div class="relative z-10 lg:container lg:mx-auto lg:px-20 lg:pt-20">
            <div class="flex flex-col gap-0 lg:flex-row">
                <a href="{{ $maesgazinelast ? $maesgazinelast->getFirstMediaUrl('pdf') : '#' }}" target="_blank">
                    <div class="container flex justify-center items-center self-center mx-auto mt-20 sm:mt-10">
                        <div class="h-80 w-60 sm:h-[90vh] sm:w-[50vh]">
                            <img src="{{ $maesgazinelast ? $maesgazinelast->getFirstMediaUrl('maesgazine') : asset('img/general/bg-banner.webp') }}"
                                class="object-contain w-full h-full" alt="majalah">
                        </div>
                    </div>
                </a>

                <div class="lg:w-full lg:flex lg:justify-center lg:items-center lg:self-center">
                    <div class="swiper swipermagazine">
                        <div class="swiper-wrapper">
                            @forelse ($maesgazine as $item)
                                @php
                                    $magazine = \Spatie\MediaLibrary\MediaCollections\Models\Media::where('model_id', $item->id)
                                        ->where('collection_name', 'maesgazine')
                                        ->get();
                                    $magazine2 = \Spatie\MediaLibrary\MediaCollections\Models\Media::where('model_id', $item->id)
                                        ->where('collection_name', 'pdf')
                                        ->get();
                                @endphp
                                @foreach ($magazine as $m)
                                    @foreach ($magazine2 as $m2)
                                        <div class="swiper-slide">
                                            <a href="{{ $m2->original_url }}" target="_blank">
                                                <div class="h-[60vh]">
                                                    <img src="{{ $m->original_url }}" class="object-contain w-full h-full"
                                                        alt="majalah">
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endforeach

                            @empty
                                {{-- Dummy Slides if DB empty --}}
                                @for($i = 1; $i <= 5; $i++)
                                    <div class="swiper-slide px-4">
                                        <div class="h-[60vh]">
                                            <img src="{{ asset('img/general/legal-' . (($i % 3) + 1) . '.webp') }}"
                                                class="object-contain w-full h-full shadow-lg" alt="majalah dummy">
                                        </div>
                                    </div>
                                @endfor
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute w-full h-full top-0 left-0"
            style="background: linear-gradient(to right, #272757 0%, transparent 100%);">
        </div>
        <div class="flex justify-center mb-20 lg:mb-10">
            <a href="/maesgazine"
                class="inline-block overflow-hidden relative justify-start items-center px-5 py-3 mt-5 font-bold rounded-full group">
                <span
                    class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                <span
                    class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                <span
                    class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">Lihat
                    Lebih Banyak</span>
                <span class="absolute inset-0 rounded-full border-2 border-tombol"></span>
            </a>
        </div>
        <h1
            class="absolute bottom-0 -right-32 text-6xl font-bold uppercase text-stroke mantul-ball font-league sm:text-8xl lg:-right-52">
            Maesgazine
        </h1>
    </section>
    {{-- end section maesgazine --}}

    {{-- section testimonial --}}
    <section class="bg-hitam h-auto py-20 relative overflow-hidden">
        <div class="container px-6 lg:px-20 mx-auto text-center lg:text-left">
            <h2 class="text-merah font-league font-bold uppercase tracking-wider text-xl mb-2">Testimoni</h2>
            <div class="text-white text-4xl sm:text-6xl font-bold font-inter uppercase tracking-tighter leading-none">
                Apa Kata <span class="text-merah">Klien</span> Kami
            </div>
        </div>

        <div class="container relative mx-auto px-6 lg:px-20 mt-10">
            <div class="swiper testi-slider">
                <div class="swiper-wrapper">
                    @forelse ($testimoni as $item)
                        <!-- Slide-start -->
                        <div class="swiper-slide testi-slide">
                            <div
                                class="relative w-full h-[650px] rounded-[2.5rem] overflow-hidden group shadow-2xl bg-gradient-to-br from-[#272757] to-[#1a1a3c] border border-white/10 p-1">
                                {{-- Inner Glow Layer --}}
                                <div class="absolute inset-0 rounded-[2.5rem] border border-white/5 pointer-events-none"></div>

                                {{-- Background Image (Subtle) --}}
                                <div class="absolute inset-x-0 top-0 h-1/2 bg-center bg-no-repeat bg-cover opacity-20"
                                    style="background-image: url('{{ $item ? $item->getFirstMediaUrl('testimonial') : asset('img/general/bg-testimonial.webp') }}')">
                                </div>
                                <div class="absolute inset-x-0 top-0 h-1/2 bg-gradient-to-b from-transparent to-[#1a1a3c]">
                                </div>

                                {{-- Quote Icon Background --}}
                                <div
                                    class="absolute top-10 right-10 text-white/5 text-[15rem] font-serif select-none pointer-events-none leading-none">
                                    &rdquo;
                                </div>

                                {{-- Content Area --}}
                                <div class="relative z-10 h-full w-full p-10 flex flex-col justify-between">
                                    {{-- Upper Half: Text --}}
                                    <div class="pt-8">
                                        <div class="w-12 h-1 bg-merah mb-8"></div>
                                        <div class="max-h-[350px] overflow-y-auto custom-scrollbar pr-4">
                                            <div
                                                class="text-white text-lg sm:text-xl font-medium font-inter leading-relaxed opacity-90 italic">
                                                &ldquo;{!! strip_tags($item->testimoni) !!}&rdquo;
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Lower Half: Profile --}}
                                    <div
                                        class="flex items-center gap-6 bg-white/5 p-6 rounded-3xl backdrop-blur-sm border border-white/5">
                                        <div class="relative flex-shrink-0">
                                            <div class="w-16 h-16 rounded-full border-2 border-merah p-1">
                                                <div class="w-full h-full rounded-full bg-center bg-no-repeat bg-cover"
                                                    style="background-image: url('{{ $item ? $item->getFirstMediaUrl('profile') : asset('img/general/bg-testimonial.webp') }}')">
                                                </div>
                                            </div>
                                            <div class="absolute -bottom-1 -right-1 bg-merah text-hitam rounded-full p-1">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 101.414 1.414L9 7.414V13a1 1 0 102 0V7.414l2.293 2.293a1 1 0 001.414-1.414z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex-grow min-w-0">
                                            <h4
                                                class="font-bold text-white text-lg font-league uppercase tracking-wider truncate mb-1">
                                                {{ $item->name }}
                                            </h4>
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="text-merah text-xs font-bold uppercase tracking-widest">{{ $item->project }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                    @empty
                    @endforelse
                </div>

                <!-- Navigation buttons moved inside for better layout or adjusted position -->
            </div>

            <!-- Navigation Custom -->
            <div class="absolute left-0 lg:left-10 top-1/2 -translate-y-1/2 z-20">
                <div class="swiper-testi-prev cursor-pointer group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white/10 backdrop-blur-md rounded-full border border-white/20 hover:bg-merah transition-all shadow-xl">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="absolute right-0 lg:right-10 top-1/2 -translate-y-1/2 z-20">
                <div class="swiper-testi-next cursor-pointer group">
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white/10 backdrop-blur-md rounded-full border border-white/20 hover:bg-merah transition-all shadow-xl">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiperTestimonial = new Swiper(".testi-slider", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-testi-next",
                    prevEl: ".swiper-testi-prev",
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    }
                }
            });
        });
    </script>
    {{-- end section testimonialial --}}
@endsection

@section('kaki')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                autoplay: { delay: 4000, disableOnInteraction: false },
                effect: 'fade'
            });

            var swiperService = new Swiper(".swiperService", {
                slidesPerView: 1,
                spaceBetween: 50,
                pagination: { el: ".paginat", clickable: true },
                autoplay: { delay: 5000, disableOnInteraction: false }
            });

            var swiperPortfolio = new Swiper(".portfolioswiper", {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                pagination: { el: ".pagiport", clickable: true },
                autoplay: { delay: 6000, disableOnInteraction: false }
            });

            var swiperLegal = new Swiper(".tranding-slider", {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                loop: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 100,
                    modifier: 2.5,
                    slideShadows: false,
                },
                pagination: { el: '.pagilegal', clickable: true },
                navigation: {
                    nextEl: '.swiper-legal-next',
                    prevEl: '.swiper-legal-prev',
                }
            });

            var swiperVideo = new Swiper(".swipervideo", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true
                },
                navigation: {
                    nextEl: ".swiper-video-next, .swiper-video-next-mob",
                    prevEl: ".swiper-video-prev, .swiper-video-prev-mob",
                },
                autoplay: { delay: 10000, disableOnInteraction: true }
            });

            var swiperMaesgazine = new Swiper(".swipermagazine", {
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                speed: 5000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1280: {
                        slidesPerView: 5,
                        spaceBetween: 40,
                    },
                },
            });
            // Swiper Testimonial is already initialized above, removing duplicate
        });
    </script>
@endsection
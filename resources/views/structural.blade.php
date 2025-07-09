@extends('layouts.main')
@section('konten')
    {{-- section banner --}}
    <section
        class="h-auto bg-[url('../../public/img/general/heavy/bg-heavy.webp')] bg-cover bg-no-repeat bg-center mt-24 overflow-hidden">
        <div class="bg-hitam/90 h-full relative">
            <div class="absolute top-14 sm:top-20 right-16 sm:right-24 lg:right-36 bouncing-ball">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 sm:w-32 lg:w-52" viewBox="0 0 321 325" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                        fill="#C22030" />
                </svg>
            </div>
            <div class="absolute top-10 right-2 sm:right-5 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32" viewBox="0 0 181 177" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#C22030" />
                </svg>
            </div>
            <div class="container mx-auto p-6 sm:p-20 2xl:p-32 relative">
                @if (app()->getLocale() == 'en')
                    <h2
                        class="text-[#ffff] font-bold uppercase text-4xl text-center sm:text-left sm:text-7xl font-inter mb-2">
                        {{ __('Structural') }}
                    </h2>
                    <h3 class="text-[#ffff] font-bold uppercase text-4xl text-center sm:text-left sm:text-7xl font-inter">
                        {{ __('Constructions') }}
                    </h3>
                @else
                    <h2
                        class="text-[#ffff] font-bold uppercase text-4xl text-center sm:text-left sm:text-7xl font-inter mb-2">
                        {{ __('Konstruksi') }}
                    </h2>
                    <h3 class="text-[#ffff] font-bold uppercase text-4xl text-center sm:text-left sm:text-7xl font-inter">
                        {{ __('Struktural') }}
                    </h3>
                @endif
            </div>
            <div class="pb-10"></div>
        </div>
    </section>
    {{-- end section banner --}}
    {{-- section commercial --}}
    <section class="h-auto bg-abu relative overflow-hidden" id="commercial">
        <div class="h-full absolute bottom-0 left-0 xl:-left-[400px] 2xl:left-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 690 431" fill="none">
                <g filter="url(#filter0_d_577_724)">
                    <path d="M-2 0H629L686 272.5L629 431H-2V0Z" fill="#C22030" />
                </g>
                <defs>
                    <filter id="filter0_d_577_724" x="-6" y="0" width="696" height="439" filterUnits="userSpaceOnUse"
                        color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="2" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_577_724" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_577_724" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="relative">
            <div class="flex absolute -top-32 sm:-top-40 2xl:-top-96 left-20">
                <div class="relative flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-0"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-24 sm:left-32 2xl:left-48" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-48 sm:left-64 2xl:left-96" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row justify-between mb-5 lg:mb-10">
            <div class="relative container mx-auto py-20 pl-6 pr-10 xl:pl-20 w-full xl:w-[65%]">
                <img src="{{ asset('img/general/frp.webp') }}" class="w-full object-cover" alt="frp">
            </div>

            <div class="w-full xl:w-1/2 relative z-[11] py-20 flex items-center">
                <div class="container mx-auto px-10 2xl:px-20 flex flex-col">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Concrete Structure Strengthening <br class="hidden 2xl:block"> using FRP (Carbon & Glass Fiber)
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            This solution is used to strengthen concrete structures that experience strength degradation or
                            damage. FRP (Fiber Reinforced Polymer) made from carbon or glass fiber is applied to increase
                            load resistance and extend the structure's lifespan without having to dismantle it.
                        </div>
                    @else
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Penguatan Struktur Beton <br> menggunakan FRP (Carbon & Glass Fiber)
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            Solusi ini digunakan untuk memperkuat struktur beton yang mengalami penurunan kekuatan atau
                            mengalami kerusakan. FRP (Fiber Reinforced Polymer) berbahan dasar karbon atau serat kaca
                            diaplikasikan untuk meningkatkan daya tahan terhadap beban dan memperpanjang usia struktur tanpa
                            harus membongkar.
                        </div>
                    @endif
                    <div class="w-full">
                        <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                            class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                            <span
                                class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-[#ffff] lg:bg-tombol opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 -mt-1 w-48 h-48 bg-[#ffff] opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 lg:bg-tombol group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-[#ffff] uppercase transition-colors duration-200 ease-in-out xl:text-tombol group-hover:text-hitam lg:group-hover:text-[#ffff]">{{ __('Consult Now') }}</span>
                            <span class="absolute inset-0 rounded-full border-2 border-[#ffff] xl:border-tombol"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex absolute -bottom-40 2xl:-bottom-80 right-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -right-32"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-24 sm:right-32 lg:right-2 2xl:right-20"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-48 sm:right-64 lg:right-32 2xl:right-72"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section commercial --}}
    {{-- section house building --}}
    <section class="h-auto bg-abu relative overflow-hidden" id="house-building">
        <div class="h-full absolute bottom-0 right-0 xl:-right-[400px] 2xl:right-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full " viewBox="0 0 688 431" fill="none">
                <path d="M688 0H57L0 272.5L57 431H688V0Z" fill="#C22030" />
            </svg>
        </div>
        <div class="relative">
            <div class="flex absolute -top-32 sm:-top-40 2xl:-top-96 right-20">
                <div class="relative flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-0"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-24 sm:right-32 2xl:right-48"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-48 sm:right-64 2xl:right-96"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row-reverse justify-between mb-5 lg:mb-10">
            <div class="relative container mx-auto py-20 pl-6 pr-10 xl:pl-20 w-full xl:w-[65%]">
                <img src="{{ asset('img/general/baja.webp') }}" class="w-full object-cover" alt="baja">
            </div>

            <div class="w-full xl:w-1/2 relative z-[11] py-20 flex items-center">
                <div class="container mx-auto px-10 2xl:px-20 flex flex-col">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Corrosion Protection for Steel & Concrete Structures
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            This service aims to prevent and stop the corrosion process on steel and concrete structural
                            elements that are often exposed to extreme weather or corrosive environments. Protection is
                            provided through special coatings and appropriate protection systems to maintain the long-term
                            strength and safety of the structure.
                        </div>
                    @else
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Perlindungan Korosi pada Struktur Baja & Beton
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            Layanan ini bertujuan untuk mencegah dan menghentikan proses korosi pada elemen struktur baja
                            dan beton yang sering terpapar cuaca ekstrem atau lingkungan korosif. Perlindungan diberikan
                            melalui pelapisan khusus dan sistem proteksi yang tepat guna menjaga kekuatan dan keamanan
                            struktur jangka panjang.
                        </div>
                    @endif
                    <div class="flex justify-end">
                        <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                            class="relative mt-5 items-center justify-start inline-block px-3 sm:px-5 py-2 overflow-hidden font-bold rounded-full group">
                            <span
                                class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-[#ffff] lg:bg-tombol opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-[#ffff] lg:bg-tombol opacity-100 group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-[#ffff] xl:text-tombol transition-colors duration-200 ease-in-out group-hover:text-hitam lg:group-hover:text-[#ffff] uppercase">{{ __('Consult Now') }}</span>
                            <span class="absolute inset-0 border-2 border-[#ffff] xl:border-tombol rounded-full"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex absolute -bottom-40 2xl:-bottom-80 left-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -left-32"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 left-24 sm:left-32 lg:left-2 2xl:left-20"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 left-48 sm:left-64 lg:left-32 2xl:left-72"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#C22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section house building --}}
    {{-- section infrastructure --}}
    <section class="h-auto bg-abu relative overflow-hidden" id="infrastructure">
        <div class="h-full absolute bottom-0 left-0 xl:-left-[400px] 2xl:left-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 690 431" fill="none">
                <g filter="url(#filter0_d_577_724)">
                    <path d="M-2 0H629L686 272.5L629 431H-2V0Z" fill="#C22030" />
                </g>
                <defs>
                    <filter id="filter0_d_577_724" x="-6" y="0" width="696" height="439"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="2" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_577_724" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_577_724" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="relative">
            <div class="flex absolute -top-32 sm:-top-40 2xl:-top-96 left-20">
                <div class="relative flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-0"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-24 sm:left-32 2xl:left-48" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-48 sm:left-64 2xl:left-96" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row justify-between mb-5 lg:mb-10">
            <div class="relative container mx-auto py-20 pl-6 pr-10 xl:pl-20 w-full xl:w-[65%]">
                <img src="{{ asset('img/general/injeksi.webp') }}" class="w-full object-cover" alt="injeksi">
            </div>

            <div class="w-full xl:w-1/2 relative z-[11] py-20 flex items-center">
                <div class="container mx-auto px-10 2xl:px-20 flex flex-col">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Concrete Crack Injection System (Epoxy & PU)
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            Cracks in concrete can lead to further damage if not addressed promptly. Injection using epoxy
                            or polyurethane (PU) materials helps fill the cracks, restore the structure's strength, and
                            prevent the entry of water or chemicals that can accelerate deterioration.
                        </div>
                    @else
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Sistem Injeksi Retak Struktur Beton (Epoxy & PU)
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            Retakan pada beton dapat menyebabkan kerusakan lebih lanjut jika tidak segera ditangani. Injeksi
                            menggunakan bahan epoxy atau polyurethane (PU) membantu mengisi retakan, memperkuat kembali
                            struktur, dan mencegah masuknya air atau zat kimia yang mempercepat kerusakan.
                        </div>
                    @endif
                    <div class="w-full">
                        <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                            class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                            <span
                                class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-[#ffff] lg:bg-tombol opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 -mt-1 w-48 h-48 bg-[#ffff] opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 lg:bg-tombol group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-[#ffff] uppercase transition-colors duration-200 ease-in-out xl:text-tombol group-hover:text-hitam lg:group-hover:text-[#ffff]">{{ __('Consult Now') }}</span>
                            <span class="absolute inset-0 rounded-full border-2 border-[#ffff] xl:border-tombol"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex absolute -bottom-40 2xl:-bottom-80 right-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -right-32"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-24 sm:right-32 lg:right-2 2xl:right-20"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-48 sm:right-64 lg:right-32 2xl:right-72"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section infrastructure --}}
    {{-- section building --}}
    <section class="h-auto bg-abu relative overflow-hidden" id="building">
        <div class="h-full absolute bottom-0 right-0 xl:-right-[400px] 2xl:right-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full " viewBox="0 0 688 431" fill="none">
                <path d="M688 0H57L0 272.5L57 431H688V0Z" fill="#C22030" />
            </svg>
        </div>
        <div class="relative">
            <div class="flex absolute -top-32 sm:-top-40 2xl:-top-96 right-20">
                <div class="relative flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-0"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-24 sm:right-32 2xl:right-48"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-48 sm:right-64 2xl:right-96"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row-reverse justify-between mb-5 lg:mb-10">
            <div class="relative container mx-auto py-20 pl-6 pr-10 xl:pl-20 w-full xl:w-[65%]">
                <img src="{{ asset('img/general/anchor.webp') }}" class="w-full object-cover" alt="anchor">
            </div>

            <div class="w-full xl:w-1/2 relative z-[11] py-20 flex items-center">
                <div class="container mx-auto px-10 2xl:px-20 flex flex-col">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Strengthening with Steel Plate and Chemical Anchor
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            This method is used to strengthen structural elements by installing steel plates that are firmly
                            anchored to the concrete using chemical anchors. It is suitable for repairing structures that
                            require increased load-bearing capacity or have experienced deformation.
                        </div>
                    @else
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Penguatan dengan Plat Baja dan Anchor Kimia
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            Metode ini digunakan untuk memperkuat elemen struktur melalui pemasangan plat baja yang diikat
                            kuat ke beton menggunakan anchor kimia. Cocok untuk memperbaiki struktur yang memerlukan
                            peningkatan daya dukung atau yang mengalami deformasi.
                        </div>
                    @endif
                    <div class="flex justify-end">
                        <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                            class="relative mt-5 items-center justify-start inline-block px-3 sm:px-5 py-2 overflow-hidden font-bold rounded-full group">
                            <span
                                class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-[#ffff] lg:bg-tombol opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-[#ffff] lg:bg-tombol opacity-100 group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-[#ffff] xl:text-tombol transition-colors duration-200 ease-in-out group-hover:text-hitam lg:group-hover:text-[#ffff] uppercase">{{ __('Consult Now') }}</span>
                            <span class="absolute inset-0 border-2 border-[#ffff] xl:border-tombol rounded-full"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex absolute -bottom-40 2xl:-bottom-80 left-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -left-32"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 left-24 sm:left-32 lg:left-2 2xl:left-20"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 left-48 sm:left-64 lg:left-32 2xl:left-72"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#C22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section building --}}
    {{-- section korosi --}}
    <section class="h-auto bg-abu relative overflow-hidden" id="infrastructure">
        <div class="h-full absolute bottom-0 left-0 xl:-left-[400px] 2xl:left-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 690 431" fill="none">
                <g filter="url(#filter0_d_577_724)">
                    <path d="M-2 0H629L686 272.5L629 431H-2V0Z" fill="#C22030" />
                </g>
                <defs>
                    <filter id="filter0_d_577_724" x="-6" y="0" width="696" height="439"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="2" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_577_724" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_577_724" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="relative">
            <div class="flex absolute -top-32 sm:-top-40 2xl:-top-96 left-20">
                <div class="relative flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-0"
                        viewBox="0 0 193 414" fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-24 sm:left-32 2xl:left-48" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-48 sm:left-64 2xl:left-96" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                            stroke="white" />
                    </svg>
                </div>
            </div>
        </div>
        {{-- <div class="flex flex-col xl:flex-row justify-between mb-5 lg:mb-10">
            <div class="relative container mx-auto py-20 pl-6 pr-10 xl:pl-20 w-full xl:w-[65%]">
                <img src="{{ asset('img/general/pelapisan.webp') }}" class="w-full object-cover" alt="pelapisan">
            </div>

            <div class="w-full xl:w-1/2 relative z-[11] py-20 flex items-center">
                <div class="container mx-auto px-10 2xl:px-20 flex flex-col">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Fireproof and Anti-Corrosion Coating System
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            Provides additional protection against fire and corrosive substances through special coatings.
                            This system is essential for industrial buildings or public facilities that have a high risk of
                            fire or exposure to aggressive chemicals.
                        </div>
                    @else
                        <div
                            class="font-inter text-center xl:text-left text-4xl font-bold text-[#ffff] mb-5 leading-normal">
                            Sistem Pelapisan Tahan Api dan Anti Korosi
                        </div>
                        <div class="text-[#ffff] text-justify 2xl:text-left font-inter font-light">
                            Memberikan perlindungan tambahan terhadap api dan zat korosif melalui pelapisan khusus. Sistem
                            ini penting untuk bangunan industri atau fasilitas publik yang memiliki risiko tinggi terhadap
                            kebakaran atau paparan bahan kimia agresif.
                        </div>
                    @endif
                    <div class="w-full">
                        <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                            class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                            <span
                                class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-[#ffff] lg:bg-tombol opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 -mt-1 w-48 h-48 bg-[#ffff] opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 lg:bg-tombol group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-[#ffff] uppercase transition-colors duration-200 ease-in-out xl:text-tombol group-hover:text-hitam lg:group-hover:text-[#ffff]">{{ __('Consult Now') }}</span>
                            <span class="absolute inset-0 rounded-full border-2 border-[#ffff] xl:border-tombol"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="flex absolute -bottom-40 2xl:-bottom-80 right-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -right-32"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-24 sm:right-32 lg:right-2 2xl:right-20"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-48 sm:right-64 lg:right-32 2xl:right-72"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section korosi --}}
    {{-- section keunggulan --}}
    <section class="h-auto bg-abu relative z-[12] overflow-hidden">
        <div class="container mx-auto p-6 z-10 relative">
            @if (App::getLocale() == 'id')
                <div class="py-10 xl:py-20">
                    <h2 class="text-[#ffff] font-inter font-bold text-3xl sm:text-4xl md:text-5xl text-center uppercase">
                        Keunggulan <br> kami
                    </h2>
                    <div class="flex flex-col items-center my-10 gap-5">
                        <div class="flex flex-col md:flex-row justify-center item-center gap-5 w-full">
                            <!-- Card 1 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="logo maestro">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        SOLUSI TEKNIS YANG <br> TERINTEGRASI DAN <br> PRESISI
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Solusi teknis menyeluruh yang mengintegrasikan teknologi modern dan data akurat
                                        untuk
                                        hasil kerja konstruksi yang efisien, presisi, dan andal.
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="logo maestro">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        MATERIAL BERSERTIFIKASI <br> INTERNASIONAL SEPERTI <br> MAPEI
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Menggunakan material bersertifikasi internasional seperti MAPEI untuk menjamin mutu,
                                        daya tahan, dan keamanan dalam setiap proyek konstruksi Anda.
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="logo maestro">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        PROSES KERJA SESUAI <br> STANDAR K3 & MUTU
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Proses kerja mengikuti standar K3 dan mutu yang ketat, menjamin hasil pekerjaan
                                        berkualitas tinggi secara konsisten.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-center item-center gap-5 w-full">
                            <!-- Card 4 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="logo maestro">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        PERALATAN MODERN DAN <br> SISTEM KONTROL MUTU <br> BERALAPIS
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Dukungan peralatan modern dan sistem kontrol mutu berlapis memastikan setiap tahapan
                                        pekerjaan selalu terjaga kualitasnya, serta hasil konstruksi yang optimal.
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="logo maestro">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        PENDEKATAN BERBASIS <br> ENGINEERING & <br> ASSESSMENT STRUKTURAL <br> MENYELURUH
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Pendekatan berbasis engineering assessment struktural menyeluruh, memastikan solusi
                                        yang
                                        tepat, aman, dan sesuai kebutuhan serta karakteristik tiap bangunan.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="py-10 xl:py-20">
                    <h2 class="text-[#ffff] font-inter font-bold text-3xl sm:text-4xl md:text-5xl text-center uppercase">
                        Our <br> Advantages
                    </h2>
                    <div class="flex flex-col items-center my-10 gap-5">
                        <div class="flex flex-col md:flex-row justify-center item-center gap-5 w-full">
                            <!-- Card 1 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="maestro logo">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        INTEGRATED AND <br> PRECISE <br> TECHNICAL SOLUTIONS
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Comprehensive technical solutions that integrate modern technology and accurate data
                                        for efficient, precise, and reliable construction results.
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="maestro logo">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        INTERNATIONALLY <br> CERTIFIED MATERIALS <br> SUCH AS MAPEI
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Using internationally certified materials such as MAPEI to ensure quality,
                                        durability, and safety in every construction project.
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="maestro logo">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        WORK PROCESSES IN <br> ACCORDANCE WITH K3 & <br> QUALITY STANDARDS
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Work processes follow strict K3 and quality standards, ensuring consistently
                                        high-quality results.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-center item-center gap-5 w-full">
                            <!-- Card 4 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="maestro logo">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        MODERN EQUIPMENT AND <br> MULTI-LAYERED <br> QUALITY CONTROL SYSTEMS
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        Support from modern equipment and multi-layered quality control systems ensures
                                        every stage of work is always maintained for optimal construction results.
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="bg-[#181818] rounded-none p-6 sm:p-8 md:max-w-xs w-full relative overflow-hidden"
                                style="box-shadow: none;">
                                <div class="absolute top-8 -right-5 mb-6">
                                    <img src="{{ asset('img/general/logocard.webp') }}" class="opacity-40"
                                        style="background-color: #181818;" alt="maestro logo">
                                    <div class="h-16"></div>
                                </div>
                                <div class="z-10 relative mt-20">
                                    <div class="font-inter font-bold text-lg leading-tight text-white mb-3 uppercase">
                                        COMPREHENSIVE <br> ENGINEERING-BASED <br> STRUCTURAL ASSESSMENT <br> APPROACH
                                    </div>
                                    <div class="font-inter text-white text-base leading-snug">
                                        A comprehensive engineering-based structural assessment approach ensures solutions
                                        that are appropriate, safe, and tailored to the needs and characteristics of each
                                        building.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        <div class="flex absolute -top-32 sm:-top-40 2xl:-top-135 left-10">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-0"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                        stroke="white" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-24 sm:left-32 2xl:left-48" viewBox="0 0 193 414"
                    fill="none">
                    <path opacity="0.71"
                        d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                        stroke="white" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute top-0 left-48 sm:left-64 2xl:left-96" viewBox="0 0 193 414"
                    fill="none">
                    <path opacity="0.71"
                        d="M59.7496 1.15089L46.7788 1.15089L46.7789 111.238L113.571 206.881L113.709 207.079L113.594 207.292L1.34961 413.609L46.3872 413.609L79.5805 413.609L191.613 198.584L59.7496 1.15089Z"
                        stroke="white" />
                </svg>
            </div>
        </div>
        <div class="flex absolute -bottom-40 2xl:-bottom-80 right-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -right-0 md:-right-12 lg:-right-32"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-24 lg:right-2 2xl:right-20" viewBox="0 0 245 529"
                    fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-48 sm:right-64 lg:right-32 2xl:right-72"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section keunggulan --}}

    {{-- section klien dan mitra --}}
    <section class="h-auto relative z-[12] overflow-hidden">
        <div class="container mx-auto p-6">
            <div class="py-10 xl:py-20">
                @if (App::getLocale() == 'id')
                    <h2 class="text-hitam font-inter font-bold text-3xl sm:text-4xl md:text-5xl text-center uppercase">
                        klien dan mitra
                    </h2>
                @else
                    <h2 class="text-hitam font-inter font-bold text-3xl sm:text-4xl md:text-5xl text-center uppercase">
                        clients and partners
                    </h2>
                @endif

                <div class="flex flex-wrap gap-4 justify-center p-0 w-full md:p-5 my-20">
                    <img src="{{ asset('img/general/logo/maybank.webp') }}" loading="lazy"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo maybank">
                    <img src="{{ asset('img/general/logo/patria.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo patria">
                    <img src="{{ asset('img/general/logo/shell.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo shell">
                    <img src="{{ asset('img/general/logo/askrindo.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo askrindo">
                    <img src="{{ asset('img/general/logo/telkomsel.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo telkomsel">
                    <img src="{{ asset('img/general/logo/olx.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo olx">
                    <img src="{{ asset('img/general/logo/djp.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo djp">
                    <img src="{{ asset('img/general/logo/prima.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo prima">
                    <img src="{{ asset('img/general/logo/PROPERTY.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo telkom property">
                    <img src="{{ asset('img/general/logo/pln.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy" alt="logo pln">
                    <img src="{{ asset('img/general/logo/Shoetown.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo Shoetown">
                    <img src="{{ asset('img/general/logo/sinar.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo sinar">
                    <img src="{{ asset('img/general/logo/bpjs.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo bpjs">
                    <img src="{{ asset('img/general/logo/roki.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo roki">
                    <img src="{{ asset('img/general/logo/superindo.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo superindo">
                    <img src="{{ asset('img/general/logo/telkom.webp') }}"
                        class="w-[30%] lg:w-[18%] 2xl:w-[20%] aspect-video object-contain" loading="lazy"
                        alt="logo Logo-telkom">
                </div>
            </div>
        </div>
        <div class="flex absolute right-20 -top-32 sm:-top-40 2xl:-top-96">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 w-40 sm:w-52 2xl:w-80"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute top-0 right-24 w-40 sm:w-52 2xl:w-80 sm:right-32 2xl:right-48" viewBox="0 0 245 529"
                    fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute top-0 right-48 w-40 sm:w-52 2xl:w-80 sm:right-64 2xl:right-96" viewBox="0 0 245 529"
                    fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#C22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section klien dan mitra --}}
    {{-- section commitment --}}
    <section class="h-auto relative z-[12] overflow-hidden">
        <div class="flex flex-col xl:flex-row">
            <div class="w-1/2 relative z-[12] hidden xl:block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 1597 1229" fill="none">
                    <path d="M1443.49 0.544922H0.0917969V1228.64H1443.49L1596.18 458.968L1443.49 0.544922Z"
                        fill="#C22030" />
                </svg>
                <div class="absolute top-0 left-0 z-[13] lg:p-10 2xl:p-20">
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#C22030_100%)] text-4xl sm:text-6xl lg:text-5xl 2xl:text-7xl font-bold font-inter uppercase">
                        {{ __('Our') }}
                    </div>
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#C22030_100%)] text-4xl sm:text-6xl lg:text-5xl 2xl:text-7xl font-bold font-inter uppercase -mt-3">
                        {{ __('Commitment') }}
                    </div>
                    <ul class="list-inside space-y-5 mt-10">
                        <li
                            class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('FREE CONSULT - ADJUSTED TO COSTUMER NEEDS AND WANTS') }}
                        </li>
                        <li
                            class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('FREE DESIGN FOR DESIGN AND BUILD PROJECT') }}
                        </li>
                        <li
                            class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('COMPLETE OUTPUT (RAB,DESIGN, SHOP DRAWING, AS BULDING  DRAWING 3D DRAWING, STRUCTURE AND MEP ANALYSIS REPORT)') }}
                        </li>
                        <li
                            class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('PERIODIC PROGRESS REPORTS TO CLIENTS') }}
                        </li>
                        <li
                            class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('PROJECT GUARANTEE SERVICE WITH FAST RESPOND AND  COORDINATIVE') }}
                        </li>
                        <li
                            class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('IMPLEMENTATION ACCORDING TO DESIGN') }}
                        </li>
                    </ul>
                </div>
            </div>
            {{-- mobile version --}}
            <div class="block xl:hidden">
                <div class="bg-merah w-full h-auto relative py-10">
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#C22030_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase text-center">
                        {{ __('Our') }}
                    </div>
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#C22030_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3 text-center">
                        {{ __('Commitment') }}
                    </div>
                    <ul class="list-inside space-y-5 mt-10 px-6 mb-5">
                        <li class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-1 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 sm:w-6" viewBox="0 0 21 16"
                                fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('FREE CONSULT - ADJUSTED TO COSTUMER NEEDS AND WANTS') }}
                        </li>
                        <li class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('FREE DESIGN FOR DESIGN AND BUILD PROJECT') }}
                        </li>
                        <li class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 sm:w-8 lg:w-6" viewBox="0 0 21 16"
                                fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('COMPLETE OUTPUT (RAB,DESIGN, SHOP DRAWING, AS BULDING  DRAWING 3D DRAWING, STRUCTURE AND MEP ANALYSIS REPORT)') }}
                        </li>
                        <li class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('PERIODIC PROGRESS REPORTS TO CLIENTS') }}
                        </li>
                        <li class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 sm:w-6" viewBox="0 0 21 16"
                                fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('PROJECT GUARANTEE SERVICE WITH FAST RESPOND AND  COORDINATIVE') }}
                        </li>
                        <li class="capitalize font-inter text-[#ffff] font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            {{ __('IMPLEMENTATION ACCORDING TO DESIGN') }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block xl:hidden">
                <div class="bg-[#ffff] h-auto relative">
                    <div class="w-full relative">
                        <img src="{{ asset('img/general/heavy/bg-commitment.webp') }}"
                            class="w-full h-full object-contain" alt="commitment">
                        <div class="bg-gradient-to-t from-[#ffff]/100 to-transparent w-full h-full absolute bottom-0">
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <a href="#" class="relative inline-block px-5 py-3 font-medium group rounded-full">
                                    <span
                                        class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-abu group-hover:-translate-x-0 group-hover:-translate-y-0 rounded-full"></span>
                                    <span
                                        class="absolute inset-0 w-full h-full bg-tombol border-2 border-tombol group-hover:border-abu group-hover:bg-abu rounded-full"></span>
                                    <span
                                        class="relative text-[#ffff] group-hover:text-[#ffff] uppercase font-league font-bold">{{ __('Consult Now') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end mobile version --}}
            <div class="w-3/5 absolute top-0 right-0 hidden xl:block">
                <div class="w-full h-full relative">
                    <img src="{{ asset('img/general/heavy/bg-commitment.webp') }}" class="w-full h-full object-contain"
                        alt="commitment">
                    <div class="bg-gradient-to-t from-[#ffff]/100 to-transparent w-full h-full absolute bottom-0">
                        <div class="absolute bottom-0 2xl:bottom-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                                class="relative inline-block px-20 py-3 font-medium group rounded-full">
                                <span
                                    class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-abu group-hover:-translate-x-0 group-hover:-translate-y-0 rounded-full"></span>
                                <span
                                    class="absolute inset-0 w-full h-full bg-tombol border-2 border-tombol group-hover:border-abu group-hover:bg-abu rounded-full"></span>
                                <span
                                    class="relative text-[#ffff] group-hover:text-[#ffff] uppercase font-league font-bold">{{ __('Consult Now') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- end section commitment --}}
@endsection

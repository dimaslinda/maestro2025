@extends('layouts.main')

@section('kepala')
    @include('components.schema-services')
@endsection
@section('konten')
    {{-- section banner --}}
    <section class="h-auto bg-[url('../../public/img/general/heavy/bg-heavy.webp')] bg-cover bg-no-repeat bg-center mt-24">
        <div class="bg-hitam/90 h-full relative">
            <div class="absolute top-14 sm:top-20 right-16 sm:right-24 lg:right-36 bouncing-ball">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 sm:w-32 lg:w-52" viewBox="0 0 321 325" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                        fill="#c22030" />
                </svg>
            </div>
            <div class="absolute top-10 right-2 sm:right-5 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32" viewBox="0 0 181 177" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#c22030" />
                </svg>
            </div>
            <div class="container mx-auto p-6 sm:p-20 2xl:p-32 relative">
                <h2 class="text-white font-bold uppercase text-4xl text-center sm:text-left sm:text-7xl font-inter mb-2">
                    Konstruksi
                </h2>
                <h3 class="text-white font-bold uppercase text-4xl text-center sm:text-left sm:text-7xl font-inter">
                    Ringan
                </h3>
            </div>
            <div class="pb-10"></div>
        </div>
    </section>
    {{-- end section banner --}}

    {{-- section new building --}}
    <section class="h-auto bg-hitam relative overflow-hidden" id="new-building">
        <div class="h-full absolute bottom-0 left-0 xl:-left-[400px] 2xl:left-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 690 431" fill="none">
                <g filter="url(#filter0_d_577_724)">
                    <path d="M-2 0H629L686 272.5L629 431H-2V0Z" fill="#c22030" />
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
            <div class="relative container mx-auto py-20 xl:py-60 pl-6 pr-6 xl:pl-20 w-full xl:w-[65%]">
                <div class="slider">
                    <div class="slide-track space-x-2 lg:space-x-5">
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-2.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-2.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-2.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-2.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/light-building-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full 2xl:w-1/2 relative z-[11]">
                <div class="container mx-auto pt-0 pr-6 pl-6 xl:pt-56 2xl:pr-32 xl:pl-5">
                    <div class="font-inter text-center 2xl:text-left text-4xl font-bold text-white mb-5">
                        Gedung Baru
                    </div>
                    <div class="text-white text-justify 2xl:text-left font-inter font-light">
                        Masuki dunia hunian visioner dengan desain rumah impian kami, yang memadukan estetika kontemporer
                        dan keberlanjutan secara mulus! Gedung Baru hadir lebih dari sekadar landmark visual; ini adalah
                        manifestasi dari komitmen teguh kami terhadap lingkungan. Bergabunglah dengan kami dalam menciptakan
                        ruang harmonis di mana kemewahan bertemu dengan kehidupan yang sadar lingkungan.
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                        class="relative mt-5 items-center justify-start inline-block px-3 sm:px-5 py-2 overflow-hidden font-bold rounded-full group">
                        <span
                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white lg:bg-tombol opacity-[3%]"></span>
                        <span
                            class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white lg:bg-tombol opacity-100 group-hover:-translate-x-8"></span>
                        <span
                            class="relative w-full text-left text-white lg:text-tombol transition-colors duration-200 ease-in-out group-hover:text-hitam lg:group-hover:text-white uppercase">Konsultasi
                            Sekarang</span>
                        <span class="absolute inset-0 border-2 border-white lg:border-tombol rounded-full"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex absolute -bottom-40 2xl:-bottom-80 right-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -right-32"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-24 sm:right-32 lg:right-2 2xl:right-20"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-48 sm:right-64 lg:right-32 2xl:right-72"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section new building --}}

    {{-- section renovation --}}
    <section class="h-auto bg-hitam relative overflow-hidden" id="renovation">
        <div class="h-full absolute bottom-0 right-0 xl:-right-[400px] 2xl:right-0 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full " viewBox="0 0 688 431" fill="none">
                <path d="M688 0H57L0 272.5L57 431H688V0Z" fill="#c22030" />
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
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-24 sm:right-32 2xl:right-48" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-48 sm:right-64 2xl:right-96" viewBox="0 0 193 414"
                        fill="none">
                        <path opacity="0.71"
                            d="M132.785 1.15089L145.755 1.15089L145.755 111.238L78.963 206.881L78.8251 207.079L78.9403 207.292L191.185 413.609L146.147 413.609L112.954 413.609L0.920881 198.584L132.785 1.15089Z"
                            stroke="white" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row-reverse justify-between mb-5 lg:mb-10">
            <div class="relative container mx-auto py-20 xl:py-60 pl-6 pr-20 xl:pl-0 w-full xl:w-[65%]">
                <div class="slider2">
                    <div class="slide-track space-x-2 lg:space-x-5">
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-1.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-1.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-1.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-1.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/renovation-1.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full 2xl:w-1/2 relative z-[11]">
                <div class="container mx-auto pt-0 pr-6 pl-6 xl:pt-56 2xl:pr-10 xl:pl-20">
                    <div class="font-inter text-center 2xl:text-left text-4xl font-bold text-white mb-5">
                        Renovasi
                    </div>
                    <div class="text-white text-justify 2xl:text-left font-inter font-light">
                        Raih transformasi luar biasa untuk ruang impian Anda melalui layanan renovasi kami! Dengan sentuhan
                        ahli, ciptakan nuansa baru yang memikat sekaligus fungsional. Mulailah perjalanan menuju rumah yang
                        diperbarui dan sesuai dengan gaya hidup Anda hari ini.
                    </div>
                    <div class="flex justify-end">
                        <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                            class="relative mt-5 items-center justify-start inline-block px-3 sm:px-5 py-2 overflow-hidden font-bold rounded-full group">
                            <span
                                class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white lg:bg-tombol opacity-[3%]"></span>
                            <span
                                class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white lg:bg-tombol opacity-100 group-hover:-translate-x-8"></span>
                            <span
                                class="relative w-full text-left text-white lg:text-tombol transition-colors duration-200 ease-in-out group-hover:text-hitam lg:group-hover:text-white uppercase">Konsultasi
                                Sekarang</span>
                            <span class="absolute inset-0 border-2 border-white lg:border-tombol rounded-full"></span>
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
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 left-24 sm:left-32 lg:left-2 2xl:left-20"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 left-48 sm:left-64 lg:left-32 2xl:left-72"
                    viewBox="0 0 193 414" fill="none">
                    <path opacity="0.71"
                        d="M60.2154 1.15088H47.2447V111.238L114.037 206.881L114.175 207.079L114.06 207.292L1.81542 413.609H46.853H80.0463L192.079 198.584L60.2154 1.15088Z"
                        stroke="#c22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section renovation --}}
    {{-- section interior --}}
    <section class="h-auto bg-hitam relative overflow-hidden" id="interior">
        <div class="h-full absolute bottom-0 left-0 xl:-left-[400px] 2xl:left-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 690 431" fill="none">
                <g filter="url(#filter0_d_577_724)">
                    <path d="M-2 0H629L686 272.5L629 431H-2V0Z" fill="#c22030" />
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
            <div class="relative container mx-auto py-20 xl:py-60 pl-6 pr-6 xl:pl-20 w-full xl:w-[65%]">
                <div class="slider">
                    <div class="slide-track space-x-2 lg:space-x-5">
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-4.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-5.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-4.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-5.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-4.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-5.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-1.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-2.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-3.webp') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-4.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-60 w-96">
                                <img src="{{ asset('img/general/heavy/interior-5.png') }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-full 2xl:w-1/2 relative z-[11]">
                <div class="container mx-auto pt-0 pr-6 pl-6 xl:pt-56 2xl:pr-32 xl:pl-5">
                    <div class="font-inter text-center 2xl:text-left text-4xl font-bold text-white mb-5">
                        Furnitur Interior
                    </div>
                    <div class="text-white text-justify 2xl:text-left font-inter font-light">
                        Ubah ruang tamu Anda dengan Furnitur Interior kami, di mana keanggunan desain bertemu dengan
                        kenyamanan fungsional secara mulus! Rasakan perpaduan sempurna yang menciptakan lingkungan yang
                        menakjubkan dan fungsional. Tingkatkan rumah Anda dengan koleksi furnitur eksklusif kami.
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                        class="relative mt-5 items-center justify-start inline-block px-3 sm:px-5 py-2 overflow-hidden font-bold rounded-full group">
                        <span
                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white lg:bg-tombol opacity-[3%]"></span>
                        <span
                            class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white lg:bg-tombol opacity-100 group-hover:-translate-x-8"></span>
                        <span
                            class="relative w-full text-left text-white lg:text-tombol transition-colors duration-200 ease-in-out group-hover:text-hitam lg:group-hover:text-white uppercase">Konsultasi
                            Sekarang</span>
                        <span class="absolute inset-0 border-2 border-white lg:border-tombol rounded-full"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex absolute -bottom-40 2xl:-bottom-80 right-0">
            <div class="relative flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 -right-32"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-24 sm:right-32 lg:right-2 2xl:right-20"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-40 sm:w-52 2xl:w-80 absolute bottom-0 right-48 sm:right-64 lg:right-32 2xl:right-72"
                    viewBox="0 0 245 529" fill="none">
                    <path opacity="0.71"
                        d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                        stroke="#c22030" />
                </svg>
            </div>
        </div>
    </section>
    {{-- end section interior --}}

    {{-- section benefit --}}
    <section
        class="h-auto bg-[url('../../public/img/general/bg-benefit.webp')] bg-no-repeat bg-cover bg-center overflow-hidden">
        <div class="bg-hitam/90 h-full relative">
            <div class="absolute top-10 lg:top-24 right-24 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32 rotate-180" viewBox="0 0 181 177"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#c22030" />
                </svg>
            </div>
            <div class="container mx-auto p-0 lg:p-20">
                <div class="flex flex-col sm:flex-row space-x-0 lg:space-x-10 justify-center">
                    <div class="w-96 h-96 p-6 lg:px-10">
                        <div class="flex justify-center mt-0 sm:mt-2 lg:mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 sm:w-16 lg:w-20" viewBox="0 0 84 84"
                                fill="none">
                                <path
                                    d="M44.765 73.5L10.5 39.235V46.235C10.5 48.09 11.235 49.875 12.565 51.17L39.83 78.435C42.56 81.165 47.005 81.165 49.735 78.435L71.47 56.7C74.2 53.97 74.2 49.525 71.47 46.795L44.765 73.5Z"
                                    fill="#c22030" />
                                <path
                                    d="M39.83 60.935C42.56 63.665 47.005 63.665 49.735 60.935L71.47 39.2C74.2 36.47 74.2 32.025 71.47 29.295L44.205 2.03C42.8755 0.732556 41.0927 0.00435864 39.235 0L17.5 0C13.65 0 10.5 3.15 10.5 7V28.735C10.5 30.59 11.235 32.375 12.565 33.67L39.83 60.935ZM25.375 10.5C26.5353 10.5 27.6481 10.9609 28.4686 11.7814C29.2891 12.6019 29.75 13.7147 29.75 14.875C29.75 16.0353 29.2891 17.1481 28.4686 17.9686C27.6481 18.7891 26.5353 19.25 25.375 19.25C24.2147 19.25 23.1019 18.7891 22.2814 17.9686C21.4609 17.1481 21 16.0353 21 14.875C21 13.7147 21.4609 12.6019 22.2814 11.7814C23.1019 10.9609 24.2147 10.5 25.375 10.5Z"
                                    fill="#c22030" />
                            </svg>
                        </div>
                        <div class="font-inter text-white">
                            <h5 class="text-center my-5 text-xl sm:text-lg lg:text-xl px-5 capitalize font-bold">
                                Diskon Dengan Ketentuan Tertentu
                            </h5>
                            <p class="text-center text-lg px-5 sm:px-2 lg:px-5">
                                Nikmati diskon khusus dengan ketentuan tertentu sekarang! Jangan lewatkan kesempatan ini
                            </p>
                        </div>
                    </div>

                    <div class="w-96 h-96 p-6 lg:px-10">
                        <div class="flex justify-center mt-0 lg:mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 sm:w-16 lg:w-20" viewBox="0 0 79 79"
                                fill="none">
                                <path
                                    d="M36.1055 22.2188H42.8945V39.5H68.1992C69.0995 39.5 69.9629 39.1424 70.5995 38.5058C71.2361 37.8692 71.5938 37.0058 71.5938 36.1055V25.6133C71.5938 24.713 71.2361 23.8496 70.5995 23.213C69.9629 22.5764 69.0995 22.2188 68.1992 22.2188H58.9692C60.2191 19.6445 60.5102 16.7089 59.7902 13.9393C59.0702 11.1697 57.3863 8.74755 55.0409 7.10793C52.6955 5.46832 49.8423 4.71868 46.9939 4.99367C44.1455 5.26866 41.4884 6.55026 39.5 8.60827C37.5082 6.56154 34.8534 5.28985 32.0101 5.02048C29.1669 4.75112 26.3205 5.50163 23.9798 7.13789C21.639 8.77415 19.9564 11.1895 19.2327 13.9523C18.509 16.715 18.7913 19.6451 20.0293 22.2188H10.8008C9.9005 22.2188 9.03708 22.5764 8.40048 23.213C7.76389 23.8496 7.40625 24.713 7.40625 25.6133V36.1055C7.40625 37.0058 7.76389 37.8692 8.40048 38.5058C8.7157 38.821 9.08991 39.0711 9.50175 39.2417C9.91359 39.4122 10.355 39.5 10.8008 39.5H36.1055V22.2188ZM42.8945 16.9727C42.8945 15.9351 43.2022 14.9208 43.7787 14.0581C44.3551 13.1954 45.1744 12.523 46.133 12.1259C47.0916 11.7289 48.1464 11.625 49.1641 11.8274C50.1817 12.0298 51.1165 12.5295 51.8502 13.2632C52.5839 13.9968 53.0835 14.9316 53.2859 15.9492C53.4883 16.9669 53.3844 18.0217 52.9874 18.9803C52.5903 19.9389 51.9179 20.7582 51.0552 21.3347C50.1925 21.9111 49.1782 22.2188 48.1406 22.2188H42.8945V16.9727ZM25.6133 16.9727C25.6133 15.5814 26.166 14.247 27.1498 13.2632C28.1337 12.2793 29.468 11.7266 30.8594 11.7266C32.2507 11.7266 33.5851 12.2793 34.5689 13.2632C35.5528 14.247 36.1055 15.5814 36.1055 16.9727V22.2188H30.8594C29.468 22.2188 28.1337 21.6661 27.1498 20.6823C26.166 19.6984 25.6133 18.3641 25.6133 16.9727ZM42.8945 74.0626H63.2617C64.162 74.0626 65.0254 73.7049 65.662 73.0683C66.2986 72.4317 66.6562 71.5683 66.6562 70.668V44.4375H42.8945V74.0626ZM12.3438 70.668C12.3438 71.5683 12.7014 72.4317 13.338 73.0683C13.9746 73.7049 14.838 74.0626 15.7383 74.0626H36.1055V44.4375H12.3438V70.668Z"
                                    fill="#c22030" />
                            </svg>
                        </div>
                        <div class="font-inter text-white">
                            <h5 class="text-center my-5 text-xl sm:text-lg lg:text-xl px-5 capitalize font-bold">
                                Bonus (Aksesoris Elektronik, Kitchen Set)
                            </h5>
                            <p class="text-center text-lg px-5 sm:px-2 lg:px-5">
                                Dapatkan bonus eksklusif! Pilih produk favorit Anda
                            </p>
                        </div>
                    </div>

                    <div class="w-96 h-96 p-6 lg:px-10">
                        <div class="flex justify-center mt-0 lg:mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 sm:w-16 lg:w-20" viewBox="0 0 97 97"
                                fill="none">
                                <path
                                    d="M84.8752 52.5416C87.3002 52.5416 89.321 53.35 90.5335 54.9666C92.1502 56.5833 92.9585 58.6041 92.9585 60.625L60.6252 72.75L32.3335 64.6666V28.2916H40.0127L69.5168 39.2041C71.5377 40.0125 72.7502 41.6291 72.7502 43.65C72.7502 44.8625 72.346 46.075 71.5377 46.8833C70.7293 47.6916 69.5168 48.5 67.9002 48.5H56.5835L49.7127 45.6708L48.5002 49.3083L56.5835 52.5416H84.8752ZM8.0835 28.2916H24.2502V72.75H8.0835V28.2916Z"
                                    fill="#c22030" />
                            </svg>
                        </div>
                        <div class="font-inter text-white">
                            <h5 class="text-center my-5 text-xl sm:text-lg lg:text-xl px-5 capitalize font-bold">
                                Bundling - Penawaran Terbatas
                            </h5>
                            <p class="text-center text-lg px-5 sm:px-2 lg:px-5">
                                Jangan lewatkan penawaran khusus! Dapatkan paket hemat eksklusif
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- end section benefit --}}
    {{-- section commitment --}}
    <section class="h-auto relative z-[12] overflow-hidden">
        <div class="flex flex-col xl:flex-row">
            <div class="w-1/2 relative z-[12] hidden xl:block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 1597 1229" fill="none">
                    <path d="M1443.49 0.544922H0.0917969V1228.64H1443.49L1596.18 458.968L1443.49 0.544922Z"
                        fill="#c22030" />
                </svg>
                <div class="absolute top-0 left-0 z-[13] lg:p-10 2xl:p-20">
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#c22030_100%)] text-4xl sm:text-6xl lg:text-5xl 2xl:text-7xl font-bold font-inter uppercase">
                        KOMITMEN
                    </div>
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#c22030_100%)] text-4xl sm:text-6xl lg:text-5xl 2xl:text-7xl font-bold font-inter uppercase -mt-3">
                        KAMI
                    </div>
                    <ul class="list-inside space-y-5 mt-10">
                        <li
                            class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            KONSULTASI GRATIS - DISESUAIKAN DENGAN KEBUTUHAN DAN KEINGINAN PELANGGAN
                        </li>
                        <li
                            class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            DESAIN GRATIS UNTUK PROYEK DESIGN AND BUILD
                        </li>
                        <li
                            class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            OUTPUT LENGKAP (RAB, DESAIN, SHOP DRAWING, AS BUILDING DRAWING, GAMBAR 3D, LAPORAN ANALISIS
                            STRUKTUR DAN MEP)
                        </li>
                        <li
                            class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            LAPORAN PROGRESS BERKALA KEPADA KLIEN
                        </li>
                        <li
                            class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            LAYANAN GARANSI PROYEK DENGAN RESPON CEPAT DAN KOORDINATIF
                        </li>
                        <li
                            class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm 2xl:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            PELAKSANAAN SESUAI DENGAN DESAIN
                        </li>
                    </ul>
                </div>
            </div>
            {{-- mobile version --}}
            <div class="block xl:hidden">
                <div class="bg-merah w-full h-auto relative py-10">
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#c22030_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase text-center">
                        KOMITMEN
                    </div>
                    <div
                        class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#c22030_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3 text-center">
                        KAMI
                    </div>
                    <ul class="list-inside space-y-5 mt-10 px-6 mb-5">
                        <li class="capitalize font-inter text-white font-medium flex items-center gap-1 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 sm:w-6" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            KONSULTASI GRATIS - DISESUAIKAN DENGAN KEBUTUHAN DAN KEINGINAN PELANGGAN
                        </li>
                        <li class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            DESAIN GRATIS UNTUK PROYEK DESIGN AND BUILD
                        </li>
                        <li class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 sm:w-8 lg:w-6" viewBox="0 0 21 16"
                                fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            OUTPUT LENGKAP (RAB, DESAIN, SHOP DRAWING, AS BUILDING DRAWING, GAMBAR 3D, LAPORAN ANALISIS
                            STRUKTUR DAN MEP)
                        </li>
                        <li class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            LAPORAN PROGRESS BERKALA KEPADA KLIEN
                        </li>
                        <li class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 sm:w-6" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            LAYANAN GARANSI PROYEK DENGAN RESPON CEPAT DAN KOORDINATIF
                        </li>
                        <li class="capitalize font-inter text-white font-medium flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 21 16" fill="none">
                                <path d="M0 0.956299H16.3625L20.5421 8.29275L16.3625 15.6292H0V0.956299Z" fill="white" />
                            </svg>
                            PELAKSANAAN SESUAI DENGAN DESAIN
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block xl:hidden">
                <div class="bg-white h-auto relative">
                    <div class="w-full relative">
                        <img src="{{ asset('img/general/heavy/bg-commitment.webp') }}" class="w-full h-full object-contain"
                            alt="komitmen">
                        <div class="bg-gradient-to-t from-white/100 to-transparent w-full h-full absolute bottom-0">
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <a href="#" class="relative inline-block px-5 py-3 font-medium group rounded-full">
                                    <span
                                        class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-hitam group-hover:-translate-x-0 group-hover:-translate-y-0 rounded-full"></span>
                                    <span
                                        class="absolute inset-0 w-full h-full bg-tombol border-2 border-tombol group-hover:border-abu group-hover:bg-hitam rounded-full"></span>
                                    <span
                                        class="relative text-white group-hover:text-white uppercase font-league font-bold">Konsultasi
                                        Sekarang</span>
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
                        alt="komitmen">
                    <div class="bg-gradient-to-t from-white/100 to-transparent w-full h-full absolute bottom-0">
                        <div class="absolute bottom-0 2xl:bottom-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                                class="relative inline-block px-20 py-3 font-medium group rounded-full">
                                <span
                                    class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-hitam group-hover:-translate-x-0 group-hover:-translate-y-0 rounded-full"></span>
                                <span
                                    class="absolute inset-0 w-full h-full bg-tombol border-2 border-tombol group-hover:border-abu group-hover:bg-hitam rounded-full"></span>
                                <span
                                    class="relative text-white group-hover:text-white uppercase font-league font-bold">Konsultasi
                                    Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- end section commitment --}}
@endsection
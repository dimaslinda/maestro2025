@extends('layouts.main')

@section('kepala')
    @include('components.schema-about')
@endsection

@section('konten')
    {{-- section about --}}
    <section class="bg-[url('../../public/img/general/bg-about.webp')] bg-no-repeat bg-left bg-cover h-auto mt-24">
        <div class="container mx-auto p-6 relative">
            <div class="absolute top-14 sm:top-20 right-16 sm:right-20 lg:right-32 bouncing-ball">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 sm:w-32 lg:w-52" viewBox="0 0 321 325" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                        fill="#c22030" />
                </svg>
            </div>
            <div class="absolute top-10 right-2 sm:right-0 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32" viewBox="0 0 181 177" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#c22030" />
                </svg>
            </div>

            <div class="my-10 lg:my-32 relative z-10">
                <h3 class="text-white uppercase font-bold font-inter text-4xl lg:text-7xl text-center">
                    Tentang <br> Maestro
                </h3>
                <div class="my-10"></div>
                <div class="text-white font-extralight font-inter lg:px-32">
                    <h1 class="mb-5 font-bold text-xl">
                        PT. Kinarya Maestro Nusantara
                    </h1>
                    <p class="mb-5 text-lg text-justify">
                        <span class="font-bold">Kontraktor Umum</span>
                        perusahaan dengan pengalaman di bidang <span class="font-bold capitalize">sektor konstruksi</span>,
                        meliputi
                        <span class="font-bold capitalize">pekerjaan konsultan</span>, <span
                            class="font-bold capitalize">pelaksanaan konstruksi</span>, <span
                            class="font-bold capitalize">manajemen proyek</span>, <span
                            class="font-bold capitalize">pengawasan dan eksekusi</span>
                        dalam industri konstruksi. Didukung oleh sumber daya manusia dengan pengalaman yang luas di
                        <span class="capitalize">sektor konstruksi.</span>
                    </p>
                    <p class="text-lg text-justify">
                        Maestro Kontraktor didukung oleh tenaga kerja yang kuat dengan <span
                            class="font-bold capitalize">pengalaman yang signifikan</span>
                        di sektor konstruksi, menunjukkan komitmen Maestro Kontraktor untuk menyediakan
                        <span class="font-bold capitalize">layanan berkualitas tinggi.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- end section about --}}

    {{-- section visi misi --}}
    <section
        class="bg-[url('../../public/img/general/about/bg-visimisi.webp')] bg-cover bg-no-repeat bg-center lg:h-[150vh] 2xl:h-screen relative overflow-hidden hidden lg:block">
        <img src="{{ asset('img/general/about/visimisi.webp') }}"
            class="absolute transform lg:-left-32 xl:left-0 top-52 xl:top-20 2xl:top-52 2xl:left-60 w-1/2 2xl:w-1/3 z-10"
            alt="agung">
        <div
            class="h-full bg-merah w-3/6 lg:w-3/4 xl:w-3/6 absolute right-1/3 translate-x-1/2 py-20 2xl:py-32 pr-5 2xl:pr-20 pl-32 xl:pl-32 2xl:pl-52">
            <div
                class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_53%,_#c22030_100%)] font-inter text-6xl font-bold uppercase">
                Visi Dan
            </div>
            <div
                class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_53%,_#c22030_100%)] font-inter text-8xl -mt-3 uppercase font-bold ">
                Misi
            </div>
            <div class="mt-20">
                <div class="text-white font-inter text-5xl font-bold uppercase">
                    Visi Kami
                </div>
                <div class="text-white my-10 text-justify text-lg pr-32">
                    “Menjadi salah satu perusahaan konstruksi terbaik dengan penekanan pada pertumbuhan berkelanjutan dan
                    pembangunan kompetensi melalui pengembangan sumber daya manusia, manajemen teknologi, dan tata kelola
                    perusahaan yang baik.”
                </div>
            </div>
            <div>
                <div class="text-white font-inter text-5xl font-bold uppercase">
                    Misi Kami
                </div>
                <div class="text-white my-10 text-justify text-lg pr-32">
                    “Meningkatkan daya saing perusahaan dalam industri jasa konstruksi dengan mengembangkan layanan dan
                    teknologi terbaik bagi konsumen dalam memenuhi harapan pemangku kepentingan.”
                </div>
            </div>
        </div>

        <div class="absolute bg-gradient-to-t from-black/40 to-transparent h-20 bottom-0 w-full z-[12]">
        </div>
    </section>
    {{-- mobile version --}}
    <section
        class="lg:hidden block bg-[url('../../public/img/general/about/bg-visimisi.webp')] bg-no-repeat bg-cover h-auto">
        <div class="flex justify-center items-center self-center">
            <div class="sm:w-[500px]">
                <img src="{{ asset('img/general/about/visimisi.webp') }}" class="w-full h-full object-cover" alt="agung">
            </div>
        </div>
        <div class="bg-merah h-auto py-10">
            <div class="container mx-auto p-6">
                <div
                    class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_53%,_#c22030_100%)] font-inter text-5xl font-bold uppercase text-center">
                    Visi Dan
                </div>
                <div
                    class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_53%,_#c22030_100%)] font-inter text-7xl -mt-3 uppercase font-bold text-center">
                    Misi
                </div>
                <div class="mt-10">
                    <div class="text-white font-inter text-4xl text-center font-bold uppercase">
                        Visi Kami
                    </div>
                    <div class="text-white my-10 text-justify text-lg">
                        “Menjadi salah satu perusahaan konstruksi terbaik dengan penekanan pada pertumbuhan berkelanjutan
                        dan pembangunan kompetensi melalui pengembangan sumber daya manusia, manajemen teknologi, dan tata
                        kelola perusahaan yang baik.”
                    </div>
                </div>
                <div>
                    <div class="text-white font-inter text-4xl text-center font-bold uppercase">
                        Misi Kami
                    </div>
                    <div class="text-white my-10 text-justify text-lg">
                        “Meningkatkan daya saing perusahaan dalam industri jasa konstruksi dengan mengembangkan layanan dan
                        teknologi terbaik bagi konsumen dalam memenuhi harapan pemangku kepentingan.”
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end mobile version --}}
    {{-- end section visi misi --}}

    {{-- section legal --}}
    <section class="h-auto relative overflow-hidden" id="legal">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-40 sm:w-52 2xl:w-80 absolute -bottom-32 lg:-bottom-52 2xl:-bottom-80 -left-20" viewBox="0 0 390 843"
            fill="none">
            <path opacity="0.71"
                d="M120.48 841.654H94.0385V617.226L230.198 422.243L230.479 421.84L230.244 421.406L1.42869 0.798471H93.2401H160.906L389.291 439.158L120.48 841.654Z"
                stroke="#c22030" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-40 sm:w-52 2xl:w-80 absolute -bottom-32 lg:-bottom-52 2xl:-bottom-80 left-10 sm:left-14 2xl:left-24"
            viewBox="0 0 390 843" fill="none">
            <path opacity="0.71"
                d="M120.48 841.654H94.0385V617.226L230.198 422.243L230.479 421.84L230.244 421.406L1.42869 0.798471H93.2401H160.906L389.291 439.158L120.48 841.654Z"
                stroke="#c22030" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-40 sm:w-52 2xl:w-80 absolute -bottom-32 lg:-bottom-52 2xl:-bottom-80 left-40 sm:left-44 2xl:left-72"
            viewBox="0 0 390 843" fill="none">
            <path opacity="0.71"
                d="M120.48 841.654H94.0385V617.226L230.198 422.243L230.479 421.84L230.244 421.406L1.42869 0.798471H93.2401H160.906L389.291 439.158L120.48 841.654Z"
                stroke="#c22030" />
        </svg>
        <div class="container mx-auto p-6">
            <div class="my-20">
                <h2 class="uppercase font-bold font-inter text-4xl lg:text-7xl text-center">
                    Legalitas
                </h2>
            </div>
            <div class="flex justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/2.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU bangunan sipil jembatan, jalan layang, flyover, underpass
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200120001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/3.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU konstruksi Gedung hunian
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200030001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/4.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU konstruksi Gedung perbelanjaan
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200060001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/5.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU konstruksi Gedung hiburan dan tempat olahraga
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200100001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/6.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU konstruksi Gedung lainnya
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200020001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/7.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU Konstruksi Gedung
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200040001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/8.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU PLUMBING
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200160001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/9.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU Pendingin dan ventilAsi udara
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200010001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/10.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                sbu konstruksi gedung industri
                            </p>
                            <p class="text-lg font-semibold">
                                PB-UMKU: 122600345236200050001
                            </p>
                        </div>
                    </div>
                    <div class="h-auto w-full">
                        <div class="h-52 w-full drop-shadow-2xl">
                            <img src="{{ asset('img/general/about/1.webp') }}"
                                class="drop-shadow-2xl h-full w-full object-contain" alt="legality">
                        </div>
                        <div class="text-center font-league my-5">
                            <p class="font-bold text-3xl uppercase">
                                SBU tenaga listrik
                            </p>
                            <p class="text-lg font-semibold">
                                X49.1.8.216.K.1A.3276.K23
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end section legal --}}

    {{-- section team --}}
    <section class="h-auto bg-hitam relative overflow-hidden">
        <div class="absolute bottom-14 sm:bottom-[35%] left-20 lg:left-32 bouncing-ball">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 sm:w-32 lg:w-52 rotate-180" viewBox="0 0 321 325"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                    fill="#c22030" />
            </svg>
        </div>
        <div class="absolute bottom-14 sm:bottom-[30%] left-5 lg:left-0 bouncing-cube">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32 rotate-180" viewBox="0 0 181 177"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                    fill="#c22030" />
            </svg>
        </div>
        <div class="absolute top-10 lg:top-10 right-20 bouncing-cube">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32 rotate-180" viewBox="0 0 181 177"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                    fill="#c22030" />
            </svg>
        </div>
        <div class="relative left-1/2 transform -translate-y-1/2 z-[11]">
            <div class="relative mt-14">
                <div
                    class="absolute bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#272757_100%)] uppercase text-6xl sm:text-[7rem] top-12 sm:top-14  font-[800] transform -translate-x-1/2 whitespace-nowrap">
                    <h2 class="">
                        Maestro Team
                    </h2>
                </div>
            </div>
            <h1
                class="text-stroke-service uppercase absolute top-28 sm:top-[10rem] text-6xl sm:text-[7rem] transform -translate-x-1/2 whitespace-nowrap">
                Maestro Team
            </h1>
            <h1
                class="text-stroke-service uppercase absolute top-44 sm:top-[17rem] transform -translate-x-1/2 text-6xl sm:text-[7rem] whitespace-nowrap">
                Maestro Team
            </h1>
            <h1
                class="text-stroke-service uppercase absolute top-60 sm:top-[24rem] transform -translate-x-1/2 text-6xl sm:text-[7rem] whitespace-nowrap">
                Maestro Team
            </h1>
        </div>
        <div class="flex justify-center mt-52 relative z-[11]">
            <div class="relative w-3/4">
                <img src="{{ asset('img/general/about/team.webp') }}" alt="team">
            </div>
        </div>
        <div class="container mx-auto px-6 lg:px-[20%] absolute bottom-10 left-1/2 transform -translate-x-1/2 z-[11]">
            <div class="text-white font-inter text-center text-lg">
                "Kalau bukan anak bangsa ini yang membangun bangsanya sendiri, siapa lagi? Janganlah kita mengharapkan orang
                lain datang membangun bangsa kita, saudara-saudara." - B.J. Habibie, Presiden ke-3 RI
            </div>
        </div>
    </section>
    {{-- end section team --}}
@endsection
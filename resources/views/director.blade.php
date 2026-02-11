@extends('layouts.main')

@section('kepala')
    @include('components.schema-org')
@endsection
@section('konten')
    <section class="h-auto bg-[url('../../public/img/general/bg-benefit.webp')] bg-cover bg-no-repeat bg-center mt-24">
        <div class="h-full bg-hitam/90">
            <div class="flex absolute -top-32 sm:-top-40 2xl:-top-80 right-0">
                <div class="relative flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-0"
                        viewBox="0 0 245 529" fill="none">
                        <path opacity="0.71"
                            d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                            stroke="#EFBF04" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-24 sm:right-32 2xl:right-48" viewBox="0 0 245 529"
                        fill="none">
                        <path opacity="0.71"
                            d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                            stroke="#EFBF04" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-40 sm:w-52 2xl:w-80 absolute top-0 right-48 sm:right-64 2xl:right-96" viewBox="0 0 245 529"
                        fill="none">
                        <path opacity="0.71"
                            d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z"
                            stroke="#EFBF04" />
                    </svg>
                </div>
            </div>
            <div class="container mx-auto p-6 py-20 sm:py-32 relative z-10">
                <div class="text-center font-inter font-bold text-5xl lg:text-7xl uppercase text-white">
                    Jajaran Direksi
                </div>
            </div>
        </div>
    </section>
    {{-- section agung --}}
    <section
        class="bg-[url('../../public/img/general/bg-direksi-1.webp')] bg-no-repeat bg-cover bg-center h-screen 2xl:h-[80vh] relative hidden lg:block overflow-hidden">
        <img src="{{ asset('img/general/subhan.webp') }}"
            class="absolute z-10 w-1/2 transform lg:-bottom-60 lg:left-10 xl:-bottom-52 2xl:-bottom-80 2xl:left-80 xl:left-72 xl:w-1/3"
            alt="Foto Subhan">
        <div class="absolute right-1/3 py-20 pr-20 pl-20 w-3/6 h-full translate-x-1/2 bg-merah xl:py-32 2xl:py-52 xl:pl-52">
            <div class="text-6xl font-bold text-white uppercase font-inter">
                Subhan
            </div>
            <div class="text-2xl font-bold text-white font-inter">
                Presiden Direktur
            </div>
            <div class="my-10 text-lg text-justify text-white">
                Bapak Subhan adalah Direktur Kinarya Konstruksi, sebuah perusahaan konstruksi yang dikenal dengan
                komitmennya
                terhadap kualitas dan penyelesaian proyek yang tepat waktu. Dengan pengalaman yang luas di industri ini,
                beliau memimpin Kinarya Konstruksi dalam memberikan solusi konstruksi yang inovatif, mulai dari
                proyek-proyek
                bangunan komersial hingga infrastruktur berskala besar. Dedikasi dan kepemimpinannya memastikan bahwa
                setiap proyek berjalan secara efisien, mematuhi standar keselamatan, dan memberikan hasil yang terbaik
                bagi klien.
            </div>
        </div>
        <div class="absolute bg-gradient-to-t from-black/50 to-transparent h-20 bottom-0 w-full z-[12]">

        </div>
    </section>
    <section class="lg:hidden block bg-[url('../../public/img/general/bg-direksi-1.webp')] bg-no-repeat bg-cover h-auto">
        <div class="flex justify-center items-center self-center">
            <div class="sm:w-96">
                <img src="{{ asset('img/general/agung.webp') }}" class="object-cover w-full h-full" alt="Foto Subhan">
            </div>
        </div>
        <div class="py-10 h-auto bg-merah">
            <div class="container p-6 mx-auto">
                <div class="text-5xl font-bold text-white uppercase font-inter">
                    subhan
                </div>
                <div class="text-2xl font-bold text-white font-inter">
                    Presiden Direktur
                </div>
                <div class="my-5 text-lg text-justify text-white">
                    Bapak Subhan adalah Direktur Kinarya Konstruksi, sebuah perusahaan konstruksi yang dikenal dengan
                    komitmennya
                    terhadap kualitas dan penyelesaian proyek yang tepat waktu. Dengan pengalaman yang luas di industri
                    ini,
                    beliau memimpin Kinarya Konstruksi dalam memberikan solusi konstruksi yang inovatif, mulai dari
                    proyek-proyek
                    bangunan komersial hingga infrastruktur berskala besar. Dedikasi dan kepemimpinannya memastikan
                    bahwa
                    setiap proyek berjalan secara efisien, mematuhi standar keselamatan, dan memberikan hasil yang
                    terbaik
                    bagi klien.
                </div>
            </div>
        </div>
    </section>
    {{-- end section agung --}}

    {{-- section nuh --}}
    <section
        class="bg-[url('../../public/img/general/bg-direksi-3.webp')] bg-no-repeat bg-cover bg-center h-screen 2xl:h-[80vh] relative hidden lg:block z-[11] overflow-hidden">
        <img src="{{ asset('img/general/nuh.webp') }}"
            class="absolute transform lg:-bottom-60 lg:right-10 xl:-bottom-52 2xl:-bottom-80 2xl:right-96 xl:right-72 w-1/2 xl:w-1/3 z-10"
            alt="Foto Nuh Akbar">
        <div
            class="h-full bg-merah w-3/6 absolute left-1/3 -translate-x-1/2 py-20 xl:py-32 2xl:py-52 pr-20 pl-20 xl:pl-10 2xl:pl-52">
            <div class="text-white font-inter text-6xl font-bold uppercase">
                NUH AKBAR
            </div>
            <div class="text-white font-inter text-2xl font-bold ">
                Direktur
            </div>
            <div class="text-white my-10 text-justify text-lg">
                Lebih dari 10 tahun terlibat dalam proyek-proyek konstruksi baik skala ringan, menengah maupun tinggi,
                seperti Cluster Perumahan di Depok, Proyek Sub Structure - Tower Bea Cukai, Bengkel - Proyek Struktur Baja,
                Proyek Dinding Penahan Tanah, Crusher dan Proyek Infrastruktur Pertambangan di Bangka.
            </div>
        </div>
        <div class="absolute bg-gradient-to-t from-black/50 to-transparent h-20 bottom-0 w-full z-[12]">

        </div>
    </section>
    <section class="lg:hidden block bg-[url('../../public/img/general/bg-direksi-3.webp')] bg-no-repeat bg-cover h-auto">
        <div class="flex justify-center items-center self-center">
            <div class="sm:w-96">
                <img src="{{ asset('img/general/nuh.webp') }}" class="w-full h-full object-cover" alt="Foto Nuh Akbar">
            </div>
        </div>
        <div class="bg-merah h-auto py-10">
            <div class="container mx-auto p-6">
                <div class="text-white font-inter text-5xl font-bold uppercase">
                    NUH AKBAR
                </div>
                <div class="text-white font-inter text-2xl font-bold ">
                    Direktur
                </div>
                <div class="text-white my-5 text-justify text-lg">
                    Lebih dari 10 tahun terlibat dalam proyek-proyek konstruksi baik skala ringan, menengah maupun tinggi,
                    seperti Cluster Perumahan di Depok, Proyek Sub Structure - Tower Bea Cukai, Bengkel - Proyek Struktur
                    Baja, Proyek Dinding Penahan Tanah, Crusher dan Proyek Infrastruktur Pertambangan di Bangka.
                </div>
            </div>
        </div>
    </section>
    {{-- end section nuh --}}

    {{-- section eka --}}
    <section
        class="bg-[url('../../public/img/general/bg-direksi-2.webp')] bg-no-repeat bg-cover bg-center h-screen 2xl:h-[90vh] relative z-[11] hidden lg:block overflow-hidden">
        <img src="{{ asset('img/general/eka.webp') }}"
            class="absolute transform lg:-bottom-60 lg:left-10 xl:-bottom-52 2xl:-bottom-80 2xl:left-80 xl:left-72 w-1/2 xl:w-1/3 z-10"
            alt="Foto Eka Prianda">
        <div
            class="h-full bg-merah w-3/6 absolute right-1/3 translate-x-1/2 py-20 xl:py-32 2xl:py-52 pr-20 pl-20 xl:pl-32 2xl:pl-52">
            <div class="text-white font-inter text-6xl font-bold uppercase">
                Eka Prianda
            </div>
            <div class="text-white font-inter text-2xl font-bold ">
                Direktur Teknik
            </div>
            <div class="text-white my-10 text-justify text-lg">
                Berpengalaman lebih dari 30 tahun di dunia Konstruksi, termasuk terlibat dalam berbagai Proyek
                Multinasional, berpengalaman dan telah menangani berbagai macam konstruksi, mulai dari proyek berskala
                ringan hingga berat. Saya telah menangani berbagai proyek, termasuk pembangunan Pabrik Kertas dan Pulp,
                Pabrik Kelapa Sawit, Pembangkit Listrik, Crusher, dan Infrastruktur Pertambangan.
            </div>
        </div>
        <div class="absolute bg-gradient-to-t from-black/50 to-transparent h-20 bottom-0 w-full z-[12]">

        </div>
    </section>
    <section class="lg:hidden block bg-[url('../../public/img/general/bg-direksi-2.webp')] bg-no-repeat bg-cover h-auto">
        <div class="flex justify-center items-center self-center">
            <div class="sm:w-96">
                <img src="{{ asset('img/general/eka.webp') }}" class="w-full h-full object-cover" alt="Foto Eka Prianda">
            </div>
        </div>
        <div class="bg-merah h-auto py-10">
            <div class="container mx-auto p-6">
                <div class="text-white font-inter text-5xl font-bold uppercase">
                    Eka Prianda
                </div>
                <div class="text-white font-inter text-2xl font-bold ">
                    Direktur Teknik
                </div>
                <div class="text-white my-5 text-justify text-lg">
                    Berpengalaman lebih dari 30 tahun di dunia Konstruksi, termasuk terlibat dalam berbagai Proyek
                    Multinasional, berpengalaman dan telah menangani berbagai macam konstruksi, mulai dari proyek berskala
                    ringan hingga berat. Saya telah menangani berbagai proyek, termasuk pembangunan Pabrik Kertas dan Pulp,
                    Pabrik Kelapa Sawit, Pembangkit Listrik, Crusher, dan Infrastruktur Pertambangan.
                </div>
            </div>
        </div>
    </section>
    {{-- end section eka --}}
@endsection
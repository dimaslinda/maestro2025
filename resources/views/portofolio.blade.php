@extends('layouts.main')

@section('kepala')
    @include('components.schema-portfolio')
    @php
        use Spatie\MediaLibrary\MediaCollections\Models\Media;
    @endphp
@endsection

@section('konten')
    {{-- Filter Section Desktop --}}
    <section
        class="h-auto bg-[url('../../public/img/general/bg-benefit.webp')] bg-cover bg-no-repeat bg-center mt-24 hidden lg:block">
        <div class="h-full bg-hitam/90">
            <div class="flex absolute right-32 top-40">
                <div class="flex relative">
                    <div class="absolute top-0 right-2 sm:right-5 bouncing-cube">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32" viewBox="0 0 181 177"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                                fill="#c22030" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="container relative z-10 p-6 py-20 mx-auto sm:py-32">
                <div class="text-lg font-bold text-center text-white uppercase font-league">
                    <div id="myBtnContainer" class="grid grid-cols-1 gap-5">
                        <div class="flex justify-center space-x-5">
                            <button
                                class="px-10 py-3 rounded-full border-2 btn active hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('all')">Semua Portofolio</button>
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('construction')">Konstruksi</button>
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('applicator')">Aplikator</button>
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('design')">Desain Arsitektur</button>
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('furniture')">Furnitur</button>
                        </div>
                        <div class="flex justify-center space-x-5">
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('commercial')">Gedung Komersial</button>
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('house')">Gedung Perumahan</button>
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('infrastructure')">Infrastruktur</button>
                            <button
                                class="px-10 py-3 rounded-full border-2 btn hover:bg-tombol hover:text-white hover:border-tombol"
                                onclick="filterSelection('auxiliaries')">Gedung Pendukung</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Filter Section Mobile --}}
    <section
        class="lg:hidden h-auto bg-[url('../../public/img/general/bg-benefit.webp')] bg-cover bg-no-repeat bg-center mt-24">
        <div class="h-full bg-hitam/90">
            <div class="flex absolute right-2 top-40">
                <div class="flex relative">
                    <div class="absolute top-0 right-2 sm:right-5 bouncing-cube">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32" viewBox="0 0 181 177"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                                fill="#c22030" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="font-bold text-center text-white uppercase font-league">
                <div id="myBtnContainer" class="flex flex-wrap gap-6 justify-center items-center py-4 md:py-8">
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('all')">Semua Portofolio</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('construction')">Konstruksi</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('applicator')">Aplikator</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('design')">Desain Arsitektur</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('furniture')">Furnitur</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('commercial')">Gedung Komersial</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('house')">Gedung Perumahan</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('infrastructure')">Infrastruktur</button>
                    <button
                        class="px-5 py-1 rounded-full border-2 btn sm:px-10 sm:py-3 hover:bg-tombol hover:text-white hover:border-tombol"
                        onclick="filterSelection('auxiliaries')">Gedung Pendukung</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Grid Section --}}
    <section class="p-6 h-auto lg:p-20">
        <div class="container mx-auto 2xl:px-20">
            <div class="text-4xl font-extrabold text-center uppercase text-merah lg:text-5xl xl:text-left">
                Portofolio Kami
            </div>
            <div class="my-20"></div>
            <div class="flex justify-center 2xl:justify-start">
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 lg:gap-5">
                    @forelse ($portofolio as $item)
                        <div data-modal-target="default-modal-{{ $item->id }}" data-modal-toggle="default-modal-{{ $item->id }}"
                            class="max-h-[500px] w-80 hover:rounded-lg hover:shadow-2xl hover:drop-shadow-2xl hover:scale-105 hover:cursor-pointer group transition-all ease-in-out duration-300 kolom {{ $item->kategori }}">
                            <div class="h-72 bg-center bg-no-repeat bg-cover group-hover:rounded-t-lg"
                                style="background-image: url('{{ $item ? $item->getFirstMediaUrl('portofolio') : asset('img/general/bg-banner.webp') }}')">
                            </div>
                            <div class="px-6 py-4">
                                <div class="flex flex-col gap-1">
                                    <div class="text-xl font-bold font-league">
                                        {{ $item->judul }}
                                    </div>
                                    <div class="text-lg font-league">
                                        {{ $item->alamat }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Portfolio Modal --}}
                        <div id="default-modal-{{ $item->id }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-h-full max-w-8xl">
                                <div class="relative rounded-lg shadow bg-abu">
                                    {{-- Modal Header --}}
                                    <div
                                        class="flex absolute z-10 justify-between items-center p-4 w-full bg-gradient-to-b to-transparent md:p-5 from-hitam">
                                        <h3 class="text-xl font-bold text-white font-league sm:text-3xl">
                                            {{ $item->judul }}
                                        </h3>
                                        <button type="button"
                                            class="inline-flex justify-center items-center w-8 h-8 text-sm font-bold text-white bg-transparent rounded-lg hover:bg-tombol hover:text-white ms-auto"
                                            data-modal-hide="default-modal-{{ $item->id }}">
                                            <svg class="h-2 w- sm:w-5 sm:h-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>

                                    {{-- Modal Body --}}
                                    <div class="space-y-5 lg:space-y-0">
                                        <div id="mySwiper-{{ $item->id }}"
                                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                @php
                                                    $collection = Media::where('model_id', $item->id)
                                                        ->where('collection_name', 'another_portofolio')
                                                        ->take(6)
                                                        ->get();
                                                @endphp
                                                @foreach ($collection as $c)
                                                    <div class="swiper-slide">
                                                        <div class="lg:h-[80vh]">
                                                            <img src="{{ $c->original_url }}" class="object-contain w-full h-full"
                                                                alt="desain">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                            {{-- Navigation Buttons --}}
                                            <div
                                                class="hidden absolute left-10 top-52 z-10 justify-between sm:flex lg:top-96 group">
                                                <div class="swiper-desain-prev">
                                                    <div
                                                        class="flex justify-center items-center self-center w-20 h-20 text-2xl rounded-full shadow-2xl opacity-50 drop-shadow-2xl bg-tombol group-hover:opacity-100">
                                                        <div>
                                                            <svg class="w-6 h-6 text-white" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 8 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="hidden absolute right-10 top-52 z-10 justify-between sm:flex lg:top-96 group">
                                                <div class="swiper-desain-next">
                                                    <div
                                                        class="flex justify-center items-center self-center w-20 h-20 text-2xl rounded-full shadow-2xl opacity-50 drop-shadow-2xl bg-tombol group-hover:opacity-100">
                                                        <svg class="w-6 h-6 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>

                                        {{-- Thumbnail Swiper --}}
                                        <div id="mySwipers-{{ $item->id }}" thumbsSlider=""
                                            class="swiper mySwipers max-w-[900px]">
                                            <div class="pb-5 swiper-wrapper">
                                                @foreach ($collection as $c)
                                                    <div class="swiper-slide">
                                                        <div class="h-20 sm:h-32 lg:h-40">
                                                            <img src="{{ $c->original_url }}" class="object-contain w-full h-full"
                                                                alt="desain">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection

@section('kaki')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("kolom");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                removeClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
            }
        }

        function addClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function removeClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            })
        }
    </script>

    <script>
        // Initialize Swiper instances
        const thumbnailSwipers = [];
        const mainSwipers = [];

        $('.mySwipers').each(function (i) {
            const swiperId = $(this).attr('id');

            thumbnailSwipers[i] = new Swiper('#' + swiperId, {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 3,
                freeMode: true,
                watchSlidesProgress: true,
            });
        });

        $('.mySwiper2').each(function (i) {
            const swiperId = $(this).attr('id');

            mainSwipers[i] = new Swiper('#' + swiperId, {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-desain-next",
                    prevEl: ".swiper-desain-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                thumbs: {
                    swiper: thumbnailSwipers[i],
                }
            });
        });
    </script>
@endsection
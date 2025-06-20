@extends('layouts.main')
@section('kepala')
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
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Construction Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ __('Commercial building') }}",
                        "description": "{{ __('Commercial building construction services') }}"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ __('house building') }}",
                        "description": "{{ __('Residential house construction services') }}"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ __('infrastructure') }}",
                        "description": "{{ __('Infrastructure construction services') }}"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ __('auxiliaries building') }}",
                        "description": "{{ __('Auxiliary building construction services') }}"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ __('New Building') }}",
                        "description": "{{ __('New building construction services') }}"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ __('Renovation') }}",
                        "description": "{{ __('Building renovation services') }}"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ __('Interior Furniture') }}",
                        "description": "{{ __('Interior design and furniture services') }}"
                    }
                }
            ]
        },
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
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ url('/') }}?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ url('/') }}"
            }
        ]
    }
    </script>

    @include('components.schema-portfolio')
    @include('components.schema-testimonial')
    @include('components.schema-about')
    @include('components.schema-contact')
    @include('components.schema-services')

    <style>
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

        .testi-slider {
            height: auto;
            padding: 2rem 0;
            position: relative;
        }

        @media (max-width:500px) {
            .testi-slider {
                height: auto;
            }
        }

        .testi-slide {
            width: 35rem;
            height: 100%;
            position: relative;
        }

        @media (max-width:500px) {
            .testi-slide {
                width: auto !important;
                height: 25rem !important;
            }

            .testi-slide .testi-slide-img img {
                width: 30rem !important;
                height: 25rem !important;
            }
        }

        .testi-slide .testi-slide-img img {
            width: auto;
            height: 100%;
            object-fit: cover;
        }
    </style>
    @php
        use Spatie\MediaLibrary\MediaCollections\Models\Media;
    @endphp
@endsection
@section('konten')
    {{-- section banner --}}
    <section class="relative">
        <div class="relative swiper mySwiper">
            <div class="swiper-wrapper">

                @forelse ($banner as $b)
                    <div class="swiper-slide">
                        <div class="h-[50vh] lg:h-[80vh] xl:h-screen min-[1800px]:h-[80vh] mt-20">
                            <img src="{{ $b ? $b->getFirstMediaUrl('banner') : asset('img/general/bg-banner.webp') }}"
                                class="object-cover w-full h-full" alt="">
                        </div>
                    </div>
                @empty
                    <div class="swiper-slide">
                        <div class="h-[50vh] lg:h-[80vh] mt-20">
                            <img src="{{ asset('img/general/bg-banner.webp') }}" class="object-cover w-full h-full"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-[50vh] lg:h-[80vh] mt-20">
                            <img src="{{ asset('img/general/bg-banner.webp') }}" class="object-cover w-full h-full"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-[50vh] lg:h-[80vh] mt-20">
                            <img src="{{ asset('img/general/bg-banner.webp') }}" class="object-cover w-full h-full"
                                alt="">
                        </div>
                    </div>
                @endforelse

            </div>
            <div
                class="absolute top-0 z-10 pt-32 pl-10 w-full h-full bg-gradient-to-r to-transparent from-hitam sm:pt-20 2xl:pt-32">
                <div class="absolute sm:mt-20 lg:ml-32 min-[1800px]:ml-72">
                    @if (App::getLocale() == 'id')
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase">
                            KonstruksI
                        </div>
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3">
                            Berkualitas
                        </div>
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3">
                            dengan
                        </div>
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3">
                            Standar ISO
                        </div>
                        <div class="mt-2 font-extralight text-white capitalize sm:text-2xl">
                            Tersertifikasi ISO, Kami menghadirkan solusi konstruksi <br> berkualitas tinggi dengan standar
                            internasional.
                        </div>
                    @else
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase">
                            Quality
                        </div>
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3">
                            Construction
                        </div>
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3">
                            with ISO
                        </div>
                        <div
                            class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3">
                            Standards
                        </div>
                        <div class="mt-2 font-extralight text-white capitalize sm:text-2xl">
                            ISO certified, we deliver high quality construction <br> solutions to international standards.
                        </div>
                    @endif
                    <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                        class="inline-block overflow-hidden relative justify-start items-center px-5 py-3 mt-5 font-bold rounded-full group">
                        <span
                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                        <span
                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                        <span
                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Consult Now') }}</span>
                        <span class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end section banner --}}

    {{-- section welcome --}}
    <section class="relative h-auto bg-white">
        <div class="flex absolute right-0 -top-32 sm:-top-40 2xl:-top-80">
            <div class="flex relative">
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
        <div class="container px-6 pt-6 mx-auto lg:pl-20 lg:pt-20">
            <div class="flex flex-col lg:flex-row-reverse">
                <div class="flex relative z-10 justify-center lg:w-1/2">
                    <img src="{{ asset('img/general/welcome.webp') }}" class="lg:absolute lg:bottom-0 lg:right-0"
                        alt="welcome maestro">
                </div>
                <div class="mt-10 lg:w-1/2">
                    @if (app()->getLocale() == 'en')
                        <div
                            class="bg-clip-text text-transparent font-league font-bold uppercase text-4xl text-center sm:text-7xl lg:text-left bg-[linear-gradient(180deg,_#C22030_42%,_#1E1E1E_100%)]">
                            {{ __('Welcome To') }}
                        </div>
                    @else
                        <div
                            class="bg-clip-text text-transparent font-league font-bold uppercase text-4xl text-center sm:text-6xl lg:text-left bg-[linear-gradient(180deg,_#C22030_42%,_#1E1E1E_100%)]">
                            {{ __('Welcome To') }}
                        </div>
                    @endif

                    @if (app()->getLocale() == 'en')
                        <div class="relative mt-6 mb-20 sm:mb-28 lg:mb-32 lg:-mt-6">
                            <div
                                class="bg-clip-text text-transparent font-league font-bold uppercase absolute z-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 lg:left-0 lg:-translate-x-0 lg:translate-y-0 text-6xl sm:text-8xl bg-[linear-gradient(180deg,_#C22030_42%,_#1E1E1E_100%)]">
                                Maestro
                            </div>
                            <h1
                                class="absolute top-4 left-1/2 text-6xl font-bold uppercase transform -translate-x-1/2 -translate-y-1/2 text-stroke font-league sm:text-8xl sm:top-5 lg:left-0 lg:-translate-x-0 lg:translate-y-0">
                                Maestro
                            </h1>
                        </div>
                    @else
                        <div class="relative mt-6 mb-20 sm:mb-28 lg:mb-32 lg:-mt-4">
                            <div
                                class="bg-clip-text text-transparent font-league font-bold uppercase absolute z-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 lg:left-0 lg:-translate-x-0 lg:translate-y-0 text-6xl sm:text-8xl bg-[linear-gradient(180deg,_#C22030_42%,_#1E1E1E_100%)]">
                                Maestro
                            </div>
                            <h1
                                class="absolute top-4 left-1/2 text-6xl font-bold uppercase transform -translate-x-1/2 -translate-y-1/2 text-stroke font-league sm:text-8xl sm:top-5 lg:left-0 lg:-translate-x-0 lg:translate-y-0">
                                Maestro
                            </h1>
                        </div>
                    @endif
                    <div class="my-5 text-justify capitalize font-inter text-hitam sm:text-xl lg:text-lg">
                        {{ __('p_welcome') }}
                    </div>
                    <div class="my-5 text-justify capitalize font-inter text-hitam sm:text-xl lg:text-lg">
                        {{ __('p_welcome2') }}
                    </div>
                    <div class="flex mb-14">
                        <div class="px-3 py-1 text-lg font-semibold text-white uppercase bg-merah sm:text-2xl lg:text-xl">
                            {{ __('p_welcome3') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end section welcome --}}

    {{-- section about --}}
    <section class="bg-[url('../../public/img/general/bg-about.webp')] bg-no-repeat bg-left bg-cover h-auto">
        <div class="container relative p-6 mx-auto">
            <div class="absolute top-14 right-16 sm:top-20 sm:right-20 lg:right-32 bouncing-ball">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 sm:w-32 lg:w-52" viewBox="0 0 321 325" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                        fill="#C22030" />
                </svg>
            </div>
            <div class="absolute right-2 top-10 sm:right-0 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32" viewBox="0 0 181 177" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#C22030" />
                </svg>
            </div>

            <div class="relative z-10 my-10 lg:my-32">
                <h3 class="text-4xl font-bold text-center text-white uppercase font-league lg:text-7xl">
                    {{ __('about') }} <br> Maestro
                </h3>
                <div class="-mt-3 text-sm font-bold text-center text-white uppercase lg:text-2xl">
                    {{ __('General Contractor') }}
                </div>
                <div class="my-10"></div>
                <div class="font-extralight text-white font-inter sm:text-xl lg:px-32 lg:text-lg">
                    <h1 class="mb-5 text-xl font-bold text-center sm:text-left">
                        PT. KINARYA MAESTRO NUSANTARA
                    </h1>
                    <p class="mb-5 text-lg text-justify">
                        <span class="font-bold">{{ __('A General Contractor') }}</span>
                        {{ __('Company with experince in the') }} <span
                            class="font-bold capitalize">{{ __('consturction sector') }}</span>, {{ __('encompassing') }}
                        <span class="font-bold capitalize">{{ __('consultant work') }}</span>, <span
                            class="font-bold capitalize">{{ __('construction implementation') }}</span>, <span
                            class="font-bold capitalize">{{ __('project management') }}</span>, <span
                            class="font-bold capitalize">{{ __('supervision and execution') }}</span>
                        {{ __('in the construction industry. Supported by human resources with extensive experience in the') }}
                        <span class="capitalize">{{ __('construction sector.') }}</span>
                    </p>
                    <p class="text-lg text-justify">
                        {{ __('Maestro is backed by a strong workforce with') }} <span
                            class="font-bold capitalize">{{ __('significant experience') }}</span>
                        {{ __("in the construction sector, demonstrating Maestro's commitment to providing") }} <span
                            class="font-bold capitalize">{{ __('high-quality services.') }}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- end section about --}}

    {{-- section our service --}}
    <section class="h-auto bg-white lg:h-screen 2xl:h-auto font-league">
        <div class="flex flex-col lg:flex-row">
            <div class="bg-abu w-full lg:w-[30%] h-[60vh] sm:h-screen p-6 sm:py-20">
                <div class="container relative mx-auto 2xl:pl-10">
                    <div class="relative">
                        @if (app()->getLocale() == 'en')
                            <div class="relative mt-10">
                                <div
                                    class="absolute bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] uppercase text-6xl sm:text-[5rem] top-12 sm:top-14  font-[800] left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 animate__animated animate__fadeInLeft">
                                    <h2 class="">
                                        Service
                                    </h2>
                                </div>
                                <div
                                    class="absolute bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] uppercase text-6xl sm:text-[5rem] top-0 font-[800] left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 animate__animated animate__fadeInLeft">
                                    <h2 class="">
                                        Our
                                    </h2>
                                </div>
                            </div>

                            <h1
                                class="text-stroke-service uppercase absolute top-28 sm:top-32 left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 text-6xl sm:text-[5rem] animate__animated animate__fadeInDown animate__delay-1s">
                                Service
                            </h1>
                            <h1
                                class="text-stroke-service1 uppercase absolute top-44 sm:top-52 left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 text-6xl sm:text-[5rem] animate__animated animate__fadeInDown animate__delay-2s">
                                Service
                            </h1>
                            <h1
                                class="text-stroke-service2 uppercase absolute top-60 sm:top-72 left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 text-6xl sm:text-[5rem] animate__animated animate__fadeInDown animate__delay-3s">
                                Service
                            </h1>
                        @else
                            <div class="relative mt-52">
                                <div
                                    class="absolute bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] uppercase text-6xl sm:text-[5rem] lg:text-6xl xl:text-[5rem] top-12 sm:top-14  font-[800] left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 animate__animated animate__fadeInLeft">
                                    <h2 class="">
                                        kami
                                    </h2>
                                </div>
                                <div
                                    class="absolute bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] uppercase text-6xl sm:text-[5rem] lg:text-6xl xl:text-[5rem] top-0 font-[800] left-1/2 transform -translate-x-1/2 -translate-y-1/2 2xl:left-0 2xl:translate-x-0 2xl:translate-y-0 animate__animated animate__fadeInLeft">
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
                        @endif

                    </div>

                </div>

            </div>
            <div class="bg-white w-full lg:w-[70%] h-auto">
                <!-- Swiper -->
                <div class="container p-6 mx-auto lg:px-10 2xl:px-32 2xl:pt-20">
                    <div class="swiper swiperService">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div
                                    class="mt-5 text-lg font-medium tracking-tight leading-6 capitalize sm:text-xl font-inter animate__animated animate__fadeInRight">
                                    {{ __('Since our inception') }}, <span
                                        class="text-merah">{{ __('we have been committed') }}</span>
                                    {{ __('to providing') }} <span
                                        class="text-merah">{{ __('reliable services') }}</span>
                                    {{ __('for businesses that need our services. We can') }} <span
                                        class="text-merah">{{ __('make it happen') }}</span>
                                    {{ __('in the following services:') }}
                                </div>
                                <div
                                    class="flex justify-center mt-10 animate__animated animate__fadeInDown animate__delay-1s">
                                    <div class="grid grid-cols-2 gap-5 lg:grid-cols-4">
                                        <div class="card hover:cursor-pointer h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-5.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        {{ __('Commercial building') }}</h1>
                                                    <a href="/heavy/#commercial"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Read More') }}</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card hover:cursor-pointer h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-6.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        {{ __('house building') }}</h1>
                                                    <a href="/heavy/#house-building"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Read More') }}</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card hover:cursor-pointer h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-7.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        {{ __('infrastructure') }}</h1>
                                                    <a href="/heavy/#infrastructure"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-8 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Read More') }}</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card hover:cursor-pointer h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/service-8.png') }}"
                                                class="object-cover w-full h-full" alt="B2B our service">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        {{ __('auxiliaries building') }}</h1>
                                                    <a href="/heavy/#building"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Read More') }}</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="mt-5 text-lg font-medium tracking-tight leading-6 capitalize sm:text-xl font-inter">
                                    {{ __('Achieve your most beautiful dreams!') }} <span
                                        class="text-merah">{{ __('Build a dream home') }}</span>
                                    {{ __('that represents your life story. Start your journey to') }} <span
                                        class="text-merah">{{ __('comfort and satisfaction') }}</span>
                                    {{ __('today. Consult with us and make your dream home a') }} <span
                                        class="text-merah">{{ __('reality') }}</span>.
                                </div>
                                <div class="flex justify-center mt-10">
                                    <div class="grid grid-cols-2 gap-5 lg:grid-cols-4">

                                        <div class="card hover:cursor-pointer h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/heavy/light-building-2.png') }}"
                                                class="object-cover w-full h-full">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        {{ __('New Building') }}</h1>
                                                    <a href="/light/#new-building"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Read More') }}</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card hover:cursor-pointer h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/heavy/renovation-1.png') }}"
                                                class="object-cover w-full h-full">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        {{ __('Renovation') }}</h1>
                                                    <a href="/light/#renovation"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Read More') }}</span>
                                                        <span
                                                            class="absolute inset-0 rounded-full border-2 border-tombol"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card hover:cursor-pointer h-52 sm:h-[350px] lg:h-72 2xl:h-[350px]">
                                            <img src="{{ asset('img/general/heavy/interior-3.webp') }}"
                                                class="object-cover w-full h-full">
                                            <div class="container flex justify-center items-center self-center mx-auto">
                                                <div class="flex flex-col justify-center items-center self-center info">
                                                    <h1
                                                        class="text-sm font-bold text-center uppercase font-inter sm:text-xl">
                                                        {{ __('Interior Furniture') }}</h1>
                                                    <a href="/light/#interior"
                                                        class="inline-block overflow-hidden relative justify-start items-center px-3 py-2 mt-5 font-bold rounded-full sm:px-5 group">
                                                        <span
                                                            class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                                                        <span
                                                            class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                                                        <span
                                                            class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Read More') }}</span>
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
    {{-- end section our service --}}

    {{-- section Portfolio --}}
    <section class="relative pb-10 h-auto bg-hitam">
        <div class="container relative mx-auto">
            <div class="absolute top-14 left-20 z-10 sm:top-20 xl:left-32 bouncing-ball">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 rotate-180 sm:w-32 xl:w-52" viewBox="0 0 321 325"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                        fill="#C22030" />
                </svg>
            </div>
            <div class="absolute left-5 top-32 z-10 lg:top-40 xl:top-52 lg:left-0 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 rotate-180 sm:w-20 xl:w-32" viewBox="0 0 181 177"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#C22030" />
                </svg>
            </div>
            <div
                class="flex absolute top-1/2 left-1/2 z-10 justify-center mt-20 text-5xl font-bold text-white uppercase transform -translate-x-1/2 -translate-y-1/2 lg:text-7xl font-inter animate__animated animate__fadeInUp">
                {{ __('portfolio') }}
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper portfolioswiper">
            <div class="swiper-wrapper">
                @forelse ($portofolio as $p)
                    <div class="relative swiper-slide">
                        <div class="h-[90vh] lg:h-screen pl-6 lg:pl-96">
                            <img src="{{ $p ? $p->getFirstMediaUrl('portofolio') : asset('img/general/bg-banner.webp') }}"
                                class="object-cover w-full h-full" alt="portfolio">
                        </div>
                        <div
                            class="absolute w-full h-full bg-gradient-to-r from-[#191919] lg:from-[#191919] to-transparent top-0 left-0">

                            <div class="container mx-auto">
                                <div
                                    class="text-white mt-40 min-[1800px]:mt-72 ml-3 sm:ml-20 lg:ml-0 xl:ml-40 w-full xl:w-1/2">
                                    <p
                                        class="text-2xl lg:text-5xl relative z-20 font-league uppercase font-bold text-shadow-[0_4px_8px_#6d1f1f]">
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
                                            $collection = Media::where('model_id', $p->id)
                                                ->where('collection_name', 'another_portofolio')
                                                ->take(6)
                                                ->get();
                                        @endphp
                                        @forelse ($collection as $item)
                                            <div class="w-32 h-32 bg-white sm:w-52 sm:h-52 lg:h-32">
                                                <img src="{{ $item->original_url }}" class="object-cover w-full h-full"
                                                    alt="Portofolio">
                                            </div>
                                        @empty
                                            <div class="w-32 h-32 bg-white sm:w-52 sm:h-52 lg:h-32">
                                            </div>
                                            <div class="w-32 h-32 bg-white sm:w-52 sm:h-52 lg:h-32">
                                            </div>
                                            <div class="w-32 h-32 bg-white sm:w-52 sm:h-52 lg:h-32">
                                            </div>
                                            <div class="w-32 h-32 bg-white sm:w-52 sm:h-52 lg:h-32">
                                            </div>
                                            <div class="w-32 h-32 bg-white sm:w-52 sm:h-52 lg:h-32">
                                            </div>
                                            <div class="w-32 h-32 bg-white sm:w-52 sm:h-52 lg:h-32">
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="h-screen">

                    </div>
                @endforelse






            </div>
            <div class="px-6 pagiport"></div>
        </div>

        <div class="flex justify-center my-10">
            <a href="/portofolio"
                class="inline-block overflow-hidden relative justify-start items-center px-5 py-3 mt-5 font-bold rounded-full group">
                <span
                    class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                <span
                    class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                <span
                    class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Show More') }}</span>
                <span class="absolute inset-0 rounded-full border-2 border-tombol"></span>
            </a>
        </div>
    </section>
    {{-- end section portfolio --}}

    {{-- section roadmap --}}
    <section
        class="min-h-screen bg-[url('../../public/img/general/bg-roadmap.webp')] bg-no-repeat bg-cover bg-center relative z-10 overflow-hidden">
        <div class="absolute top-14 left-20 sm:top-96 xl:left-32 bouncing-ball">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 rotate-180 sm:w-32 lg:w-52" viewBox="0 0 321 325"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M42.4253 0.425293L3.42829e-06 37.2568L0 324.747H278.794L320.486 287.496V138.288H182.367V0.425293H42.4253ZM43.0034 1.95989L2.34106 37.2568H139.904L179.583 1.95989H43.0034ZM140.676 174.184V38.6244L180.833 2.90229V138.68L140.676 174.184ZM181.857 139.822L141.935 175.119H277.773L317.973 139.822H181.857ZM318.951 141.006L278.794 176.265V322.689L318.951 286.801V141.006ZM1.53465 323.213H277.26V176.654H139.141V38.7915H1.53465V323.213Z"
                    fill="#C22030" />
            </svg>
        </div>
        <div class="absolute top-10 right-20 lg:top-10 bouncing-cube">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 rotate-180 sm:w-20 lg:w-32" viewBox="0 0 181 177"
                fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                    fill="#C22030" />
            </svg>
        </div>
        <div class="container relative mx-auto h-32 sm:h-24 lg:h-32">
            <h1
                class="text-stroke uppercase absolute 2xl:right-52 text-5xl sm:text-[4rem] lg:text-[5rem] sm:left-20 lg:left-32 xl:left-64 sm:translate-x-0 top-7 lg:top-10 left-1/2 transform -translate-x-1/2 2xl:left-48 text-center font-league">
                Business Roadmap
            </h1>
            <div
                class="absolute text-transparent bg-clip-text bg-white uppercase text-5xl sm:text-[4rem] lg:text-[5rem] sm:left-20 lg:left-32 xl:left-64 sm:translate-x-0 top-10 lg:top-16 left-1/2 transform -translate-x-1/2 2xl:left-96 text-center font-[800] font-league">
                <h2 class="">
                    Business Roadmap
                </h2>
            </div>
        </div>
        <div class="container relative p-6 mx-auto">
            <div class="text-center text-white font-inter sm:text-xl">
                {{ __('Benefit from the services we provide for you, be part of our partners.') }}
            </div>
        </div>
        <div class="container flex relative z-10 justify-center mx-auto space-x-2 sm:p-6">
            <div class="flex flex-col sm:flex-row">
                <div class="p-6 lg:p-10 sm:w-96 lg:w-1/2 xl:w-[600px]">
                    <h4
                        class="text-center uppercase text-shadow-[0_4px_8px_#6d1f1f] text-white font-league font-bold text-4xl">
                        b2c
                    </h4>
                    <div class="mb-5 text-center text-white font-inter">
                        {{ __('Business to Client') }}
                    </div>
                    <div class="w-full">
                        <div id="accordion-color" data-accordion="collapse"
                            data-active-classes="bg-merah text-white font-bold">
                            <h2 id="accordion-color-heading-1">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                                    aria-controls="accordion-color-body-1">
                                    <span class="text-left text-white">1. {{ __('Site Survey') }}</span>
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
                                    <p class="text-white font-inter">
                                        {{ __('Almost all work at Maestro must begin with carrying out a survey so that you can convey all the details of your building dreams to us so that we can analyze them properly.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-2">
                                <button type="button"
                                    class="flex gap-3 justify-between p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-2" aria-expanded="true"
                                    aria-controls="accordion-color-body-2">
                                    <span class="text-left text-white">2.
                                        {{ __('Drawing and Design Consultation') }}</span>
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
                                    <p class="mb-2 text-white font-inter">
                                        {{ __('Helping you design the ideal drawings and designs for your construction or renovation project. Our team of experts will work closely with you to understand your needs, tastes and vision. This consultation helps ensure that every detail, from the layout to the decorative elements, matches your expectations, so that your project can be realized with satisfactory results.') }}
                                    </p>

                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-3">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-3" aria-expanded="true"
                                    aria-controls="accordion-color-body-3">
                                    <span class="text-left text-white">3. {{ __('Making BoQ and RAB') }}</span>
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
                                    <p class="mb-2 text-white font-inter">
                                        {{ __('The Budget Plan submission stage will take place after the drawing consultation stage is complete. After that, send us your budget, and we will compile a Budget Plan (RAB) that suits your needs and budget. In the RAB, we detail every detail, including the work, material specifications, project duration, and cost of each component. Study our RAB and customize it to your liking - add or subtract work according to your needs. We are ready to help you realize your project precisely according to the budget you have.') }}
                                    </p>

                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-4">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-4" aria-expanded="true"
                                    aria-controls="accordion-color-body-4">
                                    <span class="text-left text-white">4. {{ __('Job Execution') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-3">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">
                                        {{ __('A carefully planned construction project begins execution by a team of skilled contractors. Engineers, construction workers, and project managers join in a collaborative effort to ensure that each stage of the project runs smoothly according to the set schedule and quality standards. From land preparation to completion of the main structure, each step is overseen with rigor and care, with effective communication being the key to success.') }}
                                    </p>

                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-5">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-5" aria-expanded="true"
                                    aria-controls="accordion-color-body-5">
                                    <span class="text-left text-white">5. {{ __('Work Addendum') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-3">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">
                                        {{ __('Work addendums become an important element in project dynamics when changes or additions are required to respond to changing needs or emerging constraints. A work addendum may include adjustments to the scope of work, changes to the schedule, or additional costs needed to address changing project circumstances. This process requires good coordination between the project owner and the contractor, with the aim of reaching a fair and mutually beneficial agreement.') }}
                                    </p>

                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-6">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-6" aria-expanded="true"
                                    aria-controls="accordion-color-body-6">
                                    <span class="text-left text-white">6. {{ __('Handover of Work') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-3">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="mb-2 text-white font-inter">
                                        {{ __('Deliverables are transferred from the project implementation team to the party that will manage or utilize them. The team responsible for handing over the work should ensure that all documents, technical information, and operational instructions have been fully and clearly conveyed to the recipient. In addition, the handover process involves effective communication and deep understanding between both parties to ensure seamless continuity of tasks or operations.') }}
                                    </p>

                                </div>
                            </div>
                            <div class="my-3"></div>

                        </div>

                    </div>
                </div>
                <div class="p-6 lg:p-10 sm:w-96 lg:w-1/2 xl:w-[600px]">
                    <h4
                        class="text-center uppercase text-shadow-[0_4px_8px_#6d1f1f] text-white font-league font-bold text-4xl">
                        b2b
                    </h4>
                    <div class="mb-5 text-center text-white font-inter">
                        {{ __('Business to Business') }}
                    </div>
                    <div class="w-full">
                        <div id="accordion-color1" data-accordion="collapse"
                            data-active-classes="bg-merah text-white font-bold">
                            <h2 id="accordion-color-heading-7">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-7" aria-expanded="true"
                                    aria-controls="accordion-color-body-7">
                                    <span class="text-left text-white">1. {{ __('Get Tender Information') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('Tender information is a crucial step for companies or interested parties in the business world. This process involves searching for and receiving information related to announcements or requests for bids from various institutions or organizations.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-8">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-8" aria-expanded="true"
                                    aria-controls="accordion-color-body-8">
                                    <span class="text-left text-white">2.
                                        {{ __('Retrieve Tender Requirements and BoQ Documents') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-8" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('The tender requirements include information about the project, contract terms, as well as technical and administrative instructions that interested prospective contractors must fulfill. Meanwhile, the BoQ document details the quantities and types of materials, works, and services required in the project, along with cost estimates for each item.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-9">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-9" aria-expanded="true"
                                    aria-controls="accordion-color-body-9">
                                    <span class="text-left text-white">3.
                                        {{ __('Collection of RAB Bidding Document Files') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-9" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('RAB bidding documents include cost breakdowns for all work, materials, and services required in the project. A complete and accurate RAB bid document file provides the basis for contractors to submit competitive bids that meet the project specifications.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-10">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-10" aria-expanded="true"
                                    aria-controls="accordion-color-body-10">
                                    <span class="text-left text-white">4.
                                        {{ __('Determination od Tender Winner') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-10" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('The determination of the tender winner is the final stage in the tender process of a construction or development project, where the project organizer or procurement agency evaluates all bids received from contractors.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-11">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-11" aria-expanded="true"
                                    aria-controls="accordion-color-body-11">
                                    <span class="text-left text-white">5. {{ __('Work Contract') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-11" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('This document contains details about the technical requirements, scope of work, timeframe, and payment that form the basis for the implementation of a project or service. The work contract creates a legal basis that regulates the relationship between the two parties, determines their respective rights and obligations, and provides clarity on performance standards and expected service levels.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-12">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-12" aria-expanded="true"
                                    aria-controls="accordion-color-body-12">
                                    <span class="text-left text-white">6.
                                        {{ __('Survey, Measurement & Job Execution') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-12" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('Surveying, measuring and execution of works are crucial stages in construction projects that involve mapping and physical implementation of design plans.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-13">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-13" aria-expanded="true"
                                    aria-controls="accordion-color-body-13">
                                    <span class="text-left text-white">7. {{ __('Work Addendum') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-13" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('A work addendum is an official document that contains changes or additions to the original work contract of a construction or service project. These addendums can arise for a variety of reasons, such as changes in the scope of work, design changes, or additional conditions that arise during project execution.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="my-3"></div>
                            <h2 id="accordion-color-heading-14">
                                <button type="button"
                                    class="flex gap-3 justify-between items-center p-5 w-full font-medium text-white bg-hitam rtl:text-right hover:bg-merah font-inter"
                                    data-accordion-target="#accordion-color-body-14" aria-expanded="true"
                                    aria-controls="accordion-color-body-14">
                                    <span class="text-left text-white">8. {{ __('Handover of Work') }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-color-body-14" class="hidden" aria-labelledby="accordion-color-heading-1">
                                <div class="p-5 border-2 border-merah bg-hitam">
                                    <p class="text-white font-inter">
                                        {{ __('Handover of work is the final stage in a construction or service project, where the contractor formally hands over the work to the employer or project owner. This process involves a joint evaluation of the completed work, ensuring that it conforms to the specifications and standards set out in the contract.') }}
                                    </p>
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
                {{ __('REGISTER AS COLLABORATOR') }}
            </a>
        </div>
    </section>
    {{-- end section roadmap --}}

    {{-- section  Legality --}}
    <section class="relative bg-white">
        <div class="flex absolute right-0 -top-32 sm:-top-40 2xl:-top-80">
            <div class="flex relative">
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
        <div class="container relative z-10 p-6 mx-auto">
            <div class="mt-20 text-4xl font-bold text-center uppercase md:text-6xl font-inter">
                {{ __('Legality') }}
            </div>

        </div>

        <div id="tranding" class="container p-6 mx-auto lg:p-0">
            <div class="container">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="{{ asset('img/general/legal-corp-1.png') }}" alt="Tranding">
                            </div>
                            <div class="hidden mt-20 text-center sm:mt-32 keterangan lg:block">
                                <p class="text-2xl font-bold uppercase font-inter sm:text-4xl">
                                    PB-umku: 122600345236200050001
                                </p>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="{{ asset('img/general/legal-corp-2.png') }}" alt="Tranding">
                            </div>
                            <div class="hidden mt-20 text-center sm:mt-32 keterangan lg:block">
                                <p class="text-2xl font-bold uppercase font-inter sm:text-4xl">
                                    PB-umku: 122600345236200040001
                                </p>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="{{ asset('img/general/legal-corp-3.png') }}" alt="Tranding">
                            </div>
                            <div class="hidden mt-20 text-center sm:mt-32 keterangan lg:block">
                                <p class="text-2xl font-bold uppercase font-inter sm:text-4xl">
                                    PB-umku: 122600345236200060001
                                </p>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="{{ asset('img/general/legal-corp-1.png') }}" alt="Tranding">
                            </div>
                            <div class="hidden mt-20 text-center sm:mt-32 keterangan lg:block">
                                <p class="text-2xl font-bold uppercase font-inter sm:text-4xl">
                                    PB-umku: 12260034523620005001
                                </p>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="{{ asset('img/general/legal-corp-2.png') }}" alt="Tranding">
                            </div>
                            <div class="hidden mt-20 text-center sm:mt-32 keterangan lg:block">
                                <p class="text-2xl font-bold uppercase font-inter sm:text-4xl">
                                    PB-umku: 122600345236200040001
                                </p>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="{{ asset('img/general/legal-corp-3.png') }}" alt="Tranding">
                            </div>
                            <div class="hidden mt-20 text-center sm:mt-32 keterangan lg:block">
                                <p class="text-2xl font-bold uppercase font-inter sm:text-4xl">
                                    PB-umku: 122600345236200060001
                                </p>
                            </div>
                        </div>
                        <!-- Slide-end -->

                    </div>
                </div>
                <div class="hidden absolute left-20 top-96 z-10 justify-between lg:flex">
                    <div class="swiper-legal-prev">
                        <div class="flex justify-center items-center self-center w-20 h-20 text-2xl rounded-full bg-merah">
                            <div>
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 8 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden absolute right-20 top-96 z-10 justify-between lg:flex">
                    <div class="swiper-legal-next">
                        <div class="flex justify-center items-center self-center w-20 h-20 text-2xl rounded-full bg-merah">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="pagilegal"></div>
            </div>
        </div>


        <div class="flex justify-center mb-10">
            <a href="/about/#legal"
                class="inline-block overflow-hidden relative justify-start items-center px-5 py-3 mt-5 font-bold rounded-full group">
                <span
                    class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                <span
                    class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                <span
                    class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Show More') }}</span>
                <span class="absolute inset-0 rounded-full border-2 border-tombol"></span>
            </a>
        </div>
    </section>
    {{-- end section legality --}}

    {{-- section sertifikasi --}}
    <!--<section class="overflow-hidden relative bg-white">-->
    <!--    <div class="flex absolute right-0 -top-32 sm:-top-40 2xl:-top-80">-->
    <!--        <div class="flex relative">-->
    <!--            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 w-40 sm:w-52 2xl:w-80" viewBox="0 0 245 529" fill="none">-->
    <!--                <path opacity="0.71" d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z" stroke="#C22030"/>-->
    <!--            </svg>-->
    <!--            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-24 w-40 sm:w-52 2xl:w-80 sm:right-32 2xl:right-48" viewBox="0 0 245 529" fill="none">-->
    <!--                <path opacity="0.71" d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z" stroke="#C22030"/>-->
    <!--            </svg>-->
    <!--            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-48 w-40 sm:w-52 2xl:w-80 sm:right-64 2xl:right-96" viewBox="0 0 245 529" fill="none">-->
    <!--                <path opacity="0.71" d="M168.923 1.4707H185.482V142.137L100.212 264.348L100.036 264.601L100.183 264.873L243.479 528.5H185.982H143.606L0.580139 253.746L168.923 1.4707Z" stroke="#C22030"/>-->
    <!--            </svg>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="container relative z-10 p-6 mx-auto">-->
    <!--        @if (App::getLocale() == 'id')
    -->
    <!--        <div class="mt-20 text-4xl font-bold text-center uppercase md:text-6xl font-inter">-->
    <!--            Sertifikasi-->
    <!--        </div>-->
<!--        @else-->
    <!--        <div class="mt-20 text-4xl font-bold text-center uppercase md:text-6xl font-inter">-->
    <!--            Certification-->
    <!--        </div>-->
    <!--
    @endif-->

    <!--    </div>-->

    <!--    <div class="container relative z-10 p-6 mx-auto">-->
    <!--        <div class="container">-->
    <!--            <div class="grid grid-cols-3 gap-5 mb-10 md:grid-cols-5">-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <img src="{{ asset('img/general/sertifikasi/SKK Bangunan Gedung.png') }}" alt="sertifikat">-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">SKK Bangunan Gedung</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <img src="{{ asset('img/general/sertifikasi/SKK Perawatan Bangunan.png') }}" alt="sertifikat">-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">SKK Perawatan Bangunan</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <img src="{{ asset('img/general/sertifikasi/SKK Geoteknik.png') }}" alt="sertifikat">-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">SKK Geoteknik</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <img src="{{ asset('img/general/sertifikasi/SKK Teknik Plumbing.png') }}" alt="sertifikat">-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">SKK Teknik Plumbing</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <img src="{{ asset('img/general/sertifikasi/SKK Ahli Teknik Bangunan.png') }}" alt="sertifikat">-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">SKK Ahli Teknik Bangunan</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="grid grid-cols-2 gap-5 xl:grid-cols-4">-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <div class="overflow-hidden w-32 h-32 md:w-72 md:h-72 2xl:w-96 2xl:h-96">-->
    <!--                        <img src="{{ asset('img/general/sertifikasi/STRA Madya.png') }}" class="object-contain w-full h-full" alt="sertifikat">-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">STRA Madya</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <div class="overflow-hidden w-32 h-32 md:w-72 md:h-72 2xl:w-96 2xl:h-96">-->
    <!--                        <img src="{{ asset('img/general/sertifikasi/SERKOM.png') }}" class="object-contain w-full h-full" alt="sertifikat">-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">SERKOM</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <div class="overflow-hidden w-32 h-32 md:w-72 md:h-72 2xl:w-96 2xl:h-96">-->
    <!--                        <img src="{{ asset('img/general/sertifikasi/Certified International Project Manager.png') }}" class="object-contain w-full h-full" alt="sertifikat">-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">Certified Internasional Project Manager</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="flex flex-col gap-2 items-center text-center">-->
    <!--                    <div class="overflow-hidden w-32 h-32 md:w-72 md:h-72 2xl:w-96 2xl:h-96">-->
    <!--                        <img src="{{ asset('img/general/sertifikasi/SKK Manajemen Energi.png') }}" class="object-contain w-full h-full" alt="sertifikat">-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <h1 class="text-xs md:text-base text-[#191919] font-bold text-center font-inter">SKK Manajemen Energi</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    {{-- end section sertifikasi --}}

    {{-- section video --}}
    <section>
        <div
            class="bg-[url('../../public/img/general/bg-video.png')] lg:bg-center bg-right bg-no-repeat bg-cover h-auto overflow-hidden relative">

            <div class="container relative p-6 py-20 mx-auto lg:py-52">
                <div class="flex flex-col gap-0 lg:flex-row 2xl:gap-20">
                    <div class="lg:h-[55vh] w-full lg:w-[80%] relative">
                        <div class="swiper swipervideo">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div class="w-full lg:w-3/4 h-80 sm:h-96 lg:h-[70vh] min-[1800px]:h-[55vh]">
                                            <iframe title="YouTube video player" class="w-full h-full rounded-lg video"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen=""
                                                src="https://www.youtube.com/embed/Yr8qqeh4c4A?enablejsapi=1&rel=0"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div class="w-full lg:w-3/4 h-80 sm:h-96 lg:h-[70vh] min-[1800px]:h-[55vh]">
                                            <iframe title="YouTube video player" class="w-full h-full rounded-lg video"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen=""
                                                src="https://www.youtube.com/embed/Ygs9KI4Ez7g?enablejsapi=1&rel=0"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div class="w-full lg:w-3/4 h-80 sm:h-96 lg:h-[70vh] min-[1800px]:h-[55vh]">
                                            <iframe title="YouTube video player" class="w-full h-full rounded-lg video"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen=""
                                                src="https://www.youtube.com/embed/EUok52vNg4E?enablejsapi=1&rel=0"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div class="w-full lg:w-3/4 h-80 sm:h-96 lg:h-[70vh] min-[1800px]:h-[55vh]">
                                            <iframe title="YouTube video player" class="w-full h-full rounded-lg video"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen=""
                                                src="https://www.youtube.com/embed/zalR4AugQQA?enablejsapi=1&rel=0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:flex absolute top-32 sm:top-40 min-[1800px]:top-52 left-0 lg:left-24 z-10">
                            <div class="swiper-video-prev">
                                <div
                                    class="flex justify-center items-center self-center w-14 h-14 text-2xl bg-white rounded-full shadow-2xl drop-shadow-2xl lg:w-20 lg:h-20">
                                    <div>
                                        <svg class="w-6 h-6 text-tombol" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex absolute top-32 sm:top-40 min-[1800px]:top-52 right-0 lg:right-24 z-10">
                            <div class="swiper-video-next">
                                <div
                                    class="flex justify-center items-center self-center w-14 h-14 text-2xl bg-white rounded-full shadow-2xl rop-shadow-2xl lg:w-20 lg:h-20">
                                    <svg class="w-6 h-6 text-tombol" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                    </svg>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="w-full lg:w-[20%] mt-10 lg:mt-0">
                        <h3
                            class="text-5xl font-bold text-center text-white uppercase lg:text-left font-inter 2xl:text-8xl">
                            {{ __('Video') }}
                        </h3>
                        <p class="text-lg text-center text-white sm:text-xl lg:text-left font-inter">
                            {{ __('We are proud to present the works of PT. KINARYA MAESTRO NUSANTARA in our various projects.') }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- end section video --}}

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
                                class="object-contain w-full h-full" alt="magazine">
                        </div>
                    </div>
                </a>

                <div class="lg:w-full lg:flex lg:justify-center lg:items-center lg:self-center">
                    <div class="swiper swipermagazine">
                        <div class="swiper-wrapper">
                            @forelse ($maesgazine as $item)
                                @php
                                    $magazine = Media::where('model_id', $item->id)
                                        ->where('collection_name', 'maesgazine')
                                        ->get();
                                    $magazine2 = Media::where('model_id', $item->id)
                                        ->where('collection_name', 'pdf')
                                        ->get();
                                @endphp
                                @foreach ($magazine as $m)
                                    @foreach ($magazine2 as $m2)
                                        <div class="swiper-slide">
                                            <a href="{{ $m2->original_url }}" target="_blank">
                                                <div class="h-[60vh]">
                                                    <img src="{{ $m->original_url }}"
                                                        class="object-contain w-full h-full" alt="magazine">
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endforeach

                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute w-full h-full top-0 left-0"
            style="background: linear-gradient(to right, #191919 0%, transparent 100%);">
        </div>
        <div class="flex justify-center mb-20 lg:mb-10">
            <a href="/maesgazine"
                class="inline-block overflow-hidden relative justify-start items-center px-5 py-3 mt-5 font-bold rounded-full group">
                <span
                    class="w-full rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-tombol opacity-[3%]"></span>
                <span
                    class="absolute top-0 left-0 -mt-1 w-48 h-48 opacity-100 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-tombol group-hover:-translate-x-8"></span>
                <span
                    class="relative w-full text-left uppercase transition-colors duration-200 ease-in-out text-tombol group-hover:text-white">{{ __('Show More') }}</span>
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
    <section class="bg-[url('../../public/img/general/bg-testimonial.webp')] bg-no-repeat bg-cover h-auto overflow-hidden">
        <div class="container px-20 pt-20 pb-5 mx-auto">
            <div
                class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase">
                {{ __('What Our') }}
            </div>
            <div
                class="bg-clip-text text-transparent bg-[linear-gradient(180deg,_#fff_42%,_#191919_100%)] text-4xl sm:text-6xl 2xl:text-8xl font-bold font-inter uppercase -mt-3 lg:-mt-5">
                {{ __('Client Say') }}
            </div>
        </div>

        <div class="container flex relative justify-center mx-auto lg:p-6">
            <div class="my-5 swiper testi-slider sm:my-20">
                <div class="swiper-wrapper">
                    @forelse ($testimoni as $item)
                        <!-- Slide-start -->
                        <div class="swiper-slide testi-slide">
                            <div class="testi-slide-img">
                                <div class="sm:w-[500px] sm:h-[450px] w-96 h-96">
                                    <div class="w-full h-full bg-center bg-no-repeat bg-cover rounded-xl"
                                        style="background-image: url('{{ $item ? $item->getFirstMediaUrl('testimonial') : asset('img/general/bg-testimonial.webp') }}')">
                                        <div class="my-custom-gradient w-full h-full rounded-xl p-10 text-white">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-14 h-14 bg-no-repeat bg-cover rounded-full"
                                                    style="background-image: url('{{ $item ? $item->getFirstMediaUrl('profile') : asset('img/general/bg-testimonial.webp') }}')">
                                                </div>
                                                <div class="flex flex-col">
                                                    <div class="font-bold uppercase font-league">
                                                        {{ $item->name }}
                                                    </div>
                                                    <div class="text-lg font-league">
                                                        {{ $item->project }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10">
                                                <div class="text-lg font-league">
                                                    {!! $item->testimoni !!}
                                                </div>
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



            </div>
            <div class="hidden absolute left-0 top-72 z-10 justify-between lg:flex group">
                <div class="swiper-testi-prev">
                    <div
                        class="flex justify-center items-center self-center w-20 h-20 text-2xl bg-white rounded-full shadow-2xl drop-shadow-2xl group-hover:bg-merah">
                        <div>
                            <svg class="w-6 h-6 text-merah group-hover:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden absolute right-0 top-72 z-10 justify-between lg:flex group">
                <div class="swiper-testi-next">
                    <div
                        class="flex justify-center items-center self-center w-20 h-20 text-2xl bg-white rounded-full shadow-2xl drop-shadow-2xl group-hover:bg-merah">
                        <svg class="w-6 h-6 text-merah group-hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end section testimonialial --}}
@endsection
@section('kaki')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            loop: true,
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },

        });
    </script>
    <script>
        var swiper = new Swiper(".swiperService", {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: false,
            loop: true,
            keyboard: {
                enabled: true,
            },
            breakpoints: {
                769: {
                    slidesPerView: 1,
                },
            },
            pagination: {
                el: ".paginat",
                clickable: true,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".portfolioswiper", {
            loop: true,
            autoplay: {
                delay: 2500,
            },
            pagination: {
                el: ".pagiport",
                clickable: true,
            },
        });
    </script>

    <script>
        var TrandingSlider = new Swiper('.tranding-slider', {
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
            pagination: {
                el: ".pagilegal",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-legal-next',
                prevEl: '.swiper-legal-prev',
            }
        });
    </script>
    <script>
        var youtubeSwiper = new Swiper(".swipervideo", {
            loop: true,
            autoplay: false,
            navigation: {
                nextEl: ".swiper-video-next",
                prevEl: ".swiper-video-prev",
            },
            on: {
                slideChange: function(el) {
                    $('.swiper-slide').each(function() {
                        var youtubePlayer = $(this).find('iframe').get(0);
                        if (youtubePlayer) {
                            youtubePlayer.contentWindow.postMessage(
                                '{"event":"command","func":"pauseVideo","args":""}', '*');
                        }
                    });
                },
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swipermagazine", {
            slidesPerView: 4,
            spaceBetween: 2,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script>
        var swiper = new Swiper('.testi-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 2000,
            },
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                nextEl: '.swiper-testi-next',
                prevEl: '.swiper-testi-prev',
            },
        });
    </script>
@endsection

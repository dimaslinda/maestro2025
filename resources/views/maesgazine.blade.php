@extends('layouts.main')

@section('kepala')
    @include('components.schema-org')
    @php
        use Spatie\MediaLibrary\MediaCollections\Models\Media;
    @endphp
@endsection

@section('konten')
    {{-- Hero Section --}}
    <section class="h-auto bg-hitam mt-24 relative overflow-hidden">
        {{-- Background Image --}}
        <div class="bg-hitam/90 h-full absolute">
            <img src="{{ $maesgazinelast ? $maesgazinelast->getFirstMediaUrl('maesgazine') : asset('img/general/bg-banner.webp') }}"
                alt="Latar Belakang Maesgazine">
        </div>

        <div class="bg-hitam/90 h-full relative">
            {{-- Animated Cube --}}
            <div class="absolute top-20 right-2 sm:right-5 xl:right-20 bouncing-cube">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 sm:w-20 lg:w-32 rotate-180" viewBox="0 0 181 177"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M41.419 0.849609L0.0200195 37.1696V176.311H139.161L180.085 139.569V0.849609H41.419ZM42.004 2.38426L2.34702 37.1696H138.103L177.298 2.38426H42.004ZM178.551 3.32403L139.161 38.282V174.248L178.551 138.879V3.32403ZM1.55502 174.776H137.627V38.7042H1.55502V174.776Z"
                        fill="#EFBF04" />
                </svg>
            </div>

            {{-- Hero Content --}}
            <div class="container mx-auto p-6 sm:p-10 lg:p-32 relative">
                <div class="flex flex-col lg:flex-row justify-center space-x-0">
                    {{-- Desktop Image --}}
                    <div class="relative w-full hidden lg:block">
                        <div class="absolute w-96 lg:right-10">
                            <img src="{{ $maesgazinelast ? $maesgazinelast->getFirstMediaUrl('maesgazine') : asset('img/general/bg-banner.webp') }}"
                                class="w-full h-full object-contain" alt="Sampul Maesgazine">
                        </div>
                    </div>

                    {{-- Mobile Image --}}
                    <div class="flex justify-center items-center self-center mb-5 lg:mb-0 relative w-1/2 lg:hidden">
                        <div class="relative lg:absolute lg:w-96">
                            <img src="{{ $maesgazinelast ? $maesgazinelast->getFirstMediaUrl('maesgazine') : asset('img/general/bg-banner.webp') }}"
                                class="w-full h-full object-contain" alt="Sampul Maesgazine">
                        </div>
                    </div>

                    {{-- Hero Text and CTA --}}
                    <div
                        class="w-full flex flex-col justify-center items-center self-center lg:justify-start lg:items-start lg:self-start">
                        <h2
                            class="text-white font-bold uppercase text-4xl text-center lg:text-left sm:text-5xl font-inter mb-2">
                            Unduh Gratis
                        </h2>
                        <h3 class="text-white font-bold uppercase text-4xl text-center lg:text-left sm:text-5xl font-inter">
                            Maesgazine
                        </h3>
                        <p class="text-white font-inter font-extralight text-center lg:text-left">
                            Dapatkan referensi rumah impian Anda!
                        </p>
                        <a href="{{ $maesgazinelast ? $maesgazinelast->getFirstMediaUrl('pdf') : '#' }}"
                            class="px-10 py-3 rounded-full border-2 text-tombol border-tombol font-bold uppercase mt-5 hover:bg-tombol hover:text-white transition-all ease-in-out duration-300">
                            Unduh Maesgazine
                        </a>
                    </div>
                </div>
            </div>
            <div class="pb-10"></div>
        </div>
    </section>

    {{-- Magazine Grid Section --}}
    <section class="h-auto py-10 lg:py-20">
        <div class="container mx-auto p-6">
            <div class="flex justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @forelse ($maesgazine as $item)
                        @php
                            $coverMedia = Media::where('model_id', $item->id)
                                ->where('collection_name', 'maesgazine')
                                ->first();
                            $pdfMedia = Media::where('model_id', $item->id)->where('collection_name', 'pdf')->first();
                        @endphp

                        @if ($coverMedia && $pdfMedia)
                            <a href="{{ $pdfMedia->original_url }}" target="_blank"
                                class="hover:scale-110 group transition-all ease-in-out duration-500">
                                <div class="h-full w-full lg:max-h-[500px] lg:max-w-96">
                                    <img src="{{ $coverMedia->original_url }}" class="w-full h-full object-contain"
                                        alt="Maesgazine {{ $item->title ?? 'Sampul' }}">
                                </div>
                            </a>
                        @endif
                    @empty
                        {{-- Fallback Magazine Covers --}}
                        @php
                            $fallbackMagazines = [
                                'magazine-1.webp',
                                'magazine-2.webp',
                                'magazine-3.webp',
                                'magazine-4.webp',
                                'magazine-5.webp',
                                'magazine-6.webp',
                                'magazine-7.webp',
                                'magazine-8.webp',
                            ];
                        @endphp

                        @foreach ($fallbackMagazines as $magazine)
                            <a href="#" class="hover:scale-110 group transition-all ease-in-out duration-500">
                                <div class="h-full w-full lg:max-h-[500px] lg:max-w-96">
                                    <img src="{{ asset('img/general/' . $magazine) }}" class="w-full h-full object-contain"
                                        alt="Sampul Maesgazine">
                                </div>
                            </a>
                        @endforeach
                    @endforelse
                </div>
            </div>

            {{-- Pagination --}}
            <div class="container mx-auto lg:px-20 2xl:px-52 py-20">
                {{ $maesgazine->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </section>
@endsection
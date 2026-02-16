{{-- Tombol WhatsApp Melayang --}}
<a href="https://api.whatsapp.com/send?phone=6285656568527"
    class="fixed z-[100] bottom-10 right-5 transition-transform duration-300 hover:scale-110" target="_blank">
    <img src="{{ asset('img/general/wa.webp') }}" class="w-12 h-12 sm:w-16 sm:h-16" alt="Logo Whatsapp">
</a>

<footer class="bg-hitam py-8 font-league text-white mt-auto">
    <div class="container mx-auto px-4">
        {{-- Baris Ikon & Teks Sosial Media --}}
        <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-3 text-lg font-bold">
            <a href="https://www.instagram.com/kontraktormaestro/" target="_blank"
                class="flex items-center gap-2 hover:opacity-80">
                <ion-icon name="logo-instagram" class="text-2xl"></ion-icon>
                <span>Maestro Kontraktor</span>
            </a>
            <a href="https://www.linkedin.com/in/maestro-kontraktor-a23799265/" target="_blank"
                class="flex items-center gap-2 hover:opacity-80">
                <ion-icon name="logo-linkedin" class="text-2xl"></ion-icon>
                <span>Maestro Kontraktor</span>
            </a>
            <a href="https://www.youtube.com/@maestrokontraktor1202" target="_blank"
                class="flex items-center gap-2 hover:opacity-80">
                <ion-icon name="logo-youtube" class="text-2xl"></ion-icon>
                <span>Maestro Kontraktor</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=6285656568527" target="_blank"
                class="flex items-center gap-2 hover:opacity-80">
                <ion-icon name="logo-whatsapp" class="text-2xl"></ion-icon>
                <span>0856-5656-8527</span>
            </a>
        </div>

        {{-- Baris Alamat --}}
        <div class="mt-4 flex justify-center items-center gap-2 text-sm sm:text-base tracking-wide">
            <ion-icon name="pin" class="text-xl"></ion-icon>
            <span class="text-center font-medium">JL. Meruyung Raya Palem Ganda Asri No.13, Meruyung, Kec. Limo, Depok
                16532</span>
        </div>

        {{-- Copyright --}}
        <div class="mt-4 text-center text-xs sm:text-sm font-medium tracking-tight">
            <span>© PT. Kinarya Konstruksi, All Right Reserved.</span>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

@yield('kaki')
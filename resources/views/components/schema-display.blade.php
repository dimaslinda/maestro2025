{{-- Display Schema.org markup --}}
@if (isset($schemas) && is_array($schemas))
    @foreach ($schemas as $schema)
        <script type="application/ld+json">
                        {!! json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
                        </script>
    @endforeach
@endif

{{-- Display individual schema if provided --}}
@if (isset($schema))
    <script type="application/ld+json">
            {!! json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
            </script>
@endif

{{-- Default schemas for all pages --}}
@if (!isset($schemas) && !isset($schema))
    {{-- Organization Schema --}}
    <script type="application/ld+json">
            {
                "@@context": "https://schema.org",
                "@@type": "Organization",
                "name": "PT. KINARYA MAESTRO NUSANTARA",
                "alternateName": "Maestro",
                "url": "{{ url('/') }}",
                "logo": "{{ asset('img/general/logo.webp') }}",
                "description": "Perusahaan Kontraktor Umum berpengalaman di sektor konstruksi",
                "foundingDate": "2020",
                "address": {
                    "@@type": "PostalAddress",
                    "addressCountry": "ID",
                    "addressRegion": "Indonesia"
                },
                "contactPoint": {
                    "@@type": "ContactPoint",
                    "telephone": "+62-856-5656-8527",
                    "contactType": "customer service",
                    "availableLanguage": ["Indonesian"]
                },
                "sameAs": [
                    "https://api.whatsapp.com/send?phone=6285656568527"
                ],
                "areaServed": {
                    "@@type": "Country",
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

    {{-- WebSite Schema --}}
    <script type="application/ld+json">
            {
                "@@context": "https://schema.org",
                "@@type": "WebSite",
                "name": "Maestro - Konstruksi Berkualitas dengan Standar ISO",
                "url": "{{ url('/') }}",
                "description": "Bersertifikat ISO, kami memberikan solusi konstruksi berkualitas tinggi dengan standar internasional.",
                "publisher": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
            </script>

    {{-- LocalBusiness Schema --}}
    <script type="application/ld+json">
            {
                "@@context": "https://schema.org",
                "@@type": "LocalBusiness",
                "name": "PT. KINARYA MAESTRO NUSANTARA",
                "alternateName": "Maestro",
                "description": "Perusahaan Kontraktor Umum berpengalaman di sektor konstruksi",
                "url": "{{ url('/') }}",
                "telephone": "+62-856-5656-8527",
                "address": {
                    "@@type": "PostalAddress",
                    "addressCountry": "ID",
                    "addressRegion": "Indonesia"
                },
                "geo": {
                    "@@type": "GeoCoordinates",
                    "latitude": "-6.2088",
                    "longitude": "106.8456"
                },
                "openingHours": "Mo-Fr 08:00-17:00",
                "priceRange": "$$",
                "currenciesAccepted": "IDR",
                "paymentAccepted": "Cash, Bank Transfer",
                "areaServed": {
                    "@@type": "Country",
                    "name": "Indonesia"
                }
            }
            </script>

    {{-- FAQ Schema --}}
    <script type="application/ld+json">
            {
                "@@context": "https://schema.org",
                "@@type": "FAQPage",
                "mainEntity": [
                    {
                        "@@type": "Question",
                        "name": "Bagaimana proses untuk proyek konstruksi B2C?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Proses B2C meliputi: 1) Survei Lokasi, 2) Konsultasi Gambar dan Desain, 3) Pembuatan BoQ dan RAB, 4) Pelaksanaan Pekerjaan, 5) Addendum Pekerjaan, 6) Serah Terima Pekerjaan"
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Bagaimana proses untuk proyek konstruksi B2B?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Proses B2B meliputi: 1) Dapatkan Informasi Tender, 2) Ambil Dokumen Persyaratan Tender dan BoQ, 3) Pengumpulan File Dokumen Penawaran RAB, 4) Penetapan Pemenang Tender, 5) Kontrak Kerja, 6) Survei, Pengukuran & Pelaksanaan Pekerjaan, 7) Addendum Pekerjaan, 8) Serah Terima Pekerjaan"
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Layanan apa saja yang disediakan Maestro?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Maestro menyediakan layanan konstruksi komprehensif termasuk bangunan komersial, bangunan perumahan, infrastruktur, bangunan tambahan, konstruksi gedung baru, renovasi, dan layanan furnitur interior."
                        }
                    }
                ]
            }
            </script>
@endif
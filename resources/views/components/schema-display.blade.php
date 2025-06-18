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
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('img/general/logo.webp') }}",
        "description": "{{ __('A General Contractor Company with experience in the construction sector') }}",
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

    {{-- WebSite Schema --}}
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
        }
    }
    </script>

    {{-- LocalBusiness Schema --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro",
        "description": "{{ __('A General Contractor Company with experience in the construction sector') }}",
        "url": "{{ url('/') }}",
        "telephone": "+62-856-5656-8527",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID",
            "addressRegion": "Indonesia"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-6.2088",
            "longitude": "106.8456"
        },
        "openingHours": "Mo-Fr 08:00-17:00",
        "priceRange": "$$",
        "currenciesAccepted": "IDR",
        "paymentAccepted": "Cash, Bank Transfer",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        }
    }
    </script>

    {{-- FAQ Schema --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "{{ __('What is the process for B2C construction projects?') }}",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "{{ __('The B2C process includes: 1) Site Survey, 2) Drawing and Design Consultation, 3) Making BoQ and RAB, 4) Job Execution, 5) Work Addendum, 6) Handover of Work') }}"
                }
            },
            {
                "@type": "Question",
                "name": "{{ __('What is the process for B2B construction projects?') }}",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "{{ __('The B2B process includes: 1) Get Tender Information, 2) Retrieve Tender Requirements and BoQ Documents, 3) Collection of RAB Bidding Document Files, 4) Determination of Tender Winner, 5) Work Contract, 6) Survey, Measurement & Job Execution, 7) Work Addendum, 8) Handover of Work') }}"
                }
            },
            {
                "@type": "Question",
                "name": "{{ __('What services does Maestro provide?') }}",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "{{ __('Maestro provides comprehensive construction services including commercial building, house building, infrastructure, auxiliary building, new building construction, renovation, and interior furniture services.') }}"
                }
            }
        ]
    }
    </script>
@endif

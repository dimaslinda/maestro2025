{{-- Schema.org for Contact Page --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "{{ __('Contact Us') }} - Maestro",
    "description": "{{ __('Contact PT. KINARYA MAESTRO NUSANTARA for construction services and consultation') }}",
    "url": "{{ url('/contact') }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('img/general/logo.webp') }}",
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "+62-856-5656-8527",
                "contactType": "customer service",
                "availableLanguage": ["Indonesian", "English"],
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "hoursAvailable": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "08:00",
                    "closes": "17:00"
                }
            },
            {
                "@type": "ContactPoint",
                "contactType": "WhatsApp",
                "url": "https://api.whatsapp.com/send?phone=6285656568527",
                "availableLanguage": ["Indonesian", "English"],
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                }
            }
        ],
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID",
            "addressRegion": "Indonesia"
        }
    }
}
</script>

{{-- Schema.org for Contact Form --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "{{ __('Contact Form') }}",
    "description": "{{ __('Contact form for construction consultation and services') }}",
    "url": "{{ url('/contact') }}",
    "mainEntity": {
        "@type": "ContactPage",
        "name": "{{ __('Contact Us') }}",
        "description": "{{ __('Get in touch with Maestro for construction services and consultation') }}",
        "potentialAction": {
            "@type": "CommunicateAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "https://api.whatsapp.com/send?phone=6285656568527",
                "inLanguage": ["id", "en"],
                "actionPlatform": [
                    "http://schema.org/DesktopWebPlatform",
                    "http://schema.org/MobileWebPlatform"
                ]
            },
            "expectsAcceptanceOf": {
                "@type": "Offer",
                "category": "{{ __('Construction Consultation') }}",
                "offeredBy": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        }
    }
}
</script>

{{-- Schema.org for Business Hours --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "PT. KINARYA MAESTRO NUSANTARA",
    "alternateName": "Maestro",
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Monday",
            "opens": "08:00",
            "closes": "17:00"
        },
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Tuesday",
            "opens": "08:00",
            "closes": "17:00"
        },
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Wednesday",
            "opens": "08:00",
            "closes": "17:00"
        },
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Thursday",
            "opens": "08:00",
            "closes": "17:00"
        },
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Friday",
            "opens": "08:00",
            "closes": "17:00"
        }
    ],
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62-856-5656-8527",
        "contactType": "customer service",
        "availableLanguage": ["Indonesian", "English"],
        "hoursAvailable": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "08:00",
            "closes": "17:00"
        }
    }
}
</script>

{{-- Schema.org for Service Area --}}
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
    "areaServed": [
        {
            "@type": "Country",
            "name": "Indonesia"
        },
        {
            "@type": "AdministrativeArea",
            "name": "Jakarta"
        },
        {
            "@type": "AdministrativeArea",
            "name": "Jawa Barat"
        },
        {
            "@type": "AdministrativeArea",
            "name": "Jawa Tengah"
        },
        {
            "@type": "AdministrativeArea",
            "name": "Jawa Timur"
        }
    ],
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": "-6.2088",
            "longitude": "106.8456"
        },
        "geoRadius": "500000"
    }
}
</script>

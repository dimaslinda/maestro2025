{{-- Schema.org for About Page --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "{{ __('About') }} Maestro",
    "description": "{{ __('About PT. KINARYA MAESTRO NUSANTARA - A General Contractor Company with experience in the construction sector') }}",
    "url": "{{ url('/about') }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro",
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
}
</script>

{{-- Schema.org for Company History --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ __('About') }} PT. KINARYA MAESTRO NUSANTARA",
    "description": "{{ __('A General Contractor Company with experience in the construction sector') }}",
    "author": {
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA"
    },
    "publisher": {
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/general/logo.webp') }}"
        }
    },
    "datePublished": "2020-01-01",
    "dateModified": "{{ now()->format('Y-m-d') }}",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url('/about') }}"
    },
    "articleBody": "{{ __('Maestro is backed by a strong workforce with significant experience in the construction sector, demonstrating Maestro commitment to providing high-quality services.') }}"
}
</script>

{{-- Schema.org for Company Certifications --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "{{ __('Company Certifications') }}",
    "description": "{{ __('Legal certifications and licenses held by PT. KINARYA MAESTRO NUSANTARA') }}",
    "numberOfItems": 3,
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@type": "CreativeWork",
                "name": "PB-umku: 122600345236200050001",
                "description": "{{ __('Company registration certificate') }}"
            }
        },
        {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@type": "CreativeWork",
                "name": "PB-umku: 122600345236200040001",
                "description": "{{ __('Business license certificate') }}"
            }
        },
        {
            "@type": "ListItem",
            "position": 3,
            "item": {
                "@type": "CreativeWork",
                "name": "PB-umku: 122600345236200060001",
                "description": "{{ __('Construction license certificate') }}"
            }
        }
    ]
}
</script>

{{-- Schema.org for Company Services --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "{{ __('Company Services') }}",
    "description": "{{ __('Services offered by PT. KINARYA MAESTRO NUSANTARA') }}",
    "numberOfItems": 7,
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@type": "Service",
                "name": "{{ __('Commercial building') }}",
                "description": "{{ __('Commercial building construction services') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@type": "Service",
                "name": "{{ __('house building') }}",
                "description": "{{ __('Residential house construction services') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 3,
            "item": {
                "@type": "Service",
                "name": "{{ __('infrastructure') }}",
                "description": "{{ __('Infrastructure construction services') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 4,
            "item": {
                "@type": "Service",
                "name": "{{ __('auxiliaries building') }}",
                "description": "{{ __('Auxiliary building construction services') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 5,
            "item": {
                "@type": "Service",
                "name": "{{ __('New Building') }}",
                "description": "{{ __('New building construction services') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 6,
            "item": {
                "@type": "Service",
                "name": "{{ __('Renovation') }}",
                "description": "{{ __('Building renovation services') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 7,
            "item": {
                "@type": "Service",
                "name": "{{ __('Interior Furniture') }}",
                "description": "{{ __('Interior design and furniture services') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        }
    ]
}
</script>

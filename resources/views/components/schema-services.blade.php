{{-- Schema.org for Services Page --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Our Services",
    "description": "Comprehensive construction services offered by PT. KINARYA MAESTRO NUSANTARA",
    "numberOfItems": 7,
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@type": "Service",
                "name": "Commercial building",
                "description": "Commercial building construction services including office buildings, retail spaces, and commercial facilities",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA",
                    "alternateName": "Maestro"
                },
                "serviceType": "Construction",
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "offers": {
                    "@type": "Offer",
                    "category": "{{ __('Commercial Construction') }}",
                    "offeredBy": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                    }
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@type": "Service",
                "name": "{{ __('house building') }}",
                "description": "{{ __('Residential house construction services for individual homes and housing complexes') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA",
                    "alternateName": "Maestro"
                },
                "serviceType": "Construction",
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "offers": {
                    "@type": "Offer",
                    "category": "{{ __('Residential Construction') }}",
                    "offeredBy": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                    }
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 3,
            "item": {
                "@type": "Service",
                "name": "{{ __('infrastructure') }}",
                "description": "{{ __('Infrastructure construction services including roads, bridges, and public facilities') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA",
                    "alternateName": "Maestro"
                },
                "serviceType": "Construction",
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "offers": {
                    "@type": "Offer",
                    "category": "{{ __('Infrastructure Construction') }}",
                    "offeredBy": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                    }
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 4,
            "item": {
                "@type": "Service",
                "name": "{{ __('auxiliaries building') }}",
                "description": "{{ __('Auxiliary building construction services for supporting facilities and structures') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA",
                    "alternateName": "Maestro"
                },
                "serviceType": "Construction",
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "offers": {
                    "@type": "Offer",
                    "category": "{{ __('Auxiliary Construction') }}",
                    "offeredBy": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                    }
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 5,
            "item": {
                "@type": "Service",
                "name": "{{ __('New Building') }}",
                "description": "{{ __('New building construction services from ground up development') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA",
                    "alternateName": "Maestro"
                },
                "serviceType": "Construction",
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "offers": {
                    "@type": "Offer",
                    "category": "{{ __('New Construction') }}",
                    "offeredBy": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                    }
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 6,
            "item": {
                "@type": "Service",
                "name": "{{ __('Renovation') }}",
                "description": "{{ __('Building renovation and remodeling services for existing structures') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA",
                    "alternateName": "Maestro"
                },
                "serviceType": "Renovation",
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "offers": {
                    "@type": "Offer",
                    "category": "{{ __('Renovation Services') }}",
                    "offeredBy": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                    }
                }
            }
        },
        {
            "@type": "ListItem",
            "position": 7,
            "item": {
                "@type": "Service",
                "name": "{{ __('Interior Furniture') }}",
                "description": "{{ __('Interior design and furniture services for complete interior solutions') }}",
                "provider": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA",
                    "alternateName": "Maestro"
                },
                "serviceType": "Interior Design",
                "areaServed": {
                    "@type": "Country",
                    "name": "Indonesia"
                },
                "offers": {
                    "@type": "Offer",
                    "category": "{{ __('Interior Design') }}",
                    "offeredBy": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                    }
                }
            }
        }
    ]
}
</script>

{{-- Schema.org for Service Provider --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ __('Construction Services') }}",
    "description": "{{ __('Comprehensive construction services including commercial, residential, infrastructure, and renovation projects') }}",
    "provider": {
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('img/general/logo.webp') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-856-5656-8527",
            "contactType": "customer service",
            "availableLanguage": ["Indonesian", "English"]
        }
    },
    "areaServed": {
        "@type": "Country",
        "name": "Indonesia"
    },
    "serviceType": "Construction",
    "category": "Construction Services",
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Construction Services Catalog",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "{{ __('Commercial building') }}"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "{{ __('house building') }}"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "{{ __('infrastructure') }}"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "{{ __('auxiliaries building') }}"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "{{ __('New Building') }}"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "{{ __('Renovation') }}"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "{{ __('Interior Furniture') }}"
                }
            }
        ]
    }
}
</script>

{{-- Schema.org for Business Process --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "HowTo",
    "name": "{{ __('Construction Project Process') }}",
    "description": "{{ __('Step-by-step process for construction projects at Maestro') }}",
    "image": "{{ asset('img/general/logo.webp') }}",
    "totalTime": "P90D",
    "estimatedCost": {
        "@type": "MonetaryAmount",
        "currency": "IDR",
        "value": "100000000"
    },
    "supply": [
        {
            "@type": "HowToSupply",
            "name": "{{ __('Site Survey') }}"
        },
        {
            "@type": "HowToSupply",
            "name": "{{ __('Design Consultation') }}"
        },
        {
            "@type": "HowToSupply",
            "name": "{{ __('BoQ and RAB') }}"
        }
    ],
    "tool": [
        {
            "@type": "HowToTool",
            "name": "{{ __('Construction Equipment') }}"
        },
        {
            "@type": "HowToTool",
            "name": "{{ __('Professional Team') }}"
        }
    ],
    "step": [
        {
            "@type": "HowToStep",
            "name": "{{ __('Site Survey') }}",
            "text": "{{ __('Conduct comprehensive site survey and analysis') }}",
            "url": "{{ url('/services') }}#step1"
        },
        {
            "@type": "HowToStep",
            "name": "{{ __('Design Consultation') }}",
            "text": "{{ __('Create detailed drawings and design consultation') }}",
            "url": "{{ url('/services') }}#step2"
        },
        {
            "@type": "HowToStep",
            "name": "{{ __('BoQ and RAB') }}",
            "text": "{{ __('Prepare Bill of Quantities and Budget Plan') }}",
            "url": "{{ url('/services') }}#step3"
        },
        {
            "@type": "HowToStep",
            "name": "{{ __('Job Execution') }}",
            "text": "{{ __('Execute construction work according to plan') }}",
            "url": "{{ url('/services') }}#step4"
        },
        {
            "@type": "HowToStep",
            "name": "{{ __('Work Addendum') }}",
            "text": "{{ __('Handle any additional work or changes') }}",
            "url": "{{ url('/services') }}#step5"
        },
        {
            "@type": "HowToStep",
            "name": "{{ __('Handover of Work') }}",
            "text": "{{ __('Complete project handover to client') }}",
            "url": "{{ url('/services') }}#step6"
        }
    ]
}
</script>

<?php

namespace App\Helpers;

class SchemaHelper
{
    /**
     * Generate Organization Schema
     */
    public static function organization()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => "PT. KINARYA MAESTRO NUSANTARA",
            "alternateName" => "Maestro",
            "url" => url('/'),
            "logo" => asset('img/general/logo.webp'),
            "description" => __('A General Contractor Company with experience in the construction sector'),
            "foundingDate" => "2020",
            "address" => [
                "@type" => "PostalAddress",
                "addressCountry" => "ID",
                "addressRegion" => "Indonesia"
            ],
            "contactPoint" => [
                "@type" => "ContactPoint",
                "telephone" => "+62-856-5656-8527",
                "contactType" => "customer service",
                "availableLanguage" => ["Indonesian", "English"]
            ],
            "sameAs" => [
                "https://api.whatsapp.com/send?phone=6285656568527"
            ],
            "areaServed" => [
                "@type" => "Country",
                "name" => "Indonesia"
            ],
            "serviceType" => "General Contractor",
            "certification" => [
                "PB-umku: 122600345236200050001",
                "PB-umku: 122600345236200040001",
                "PB-umku: 122600345236200060001"
            ]
        ];
    }

    /**
     * Generate WebSite Schema
     */
    public static function website()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "WebSite",
            "name" => "Maestro - Quality Construction with ISO Standards",
            "url" => url('/'),
            "description" => __('ISO certified, we deliver high quality construction solutions to international standards.'),
            "publisher" => [
                "@type" => "Organization",
                "name" => "PT. KINARYA MAESTRO NUSANTARA"
            ]
        ];
    }

    /**
     * Generate LocalBusiness Schema
     */
    public static function localBusiness()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => "PT. KINARYA MAESTRO NUSANTARA",
            "alternateName" => "Maestro",
            "description" => __('A General Contractor Company with experience in the construction sector'),
            "url" => url('/'),
            "telephone" => "+62-856-5656-8527",
            "address" => [
                "@type" => "PostalAddress",
                "addressCountry" => "ID",
                "addressRegion" => "Indonesia"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => "-6.2088",
                "longitude" => "106.8456"
            ],
            "openingHours" => "Mo-Fr 08:00-17:00",
            "priceRange" => "$$",
            "currenciesAccepted" => "IDR",
            "paymentAccepted" => "Cash, Bank Transfer",
            "areaServed" => [
                "@type" => "Country",
                "name" => "Indonesia"
            ]
        ];
    }

    /**
     * Generate Portfolio Schema
     */
    public static function portfolio($portfolios)
    {
        $items = [];
        foreach ($portfolios as $index => $portfolio) {
            $items[] = [
                "@type" => "ListItem",
                "position" => $index + 1,
                "item" => [
                    "@type" => "CreativeWork",
                    "name" => $portfolio->judul,
                    "description" => $portfolio->alamat,
                    "image" => $portfolio->getFirstMediaUrl('portofolio'),
                    "creator" => [
                        "@type" => "Organization",
                        "name" => "PT. KINARYA MAESTRO NUSANTARA"
                    ],
                    "dateCreated" => $portfolio->created_at ?? now(),
                    "genre" => "Construction Project",
                    "keywords" => "construction, building, project, " . $portfolio->judul
                ]
            ];
        }

        return [
            "@context" => "https://schema.org",
            "@type" => "ItemList",
            "name" => __('Portfolio Projects'),
            "description" => __('Portfolio of construction projects completed by Maestro'),
            "numberOfItems" => count($portfolios),
            "itemListElement" => $items
        ];
    }

    /**
     * Generate Testimonial Schema
     */
    public static function testimonials($testimonials)
    {
        $items = [];
        foreach ($testimonials as $index => $testimonial) {
            $items[] = [
                "@type" => "ListItem",
                "position" => $index + 1,
                "item" => [
                    "@type" => "Review",
                    "reviewBody" => strip_tags($testimonial->testimoni),
                    "author" => [
                        "@type" => "Person",
                        "name" => $testimonial->name
                    ],
                    "itemReviewed" => [
                        "@type" => "Service",
                        "name" => $testimonial->project,
                        "provider" => [
                            "@type" => "Organization",
                            "name" => "PT. KINARYA MAESTRO NUSANTARA",
                            "alternateName" => "Maestro"
                        ]
                    ],
                    "reviewRating" => [
                        "@type" => "Rating",
                        "ratingValue" => "5",
                        "bestRating" => "5"
                    ],
                    "datePublished" => $testimonial->created_at ?? now()
                ]
            ];
        }

        return [
            "@context" => "https://schema.org",
            "@type" => "ItemList",
            "name" => __('Client Testimonials'),
            "description" => __('What Our Client Say'),
            "numberOfItems" => count($testimonials),
            "itemListElement" => $items
        ];
    }

    /**
     * Generate Services Schema
     */
    public static function services()
    {
        $services = [
            [
                "name" => __('Commercial building'),
                "description" => __('Commercial building construction services including office buildings, retail spaces, and commercial facilities')
            ],
            [
                "name" => __('house building'),
                "description" => __('Residential house construction services for individual homes and housing complexes')
            ],
            [
                "name" => __('infrastructure'),
                "description" => __('Infrastructure construction services including roads, bridges, and public facilities')
            ],
            [
                "name" => __('auxiliaries building'),
                "description" => __('Auxiliary building construction services for supporting facilities and structures')
            ],
            [
                "name" => __('New Building'),
                "description" => __('New building construction services from ground up development')
            ],
            [
                "name" => __('Renovation'),
                "description" => __('Building renovation and remodeling services for existing structures')
            ],
            [
                "name" => __('Interior Furniture'),
                "description" => __('Interior design and furniture services for complete interior solutions')
            ]
        ];

        $items = [];
        foreach ($services as $index => $service) {
            $items[] = [
                "@type" => "ListItem",
                "position" => $index + 1,
                "item" => [
                    "@type" => "Service",
                    "name" => $service['name'],
                    "description" => $service['description'],
                    "provider" => [
                        "@type" => "Organization",
                        "name" => "PT. KINARYA MAESTRO NUSANTARA",
                        "alternateName" => "Maestro"
                    ],
                    "serviceType" => "Construction",
                    "areaServed" => [
                        "@type" => "Country",
                        "name" => "Indonesia"
                    ]
                ]
            ];
        }

        return [
            "@context" => "https://schema.org",
            "@type" => "ItemList",
            "name" => __('Our Services'),
            "description" => __('Comprehensive construction services offered by PT. KINARYA MAESTRO NUSANTARA'),
            "numberOfItems" => count($services),
            "itemListElement" => $items
        ];
    }

    /**
     * Generate FAQ Schema
     */
    public static function faq()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => [
                [
                    "@type" => "Question",
                    "name" => __('What is the process for B2C construction projects?'),
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => __('The B2C process includes: 1) Site Survey, 2) Drawing and Design Consultation, 3) Making BoQ and RAB, 4) Job Execution, 5) Work Addendum, 6) Handover of Work')
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => __('What is the process for B2B construction projects?'),
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => __('The B2B process includes: 1) Get Tender Information, 2) Retrieve Tender Requirements and BoQ Documents, 3) Collection of RAB Bidding Document Files, 4) Determination of Tender Winner, 5) Work Contract, 6) Survey, Measurement & Job Execution, 7) Work Addendum, 8) Handover of Work')
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => __('What services does Maestro provide?'),
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => __('Maestro provides comprehensive construction services including commercial building, house building, infrastructure, auxiliary building, new building construction, renovation, and interior furniture services.')
                    ]
                ]
            ]
        ];
    }

    /**
     * Generate Breadcrumb Schema
     */
    public static function breadcrumbs($breadcrumbs = [])
    {
        $items = [];
        foreach ($breadcrumbs as $index => $breadcrumb) {
            $items[] = [
                "@type" => "ListItem",
                "position" => $index + 1,
                "name" => $breadcrumb['name'],
                "item" => $breadcrumb['url']
            ];
        }

        return [
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => $items
        ];
    }

    /**
     * Generate Contact Page Schema
     */
    public static function contactPage()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "ContactPage",
            "name" => __('Contact Us') . " - Maestro",
            "description" => __('Contact PT. KINARYA MAESTRO NUSANTARA for construction services and consultation'),
            "url" => url('/contact'),
            "mainEntity" => [
                "@type" => "Organization",
                "name" => "PT. KINARYA MAESTRO NUSANTARA",
                "alternateName" => "Maestro",
                "url" => url('/'),
                "logo" => asset('img/general/logo.webp'),
                "contactPoint" => [
                    [
                        "@type" => "ContactPoint",
                        "telephone" => "+62-856-5656-8527",
                        "contactType" => "customer service",
                        "availableLanguage" => ["Indonesian", "English"]
                    ],
                    [
                        "@type" => "ContactPoint",
                        "contactType" => "WhatsApp",
                        "url" => "https://api.whatsapp.com/send?phone=6285656568527",
                        "availableLanguage" => ["Indonesian", "English"]
                    ]
                ]
            ]
        ];
    }

    /**
     * Generate About Page Schema
     */
    public static function aboutPage()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "AboutPage",
            "name" => __('About') . " Maestro",
            "description" => __('About PT. KINARYA MAESTRO NUSANTARA - A General Contractor Company with experience in the construction sector'),
            "url" => url('/about'),
            "mainEntity" => [
                "@type" => "Organization",
                "name" => "PT. KINARYA MAESTRO NUSANTARA",
                "alternateName" => "Maestro",
                "description" => __('A General Contractor Company with experience in the construction sector, encompassing consultant work, construction implementation, project management, supervision and execution in the construction industry.'),
                "foundingDate" => "2020",
                "address" => [
                    "@type" => "PostalAddress",
                    "addressCountry" => "ID",
                    "addressRegion" => "Indonesia"
                ],
                "contactPoint" => [
                    "@type" => "ContactPoint",
                    "telephone" => "+62-856-5656-8527",
                    "contactType" => "customer service",
                    "availableLanguage" => ["Indonesian", "English"]
                ],
                "areaServed" => [
                    "@type" => "Country",
                    "name" => "Indonesia"
                ],
                "serviceType" => "General Contractor"
            ]
        ];
    }

    /**
     * Convert array to JSON-LD script tag
     */
    public static function toJsonLd($schema)
    {
        return '<script type="application/ld+json">' . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>';
    }

    /**
     * Generate all basic schemas
     */
    public static function generateBasicSchemas()
    {
        $schemas = [];
        $schemas[] = self::organization();
        $schemas[] = self::website();
        $schemas[] = self::localBusiness();
        $schemas[] = self::faq();

        return $schemas;
    }

    /**
     * Generate all schemas for a page
     */
    public static function generatePageSchemas($page = 'home', $data = [])
    {
        $schemas = self::generateBasicSchemas();

        switch ($page) {
            case 'portfolio':
                if (isset($data['portofolio'])) {
                    $schemas[] = self::portfolio($data['portofolio']);
                }
                break;
            case 'testimonials':
                if (isset($data['testimoni'])) {
                    $schemas[] = self::testimonials($data['testimoni']);
                }
                break;
            case 'services':
                $schemas[] = self::services();
                break;
            case 'contact':
                $schemas[] = self::contactPage();
                break;
            case 'about':
                $schemas[] = self::aboutPage();
                break;
        }

        return $schemas;
    }
}

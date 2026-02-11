{{-- Schema.org for About Page --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "AboutPage",
    "name": "Tentang Maestro",
    "description": "Tentang PT. KINARYA MAESTRO NUSANTARA - Perusahaan Kontraktor Umum dengan pengalaman di sektor konstruksi",
    "url": "{{ url('/about') }}",
    "mainEntity": {
        "@@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro",
        "description": "Perusahaan Kontraktor Umum berpengalaman di sektor konstruksi, meliputi pekerjaan konsultan, implementasi konstruksi, manajemen proyek, pengawasan dan eksekusi dalam industri konstruksi.",
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
}
</script>

{{-- Schema.org for Company History --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Tentang PT. KINARYA MAESTRO NUSANTARA",
    "description": "Perusahaan Kontraktor Umum dengan pengalaman di sektor konstruksi",
    "author": {
        "@@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA"
    },
    "publisher": {
        "@@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "logo": {
            "@@type": "ImageObject",
            "url": "{{ asset('img/general/logo.webp') }}"
        }
    },
    "datePublished": "2020-01-01",
    "dateModified": "{{ now()->format('Y-m-d') }}",
    "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ url('/about') }}"
    },
    "articleBody": "Maestro didukung oleh tenaga kerja yang kuat dengan pengalaman signifikan di sektor konstruksi, menunjukkan komitmen Maestro untuk memberikan layanan berkualitas tinggi."
}
</script>

{{-- Schema.org for Company Certifications --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Sertifikasi Perusahaan",
    "description": "Sertifikasi hukum dan lisensi yang dimiliki oleh PT. KINARYA MAESTRO NUSANTARA",
    "numberOfItems": 3,
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "item": {
                "@@type": "CreativeWork",
                "name": "PB-umku: 122600345236200050001",
                "description": "Sertifikat pendaftaran perusahaan"
            }
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "item": {
                "@@type": "CreativeWork",
                "name": "PB-umku: 122600345236200040001",
                "description": "Sertifikat izin usaha"
            }
        },
        {
            "@@type": "ListItem",
            "position": 3,
            "item": {
                "@@type": "CreativeWork",
                "name": "PB-umku: 122600345236200060001",
                "description": "Sertifikat izin konstruksi"
            }
        }
    ]
}
</script>

{{-- Schema.org for Company Services --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Layanan Perusahaan",
    "description": "Layanan yang ditawarkan oleh PT. KINARYA MAESTRO NUSANTARA",
    "numberOfItems": 7,
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "item": {
                "@@type": "Service",
                "name": "Bangunan Komersial",
                "description": "Layanan konstruksi bangunan komersial",
                "provider": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "item": {
                "@@type": "Service",
                "name": "Bangunan Perumahan",
                "description": "Layanan konstruksi rumah tinggal",
                "provider": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@@type": "ListItem",
            "position": 3,
            "item": {
                "@@type": "Service",
                "name": "Infrastruktur",
                "description": "Layanan konstruksi infrastruktur",
                "provider": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@@type": "ListItem",
            "position": 4,
            "item": {
                "@@type": "Service",
                "name": "Bangunan Tambahan",
                "description": "Layanan konstruksi bangunan tambahan",
                "provider": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@@type": "ListItem",
            "position": 5,
            "item": {
                "@@type": "Service",
                "name": "Gedung Baru",
                "description": "Layanan konstruksi gedung baru",
                "provider": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@@type": "ListItem",
            "position": 6,
            "item": {
                "@@type": "Service",
                "name": "Renovasi",
                "description": "Layanan renovasi bangunan",
                "provider": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        },
        {
            "@@type": "ListItem",
            "position": 7,
            "item": {
                "@@type": "Service",
                "name": "Furnitur Interior",
                "description": "Layanan desain interior dan furnitur",
                "provider": {
                    "@@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                }
            }
        }
    ]
}
</script>
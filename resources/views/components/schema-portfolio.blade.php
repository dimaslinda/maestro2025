{{-- Schema.org for Portfolio Projects --}}
@if (isset($portofolio) && $portofolio->count() > 0)
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ItemList",
        "name": "Proyek Portofolio",
        "description": "Portofolio proyek konstruksi yang diselesaikan oleh Maestro",
        "numberOfItems": {{ $portofolio->count() }},
        "itemListElement": [
            @foreach($portofolio as $index => $p)
                {
                    "@@type": "ListItem",
                    "position": {{ $index + 1 }},
                    "item": {
                        "@@type": "CreativeWork",
                        "name": {!! json_encode($p->judul) !!},
                        "description": {!! json_encode($p->alamat) !!},
                        "image": {!! json_encode($p->getFirstMediaUrl('portofolio')) !!},
                        "creator": {
                            "@@type": "Organization",
                            "name": "PT. KINARYA MAESTRO NUSANTARA"
                        },
                        "dateCreated": {!! json_encode($p->created_at ? $p->created_at->toIso8601String() : now()->toIso8601String()) !!},
                        "genre": "Proyek Konstruksi",
                        "keywords": {!! json_encode("konstruksi, bangunan, proyek, " . $p->judul) !!}
                    }
                }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>

    {{-- Schema.org for Individual Portfolio Items --}}
    @foreach ($portofolio as $p)
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Project",
            "name": {!! json_encode($p->judul) !!},
            "description": {!! json_encode($p->alamat) !!},
            "image": {!! json_encode($p->getFirstMediaUrl('portofolio')) !!},
            "performer": {
                "@@type": "Organization",
                "name": "PT. KINARYA MAESTRO NUSANTARA",
                "alternateName": "Maestro"
            },
            "location": {
                "@@type": "Place",
                "name": {!! json_encode($p->alamat) !!},
                "address": {
                    "@@type": "PostalAddress",
                    "addressCountry": "ID"
                }
            },
            "projectType": "Konstruksi",
            "status": "Selesai",
            "startDate": {!! json_encode($p->created_at ? $p->created_at->toIso8601String() : now()->toIso8601String()) !!},
            "endDate": {!! json_encode($p->updated_at ? $p->updated_at->toIso8601String() : now()->toIso8601String()) !!}
        }
        </script>
    @endforeach
@endif
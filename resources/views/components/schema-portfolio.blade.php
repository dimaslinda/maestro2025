{{-- Schema.org for Portfolio Projects --}}
@if (isset($portofolio) && $portofolio->count() > 0)
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "{{ __('Portfolio Projects') }}",
    "description": "{{ __('Portfolio of construction projects completed by Maestro') }}",
    "numberOfItems": {{ $portofolio->count() }},
    "itemListElement": [
        @foreach($portofolio as $index => $p)
        {
            "@type": "ListItem",
            "position": {{ $index + 1 }},
            "item": {
                "@type": "CreativeWork",
                "name": "{{ $p->judul }}",
                "description": "{{ $p->alamat }}",
                "image": "{{ $p->getFirstMediaUrl('portofolio') }}",
                "creator": {
                    "@type": "Organization",
                    "name": "PT. KINARYA MAESTRO NUSANTARA"
                },
                "dateCreated": "{{ $p->created_at ?? now() }}",
                "genre": "Construction Project",
                "keywords": "construction, building, project, {{ $p->judul }}"
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
    "@context": "https://schema.org",
    "@type": "Project",
    "name": "{{ $p->judul }}",
    "description": "{{ $p->alamat }}",
    "image": "{{ $p->getFirstMediaUrl('portofolio') }}",
    "performer": {
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA",
        "alternateName": "Maestro"
    },
    "location": {
        "@type": "Place",
        "name": "{{ $p->alamat }}",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID"
        }
    },
    "projectType": "Construction",
    "status": "Completed",
    "startDate": "{{ $p->created_at ?? now() }}",
    "endDate": "{{ $p->updated_at ?? now() }}"
}
</script>
    @endforeach
@endif

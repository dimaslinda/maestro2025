{{-- Schema.org for Client Testimonials --}}
@if (isset($testimoni) && $testimoni->count() > 0)
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "{{ __('Client Testimonials') }}",
    "description": "{{ __('What Our Client Say') }}",
    "numberOfItems": {{ $testimoni->count() }},
    "itemListElement": [
        @foreach($testimoni as $index => $item)
        {
            "@type": "ListItem",
            "position": {{ $index + 1 }},
            "item": {
                "@type": "Review",
                "reviewBody": "{{ strip_tags($item->testimoni) }}",
                "author": {
                    "@type": "Person",
                    "name": "{{ $item->name }}"
                },
                "itemReviewed": {
                    "@type": "Service",
                    "name": "{{ $item->project }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "PT. KINARYA MAESTRO NUSANTARA",
                        "alternateName": "Maestro"
                    }
                },
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                },
                "datePublished": "{{ $item->created_at ?? now() }}"
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>

    {{-- Schema.org for Individual Testimonials --}}
    @foreach ($testimoni as $item)
        <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Review",
    "reviewBody": "{{ strip_tags($item->testimoni) }}",
    "author": {
        "@type": "Person",
        "name": "{{ $item->name }}",
        "image": "{{ $item->getFirstMediaUrl('profile') }}"
    },
    "itemReviewed": {
        "@type": "Service",
        "name": "{{ $item->project }}",
        "description": "{{ __('Construction service provided by Maestro') }}",
        "provider": {
            "@type": "Organization",
            "name": "PT. KINARYA MAESTRO NUSANTARA",
            "alternateName": "Maestro",
            "url": "{{ url('/') }}"
        }
    },
    "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5",
        "bestRating": "5",
        "worstRating": "1"
    },
    "datePublished": "{{ $item->created_at ?? now() }}",
    "publisher": {
        "@type": "Organization",
        "name": "PT. KINARYA MAESTRO NUSANTARA"
    }
}
</script>
    @endforeach
@endif

{{-- Schema.org Aggregate Rating for Company --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "PT. KINARYA MAESTRO NUSANTARA",
    "alternateName": "Maestro",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "{{ $testimoni->count() ?? 0 }}",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>

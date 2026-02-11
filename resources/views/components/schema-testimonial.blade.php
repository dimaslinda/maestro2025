{{-- Schema.org for Client Testimonials --}}
@if (isset($testimoni) && $testimoni->count() > 0)
    <script type="application/ld+json">
                {
                    "@@context": "https://schema.org",
                    "@@type": "ItemList",
                    "name": "Testimoni Klien",
                    "description": "Apa Kata Klien Kami",
                    "numberOfItems": {{ $testimoni->count() }},
                    "itemListElement": [
                        @foreach($testimoni as $index => $item)
                            {
                                "@@type": "ListItem",
                                "position": {{ $index + 1 }},
                                "item": {
                                    "@@type": "Review",
                                    "reviewBody": {!! json_encode(strip_tags($item->testimoni)) !!},
                                    "author": {
                                        "@@type": "Person",
                                        "name": {!! json_encode($item->name) !!}
                                    },
                                    "itemReviewed": {
                                        "@@type": "Service",
                                        "name": {!! json_encode($item->project) !!},
                                        "provider": {
                                            "@@type": "Organization",
                                            "name": "PT. KINARYA MAESTRO NUSANTARA",
                                            "alternateName": "Maestro"
                                        }
                                    },
                                    "reviewRating": {
                                        "@@type": "Rating",
                                        "ratingValue": "5",
                                        "bestRating": "5"
                                    },
                                    "datePublished": {!! json_encode($item->created_at ? $item->created_at->toIso8601String() : now()->toIso8601String()) !!}
                                }
                            }{{ !$loop->last ? ',' : '' }}
                        @endforeach
                    ]
                }
                </script>

    {{-- Schema.org for Individual Testimonials --}}
    @foreach ($testimoni as $item)
        <script type="application/ld+json">
                                {
                                    "@@context": "https://schema.org",
                                    "@@type": "Review",
                                    "reviewBody": {!! json_encode(strip_tags($item->testimoni)) !!},
                                    "author": {
                                        "@@type": "Person",
                                        "name": {!! json_encode($item->name) !!},
                                        "image": {!! json_encode($item->getFirstMediaUrl('profile')) !!}
                                    },
                                    "itemReviewed": {
                                        "@@type": "Service",
                                        "name": {!! json_encode($item->project) !!},
                                        "description": "Layanan konstruksi yang disediakan oleh Maestro",
                                        "provider": {
                                            "@@type": "Organization",
                                            "name": "PT. KINARYA MAESTRO NUSANTARA",
                                            "alternateName": "Maestro",
                                            "url": "{{ url('/') }}"
                                        }
                                    },
                                    "reviewRating": {
                                        "@@type": "Rating",
                                        "ratingValue": "5",
                                        "bestRating": "5",
                                        "worstRating": "1"
                                    },
                                    "datePublished": {!! json_encode($item->created_at ? $item->created_at->toIso8601String() : now()->toIso8601String()) !!},
                                    "publisher": {
                                        "@@type": "Organization",
                                        "name": "PT. KINARYA MAESTRO NUSANTARA"
                                    }
                                }
                                </script>
    @endforeach
@endif

{{-- Schema.org Aggregate Rating for Company --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Organization",
    "name": "PT. KINARYA MAESTRO NUSANTARA",
    "alternateName": "Maestro",
    "aggregateRating": {
        "@@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": {{ $testimoni->count() ?? 0 }},
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>
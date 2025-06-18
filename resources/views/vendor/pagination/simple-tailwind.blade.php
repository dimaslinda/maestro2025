@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-2 border-gray-300 cursor-default leading-5 rounded-lg">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-tombol bg-white border-tombol leading-5 rounded-lg hover:text-white hover:bg-tombol hover:border-white border-2 focus:outline-none focus:ring ring-tombol focus:border-tombol active:bg-tombol active:text-tombol transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-tombol bg-white border-tombol leading-5 rounded-lg hover:text-white hover:bg-tombol hover:border-white border-2 focus:outline-none focus:ring ring-tombol focus:border-tombol active:bg-tombol active:text-tombol transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border-2 border-gray-300 cursor-default leading-5 rounded-lg">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif

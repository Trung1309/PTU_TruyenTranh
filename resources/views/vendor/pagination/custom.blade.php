<!-- resources/views/vendor/pagination/custom.blade.php -->

@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pagination-item pagination-item-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="pagination-link" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="pagination-item">
                <a class="pagination-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination-item pagination-ellipsis"><span>{{ $element }}</span></li>
            @endif

            {{-- Array of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-item pagination-item-disabled" aria-current="page">
                            <span class="pagination-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="pagination-item">
                            <a class="pagination-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-item">
                <a class="pagination-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="pagination-item pagination-item-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="pagination-link" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif

@if ($paginator->hasPages())
    <div class="viibes__universities_main_buttons">
        {{-- Previous Page Link --}}
        <a class="viibes__universities_main_buttons_button viibes__bg_gray" title="На страницу назад"
            @if ($paginator->onFirstPage())
                style="opacity: 0.7; pointer-events: none"
            @else
                href="{{ $paginator->previousPageUrl() }}"
            @endif>
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>
        <div class="viibes__universities_main_buttons_list">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                    <a href="#" class="viibes__color_purple">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="viibes__color_purple">
                            {{ $page }}
                        </a>
                    @else
                        <a href="{{ $url }}" title="Перейти на страницу номер {{ $page }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
        </div>
        {{-- Next Page Link --}}
        <a class="viibes__universities_main_buttons_button viibes__bg_gray" title="На страницу вперед"
           @if ($paginator->hasMorePages())
                href="{{ $paginator->nextPageUrl() }}"
           @else
                style="opacity: 0.7; pointer-events: none"
            @endif>
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>
    </div>
@endif

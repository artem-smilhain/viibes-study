@php $degree = app('request')->input('degree') @endphp
<div class="viibes__preview_tags" id="viibes__preview_tags">
    @if(!empty($tags['main']))
        <a @if(Route::currentRouteName() != $tags['main']['route']) {{-- <!-- MAIN TAG --> --}}
               @if($degree)
                    href="{{ route($tags['main']['route'], ['degree' => $degree]) }}"
               @else
                    href="{{ route($tags['main']['route']) }}"
               @endif
           @endif
           title="Смотреть все университеты Словакии"
           class="viibes__preview_tags_tag
            @if(Route::currentRouteName() == $tags['main']['route'])
               viibes__bg_purple_cta viibes__color_white
            @else
               viibes__preview_tags_tag_main
            @endif">
            {{ $tags['main']['title'] }}
        </a>
    @endif
    @foreach($tags['groups'] as $tag_group) {{-- <!-- ALL TAGS --> --}}
        @foreach($tag_group['object'] as $tag_group_item)
            <a @if($degree)
                    href="{{ route($tag_group['route'], [$tag_group_item->slug, 'degree' => $degree]) }}"
               @else
                    href="{{ route($tag_group['route'], $tag_group_item->slug) }}"
               @endif
               @if($tag_group_item->element_color)
                   @if($tag_group['current'] && $tag_group['current']->id === $tag_group_item->id)
                       style="color: white; background-color: {{ $tag_group_item->element_color }}FF;"
                   @else
                       style="color: {{ $tag_group_item->element_color }}; background-color: {{ $tag_group_item->element_color }}1A;"
                       onmouseenter="this.style.backgroundColor='{{ $tag_group_item->element_color }}33';"
                       onmouseleave="this.style.backgroundColor='{{ $tag_group_item->element_color }}1A'"
                    @endif
                @endif
               class="viibes__preview_tags_tag
                    @if(!$tag_group_item->element_color && $tag_group['current'] && $tag_group['current']->id === $tag_group_item->id)
                        viibes__preview_tags_tag_active
                    @endif">
                #{{ $tag_group_item->name }}
            </a>
        @endforeach
    @endforeach
    <div id="tags__blur_block"> {{-- <!-- // BLUR MOBILE --> --}}
        <svg id="tags__blur_block_arrow" width="51" height="24" viewBox="0 0 51 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.263 14.4655L17.2188 6.42126C16.3472 5.54968 14.9325 5.54968 14.0609 6.42126C13.1893 7.29284 13.1893 8.70758 14.0609 9.57916L23.7746 19.2928C24.5978 20.116 25.9304 20.116 26.7514 19.2928L36.4651 9.57916C37.3367 8.70758 37.3367 7.29284 36.4651 6.42126C35.5935 5.54968 34.1788 5.54968 33.3072 6.42126L25.263 14.4655Z" fill="#A264F1"/>
        </svg>
    </div>
</div>

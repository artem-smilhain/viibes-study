<div class="viibes__breadcrumbs">
    <div class="viibes__breadcrumbs_items" itemscope itemtype="https://schema.org/BreadcrumbList">
        <div class="viibes__breadcrumbs_items_item" itemscope itemprop="itemListElement" itemtype="https://schema.org/ListItem">
            <a href="{{ env('APP_URL') }}" class="viibes__text_small" title="Перейти на главную" itemprop="item">
                <u itemprop="name">Главная</u> <meta itemprop="position" content="1"/>
            </a>
            <div class="viibes__footer_middle_list_circle"></div>
        </div>
        @php $i = 2; @endphp
        @foreach($breadcrumbs as $key => $value)
            <div class="viibes__breadcrumbs_items_item"
                 itemscope itemprop="itemListElement" itemtype="https://schema.org/ListItem">
                <a href="{{ $value }}" class="viibes__text_small" itemprop="item" @if($loop->last) onclick="return false" @endif>
                    @if($loop->last)
                        <b itemprop="name" class="viibes__color_purple">{{ $key }}</b><meta itemprop="position" content="{{ $i }}"/>
                    @else
                        <u itemprop="name">{{ $key }}</u> <meta itemprop="position" content="{{ $i }}"/>
                    @endif
                </a>
                @if(!$loop->last)
                    <div class="viibes__footer_middle_list_circle"></div>
                @endif
            </div>
            @php $i++; @endphp
        @endforeach
    </div>
</div>

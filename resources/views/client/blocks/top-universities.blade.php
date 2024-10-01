<section class="viibes__top_universities">
    <div class="viibes__wrap">
        <h2 class="viibes__h2">
            Самые популярные <span class="viibes__color_purple">университеты Словакии</span>
        </h2>
        <p class="viibes__h2_sub">
            Среди
            @if(Route::current()->getName() !== 'belarus')
                иностранных абитуриентов,
            @else
                белорусских абитуриентов,
            @endif
            поступающих с VIIBES Study
        </p>
        <div id="universities_slider">
            <div class="viibes__slide_list swiper-wrapper" style="gap: 0 !important; overflow-x: inherit;">
                @foreach($universities as $_university)
                    <a href="{{ route('universities.show', [$_university->city->slug, $_university->slug]) }}"
                       class="swiper-slide viibes__slide_item" title="Больше про {{ $_university->name }}">
                        <img src="/storage/{{ $_university->thumbnail_src }}"
                             alt="{{ $_university->name }} фото" class="viibes__slide_item_background">
                        <div class="viibes__slide_item_inner">
                            <div class="viibes__slide_item_header">
                                <div class="viibes__slide_item_header_image">
                                    <div class="viibes__slide_item_header_image_circle">
                                        <img src="/storage/{{ $_university->logo_src }}"
                                             alt="{{ $_university->name }} логотип" title="{{ $_university->name }} логотип">
                                    </div>
                                </div>
                                <h3 class="viibes__h6">{{ $_university->name }}</h3>
                            </div>
                            <hr>
                            <div class="viibes__slide_item_price">
                                <span class="viibes__text_normal">Стоимость обучения:</span>
                                <span class="viibes__text_normal">бесплатно</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="viibes__top_universities_underside">
            <div class="viibes__top_universities_underside_buttons">
                <div class="viibes__top_universities_underside_buttons_button swiper_1">
                    <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                </div>
                <div class="viibes__top_universities_underside_buttons_button swiper_2">
                    <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                </div>
            </div>
            <a href="{{ route('universities') }}"
               class="viibes__btn_link" title="Смотреть список всех университетов Словакии">
                Смотреть все университеты
                <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
            </a>
        </div>
    </div>
</section>

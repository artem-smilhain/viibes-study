@foreach($universities as $university)
    <div class="viibes__universities_main_content_item viibes__bg_gray">
        <img src="/storage/{{ $university->thumbnail_src }}"
             alt="{{ $university->name }} фото" title="{{ $university->name }} фото" class="viibes__universities_main_content_item_image" style="max-height: 261px;">
        <div class="viibes__universities_main_content_item_main">
            <h3 class="viibes__h3">
                <a href="{{ route('universities.show', [$university->city->slug, $university->slug]) }}"
                   title="Больше про {{ $university->name }}"
                class="viibes__color_black">
                    {{ $university->name }}
                </a>
            </h3>
            <div class="viibes__universities_main_content_item_main_benefits">
                <p class="viibes__color_gray">Бесплатная стоимость обучения 🤟</p>
                <p class="viibes__color_gray">
                    Находится в городе
                    <a href="{{ route('universities.index-by-city', $university->city->slug) }}"
                       title="Смотреть все университеты в городе {{ $university->city->name }}"
                       class="viibes__color_purple">
                        {{ $university->city->name }}
                    </a>
                </p>
            </div>
            <a href="{{ route('universities.show', [$university->city->slug, $university->slug]) }}"
               title="Больше про {{ $university->name }}"
               class="viibes__btn_link">
                Больше про университет
                <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
            </a>
        </div>
    </div>
@endforeach

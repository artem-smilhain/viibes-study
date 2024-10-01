<aside class="viibes__sidebar_content viibes__desktop"> <!-- Отображать только на ПК -->
    <div class="viibes__sidebar_content_inner"> <!-- Блок Университеты -->
        <h3 class="viibes__h3">Университеты: </h3>
        <div class="viibes__preview_tags">
            @foreach($groups as $_group)
                <a class="viibes__preview_tags_tag"
                   @if(!empty($category) && $category->id === $_group->id)
                        style="color: white; background-color: {{ $_group->element_color }}FF;"
                   @else
                       href="{{ route('universities.index-by-category', $_group->slug) }}"
                       title="Смотреть {{ $_group->name }} университеты Словакии"
                       style="color: {{ $_group->element_color }}; background-color: {{ $_group->element_color }}1A;"
                       onmouseenter="this.style.backgroundColor='{{ $_group->element_color }}33';"
                       onmouseleave="this.style.backgroundColor='{{ $_group->element_color }}1A'"
                    @endif>
                    #{{ $_group->name }}
                </a>
            @endforeach
            @foreach($cities as $_city)
                <a @if(!empty($city) && $city->id === $_city->id)
                       class="viibes__preview_tags_tag_active viibes__preview_tags_tag"
                   @else
                       href="{{ route('universities.index-by-city', $_city->slug) }}"
                       title="Смотреть университеты в городе {{ $_city->name }}"
                       class="viibes__preview_tags_tag"
                    @endif>
                    #{{ $_city->name }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('universities') }}" class="viibes__btn_link">
            Все университеты
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>
    </div>
    <div class="viibes__sidebar_content_inner"> <!-- Блок Специальности -->
        <h3 class="viibes__h3">Специальности: </h3>
        <div class="viibes__preview_tags">
            @foreach($directions as $_direction)
                <a class="viibes__preview_tags_tag"
                   @if(!empty($direction) && $direction->id === $_direction->id)
                        style="color: white; background-color: {{ $_direction->element_color }}FF;"
                   @else
                   @if(!empty($degree))
                        href="{{ route('specialities.show', ['slug' => $_direction->slug, 'degree' => $degree]) }}"
                   @else
                        href="{{ route('specialities.show', ['slug' => $_direction->slug]) }}"
                   @endif
                       title="Смотреть специальности по направлению «{{ $_direction->name }}»"
                       style="color: {{ $_direction->element_color }}; background-color: {{ $_direction->element_color }}1A;"
                       onmouseenter="this.style.backgroundColor='{{ $_direction->element_color }}33';"
                       onmouseleave="this.style.backgroundColor='{{ $_direction->element_color }}1A'"
                    @endif>
                    #{{ $_direction->name }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('specialities') }}" class="viibes__btn_link">
            Все специальности
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>
    </div>
    <div class="viibes__sidebar_content_inner"> <!-- Блок Специальности -->
        <h3 class="viibes__h3">Блог: </h3>
        <div class="viibes__preview_tags">
            @foreach($blog_categories as $blog_category)
                <a class="viibes__preview_tags_tag"
                   href="{{ route('blog.index-by-category', $blog_category->slug) }}"
                   title="Смотреть публикации рубрики «{{ $blog_category->name }}»"
                   style="color: {{ $blog_category->element_color }}; background-color: {{ $blog_category->element_color }}1A;"
                   onmouseenter="this.style.backgroundColor='{{ $blog_category->element_color }}33';"
                   onmouseleave="this.style.backgroundColor='{{ $blog_category->element_color }}1A'"
                >#{{ $blog_category->name }}</a>
            @endforeach
        </div>
        <a href="{{ route('specialities') }}" class="viibes__btn_link">
            Смотреть наши статьи
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>
    </div>
</aside>

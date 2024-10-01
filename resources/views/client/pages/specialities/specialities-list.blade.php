@foreach($specialities as $speciality)
    <div class="viibes__faculty_main_content_list_item_specialties_speciality viibes__bg_gray">
        <a href="{{ route('universities.speciality', [$speciality->faculty->university->city->slug, $speciality->faculty->university->slug, $speciality->faculty->slug, $speciality->academicDegree->slug, $speciality->slug]) }}"
           class="viibes__faculty_main_content_list_item_specialties_speciality_name viibes__color_black"
           title="Смотреть подробнее об специальности «{{ $speciality->name }}»">
            {{ $speciality->name }}
        </a>
        <div class="viibes__faculty_main_content_list_item_specialties_speciality_tags">
            <a @if($degree)
               href="{{ route('specialities.show', ['slug' => $speciality->direction->slug, 'degree' => $degree]) }}"
               @else
               href="{{ route('specialities.show', $speciality->direction->slug) }}"
               @endif
               title="Смотреть все специальности по направлению «{{$speciality->direction->name}}»"
               class="viibes__faculty_main_content_list_item_specialties_speciality_tag"
               style="color: {{ $speciality->direction->element_color }}; background-color: {{ $speciality->direction->element_color }}1A;"
               onmouseenter="this.style.backgroundColor='{{ $speciality->direction->element_color }}33';"
               onmouseleave="this.style.backgroundColor='{{ $speciality->direction->element_color }}1A'">
                #{{$speciality->direction->name}}
            </a>
            @if(!empty($speciality->direction_2))
                <a @if($degree)
                   href="{{ route('specialities.show', ['slug' => $speciality->direction_2->slug, 'degree' => $degree]) }}"
                   @else
                   href="{{ route('specialities.show', $speciality->direction_2->slug) }}"
                   @endif
                   title="Смотреть все специальности по направлению «{{$speciality->direction_2->name}}»"
                   class="viibes__faculty_main_content_list_item_specialties_speciality_tag"
                   style="color: {{ $speciality->direction_2->element_color }}; background-color: {{ $speciality->direction_2->element_color }}1A;"
                   onmouseenter="this.style.backgroundColor='{{ $speciality->direction_2->element_color }}33';"
                   onmouseleave="this.style.backgroundColor='{{ $speciality->direction_2->element_color }}1A'">
                    #{{$speciality->direction_2->name}}
                </a>
            @endif
        </div>
        <a href="{{ route('universities.show', [$speciality->faculty->university->city->slug, $speciality->faculty->university->slug]) }}"
           class="viibes__faculty_main_content_list_item_specialties_speciality_university viibes__color_gray"
           title="Больше про {{ $speciality->faculty->university->name }}">
            {{ $speciality->faculty->university->name }}
        </a>
        <span class="viibes__color_gray viibes__faculty_main_content_list_item_specialties_speciality_code">
            {{ $speciality->academicDegree->degree_title }} • Код #<u>@php echo sprintf("%04d", $speciality->id) @endphp</u>
        </span>
    </div>
@endforeach

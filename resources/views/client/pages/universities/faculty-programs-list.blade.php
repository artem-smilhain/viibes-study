<div class="viibes__faculty_main_content_list_item">
    @if(!empty($academic_degrees)) <h3 class="viibes__h3">Специальности факультета: </h3> @endif
    <div class="viibes__faculty_main_content_list_item_specialties">
        @if(!empty($academic_degrees))
            @foreach($academic_degrees as $academic_degree)
                <h4 class="viibes__h4">
                    Программы обучения
                    <a href="{{ route('universities.degree', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $academic_degree['academic_degree']->slug]) }}"
                       class="viibes__color_black" title="Смотреть специальности факультета на {{ $academic_degree['academic_degree']->degree_title }}">
                        (<span style="text-transform: lowercase;">{{ $academic_degree['academic_degree']->degree_title }}</span>)
                    </a>:
                </h4>
                @foreach($academic_degree['programs'] as $program)
                    <div class="viibes__faculty_main_content_list_item_specialties_speciality viibes__bg_gray">
                        <a href="{{ route('universities.speciality', [$city->slug, $university->slug, $faculty->slug, $academic_degree['academic_degree']->slug, $program->slug]) }}"
                           title="Больше про специальность «{{ $program->name }}»"
                           class="viibes__faculty_main_content_list_item_specialties_speciality_name viibes__color_black">
                            <h5>{{ $program->name }}</h5>
                        </a>
                        <div class="viibes__faculty_main_content_list_item_specialties_speciality_tags">
                            <a href="{{ route('specialities.show', $program->direction->slug) }}" class="viibes__faculty_main_content_list_item_specialties_speciality_tag"
                               title="Смотреть специальности по направлению «{{$program->direction->name}}»"
                               style="color: {{ $program->direction->element_color }}; background-color: {{ $program->direction->element_color }}1A;"
                               onmouseenter="this.style.backgroundColor='{{ $program->direction->element_color }}33';"
                               onmouseleave="this.style.backgroundColor='{{ $program->direction->element_color }}1A'">
                                #{{$program->direction->name}}
                            </a>
                            @if(!empty($program->direction_2))
                                <a href="{{ route('specialities.show', $program->direction_2->slug) }}" class="viibes__faculty_main_content_list_item_specialties_speciality_tag"
                                   title="Смотреть специальности по направлению «{{$program->direction_2->name}}»"
                                   style="color: {{ $program->direction_2->element_color }}; background-color: {{ $program->direction_2->element_color }}1A;"
                                   onmouseenter="this.style.backgroundColor='{{ $program->direction_2->element_color }}33';"
                                   onmouseleave="this.style.backgroundColor='{{ $program->direction_2->element_color }}1A'">
                                    #{{$program->direction_2->name}}
                                </a>
                            @endif
                        </div>
                        <a href="{{ route('universities.show', [$city->slug, $university->slug]) }}"
                           title="Больше про {{ $university->name }}"
                           class="viibes__faculty_main_content_list_item_specialties_speciality_university viibes__color_gray">
                            <h6>{{ $university->name }}</h6>
                        </a>
                        <span class="viibes__color_gray viibes__faculty_main_content_list_item_specialties_speciality_code">
                        {{ $academic_degree['academic_degree']->degree_title }} • Код #<u>@php echo sprintf("%04d", $program->id) @endphp</u>
                    </span>
                    </div>
                @endforeach
            @endforeach
        @else
            @foreach($programs as $program)
                <div class="viibes__faculty_main_content_list_item_specialties_speciality viibes__bg_gray">
                    <a href="{{ route('universities.speciality', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $degree->slug, 'speciality_slug' => $program->slug]) }}"
                       title="Больше про специальность «{{ $program->name }}»"
                       class="viibes__faculty_main_content_list_item_specialties_speciality_name viibes__color_black">
                        <h5>{{ $program->name }}</h5>
                    </a>
                    <div class="viibes__faculty_main_content_list_item_specialties_speciality_tags">
                        <a href="{{ route('specialities.show', $program->direction->slug) }}" class="viibes__faculty_main_content_list_item_specialties_speciality_tag"
                           title="Смотреть специальности по направлению «{{$program->direction->name}}»"
                           style="color: {{ $program->direction->element_color }}; background-color: {{ $program->direction->element_color }}1A;"
                           onmouseenter="this.style.backgroundColor='{{ $program->direction->element_color }}33';"
                           onmouseleave="this.style.backgroundColor='{{ $program->direction->element_color }}1A'">
                            #{{$program->direction->name}}
                        </a>
                        @if(!empty($program->direction_2))
                            <a href="{{ route('specialities.show', $program->direction_2->slug) }}" class="viibes__faculty_main_content_list_item_specialties_speciality_tag"
                               title="Смотреть специальности по направлению «{{$program->direction_2->name}}»"
                               style="color: {{ $program->direction_2->element_color }}; background-color: {{ $program->direction_2->element_color }}1A;"
                               onmouseenter="this.style.backgroundColor='{{ $program->direction_2->element_color }}33';"
                               onmouseleave="this.style.backgroundColor='{{ $program->direction_2->element_color }}1A'">
                                #{{$program->direction_2->name}}
                            </a>
                        @endif
                    </div>
                    <a href="{{ route('universities.show', [$city->slug, $university->slug]) }}"
                       title="Больше про {{ $university->name }}"
                       class="viibes__faculty_main_content_list_item_specialties_speciality_university viibes__color_gray">
                        <h6>{{ $university->name }}</h6>
                    </a>
                    <span class="viibes__color_gray viibes__faculty_main_content_list_item_specialties_speciality_code">
                        {{ $degree->degree_title }} • Код #<u>@php echo sprintf("%04d", $program->id) @endphp</u>
                    </span>
                </div>
            @endforeach
        @endif
    </div>
</div>

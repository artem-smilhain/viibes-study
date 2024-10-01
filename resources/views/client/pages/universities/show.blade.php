@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $university->meta_title }}</title>
    <meta property="og:title" content="{{ $university->meta_title }}"/>
    <meta name="description" content="{{ $university->meta_description }}">
    <meta property="og:description" content="{{ $university->meta_description }}"/>
    {{-- connect gallery css --}}
    <link rel="stylesheet" href="{{ asset('/assets/client/css/libraries/gallery.min.css') }}">
@endsection
@section('body_class') viibes__university @endsection
@section('seo-text')
    <h1>{{ $university->name }}</h1>
    <h2>Базовая информация о ВУЗе.</h2>
    <p>
        {{ $university->name }} ({{ $university->abbreviation }}) - был основан в {{ $university->founding_year }}
        году и является одним из крупнейших, ведущих и главных ВУЗов Словакии с многолетним опытом подготовки
        профессиональных кадров.
    </p>
    <p>
        На словацком языке название пишется как {{ $university->name_sk }}.
        Сокращенно называют просто {{ $university->abbreviation_sk }} ({{ $university->abbreviation }}).
    </p>
    <p>
        Базируется и находится в {{ $city->name }} ({{ $city->name_sk }}).
    </p>
    <p>
        Располагается в черте города: находится по адресу {{ $university->address }} ({{ $university->address_sk }}).
    </p>
    <p>
        Имеет свой официальный сайт доступный по ссылке {{ $university->site_url }}
    </p>
    <p>
        В {{ $university->abbreviation }} эффективно действует система постоянного непрерывного высшего образования
        и профессиональной подготовки специалистов. Доступные формы обучения: дневная и заочная.
        Заочная форма не бесплатная и доступна не на всех специальностях.
    </p>
    <p>
        ВУЗ посещает более {{ $university->number_of_students }} студентов из разных стран Европы.
        Тут вместе учатся, работают и дружат словацкие студенты и учащиеся из других стран со всего Мира.
        Обучение доступно и для абитуриентов из стран СНГ.
    </p>
    <h2>Стоимость обучения на словацком и английском языках.</h2>
    <p>
        Стоимость обучения на словацком языке - бесплатно. Иностранцы также имеют возможность учиться на
        английском языке, но тогда стоимость обучения составит {{ $university->education_cost_en }} евро в зависимости
        от факультета и специальности ВУЗа.
    </p>
    <h2>Общежития</h2>
    <p>
        Стоимость общежития: 50-150 евро. Находятся прямо возле ВУЗа или в
        10-30 минутах на автобусе. К сожалению, наша команда не может гарантировать абитуриенту место в общежитии,
        так как иногда мест на всех может не хватать. Это зависит от количества подавших заявку претендентов
        на место в общежитии.
    </p>
    <h2>Есть ли возможность получения стипендии?</h2>
    <p>
        Иностранный студент может претендовать на стипендию. ВУЗ мотивирует студентов хорошо себя проявлять в учебе.
        За хорошие отметки вы будете получать стипендию в диапазоне {{ $university->scholarships }} евро за семестр.
    </p>
    <h2>Факультеты и специальности в Технический университет в городе Кошице.</h2>
    <ul>
        @foreach($faculties as $faculty)
            <li>{{ $faculty->name }}</li>
        @endforeach
    </ul>
    <p>Для того, чтобы начать работу над поступлением, необходимо связаться с нашим менеджером.</p>
@endsection
@section('seo-keywords')
    <a href="#" class="viibes__seo_keyword">{{ $university->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} словакия</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} поступление</a>
    <a href="#" class="viibes__seo_keyword">поступить в {{ $university->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} факультеты</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} специальности</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} факультеты и специальности</a>
    <a href="#" class="viibes__seo_keyword">как поступить в {{ $university->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} условия поступления</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} прием документов</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} стоимость обучения</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} стипендии</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} дата основания</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->name }} город</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->abbreviation }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->abbreviation_sk }}</a>
    <a href="#" class="viibes__seo_keyword">поступить в {{ $university->abbreviation }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->abbreviation }} поступление</a>
    <a href="#" class="viibes__seo_keyword">поступить в {{ $university->abbreviation_sk }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->abbreviation_sk }} поступление</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->abbreviation }} университет</a>
    <a href="#" class="viibes__seo_keyword">{{ $university->abbreviation_sk }} университет</a>
@endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">{{ $university->name }}</h1>
            <a href="{{ route('universities') }}" class="viibes__h1_sub">Университеты Словакии 🇸🇰</a>
            @include('client.blocks.breadcrumbs')
            @include('client.blocks.tags')
        </div>
    </section>
    <div class="viibes__main"> <!-- MAIN CONTENT -->
        <section class="viibes__university_main">
            <div class="viibes__wrap">
                @include('client.layouts.sidebars.university')
                <div class="viibes__university_main_content">
                    <div class="viibes__university_main_content_info">
                        <h2 class="viibes__h3">Основная информация</h2>
                        <div class="viibes__university_main_content_properties">
                            <ul>
                                <li class="viibes__h6"><span class="viibes__color_purple">Название:</span> {{ $university->name_sk }} ({{ $university->abbreviation_sk }})</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Стоимость обучения:</span> бесплатно ⚡️</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Стипендии:</span> {{ $university->scholarships }}€</li>
                                <li class="viibes__h6">
                                    <span class="viibes__color_purple">Город:</span>
                                    <a href="{{ route('universities.index-by-city', $city->slug) }}" title="Смотреть университеты в городе {{ $city->name }}">
                                        <u>{{ $city->name }}</u>
                                    </a> 🇸🇰
                                </li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Год основания:</span> {{ $university->founding_year }} год</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Адрес:</span> {{ $university->address_sk }}</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Год основания:</span> {{ $university->founding_year }} год</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Вступительные экзамены:</span> <a class="viibes__modal_form_activator"><u>нужно уточнять у менеджера</u></a></li>
                            </ul>
                            {{--
                            <h6 class="viibes__h6"><span class="viibes__color_purple">Название:</span> {{ $university->name_sk }}</h6>
                            <h6 class="viibes__h6"><span class="viibes__color_purple">Стоимость обучения:</span> бесплатно ⚡️</h6>
                            <h6 class="viibes__h6"><span class="viibes__color_purple">Студентов:</span> более {{ $university->number_of_students }}</h6>
                            <h6 class="viibes__h6">
                                <span class="viibes__color_purple">Город:</span>
                                <a href="{{ route('universities.index-by-city', $city->slug) }}" title="Смотреть университеты в городе {{ $city->name }}">
                                    <u>{{ $city->name }}</u>
                                </a> 🇸🇰
                            </h6>
                            <h6 class="viibes__h6"><span class="viibes__color_purple">Год основания:</span> {{ $university->founding_year }} год</h6>
                            <h6 class="viibes__h6"><span class="viibes__color_purple">Адрес:</span> {{ $university->address_sk }}</h6>
                            <h6 class="viibes__h6"><span class="viibes__color_purple">Студентов:</span> более {{ $university->number_of_students }}</h6>
                            --}}
                        </div>
                    </div>
                    @if(isset($university->description) && !empty($university->description))
                        <div class="viibes__university_main_content_description">
                            <a id="university_description" class="university_a_navigation"></a>
                            <h2 class="viibes__h3">Описание университета</h2>
                            <p class="viibes__text_normal viibes__color_gray">{{ $university->description }}</p>
                        </div>
                    @endif
                    <div class="viibes__university_main_content_faculty">
                        <a id="university_faculties" class="university_a_navigation"></a>
                        <h2 class="viibes__h3">Факультеты и специальности</h2>
                        <p class="viibes__text_normal">
                            Количество факультетов в университете - <b>{{ $faculties_count }}</b>, с бесплатным обучением для иностранцев.
                            Общее количество специальностей университета - <b>{{ array_sum($programs_count) }}</b>, из них
                            @foreach($programs_count as $key => $count)
                                <span>{{ $key }} - <b>{{ $count }}</b>@if(!$loop->last),@else.@endif</span>
                            @endforeach
                        </p>
                        <h3 class="viibes__h4" style="margin-top: 1rem; font-weight: 600;">Перечень факультетов: </h3>
                        @foreach($faculties as $faculty)
                            <div class="viibes__university_main_content_faculty_item viibes__drop viibes__bg_gray">
                                <div class="viibes__university_main_content_faculty_item_header viibes__drop_header">
                                    <h4 class="viibes__h5">{{ $faculty->name }}</h4>
                                    <img src="{{ URL::asset('/assets/client/images/components/arrow-purple.svg') }}" class="viibes__drop_img" alt="">
                                </div>
                                <div class="viibes__drop_hidden viibes__university_main_content_faculty_item_hidden">
                                    @if(!empty($faculty->description))
                                        <p class="viibes__text_small faculty_description">
                                            {{ mb_substr($faculty->description, 0, 230) }}...
                                            <a href="{{ route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]) }}" class="viibes__color_purple">читать дальше →</a>
                                        </p>
                                    @endif
                                    <div class="viibes__university_main_content_faculty_item_hidden_specialties">
                                        @foreach($academic_degrees[$faculty->id] as $academic_degree)
                                            <div class="viibes__university_main_content_faculty_item_hidden_specialties_list">
                                                <h5 class="viibes__h6">
                                                    <a href="{{ route('universities.degree', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $academic_degree['academic_degree']->slug]) }}"
                                                       title="Смотреть специальности факультета на {{ $academic_degree['academic_degree']->degree_title }}"
                                                       class="viibes__color_black">
                                                        {{ $academic_degree['academic_degree']->degree_title }} ({{ $academic_degree['academic_degree']->degree_abbreviation }})
                                                    </a>
                                                </h5>
                                                <ul>
                                                    @foreach($academic_degree['programs'] as $program)
                                                        <li>
                                                            <a href="{{ route('universities.speciality', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $academic_degree['academic_degree']->slug, 'speciality_slug' => $program->slug]) }}"
                                                               title="Больше про специальность «{{ $program->name }}»"
                                                               class="viibes__university_main_content_faculty_item_hidden_specialties_list_item">
                                                                <span class="viibes__color_purple">#@php echo sprintf("%04d", $program->id) @endphp</span>
                                                                <h6><span class="viibes__color_gray">{{ $program->name }}</span></h6>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a href="{{ route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]) }}"
                                       class="viibes__btn_link" title="Больше про {{ $faculty->name }}">
                                        Больше про факультет
                                        <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="viibes__mobile">
                    @include('client.layouts.sidebars.university-form')
                </div>
            </div>
        </section>
        <section>
            <a id="university_content" class="university_a_navigation"></a>
            @include('client.blocks.content')
        </section>
        @if(!empty($photos_count) && $photos_count > 0)
            <section class="viibes__university_photos">
                <a id="university_photos" class="university_a_navigation"></a>
                <div class="viibes__wrap">
                    <div class="viibes__university_photos_inner">
                        <h2 class="viibes__h2">Фотографии университета</h2>
                        <div id="gallery" class="viibes__university_photos_list">
                            @for($i = 1; $i <= $photos_count; $i++)
                                <a href="{{ URL::asset('/assets/client/images/universities/'.$university->abbreviation_sk.'/'.$i.'-min.jpg') }}"
                                   data-lg-size="1024-800" class="viibes__university_photos_list_photo" title="Смотреть фото в полном размере">
                                    <img src="{{ URL::asset('/assets/client/images/universities/'.$university->abbreviation_sk.'/'.$i.'-min.jpg') }}"
                                         class="viibes__university_photos_list_photo_inner" title="{{ $university->name }} фото" alt="{{ $university->name }} фото"/>
                                    <div class="viibes__university_photos_list_photo_zoom">
                                        <img src="{{ URL::asset('/assets/client/images/components/zoom.svg') }}" alt="Иконка лупа">
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{--<section class="viibes__university_city_post">
            <div class="viibes__wrap">
                <div class="viibes__university_city_post_inner">
                    <h2 class="viibes__h2 viibes__mobile">Кошице, Словакия 🇸🇰</h2>
                    <img src="{{ URL::asset('/assets/client/images/test-photo.jpg') }}" class="viibes__university_city_post_inner_img" alt="">
                    <div class="viibes__universities_city_post_inner_text">
                        <div>
                            <h2 class="viibes__h2 viibes__desktop">Кошице, Словакия 🇸🇰</h2>
                            <p class="viibes__text_normal">
                                Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось
                                иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать —
                                помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и
                                благодаря их труду ежегодно сотни питомцев находят свой новый дом.
                                Мы любим животных и стараемся поддерживать. Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось
                                иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать —
                                помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и
                                благодаря их труду ежегодно сотни питомцев находят свой новый дом.
                                Мы любим животных и стараемся поддерживать
                            </p>
                        </div>
                        <a href="{{ route('services') }}" class="viibes__btn_link" title="Смотреть пакеты услуг VIIBES Study">
                            Больше про город <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                        </a>
                    </div>
                </div>
            </div>
        </section>--}}
        <section class="viibes__university_location">
            <div class="viibes__wrap">
                <div class="viibes__university_location_inner">
                    <h2 class="viibes__h2">Расположение - {{ $university->name }}</h2>
                    <p class="viibes__text_normal">{{ $university->name }} ({{ $university->abbreviation_sk }}) расположен в городе
                        <a href="{{ route('universities.index-by-city', $city->slug) }}" class="viibes__color_purple"><u>{{ $city->name }}</u></a> по адресу <b>{{ $university->address }}</b> ({{ $university->address_sk }}). Кампус расположен недалеко от центра города, что делает его легкодоступным для студентов. </p>
                    <iframe src="{{ $university->google_map_src }}"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <section class="viibes__university_additional_text"> <!-- -->
            <a id="university_study" class="university_a_navigation"></a>
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">{{ $university->name }}: учебный год и каникулы</h2>
                    <p class="viibes__text_normal">Учебный график в целом построен так же, как и в других словацких и европейских университетах. В Техническом университете в Кошице <b>два семестра в учебном году: зимний и летний.</b> Учебный период каждого семестра длится около <b>13-14 недель.</b></p>
                    <p class="viibes__text_normal"><b>Зимний семестр:</b> с конца сентября до середины февраля, с экзаменами в январе и второй половине февраля, а зимние каникулы - во второй половине декабря.</p>
                    <p class="viibes__text_normal"><b>Летний семестр:</b> со второй половины февраля до конца августа, с зачетным периодом в мае и экзаменационным периодом в июне. Летние каникулы - с начала июля до середины сентября.</p>
                </div>
            </div>
        </section>
        <section class="viibes__university_additional_text"> <!-- -->
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">Стоимость обучения в {{ $university->name }}</h2>
                    <p class="viibes__text_normal">В Словакии высшее образование в государственных университетах страны <b>полностью финансируется государством.</b> Обучение в {{ $university->name }} абсолютно <b>бесплатное для иностранных абитуриентов</b>, что делает ВУЗ привлекательным вариантом для студентов, желающих получить качественное европейское образование. Одно условие - <b>обучение проводится на словацком языке.</b></p>
                    <h3 class="viibes__h3">Стоимость обучения на английском языке</h3>
                    <p class="viibes__text_normal">Стоимость обучения в {{ $university->name }} на английском языке относительно невысока по сравнению со многими другими европейскими университетами. Точная стоимость обучения <b>зависит от программы и уровня обучения.</b> Обычно она варьируется в диапазоне {{ $university->education_cost_en }} евро в год. </p>
                </div>
            </div>
        </section>
        <section class="viibes__university_additional_text">
            <a id="university_documents" class="university_a_navigation"></a>
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">Как поступить в {{ $university->name }}</h2>
                    <p class="viibes__text_normal">Если вы заинтересованы в поступлении в {{ $university->name }} вместе с VIIBES Study, вам необходимо <b>связаться с нами по одному из контактов у нас на сайте.</b> Наш менеджер более подробно расскажет вам о Словакии и системе образования, как проходит процесс поступления в {{ $university->name }} вместе с нами, поможет выбрать факультет и специальность.</p>
                    <h3 class="viibes__h3">Какие документы нужны для поступления в {{ $university->name }} вместе с VIIBES Study</h3>
                    <p class="viibes__text_normal">Самый важный критерий для успешного поступления - правильно оформленные документы <b>в соответствии с требованиями и сроками</b> выбранного факультета и специальности. </p>
                    <p class="viibes__text_normal">Обычно признание документов занимает достаточно длительное время, поэтому в ваших интересах начать процесс, как только вы решите поступать. Вы всегда можете связаться с нами для получения более подробной информации. </p>
                    <h4 class="viibes__h4">Перечень документов для поступления на <u>бакалавра</u> в {{ $university->name }}: </h4>
                    <ol>
                        <li class="viibes__text_normal"><b>Выписка оценок</b> абитуриента из школы за 8, 9, 10 класс, а также за первый семестр или 2 четверти 11 класса</li>
                        <li class="viibes__text_normal"><b>Резюме и мотивационное письмо</b></li>
                        <li class="viibes__text_normal">Любые соответствующие <b>грамоты, дипломы или сертификаты</b> о достижениях в учебе или спорте</li>
                        <li class="viibes__text_normal"><b>Доверенность</b> на нашего куратора, который будет представлять интересы абитуриента в Словакии во время процесса поступления и оформлять все необходимые документы</li>
                    </ol>
                    <h4 class="viibes__h4">Перечень документов для поступления на <u>магистратуру</u> в {{ $university->name }}: </h4>
                    <ol>
                        <li class="viibes__text_normal"><b>Выписка оценок</b> абитуриента из университета</li>
                        <li class="viibes__text_normal"><b>Аттестат</b> о полученном среднем образовании</li>
                        <li class="viibes__text_normal"><b>Резюме и мотивационное письмо</b></li>
                        <li class="viibes__text_normal">Любые соответствующие <b>грамоты, дипломы или сертификаты</b> о достижениях в учебе или спорте</li>
                        <li class="viibes__text_normal"><b>Доверенность</b> на нашего куратора, который будет представлять интересы абитуриента в Словакии во время процесса поступления и оформлять все необходимые документы</li>
                    </ol>
                </div>
            </div>
        </section>
    </div>
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
    @include('client.blocks.seo.text')
@endsection
@section('scripts')
    {{-- connect jquery for gallery --}}
    <script src="{{ asset('assets/client/js/libraries/jquery.min.js') }}"></script>
    {{-- connect gallery js --}}
    <script src="{{ asset('assets/client/js/libraries/gallery.min.js') }}"></script>
    {{-- run gallery --}}
    <script type="text/javascript">
        const gallery = $('#gallery');
        jQuery(document).ready(($)=>{ gallery.lightGallery({});});
    </script>
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "{{ $university->name }}. {{ $university->abbreviation }}. Словакия",
            "description": "Факультеты и специальности в {{ $university->name }}. Информация об университете. Стоимость обучения. Стипендии. Общежития ВУЗа.",
            "url": "{{ route('universities.show', [$university->city->slug, $university->slug]) }}",
            "inLanguage": "ru"
        }
    </script>
    {{-- CollegeOrUniversity --}}
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "CollegeOrUniversity",
            "url": "{{ route('universities.show', [$university->city->slug, $university->slug]) }}",
            "name": "{{ $university->name }} {{ $university->abbreviation }}",
            "isAccessibleForFree": "http://schema.org/True",
            @if($university->logo_src)
                "logo": "{{ env('APP_URL') }}/storage/{{ $university->logo_src }}",
            @endif
            @if($university->description)
                "description": "{{ $university->description }}",
            @endif
            "foundingDate": "{{ $university->founding_year }}",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "{{ $city->name }}, Словакия",
                {{--"postalCode": "F-75002",--}}
                "streetAddress": "{{ $university->address }}"
            }
            {{--"description": "College description",--}}
            {{--"contactPoint": [
                { "@type": "ContactPoint", "telephone": "### ", "contactType": "customer service" }
            ],
            "sameAs": [
                "https://www.facebook.com/collegeexample",
                "https://twitter.com/collegeexample",
                "https://www.instagram.com/collegeexample/",
                "https://www.linkedin.com/school/collegeexample/"
            ]--}}
        }
    </script>
    {{--<script type="application/ld+json">
        {
         "@context": "https://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{ env('APP_URL') }}",
            "name": "Главная"
            }
          },
          {
           "@type": "ListItem",
           "position": 2,
           "item":
           {
            "@id": "{{ route('universities') }}",
            "name": "Университеты"
            }
          },
          {
           "@type": "ListItem",
           "position": 3,
           "item":
           {
            "@id": "{{ route('universities.index-by-city', $city->slug) }}",
            "name": "{{ $city->name }}"
            }
          },
          {
           "@type": "ListItem",
           "position": 4,
           "item":
           {
            "@id": "{{ route('universities.show', [$university->city->slug, $university->slug]) }}",
            "name": "{{ $university->name }}"
            }
          }
         ]
        }
    </script>--}}
@endsection



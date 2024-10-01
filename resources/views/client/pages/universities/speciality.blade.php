@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $speciality->name }}. {{ $university->name }}.</title>
    <meta property="og:title" content="{{ $speciality->name }}. {{ $university->name }}."/>
    <meta name="description" content="Поступление на {{ $speciality->name }} в Словакии. Информация о специальности «{{ $speciality->name }}» в {{ $university->name }}, {{ $faculty->name }} ({{ $university->abbreviation_sk }}). Направление {{ $speciality->direction->name }}. {{ $speciality->years_of_study }} года обучения. Бесплатное обучение для иностранцев.">
    <meta property="og:description" content="Поступление на {{ $speciality->name }} в Словакии. Информация о специальности «{{ $speciality->name }}» в {{ $university->name }}, {{ $faculty->name }} ({{ $university->abbreviation_sk }}). Направление {{ $speciality->direction->name }}. {{ $speciality->years_of_study }} года обучения. Бесплатное обучение для иностранцев."/>
@endsection
@section('body_class') viibes__faculty @endsection <!-- тут класс специальности ? -->
@section('seo-text')
    <h2>{{ $speciality->name }}</h2>
    <p>
        Специальность {{ $speciality->name }} ({{ $speciality->name_sk }}) на {{ $speciality->academicDegree->degree_title }}
        относится к {{ $faculty->name }} ({{ $faculty->name_sk }}) в {{ $university->name }} ({{ $university->name_sk }}).
        Направление специальности - {{ $speciality->direction->name }}. Длительность обучения составляет
        {{ $speciality->years_of_study }} года. {{ $speciality->name_sk }}
        @if(!$speciality->is_in_combination) не @endif является комбинированной специальностью.
        (комбинированные программы обучения нужно совмещать со второй на выбор программой и учить их совмещенно).
    </p>
@endsection
@section('seo-keywords')
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name_sk }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} {{ $faculty->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} поступление</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} как поступить</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} словакия</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} в Словакии</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} университет</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} {{ $university->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $speciality->name }} стоимость обучения</a>
@endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">{{ $speciality->name }}</h1>
            <a href="{{ route('universities.show', [$university->city->slug, $university->slug]) }}" class="viibes__h1_sub">{{ $university->name }} 🇸🇰</a>
            @include('client.blocks.breadcrumbs')
            @include('client.blocks.tags')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block">
                <div class="viibes__main_list_block_list">
                    <div class="viibes__faculty_main_content_list_item">
                        <h2 class="viibes__h3">Информация об Специальности</h2>
                        <div class="viibes__faculty_main_content_list_item_info">
                            <ul>
                                <li class="viibes__h6"><span class="viibes__color_purple">Название:</span> {{ $speciality->name }}</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Название на словацком:</span> {{ $speciality->name_sk }}️</li>
                                <li class="viibes__h6">
                                    <span class="viibes__color_purple">Университет:</span>
                                    <a href="{{ route('universities.show', [$city->slug, $university->slug]) }}"
                                       title="Больше про {{ $university->name }}"
                                       class="viibes__color_black">
                                        <u>{{ $university->name }}</u>
                                    </a>
                                </li>
                                <li class="viibes__h6">
                                    <span class="viibes__color_purple">Факультет:</span>
                                    <a href="{{ route('universities.faculty', [$city->slug, $university->slug, $faculty->slug]) }}"
                                       title="Смотреть больше про {{ $faculty->name }}"
                                       class="viibes__color_black">
                                        <u>{{ $faculty->name }}</u>
                                    </a>
                                </li>
                                <li class="viibes__h6">
                                    <span class="viibes__color_purple">Направления обучения:</span>
                                    <a href="" class="viibes__color_black" style="color: {{ $speciality->direction->element_color }} !important;" title="Смотреть специальности по направлению «{{ $speciality->direction->name }}»">
                                        <u>{{ $speciality->direction->name }}</u>
                                    </a>
                                    @if($speciality->direction_2)
                                         и <a href="" class="viibes__color_black" style="color: {{ $speciality->direction_2->element_color }} !important;" title="Смотреть специальности по направлению «{{ $speciality->direction->name }}»">
                                            <u>{{ $speciality->direction_2->name }}</u>
                                        </a>
                                    @endif
                                </li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Стоимость обучения:</span> бесплатно на словацком языке ⚡️</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Длительность обучения:</span> {{ $speciality->years_of_study }} года️</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Степень обучения:</span> {{ $speciality->academicDegree->degree_title }}️</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Вступительные экзамены:</span> <a class="viibes__modal_form_activator"><u>нужно уточнять у менеджера</u></a></li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Предметы специальности:</span> <a class="viibes__modal_form_activator"><u>нужно уточнять у менеджера</u></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="viibes__editor_content">
                        @if(isset($speciality->description) && !empty($speciality->description))
                            <div class="viibes__editor_content__inner">{!! $speciality->description !!}</div>
                        @endif
                        <h2 class="viibes__h2">{{ $speciality->name }} в {{ $university->abbreviation_sk }}. Как поступить?</h2>
                        <p class="viibes__text_normal">Если вы хотите поступить на специальность <b>{{ $speciality->name }} - {{ $university->name }}</b> через VIIBES Study, вы можете связаться с нами через контактную форму на нашем сайте или через любое из доступных средств связи. Наш менеджер предоставит вам дополнительную информацию о системе образования в Словакии, сориентирует вас в процессе поступления на специальность <b>{{ $speciality->name }}</b>, а также условиях поступления для иностранцев.</p>
                        <h3 class="viibes__h2">Стоимость обучения на специальности {{ $speciality->name }}</h3>
                        <p class="viibes__text_normal"><b>Иностранные студенты имеют право на бесплатное обучение на специальности {{ $speciality->name }}, если они проходят обучение на словацком языке.</b> Стоимость обучения на английском языке составляет {{ $university->education_cost_en }} евро в год.</p>
                        <h3 class="viibes__h3">Какие документы нужны для поступления на специальность {{ $speciality->name }} вместе с VIIBES Study</h3>
                        <p class="viibes__text_normal">Правильная подача необходимых документов и соблюдение требований и сроков, установленных в {{ $faculty->name }}, к которому относится специальность {{ $speciality->name }}, является залогом успешного поступления. Поскольку оформление документов в Словакии может занять много времени, рекомендуется начинать процесс поступления заблаговременно. Документы нужно оформлять у словацких переводчиков и нотариусе, с чем помогает компания VIIBES Study.</p>
                        <h4 class="viibes__h4">Перечень документов для поступления на специальность {{ $speciality->name }} ({{ $speciality->academicDegree->degree_title }}): </h4>
                        <ol>
                            @if($speciality->academicDegree->degree_index == 1)
                                <li class="viibes__text_normal"><b>Выписка оценок</b> абитуриента из школы за 8, 9, 10 класс, а также за первый семестр или 2 четверти 11 класса</li>
                            @else
                                <li class="viibes__text_normal"><b>Выписка оценок</b> абитуриента из университета</li>
                                <li class="viibes__text_normal"><b>Аттестат</b> о полученном среднем образовании</li>
                            @endif
                            <li class="viibes__text_normal"><b>Резюме и мотивационное письмо</b></li>
                            <li class="viibes__text_normal">Любые соответствующие <b>грамоты, дипломы или сертификаты</b> о достижениях в учебе или спорте</li>
                            <li class="viibes__text_normal"><b>Доверенность</b> на нашего куратора, который будет представлять интересы абитуриента в Словакии во время процесса поступления и оформлять все необходимые документы для поступления</li>
                        </ol>
                    </div>
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.universities')
                </div>
            </div>
        </div>
        @include('client.blocks.content')
    </section>
    @include('client.blocks.seo.text')
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
    {{--@include('client.blocks.seo.text')--}}
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "{{ $speciality->name }} в Словакии ({{ $speciality->academicDegree->degree_title }})",
            "description": "Специальность {{ $speciality->name }}. {{ $faculty->name }}. {{ $speciality->academicDegree->degree_title }}. Направление {{ $speciality->direction->name }}. {{ $speciality->years_of_study }} года обучения. Обучение в Словакии",
            "url": "{{ route('universities.speciality', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $speciality->academicDegree->slug, 'speciality_slug' => $speciality->slug]) }}",
            "inLanguage": "ru"
        }
    </script>
@endsection

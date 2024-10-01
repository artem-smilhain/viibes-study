@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $direction->meta_title }}</title>
    <meta property="og:title" content="{{ $direction->meta_title }}"/>
    <meta name="description" content="{{ $direction->meta_description }}">
    <meta property="og:description" content="{{ $direction->meta_description }}"/>
    @if(app('request')->input('page') || app('request')->input('degree'))
        <link rel="canonical" href="{{ route('specialities.show', $direction->slug) }}" />
    @endif
@endsection
@section('body_class') programs_by_direction @endsection
@php
    $direction_ucfirst = $direction->name;
    $str = mb_strtoupper(substr($direction_ucfirst,0,2));
    $direction_ucfirst[0] = $str[0];
    $direction_ucfirst[1] = $str[1];
@endphp
{{--@section('seo-keywords')
    <a href="#" class="viibes__seo_keyword">{{ $direction->name }} в словакии</a>
    <a href="#" class="viibes__seo_keyword">{{ $direction->name }} специальности словакия</a>
    <a href="#" class="viibes__seo_keyword">{{ $direction->name }} программы обучения в словакии</a>
    <a href="#" class="viibes__seo_keyword">{{ $direction->name }} программы обучения</a>
    <a href="#" class="viibes__seo_keyword">поступить на {{ $direction->name }}</a>
    <a href="#" class="viibes__seo_keyword">поступить на {{ $direction->name }} в Словакию</a>
    <a href="#" class="viibes__seo_keyword">{{ $direction->name }} в университетах словакии</a>
    <a href="#" class="viibes__seo_keyword">{{ $direction->name }} в вузах словакии</a>
@endsection--}}
@php $degree = app('request')->input('degree') @endphp
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h2 class="viibes__h1">{{ $direction_ucfirst }}</h2>
            <a href="{{ route('specialities') }}" class="viibes__h1_sub">Специальности и направления университетов Словакии 🇸🇰</a>
            @include('client.blocks.breadcrumbs')
            @include('client.blocks.tags')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block">
                <div class="viibes__main_list_block_list">
                    @include('client.components.filter')
                    <div class="viibes__faculty_main_content_list_item_specialties">
                        @if(count($specialities))
                            @include('client.pages.specialities.specialities-list')
                        @else
                            <p class="viibes__text_big">
                                <b>Специальности не найдены 😞</b>
                                <br>
                                Попробуйте <b>выбрать другой уровень обучения</b> или
                                <a href="{{ route('specialities') }}" class="viibes__color_purple"><u>перейти на страницу со всеми специальностям</u></a>
                                и продолжить поиск.
                            </p>
                        @endif
                    </div>
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.universities')
                </div>
            </div>
            {{ $specialities->links('client.components.pagination') }}
        </div>
        @include('client.blocks.content')
        <section class="viibes__university_additional_text"> <!-- -->
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">{{ $direction_ucfirst }} в Словакии. Стоимость обучения</h2>
                    <p class="viibes__text_normal"><a href="{{ route('universities') }}" class="viibes__color_purple"><u>Государственные университеты Словакии</u></a> полностью финансируются правительством Словакии и покрывают стоимость высшего образования, в том числе и для иностранцев, которые хотят <b>учиться по направлению {{ $direction->name }} в Словакии</b>. Высшее образование в Словакии предлагает иностранным абитуриентам полностью бесплатное обучение в университетах Словакии, однако для получения этой льготы студенты должны в обязательном порядке обучаться на словацком языке.</p>
                    <h3 class="viibes__h3">Поступление в Словакию по направлению {{ $direction->name }}. Какие документы нужны?</h3>
                    <p class="viibes__text_normal">Для успешного поступления нужно правильно подать необходимые документы и соблюдать требования и сроков. Поскольку оформление документов в Словакии может занять некоторое время, лучше всего начать процесс поступления как можно раньше. Документы нужно оформлять у словацких переводчиков и нотариусе, с чем помогает компания VIIBES Study.</p>
                    <h4 class="viibes__h4">{{ $direction_ucfirst }} - перечень документов для поступления на <u>бакалавра</u>: </h4>
                    <ol>
                        <li class="viibes__text_normal"><b>Выписка оценок</b> абитуриента из школы за 8, 9, 10 класс, а также за первый семестр или 2 четверти 11 класса</li>
                        <li class="viibes__text_normal"><b>Резюме и мотивационное письмо</b></li>
                        <li class="viibes__text_normal">Любые соответствующие <b>грамоты, дипломы или сертификаты</b> о достижениях в учебе или спорте</li>
                        <li class="viibes__text_normal"><b>Доверенность</b> на нашего куратора, который будет представлять интересы абитуриента в Словакии во время процесса поступления и оформлять все необходимые документы</li>
                    </ol>
                    <h4 class="viibes__h4">{{ $direction_ucfirst }} - перечень документов для поступления на <u>магистратуру</u>: </h4>
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
    </section>
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
@endsection
@section('scripts')
    <script> //PROGRAM FILTER SELECT
        let select_degree__form_select = document.getElementById('select_degree__form_select');
        select_degree__form_select.onchange = function() {
            window.location = this.value;
        };
    </script>
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "{{ $direction->meta_title }}",
            "description": "{{ $direction->meta_description }}",
            "url": "{{ route('specialities.show', $direction->slug) }}",
            "inLanguage": "ru"
        }
    </script>
@endsection

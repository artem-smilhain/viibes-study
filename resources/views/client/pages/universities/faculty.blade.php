@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $faculty->name }}. {{ $university->name }}.</title>
    <meta property="og:title" content="{{ $faculty->name }}. {{ $university->name }}."/>
    <meta name="description" content="{{ $faculty->name }} {{ $university->abbreviation_sk }}: cпециальности на бакалавра и магистратуре с бесплатным обучением для иностранцев. Информация про {{ $faculty->name }} в {{ $university->name }}. Список всех специальностей в {{ $faculty->name }} {{ $university->abbreviation_sk }}.">
    <meta property="og:description" content="{{ $faculty->name }} {{ $university->abbreviation_sk }}: cпециальности на бакалавра и магистратуре с бесплатным обучением для иностранцев. Информация про {{ $faculty->name }} в {{ $university->name }}. Список всех специальностей в {{ $faculty->name }} {{ $university->abbreviation_sk }}."/>
@endsection
@section('body_class') viibes__faculty @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">{{ $faculty->name }}</h1>
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
                        <h3 class="viibes__h3">Информация о факультете: </h3>
                        <div class="viibes__faculty_main_content_list_item_info">
                            <ul>
                                <li class="viibes__h6"><span class="viibes__color_purple">Название:</span> {{ $faculty->name }}</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Название на словацком:</span> {{ $faculty->name_sk }}️</li>
                                <li class="viibes__h6">
                                    <span class="viibes__color_purple">
                                    Университет:</span>
                                    <a href="{{ route('universities.show', [$city->slug, $university->slug]) }}" title="Больше про {{ $university->name }}">
                                        <u>{{ $university->name }}</u>
                                    </a>
                                </li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Стоимость обучения:</span> бесплатно на словацком языке ⚡️</li>
                                <li class="viibes__h6"><span class="viibes__color_purple">Вступительные экзамены:</span> <a class="viibes__modal_form_activator"><u>нужно уточнять у менеджера</u></a></li>
                            </ul>
                        </div>
                    </div>
                    @if(isset($faculty->description) && !empty($faculty->description))
                        <div class="viibes__faculty_main_content_list_item">
                            <h3 class="viibes__h3">Описание факультета: </h3>
                            <p class="viibes__text_normal">{{ $faculty->description }}</p>
                        </div>
                    @endif
                    @include('client.pages.universities.faculty-programs-list')
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.universities')
                </div>
            </div>
        </div>
        <section class="viibes__university_additional_text"> <!-- -->
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">{{ $faculty->name }}. Стоимость обучения</h2>
                    <p class="viibes__text_normal">Факультет электротехники и информатики предлагает <b>бесплатное обучение для иностранных студентов при условии, что обучение ведется на словацком языке</b>. На англоязычных программах плата за обучение составляет <b>{{ $university->education_cost_en }} евро в год.</b></p>
                </div>
            </div>
        </section>
        <section class="viibes__university_additional_text"> <!-- -->
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">Как поступить на {{ $faculty->name }}. {{ $university->name }}</h2>
                    <p class="viibes__text_normal">Чтобы поступить на {{ $faculty->name }} в {{ $university->name }} вместе с VIIBES Study, свяжитесь с нами через форму на нашем сайте или по любому из контактов: наш менеджер расскажет более подробно о системе образования Словакии, процессе поступления, поможет с выбором факультета и специальности. </p>
                    <h3 class="viibes__h3">Какие документы нужны для поступления на {{ $faculty->name }} вместе с VIIBES Study</h3>
                    <p class="viibes__text_normal">Самым важным фактором успешного поступления является <b>правильная подача необходимых документов и соблюдение требований и сроков факультета</b>. Поскольку оформление документов в Словакии может занять некоторое время, <b>лучше всего начать процесс поступления как можно раньше.</b></p>
                    <h4 class="viibes__h4">Перечень документов для поступления на <u>бакалавра</u> на {{ $faculty->name }}: </h4>
                    <ol>
                        <li class="viibes__text_normal"><b>Выписка оценок</b> абитуриента из школы за 8, 9, 10 класс, а также за первый семестр или 2 четверти 11 класса</li>
                        <li class="viibes__text_normal"><b>Резюме и мотивационное письмо</b></li>
                        <li class="viibes__text_normal">Любые соответствующие <b>грамоты, дипломы или сертификаты</b> о достижениях в учебе или спорте</li>
                        <li class="viibes__text_normal"><b>Доверенность</b> на нашего куратора, который будет представлять интересы абитуриента в Словакии во время процесса поступления и оформлять все необходимые документы</li>
                    </ol>
                    <h4 class="viibes__h4">Перечень документов для поступления на <u>магистратуру</u> на {{ $faculty->name }}: </h4>
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
    {{--@include('client.blocks.seo.text')--}}
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "{{ $faculty->name }} ({{ $university->abbreviation }})",
            "description": "{{ $faculty->name }} в {{ $university->name }}. Информация о факультете. Список специальностей без вступительных экзаменов",
            "url": "{{ route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]) }}",
            "inLanguage": "ru"
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
          },
          {
           "@type": "ListItem",
           "position": 5,
           "item":
           {
            "@id": "{{ route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]) }}",
            "name": "{{ $faculty->name }}"
            }
          }
         ]
        }
    </script>--}}
@endsection
{{--
@section('seo-text')
    <h1>{{ $faculty->name }}</h1>
    <p>
        Один из основных факультетов в {{ $university->name }} является {{ $faculty->name }}.
        Название факультета на словацком: {{ $faculty->name_sk }}.
        Стоимость обучения - бесплатно на словацком языке. Язык обучения: словацкий и английский.
        Основное условия для поступления - полное среднее образования или полное среднего профессиональное образования.
        Доступно обучение для абитуриентов из разных стран, в том числе и для абитуриентов из Украины, Беларуси и других стран СНГ.
        Факультет сотрудничает со многими организациями Словакии и Европы в целом, потому {{ $faculty->name_sk }}
        дает для студентов огромные возможности в получении практического опыта уже во время учебы.
    </p>
    <h2>Доступные специальности факультета:</h2>
    @foreach($academic_degrees as $academic_degree)
        <h3>Программы обучения {{ $academic_degree['academic_degree']->degree_title }}:</h3>
        @foreach($academic_degree['programs'] as $program)
            <li>{{ $program->name }}</li>
        @endforeach
    @endforeach
@endsection
@section('seo-keywords')
    <a href="#" class="viibes__seo_keyword">{{ $faculty->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $faculty->name }} {{ $university->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $faculty->name }} специальности</a>
    <a href="#" class="viibes__seo_keyword">{{ $faculty->name }} поступление</a>
    <a href="#" class="viibes__seo_keyword">Специальности {{ $faculty->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $faculty->name }}</a>
@endsection
--}}

@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $category->meta_title }}</title>
    <meta property="og:title" content="{{ $category->meta_title }}"/>
    <meta name="description" content="{{ $category->meta_description }}">
    <meta property="og:description" content="{{ $category->meta_description }}"/>
    @if(app('request')->input('page'))
        <link rel="canonical" href="{{ route('universities.index-by-category', $category->slug) }}" />
    @endif
@endsection
@section('body_class') @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h2 class="viibes__h1">{{ $category->name }} университеты</h2>
            <a href="{{ route('universities') }}" class="viibes__h1_sub">Университеты Словакии 🇸🇰</a>
            @include('client.blocks.breadcrumbs')
            @include('client.blocks.tags')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block">
                <div class="viibes__main_list_block_list">
                    @include('client.pages.universities.universities-list')
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.universities')
                </div>
            </div>
            {{ $universities->links('client.components.pagination') }}
        </div>
        @include('client.blocks.content')
    </section>
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.seo.countries')
    {{--@if(!app('request')->input('page'))
        @include('client.blocks.seo.text')
    @endif--}}
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "{{ $category->name }} университеты Словакии",
            "description": "{{ $category->name }} университеты Словакии. {{ $category->name }} ВУЗы Словакии. Поступайте в {{ $category->name }} университеты Словакии. Бесплатное высшее образование в Европе",
            "url": "{{ route('universities.index-by-category', $category->slug) }}",
            "inLanguage": "ru"
        }
    </script>
    {{--
    <script type="application/ld+json">
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
                "@id": "{{ route('university-categories') }}",
                "name": "Категории университетов"
            }
        },
        {
            "@type": "ListItem",
            "position": 3,
            "item":
            {
                "@id": "{{ route('universities.index-by-category', $category->slug) }}",
                "name": "{{ $category->name }} университеты"
            }
        }
    </script>
    --}}
@endsection
{{--
@section('seo-text')
    <h1>{{ $category->name }} Словакии. Список ВУЗов.</h1>
    <p>
        {{ $category->name }} - одни из лучших в Восточной Европе. Поступление и зачисление в {{ $category->name }}
        Словакии происходит на основе оценок абитуриента в школе (если Вы поступаете на бакалавриат)
        или на основе диплома (если Вы поступаете на магистратуру). В Словакии есть такие {{ $category->name }}
        (или университеты, в которых есть соответствующие специальности):
    </p>
    <ul>
        @foreach($universities as $university)
            <li>{{ $university->name }}</li>
        @endforeach
    </ul>
    <p>
        Иностранные студенты могут учиться бесплатно на словацком языке. Перечень документов для поступления
        зависит от факультета и специальности (эту информацию предоставляем мы по ходу сотрудничества: какие
        документы и в какие сроки нужно предоставлять для успешного поступления). На отдельных факультетах
        могут быть вступительные экзамены или собеседование. Форма обучения - дневная.
    </p>
@endsection
@section('seo-keywords')
    <a href="#" class="viibes__seo_keyword">{{ $category->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} в словакии</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} образование в словакии</a>
    <a href="#" class="viibes__seo_keyword">поступление в {{ $category->name }} словакии</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} словакии</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} словакии список</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} в Европе</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} с бесплатным обучением</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} Словакии с бесплатным обучением</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} обучение за границей</a>
    <a href="#" class="viibes__seo_keyword">{{ $category->name }} в словакии специальности</a>
    <a href="#" class="viibes__seo_keyword">Специальности {{ $category->name }} словакия</a>
@endsection
--}}

@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $city->meta_title }}</title>
    <meta property="og:title" content="{{ $city->meta_title }}"/>
    <meta name="description" content="{{ $city->meta_description }}">
    <meta property="og:description" content="{{ $city->meta_description }}"/>
    @if(app('request')->input('page'))
        <link rel="canonical" href="{{ route('universities.index-by-city', $city->slug) }}" />
    @endif
@endsection
@section('seo-text')
    <h1>{{ $city->name }} университеты. ВУЗы {{ $city->name }}</h1>
    <p>
        На этой странице представлены все государственные университеты в городе {{ $city->name }}.
        Во всех государственных ВУЗах города {{ $city->name }} иностранные абитуриенты могут
        учиться бесплатно. Вы легко найдете всю информацию о лучших университетах {{ $city->name }}.
    </p>
    <p>Список университетов в городе {{ $city->name }}:</p>
    <ul>
        @foreach($universities as $university)
            <li>{{ $university->name }}</li>
        @endforeach
    </ul>
    <p>Для того, чтобы начать работу над поступлением, необходимо связаться с нашим менеджером.</p>
@endsection
@section('seo-keywords')
    <a href="#" class="viibes__seo_keyword">{{ $city->name }} университеты</a>
    <a href="#" class="viibes__seo_keyword">университеты в {{ $city->name }}</a>
    <a href="#" class="viibes__seo_keyword">{{ $city->name_sk }} университеты</a>
    <a href="#" class="viibes__seo_keyword">{{ $city->name }} вузы</a>
    <a href="#" class="viibes__seo_keyword">{{ $city->name }} университеты с бесплатным обучением</a>
    <a href="#" class="viibes__seo_keyword">поступить в {{ $city->name }}</a>
    <a href="#" class="viibes__seo_keyword">вузы {{ $city->name }}</a>
    <a href="#" class="viibes__seo_keyword">университеты {{ $city->name }} специальности</a>
    <a href="#" class="viibes__seo_keyword">{{ $city->name }} словакия университеты</a>
@endsection
@section('body_class') @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h2 class="viibes__h1">Университеты в {{ $city->name }}</h2>
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
    @include('client.blocks.seo.text')
@endsection
@section('schema')
    <!-- ПОПРАВИТЬ -->
    {{--<script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Университеты в городе {{ $city->name }}. ВУЗы {{ $city->name }}",
            "description": "Университеты в городе {{ $city->name }}. Поступайте в университеты города {{ $city->name }} в Словакии. ВУЗы {{ $city->name }}",
            "url": "{{ route('universities.index-by-city', $_city->slug) }}",
            "inLanguage": "ru"
        }
    </script>
    <!-- // ПОПРАВИТЬ -->
    --}}
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
            "@id": "{{ route('universities.index-by-city', $_city->slug) }}",
            "name": "{{ $city->name }}"
            }
          }
         ]
        }
    </script>
    --}}
@endsection
{{--

--}}

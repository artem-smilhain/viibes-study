@extends('client.layouts.app')
@section('meta-tags')
    <title>Университеты Словакии по направлениям обучения.</title>
    <meta property="og:title" content="Университеты Словакии по направлениям обучения."/>
    <meta name="description" content="Список всех государственных университетов Словакии по направлениям обучения: IT образование в Словакии, экономические университеты Словакии, технические университеты Словакии, медицинские университеты Словакии, архитектурные университеты Словакии, творческое направление, менеджмент, педагогика, спорт.">
    <meta property="og:description" content="Список всех категории университетов Словакии для более удобного поиска подходящего ВУЗа и специальности"/>
@endsection
@section('body_class') viibes__map @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h2 class="viibes__h1">{{ $content->content_heading }}</h2>
            <a href="{{ route('universities') }}" class="viibes__h1_sub">Университеты Словакии 🇸🇰</a>
            @include('client.blocks.breadcrumbs')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block" style="grid-template-columns: 7fr 3.5fr;">
                <div class="viibes__main_list_block_list">
                    <div class="viibes__editor_block_main_inner_content">
                        @if($content->content_img_src)
                            <img src="/storage/{{ $content->content_img_src }}"
                                 class="viibes__editor_block_main_inner_content_thumbnail">
                        @endif
                        <div id="viibes__editor_content">
                            {!! $content->content_text !!}
                        </div>
                    </div>
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.content')
                </div>
            </div>
        </div>
    </section>
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.seo.countries')
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Категории университетов Словакии",
            "description": "Список всех категории университетов Словакии для более удобного поиска подходящего ВУЗа и специальности",
            "url": "{{ route('university-categories') }}",
            "inLanguage": "ru"
        }
    </script>
@endsection




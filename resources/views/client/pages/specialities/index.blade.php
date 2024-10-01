@extends('client.layouts.app')
@section('meta-tags')
    <title>Специальности университетов Словакии по направлениям</title>
    <meta property="og:title" content="Специальности университетов Словакии по направлениям"/>
    <meta name="description" content="Список всех специальностей университетов Словакии. Направления обучения в словацких университетах. Специальности в Словакии без вступительных экзаменов. Поиск специальностей словацких университетов по направлениям. У нас на сайте более 1500 специальностей университетов Словакии по всем направлениям.">
    <meta property="og:description" content="Список всех специальностей университетов Словакии. Направления обучения в словацких университетах. Специальности в Словакии без вступительных экзаменов. Поиск специальностей словацких университетов по направлениям. У нас на сайте более 1500 специальностей университетов Словакии по всем направлениям."/>
    @if(app('request')->input('page') || app('request')->input('degree'))
        <link rel="canonical" href="{{ route('specialities') }}" />
    @endif
@endsection
@section('body_class') @endsection <!-- тут другой класс? -->
@php $degree = app('request')->input('degree') @endphp
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h2 class="viibes__h1">Специальности и направления 🇸🇰</h2>
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
                        @include('client.pages.specialities.specialities-list')
                    </div>
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.universities')
                </div>
            </div>
            {{ $specialities->links('client.components.pagination') }}
        </div>
        @include('client.blocks.content')
    </section>
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
@endsection
@section('scripts')
    <script>
        //PROGRAM FILTER SELECT
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
            "name": "Список специальностей и направлений университетов Словакии",
            "description": "Список всех специальностей словацких университетов. Поиск специальностей по направлениям. Специальности в Словакии без вступительных экзаменов.",
            "url": "{{ route('specialities') }}",
            "inLanguage": "ru"
        }
    </script>
@endsection

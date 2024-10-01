@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $faculty->name }} {{ $university->abbreviation_sk }}. Специальности {{ mb_strtolower($degree->degree_title) }}.</title>
    <meta property="og:title" content="{{ $faculty->name }} {{ $university->abbreviation_sk }}. Специальности {{ mb_strtolower($degree->degree_title) }}."/>
    <meta name="description" content="Список специальностей на {{ mb_strtolower($degree->degree_title) }} в {{ $faculty->name }} ({{ $university->name }}). {{ $degree->degree_title }} в Словакии - специальности в {{ $faculty->name }} в {{ $university->name }} c бесплатным обучением для иностранцев.">
    <meta property="og:description" content="Специальности на {{ $degree->degree_title }} {{ $faculty->name }} в {{ $university->name }}"/>
@endsection
@section('body_class') viibes__map @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h2 class="viibes__h1">Специальности <span style="text-transform: lowercase;">{{ $degree->degree_title }}</span></h2>
            <a href="{{ route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]) }}" class="viibes__h1_sub">{{ $faculty->name }} - {{ $university->name }} 🇸🇰</a>
            @include('client.blocks.breadcrumbs')
            @include('client.blocks.tags')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block">
                <div class="viibes__main_list_block_list">
                    @include('client.pages.universities.faculty-programs-list')
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.universities')
                </div>
            </div>
        </div>
        {{--<section class="viibes__university_additional_text"> <!-- -->
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">Стоимость обучения - {{ $faculty->name }} в {{ $university->name }}</h2>
                    <p class="viibes__text_normal">Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и благодаря их труду ежегодно сотни питомцев находят свой новый дом. Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
                    <p class="viibes__text_normal">Один из проверенных способов это сделать — помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
                </div>
            </div>
        </section>
        <section class="viibes__university_additional_text"> <!-- -->
            <div class="viibes__wrap">
                <div class="viibes__university_additional_text_inner">
                    <h2 class="viibes__h2">Условия поступления на {{ $faculty->name }} в {{ $university->name }}</h2>
                    <p class="viibes__text_normal">Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и благодаря их труду ежегодно сотни питомцев находят свой новый дом. Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
                    <p class="viibes__text_normal">Один из проверенных способов это сделать — помочь приюту для животных Домашний. У этих ребят живёт более 1500 четвероногих, и благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
                </div>
            </div>
        </section>
    </section>
    --}}
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "{{ $degree->degree_title }} {{ $faculty->name }} ({{ $university->abbreviation }})",
            "description": "Специальности на {{ $degree->degree_title }} {{ $faculty->name }} в {{ $university->name }}",
            "url": "{{ route('universities.degree', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $degree->slug]) }}",
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
          },
          {
           "@type": "ListItem",
           "position": 6,
           "item":
           {
            "@id": "{{ route('universities.degree', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $degree->slug]) }}",
            "name": "{{ $degree->degree_title }}"
            }
          }
         ]
        }
    </script>--}}
@endsection

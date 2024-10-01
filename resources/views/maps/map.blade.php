@extends('client.layouts.app')
@section('meta-tags')
    <title>Карта сайта viibes.study - все страницы сайта</title>
    <meta name="description" content="Карта сайта viibes.study: все страницы и разделы сайта на одной странице. Навигация по сайту viibes.study.">
    <meta property="og:title" content="Карта сайта viibes.study - все страницы сайта"/>
    <meta property="og:description" content="Карта сайта viibes.study: все страницы и разделы сайта на одной странице. Навигация по сайту viibes.study."/>
@endsection
@section('body_class') viibes__map @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Карта сайта viibes.study 🧭</h1>
            @include('client.blocks.breadcrumbs')
        </div>
    </section>
    <section>
        <section class="viibes__main"> <!-- MAIN CONTENT -->
            <div class="viibes__wrap">
                <div>
                    <h2 class="viibes__h3">Основные страницы</h2>
                    <div class="viibes__preview_tags" id="viibes__preview_tags">
                        <a href="{{ route('home') }}" class="viibes__preview_tags_tag">#Главная страница</a>
                        <a href="{{ route('services') }}" class="viibes__preview_tags_tag">#Услуги</a>
                        <a href="{{ route('courses') }}" class="viibes__preview_tags_tag">#Курсы языка</a>
                        <a href="{{ route('reviews') }}" class="viibes__preview_tags_tag">#Отзывы</a>
                        <a href="{{ route('contacts') }}" class="viibes__preview_tags_tag">#Контакты</a>
                        <a href="{{ route('webinar') }}" class="viibes__preview_tags_tag">#Вебинар</a>
                        <a href="{{ route('faq') }}" class="viibes__preview_tags_tag">#FAQ</a>
                    </div>
                </div>
                <div>
                    <h2 class="viibes__h3">Университеты</h2>
                    <div class="viibes__preview_tags" id="viibes__preview_tags" style="margin-bottom: 0;">
                        <a href="{{ route('universities') }}" class="viibes__preview_tags_tag">#все университеты</a>
                        <a href="{{ route('university-categories') }}" class="viibes__preview_tags_tag">#по категориям</a>
                        @foreach($universities as $university)
                            <a href="{{ route('universities.show', [$university->city->slug, $university->slug]) }}" class="viibes__preview_tags_tag">
                                #{{ $university->abbreviation_sk }}
                            </a>
                        @endforeach
                    </div>
                    @include('client.blocks.tags', ['tags' => $tags_universities])
                </div>
                <div>
                    <h2 class="viibes__h3">Специальности</h2>
                    <div class="viibes__preview_tags" id="viibes__preview_tags" style="margin-bottom: 0;">
                        <a href="{{ route('specialities') }}" class="viibes__preview_tags_tag">#все специальности</a>
                    </div>
                    @include('client.blocks.tags', ['tags' => $tags_programs])
                </div>
                <div>
                    <h2 class="viibes__h3">Блог</h2>
                    <div class="viibes__preview_tags" id="viibes__preview_tags" style="margin-bottom: 0;">
                        <a href="{{ route('blog') }}" class="viibes__preview_tags_tag">#все публикации</a>
                    </div>
                    @include('client.blocks.tags', ['tags' => $tags_blog])
                </div>
                <div>
                    <h2 class="viibes__h3">Страны</h2>
                    <div class="viibes__preview_tags" id="viibes__preview_tags" style="margin-bottom: 0;">
                        <a href="{{ route('ukraine') }}" class="viibes__preview_tags_tag">#Украина 🇺🇦</a>
                        <a href="{{ route('belarus') }}" class="viibes__preview_tags_tag">#Беларусь 🇧🇾</a>
                        <a href="" class="viibes__preview_tags_tag">#Казахстан 🇰🇿</a>
                        <a href="" class="viibes__preview_tags_tag">#Молдова 🇲🇩</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

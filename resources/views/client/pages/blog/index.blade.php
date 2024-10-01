@extends('client.layouts.app')
@section('meta-tags')
    <title>Блог про учебу и жизнь в Словакии</title>
    <meta name="description" content="Блог о Словакии: мы рассказываем о поступлении в университеты Словакии, студенческой жизни в словацких университетах, путешествиях по Словакии и о словацком языке.">
    <meta property="og:title" content="Блог про учебу и жизнь в Словакии"/>
    <meta property="og:description" content="Блог о Словакии: мы рассказываем о поступлении в университеты Словакии, студенческой жизни в словацких университетах, путешествиях по Словакии и о словацком языке."/>
    @if(app('request')->input('page'))
        <link rel="canonical" href="{{ route('blog') }}" />
    @endif
@endsection
@section('body_class')  @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Блог о Словакии 📝</h1>
            @include('client.blocks.breadcrumbs')
            @include('client.blocks.tags')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block">
                <div class="viibes__main_list_block_list">
                    @include('client.pages.blog.posts-list')
                </div>
                <div class="viibes__main_list_block_sidebar">
                    @include('client.layouts.sidebars.blog')
                </div>
            </div>
            {{ $posts->links('client.components.pagination') }}
        </div>
    </section>
    @include('client.blocks.seo.countries')
@endsection
@section('schema')
@endsection


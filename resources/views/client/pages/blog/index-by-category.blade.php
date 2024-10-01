@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $category->name }}: блог про учебу и жизнь в Словакии</title>
    <meta name="description" content="{{ $category->description }}">
    <meta property="og:title" content="{{ $category->name }}. Блог про учебу и жизнь в Словакии"/>
    <meta property="og:description" content="{{ $category->description }}"/>
    @if(app('request')->input('page'))
        <link rel="canonical" href="{{ route('blog') }}" />
    @endif
@endsection
@section('body_class') @endsection <!-- тут другой класс? -->
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Рубрика: {{ $category->name }}</h1>
            <a href="{{ route('blog') }}" class="viibes__h1_sub">Блог о Словакии 📝</a>
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


<!--
////////////////////////////////////////////
    Ну і що ти тут забув??
////////////////////////////////////////////
-->
@php $ip_country = (new \App\Http\Controllers\Controller())->get_user_location(Request::ip())['countryCode']; @endphp
<!DOCTYPE html>
<html lang="ru" prefix="og:https://ogp.me/ns/website#" @yield('html-tag')> {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    {{-- Мета теги страницы --}}
    @yield('meta-tags')
    {{-- Подключения в теге HEAD --}}
    @include('client.layouts.connections.head')
    {{-- OPENGRAPH --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="VIIBES Study"/>
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:image" content="{{ URL::asset('/assets/client/images/opengraph/og_img.jpg') }}"/>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('/assets/client/css/main.css') }}">
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('/assets/client/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('/assets/client/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('/assets/client/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('/assets/client/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ URL::asset('/assets/client/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    {{-- Theme Color--}}
    <meta name="theme-color" content="#A264F1">


    <!--<link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>-->
    <link rel="stylesheet" href="{{ URL::asset('/assets/client/css/libraries/intl-tel-input.css') }}">
    <script src="{{ URL::asset('/assets/client/js/libraries/intl-tel-input/intl-tel-input.min.js') }}"></script>

</head>
<body id="website" class="@yield('body_class')">
    {{-- Разные подключения после закрытия тега body --}}
    @include('client.layouts.connections.body')
    {{-- Скрипты SCHEMA ORG --}}
    @include('client.layouts.connections.schema')
    {{-- SITE Content --}}
    @include('client.layouts.base.header')
    <div class="viibes__shadow" id="shadow"></div>
    <div class="viibes__site_content">
        @yield('content')
    </div>
    @include('client.layouts.base.footer')
    {{-- подключаем всплывающие окна --}}
    @include('client.blocks.modal.video')
    @include('client.blocks.modal.loader')
    @include('client.blocks.modal.main')
    {{-- Дополнительные скрипты --}}
    @yield('scripts')
    <script src="{{ asset('assets/client/js/main.js') }}"></script>
</body>
</html>

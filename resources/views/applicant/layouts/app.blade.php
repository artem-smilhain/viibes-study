
<!DOCTYPE html>
<html lang="ru" prefix="og:https://ogp.me/ns/website#" @yield('html-tag')> {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<head>
    <title>Личный кабинет</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('/assets/client/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/applicant/css/main.css') }}">
</head>
<body>
    @include('applicant.layouts.header')
    @yield('body')
    @include('applicant.layouts.footer')
</body>
</html>

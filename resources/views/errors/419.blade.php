@extends('client.layouts.app')
@section('meta-tags')
    <title>419</title>
    <meta name="description" content="Сессия истекла. Перегрузите страницу и попробуйте снова.">
@endsection
@section('content')
    <section class="viibes__thanks_main" style="margin-bottom: 3rem;">
        <div class="viibes__wrap">
            <div>
                <h1 class="viibes__h1 viibes__color_purple">Whoops! 419 😵</h1>
                <p class="viibes__h1_sub">Сессия истекла. Перегрузите страницу и попробуйте снова.</p>
            </div>
            <img src="{{ URL::asset('/assets/client/images/error.webp') }}" class="viibes__thanks_main_video">
            {{--<img src="{{ URL::asset('/assets/client/images/thanks.png') }}"
                 alt="веселая собака" title="Веселая собака" class="viibes__thanks_main_image">--}}
            <a href="{{ route('home') }}" class="viibes__btn_link">Вернуться на главную <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка"></a>
        </div>
    </section>
@endsection





@extends('client.layouts.app')
@section('meta-tags')
    <title>Регистрация прошла успешно!</title>
@endsection
@section('body_class') viibes__contacts-page @endsection
@section('content')
    <section class="viibes__thanks_main" style="margin-bottom: 3rem;">
        <div class="viibes__wrap">
            <div>
                <h1 class="viibes__h1 viibes__color_purple">Ďakujem 💜</h1>
                <p class="viibes__h1_sub">
                    Вы успешно зарегистрированы на вебинар!
                    Ссылку на трансляцию вы получите по номеру телефона или Email, указанные при регистрации
                </p>
            </div>
            <video src="{{ URL::asset('/assets/client/video/giphy.mp4') }}"
                   class="viibes__thanks_main_video" autoplay muted loop playsinline></video>
            {{--<img src="{{ URL::asset('/assets/client/images/thanks.png') }}"
                 alt="веселая собака" title="Веселая собака" class="viibes__thanks_main_image">--}}
            <a href="{{ route('home') }}" class="viibes__btn_link">На главную страницу<img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка"></a>
        </div>
    </section>
@endsection

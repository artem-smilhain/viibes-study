@extends('client.layouts.app')
@section('meta-tags')
    <title>Заявка отправлена!</title>
@endsection
@section('body_class') viibes__contacts-page @endsection
@section('content')
    <section class="viibes__thanks_main" style="margin-bottom: 3rem;">
        <div class="viibes__wrap">
            <div>
                <h1 class="viibes__h1 viibes__color_purple">Спасибо за заявку</h1>
                <p class="viibes__h1_sub">Мы свяжемся с Вами в ближайшее время по номеру телефона <b>{{ Request::get('phone') }}</b>️</p>
                <p class="not_valid_number">Если номер телефона указан неверно, пожалуйста, <a href="#" class="viibes__modal_form_activator"><u>отправьте заявку повторно</u></a> или свяжитесь с нами, используя <a href="{{ route('contacts') }}"><u>контактные данные, указанные на нашем сайте</u></a></p>
            </div>
            <a href="{{ route('home') }}" class="viibes__btn_link">Вернуться на главную <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка"></a>
        </div>
    </section>
@endsection

{{-- <video src="{{ URL::asset('/assets/client/video/giphy.mp4') }}"
                   class="viibes__thanks_main_video" autoplay muted loop playsinline></video>--}}
{{--<img src="{{ URL::asset('/assets/client/images/thanks.png') }}"
     alt="веселая собака" title="Веселая собака" class="viibes__thanks_main_image">--}}

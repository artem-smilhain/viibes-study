@extends('client.layouts.app')
@section('meta-tags')
    <title>Личный кабинет VIIBES Study</title>
    <meta property="og:title" content="Личный кабинет VIIBES Study"/>
@endsection
@section('body_class') viibes__course viibes__login @endsection
@section('content')
    <section class="viibes__course_preview" style="padding-bottom: 3rem;">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Войти в личный кабинет 👨‍💻</h1>
            <div class="viibes__seo_breadcrumbs">
                <div class="viibes__seo_breadcrumbs_items" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <div class="viibes__seo_breadcrumbs_items_item" itemscope itemprop="itemListElement" itemtype="https://schema.org/ListItem">
                        <a href="{{ env('APP_URL') }}" class="viibes__text_small" title="Перейти на главную" itemprop="item">
                            <u itemprop="name">Главная</u> <meta itemprop="position" content="1"/>
                        </a><div class="viibes__footer_middle_list_circle"></div>
                    </div>
                    <div class="viibes__seo_breadcrumbs_items_item" itemscope itemprop="itemListElement" itemtype="https://schema.org/ListItem"> {{-- Last item --}}
                        <a href="{{ route('courses') }}" class="viibes__text_small" itemprop="item" onclick="return false">
                            <b itemprop="name" class="viibes__color_purple">Вход в личный кабинет</b><meta itemprop="position" content="2"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="viibes__wrap">
            <form method="POST" action="{{ route('login') }}" class="viibes__form">
                @csrf
                <div>
                    <input id="email" placeholder="Email:" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <input id="password" placeholder="Пароль:" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div style="display: flex; gap: 1rem;">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label viibes__text_normal" for="remember">
                        Запомнить меня
                    </label>
                </div>
                <div>
                    <button type="submit" class="viibes__btn_medium">
                        Войти в систему
                    </button>
                </div>
                <br>
                <div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </section>
    @include('client.blocks.seo.countries')
@endsection

@extends('client.layouts.app')
@section('meta-tags')
    <title>Специальность {{ $program_info->program }} в {{ $program_info->university }}</title>
    <meta name="description" content="Специальность {{ $program_info->program }} в {{ $program_info->university }}. Описание специальности, условия поступления и экзамены, предметы на специальности.">
    <meta property="og:title" content="Специальность {{ $program_info->program }} в {{ $program_info->university }}"/>
    <meta property="og:description" content="Специальность {{ $program_info->program }} в {{ $program_info->university }}. Описание специальности, условия поступления и экзамены, предметы на специальности."/>
@endsection
@section('body_class') @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h2 class="viibes__h1">{{ $program_info->program }}</h2>
            <h3 class="viibes__h1_sub">{{ $program_info->university }} 🇸🇰</h3>
            <p class="viibes__text_normal" style="margin-top: 1rem;">
                Информация актуальна на <b>{{ $program_info->created_at->format('Y') }}</b> год 📝
            </p>
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block" style="display: block;">
                <div class="viibes__main_list_block_list">
                    <div class="viibes__university_main_content_info">
                        <h3 class="viibes__h3">Информация о специальности: </h3>
                        <div class="viibes__university_main_content_properties">
                            <h6 class="viibes__h6">
                                <span class="viibes__color_purple">Название:</span> {{ $program_info->program }}
                            </h6>
                            <h6 class="viibes__h6">
                                <span class="viibes__color_purple">Название (SK):</span> {{ $program_info->program_sk }}
                            </h6>
                            <h6 class="viibes__h6">
                                <span class="viibes__color_purple">ВУЗ:</span> {{ $program_info->university }}
                            </h6>
                            <h6 class="viibes__h6">
                                <span class="viibes__color_purple">Обучение:</span> {{ $program_info->years_of_study }}
                            </h6>
                        </div>
                    </div>
                    <div class="viibes__university_main_content_description">
                        <h3 class="viibes__h3">Описание специальности: </h3>
                        <div class="viibes__text_normal viibes__color_gray">
                            {!! $program_info->description !!}
                        </div>
                    </div>
                    <div class="viibes__university_main_content_description">
                        <h3 class="viibes__h3">Вступительные экзамены: </h3>
                        <div class="viibes__text_normal viibes__color_gray">
                            {!! $program_info->exams !!}
                        </div>
                    </div>
                    <div class="viibes__university_main_content_description" style="margin-top: 2rem;">
                        @if(!empty($program_info->study_plan_file) || !empty($program_info->study_plan_link))
                            @if(!empty($program_info->study_plan_link))
                                <a href="{{ $program_info->study_plan_link }}" class="viibes__btn_link" title="">
                                    Смотреть предметы специальности
                                    <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                                </a>
                            @else
                                <a href="{{ env('APP_URL') }}storage/{{ $program_info->study_plan_file }}" class="viibes__btn_link" title="">
                                    Смотреть предметы специальности
                                    <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection













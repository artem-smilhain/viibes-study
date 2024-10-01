@extends('client.layouts.app')
@section('html-tag') itemscope itemtype="https://schema.org/FAQPage" @endsection
@section('meta-tags')
    <title>Поступление в Словакию: самые частые вопросы</title>
    <meta property="og:title" content="Поступление в Словакию: самые частые вопросы"/>
    <meta name="description" content="Ответы на самые часты вопросы о поступлении и жизни в Словакии: условия поступления, вступительные экзамены, цены на жизнь в Словакии, работа во время обучения, словацкий язык, отношение словаков к иностранцам из постсоветских стран и другие.">
    <meta property="og:description" content="Ответы на самые часты вопросы о поступлении и жизни в Словакии: условия поступления, вступительные экзамены, цены на жизнь в Словакии, работа во время обучения, словацкий язык, отношение словаков к иностранцам из постсоветских стран и другие."/>
@endsection
@section('body_class') @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Ответы на самые популярные <br> вопросы 📝</h1>
            @include('client.blocks.breadcrumbs')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <div class="viibes__main_list_block">
                <div class="viibes__main_list_block_list">
                    <div class="viibes__faq_page_items">
                        <div class="viibes__faq_content">
                            @php($i = 1)
                            @foreach($faq as $faq_group)
                                <div style="margin-bottom: 3rem;">
                                    <h2 class="viibes__h2" style="margin-bottom: 3rem;">
                                        <span class="viibes__color_purple">{{ sprintf("%02d", $i) }}.</span> {{ $faq_group['title'] }}
                                    </h2>
                                    <div class="viibes__faq_content">
                                        @foreach($faq_group['content'] as $key => $value)
                                            <div class="viibes__faq_content_item viibes__drop viibes__bg_gray @if ($loop->first) viibes__drop_active @endif" itemscope itemprop="mainEntity" itemtype="http://schema.org/Question">
                                                <div class="viibes__faq_content_item_header viibes__drop_header">
                                                    <h4 class="viibes__h5" itemprop="name">{{ $key }}</h4>
                                                    <img src="{{ URL::asset('/assets/client/images/components/arrow-purple.svg') }}" class="viibes__drop_img" alt="">
                                                </div>
                                                <p class="viibes__text_normal viibes__drop_hidden" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <span itemprop="text">
                                                    {{ $value }}
                                                </span>
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @php($i++)
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="viibes__main_list_block_sidebar viibes__desktop">
                    @include('client.layouts.sidebars.universities')
                </div>
            </div>
        </div>
    </section>
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.seo.countries')
@endsection
@section('schema')
@endsection













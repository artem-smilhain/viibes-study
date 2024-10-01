@extends('client.layouts.app')
@section('meta-tags')
    <title>Курсы словацкого языка. Языковые курсы словацкого</title>
    <meta property="og:title" content="Курсы словацкого языка. Языковые курсы словацкого"/>
    <meta name="description" content="Подготовительные онлайн-курсы словацкого языка: групповые и индивидуальные занятия словацкого. Словацкий язык для начинающих.">
    <meta property="og:description" content="Подготовительные онлайн-курсы словацкого языка: групповые и индивидуальные занятия словацкого. Словацкий язык для начинающих."/>
@endsection
@section('body_class') viibes__course @endsection
@section('seo-text')
    <h1 class="viibes__h3">Онлайн-курсы словацкого языка для студентов</h1>
    <p>Изучайте словацкий онлайн и улучшайте свои навыки общения с помощью наших высококачественных курсов и материалов. Курсы словацкого языка от VIIBES Study предназначены в первую очередь для тех, кто только начинает знакомиться со словацким языком, но будет полезен и для тех, кто хочет улучшить свои знания.</p>
    <p>VIIBES Study предлагает качественную языковую подготовку для поступления в университеты Словакии и для работы. Знание словацкого - один из главных аспектов в подготовке к поступлению или переезду. </p>
    <h2 class="viibes__h4">Начните учить словацкий вместе с VIIBES Study. Как проходят занятия вместе с нами?</h2>
    <p>Курсы словацкого языка захватывают уровни A1-B1 и длятся около 5 месяцев. В конце курса вы получите сертификат о владении словацким языком. Уроки будут проходить на удобной онлайн-платформе в небольших группах по 5 человек, чтобы преподаватель уделил время каждому студенту. Если вы пропустили занятие - для вас будет доступна видеозапись занятия. Также вас ждут практикующие разговорные занятия со спикером.</p>
    <p>По ходу курса мы будем вам предоставлять авторские дополнительные материалы к обучению: видео и фильмы, книги и статьи, слова и фразы, сайты и аккаунты в социальных сетях - все эти материалы преподаватель подберет дополнительно для вас, чтобы максимально быстро и эффективно научить вас понимать и говорить по-словацки.</p>
    <p>Если у вас возникнут какие-то проблемы или вопросы, вы сможете задать свой вопрос преподавателю или админам в общем чате Телеграм.</p>
    <p>Вас ждет постоянное тестирование: во время группового курса мы будем отслеживать ваши успехи и на их основе подстраивать курс для достижения необходимого результата.</p>
    <h2 class="viibes__h4">Подготовительные курсы словацкого языка. Программа и темы занятий</h2>
    @foreach($program as $key => $value)
        <h3 class="viibes__h5">{{ $key }}</h3>
        <p class="viibes__text_normal">{{ $value['paragraph_1'] }}</p>
        <p class="viibes__text_normal">{{ $value['paragraph_2'] }}</p>
    @endforeach
@endsection
@section('seo-keywords')
    <p>
        <a href="#" class="viibes__seo_keyword"><b>Курсы словацкого языка</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Словацкий язык курсы</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Курсы словацкого</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Курсы словацкого с нуля</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Словацкий язык с нуля</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Изучение словацкого языка</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Словацкий язык онлайн</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Курсы словацкого онлайн</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Языковая школа словацкого языка</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Репетитор по словацкому языку</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Групповые курсы словацкого</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Онлайн курсы словацкого языка</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Словацкий язык B1</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Выучить словацкий язык</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Преподаватель словацкого</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Словацкий язык для новичков</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Словацкий язык для студентов</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Языковые курсы словацкого</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Словацкий язык для иностранцев</b></a>
        •
        <a href="#" class="viibes__seo_keyword"><b>Учить словацкий язык</b></a>
    </p>
@endsection
@section('content')
    @include('client.blocks.seo.text')
    <section class="viibes__course_preview">
        <div class="viibes__wrap">
            <div>
                <h2 class="viibes__h1">
                    Учите словацкий язык с нуля <br> вместе с <span class="viibes__color_purple">VIIBES Study</span>
                    <img src="{{ URL::asset('/assets/client/images/home/ahoj.png') }}"
                         alt="привет по словацки ahoj" title="Привет по словацки - Ahoj">
                </h2>
                <p class="viibes__h1_sub">С выдачей сертификата о знании языка в конце курса ✔️</p>
            </div>
            @include('client.blocks.breadcrumbs')
            <div class="viibes__course_preview_content">
                <div class="viibes__course_preview_content_list">
                    <div class="viibes__course_preview_content_list_item">
                        <h4 class="viibes__color_purple"><span>{{ env('COURSE_DURATION') }}</span> месяцев</h4>
                        <p class="viibes__text_normal">длительность онлайн-курса языка</p>
                    </div>
                    <div class="viibes__course_preview_content_list_item">
                        <h4 class="viibes__color_yellow"><span>{{ env('COURSE_LESSONS') }}</span> занятий</h4>
                        <p class="viibes__text_normal">онлайн по полтора часа с преподавателем</p>
                    </div>
                    <div class="viibes__course_preview_content_list_item">
                        <h4 class="viibes__color_lightblue" style="color: #D23270 !important;"><span>90</span> минут</h4>
                        <p class="viibes__text_normal">длительность каждого занятия</p>
                    </div>
                    <div class="viibes__course_preview_content_list_item">
                        <h4 class="viibes__color_blue"><span>{{ env('COURSE_LEVEL') }}</span> уровень</h4>
                        <p class="viibes__text_normal">захватывает курс, для уверенного общения</p>
                    </div>
                </div>
                @include('client.components.form', ['form_type' => 'CTA_FORM - First Screen']) {{-- --}}
            </div>
        </div>
    </section>
    @include('client.blocks.cards.courses')
    {{--@include('client.blocks.cta.forms.question')--}}
    <section class="viibes__course_group">
        <div class="viibes__wrap">
            <h2 class="viibes__h2">
                Групповые онлайн-курсы словацкого
                <span class="viibes__color_purple">
                    с нуля до B1 🇸🇰
                </span>
            </h2>
            <p class="viibes__h2_sub">Что вас ждет на протяжении {{ env('COURSE_DURATION') }} месяцев? Программа нашего группового курса ⚡️</p>
            <div class="viibes__course_group_info">
                <div class="viibes__course_group_info_item">
                    <h3>5 <span>месяцев</span></h3>
                    <p class="viibes__text_normal">протяжение курса</p>
                </div>
                <div class="viibes__course_group_info_item">
                    <h3>60 <span>занятий</span></h3>
                    <p class="viibes__text_normal">входит в курс</p>
                </div>
                <div class="viibes__course_group_info_item">
                    <h3>3 <span>урока</span></h3>
                    <p class="viibes__text_normal">в неделю</p>
                </div>
                <div class="viibes__course_group_info_item">
                    <h3>B1 <span>уровень</span></h3>
                    <p class="viibes__text_normal">охватывает курс</p>
                </div>
                <div class="viibes__course_group_info_item">
                    <h3>5 <span>человек</span></h3>
                    <p class="viibes__text_normal">в каждой группе</p>
                </div>
                <div class="viibes__course_group_info_item">
                    <h3>90 <span>минут</span></h3>
                    <p class="viibes__text_normal">длительность урока</p>
                </div>
            </div>
            <div class="viibes__course_group_main">
                <div class="viibes__course_group_main_content">
                    {{--<div class="viibes__course_group_main_content_preview">
                        <h3 class="viibes__h3">Программа группового онлайн-курса языка</h3>
                        <div>
                            <h4 class="viibes__color_yellow"><span>{{ env('COURSE_DURATION') }}</span> месяцев</h4>
                            <p class="viibes__text_normal">длительность онлайн-курса языка</p>
                        </div>
                        <div>
                            <h4 class="viibes__color_lightblue"><span>{{ env('COURSE_LESSONS') }}</span> занятий</h4>
                            <p class="viibes__text_normal">онлайн вас ждут с преподавателем</p>
                        </div>
                    </div>--}}
                    <div class="viibes__course_group_main_content_list">
                        @php($i = 1)
                        @foreach($program as $key => $value)
                            <div class="@if($key === array_key_first($program)) viibes__course_drop_active @endif viibes__course_group_main_content_item viibes__course_drop viibes__bg_gray">
                                <div class="viibes__course_group_main_content_list_item_header viibes__course_drop_header">
                                    <h5 class="viibes__h5"><span class="viibes__color_purple">{{ sprintf("%02d", $i) }}.</span> {{ $key }}</h5>
                                    <img src="{{ URL::asset('/assets/client/images/components/arrow-purple.svg') }}" class="viibes__course_drop_img" alt="">
                                </div>
                                <div class="viibes__course_drop_hidden viibes__course_group_main_content_list_item_hidden">
                                    <div class="viibes__course_group_main_content_list_item_hidden_text">
                                        <p class="viibes__text_normal">{{ $value['paragraph_1'] }}</p>
                                        <p class="viibes__text_normal">{{ $value['paragraph_2'] }}</p>
                                    </div>
                                    <img src="/assets/client/images/courses/program/{{ $value['img_src'] }}" alt="">
                                </div>
                            </div>
                            @php($i++)
                        @endforeach
                    </div>
                    <a class="viibes__course_group_main_content_show-more viibes__color_purple viibes__btn_link">Показать все разделы</a>
                </div>
                <div class="viibes__course_group_main_teachers">
                    <div class="viibes__course_group_main_teachers_item">
                        <img src="{{ URL::asset('/assets/client/images/courses/yuri.jpg') }}"
                             alt="Преподаватель курсов словацкого языка" title="Преподаватель курсов словацкого языка">
                        <div class="viibes__course_group_main_teachers_item_bottom">
                            <h3 class="viibes__h3 viibes__color_white">Юрий</h3>
                            <h6 class="viibes__h6 viibes__color_white">Главный преподаватель курсов словацкого языка</h6>
                        </div>
                    </div>
                    <div class="viibes__course_group_main_teachers_item">
                        <img src="{{ URL::asset('/assets/client/images/courses/dima.jpg') }}"
                             alt="Преподаватель курсов словацкого языка" title="Преподаватель курсов словацкого языка">
                        <div class="viibes__course_group_main_teachers_item_bottom">
                            <h3 class="viibes__h3 viibes__color_white">Дмитрий</h3>
                            <h6 class="viibes__h6 viibes__color_white">Спикер разговорных занятий подготовительного курса</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="viibes__course_cta viibes__bg_purple">
        <div class="viibes__wrap">
            <div class="viibes__course_cta_main viibes__bg_white" itemscope itemtype="http://schema.org/Product">
                <meta itemprop="sku" content="courses">
                <meta itemprop="brand" content="VIIBES Study">
                <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer" style="display: none;">
                    <meta itemprop="price" content="{{ env('COURSE_PRICE') }}">
                    <meta itemprop="seller" content="VIIBES">
                    <meta itemprop="priceCurrency" content="EUR">
                    <link itemprop="availability" href="https://schema.org/InStock">
                </div>
                <meta itemprop="name" content="Подготовительные курсы словацкого языка">
                <meta itemprop="description" content="Курс охватывает уровни {{ env('COURSE_LEVEL') }}. Занятия проходят по полтора часа два раза в неделю на протяжении {{ env('COURSE_DURATION') }} месяцев.">
                <div class="viibes__course_cta_main_topside">
                    <div class="viibes__course_cta_main_topside_title">
                        <h3 class="viibes__h3">Стоимость группового подготовительного курса</h3>
                        <p class="viibes__text_normal">
                            Курс охватывает <b>уровни A1-{{ env('COURSE_LEVEL') }}</b>. Занятия проходят <b>3 раза</b> в неделю по <b>90 минут</b> в группе по <b>5 человек</b> на протяжении <b>{{ env('COURSE_DURATION') }} месяцев</b>.
                        </p>
                    </div>
                    <div class="viibes__course_cta_main_topside_more">
                        <div class="viibes__mobile" style="margin-top: 1rem;">
                            <h4 class="viibes__color_purple"><span>{{ env('COURSE_PRICE') }}</span>€</h4>
                            <p class="viibes__text_normal">стоимость курса</p>
                        </div>
                        <div class="viibes__desktop">
                            <h4 class="viibes__color_purple"><span>{{ env('COURSE_DURATION') }}</span> месяцев</h4>
                            <p class="viibes__text_normal">длительность онлайн-курса языка</p>
                        </div>
                        <div class="viibes__desktop">
                            <h4 class="viibes__color_yellow"><span>{{ env('COURSE_LESSONS') }}</span> занятий</h4>
                            <p class="viibes__text_normal">онлайн по полтора часа с преподавателем</p>
                        </div>
                    </div>
                </div>
                <div class="viibes__course_cta_main_underside">
                    <div class="viibes__course_cta_main_underside_action">
                        <a class="viibes__btn_medium" id="viibes__modal_courses_activator">Записаться на курс</a>
                        <h5 class="viibes__h5 viibes__color_gray">Набор групп на курсы уже стартовал! <br>
                            Первая стартует <span class="viibes__h5 viibes__color_black">в начале октября ⚡</span></h5>
                    </div>
                    <div class="viibes__course_cta_main_underside_price viibes__desktop">
                        <h3 class="viibes__h3 viibes__color_purple">{{--<span class="viibes__h1_sub">стоимость</span>--}} {{ env('COURSE_PRICE') }}€</h3>
                        <span class="viibes__text_normal">стоимость курса</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('client.blocks.faq')
    @include('client.blocks.cta.forms.course')
    @include('client.blocks.reviews')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
    {{--@include('client.blocks.seo.text')--}}
    @include('client.blocks.modal.courses') {{-- модалка для курсов--}}
@endsection
@section('scripts')
    <script src="{{ asset('assets/client/js/libraries/slider.min.js') }}"></script>
    <script>
        const modalCoursesActivator = document.getElementById('viibes__modal_courses_activator');
        const modalCourses = document.getElementById('viibes__modal_courses');
        const modalCoursesClose = document.getElementById('viibes__modal_courses_close');
        modalCoursesActivator.addEventListener('click', e => {
            modalCourses.classList.add('viibes__modal_form_active');
        });
        modalCoursesClose.addEventListener('click', () => {
            modalCourses.classList.remove('viibes__modal_form_active');
        });
    </script>
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Отзывы студентов и их родителей о VIIBES Study",
            "description": "Отзывы студентов и их родителей о поступлении в университеты Словакии вместе с компанией VIIBES Study",
            "url": "{{ route('courses') }}",
            "inLanguage": "ru"
        }
    </script>
    {{--<script type="application/ld+json">
    {
         "@context": "https://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{ env('APP_URL') }}",
            "name": "Главная"
            }
          },
          {
           "@type": "ListItem",
           "position": 2,
           "item":
           {
            "@id": "{{ route('courses') }}",
            "name": "Курсы"
            }
          }
         ]
        }
    </script>--}}
@endsection

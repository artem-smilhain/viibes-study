@extends('client.layouts.app')
@section('meta-tags')
    <title>Поступление в Словакию для украинцев. Обучение в Словакии для украинцев.</title>
    <meta property="og:title" content="Поступление в Словакию для украинцев. Обучение в Словакии для украинцев."/>
    <meta name="description" content="Обучение в Словакии для украинцев - поступление в университеты Словакии для украинцев без вступительных экзаменов. Бесплатное высшее образование в Словакии для украинцев. Помогаем поступить в словацкий университет украинцам и учиться в Словакии бесплатно.">
    <meta property="og:description" content="Обучение в Словакии для украинцев - поступление в университеты Словакии для украинцев без вступительных экзаменов. Бесплатное высшее образование в Словакии для украинцев. Помогаем поступить в словацкий университет украинцам и учиться в Словакии бесплатно."/>
@endsection
@section('body_class') viibes__home @endsection
@section('content')
    <section class="viibes__home_preview">
        <video src="{{ URL::asset('/assets/client/video/home.mp4') }}" style="filter: brightness(0.5);" muted="" autoplay="" loop="" playsinline class="viibes__home_preview_video"></video>
        <div class="viibes__home_preview_content">
            <div class="viibes__wrap viibes__main_wrap_belarus">
                <h2 class="viibes__h1 viibes__color_white" id="h2_belarus">
                    <span>Хотите дать ребенку качественное европейское образование?</span> <br class="br_m"> Поступайте в ВУЗы Словакии <br class="br_d"> на бюджет вместе с VIIBES Study 🇸🇰 🇪🇺
                </h2>
                <div class="viibes__h_list">
                    <p class="viibes__h1_sub viibes__color_white" style="margin: 0;">✅ Бесплатное обучение без вступительных экзаменов</p>
                    <p class="viibes__h1_sub viibes__color_white" style="margin: 0;">✅ Диплом международного образца</p>
                    <p class="viibes__h1_sub viibes__color_white" style="margin: 0;">✅ Европейский вид на жительство</p>
                </div>
                <div class="viibes__home_preview_content_underside">
                    <div class="viibes__btn_animation viibes__btn_medium viibes__modal_form_activator">Бесплатная консультация</div>
                    <div class="viibes__home_preview_content_underside_group">
                        <h3 class="viibes__h3 viibes__color_white">{{ env('FREE_PLACES_IN_GROUP') }} из {{ env('MAX_PLACES_IN_GROUP') }}</h3>
                        <p class="viibes__text_small viibes__color_white">свободных мест осталось <br>в группе на {{ env('ADMISSION_YEAR') }} год  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="viibes__home_slovakia_vs_belarus" id="viibes__home_slovakia_vs_belarus">
        <div class="viibes__wrap">
            <h2 class="viibes__h2">Вашему ребенку <span class="viibes__color_purple">учиться в Словакии выгоднее</span>, чем в Украине! И вот почему:</h2>
            <div class="viibes__home_slovakia_vs_belarus_inner">
                <div class="viibes__home_slovakia_vs_belarus_inner_left" style="width: 100%;">
                    <!-- <h3 class="viibes__h3">Словакия 🇸🇰</h3> -->
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Образование во всех государственных университетах Словакии БЕСПЛАТНОЕ для украинцев</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Бесплатное обучение НЕ НУЖНО «отрабатывать» после получения диплома</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">При поступлении в ВУЗ Словакии не берется во внимание результаты ЗНО или НМТ, а на многие специальности отсутствуют даже вступительные экзамены</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Образование европейского стандарта и карьерные возможности ребенка после обучения</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Словакия известна своей безопасностью, низким уровнем преступности и стабильной политической обстановкой.</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">ЖД транспорт в Словакии абсолютно бесплатный для студентов, а на городской транспорт скидка 50%</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Имея европейский ВНЖ студент может свободно и дешево путешествовать в другие города и старны Евросоюза</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/happy.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Словацкий диплом котируется по всему миру</p>
                    </div>
                </div>
                <!-- <div class="viibes__home_slovakia_vs_belarus_inner_right">
                    <h3 class="viibes__h3">Беларусь 🇧🇾</h3>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/sad.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Поступить на бюджет в Беларуси сложно и проблематично, а платное обучение начинается от 1000 евро</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/sad.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Бесплатное обучение в Беларуси НУЖНО «отрабатывать» после получения диплома</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/sad.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Для поступления в университет Беларуси вам необходимо хорошо сдать ЦТ или вступительные экзамены при университете</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/sad.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">За пересдачу экзамена в университетах Беларуси студенту нужно доплачивать</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/sad.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">В Беларуси нет скидок для ЖД и городской транспорт для студентов</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/sad.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Учась в Беларуси у студента нет возможности дешево путешествовать по Европе</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('/assets/client/images/belarus/sad.svg') }}" alt="happy icon">
                        <p class="viibes__text_big">Белорусский диплом не котируется в ЕС</p>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <section class="viibes__home_help" id="viibes__home_help">
        <div class="viibes__wrap">
            <h2 class="viibes__h2">VIIBES Study помогает абитуриентам из Украины с поступлением в ВУЗы Словакии, чтобы <span class="viibes__color_purple">учиться в Евросоюзе абсолютно бесплатно 🇪🇺 🤟</span></h2>
            <div class="viibes__home_help_cards">
                <div class="viibes__home_help_cards_column">
                    <div class="viibes__home_help_cards_item viibes__bg_purple">
                        <h3 class="viibes__h3 viibes__color_purple">Комплексные услуги по поступлению в Словакию для украинцев 🇺🇦</h3>
                        <div class="viibes__home_help_cards_item_mark viibes__bg_purple_cta viibes__color_white">Самая популярная услуга ⚡</div>
                        <p class="viibes__text_big">Поступите в Словакию легко и просто, а главное - без риска и непредвиденных расходов! Начните свой новый этап жизни вместе с пакетом «Все включено» от VIIBES Study</p>
                        <div class="viibes__home_help_cards_item_underside">
                            <div class="viibes__home_help_cards_item_underside_content">
                                <div class="viibes__home_help_cards_item_underside_list">
                                    <div class="viibes__home_help_cards_item_underside_item">
                                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                                        <span class="viibes__text_medium">
                                            Комплексное поступление на выбранную специальность
                                        </span>
                                    </div>
                                    <div class="viibes__home_help_cards_item_underside_item">
                                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                                        <span class="viibes__text_medium">
                                            Оформление всех необходимых документов и заявлений
                                        </span>
                                    </div>
                                    <div class="viibes__home_help_cards_item_underside_item">
                                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                                        <span class="viibes__text_medium">
                                            Подготовительные онлайн-курсы словацкого языка
                                        </span>
                                    </div>
                                    <div class="viibes__home_help_cards_item_underside_item">
                                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                                        <span class="viibes__text_medium">
                                            Помощь и поддержка на весь период поступления
                                        </span>
                                    </div>
                                </div>
                                <a href="{{ route('services') }}" class="viibes__btn_link" title="Смотреть пакеты услуг VIIBES Study">
                                    Смотреть пакеты услуг <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                                </a>
                            </div>
                            <video src="{{ URL::asset('/assets/client/video/girl-home.mp4') }}"
                                   muted="" autoplay="" playsinline loop="" class="viibes__home_help_cards_item_underside_media"></video>
                            {{--<img src="{{ URL::asset('/assets/client/images/home/chelik.jpg') }}" alt="" class="viibes__home_help_cards_item_underside_image">--}}
                        </div>
                    </div>
                </div>
                <div class="viibes__home_help_cards_column">
                    <div class="viibes__home_help_cards_item viibes__bg_lightblue viibes__home_help_cards_item_small">
                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/flag-icon.png') }}"
                             alt="флаг словакии словацкий флаг" title="Флаг Словакии" class="viibes__home_help_cards_item_flag">
                        <div class="viibes__home_help_cards_item_main">
                            <h3 class="viibes__h3 viibes__color_lightblue">Подготовительные курсы словацкого языка</h3>
                            <p class="viibes__color_gray viibes__text_big">Поможем заговорить на словацком и уверенно использовать его по приезду</p>
                        </div>
                        <a href="{{ route('courses') }}" class="viibes__btn_link viibes__color_lightblue" title="Смотреть больше про курсы словацкого">
                            Подробнее о курсах
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.889 8.73255C18.3915 8.78005 17.9665 9.11505 17.804 9.58755C17.639 10.0626 17.7665 10.5876 18.129 10.9326L22.269 15.0726H6.18904C6.14904 15.0701 6.10904 15.0701 6.06904 15.0726C5.36154 15.1051 4.81654 15.7051 4.84904 16.4126C4.88154 17.1201 5.48154 17.6651 6.18904 17.6326H22.269L18.109 21.7726C17.6065 22.2751 17.6065 23.0901 18.109 23.5926C18.6115 24.0951 19.4265 24.0951 19.929 23.5926L26.249 17.2526L27.169 16.3526L26.249 15.4526L19.929 9.11255C19.659 8.83505 19.2765 8.69505 18.889 8.73255Z" fill="#229ED9"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="viibes__home_help_cards_item viibes__bg_yellow viibes__home_help_cards_item_small">
                        <div class="viibes__home_help_cards_item_main">
                            <h3 class="viibes__h3 viibes__color_yellow">Отдельные услуги для поступления </h3>
                            <p class="viibes__color_gray viibes__text_big">Соберите свой отдельный набор необходимых услуг для поступления в университет Словакии</p>
                        </div>
                        <a href="{{ route('services') }}" class="viibes__btn_link viibes__color_yellow" title="Смотреть больше про отдельные услуги">
                            Больше об услугах
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.889 8.73255C18.3915 8.78005 17.9665 9.11505 17.804 9.58755C17.639 10.0626 17.7665 10.5876 18.129 10.9326L22.269 15.0726H6.18904C6.14904 15.0701 6.10904 15.0701 6.06904 15.0726C5.36154 15.1051 4.81654 15.7051 4.84904 16.4126C4.88154 17.1201 5.48154 17.6651 6.18904 17.6326H22.269L18.109 21.7726C17.6065 22.2751 17.6065 23.0901 18.109 23.5926C18.6115 24.0951 19.4265 24.0951 19.929 23.5926L26.249 17.2526L27.169 16.3526L26.249 15.4526L19.929 9.11255C19.659 8.83505 19.2765 8.69505 18.889 8.73255Z" fill="#E5A801"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('client.blocks.cta.programs-belarus')
    @include('client.blocks.cards.benefits-ukraine')
    @include('client.blocks.cta.forms.question')
    @include('client.blocks.cards.services-belarus')
    @include('client.blocks.cta.courses-belarus')
    @include('client.blocks.top-universities')

    @include('client.blocks.reviews')
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
@endsection
@section('scripts')
    <script src="{{ asset('assets/client/js/libraries/slider.min.js') }}"></script>
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Поступление в Словакию для украинцев. Бесплатное образование в Словакии для украинцев.",
            "description": "Поступление в Словакию для украинцев. Бесплатное образование в Словакии для украинцев: бесплатное обучение в Словакии для украинцев. Поступить в Словакию из Украины.",
            "url": "{{ env('APP_URL') }}",
            "inLanguage": "ru"
        }
    </script>
    <script type="application/ld+json">
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
            "@id": "{{ route('ukraine') }}",
            "name": "Украина"
            }
          }
         ]
        }
    </script>
@endsection

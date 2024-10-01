@extends('client.layouts.app')
@section('meta-tags')
    <title>Услуги и стоимость поступления в Словакию вместе с VIIBES Study</title>
    <meta property="og:title" content="Услуги и стоимость поступления в Словакию вместе с VIIBES Study"/>
    <meta name="description" content="Поступление в Словакию без посредников - услуги и стоимость поступления в Словакию. Процесс поступления в Словакию. Комплексные услуги по поступлению в университеты в Словакии. Отдельные услуги для самостоятельного поступления.">
    <meta property="og:description" content="Поступление в Словакию без посредников - услуги и стоимость поступления в Словакию. Процесс поступления в Словакию. Комплексные услуги по поступлению в университеты в Словакии. Отдельные услуги для самостоятельного поступления."/>
@endsection
@section('body_class') viibes__services @endsection
@section('content')
    <section class="viibes__services_preview">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Услуги и стоимость ⚡</h1>
            @include('client.blocks.breadcrumbs')
            <div class="viibes__services_preview_content">
                <div class="viibes__services_preview_content_main">
                    <p class="viibes__h1_sub viibes__color_purple">VIIBES Study помогает абитуриентам из @if($ip) Украины 🇺🇦 @else СНГ @endif с поступлением в ВУЗы Словакии, чтобы учиться в ЕС абсолютно бесплатно!</p>
                    <div class="viibes__services_preview_content_main_list">
                        <div class="viibes__services_preview_content_main_item viibes__bg_purple_cta">
                            <h3 class="viibes__h2 viibes__color_white">{{ env('FREE_PLACES_IN_GROUP') }} из {{ env('MAX_PLACES_IN_GROUP') }}</h3>
                            <p class="viibes__text_normal viibes__color_white">осталось свободных мест в группе на {{ env('ADMISSION_YEAR') }} год</p>
                        </div>
                        <div class="viibes__services_preview_content_main_item viibes__bg_gray">
                            <h3 class="viibes__h2 viibes__color_purple">{{ env('STUDY_FOR_FREE') }}</h3>
                            <p class="viibes__text_normal viibes__color_purple">студентов из @if($ip) Украины @else СНГ @endif учатся в Словакии бесплатно</p>
                        </div>
                        <div class="viibes__services_preview_content_main_item viibes__bg_gray">
                            <h3 class="viibes__h2 viibes__color_purple">{{ env('VIIBES_CLIENTS') }}</h3>
                            <p class="viibes__text_normal viibes__color_purple">обратившихся к нам, учатся в желаемых ВУЗах</p>
                        </div>
                    </div>
                </div>
                <div class="viibes__services_preview_content_list">
                    <div class="viibes__services_preview_content_list_item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                        </svg>
                        <p class="viibes__text_big">Пакеты услуг для комплексного поступления в ВУЗы Словакии</p>
                    </div>
                    <div class="viibes__services_preview_content_list_item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#FFBB01"/>
                        </svg>
                        <p class="viibes__text_big">Подготовительные курсы словацкого языка с преподавателем</p>
                    </div>
                    <div class="viibes__services_preview_content_list_item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#229ED9"/>
                        </svg>
                        <p class="viibes__text_big">Отдельные услуги для самостоятельного поступления</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('client.blocks.cta.forms.study')
    @include('client.blocks.cards.process')
    @include('client.blocks.cta.forms.question')
    <section class="viibes__services_packages">
        <div class="viibes__wrap">
            <h2 class="viibes__h2">Пакеты комплексного поступления в Словакию на {{ env('ADMISSION_YEAR') }} год @if($ip) для украинцев 🇺🇦@endif 🤟</h2>
            <p class="viibes__h2_sub">Поступите в Словакию легко и просто, а главное - без риска и непредвиденных расходов! Начните свой новый этап жизни вместе с нашими комплексными услугами</p>
            <div class="viibes__services_packages_list">
                <div class="viibes__services_packages_item viibes__bg_purple" itemscope itemtype="http://schema.org/Product"> {{-- BASIC --}}
                    <meta itemprop="sku" content="basic">
                    <meta itemprop="brand" content="VIIBES Study">
                    <meta itemprop="url" content="@if($ip) {{ URL::asset('/assets/client/pdf/prices/desktop/basic_ukraine.pdf') }} @else {{ URL::asset('/assets/client/pdf/prices/desktop/basic.pdf') }} @endif">
                    <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer" style="display: none;">
                        <meta itemprop="url" content="@if($ip) {{ URL::asset('/assets/client/pdf/prices/desktop/basic_ukraine.pdf') }} @else {{ URL::asset('/assets/client/pdf/prices/desktop/basic.pdf') }} @endif">
                        <meta itemprop="price" content="@if($ip) {{ env('BASIC_PRICE_UA') }} @else {{ env('BASIC_PRICE') }} @endif">
                        <meta itemprop="seller" content="VIIBES">
                        <meta itemprop="priceCurrency" content="EUR">
                        <link itemprop="availability" href="https://schema.org/InStock">
                    </div>
                    <div class="viibes__services_packages_item_sale">
                        <p>Скидка действует до <u>31.12.2024</u>️️</p>
                    </div>
                    <div class="viibes__services_packages_item_topside">
                        <div class="viibes__services_packages_item_topside_title">
                            <div class="left">
                                <h3 class="viibes__h3 viibes__color_black" itemprop="name">STANDARD</h3>
                                <div class="viibes__services_packages_item_mark viibes__bg_purple_cta viibes__color_white viibes__text_normal viibes__weight_semibold">Базовое поступление</div>
                            </div>
                            <div class="right">
                                <div>
                                    <h4 class="viibes__h3 viibes__color_purple"><span>€</span>{{ env('STANDARD_PRICE') }}</h4>
                                    <h5 class="viibes__h4 viibes__color_purple"><span>€</span>2490</h5>
                                </div>
                            </div>
                        </div>
                        <div class="viibes__services_packages_item_list" itemprop="description">
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Помогаем в выборе университета и специальности
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Подаем документы на 2 специальности (могут быть разные факультеты или ВУЗы)
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Подготовка и оформление документов с нотариальным заверением в Словакии
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Делаем нострификацию документов об среднем образовании
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Коммуникация с университетом и контроль сроков подачи
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Подготавливаем пакет документов на получение визы и записываем в посольство
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Сопровождаем при заселении в общежитие, на запись в университет и обязательный медосмотр
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Оформляем SIM-карту и счет в банке, активируем и получаем студенческий, оформляем проездной на бесплатные ЖД поездки по Словакии
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Оформляем и подаем пакет документов на оформление ВНЖ Словакии, сопровождаем в полиции
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Помощь и поддержка по любым вопросам на весь период поступления
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Организованная встреча с кураторами и другими абитуриентам для знакомства 🤟
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="viibes__services_packages_item_underside">
                        <a class="viibes__btn_medium viibes__modal_form_activator">Оставить заявку</a>
                        <a href="{{ route('services.standard') }}"
                           class="viibes__color_purple viibes__services_packages_item_underside_link"
                            title="Смотреть подробную информацию про пакет услуг «BASIC»">
                            Смотреть подробную информацию об услугах в пакете «STANDARD»
                        </a>
                    </div>
                </div>
                <div class="viibes__services_packages_item viibes__bg_purple_cta" id="viibes__services_package_standart" itemscope itemtype="http://schema.org/Product" style="display: none;">
                    <meta itemprop="sku" content="standart">
                    <meta itemprop="brand" content="VIIBES Study">
                    <meta itemprop="url" content="@if($ip) {{ URL::asset('/assets/client/pdf/prices/desktop/standard_ukraine.pdf') }} @else {{ URL::asset('/assets/client/pdf/prices/desktop/standard.pdf') }} @endif">
                    <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer" style="display: none;">
                        <meta itemprop="url" content="@if($ip) {{ URL::asset('/assets/client/pdf/prices/desktop/standard_ukraine.pdf') }} @else {{ URL::asset('/assets/client/pdf/prices/desktop/standard.pdf') }} @endif">
                        <meta itemprop="price" content="@if($ip) {{ env('STANDARD_PRICE_UA') }} @else {{ env('STANDARD_PRICE') }} @endif">
                        <meta itemprop="seller" content="VIIBES">
                        <meta itemprop="priceCurrency" content="EUR">
                        <link itemprop="availability" href="https://schema.org/InStock">
                    </div>
                    <div class="viibes__services_packages_item_sale viibes__bg_purple viibes__color_purple">
                        <p>Скидка действует до <u>31.10.2024</u>️️</p>
                    </div>
                    <div class="viibes__services_packages_item_topside">
                        <div class="viibes__services_packages_item_topside_title">
                            <div class="left">
                                <h3 class="viibes__h3 viibes__color_white" itemprop="name">COMFORT</h3>
                                <div class="viibes__services_packages_item_mark viibes__bg_white viibes__color_purple viibes__text_normal viibes__weight_semibold">Поступление + курсы языка</div>
                            </div>
                            <div class="right">
                                <div>
                                    <h4 class="viibes__h3 viibes__color_white"><span>€</span>{{ env('COMFORT_PRICE') }}</h4>
                                    <h5 class="viibes__h4 viibes__color_white"><span>€</span>2590</h5>
                                </div>
                            </div>
                        </div>
                        <div class="viibes__services_packages_item_list" itemprop="description">
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#FFFFFFFF"/>
                                </svg>
                                <p class="viibes__text_medium viibes__color_white">Все услуги, которые входят в пакет «STANDARD»</p>
                            </div>
                            <div class="viibes__text_medium viibes__color_white viibes__weight_bold">А также к этому:</div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#FFFFFFFF"/>
                                </svg>
                                <p class="viibes__text_medium viibes__color_white">
                                    Онлайн курсы словацкого языка с преподавателем
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#FFFFFFFF"/>
                                </svg>
                                <p class="viibes__text_medium viibes__color_white">
                                    Длительность курса - 5 месяцев по 3 занятия в неделю
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#FFFFFFFF"/>
                                </svg>
                                <p class="viibes__text_medium viibes__color_white">
                                    Домашние задания после каждого занятия
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#FFFFFFFF"/>
                                </svg>
                                <p class="viibes__text_medium viibes__color_white">
                                    Практикующие разговорные занятия на словацком языке со спикером
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#FFFFFFFF"/>
                                </svg>
                                <p class="viibes__text_medium viibes__color_white">
                                    Сдача языкового экзамена и получение сертификата о знании языка
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="viibes__services_packages_item_underside">
                        <a class="viibes__btn_medium viibes__bg_white viibes__color_purple viibes__modal_form_activator">Оставить заявку</a>
                        <a href="{{ route('services.comfort') }}"
                           class="viibes__color_white viibes__services_packages_item_underside_link"
                           title="Смотреть подробную информацию про пакет услуг «STANDARD»">
                            Скачать подробную информацию об услугах в пакете «COMFORT»
                        </a>
                    </div>
                </div>
                {{--
                <div class="viibes__services_packages_item viibes__bg_purple" itemscope itemtype="http://schema.org/Product">
                    <meta itemprop="sku" content="comfort">
                    <meta itemprop="brand" content="VIIBES Study">
                    <meta itemprop="url" content="{{ URL::asset('/assets/client/pdf/prices/desktop/comfort.pdf') }}">
                    <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer" style="display: none;">
                        <meta itemprop="url" content="{{ URL::asset('/assets/client/pdf/prices/desktop/comfort.pdf') }}">
                        <meta itemprop="price" content="{{ env('COMFORT_PRICE') }}">
                        <meta itemprop="seller" content="VIIBES">
                        <meta itemprop="priceCurrency" content="EUR">
                        <link itemprop="availability" href="https://schema.org/InStock">
                    </div>
                    <div class="viibes__services_packages_item_topside">
                        <div class="viibes__services_packages_item_topside_title">
                            <h3 class="viibes__h3 viibes__color_black" itemprop="name">COMFORT</h3>
                            <h4 class="viibes__h3 viibes__color_purple"><span>€</span>{{ env('COMFORT_PRICE') }}</h4>
                        </div>
                        <div class="viibes__services_packages_item_mark viibes__bg_purple_cta viibes__color_white viibes__text_normal viibes__weight_semibold">Самый комфортный</div>
                        <div class="viibes__services_packages_item_list" itemprop="description">
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">Все услуги, которые входят в пакеты <span class="viibes__color_purple">«BASIC»</span> и <span class="viibes__color_purple">«STANDARD»</span></p>
                            </div>
                            <p class="viibes__text_medium viibes__weight_bold">А также к этому:</p>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Онлайн курсы словацкого с преподавателями 5 месяцев в языковой школе VIIBES Study
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Практикующие разговорные занятия на словацком языке со спикером
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Дополнительные авторские материалы для изучения языка
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Сдача внутреннего экзамена и получение фирменного сертификата VIIBES Study по окончании курсов
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Оформим и подадим документы на 2 специальности / в 2 ВУЗа (документы и оплата заявлений входят в стоимость)
                                </p>
                            </div>
                            <div class="viibes__services_packages_item_list_item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4C9.3724 4 4 9.3724 4 16C4 22.6276 9.3724 28 16 28C22.6276 28 28 22.6276 28 16C28 9.3724 22.6276 4 16 4ZM13.6 22.4968L7.9516 16.8484L9.6484 15.1516L13.6 19.1032L22.3516 10.3516L24.0484 12.0484L13.6 22.4968Z" fill="#A264F1"/>
                                </svg>
                                <p class="viibes__text_medium ">
                                    Консультации по любым вопросам в течении всего первого семестра
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="viibes__services_packages_item_underside">
                        <a class="viibes__btn_medium viibes__modal_form_activator">Оставить заявку</a>
                        <a href="{{ URL::asset('/assets/client/pdf/prices/desktop/comfort.pdf') }}" target="_blank"
                           class="viibes__color_purple viibes__services_packages_item_underside_link"
                           title="Смотреть подробную информацию про пакет услуг «COMFORT»">
                            Скачать подробную информацию об услугах в пакете «COMFORT»
                        </a>
                        <a href="{{ URL::asset('/assets/client/pdf/prices/mobile/comfort.pdf') }}" target="_blank"
                           class="viibes__color_purple viibes__services_packages_item_underside_link viibes__services_packages_item_underside_link_mobile"
                           title="Смотреть подробную информацию про пакет услуг «COMFORT»">
                            Скачать подробную информацию об услугах в пакете «COMFORT»
                        </a>
                    </div>
                </div>
                --}}
            </div>
            <p class="viibes__h2_sub viibes__color_black viibes__services_packages_sub"><span class="viibes__color_purple">Вместе с комплексными пакетами VIIBES Study Вы приобритаете уверенность 💜</span> Это именно то, что нужно при переезде в другую страну, когда не знаешь, как там все устроено.</p>
        </div>
    </section>
    <section class="viibes__services_extra viibes__bg_gray">
        <div class="viibes__wrap viibes__bg_white">
            <div class="viibes__services_extra_preview">
                <div>
                    <h2 class="viibes__h2">Отдельные услуги компании VIIBES Study</h2>
                    <p class="viibes__h2_sub">Соберите свой отдельный набор необходимых услуг для поступления в университет Словакии</p>
                    <a class="viibes__btn_link viibes__modal_form_activator">Получить консультацию <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка"></a>

                </div>
                <img src="{{ URL::asset('/assets/client/images/services/teen.jpg') }}"
                     alt="Студентка" title="Студентка" class="viibes__services_extra_image">
            </div>
            <div class="viibes__services_extra_list">
                @foreach($additional_services as $key => $value)
                    <div class="viibes__services_extra_list_item viibes__bg_gray">
                        <h3 class="viibes__h4">{{ $key }}</h3>
                        <p class="viibes__text_normal viibes__color_gray">{{ $value }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('client.blocks.cards.services')
    @include('client.blocks.cta.forms.study')
    @include('client.blocks.top-universities')
    @include('client.blocks.cta.courses')
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
            "name": "Услуги и стоимость поступления в Словакию. VIIBES Study",
            "description": "Процесс поступления. Стоимость поступления в Словакию. Комплексные услуги по поступлению в ВУЗы Словакии. Отдельные услуги для самостоятельного поступления",
            "url": "{{ route('services') }}",
            "inLanguage": "ru"
        }
    </script>
@endsection

@extends('client.layouts.app')
@section('meta-tags')
    <title>Контакты. VIIBES Study</title>
    <meta name="description" content="Звоните и пишите нам через удобный Вам мессенджер или оставляйте заявку на бесплатную консультацию.">
    <meta property="og:title" content="Контакты. VIIBES Study"/>
    <meta property="og:description" content="Звоните и пишите нам через удобный Вам мессенджер или оставляйте заявку на бесплатную консультацию."/>
@endsection
@section('body_class') viibes__contacts-page @endsection
@section('content')
    <section class="viibes__contacts-page_main">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Наши контакты 🤙</h1>
            @include('client.blocks.breadcrumbs')
            <div class="viibes__contacts-page_main_content">
                <div class="viibes__contacts-page_main_content_item viibes__bg_gray">
                    <div class="viibes__contacts-page_main_content_item_topside">
                        <h4 class="viibes__h4">Звоните и пишите нам через удобный Вам мессенджер ⚡️</h4>
                        <div class="">
                            <a href="tel:{{ str_replace('-', '', env('PHONE_NUMBER')) }}"
                               class="viibes__h4 viibes__color_purple"
                                title="Связаться с менеджером">
                                {{ env('PHONE_NUMBER') }}
                            </a>
                            <p class="viibes__text_normal">Номер телефона и мессенджеры</p>
                        </div>
                        <p class="viibes__text_normal">{{ env('WORK_DAYS') }} {{ env('WORKING_HOURS') }} (по Словакии)</p>
                    </div>
                    <div class="viibes__contacts-page_main_content_item_underside">
                        <div class="viibes__contacts_row_socials">
                            <a href="{{ env('TELEGRAM_LINK') }}" rel="nofollow" id="telegram__gtm_click_event"
                               class="viibes__telegram_circle viibes__bg_telegram viibes__bg_telegram_hover"
                               target="_blank" title="Перейти в Telegram">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/telegram.svg') }}" alt="иконка телеграм">
                            </a>
                            <a href="{{ env('WHATSAPP_LINK') }}" rel="nofollow" id="whatsapp__gtm_click_event"
                               class="viibes__whatsapp_circle viibes__bg_whatsapp viibes__bg_whatsapp_hover"
                               target="_blank" title="Перейти в WhatsApp">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/whatsapp.svg') }}" alt="иконка вотсапп">
                            </a>
                            <a href="{{ env('VIBER_LINK') }}" rel="nofollow" id="viber__gtm_click_event"
                               class="viibes__viber_circle viibes__bg_viber viibes__bg_viber_hover"
                               target="_blank" title="Перейти в Viber">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/viber.svg') }}" alt="иконка вайбер">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="viibes__contacts-page_main_content_item viibes__bg_purple">
                    <div class="viibes__contacts-page_main_content_item_topside">
                        <h4 class="viibes__h4">Оставляйте заявку на беспланую консультацию</h4>
                        <p class="viibes__text_normal">Оставляйте заявку на бесплатную консультацию и мы поможем Вам с любым интересующим вопросом по поводу помтупления и языковых курсов 💜</p>
                    </div>
                    <div class="viibes__contacts-page_main_content_item_underside">
                        <a class="viibes__btn_small viibes__modal_form_activator">Получить консультацию</a>
                    </div>
                </div>
                <div class="viibes__contacts-page_main_content_item viibes__bg_gray">
                    <img src="{{ URL::asset('/assets/client/images/contacts/contact-phones.jpg') }}"
                         alt="Мок-ап телефоны" title="Мок-ап телефоны" class="viibes__contacts-page_main_content_item_image">
                    <div class="viibes__contacts-page_main_content_item_topside">
                        <h4 class="viibes__h4">Следите за нашей жизнью в социальных сетях</h4>
                        <p class="viibes__text_normal">Смотрите больше о нас и о жизни в Словакии в наших Instagram и Facebook</p>
                    </div>
                    <div class="viibes__contacts-page_main_content_item_underside">
                        <div class="viibes__contacts_row_socials">
                            <a href="{{ env('INSTAGRAM_LINK') }}" rel="nofollow" id="instagram__gtm_click_event"
                               class="viibes__instagram_circle viibes__bg_instagram viibes__bg_instagram_hover"
                               target="_blank" title="Перейти в Instagram VIIBES Study">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/instagram.svg') }}" alt="иконка инстаграм">
                            </a>
                            <a href="{{ env('FACEBOOK_LINK') }}" rel="nofollow" id="facebook__gtm_click_event"
                               class="viibes__facebook_circle viibes__bg_facebook viibes__bg_facebook_hover"
                               target="_blank" title="Перейти в Facebook VIIBES Study">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/facebook.svg') }}" alt="иконка фейсбук">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('client.blocks.cta.forms.study')
    @include('client.blocks.seo.countries')
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Наши контакты. VIIBES Study",
            "description": "Звоните и пишите нам через удобный Вам мессенджер или оставляйте заявку на бесплатную консультацию.",
            "url": "{{ route('contacts') }}",
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
            "@id": "{{ route('contacts') }}",
            "name": "Контакты"
            }
          }
         ]
        }
    </script>--}}
@endsection

@php $route_name = Route::currentRouteName(); @endphp
<header class="viibes__header @if($route_name !='home' && $route_name != 'belarus' && $route_name != 'ukraine') viibes__header_white @endif" id="header">
    <div class="viibes__top_banner" id="viibes__top_banner">
        <div class="viibes__wrap">
            <div class="viibes__top_banner_bg_yellow"></div>
            <div class="viibes__top_banner_bg_orange"></div>
            <p>
                Набор группы
                <span> абитуриентов {{ (new \App\Http\Controllers\Controller())->get_banner_substring($ip_country) }}</span>
                <u>на 2025 <br> год</u> уже идет!
            </p>
            <a href="#" class=" viibes__modal_form_activator">
                Связаться с нами
            </a>
        </div>
    </div>
    <div class="viibes__wrap">
        <div class="viibes__header_right">
            <a href="{{ route('home') }}" title="Перейти на главную страницу">
                @if(Route::currentRouteName() == 'ukraine')
                    <svg id="svg-ukraine" width="53" height="40" viewBox="0 0 53 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="blue" d="M7.54362 18.0051L0 6.44919e-06H3.24021L8.83465 13.4658L14.4038 6.44919e-06H17.6693L10.1257 18.0051H7.54362Z"/>
                        <path class="blue" d="M20.0225 18.0051V6.44919e-06H22.9843V18.0051H20.0225Z"/>
                        <path class="blue" d="M27.3893 18.0051V6.44919e-06H30.3511V18.0051H27.3893Z"/>
                        <path class="blue" d="M34.7562 18.0051V6.44919e-06L46.2997 0C47.8691 0 49.1517 0.481826 50.1474 1.44548C51.16 2.40913 51.6663 3.58411 51.6663 4.97042C51.6663 6.45816 51.1094 7.61623 49.9955 8.44463C51.9194 9.23922 52.8814 10.6678 52.8814 12.7303C52.8814 14.235 52.3329 15.4945 51.2359 16.5089C50.1559 17.5063 48.772 18.0051 47.0844 18.0051L34.7562 18.0051ZM37.7179 15.2916L47.0085 15.2916C47.9535 15.2916 48.6876 15.0549 49.2108 14.5816C49.734 14.1082 49.9955 13.4827 49.9955 12.705C49.9955 11.9442 49.734 11.3271 49.2108 10.8538C48.6876 10.3635 47.9535 10.1183 47.0085 10.1183L37.7179 10.1184V15.2916ZM37.7179 7.58243L46.1478 7.58242C46.941 7.58242 47.5738 7.35419 48.0463 6.89772C48.5189 6.44125 48.7551 5.85799 48.7551 5.14793C48.7551 4.47168 48.5189 3.89687 48.0463 3.4235C47.5738 2.95013 46.941 2.71344 46.1478 2.71344L37.7179 2.71345V7.58243Z"/>
                        <path class="yellow" d="M2.05045 39.6957V21.6906H37.7179V24.5308H5.01221V29.1462H36.1991V31.9865H5.01221V36.8554H37.7179V39.6957H2.05045Z"/>
                        <path class="yellow" d="M46.9072 40C44.9833 40 43.4223 39.4675 42.2241 38.4024C41.0428 37.3204 40.4183 36.027 40.3508 34.5224H43.3126C43.4139 35.3846 43.8104 36.0524 44.5024 36.5258C45.2112 36.9992 46.0043 37.2358 46.8819 37.2358C47.7595 37.2358 48.4767 37.033 49.0336 36.6272C49.6074 36.2046 49.8943 35.6467 49.8943 34.9535C49.8943 33.7363 49.0674 32.8571 47.4135 32.3161L45.2112 31.5807C42.2747 30.6509 40.8065 28.918 40.8065 26.3821C40.8065 24.8436 41.3297 23.6264 42.376 22.7303C43.4392 21.8343 44.823 21.3863 46.5275 21.3863C48.2995 21.3863 49.7086 21.9019 50.755 22.9332C51.8013 23.9476 52.3835 25.1479 52.5016 26.5342H49.5399C49.3542 25.7396 48.9745 25.1479 48.4007 24.7591C47.827 24.3533 47.1857 24.1505 46.4769 24.1505C45.7006 24.1505 45.0593 24.3449 44.553 24.7337C44.0467 25.1057 43.7851 25.6044 43.7683 26.2299C43.7683 26.8724 43.9623 27.3964 44.3505 27.8022C44.7386 28.191 45.3546 28.5207 46.1984 28.7912L48.4261 29.5013C51.3963 30.4649 52.8814 32.2485 52.8814 34.8521C52.8814 36.3736 52.3244 37.6162 51.2106 38.5799C50.1137 39.5266 48.6792 40 46.9072 40Z"/>
                    </svg>
                @else
                    <svg width="53" height="40" viewBox="0 0 53 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.54362 18.0051L0 6.44919e-06H3.24021L8.83465 13.4658L14.4038 6.44919e-06H17.6693L10.1257 18.0051H7.54362Z"/>
                        <path d="M20.0225 18.0051V6.44919e-06H22.9843V18.0051H20.0225Z"/>
                        <path d="M27.3893 18.0051V6.44919e-06H30.3511V18.0051H27.3893Z"/>
                        <path d="M34.7562 18.0051V6.44919e-06L46.2997 0C47.8691 0 49.1517 0.481826 50.1474 1.44548C51.16 2.40913 51.6663 3.58411 51.6663 4.97042C51.6663 6.45816 51.1094 7.61623 49.9955 8.44463C51.9194 9.23922 52.8814 10.6678 52.8814 12.7303C52.8814 14.235 52.3329 15.4945 51.2359 16.5089C50.1559 17.5063 48.772 18.0051 47.0844 18.0051L34.7562 18.0051ZM37.7179 15.2916L47.0085 15.2916C47.9535 15.2916 48.6876 15.0549 49.2108 14.5816C49.734 14.1082 49.9955 13.4827 49.9955 12.705C49.9955 11.9442 49.734 11.3271 49.2108 10.8538C48.6876 10.3635 47.9535 10.1183 47.0085 10.1183L37.7179 10.1184V15.2916ZM37.7179 7.58243L46.1478 7.58242C46.941 7.58242 47.5738 7.35419 48.0463 6.89772C48.5189 6.44125 48.7551 5.85799 48.7551 5.14793C48.7551 4.47168 48.5189 3.89687 48.0463 3.4235C47.5738 2.95013 46.941 2.71344 46.1478 2.71344L37.7179 2.71345V7.58243Z"/>
                        <path d="M2.05045 39.6957V21.6906H37.7179V24.5308H5.01221V29.1462H36.1991V31.9865H5.01221V36.8554H37.7179V39.6957H2.05045Z"/>
                        <path d="M46.9072 40C44.9833 40 43.4223 39.4675 42.2241 38.4024C41.0428 37.3204 40.4183 36.027 40.3508 34.5224H43.3126C43.4139 35.3846 43.8104 36.0524 44.5024 36.5258C45.2112 36.9992 46.0043 37.2358 46.8819 37.2358C47.7595 37.2358 48.4767 37.033 49.0336 36.6272C49.6074 36.2046 49.8943 35.6467 49.8943 34.9535C49.8943 33.7363 49.0674 32.8571 47.4135 32.3161L45.2112 31.5807C42.2747 30.6509 40.8065 28.918 40.8065 26.3821C40.8065 24.8436 41.3297 23.6264 42.376 22.7303C43.4392 21.8343 44.823 21.3863 46.5275 21.3863C48.2995 21.3863 49.7086 21.9019 50.755 22.9332C51.8013 23.9476 52.3835 25.1479 52.5016 26.5342H49.5399C49.3542 25.7396 48.9745 25.1479 48.4007 24.7591C47.827 24.3533 47.1857 24.1505 46.4769 24.1505C45.7006 24.1505 45.0593 24.3449 44.553 24.7337C44.0467 25.1057 43.7851 25.6044 43.7683 26.2299C43.7683 26.8724 43.9623 27.3964 44.3505 27.8022C44.7386 28.191 45.3546 28.5207 46.1984 28.7912L48.4261 29.5013C51.3963 30.4649 52.8814 32.2485 52.8814 34.8521C52.8814 36.3736 52.3244 37.6162 51.2106 38.5799C50.1137 39.5266 48.6792 40 46.9072 40Z"/>
                    </svg>
                @endif
            </a>
            <div class="viibes__header_list">
                <!-- <a href="#" class="viibes__text_normal">О нас</a> -->
                @if($ip_country == 'BY')
                    <a href="{{ route('belarus') }}" class="viibes__text_normal" title="Перейти на страницу контактов">
                        Для белорусов
                    </a>
                @endif
                <a href="{{ route('services') }}" class="viibes__text_normal" title="Перейти на страницу услуги и стоимость">
                    Услуги
                </a>
                <a href="{{ route('universities') }}" class="viibes__text_normal" title="Перейти на страницу университетов Словакии">
                    Университеты
                </a>
                <a href="{{ route('specialities') }}" class="viibes__text_normal" title="Перейти на страницу специальностей словацких ВУЗов">
                    Специальности
                </a>
                <a href="{{ route('courses') }}" class="viibes__text_normal" title="Перейти на страницу курсов словацкого языка">
                    Курсы
                </a>
                <a href="{{ route('reviews') }}" class="viibes__text_normal" title="Перейти на страницу отзывов клиентов VIIBES Study">
                    Отзывы
                </a>
                <!-- <a href="#" class="viibes__text_normal">Отзывы</a> -->
                <a href="{{ route('contacts') }}" class="viibes__text_normal" title="Перейти на страницу контактов">
                    Контакты
                </a>
                <a href="{{ route('blog') }}" class="viibes__text_normal" title="Перейти на страницу контактов">
                    Блог
                </a>
            </div>
        </div>
        <div class="viibes__header_left">
            <div class="viibes__contacts_row_socials">
                <a href="{{ env('TELEGRAM_LINK') }}" rel="nofollow" id="telegram__gtm_click_event"
                   class="viibes__telegram_circle viibes__bg_telegram viibes__bg_telegram_hover"
                   title="Перейти в Telegram"
                   style="background: #E9F6FC;">
                    <img src="{{ URL::asset('/assets/client/images/media-logo-icons/telegram.svg') }}" alt="иконка телеграм">
                </a>
                <a href="{{ env('WHATSAPP_LINK') }}" rel="nofollow" id="whatsapp__gtm_click_event"
                   class="viibes__whatsapp_circle viibes__bg_whatsapp viibes__bg_whatsapp_hover"
                   title="Перейти в WhatsApp"
                   style="background: #EAFBF0;">
                    <img src="{{ URL::asset('/assets/client/images/media-logo-icons/whatsapp.svg') }}" alt="иконка вотсапп">
                </a>
                <a href="{{ env('VIBER_LINK') }}" rel="nofollow" id="viber__gtm_click_event"
                   class="viibes__viber_circle viibes__bg_viber viibes__bg_viber_hover"
                   title="Перейти в Viber"
                   style="background: #F2F0FE;">
                    <img src="{{ URL::asset('/assets/client/images/media-logo-icons/viber.svg') }}" alt="иконка вайбер">
                </a>
            </div>
            {{--<a href="#" class="viibes__header_login">Войти</a>--}}
            <div class="viibes__btn_slim viibes__modal_form_activator" id="gtm_event__pc_header_cta">
                Бесплатная консультация
            </div>
            <div id="burger" class="header__burger burger">
                <div class="burger__line"></div>
                <div class="burger__line"></div>
                <div class="burger__line"></div>
                <div class="burger__line"></div>
            </div>
        </div>
    </div>
    <div class="viibes__header_mobile_menu" id="mobile_menu">
        <div class="viibes__header_mobile_menu_wrap">
            <div class="viibes__header_mobile_menu_list">
                <a href="{{ route('home') }}" class="viibes__header_mobile_menu_item" title="Перейти на главную страницу">
                    Главная
                </a>
                <!-- <a href="#" class="viibes__header_mobile_menu_item viibes__header_mobile_menu_item_active">О нас</a> -->
                @if($ip_country == 'BY')
                    <a href="{{ route('belarus') }}" class="viibes__header_mobile_menu_item" title="Перейти на страницу услуги и стоимость">
                        Для белорусов 🇧🇾
                    </a>
                @endif
                <a href="{{ route('services') }}" class="viibes__header_mobile_menu_item" title="Перейти на страницу услуги и стоимость">
                    Услуги ⚡️
                </a>
                <a href="{{ route('universities') }}" class="viibes__header_mobile_menu_item" title="Перейти на страницу университетов Словакии">
                    Университеты
                </a>
                <a href="{{ route('specialities') }}" class="viibes__header_mobile_menu_item" title="Перейти на страницу специальностей словацких ВУЗов">
                    Специальности
                </a>
                <a href="{{ route('courses') }}" class="viibes__header_mobile_menu_item" title="Перейти на страницу курсов словацкого языка">
                    Курсы словацкого 🇸🇰
                </a>
                <!-- <a href="#" class="viibes__header_mobile_menu_item">Отзывы 💜</a> -->
                <a href="{{ route('reviews') }}" class="viibes__header_mobile_menu_item" id="reviews_link_home_m" title="Перейти на страницу отзывов клиентов VIIBES Study">
                    Отзывы
                </a>
                <a href="{{ route('contacts') }}" class="viibes__header_mobile_menu_item" title="Перейти на страницу контактов">
                    Контакты
                </a>
                <a href="{{ route('blog') }}" class="viibes__header_mobile_menu_item" title="Перейти на страницу новостей и статьей">
                    Блог
                </a>
                <a id="gtm_event__m_left_menu_cta" class="viibes__header_mobile_menu_consultation viibes__mobile viibes__modal_form_activator">
                    Бесплатная консультация
                </a>
            </div>
            {{--<div class="viibes__header_mobile_menu_copyright">
                @include('client.components.copyright')
            </div>--}}
        </div>
    </div>
</header>

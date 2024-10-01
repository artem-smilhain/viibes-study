<footer class="viibes__footer">
    <div class="viibes__footer_topside">
        <div class="viibes__wrap">
            <div class="viibes__footer_column">
                <div class="viibes__footer_head">
                    <img src="{{ URL::asset('/assets/client/images/logo.svg') }}" alt="логотип VIIBES Study лого вайбс стади">
                    <p>Твой <span class="viibes__color_purple">особенный</span><br>этап жизни</p>
                </div>
                <ul class="viibes__footer_list">
                    <li><a href="{{ route('services') }}" title="Перейти на страницу услуги и стоимость">Услуги и стоимость</a></li>
                    <li><a href="{{ route('reviews') }}" title="Перейти на страницу отзывов">Отзывы клиентов 😚</a></li>
                    <li><a href="{{ route('contacts') }}" title="Перейти на страницу контактов">Контакты 🤙</a></li>
                    <li><a href="{{ route('faq') }}" title="Смотреть больше о проекте VIIBES Study">Вопрос-ответ 📝</a></li>
                    <li><a href="{{ route('webinar') }}" title="Смотреть больше про наш вебинар">Вебинар </a></li>
                    <li><a href="{{ route('blog') }}" title="Смотреть больше про наш вебинар">Новости и статьи </a></li>
                </ul>
            </div>
            <div class="viibes__footer_column">
                <div class="viibes__footer_head">
                    <p class="viibes__color_gray">поступление</p>
                </div>
                <ul class="viibes__footer_list">
                    <li><a class="viibes__modal_form_activator">Бесплатная консультация ⚡️</a></li>
                    <li><a href="{{ route('services') }}" title="Смотреть больше про комплексное поступление">Комплексное поступление 💜</a></li>
                    <li><a href="{{ route('courses') }}" title="Смотреть больше про курсы словацкого языка">Курсы словацкого 🇸🇰</a></li>
                    {{--<li><a href="{{ route('services') }}" title="Смотреть больше про отдельные услуги">Отдельные услуги</a></li>--}}
                    <li><a href="{{ route('universities') }}" title="Перейти на страницу университетов Словакии">Университеты</a></li>
                    <li><a href="{{ route('specialities') }}" title="Найти специальность по направлению">Поиск специальности</a></li>
                    <li><a href="{{ route('university-categories') }}" title="Найти специальность по направлению">ВУЗы по направлениям</a></li>
                </ul>
            </div>
            <div class="viibes__footer_column">
                <div class="viibes__footer_head">
                    <p class="viibes__color_gray">Наши контакты</p>
                </div>
                <div class="viibes__contacts_list">
                    <div class="viibes__contacts_row">
                        <div class="viibes__contacts_row_content">
                            <a href="tel:{{ str_replace('-', '', env('PHONE_NUMBER')) }}" id="phone__gtm_click_event"
                               class="viibes__h3" title="Связаться с менеджером">
                                {{ env('PHONE_NUMBER') }}
                            </a>
                            <p class="viibes__text_normal">Номер телефона и мессенджеры</p>
                        </div>
                        <div class="viibes__contacts_row_socials">
                            <a href="{{ env('TELEGRAM_LINK') }}" rel="nofollow" id="telegram__gtm_click_event"
                               class="viibes__telegram_circle viibes__bg_telegram viibes__bg_telegram_hover"
                               title="Перейти в Telegram">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/telegram.svg') }}" alt="иконка телеграм">
                            </a>
                            <a href="{{ env('WHATSAPP_LINK') }}" rel="nofollow" id="whatsapp__gtm_click_event"
                               class="viibes__whatsapp_circle viibes__bg_whatsapp viibes__bg_whatsapp_hover"
                               title="Перейти в WhatsApp">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/whatsapp.svg') }}" alt="иконка востапп">
                            </a>
                            <a href="{{ env('VIBER_LINK') }}" rel="nofollow" id="viber__gtm_click_event"
                               class="viibes__viber_circle viibes__bg_viber viibes__bg_viber_hover"
                               title="Перейти в Viber">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/viber.svg') }}" alt="иконка вайбер">
                            </a>
                        </div>
                    </div>
                    <div class="viibes__contacts_row">
                        <div class="viibes__contacts_row_content">
                            <a href="mailto:{{ env('EMAIL') }}" id="email__gtm_click_event"
                               class="viibes__h3" title="Написать нам на Email">
                                {{ env('EMAIL') }}
                            </a>
                            <p class="viibes__text_normal">Наш Email</p>
                        </div>
                    </div>
                    <!--<div class="viibes__contacts_row">
                        <div class="viibes__contacts_row_content">
                            <a href="mailto:{{ env('EMAIL') }}" id="email__gtm_click_event"
                               class="viibes__h3" title="Написать нам на Email">
                                Werferova 6, Košice, Slovakia
                            </a>
                            <p class="viibes__text_normal">Наш адрес в Словакии</p>
                        </div>
                    </div>-->
                    <div class="viibes__contacts_row">
                        <div class="viibes__contacts_row_socials">
                            <a href="{{ env('INSTAGRAM_LINK') }}" rel="nofollow" id="instagram__gtm_click_event"
                               class="viibes__instagram_circle viibes__bg_instagram viibes__bg_instagram_hover"
                               title="Перейти в Instagram VIIBES Study">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/instagram.svg') }}" alt="иконка инстаграм">
                            </a>
                            <a href="{{ env('FACEBOOK_LINK') }}" rel="nofollow" id="facebook__gtm_click_event"
                               class="viibes__facebook_circle viibes__bg_facebook viibes__bg_facebook_hover"
                               title="Перейти в Facebook VIIBES Study">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/facebook.svg') }}" alt="иконка фейсбук">
                            </a>
                        </div>
                        <span class="viibes__text_normal">Следите за нашей жизнью и <br> новостями в социальных сетях</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="viibes__footer_middle">
        <div class="viibes__wrap">

            <div class="viibes__footer_middle_list">
                @php
                    $_cities_count = count($_cities);
                    $_cities_i = 0;
                @endphp
                @foreach($_cities as $_city)
                    <a href="{{ route('universities.index-by-city', $_city->slug) }}"
                       class="viibes__text_small" title="Смотреть университеты в городе {{ $_city->name }}">
                        {{ $_city->name }}
                    </a>
                    @if($_cities_i + 1 !== $_cities_count)
                        <div class="viibes__footer_middle_list_circle"></div>
                        @php $_cities_i++ @endphp
                    @endif
                @endforeach
            </div>
            <a href="{{ route('html-map') }}"
               class="viibes__text_normal" title="Смотреть карту сайта">
                <u>Навигация по сайту</u>
            </a>
            <!--<a id="gtm_event__footer_cta" class="viibes__text_normal viibes__color_purple viibes__modal_form_activator">Бесплатная консультация</a>-->
            {{--<a href="#" class="viibes__text_normal viibes__color_purple">Почему именно Словакия?</a>--}}
        </div>
    </div>
    <div class="viibes__footer_underside">
        <div class="viibes__wrap">
            <div class="viibes__copyright">
                <img src="{{ URL::asset('/assets/client/images/components/copyright-fingers.svg') }}" alt="иконка руки" class="viibes__copyright_hand">
                <div class="viibes__copyright_content">
                    <p>Учись, работай, путешествуй!</p>
                    <div class="viibes__copyright_content_main">
                        <span>© VIIBES Study {{ date('Y') }}</span>
                        <img src="{{ URL::asset('/assets/client/images/components/copyright-heart.svg') }}" alt="иконка сердце">
                    </div>
                </div>
            </div>
            <div class="viibes__footer_underside_nav">
                <div>
                    <p class="viibes__text_normal viibes__color_black">Lermontovova 911/3, 81105 Bratislava - Staré Mesto</p>
                    <p class="viibes__text_small">Адрес VIIBES Study в Словакии 🇸🇰</p>
                </div>
                {{--<a href="#" class="viibes__text_normal">Личный кабинет</a>--}}
                {{--<a href="#" class="viibes__text_normal">Политика конфиденциальности</a>
                <a href="#" class="viibes__text_normal">Условия использования</a>
                <a href="{{ route('html-map') }}"
                   class="viibes__text_normal" title="Смотреть карту сайта">
                    Карта сайта
                </a>--}}
            </div>
        </div>
    </div>
</footer>

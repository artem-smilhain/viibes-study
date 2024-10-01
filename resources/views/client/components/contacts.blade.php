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
    <div class="viibes__contacts_row">
        <div class="viibes__contacts_row_content">
            <a href="mailto:{{ env('EMAIL') }}" id="email__gtm_click_event"
               class="viibes__h3" title="Написать нам на Email">
                {{ env('EMAIL') }}
            </a>
            <p class="viibes__text_normal">Наш Email</p>
        </div>
    </div>
    <div class="viibes__contacts_row">
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
        <span class="viibes__text_normal">Следите за нашей жизнью и <br> новостями в социальных сетях</span>
    </div>
</div>

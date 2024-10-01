<section class="viibes__faq">
    <div class="viibes__wrap">
        <div class="viibes__faq_left">
            <h2 class="viibes__h2">Ответы на самые <br> <span class="viibes__color_purple">популярные вопросы</span> 📝</h2>
            <p class="viibes__text_big">
                Не нашли ответа на свой вопрос? <br>
                Напишите нам в чат Telegram, WhatsApp или Viber 💜
            </p>
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
        <div class="viibes__faq_content">
            @foreach($faq['content'] as $_key => $_value)
                <div class="viibes__faq_content_item viibes__drop viibes__bg_gray
                        @if($_key === array_key_first($faq['content'])) viibes__drop_active @endif">
                    <div class="viibes__faq_content_item_header viibes__drop_header">
                        <h4 class="viibes__h5">{{ $_key }}</h4>
                        <img src="{{ URL::asset('/assets/client/images/components/arrow-purple.svg') }}" class="viibes__drop_img" alt="">
                    </div>
                    <p class="viibes__text_normal viibes__drop_hidden">{{ $_value }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{--
@section('schema')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
          @foreach($faq as $_key => $_value)
              {
                "@type": "Question",
                "name": "{{ $_key }}",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "{{ $_value }}"
                }
              }
          @endforeach
          ]
        }
</script>
@endsection
--}}

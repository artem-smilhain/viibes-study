<section id="cta_form_study" class="viibes__bg_purple viibes__cta_form">
    <div class="viibes__wrap">
        <h2 class="viibes__h2">Набор групп на {{ env('ADMISSION_YEAR') }} год уже стартовал!
            <span class="viibes__color_purple">Поступай без риска вместе с VIIBES Study 💜</span>
        </h2>
        <p class="viibes__h2_sub">Оставляй заявку на бесплатную консультацию и бронируй место в группе <span>на поступление в Словакию в {{ env('ADMISSION_YEAR') }} году!</span> </p>
        @include('client.components.form', ['form_type' => 'CTA_FORM - Study block'])
    </div>
</section>

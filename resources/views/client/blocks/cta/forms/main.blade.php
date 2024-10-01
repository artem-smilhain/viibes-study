<section id="cta_form_main" class="viibes__cta_form">
    <div class="viibes__wrap">
        <h2 class="viibes__h2">Поступайте в Словакию без риска в {{ env('ADMISSION_YEAR') }} году!
            <span class="viibes__color_purple">Вместе c командой VIIBES Study 💜</span>
        </h2>
        <div class="viibes__cta_form_main_content">
            <div class="viibes__cta_form_main_form">
                <h3 class="viibes__h3">Оставьте заявку на <br> бесплатную консультацию</h3>
                @php if (!isset($form_type)){ $form_type = 'CTA_FORM - Main block'; } @endphp
                @include('client.components.form', ['form_type' => $form_type])
            </div>
            <div class="viibes__cta_form_main_more viibes__bg_purple">
                <h3 class="viibes__h3">Как проходит первая <br> консультация </h3>
                <div class="viibes__desktop">
                    <ul class="viibes__cta_form_main_more_list">
                        <li class="viibes__text_big"><span class="viibes__color_purple">01. Расскажем</span> подробнее про Словакию и образование тут</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">02. Расскажем</span> как проходит поступление с VIIBES Study</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">03. Поможем</span> с выбором университета и специальности</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">04. Ответим</span> на все вас интересующие вопросы</li>
                    </ul>
                </div>
                <div class="viibes__mobile">
                    <ul class="viibes__cta_form_main_more_list">
                        <li class="viibes__text_big"><span class="viibes__color_purple">01. Расскажем</span> подробнее про Словакию и систему образования этой страны. Какие перспективы учиться в Словакии?</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">02. Расскажем</span> как проходит поступление с VIIBES Study, этапы поступления и какие документы нужны</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">03. Поможем</span> с выбором наиболее подходящего университета и специальности, исходя из ваших пожеланий и интересов</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">04. Ответим</span> на все интересующие вас вопросы касательно обучения и жизни в Словакии</li>
                    </ul>
                </div>
                <img src="{{ URL::asset('/assets/client/images/blocks/cta/cta-woman.jpg') }}" alt="Девушка казашка">
            </div>
        </div>

    </div>
</section>

<aside class="viibes__sidebar_universities" id="cta_form_sidebar_universities">
    <div class="viibes__sidebar_universities_second">
        <div class="viibes__h4">
            Все программы ВУЗов Словакии.
            <span class="viibes__color_purple">Найди интересующую специальность!</span>
        </div>
        <a href="{{ route('specialities') }}"
           class="viibes__btn_link" title="Смотреть специальности словацких ВУЗов">
            Искать специальность
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>
        <img src="{{ URL::asset('/assets/client/images/blocks/cta/program-woman.jpg') }}"
             alt="Девушка со словацким флагом" class="viibes__sidebar_universities_second_img">
    </div>
    <div class="viibes__sidebar_universities_first">
        <div class="viibes__h4">
            Поможем с выбором
            <span class="viibes__color_purple">университета:</span>
        </div>
        @include('client.components.form', ['form_type' => 'CTA_SIDEBAR_FORM'])
    </div>
</aside>


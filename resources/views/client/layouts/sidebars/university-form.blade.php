<div class="viibes__sidebar_university" id="cta_form_sidebar_university">
    <div class="viibes__h4">
        Узнать больше про
        <span class="viibes__color_purple">{{ $university->name }}:</span>
    </div>
    @include('client.components.form', ['form_type' => 'CTA_SIDEBAR_FORM - '.$university->abbreviation_sk.' Page'])
</div>

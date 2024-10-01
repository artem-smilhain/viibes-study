<!-- <div class="form_validate_errors">
    <div class="form_validate_error form_validate_error_phone">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M19.9997 20H3.99969C3.64119 20 3.31119 19.8085 3.13269 19.498C2.95469 19.1875 2.95569 18.8055 3.13619 18.496L11.1362 4.496C11.3152 4.189 11.6442 4 11.9997 4C12.3552 4 12.6842 4.189 12.8637 4.496L20.8637 18.496C21.0442 18.8055 21.0452 19.1875 20.8672 19.498C20.6892 19.8085 20.3577 20 19.9997 20Z" fill="#FFC107"/>
            <path d="M11 17.071C11 16.9365 11.0235 16.8135 11.0715 16.698C11.1185 16.584 11.186 16.485 11.273 16.402C11.3585 16.318 11.464 16.2525 11.585 16.2055C11.707 16.1595 11.844 16.135 11.997 16.135C12.15 16.135 12.288 16.1595 12.411 16.2055C12.536 16.2525 12.6415 16.318 12.727 16.402C12.8145 16.485 12.882 16.584 12.9285 16.698C12.9765 16.8135 13 16.9365 13 17.071C13 17.206 12.9765 17.329 12.9285 17.441C12.8815 17.5535 12.814 17.6505 12.727 17.735C12.6415 17.818 12.536 17.883 12.411 17.931C12.288 17.977 12.15 18 11.997 18C11.8435 18 11.707 17.977 11.585 17.9305C11.464 17.8825 11.3585 17.8175 11.273 17.7345C11.1855 17.65 11.118 17.553 11.0715 17.4405C11.0235 17.3285 11 17.2055 11 17.071ZM12.74 15H11.2535L11.043 9H12.95L12.74 15Z" fill="#5D4037"/>
        </svg>
        <span>Номер телефона слишком короткий</span>
    </div>
</div> -->
<form class="viibes__form viibes__cta_main_form" method="POST" action="{{ route('lead.store') }}" id="viibes__form">
    @csrf
    {{-- name + phone --}}
    <input type="text" id="cta_form_name" name="name" class="viibes__form_name" placeholder="Ваше имя:">
    <input type="tel" id="cta_form_phone" name="phone" class="viibes__form_phone" placeholder="Телефон с кодом страны:"> {{-- placeholder="Телефон с кодом страны:" --}}
    {{-- current page --}}
    <input type="hidden" name="page_route" value="{{ url()->current() }}">
    {{-- utm --}}
    <input type="hidden" name="utm_source" value="{{ app('request')->input('utm_source') }}">
    <input type="hidden" name="utm_medium" value="{{ app('request')->input('utm_medium') }}">
    <input type="hidden" name="utm_campaign" value="{{ app('request')->input('utm_campaign') }}">
    <input type="hidden" name="utm_content" value="{{ app('request')->input('utm_content') }}">
    <input type="hidden" name="utm_term" value="{{ app('request')->input('utm_term') }}">
    {{-- form type --}}
    <input type="hidden" name="type" value="consultation">
    <input type="hidden" name="form_type" value="{{ $form_type }}">
    {{-- send button --}}
    <div>
        <button class="viibes__btn_animation viibes__btn_large" id="btn_usa"> {{-- onclick="return rr_val();" --}}
            <span>Получить консультацию</span>
        </button>
    </div>
</form>
<script>

</script>
<!-- onsubmit="document.getElementById('viibes__modal_loader').style.display = 'flex'" -->

<form id="select_degree__form" class="custom-select">
    <label for="select_degree__form_select" class="viibes__h5">Уровень обучения:</label>
    <select name="select_degree__form_select" id="select_degree__form_select" class="viibes__bg_gray viibes__color_black viibes__text_normal">
        <option value="{{ Request::url() }}" {{ app('request')->input('degree') == 1 ? 'selected' : '' }}>
            Все уровни
        </option>
        <option value="{{ request()->fullUrlWithQuery(['page' => '1', 'degree' => '1']) }}" {{ app('request')->input('degree') == 1 ? 'selected' : '' }}>
            Бакалавриат
        </option>
        <option value="{{ request()->fullUrlWithQuery(['page' => '1', 'degree' => '2']) }}" {{ app('request')->input('degree') == 2 ? 'selected' : '' }}>
            Магистратура
        </option>
        <option value="{{ request()->fullUrlWithQuery(['page' => '1', 'degree' => '3']) }}" {{ app('request')->input('degree') == 3 ? 'selected' : '' }}>
            Объединенное
        </option>
    </select>
</form>

@extends('applicant.layouts.app')
@section('body')
    <section id="add_document">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Добавить новый документ ➕</h1>
            <div id="cabinet_breadcrumbs">
                <span><a href="/my">Главная</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span><a href="/my/documents">Документы</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span>Новый документ</span>
            </div>
            <form action="">
                <label for="name">
                    <span class="viibes__text_small">Название документа:</span>
                    <input type="text" id="name" name="name">
                </label>
                <label for="file">
                    <span class="viibes__text_small">Выберете файл:</span>
                    <input type="file" id="file" name="file">
                </label>
                <button>Сохранить документ</button>
            </form>
        </div>
    </section>
@endsection


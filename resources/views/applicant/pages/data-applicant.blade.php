@extends('applicant.layouts.app')
@section('body')
    <section id="data-edit" class="data-applicant">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Artem Smilhain</h1>
            <div id="cabinet_breadcrumbs">
                <span><a href="/my">Главная</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span><a href="/my/data">Личные данные</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span>Абитуриент</span>
            </div>
            <form action="">
                <div class="form-group">
                    <h2>01. Базовая информация абитуриента</h2>
                    <div>
                        <input type="text" placeholder="Фамилия:">
                        <input type="text" placeholder="Фамилия латиницей (как в паспорте):">
                        <input type="text" placeholder="Фамилия при рождении:">
                        <input type="text" placeholder="Имя:">
                        <input type="text" placeholder="Имя латиницей (как в паспорте):">
                        <input type="text" placeholder="Отчество:">
                        <input type="text" placeholder="Пол:">
                        <input type="text" placeholder="Семейное положение:">
                    </div>
                </div>
                <div class="form-group">
                    <h2>02. Дата и место рождения абитуриента</h2>
                    <div>
                        <input type="date" placeholder="Дата">
                        <input type="text" placeholder="Город:">
                        <input type="text" placeholder="Страна:">
                    </div>
                </div>
                <div class="form-group">
                    <h2>03. Место прописки абитуриента</h2>
                    <div>
                        <input type="text" placeholder="Улица:">
                        <input type="text" placeholder="Дом:">
                        <input type="text" placeholder="Квартира:">
                        <input type="text" placeholder="Город:">
                        <input type="text" placeholder="Страна:">
                        <input type="text" placeholder="Почтовый индекс:">
                    </div>
                </div>
                <div class="form-group">
                    <h2>04. Место проживания абитуриента на данный момент</h2>
                    <div>
                        <input type="text" placeholder="Улица:">
                        <input type="text" placeholder="Дом:">
                        <input type="text" placeholder="Квартира:">
                        <input type="text" placeholder="Город:">
                        <input type="text" placeholder="Страна:">
                        <input type="text" placeholder="Почтовый индекс:">
                    </div>
                </div>
                <div class="form-group">
                    <h2>05. Паспортные данные абитуриента</h2>
                    <div>
                        <input type="text" placeholder="Гражданство:">
                        <input type="text" placeholder="Национальность:">
                        <input type="text" placeholder="Номер паспорта:">
                        <input type="text" placeholder="Место выдачи паспорта:">
                        <input type="text" placeholder="Дата окончания паспорта: ">
                    </div>
                </div>
                <div class="form-group">
                    <h2>06. Среднее образование абитуриента</h2>
                    <div>
                        <input type="text" placeholder="Название школы:">
                        <input type="text" placeholder="Год начала обучения в школе:">
                        <input type="text" placeholder="Год завершения обучения в школе:">
                    </div>
                </div>
                <div class="form-group">
                    <h2>07. Контактные данные абитуриента</h2>
                    <div>
                        <input type="text" placeholder="Номер телефона:">
                        <input type="text" placeholder="Email:">
                    </div>
                </div>
                <button>Сохранить данные</button>
            </form>
        </div>
    </section>
@endsection

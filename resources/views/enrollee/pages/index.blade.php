@extends('applicant.layouts.app')
@section('body')
    <section id="index">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Личный кабинет 🇸🇰</h1>
            <p class="viibes__h1_sub">Яршевич Антон Валерьевич</p>
            <div class="main">
                <div class="left">
                    <div class="programs" onclick="window.location.href='{{ route('enrollee.programs') }}'">
                        <img src="{{ URL::asset('/assets/applicant/images/programs.png') }}" alt="">
                        <h2>Специальности</h2>
                        <p class="viibes__text_small">На которые подаются заявки</p>
                        <a href="{{ route('enrollee.programs') }}" class="viibes__btn_link">
                            Подробнее
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1678 6.55137C13.7946 6.58699 13.4759 6.83824 13.354 7.19262C13.2303 7.54887 13.3259 7.94262 13.5978 8.20137L16.7028 11.3064H4.64275C4.61275 11.3045 4.58275 11.3045 4.55275 11.3064C4.02213 11.3307 3.61338 11.7807 3.63775 12.3114C3.66213 12.842 4.11213 13.2507 4.64275 13.2264H16.7028L13.5828 16.3314C13.2059 16.7082 13.2059 17.3195 13.5828 17.6964C13.9596 18.0732 14.5709 18.0732 14.9478 17.6964L19.6878 12.9414L20.3778 12.2664L19.6878 11.5914L14.9478 6.83637C14.7453 6.62824 14.4584 6.52324 14.1678 6.55137Z" fill="#F17400"/>
                            </svg>
                        </a>
                    </div>
                    <div class="documents" onclick="window.location.href='{{ route('enrollee.documents') }}'">
                        <img src="{{ URL::asset('/assets/applicant/images/documents.png') }}" alt="">
                        <h2>Документы</h2>
                        <p class="viibes__text_small">На которые подаются заявки</p>
                        <a href="{{ route('enrollee.documents') }}" class="viibes__btn_link">
                            Подробнее
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1678 6.55137C13.7946 6.58699 13.4759 6.83824 13.354 7.19262C13.2303 7.54887 13.3259 7.94262 13.5978 8.20137L16.7028 11.3064H4.64275C4.61275 11.3045 4.58275 11.3045 4.55275 11.3064C4.02213 11.3307 3.61338 11.7807 3.63775 12.3114C3.66213 12.842 4.11213 13.2507 4.64275 13.2264H16.7028L13.5828 16.3314C13.2059 16.7082 13.2059 17.3195 13.5828 17.6964C13.9596 18.0732 14.5709 18.0732 14.9478 17.6964L19.6878 12.9414L20.3778 12.2664L19.6878 11.5914L14.9478 6.83637C14.7453 6.62824 14.4584 6.52324 14.1678 6.55137Z" fill="#06B648"/>
                            </svg>
                        </a>
                    </div>
                    <div class="services" onclick="window.location.href='{{ route('enrollee.services') }}'">
                        <img src="{{ URL::asset('/assets/applicant/images/services.png') }}" alt="">
                        <h2>Услуги и оплата</h2>
                        <p class="viibes__text_small">На которые подаются заявки</p>
                        <a href="{{ route('enrollee.services') }}" class="viibes__btn_link">
                            Подробнее
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1678 6.55137C13.7946 6.58699 13.4759 6.83824 13.354 7.19262C13.2303 7.54887 13.3259 7.94262 13.5978 8.20137L16.7028 11.3064H4.64275C4.61275 11.3045 4.58275 11.3045 4.55275 11.3064C4.02213 11.3307 3.61338 11.7807 3.63775 12.3114C3.66213 12.842 4.11213 13.2507 4.64275 13.2264H16.7028L13.5828 16.3314C13.2059 16.7082 13.2059 17.3195 13.5828 17.6964C13.9596 18.0732 14.5709 18.0732 14.9478 17.6964L19.6878 12.9414L20.3778 12.2664L19.6878 11.5914L14.9478 6.83637C14.7453 6.62824 14.4584 6.52324 14.1678 6.55137Z" fill="#229ED9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="data" onclick="window.location.href='{{ route('enrollee.data') }}'">
                        <img src="{{ URL::asset('/assets/applicant/images/data.png') }}" alt="">
                        <h2>Личные данные</h2>
                        <p class="viibes__text_small">На которые подаются заявки</p>
                        <a href="{{ route('enrollee.data') }}" class="viibes__btn_link">
                            Подробнее
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1678 6.55137C13.7946 6.58699 13.4759 6.83824 13.354 7.19262C13.2303 7.54887 13.3259 7.94262 13.5978 8.20137L16.7028 11.3064H4.64275C4.61275 11.3045 4.58275 11.3045 4.55275 11.3064C4.02213 11.3307 3.61338 11.7807 3.63775 12.3114C3.66213 12.842 4.11213 13.2507 4.64275 13.2264H16.7028L13.5828 16.3314C13.2059 16.7082 13.2059 17.3195 13.5828 17.6964C13.9596 18.0732 14.5709 18.0732 14.9478 17.6964L19.6878 12.9414L20.3778 12.2664L19.6878 11.5914L14.9478 6.83637C14.7453 6.62824 14.4584 6.52324 14.1678 6.55137Z" fill="#B62C61"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="right">
                    <h2>Заметки от менеджера: </h2>
                    <p class="viibes__text_normal">
                        Во всех государственных ВУЗах Словакии образование полностью бесплатное, а на многих факультетах нет даже экзаменов
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

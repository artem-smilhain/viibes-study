@extends('applicant.layouts.app')
@section('body')
    <section id="data">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Личные данные 📝</h1>
            <div id="cabinet_breadcrumbs">
                <span><a href="{{ route('enrollee.index') }}">Главная</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span>Личные данные</span>
            </div>
            <div class="data">
                <div class="student">
                    <div class="inner">
                        <h2>{{ $enrollee->name }} {{ $enrollee->last_name }}</h2>
                        <div>
                            <p>{{ $enrollee->last_name }} {{ $enrollee->name }} {{ $enrollee->father_name }}</p>
                            <p>Абитуриент</p>
                        </div>
                    </div>
                    <a href="{{ route('enrollee.data-applicant') }}" class="viibes__btn_link">
                        Полная информация
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.1678 6.55137C13.7946 6.58699 13.4759 6.83824 13.354 7.19262C13.2303 7.54887 13.3259 7.94262 13.5978 8.20137L16.7028 11.3064H4.64275C4.61275 11.3045 4.58275 11.3045 4.55275 11.3064C4.02213 11.3307 3.61338 11.7807 3.63775 12.3114C3.66213 12.842 4.11213 13.2507 4.64275 13.2264H16.7028L13.5828 16.3314C13.2059 16.7082 13.2059 17.3195 13.5828 17.6964C13.9596 18.0732 14.5709 18.0732 14.9478 17.6964L19.6878 12.9414L20.3778 12.2664L19.6878 11.5914L14.9478 6.83637C14.7453 6.62824 14.4584 6.52324 14.1678 6.55137Z" fill="#B62C61"/>
                        </svg>
                    </a>
                </div>
                @foreach($relatives as $relative)
                <div class="parent">
                    <div class="inner">
                        <h2>{{ $relative->name }} {{ $relative->last_name }}</h2>
                        <div>
                            <p>{{ $enrollee->last_name }} {{ $enrollee->name }} {{ $enrollee->father_name }}</p>
                            <p>Родитель</p>
                        </div>
                    </div>
                    <a href="{{ route('enrollee.data-parent') }}" class="viibes__btn_link">
                        Полная информация
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.1678 6.55137C13.7946 6.58699 13.4759 6.83824 13.354 7.19262C13.2303 7.54887 13.3259 7.94262 13.5978 8.20137L16.7028 11.3064H4.64275C4.61275 11.3045 4.58275 11.3045 4.55275 11.3064C4.02213 11.3307 3.61338 11.7807 3.63775 12.3114C3.66213 12.842 4.11213 13.2507 4.64275 13.2264H16.7028L13.5828 16.3314C13.2059 16.7082 13.2059 17.3195 13.5828 17.6964C13.9596 18.0732 14.5709 18.0732 14.9478 17.6964L19.6878 12.9414L20.3778 12.2664L19.6878 11.5914L14.9478 6.83637C14.7453 6.62824 14.4584 6.52324 14.1678 6.55137Z" fill="#F17400"/>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

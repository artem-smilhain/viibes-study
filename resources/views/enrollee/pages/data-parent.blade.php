@extends('applicant.layouts.app')
@section('body')
    @foreach($relatives as $relative)
    <section id="data-edit" class="data-parent">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">{{ $relative->name }} {{ $relative->last_name }}</h1>
            <div id="cabinet_breadcrumbs">
                <span><a href="{{ route('enrollee.index') }}">Главная</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span><a href="{{ route('enrollee.data') }}">Личные данные</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span>Родитель</span>
            </div>
            <form method="post" action="{{route('enrollee.update.data-parent')}}">
                @csrf
                {{ method_field('patch') }}
                @if($errors)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif                <div class="form-group">
                    <h2>01. Базовая информация родителя</h2>
                    <div>
                        <input type="text" placeholder="Фамилия:" name="last_name_ru" value="{{ old('last_name_ru', $relative->last_name_ru) }}">
                        <input type="text" placeholder="Фамилия латиницей (как в паспорте):" name="last_name" value="{{ old('last_name', $relative->last_name) }}">
                        <input type="text" placeholder="Фамилия при рождении:" name="birth_name" value="{{ old('birth_name', $relative->birth_name) }}">
                        <input type="text" placeholder="Имя:" name="name_ru" value="{{ old('name_ru', $relative->name_ru) }}">
                        <input type="text" placeholder="Имя латиницей (как в паспорте):" name="name" value="{{ old('name', $relative->name) }}">
                        <input type="text" placeholder="Отчество:" name="father_name" value="{{ old('father_name', $relative->father_name) }}">
                        <select id="gender_id" name="gender_id"
                                @error('gender_id') is-invalid @enderror" required>
                        <option>{{ __('app.select_gender') }}</option>
                        @foreach($genders as $gender_id => $gender_name)
                            <option
                                value="{{ $gender_id }}" {{ $gender_id == old('gender_id', $relative->gender_id) ? 'selected' : '' }}>{{ $gender_name }}</option>
                            @endforeach
                            </select>
                            <select id="martial_status_id" name="martial_status_id"
                                    class="custom-select @error('martial_status_id') is-invalid @enderror">
                                <option value="">Укажите семейное положение</option>
                                @foreach($martialStatuses as $martial_status_id => $martial_status_name)
                                    <option
                                        value="{{ $martial_status_id }}" {{ $martial_status_id == old('martial_status_id', $relative->martial_status_id) ? 'selected' : '' }}>{{ $martial_status_name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <h2>02. Дата и место рождения родителя</h2>
                    <div>
                        <input type="date" placeholder="Дата" name="birth_date" value="{{ old('birth_date', $relative->birth_date) }}">
                        <input type="text" placeholder="Город:" name="birth_city" value="{{ old('birth_place', $relative->birth_city) }}">
                        <select id="birth_country_id" name="birth_country_id"
                                class="custom-select @error('birth_country_id') is-invalid @enderror">
                            <option value="">{{ __('app.select_country') }}</option>
                            @foreach($countries as $country)
                                <option
                                    value="{{ $country->id }}" {{ $country->id == old('birth_country_id', $relative->birth_country_id) ? 'selected' : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <h2>03. Место прописки родителя</h2>
                    <div>
                        <input type="text" placeholder="Улица:" name="street" value="{{ old('street', $relative->street) }}" required>
                        <input type="text" placeholder="Дом:" name="house" value="{{ old('house', $relative->house) }}">
                        <input type="text" placeholder="Квартира:" name="apartment" value="{{ old('apartment', $relative->apartment) }}" required>
                        <input type="text" placeholder="Город:" name="city" value="{{ old('city', $relative->city) }}" required>
                        <select id="country_id" name="country_id"
                                class="custom-select @error('country_id') is-invalid @enderror" required>
                            <option>{{ __('app.select_country') }}</option>
                            @foreach($countries as $country)
                                <option
                                    value="{{ $country->id }}" {{ $country->id == old('country_id', $relative->country_id) ? 'selected' : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </select>
                        <input type="text" placeholder="Почтовый индекс:" name="ps" value="{{ old('ps', $relative->ps) }}" required>

                    </div>
                </div>
                <div class="form-group">
                    <h2>04. Место проживания родителя на данный момент</h2>
                    <div>
                        <input type="text" placeholder="Улица:" name="actual_street" value="{{ old('actual_street', $relative->actual_street) }}">
                        <input type="text" placeholder="Дом:" name="actual_house" value="{{ old('actual_house', $relative->actual_house) }}">
                        <input type="text" placeholder="Квартира:" name="actual_apartment" value="{{ old('actual_apartment', $relative->actual_apartment) }}">
                        <input type="text" placeholder="Город:" name="actual_city" value="{{ old('actual_city', $relative->actual_city) }}">
                        <select id="actual_country_id" name="actual_country_id"
                                class="custom-select @error('actual_country_id') is-invalid @enderror">
                            <option value="">{{ __('app.select_country') }}</option>
                            @foreach($countries as $country)
                                <option
                                    value="{{ $country->id }}" {{ $country->id == old('actual_country_id', $relative->actual_country_id) ? 'selected' : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </select>
                        <input type="text" placeholder="Почтовый индекс:" name="actual_ps" value="{{ old('actual_ps', $relative->actual_ps) }}">

                    </div>
                </div>
                <div class="form-group">
                    <h2>05. Паспортные данные родителя</h2>
                    <div>
                        <input type="text" placeholder="Гражданство:" name="citizenship" value="{{ old('citizenship', $relative->citizenship) }}" required>
                        <input type="text" placeholder="Национальность:" name="nationality" value="{{ old('nationality', $relative->nationality) }}">
                        <input type="text" placeholder="Номер паспорта:" name="passport" value="{{ old('passport', $relative->passport) }}">
                        <input type="text" placeholder="Место выдачи паспорта:" name="passport_issue_place" value="{{ old('passport_issue_place', $relative->passport_issue_place) }}">
                        <input type="date" placeholder="Дата окончания паспорта:" name="passport_expiration_date" value="{{ old('passport_expiration_date', $relative->passport_expiration_date) }}">
                    </div>
                </div>
                <div class="form-group">
                    <h2>06. Контактные родителя</h2>
                    <div>
                        <input type="text" placeholder="Номер телефона:" name="phone" value="{{ old('phone', $relative->phone) }}">
                        <input type="text" placeholder="Email:" name="email" value="{{ old('email', $relative->email) }}">

                    </div>
                </div>
                <input type="hidden" name="relative_id" value="{{ $relative->id }}">
                <button>Сохранить данные</button>
            </form>
        </div>
    </section>
    @endforeach
@endsection

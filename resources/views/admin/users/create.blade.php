@extends('admin.layouts.app')
@section('content')
    <h4>{{ __('app.create_user') }}</h4>
<form method="post" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
    @csrf
<div class="row">
    @if($errors)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
    {{ $error }}
    </div>
    @endforeach
    @endif
    <fieldset>
        <legend>Базовая информация</legend>
        <div class="form-row">
            <div class="form-group col-6">
                <label for="last_name_ru" class="col-form-label text-capitalize">Фамилия</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="last_name_ru" name="last_name_ru" type="text" class="form-control validate @error('last_name_ru') is-invalid @enderror" value="{{ old('last_name_ru') }}" required maxlength="255">
                    @error('last_name_ru')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="last_name" class="col-form-label text-capitalize">Фамилия латиницей</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="last_name" name="last_name" type="text" class="form-control validate @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" required maxlength="255">
                    @error('last_name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="birth_name" class="col-form-label text-capitalize">Фамилия при рождении</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="birth_name" name="birth_name" type="text" class="form-control validate @error('birth_name') is-invalid @enderror" value="{{ old('birth_name') }}" required maxlength="255">
                    @error('birth_name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="name_ru" class="col-form-label text-capitalize">{{ __('app.Name') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="name_ru" name="name_ru" type="text" class="form-control validate @error('name_ru') is-invalid @enderror" value="{{ old('name_ru') }}" required maxlength="255">
                    @error('name_ru')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="name" class="col-form-label text-capitalize">Имя латиницей</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="name" name="name" type="text" class="form-control validate @error('name') is-invalid @enderror" value="{{ old('name') }}" required maxlength="255">
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="father_name" class="col-form-label text-capitalize">Отчество</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input id="father_name" name="father_name" type="text" class="form-control validate @error('father_name') is-invalid @enderror" value="{{ old('father_name') }}" required maxlength="255">
                    @error('father_name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="gender_id" class="text-capitalize">{{ __('app.gender') }}</label>
                <select id="gender_id" name="gender_id"
                        class="custom-select @error('gender_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_gender') }}</option>
                    @foreach($genders as $gender_id => $gender_name)
                        <option
                            value="{{ $gender_id }}" {{ $gender_id == old('gender_id') ? 'selected' : '' }}>{{ $gender_name }}</option>
                    @endforeach
                </select>
                @error('gender_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="martial_status_id" class="text-capitalize">Семейное положение</label>
                <select id="martial_status_id" name="martial_status_id"
                        class="custom-select @error('martial_status_id') is-invalid @enderror" required>
                    <option>Укажите семейное положение</option>
                    @foreach($martialStatuses as $martial_status_id => $martial_status_name)
                        <option
                            value="{{ $martial_status_id }}" {{ $martial_status_id == old('martial_status_id') ? 'selected' : '' }}>{{ $martial_status_name }}</option>
                    @endforeach
                </select>
                @error('martial_status_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    </fieldset>
    <div class="form-group col-6">
        <label for="password" class="col-form-label text-capitalize">{{ __('app.Password') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
        <input id="password" name="password" type="password" class="form-control validate @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
        @error('password')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror
        </div>
    </div>
        @if($create_enrollee)
            <input type="hidden" name="role_id" value="{{ $roles[0]->id }}">
        @else
        <div class="form-group col-6">
            <label for="role_id" class="text-capitalize">{{ __('app.Role') }}</label>
            <select id="role_id" name="role_id" class="custom-select @error('role_id') is-invalid @enderror" required>
                <option>{{ __('app.select_role') }}</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ $role->id == old('role_id') ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
            @error('role_id')
            <span class="invalid-feedback"><strong>{{ $errors->first('role_id') }}</strong></span>
            @enderror
        </div>
        @endif
        <div class="form-group col-6">
            <label for="status" class="text-capitalize">{{ __('app.Status') }}</label>
            <select id="status_id" name="status_id" class="custom-select @error('status_id') is-invalid @enderror" required>
                <option>{{ __('app.select_status') }}</option>
                @foreach($statuses as $status_id => $status_name)
                    <option value="{{ $status_id }}" {{ $status_id == old('status_id') ? 'selected' : '' }}>{{ $status_name }}</option>
                @endforeach
            </select>
            @error('status_id')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <fieldset>
            <legend>Контактные данные</legend>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="email" class="col-form-label text-capitalize">{{ __('Email') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input id="email" name="email" type="email" class="form-control validate @error('email') is-invalid @enderror" value="{{ old('email') }}" required maxlength="255">
                        @error('email')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="phone" class="col-form-label text-capitalize">Телефон</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                        </div>
                        <input id="phone" name="phone" type="text" class="form-control validate @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  maxlength="255">
                        @error('phone')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Дата и место рождения</legend>
            <div class="form-row">
            <div class="form-group col-6">
                <label class="text-capitalize">{{ __('app.birth_date') }}</label>
                <div class="input-group date" id="date-of-birth" data-target-input="nearest">
                    <div class="input-group-append" data-target="#date-of-birth" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input type="text" class="form-control datetimepicker-input" data-target="#date-of-birth" name="birth_date" value="{{ old('birth_date') }}">
                </div>
                @error('birth_date')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
                <div class="form-group col-6">
                    <label for="birth_city" class="col-form-label text-capitalize">Город рождения</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-map"></i></span>
                        </div>
                        <input id="birth_city" name="birth_city" type="text" class="form-control validate @error('birth_city') is-invalid @enderror" value="{{ old('birth_city') }}"  maxlength="255">
                        @error('birth_city')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            <div class="form-group col-6">
                <label for="birth_country_id">{{ __('app.Country') }}</label>
                <select id="birth_country_id" name="birth_country_id"
                        class="custom-select @error('birth_country_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_country') }}</option>
                    @foreach($countries as $country)
                        <option
                            value="{{ $country->id }}" {{ $country->id == old('birth_country_id') ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('birth_country_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            </div>
        </fieldset>
<fieldset>
    <legend>Место прописки</legend>
    <div class="form-row">
        <div class="form-group col-6">
            <label for="street" class="col-form-label text-capitalize">{{ __('app.street') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-street-view"></i></span>
                </div>
                <input id="street" name="street" type="text" class="form-control validate @error('street') is-invalid @enderror" value="{{ old('street') }}"  maxlength="255">
                @error('street')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="house" class="col-form-label text-capitalize">{{ __('app.house') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                </div>
                <input id="house" name="house" type="text" class="form-control validate @error('house') is-invalid @enderror" value="{{ old('house') }}"  maxlength="255">
                @error('house')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="apartment" class="col-form-label text-capitalize">Номер квартиры</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
                <input id="apartment" name="apartment" type="text" class="form-control validate @error('apartment') is-invalid @enderror" value="{{ old('apartment') }}"  maxlength="255">
                @error('apartment')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="city" class="col-form-label text-capitalize">{{ __('app.city') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
                <input id="city" name="city" type="text" class="form-control validate @error('city') is-invalid @enderror" value="{{ old('city') }}"  maxlength="255">
                @error('city')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="country_id">{{ __('app.Country') }}</label>
            <select id="country_id" name="country_id"
                    class="custom-select @error('country_id') is-invalid @enderror" required>
                <option>{{ __('app.select_country') }}</option>
                @foreach($countries as $country)
                    <option
                        value="{{ $country->id }}" {{ $country->id == old('country_id') ? 'selected' : '' }}>{{ $country->name }}</option>
                @endforeach
            </select>
            @error('country_id')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group col-6">
            <label for="ps" class="col-form-label text-capitalize">{{ __('app.ps') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelopes-bulk"></i></span>
                </div>
                <input id="ps" name="ps" type="text" class="form-control validate @error('ps') is-invalid @enderror" value="{{ old('ps') }}"  maxlength="255">
                @error('ps')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Место проживания в данный момент</legend>
    <div class="form-row">
    <div class="form-group col-6">
        <label for="actual_street" class="col-form-label text-capitalize">{{ __('app.street') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-street-view"></i></span>
            </div>
            <input id="actual_street" name="actual_street" type="text" class="form-control validate @error('actual_street') is-invalid @enderror" value="{{ old('actual_street') }}"  maxlength="255">
            @error('actual_street')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group col-6">
        <label for="actual_house" class="col-form-label text-capitalize">{{ __('app.house') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
            </div>
            <input id="actual_house" name="actual_house" type="text" class="form-control validate @error('actual_house') is-invalid @enderror" value="{{ old('actual_house') }}"  maxlength="255">
            @error('actual_house')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group col-6">
        <label for="actual_apartment" class="col-form-label text-capitalize">Номер квартиры</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-city"></i></span>
            </div>
            <input id="actual_apartment" name="actual_apartment" type="text" class="form-control validate @error('actual_apartment') is-invalid @enderror" value="{{ old('actual_apartment') }}"  maxlength="255">
            @error('actual_apartment')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group col-6">
        <label for="actual_city" class="col-form-label text-capitalize">{{ __('app.city') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-city"></i></span>
            </div>
            <input id="actual_city" name="actual_city" type="text" class="form-control validate @error('actual_city') is-invalid @enderror" value="{{ old('actual_city') }}"  maxlength="255">
            @error('actual_city')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group col-6">
        <label for="actual_country_id">{{ __('app.Country') }}</label>
        <select id="actual_country_id" name="actual_country_id"
                class="custom-select @error('actual_country_id') is-invalid @enderror" required>
            <option>{{ __('app.select_country') }}</option>
            @foreach($countries as $country)
                <option
                    value="{{ $country->id }}" {{ $country->id == old('actual_country_id') ? 'selected' : '' }}>{{ $country->name }}</option>
            @endforeach
        </select>
        @error('actual_country_id')
        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group col-6">
        <label for="actual_ps" class="col-form-label text-capitalize">{{ __('app.ps') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelopes-bulk"></i></span>
            </div>
            <input id="actual_ps" name="actual_ps" type="text" class="form-control validate @error('actual_ps') is-invalid @enderror" value="{{ old('actual_ps') }}"  maxlength="255">
            @error('actual_ps')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    </div>
</fieldset>
<fieldset>
    <legend>Паспортные данные</legend>
    <div class="form-row">
        <div class="form-group col-6">
            <label for="citizenship" class="col-form-label text-capitalize">{{ __('app.citizenship') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-passport"></i></span>
                </div>
                <input id="citizenship" name="citizenship" type="text" class="form-control validate @error('citizenship') is-invalid @enderror" value="{{ old('citizenship') }}"  maxlength="255">
                @error('citizenship')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="nationality" class="col-form-label text-capitalize">Национальность</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-passport"></i></span>
                </div>
                <input id="nationality" name="nationality" type="text" class="form-control validate @error('nationality') is-invalid @enderror" value="{{ old('nationality') }}"  maxlength="255">
                @error('nationality')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="passport" class="col-form-label text-capitalize">Номер паспорта</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-passport"></i></span>
                </div>
                <input id="passport" name="passport" type="text" class="form-control validate @error('passport') is-invalid @enderror" value="{{ old('passport') }}"  maxlength="255">
                @error('passport')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="passport_issue_place" class="col-form-label text-capitalize">Место выдачи паспорта</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-passport"></i></span>
                </div>
                <input id="passport_issue_place" name="passport_issue_place" type="text" class="form-control validate @error('passport_issue_place') is-invalid @enderror" value="{{ old('passport_issue_place') }}"  maxlength="255">
                @error('passport_issue_place')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="passport-expiration-date" class="text-capitalize">Дата окончания паспорта</label>
            <div class="input-group date" id="passport-expiration-date" data-target-input="nearest">
                <div class="input-group-append" data-target="#passport-expiration-date" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input type="text" class="form-control datetimepicker-input" data-target="#passport-expiration-date" name="passport_expiration_date" value="{{ old('passport_expiration_date') }}">
            </div>
            @error('passport_expiration_date')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Среднее образование</legend>
    <div class="form-row">
        <div class="form-group col-6">
            <label for="school_name" class="col-form-label text-capitalize">Название школы</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-passport"></i></span>
                </div>
                <input id="school_name" name="school_name" type="text" class="form-control validate @error('school_name') is-invalid @enderror" value="{{ old('school_name') }}"  maxlength="255">
                @error('school_name')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="school_start_year" class="col-form-label text-capitalize">Год начала обучения в школе</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-passport"></i></span>
                </div>
                <input id="school_start_year" name="school_start_year" type="number" class="form-control validate @error('school_start_year') is-invalid @enderror" value="{{ old('school_start_year') }}"  maxlength="4">
                @error('school_start_year')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="form-group col-6">
            <label for="school_finish_year" class="col-form-label text-capitalize">Год завершения обучения в школе</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-passport"></i></span>
                </div>
                <input id="school_finish_year" name="school_finish_year" type="number" class="form-control validate @error('school_finish_year') is-invalid @enderror" value="{{ old('school_finish_year') }}"  maxlength="4">
                @error('school_finish_year')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    </div>
</fieldset>
    @if(count($courses))
        <div class="form-group col-6">
            <label for="course_id" class="text-capitalize">{{ __('app.Course') }}</label>
            <select id="course_id" name="course_id"
                    class="custom-select @error('course_id') is-invalid @enderror" required>
                <option>{{ __('app.select_course') }}</option>
                @foreach($courses as $course)
                    <option
                        value="{{ $course->id }}" {{ $course->id == old('course_id') ? 'selected' : '' }}>{{ $course->name }}</option>
                @endforeach
            </select>
            @error('course_id')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    @endif
</div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('app.Save') }}</button>
    </div>
</form>
@endsection
@section('js')
    <script>
        new tempusDominus.TempusDominus(document.getElementById('date-of-birth'), {
            //    localization: ru
            defaultDate: '{{ date('Y') - 16 }}',
            display: {
                viewMode: 'years',
                components: {
                    decades: true,
                    year: true,
                    month: true,
                    date: true,
                    hours: false,
                    minutes: false,
                    seconds: false,
                }
            }
        });
        new tempusDominus.TempusDominus(document.getElementById('passport-expiration-date'), {
            //    localization: ru
            //defaultDate: '{{ date('Y') - 16 }}',
            display: {
                viewMode: 'years',
                components: {
                    decades: true,
                    year: true,
                    month: true,
                    date: true,
                    hours: false,
                    minutes: false,
                    seconds: false,
                }
            }
        });
    </script>
@endsection

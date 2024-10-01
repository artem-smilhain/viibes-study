@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-4 mb-2">
        <h4 class="text-capitalize">Добавить университет</h4>
    </div>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.universities.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            {{--<div class="input-field col-12">
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('app.name') }}</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">{{ __('app.name_in_slovak') }}</label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                           value="{{ old('name_sk') }}" required>
                    @error('name_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="abbreviation" class="form-label text-capitalize">{{ __('app.abbreviation') }}</label>
                    <input id="abbreviation" name="abbreviation" class="form-control @error('abbreviation') is-invalid @enderror"
                           value="{{ old('abbreviation') }}" required>
                    @error('abbreviation')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="abbreviation_sk" class="form-label text-capitalize">{{ __('app.abbreviation_in_slovak') }}</label>
                    <input id="abbreviation_sk" name="abbreviation_sk" class="form-control @error('abbreviation_sk') is-invalid @enderror"
                           value="{{ old('abbreviation_sk') }}" required>
                    @error('abbreviation_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-12">
                <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="address" class="form-label text-capitalize">{{ __('app.address') }}</label>
                    <input id="address" name="address" class="form-control @error('address') is-invalid @enderror"
                           value="{{ old('address') }}" required>
                    @error('address')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="address_sk" class="form-label text-capitalize">{{ __('app.address_in_slovak') }}</label>
                    <input id="address_sk" name="address_sk" class="form-control @error('address_sk') is-invalid @enderror"
                           value="{{ old('address_sk') }}" required>
                    @error('address_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="founding_year" class="form-label text-capitalize">{{ __('app.founding_year') }}</label>
                    <input id="founding_year" name="founding_year" type="number" class="form-control @error('founding_year') is-invalid @enderror"
                           value="{{ old('founding_year') }}" required>
                    @error('founding_year')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="site_url" class="form-label text-capitalize">{{ __('app.site_url') }}</label>
                    <input id="site_url" name="site_url" class="form-control @error('site_url') is-invalid @enderror"
                           value="{{ old('site_url') }}" required>
                    @error('site_url')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="number_of_students" class="form-label text-capitalize">{{ __('app.number_of_students') }}</label>
                    <input id="number_of_students" name="number_of_students" type="number" class="form-control @error('number_of_students') is-invalid @enderror"
                           value="{{ old('number_of_students') }}" required>
                    @error('number_of_students')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="google_map_src" class="form-label text-capitalize">{{ __('app.google_map_src') }}</label>
                    <input id="google_map_src" name="google_map_src" class="form-control @error('google_map_src') is-invalid @enderror"
                           value="{{ old('google_maps_src') }}" required>
                    @error('google_map_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="education_cost_en" class="form-label text-capitalize">{{ __('app.education_cost_en') }}</label>
                    <input id="education_cost_en" name="education_cost_en" class="form-control @error('education_cost_en') is-invalid @enderror"
                           value="{{ old('education_cost_en') }}" required>
                    @error('education_cost_en')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="scholarships" class="form-label text-capitalize">{{ __('app.scholarships') }}</label>
                    <input id="scholarships" name="scholarships" class="form-control @error('scholarships') is-invalid @enderror"
                           value="{{ old('scholarships') }}" required>
                    @error('scholarships')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="row_weight" class="form-label text-capitalize">{{ __('app.row_weight') }}</label>
                    <input id="row_weight" name="row_weight" type="number" class="form-control @error('row_weight') is-invalid @enderror"
                           value="{{ old('row_weight') }}" required>
                    @error('row_weight')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="city_id" class="text-capitalize">{{ __('app.city') }}</label>
                <select id="city_id" name="city_id"
                        class="custom-select @error('city_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_city') }}</option>
                    @foreach($cities as $city)
                        <option
                            value="{{ $city->id }}" {{ $city->id == old('city_id') ? 'selected' : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
                @error('city_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('app.groups') }}</label>
                <table class="table table-striped table-bordered table-sm">
                    <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('app.group') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $group)
                        <tr><td><input type="checkbox" name="group[{{ $group->id }}]" value="1" @if (old('group.' . $group->id )) checked @endif></td><td>{{ $group->name }}</td></tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="form-group col-6">
                <h4>{{ __('app.logo') }}</h4>
                <div class="btn btn-primary">
                    <input type="file" name="logo_src" id="logo_src">
                </div>
                @error('logo_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <h4>{{ __('app.thumbnail') }}</h4>
                <div class="btn btn-primary">
                    <input type="file" name="thumbnail_src" id="thumbnail_src">
                </div>
                @error('thumbnail_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>--}}



            <div class="input-field col-4">
                <div class="form-group">
                    <label for="name" class="col-form-label">Название университета: </label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required>
                    @error('name')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">Название университета (SK): </label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                           value="{{ old('name_sk') }}" required>
                    @error('name_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="abbreviation" class="col-form-label">Аббревиатура: </label>
                    <input id="abbreviation" name="abbreviation" class="form-control @error('abbreviation') is-invalid @enderror"
                           value="{{ old('abbreviation') }}" required>
                    @error('abbreviation')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="abbreviation_sk" class="col-form-label">Аббревиатура (SK): </label>
                    <input id="abbreviation_sk" name="abbreviation_sk" class="form-control @error('abbreviation_sk') is-invalid @enderror"
                           value="{{ old('abbreviation_sk') }}" required>
                    @error('abbreviation_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <hr>
                <div class="form-group">
                    <label for="meta_title" class="col-form-label">Meta Title: </label>
                    <input id="meta_title" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                           value="{{ old('meta_title') }}" required>
                    @error('meta_title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group mb-4">
                    <label for="meta_description" class="col-form-label">Meta Description: </label>
                    <input id="meta_description" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                           value="{{ old('meta_description') }}" required>
                    @error('meta_description')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <hr>
            </div>
            <div class="form-group col-5">
                <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                <textarea style="min-height: 380px;" class="form-control ckeditor-field @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                @error('description')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-7">
                <div class="container">
                    <div class="row">
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="founding_year" class="form-label text-capitalize">Год: </label>
                                <input id="founding_year" name="founding_year" type="number" class="form-control @error('founding_year') is-invalid @enderror"
                                       value="{{ old('founding_year') }}" required>
                                @error('founding_year')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="site_url" class="form-label text-capitalize">Сайт: </label>
                                <input id="site_url" name="site_url" class="form-control @error('site_url') is-invalid @enderror"
                                       value="{{ old('site_url') }}" required>
                                @error('site_url')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="number_of_students" class="form-label text-capitalize">Студентов: </label>
                                <input id="number_of_students" name="number_of_students" type="number" class="form-control @error('number_of_students') is-invalid @enderror"
                                       value="{{ old('number_of_students') }}" required>
                                @error('number_of_students')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="education_cost_en" class="form-label text-capitalize">Стоимость обучения (EN): </label>
                                <input id="education_cost_en" name="education_cost_en" class="form-control @error('education_cost_en') is-invalid @enderror"
                                       value="{{ old('education_cost_en') }}" required>
                                @error('education_cost_en')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="scholarships" class="form-label text-capitalize">Стипендии: </label>
                                <input id="scholarships" name="scholarships" class="form-control @error('scholarships') is-invalid @enderror"
                                       value="{{ old('scholarships') }}" required>
                                @error('scholarships')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="city_id" class="text-capitalize">Город: </label>
                            <select id="city_id" name="city_id"
                                    class="custom-select @error('city_id') is-invalid @enderror" required>
                                <option>{{ __('app.select_city') }}</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="address" class="form-label text-capitalize">Адрес: </label>
                            <input id="address" name="address" class="form-control @error('address') is-invalid @enderror"
                                   value="{{ old('address') }}" required>
                            @error('address')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="address_sk" class="form-label text-capitalize">Адрес (SK): </label>
                            <input id="address_sk" name="address_sk" class="form-control @error('address_sk') is-invalid @enderror"
                                   value="{{ old('address_sk') }}" required>
                            @error('address_sk')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="google_map_src" class="form-label text-capitalize">Google Map: </label>
                                <input id="google_map_src" name="google_map_src" class="form-control @error('google_map_src') is-invalid @enderror"
                                       value="{{ old('google_maps_src') }}">
                                @error('google_map_src')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-field col-6">
                            <div class="form-group">
                                <label for="row_weight" class="form-label text-capitalize">Row weight: </label>
                                <input id="row_weight" name="row_weight" type="number" class="form-control @error('row_weight') is-invalid @enderror"
                                       value="{{ old('row_weight') }}" required>
                                @error('row_weight')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="form-group col-12">
                <label for="faculties_description" class="form-label text-capitalize">Описание факультетов: </label>
                <textarea class="form-control ckeditor-field @error('faculties_description') is-invalid @enderror" id="faculties_description" rows="3" name="faculties_description">{{ old('faculties_description') }}</textarea>
                @error('faculties_description')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>--}}
            <div class="col-12 pb-3">
                <hr>
            </div>
            <div class="form-group col-8">
                <label>Группы универа: </label>
                <table class="table table-striped table-bordered table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('app.group') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $group)
                        <tr><td><input type="checkbox" name="group[{{ $group->id }}]" value="1" @if (old('group.' . $group->id )) checked @endif></td><td>{{ $group->name }}</td></tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="form-group col-4">
                <label>Лого университета: </label> <br>
                <div class="btn btn-primary">
                    <input type="file" name="logo_src" id="logo_src">
                </div> <br>
                @error('logo_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
                <label class="mt-2">Главная картинка: </label> <br>
                <div class="btn btn-primary">
                    <input type="file" name="thumbnail_src" id="thumbnail_src">
                </div>
                @error('thumbnail_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="col-12 pb-3">
                <hr>
            </div>
            <!-- CONTENT --------------------------------------------- -->
            <div class="input-field col-7">
                <div class="form-group">
                    <label for="content_text" class="col-form-label">Текст к университету:</label>
                    <textarea name="content_text" id="content_text" class="form-control" cols="30" rows="15">
                                {{ old('content_text') }}
                            </textarea>
                    @error('content_text')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <script> CKEDITOR.replace('content_text'); </script>
            </div>
            <div class="col-5">
                <div class="input-field">
                    <div class="form-group">
                        <label for="content_heading" class="col-form-label">Заголовок к тексту об университете: </label>
                        <input id="content_heading" name="content_heading" class="form-control @error('content_heading') is-invalid @enderror"
                               value="{{ old('content_heading') }}" required>
                        @error('content_heading')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="content_img_src" class="col-form-label">Выбрать картинку к тексту: </label>
                    <div class="btn btn-primary">
                        <input type="file" name="content_img_src" id="content_img_src">
                    </div>
                    @error('content_img_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <!-- // CONTENT --------------------------------------------- -->
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться назад (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Обновить университет</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

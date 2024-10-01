@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Добавить новый отзыв</h4>
    </div>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.reviews.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-8">
                <div class="form-group">
                    <label for="client_name" class="col-form-label">{{ __('app.client_name') }}</label>
                    <input id="client_name" name="client_name" class="form-control @error('client_name') is-invalid @enderror"
                           value="{{ old('client_name') }}" required>
                    @error('client_name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-4">
                <label for="is_shown" class="col-form-label">Блок с отзывами?</label>
                <select id="is_shown" name="is_shown"
                        class="custom-select @error('is_shown') is-invalid @enderror" required>
                    <option>Выбрать</option>
                    <option value="0">Не отображать ❌</option>
                    <option value="1">Отображать ✅</option>
                </select>
                @error('is_interview')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <h4>{{ __('app.avatar') }}</h4>
                <div class="btn btn-primary">
                    <input type="file" name="avatar_src" id="avatar_src" required>
                </div>
                @error('avatar_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <h4>{{ __('app.video') }}</h4>
                <div class="btn btn-primary">
                    <input type="file" name="video_src" id="video_src">
                </div>
                @error('video_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <h4>{{ __('app.preview') }}</h4>
                <div class="btn btn-primary">
                    <input type="file" name="preview_src" id="preview_src">
                </div>
                @error('preview_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <h4>{{ __('app.image') }}</h4>
                <div class="btn btn-primary">
                    <input type="file" name="image_src" id="image_src">
                </div>
                @error('image_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="image_place_name" class="col-form-label">{{ __('app.image_place_name') }}</label>
                    <input id="image_place_name" name="image_place_name" class="form-control @error('image_place_name') is-invalid @enderror"
                           value="{{ old('image_place_name') }}">
                    @error('client_name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="instagram_url" class="col-form-label">{{ __('app.instagram_url') }}</label>
                    <input id="instagram_url" name="instagram_url" class="form-control @error('instagram_url') is-invalid @enderror"
                           value="{{ old('instagram_url') }}">
                    @error('instagram_url')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="is_interview">{{ __('app.interview') }}</label>
                <select id="is_interview" name="is_interview"
                        class="custom-select @error('is_interview') is-invalid @enderror" required>
                    <option>{{ __('app.select_type') }}</option>
                        <option value="0" {{ old('is_interview') == 0 ? 'selected' : '' }}>Нет</option>
                        <option value="1" {{ old('is_interview') == 1 ? 'selected' : '' }}>Да</option>
                </select>
                @error('is_interview')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="content" class="col-form-label">{{ __('app.content') }}</label>
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror">
                        {{ old('content') }}
                    </textarea>
                    @error('content')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="university_id">{{ __('app.university') }}</label>
                <select id="university_id" name="university_id"
                        class="custom-select @error('university_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_university') }}</option>
                    @foreach($universities as $university)
                        <option
                            value="{{ $university->id }}" {{ $university->id == old('university_id') ? 'selected' : '' }}>{{ $university->name }}</option>
                    @endforeach
                </select>
                @error('university_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="row_weight" class="col-form-label">{{ __('app.row_weight') }}</label>
                    <input id="row_weight" type="number" name="row_weight" class="form-control @error('row_weight') is-invalid @enderror"
                           value="{{ old('row_weight') }}">
                    @error('row_weight')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Сохранить отзыв</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

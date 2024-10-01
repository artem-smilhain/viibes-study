@extends('admin.layouts.app')
@section('content')
    <h4 class="mt-4">Редактировать отзыв ({{ old('name', $review->client_name) }})</h4>
    <h6 class="mb-4">
        <a href="{{ route('admin.reviews.index') }}" class="text-capitalize">Отзывы</a> /
        <a href="{{ route('admin.reviews.show', $review) }}">
            {{ old('client_name', $review->client_name) }}
        </a> / <span class="text-success">Редактировать</span>
    </h6>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <form method="post" action="{{ route('admin.reviews.update', $review) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('patch') }}
        <div class="row">
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="client_name" class="col-form-label">Имя клиента: </label>
                    <input id="client_name" name="client_name" class="form-control @error('client_name') is-invalid @enderror"
                           value="{{ old('client_name', $review->client_name) }}" required>
                    @error('client_name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="university_id" class="col-form-label">Университет: </label>
                <select id="university_id" name="university_id"
                        class="custom-select @error('university_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_university') }}</option>
                    @foreach($universities as $university)
                        <option
                            value="{{ $university->id }}" {{ $university->id == old('university_id', $review->university_id) ? 'selected' : '' }}>{{ $university->name }}</option>
                    @endforeach
                </select>
                @error('university_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="row_weight" class="col-form-label">Row weight: </label>
                    <input id="row_weight" type="number" name="row_weight" class="form-control @error('row_weight') is-invalid @enderror"
                           value="{{ old('row_weight', $review->row_weight) }}">
                    @error('row_weight')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-2">
                <label for="is_shown" class="col-form-label">Блок с отзывами?</label>
                <select id="is_shown" name="is_shown"
                        class="custom-select @error('is_shown') is-invalid @enderror" required>
                    <option>Выбрать</option>
                    <option value="0" {{ old('is_shown', $review->is_shown) == 0 ? 'selected' : '' }}>Не отображать ❌</option>
                    <option value="1" {{ old('is_shown', $review->is_shown) == 1 ? 'selected' : '' }}>Отображать ✅</option>
                </select>
                @error('is_interview')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="instagram_url" class="col-form-label">Ссылка на инстаграм: </label>
                    <input id="instagram_url" name="instagram_url" class="form-control @error('instagram_url') is-invalid @enderror"
                           value="{{ old('instagram_url', $review->instagram_url) }}">
                    @error('instagram_url')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12 pb-3">
                <hr>
            </div>
            <div class="form-group col-12">
                <h4>Аватарка: </h4>
                @if($review->avatar_src)
                    <img src="/storage/{{ $review->avatar_src }}" class="img-fluid img-thumbnail me-2">
                @endif
                <div class="btn btn-primary">
                    <input type="file" name="avatar_src" id="avatar_src">
                </div>
                @error('avatar_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="col-12 pb-3">
                <hr>
            </div>
            <div class="col-12">
                <h3>Текстовый отзыв: </h3>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="content" class="col-form-label">{{ __('app.content') }}</label>
                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror">
                                {{ old('content', $review->content) }}
                            </textarea>
                    @error('content')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12 pb-3">
                <hr>
            </div>
            <div class="col-12">
                <h3>Фото отзыв: </h3>
            </div>
            <div class="form-group col-4">
                <div class="container m-0 p-0">
                    <div class="row">
                        <div class="form-group col-12">
                            <h4>{{ __('app.image') }}</h4>
                            <div class="btn btn-primary">
                                <input type="file" name="image_src" id="image_src">
                            </div>
                            @error('image_src')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="image_place_name" class="col-form-label">{{ __('app.image_place_name') }}</label>
                            <input id="image_place_name" name="image_place_name" class="form-control @error('image_place_name') is-invalid @enderror"
                                   value="{{ old('image_place_name', $review->image_place_name) }}">
                            @error('client_name')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    @if($review->image_src)
                        <img src="/storage/{{ $review->image_src }}" class="img-fluid img-thumbnail">
                    @endif
                </div>
            </div>
            <div class="col-12 pb-3">
                <hr>
            </div>
            <div class="col-12">
                <h3>Видео отзыв: </h3>
            </div>
            <div class="form-group col-4">
                <h4>Видео: </h4>
                @if($review->video_src)
                    <video src="/storage/{{ $review->video_src }}" style="width: 123px;" controls></video>
                @endif <br>
                <div class="btn btn-primary">
                    <input type="file" name="video_src" id="video_src">
                </div>
                @error('video_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <h4>Превью: </h4>
                @if($review->preview_src)
                    <video src="/storage/{{ $review->preview_src }}" style="width: 123px;" controls></video>
                @endif <br>
                <div class="btn btn-primary">
                    <input type="file" name="preview_src" id="preview_src">
                </div>
                @error('preview_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="is_interview">Это интервью?</label>
                <select id="is_interview" name="is_interview"
                        class="custom-select @error('is_interview') is-invalid @enderror" required>
                    <option>{{ __('app.select_type') }}</option>
                    <option value="0" {{ old('is_interview', $review->is_interview) == 0 ? 'selected' : '' }}>Нет</option>
                    <option value="1" {{ old('is_interview', $review->is_interview) == 1 ? 'selected' : '' }}>Да</option>
                </select>
                @error('is_interview')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="col-12 pb-3">
                <hr>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться обратно (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Обновить отзыв</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

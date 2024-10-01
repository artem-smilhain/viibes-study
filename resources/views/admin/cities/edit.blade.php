@extends('admin.layouts.app')
@section('content')
    <h4 class="mt-4">Редактировать город ({{ old('name', $city->name) }})</h4>
    <h6 class="mb-4">
        <a href="{{ route('admin.cities.index') }}" class="text-capitalize">Города Словакии</a> /
        <a href="{{ route('admin.cities.show', $city) }}">
            {{ old('name', $city->name) }}
        </a> / <span class="text-success">Редактировать</span>
    </h6>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <form method="post" action="{{ route('admin.cities.update', $city) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('patch') }}
        <div class="row">
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="name" class="col-form-label">Название города: </label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $city->name) }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">Название города (SK): </label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                           value="{{ old('name_sk', $city->name_sk) }}" required>
                    @error('name_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-2">
                <label for="country_id" class="col-form-label">Страна: </label>
                <select id="country_id" name="country_id"
                        class="custom-select @error('country_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_country') }}</option>
                    @foreach($countries as $country)
                        <option
                            value="{{ $country->id }}" {{ $country->id == old('country_id', $city->country_id) ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="row_weight" class="col-form-label">Row weight: </label>
                    <input id="row_weight" name="row_weight" type="number" class="form-control @error('row_weight') is-invalid @enderror"
                           value="{{ old('row_weight', $city->row_weight) }}">
                    @error('row_weight')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-4">
                <label for="post_id" class="col-form-label">Пост о городе: </label>
                <select id="post_id" name="post_id"
                        class="custom-select @error('post_id') is-invalid @enderror">
                    <option value="">{{ __('app.select_post') }}</option>
                    @foreach($posts as $post)
                        <option
                            value="{{ $post->id }}" {{ $post->id == old('post_id', $city->post_id) ? 'selected' : '' }}>{{ $post->title }}</option>
                    @endforeach
                </select>
                @error('post_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-12">
                <hr>
                <div class="form-group">
                    <label for="meta_title" class="col-form-label">Meta Title: </label>
                    <input id="meta_title" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                           value="{{ old('meta_title', $city->meta_title) }}" required>
                    @error('meta_title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group mb-4">
                    <label for="meta_description" class="col-form-label">Meta Description: </label>
                    <input id="meta_description" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                           value="{{ old('meta_description', $city->meta_description) }}" required>
                    @error('meta_description')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <hr>
            </div>
            <!-- CONTENT --------------------------------------------- -->
            <div class="input-field col-7">
                <div class="form-group">
                    <label for="content_text" class="col-form-label">Текст к городу (страница универов):</label>
                    <textarea name="content_text" id="content_text" class="form-control" cols="30" rows="15">
                                {{ old('content_text', $city->content_text) }}
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
                        <label for="content_heading" class="col-form-label">Заголовок к тексту о городе: </label>
                        <input id="content_heading" name="content_heading" class="form-control @error('content_heading') is-invalid @enderror"
                               value="{{ old('content_heading', $city->content_heading) }}" required>
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
                    @if(!empty($city->content_img_src))
                        <img src="{{ env('APP_URL') }}storage/{{ $city->content_img_src }}" class="w-100 mt-2 rounded-4" alt="">
                    @endif
                    @error('content_img_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <!-- // CONTENT --------------------------------------------- -->
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться назад (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Обновить город</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

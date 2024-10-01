@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-4 mb-2">
        <h4 class="text-capitalize">Создать группу университетов</h4>
    </div>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.groups.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="name" class="col-form-label">Название группы: </label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">Название группы (SK): </label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                           value="{{ old('name_sk') }}" required>
                    @error('name_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="element_color" class="col-form-label">Цвет группы: </label>
                    <input id="element_color" name="element_color" class="form-control @error('element_color') is-invalid @enderror"
                           value="{{ old('element_color') }}" required>
                    @error('element_color')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="row_weight" class="col-form-label">Row weight: </label>
                    <input id="row_weight" name="row_weight" type="number" class="form-control @error('row_weight') is-invalid @enderror"
                           value="{{ old('row_weight') }}" required>
                    @error('row_weight')
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
            <!-- CONTENT --------------------------------------------- -->
            <div class="input-field col-7">
                <div class="form-group">
                    <label for="content_text" class="col-form-label">Текст к группе:</label>
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
                        <label for="content_heading" class="col-form-label">Заголовок к тексту о группе: </label>
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
                    <button type="submit" class="btn btn-success"><span>Добавить группу</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

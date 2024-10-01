@extends('admin.layouts.app')
@section('content')
    <h4 class="mt-4">Редактировать статус ({{ old('title', $status->title) }})</h4>
    <h6 class="mb-4">
        <a href="{{ route('admin.statuses.index') }}" class="text-capitalize">Статусы</a> /
        <a href="{{ route('admin.statuses.show', $status) }}">
            {{ old('title', $status->title) }}
        </a> / <span class="text-success">Редактировать</span>
    </h6>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <form method="post" action="{{ route('admin.statuses.update', $status) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('patch') }}
        <div class="row">
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="title" class="col-form-label">Название статуса: </label>
                    <input id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $status->title) }}" required>
                    @error('title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="description" class="col-form-label">Описание статуса: </label>
                    <input id="descrption" name="description" class="form-control @error('description') is-invalid @enderror"
                           value="{{ old('description', $status->description) }}" required>
                    @error('description')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="element_color" class="col-form-label">Цвет направления: </label>
                    <input id="element_color" name="element_color" class="form-control @error('element_color') is-invalid @enderror"
                           value="{{ old('element_color', $status->element_color) }}" required style="color: {{ old('element_color', $status->element_color) }}">
                    @error('element_color')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Обновить и сохранить статус</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

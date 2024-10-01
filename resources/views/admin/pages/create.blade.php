@extends('admin.layouts.app')
@section('content')
    <h4 class="mt-4">Создать новый текст к странице</h4>
    <h6 class="mb-4">
        <a href="{{ route('admin.pages.index') }}" class="text-capitalize">Страницы</a> /
        <span class="text-success">Создать</span>
    </h6>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-8">
                <div class="form-group">
                    <label for="content_heading" class="col-form-label">Заголовок к тексту о направлении: </label>
                    <input id="content_heading" name="content_heading" class="form-control @error('content_heading') is-invalid @enderror" required>
                    @error('content_heading')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="page" class="col-form-label">Страница (для контроллера): </label>
                    <input id="page" name="page" class="form-control text-danger @error('page') is-invalid @enderror" required>
                    @error('page')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-7">
                <div class="form-group">
                    <label for="content_text" class="col-form-label">Текст к направлению:</label>
                    <textarea name="content_text" id="content_text" class="form-control" cols="30" rows="15"></textarea>
                    @error('content_text')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <script> CKEDITOR.replace('content_text'); </script>
            </div>
            <div class="form-group col-5">
                <label for="content_img_src" class="col-form-label">Выбрать картинку к тексту: </label>
                <div class="btn btn-primary">
                    <input type="file" name="content_img_src" id="content_img_src">
                </div>
                @error('content_img_src')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <!-- // CONTENT --------------------------------------------- -->
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Сохранить текст</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

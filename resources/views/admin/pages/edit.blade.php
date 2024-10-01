@extends('admin.layouts.app')
@section('content')
    <h4 class="mt-4">Редактировать текст к странице ({{ old('page', $page->page) }})</h4>
    <h6 class="mb-4">
        <a href="{{ route('admin.pages.index') }}" class="text-capitalize">Страницы</a> /
        <a href="#" class="text-capitalize">{{ old('page', $page->page) }}</a> /
        <span class="text-success">Редактировать</span>
    </h6>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <form method="post" action="{{ route('admin.pages.update', $page) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('patch') }}
        <div class="row">
            <div class="input-field col-8">
                <div class="form-group">
                    <label for="content_heading" class="col-form-label">Заголовок к тексту о направлении: </label>
                    <input id="content_heading" value="{{ old('content_heading', $page->content_heading) }}" name="content_heading" class="form-control @error('content_heading') is-invalid @enderror" required>
                    @error('content_heading')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-4">
                <div class="form-group">
                    <label for="page" class="col-form-label">Страница (для контроллера): </label>
                    <input id="page" disabled value="{{ old('page', $page->page) }}" name="page" class="form-control text-danger @error('page') is-invalid @enderror" required>
                    @error('page')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-7">
                <div class="form-group">
                    <label for="content_text" class="col-form-label">Текст к направлению:</label>
                    <textarea name="content_text" id="content_text" class="form-control" cols="30" rows="15">
                        {{ old('content_text', $page->content_text) }}
                    </textarea>
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
                @if(!empty($page->content_img_src))
                    <img src="{{ env('APP_URL') }}storage/{{ $page->content_img_src }}" class="w-100 mt-2 rounded-4" alt="">
                @endif
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

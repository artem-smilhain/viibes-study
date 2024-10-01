@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-4 mb-2">
        <h4 class="text-capitalize">Добавить новую публикацию</h4>
    </div>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <b>Kurwa!</b> {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-5">
                <div class="form-group">
                    <label for="title" class="col-form-label">Заголовок</label>
                    <input id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                    @error('title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-3">
                <label for="category_id" class="col-form-label">Категория</label>
                <select id="category_id" name="category_id"
                        class="custom-select @error('category_id') is-invalid @enderror" required>
                    <option>Выбрать</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-2">
                <label for="status" class="col-form-label">Статус</label>
                <select id="status" name="status" class="custom-select @error('status') is-invalid @enderror" required>
                    <option value="0" class="text-danger">Черновик ❌</option>
                    <option value="1" class="text-success">Опубликовано ✅</option>
                </select>
                @error('category_id')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-2">
                <label for="is_pinned" class="col-form-label">Is pinned?</label>
                <select id="is_pinned" name="is_pinned" class="custom-select @error('status') is-invalid @enderror">
                    <option value="0">Не закреплен</option>
                    <option value="1" class="text-success">Закреплен 📌</option>
                </select>
                @error('is_pinned')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="description" class="col-form-label">Короткое описание (max: 170 символов)</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"
                           name="description" oninput="get_ch_count();" id="short_description_input" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="short_description_input_count" style="font-weight: bold;">0</span>
                    </div>
                </div>
                @error('description')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
                <script>
                    function get_ch_count(){
                        const short_description_input = document.getElementById('short_description_input');
                        const short_description_input_count = document.getElementById('short_description_input_count');
                        const ch = short_description_input.value.length;
                        if (ch > 170){
                            short_description_input_count.classList.add('text-danger');
                        } else {
                            short_description_input_count.classList.add('text-success');
                        }
                        short_description_input_count.innerText = ch;
                    }
                </script>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-8 p-0">
                        <div class="input-field col-12">
                            <div class="form-group">
                                <label for="content" class="col-form-label">Текст публикации</label>
                                <textarea id="content" name="content" class="form-control ckeditor-field @error('content') is-invalid @enderror" required>
                                    {{ old('content') }}
                                </textarea>
                                @error('content')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                                <script> CKEDITOR.replace('content'); </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group col-12 pt-2">
                            <h4>Главная картинка: </h4>
                            <div class="btn btn-primary mt-2">
                                <input type="file" name="thumbnail_src" id="thumbnail_src">
                            </div>
                            @error('thumbnail_src')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться назад (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Сохранить публикацию</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

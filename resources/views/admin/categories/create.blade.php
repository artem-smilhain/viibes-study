@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-4 mb-2">
        <h4 class="text-capitalize">Создать категорию публикаций</h4>
    </div>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('app.name') }}</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-2">
                <div class="form-group">
                    <label for="element_color" class="col-form-label">{{ __('app.element_color') }}</label>
                    <input id="element_color" name="element_color" class="form-control @error('element_color') is-invalid @enderror"
                           value="{{ old('element_color') }}" required>
                    @error('element_color')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
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
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Вернуться назад (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Сохранить категорию</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

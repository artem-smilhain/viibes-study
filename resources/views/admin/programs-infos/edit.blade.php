@extends('admin.layouts.app')
@section('content')

    <h4 class="mt-4">Редактировать документ ({{ $program_info->name }}) 🔸️</h4>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="POST" action="{{ route('admin.program-info.update', $program_info)}}" enctype="multipart/form-data" class="mt-3">
        @csrf
        {{ method_field('patch') }}
        <div class="row">
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="name" class="col-form-label">НАЗВАНИЕ ДОКУМЕНТА (клиент/заявка + id) 🤟</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $program_info->name }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="program" class="col-form-label">Название специальности (RU) 🎓</label>
                    <input id="program" name="program" class="form-control @error('program') is-invalid @enderror" value="{{ $program_info->program }}">
                    @error('program')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="program_sk" class="col-form-label">Názov programu (SK) 🇸🇰</label>
                    <input id="program_sk" name="program_sk" class="form-control @error('program_sk') is-invalid @enderror" value="{{ $program_info->program_sk }}">
                    @error('program_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6 mt-2">
                <label for="university" class="text-capitalize">Университет 🏛</label>
                <select id="university" name="university" class="custom-select @error('university') is-invalid @enderror">
                    <option>Выбрать университет</option>
                    @foreach($universities as $university)
                        <option
                            value="{{ $university->name }}" {{ $university->name == $program_info->university ? 'selected' : '' }}>{{ $university->name }}</option>
                    @endforeach
                </select>
                @error('university_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="years_of_study" class="col-form-label">Длит. обучения 🕓</label>
                    <input id="years_of_study" name="years_of_study" class="form-control @error('years_of_study') is-invalid @enderror" value="{{ $program_info->years_of_study }}">
                    @error('years_of_study')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="description" class="col-form-label">Описание специальности 📝</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="15">{{ $program_info->description }}</textarea>
                    @error('description')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <script> CKEDITOR.replace('description'); </script>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="exams" class="col-form-label">Наличие экзаменов 📌</label>
                    <textarea name="exams" id="exams" class="form-control" cols="30" rows="15">{{ $program_info->exams }}</textarea>
                    @error('exams')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <script> CKEDITOR.replace('exams'); </script>
            </div>
            <div class="form-group col-4 mb-5">
                <label for="study_plan_link" class="col-form-label">Выбрать новый файл - учебный план 📁</label>
                <div class="btn btn-primary">
                    <input type="file" name="study_plan_file" id="study_plan_file">
                </div>
                @if(!empty($program_info->study_plan_file))
                    <a href="{{ env('APP_URL') }}storage/{{ $program_info->study_plan_file }}" target="_blank">Ссылка на текущий файл</a>
                @endif
                @error('study_plan_file')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input-field col-8 mb-5">
                <div class="form-group">
                    <label for="study_plan_link" class="col-form-label">Ссылка на учебный план 🔗</label>
                    <input id="study_plan_link" name="study_plan_link" class="form-control @error('study_plan_link') is-invalid @enderror" value="{{ $program_info->study_plan_link }}">
                    @error('study_plan_link')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-5 pb-5">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary mr-2">Вернуться (без сохранения)</a>
                    <button type="submit" class="btn btn-success"><span>Обновить и сохранить документ</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

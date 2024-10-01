@extends('admin.layouts.app')
@section('content')
    <h4 class="text-capitalize">{{ __('app.create_program') }}</h4>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.programs.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">{{ __('app.name_in_slovak') }}</label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                           value="{{ old('name_sk') }}" required>
                    @error('name_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('app.name_native') }}</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-6">
                <div class="form-group">
                    <label for="years_of_study" class="col-form-label">{{ __('app.years_of_study') }}</label>
                    <input id="years_of_study" name="years_of_study" class="form-control @error('years_of_study') is-invalid @enderror"
                           value="{{ old('years_of_study') }}" type="number" required>
                    @error('years_of_study')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="form-group col-6">
                <label for="is_in_combination" class="text-capitalize">{{ __('app.is_in_combination') }}</label>
                <select id="is_in_combination" name="is_in_combination"
                        class="custom-select @error('is_in_combination') is-invalid @enderror" required>
                    <option>{{ __('app.select') }}</option>
                    <option value="0" {{ 0 == old('is_in_combination') ? 'selected' : '' }}>нет</option>
                    <option value="1" {{ 1 == old('is_in_combination') ? 'selected' : '' }}>да</option>
                </select>
                @error('academic_degree_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="academic_degree_id" class="text-capitalize">{{ __('app.academic_degree') }}</label>
                <select id="academic_degree_id" name="academic_degree_id"
                        class="custom-select @error('academic_degree_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_academic_degree') }}</option>
                    @foreach($academic_degrees as $academic_degree)
                        <option
                            value="{{ $academic_degree->id }}" {{ $academic_degree->id == old('academic_degree_id') ? 'selected' : '' }}>{{ $academic_degree->degree_title }}</option>
                    @endforeach
                </select>
                @error('academic_degree_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="faculty_id" class="text-capitalize">{{ __('app.faculty') }}</label>
                <select id="faculty_id" name="faculty_id"
                        class="custom-select @error('faculty_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_faculty') }}</option>
                    @foreach($faculties as $faculty)
                        <option
                            value="{{ $faculty->id }}" {{ $faculty->id == old('faculty_id') ? 'selected' : '' }}>{{ $faculty->name }}</option>
                    @endforeach
                </select>
                @error('faculty_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="direction_id" class="text-capitalize">{{ __('app.direction') }}</label>
                <select id="direction_id" name="direction_id"
                        class="custom-select @error('direction_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_direction') }}</option>
                    @foreach($directions as $direction)
                        <option
                            value="{{ $direction->id }}" {{ $direction->id == old('direction_id') ? 'selected' : '' }}>{{ $direction->name }}</option>
                    @endforeach
                </select>
                @error('direction_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="direction_2_id" class="text-capitalize">{{ __('app.direction') }} 2</label>
                <select id="direction_2_id" name="direction_2_id"
                        class="custom-select @error('direction_2_id') is-invalid @enderror">
                    <option>{{ __('app.select_direction') }}</option>
                    @foreach($directions as $direction)
                        <option
                            value="{{ $direction->id }}" {{ $direction->id == old('direction_2_id') ? 'selected' : '' }}>{{ $direction->name }}</option>
                    @endforeach
                </select>
                @error('direction_2_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('app.Back') }}</a>
                    <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

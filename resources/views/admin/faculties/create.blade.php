@extends('admin.layouts.app')
@section('content')
    <h4 class="text-capitalize">{{ __('app.create_faculty') }}</h4>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.faculties.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col m12">
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('app.name') }}</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col m12">
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">{{ __('app.name_in_slovak') }}</label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                           value="{{ old('name_sk') }}" required>
                    @error('name_sk')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="form-group col-6">
                <label for="university_id" class="text-capitalize">{{ __('app.university') }}</label>
                <select id="university_id" name="university_id"
                        class="custom-select @error('university_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_university') }}</option>
                    @foreach($universities as $university)
                        <option
                            value="{{ $university->id }}" {{ $university->id == old('university_id') ? 'selected' : '' }}>{{ $university->name }}</option>
                    @endforeach
                </select>
                @error('university_id')
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

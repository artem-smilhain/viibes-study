@extends('admin.layouts.app')
@section('content')
    <h4>{{ __('app.create_academic_degree') }}</h4>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.academic-degrees.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="degree_title" class="col-form-label">{{ __('app.degree_title') }}</label>
                    <input id="degree_title" name="degree_title" class="form-control @error('degree_title') is-invalid @enderror"
                           value="{{ old('degree_title') }}" required>
                    @error('degree_title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="degree_abbreviation" class="col-form-label">{{ __('app.degree_abbreviation') }}</label>
                    <input id="degree_abbreviation" name="degree_abbreviation" class="form-control @error('degree_abbreviation') is-invalid @enderror"
                           value="{{ old('degree_abbreviation') }}" required>
                    @error('degree_abbreviation')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
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

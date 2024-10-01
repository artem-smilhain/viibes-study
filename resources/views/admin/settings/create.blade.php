@extends('admin.layouts.app')
@section('content')
    <h4>{{ __('app.create_setting') }}</h4>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.settings.store') }}">
        @csrf
        <div class="row">
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('app.name') }}</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" maxlength="255" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="value" class="col-form-label">{{ __('app.value') }}</label>
                    <input id="value" name="value" class="form-control @error('value') is-invalid @enderror"
                           value="{{ old('value') }}" maxlength="255">
                    @error('value')
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

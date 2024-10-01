@extends('admin.layouts.app')
@section('content')
    <h4 class="text-capitalize">{{ __('app.create_service') }}</h4>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col m12">
                <div class="form-group">
                    <label for="name_ru" class="col-form-label">{{ __('app.name_in_russian') }}</label>
                    <input id="name_ru" name="name_ru" class="form-control @error('name_ru') is-invalid @enderror"
                           value="{{ old('name_ru') }}" maxlength="255" required>
                    @error('name_ru')
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

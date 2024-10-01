@extends('admin.layouts.app')
@section('content')
    <h4>{{ __('app.create_country') }}</h4>
    <div class="row">
        <form method="post" action="{{ route('admin.countries.store') }}" enctype="multipart/form-data">
            @csrf
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
            <div class="col m12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('app.Back') }}</a>
                    <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span></button>
                </div>
            </div>

        </form>
    </div>
@endsection

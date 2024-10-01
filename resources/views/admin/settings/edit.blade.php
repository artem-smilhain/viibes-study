@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.settings.index') }}" class="text-capitalize">{{ __('app.settings') }}</a> / {{ old('name', $setting->name) }} / {{ __('app.edit') }}</h4>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('admin.settings.update', $setting) }}">
                @csrf
                {{ method_field('patch') }}
                <div class="row">
                    <div class="input-field col-12">
                        <div class="form-group">
                            <label for="name" class="col-form-label">{{ __('app.name') }}</label>
                            <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $setting->name) }}" maxlength="255" required>
                            @error('name')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-field col-12">
                        <div class="form-group">
                            <label for="value" class="col-form-label">{{ __('app.value') }}</label>
                            <input id="value" name="value" class="form-control @error('value') is-invalid @enderror"
                                   value="{{ old('value', $setting->value) }}" maxlength="255">
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
        </div>
</div>
@endsection

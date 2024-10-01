@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.services.index') }}">{{ __('app.services') }}</a> / <a href="{{ route('admin.services.show', $service) }}">{{ old('name_ru', $service->name_ru) }}</a> / {{ __('Edit') }}</h4>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('patch') }}
                <div class="row">
                    <div class="input-field col m12">
                        <div class="form-service">
                            <label for="name_ru" class="col-form-label">{{ __('app.name_in_russian') }}</label>
                            <input id="name_ru" name="name_ru" class="form-control @error('name_ru') is-invalid @enderror"
                                   value="{{ old('name_ru', $service->name_ru) }}" maxlength="255" required>
                            @error('name_ru')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-service">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('app.Back') }}</a>
                            <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span></button>
                        </div>
                    </div>
                </div>
        </div>
</div>
@endsection

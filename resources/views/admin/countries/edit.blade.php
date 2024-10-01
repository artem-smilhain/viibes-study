@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.countries.index') }}">{{ __('app.Countries') }}</a> / <a href="{{ route('admin.countries.show', $country) }}">{{ old('name_sk', $country->name_sk) }}</a> / {{ __('Edit') }}</h4>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('admin.countries.update', $country) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('patch') }}
                <div class="form-group">
                    <label for="name_sk" class="col-form-label">{{ __('app.name_in_slovak') }}</label>
                    <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror" value="{{ old('name_sk', $country->name_sk) }}" required>
                    @error('name_sk')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('app.Back') }}</a>
                    <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span> <i class="fa fa-check"></i></button>
                </div>

            </form>
        </div>
</div>
@endsection

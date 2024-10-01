@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.faculties.index') }}">{{ __('app.faculties') }}</a> / <a href="{{ route('admin.faculties.show', $faculty) }}">{{ old('name_sk', $faculty->name_sk) }}</a> / {{ __('Edit') }}</h4>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('admin.faculties.update', $faculty) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('patch') }}
                <div class="row">
                    <div class="input-field col m12">
                        <div class="form-group">
                            <label for="name" class="col-form-label">{{ __('app.name') }}</label>
                            <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $faculty->name) }}" required>
                            @error('name')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-field col m12">
                        <div class="form-group">
                            <label for="name_sk" class="col-form-label">{{ __('app.name_in_slovak') }}</label>
                            <input id="name_sk" name="name_sk" class="form-control @error('name_sk') is-invalid @enderror"
                                   value="{{ old('name_sk', $faculty->name_sk) }}" required>
                            @error('name_sk')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $faculty->description) }}</textarea>
                    </div>
                    <div class="form-group col-6">
                        <label for="unoiversity_id" class="text-capitalize">{{ __('app.university') }}</label>
                        <select id="university_id" name="university_id"
                                class="custom-select @error('city_id') is-invalid @enderror" required>
                            <option>{{ __('app.select_university') }}</option>
                            @foreach($universities as $university)
                                <option
                                    value="{{ $university->id }}" {{ $university->id == old('university_id', $faculty->university_id) ? 'selected' : '' }}>{{ $university->name }}</option>
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
        </div>
</div>
@endsection

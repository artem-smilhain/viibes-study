@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.users.index') }}">{{ __('app.Users')}}</a> / <a href="{{ route('admin.users.show', $user) }}">{{ $user->email }}</a> / {{ __('app.edit') }} </h4>

    <h4>{{ __('app.service') }}</h4>
    <form method="post" action="{{ route('admin.users.services.store', $user) }}">
        @csrf
        <div class="row">
            @if($errors)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Добавление услуги</h4>
                <div class="form-group">
                    <select name="service_id" id="service_id" required>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" @if(old('$service_id') == $service->id) selected @endif>{{ $service->name_ru }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="contract_number" id="contract_number" placeholder="Номер договора" class="form-control" value="{{ old('contract_number') }}"  required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ __('app.Save') }}</button>
        </div>
    </form>
@endsection

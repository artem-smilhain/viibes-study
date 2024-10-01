@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.users.index') }}">{{ __('app.Users')}}</a> / <a href="{{ route('admin.users.show', $user) }}">{{ $user->email }}</a> / {{ __('app.edit') }} </h4>

    <h4>{{ __('app.service') }}</h4>
    <form method="post" action="{{ route('admin.users.payments.store', $user) }}">
        @csrf
        <div class="row">
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="title" class="col-form-label">{{ __('app.title') }}</label>
                    <input id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" maxlength="255" required>
                    @error('title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-3">
                <label class="text-capitalize">{{ __('app.deadline') }}</label>
                <div class="input-group date" id="deadline" data-target-input="nearest">
                    <div class="input-group-append" data-target="#deadline" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input type="text" class="form-control datetimepicker-input" data-target="#deadline" name="deadline" value="{{ old('deadline') }}">
                </div>
                @error('deadline')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-3">
                <label for="is_paid" class="col-form-label">Статус: </label>
                <select id="is_paid" name="is_paid"
                        class="custom-select @error('is_paid') is-invalid @enderror" required>
                    <option>{{ __('app.select_status') }}</option>
                    <option value="0" {{ (old('is_paid') == '0') ? 'selected' : '' }}>Не оплачено</option>
                    <option value="1" {{ (old('is_paid') == 1) ? 'selected' : '' }}>Оплачено</option>
                </select>
                @error('is_paid')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-3">
                <label for="amount" class="col-form-label">{{ __('app.Amount') }}</label>
                <input id="amount" name="amount" type="number" min="0" step=".01" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') }}" required>
                @error('amount')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <input name="service_id" value="{{ $service->id }}" type="hidden">
            <div class="col-12">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('app.Back') }}</a>
                    <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span></button>
                </div>
            </div>
        </div>
    </form>

@endsection

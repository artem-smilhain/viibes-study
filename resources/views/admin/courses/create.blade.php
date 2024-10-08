@extends('admin.layouts.app')
@section('content')
    <h4 class="text-capitalize">{{ __('app.create_course') }}</h4>
        <form method="post" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
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
            <div class="form-group col-6">
                <label class="text-capitalize">{{ __('app.date_of_start') }}</label>
                <div class="input-group date" id="start-date" data-target-input="nearest">
                    <div class="input-group-append" data-target="#start-date" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input type="text" class="form-control datetimepicker-input" data-target="#start-date" name="start_date" value="{{ old('start_date') }}">
                </div>
                @error('start_date')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="ps" class="col-form-label text-capitalize">{{ __('app.telegram_link') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-telegram"></i></span>
                    </div>
                    <input id="telegram-link" name="telegram_link" type="text" class="form-control validate @error('telegram_link') is-invalid @enderror" value="{{ old('telegram_link') }}"  maxlength="255">
                    @error('telegram_link')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="status" class="text-capitalize">{{ __('app.Status') }}</label>
                <select id="status_id" name="status_id" class="custom-select @error('status_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_status') }}</option>
                    @foreach($statuses as $status_id => $status_name)
                        <option value="{{ $status_id }}" {{ $status_id == old('status') ? 'selected' : '' }}>{{ $status_name }}</option>
                    @endforeach
                </select>
                @error('status_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="col m12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('app.Back') }}</a>
                    <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span></button>
                </div>
            </div>
            </div>
        </form>
@endsection
@section('js')
    <script>
        new tempusDominus.TempusDominus(document.getElementById('start-date'), {
            //    localization: ru
//            defaultDate: '{{ date('Y') - 16 }}',
            display: {
                viewMode: 'years',
                components: {
                    decades: true,
                    year: true,
                    month: true,
                    date: true,
                    hours: false,
                    minutes: false,
                    seconds: false,
                }
            }
        });
    </script>
@endsection

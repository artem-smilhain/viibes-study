@extends('admin.layouts.app')
@section('content')
    <h4 class="text-capitalize">{{ __('app.create_lesson') }}</h4>
        <form method="post" action="{{ route('admin.lessons.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="input-field col m12">
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('app.name') }}</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label class="text-capitalize">{{ __('app.start_at') }}</label>
                <div class="input-group date" id="start_at" data-target-input="nearest">
                    <div class="input-group-append" data-target="#start_at" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input type="text" class="form-control datetimepicker-input" data-target="#start_at" name="start_at" value="{{ old('start_at') }}">
                </div>
                @error('start_at')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="meeting-link" class="col-form-label text-capitalize">{{ __('app.meeting_link') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-meetup"></i></span>
                    </div>
                    <input id="meeting-link" name="meeting_link" type="text" class="form-control validate @error('meeting_link') is-invalid @enderror" value="{{ old('meeting_link') }}"  maxlength="255">
                    @error('meeting_link')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="course_id" class="text-capitalize">{{ __('app.course') }}</label>
                <select id="status_id" name="course_id" class="custom-select @error('course_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_course') }}</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ $course->id == old('course_id') ? 'selected' : '' }}>{{ $course->name }}</option>
                    @endforeach
                </select>
                @error('course_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
                <div class="form-group col-6">
                    <label for="video-link" class="col-form-label text-capitalize">{{ __('app.video_link') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-meetup"></i></span>
                        </div>
                        <input id="video-link" name="video_link" type="text" class="form-control validate @error('video_link') is-invalid @enderror" value="{{ old('video_link') }}"  maxlength="255">
                        @error('video_link')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                    <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="form-group col-6">
                    <label for="notes" class="form-label text-capitalize">{{ __('app.notes') }}</label>
                    <textarea class="form-control" id="notes" rows="3" name="notes">{{ old('notes') }}</textarea>
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
        new tempusDominus.TempusDominus(document.getElementById('start_at'), {
            //    localization: ru
//            defaultDate: '{{ date('Y') - 16 }}',
            display: {
                viewMode: 'years',
                components: {
                    decades: true,
                    year: true,
                    month: true,
                    date: true,
                    hours: true,
                    minutes: true,
                    seconds: false,
                }
            }
        });
    </script>
@endsection

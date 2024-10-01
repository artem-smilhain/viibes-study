@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.lessons.index') }}">{{ __('app.lessons') }}</a> / <a href="{{ route('admin.lessons.show', $lesson) }}">{{ old('name_sk', $lesson->name_sk) }}</a> / {{ __('Edit') }}</h4>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('admin.lessons.update', $lesson) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('patch') }}
                <div class="row">
                    <div class="input-field col m12">
                        <div class="form-group">
                            <label for="name" class="col-form-label">{{ __('app.name_in_slovak') }}</label>
                            <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $lesson->name) }}" required>
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
                            <input type="text" class="form-control datetimepicker-input" data-target="#start_at" name="start_at" value="{{ old('start_at', $lesson->start_at) }}">
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
                            <input id="meeting-link" name="meeting_link" type="text" class="form-control validate @error('meeting_link') is-invalid @enderror" value="{{ old('meeting_link', $lesson->meeting_link) }}"  maxlength="255">
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
                                <option value="{{ $course->id }}" {{ $course->id == old('course_id', $lesson->course_id) ? 'selected' : '' }}>{{ $course->name }}</option>
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
                            <input id="video-link" name="video_link" type="text" class="form-control validate @error('video_link') is-invalid @enderror" value="{{ old('video_link', $lesson->video_link) }}"  maxlength="255">
                            @error('video_link')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="description" class="form-label text-capitalize">{{ __('app.description') }}</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $lesson->description) }}</textarea>
                    </div>
                    <div class="form-group col-6">
                        <label for="notes" class="form-label text-capitalize">{{ __('app.notes') }}</label>
                        <textarea class="form-control" id="notes" rows="3" name="notes">{{ old('notes', $lesson->notes) }}</textarea>
                    </div>
                    <div class="form-group">
                        <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('app.Back') }}</a>
                        <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span> <i class="fa fa-check"></i></button>
                    </div>
                </div>



            </form>
        </div>
</div>
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

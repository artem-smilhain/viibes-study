@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.homeworks.index') }}">{{ __('app.homeworks') }}</a> / <a href="{{ route('admin.homeworks.show', $homework) }}">{{ old('name_sk', $homework->name_sk) }}</a> / {{ __('Edit') }}</h4>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('admin.homeworks.update', $homework) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('patch') }}
                <div class="row">
                    <div class="form-group col-6">
                        <label class="text-capitalize">{{ __('app.date_created_at') }}</label>
                        <div class="input-group date" id="date_created_at" data-target-input="nearest">
                            <div class="input-group-append" data-target="#date_created_at" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                            <input type="text" class="form-control datetimepicker-input" data-target="#date_created_at" name="date_created_at" value="{{ old('date_created_at', $homework->date_created_at) }}">
                        </div>
                        @error('date_created_at')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label class="text-capitalize">{{ __('app.deadline_at') }}</label>
                        <div class="input-group date" id="deadline_at" data-target-input="nearest">
                            <div class="input-group-append" data-target="#deadline_at" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                            <input type="text" class="form-control datetimepicker-input" data-target="#deadline_at" name="deadline_at" value="{{ old('deadline_at', $homework->deadline_at) }}">
                        </div>
                        @error('deadline_at')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="lesson_id" class="text-capitalize">{{ __('app.lesson') }}</label>
                        <select id="lesson_id" name="lesson_id" class="custom-select @error('lesson_id') is-invalid @enderror" required>
                            <option>{{ __('app.select_lesson') }}</option>
                            @foreach($lessons as $lesson)
                                <option value="{{ $lesson->id }}" {{ $lesson->id == old('lesson_id', $homework->lesson_id) ? 'selected' : '' }}>{{ $lesson->name }}</option>
                            @endforeach
                        </select>
                        @error('lesson_id')
                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="homework" class="form-label text-capitalize">{{ __('app.homework') }}</label>
                        <textarea class="form-control" id="homework" rows="3" name="homework">{{ old('homework', $homework->homework) }}</textarea>
                    </div>
                    <div class="form-group col-6">
                        <label for="reply" class="form-label text-capitalize">{{ __('app.reply') }}</label>
                        <textarea class="form-control" id="reply" rows="3" name="reply">{{ old('reply', $homework->reply) }}</textarea>
                    </div>
                    <div class="form-group col-6">
                        <label for="grade" class="form-label text-capitalize">{{ __('app.grade') }}</label>
                        <textarea class="form-control" id="grade" rows="3" name="grade">{{ old('grade', $homework->grade) }}</textarea>
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
        new tempusDominus.TempusDominus(document.getElementById('date_created_at'), {
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
        new tempusDominus.TempusDominus(document.getElementById('deadline_at'), {
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

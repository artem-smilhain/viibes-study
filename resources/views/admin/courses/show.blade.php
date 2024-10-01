@extends('admin.layouts.app')
@section('content')
@include('admin.courses._nav')
    <h4><a href="{{ route('admin.courses.index') }}" class="text-capitalize">{{ __('app.courses') }}</a> / {{ $course->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.courses.update', $course) }}" class="">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger float-left ml-1">{{ __('app.delete') }}</button>
         </form>
     </div>

    </div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $course->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $course->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.status') }}</th>
                <td>{{ $course->status }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.date_of_start') }}</th>
                <td>{{ $course->start_date }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.telegram_link') }}</th>
                <td>{{ $course->telegram_link }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-primary mr-1 left text-capitalize">{{ __('app.courses') }}</a>
    </p>
@endsection

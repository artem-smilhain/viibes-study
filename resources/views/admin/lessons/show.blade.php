@extends('admin.layouts.app')
@section('content')
@include('admin.lessons._nav')
    <h4><a href="{{ route('admin.lessons.index') }}" class="text-capitalize">{{ __('app.lessons') }}</a> / {{ $lesson->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.lessons.edit', $lesson) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.lessons.update', $lesson) }}" class="">
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
                <td>{{ $lesson->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $lesson->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.lesson') }}</th>
                <td>{{ $lesson->lesson->name ?? '' }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.date_of_start') }}</th>
                <td>{{ date('H:i d.m.Y', strtotime($lesson->start_at)) }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.meeting_link') }}</th>
                <td>{{ $lesson->meeting_link }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.video_link') }}</th>
                <td>{{ $lesson->video_link }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.description') }}</th>
                <td>{{ $lesson->description }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.notes') }}</th>
                <td>{{ $lesson->notes }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.lessons.index') }}" class="btn btn-primary mr-1 left text-capitalize">{{ __('app.lessons') }}</a>
    </p>
@endsection

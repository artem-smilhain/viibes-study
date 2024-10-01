@extends('admin.layouts.app')
@section('content')
@include('admin.homeworks._nav')
    <h4><a href="{{ route('admin.homeworks.index') }}" class="text-capitalize">{{ __('app.homeworks') }}</a> / {{ $homework->date_created_at }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.homeworks.edit', $homework) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.homeworks.update', $homework) }}" class="">
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
                <td>{{ $homework->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.lesson') }}</th>
                <td>{{ $homework->lesson->name ?? '' }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.date_created_at') }}</th>
                <td>{{ date('H:i d.m.Y', strtotime($homework->date_created_at)) }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.deadline_at') }}</th>
                <td>{{ date('H:i d.m.Y', strtotime($homework->deadline_at)) }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.homework') }}</th>
                <td>{{ $homework->homework }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.reply') }}</th>
                <td>{{ $homework->reply }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.grade') }}</th>
                <td>{{ $homework->grade }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.homeworks.index') }}" class="btn btn-primary mr-1 left text-capitalize">{{ __('app.homeworks') }}</a>
    </p>
@endsection

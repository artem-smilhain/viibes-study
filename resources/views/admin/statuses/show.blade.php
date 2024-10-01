@extends('admin.layouts.app')
@section('content')
@include('admin.statuses._nav')
    <h4><a href="{{ route('admin.statuses.index') }}">{{ __('app.status') }}</a> / {{ $status->title }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.statuses.edit', $status) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.statuses.update', $status) }}" class="">
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
                <td>{{ $status->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.title') }}</th>
                <td>{{ $status->title }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.description') }}</th>
                <td>{{ $status->description }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.color') }}</th>
                <td>{{ $status->element_color }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.statuses.index') }}" class="btn btn-primary mr-1 left">{{ __('app.statuses') }}</a>
    </p>
@endsection

@extends('admin.layouts.app')
@section('content')
@include('admin.faculties._nav')
    <h4 class="text-capitalize"><a href="{{ route('admin.faculties.index') }}">{{ __('app.faculties') }}</a> / {{ $faculty->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.faculties.edit', $faculty) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.faculties.update', $faculty) }}" class="">
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
                <td>{{ $faculty->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $faculty->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $faculty->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.description') }}</th>
                <td>{{ $faculty->description }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.university') }}</th>
                <td>{{ $faculty->university->name ?? '' }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.faculties.index') }}" class="btn btn-primary mr-1 left">{{ __('app.faculties') }}</a>
    </p>
@endsection

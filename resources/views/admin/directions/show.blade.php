@extends('admin.layouts.app')
@section('content')
@include('admin.directions._nav')
    <h4><a href="{{ route('admin.directions.index') }}">{{ __('app.directions') }}</a> / {{ $direction->name }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.directions.edit', $direction) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.directions.update', $direction) }}" class="">
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
                <td>{{ $direction->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $direction->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $direction->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $direction->element_color }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.row_weight') }}</th>
                <td>{{ $direction->row_weight }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.slug') }}</th>
                <td>{{ $direction->slug }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.directions.index') }}" class="btn btn-primary mr-1 left">{{ __('app.directions') }}</a>
    </p>
@endsection

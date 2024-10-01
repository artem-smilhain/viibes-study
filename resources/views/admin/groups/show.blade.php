@extends('admin.layouts.app')
@section('content')
@include('admin.groups._nav')
    <h4><a href="{{ route('admin.groups.index') }}">{{ __('app.groups') }}</a> / {{ $group->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.groups.edit', $group) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.groups.update', $group) }}" class="">
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
                <td>{{ $group->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $group->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $group->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $group->element_color }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.row_weight') }}</th>
                <td>{{ $group->row_weight }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.slug') }}</th>
                <td>{{ $group->slug }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.groups.index') }}" class="btn btn-primary mr-1 left">{{ __('app.groups') }}</a>
    </p>
@endsection

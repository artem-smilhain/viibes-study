@extends('admin.layouts.app')
@section('content')
@include('admin.services._nav')
    <h4 class="text-capitalize"><a href="{{ route('admin.services.index') }}">{{ __('app.services') }}</a> / {{ $service->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.services.update', $service) }}" class="">
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
                <td>{{ $service->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_russian') }}</th>
                <td>{{ $service->name_ru }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $service->name }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.services.index') }}" class="btn btn-primary mr-1 left">{{ __('app.services') }}</a>
    </p>
@endsection

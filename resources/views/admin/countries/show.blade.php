@extends('admin.layouts.app')
@section('content')
@include('admin.countries._nav')
    <h4><a href="{{ route('admin.countries.index') }}">{{ __('app.Countries') }}</a> / {{ $country->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.countries.edit', $country) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.countries.update', $country) }}" class="">
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
                <td>{{ $country->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $country->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $country->name }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.countries.index') }}" class="btn btn-primary mr-1 left">{{ __('app.Countries') }}</a>
    </p>
@endsection

@extends('admin.layouts.app')
@section('content')
@include('admin.cities._nav')
    <h4><a href="{{ route('admin.cities.index') }}">{{ __('app.Cities') }}</a> / {{ $city->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.cities.edit', $city) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.cities.update', $city) }}" class="">
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
                <td>{{ $city->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $city->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $city->name }}</td>
            </tr>
            @if($city->post_id)
                <th class="text-capitalize">{{ __('app.post') }}</th>
                <td>{{ $city->post->title }}</td>
            @endif
            <tr>
                <th class="text-capitalize">{{ __('app.country') }}</th>
                <td>{{ $city->country->name ?? '' }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.slug') }}</th>
                <td>{{ $city->slug }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.cities.index') }}" class="btn btn-primary mr-1 left">{{ __('app.Cities') }}</a>
    </p>
@endsection

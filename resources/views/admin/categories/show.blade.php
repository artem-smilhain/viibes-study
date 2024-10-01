@extends('admin.layouts.app')
@section('content')
@include('admin.categories._nav')
    <h4 class="text-capitalize"><a href="{{ route('admin.categories.index') }}">{{ __('app.categories') }}</a> / {{ $category->name }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.categories.update', $category) }}" class="">
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
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $category->element_color }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary mr-1 left">{{ __('app.categories') }}</a>
    </p>
@endsection

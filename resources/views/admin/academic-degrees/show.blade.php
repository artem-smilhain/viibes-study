@extends('admin.layouts.app')
@section('content')
@include('admin.academic-degrees._nav')
    <h4><a href="{{ route('admin.academic-degrees.index') }}">{{ __('app.academic_degrees') }}</a> / {{ $academic_degree->name }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.academic-degrees.edit', $academic_degree) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.academic-degrees.update', $academic_degree) }}" class="">
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
                <td>{{ $academic_degree->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.degree_title') }}</th>
                <td>{{ $academic_degree->degree_title }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.degree_abbreviation') }}</th>
                <td>{{ $academic_degree->degree_abbreviation }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">Slug</th>
                <td>{{ $academic_degree->slug }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.academic-degrees.index') }}" class="btn btn-primary mr-1 left">{{ __('app.academic-degrees') }}</a>
    </p>
@endsection

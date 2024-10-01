@extends('admin.layouts.app')
@section('content')
@include('admin.faculties._nav')
    <h4><a href="{{ route('admin.programs.index') }}">{{ __('app.faculties') }}</a> / {{ $program->name_sk }}</h4>
    <div class="row mb-3">
     <div>
         <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.programs.update', $program) }}" class="">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger float-left ml-1">{{ __('app.delete') }}</button>
         </form>
         <a target="_blank" href="{{ route('universities.speciality', [$program->faculty->university->city->slug, $program->faculty->university->slug, $program->faculty->slug, $program->academicDegree->slug, $program->slug]) }}" class="btn btn-success ml-1 float-left">
             Смотреть на сайте
         </a>
     </div>
    </div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $program->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $program->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_native') }}</th>
                <td>{{ $program->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.years_of_study') }}</th>
                <td>{{ $program->years_of_study }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.description') }}</th>
                <td>{{ $program->description }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.is_in_combination') }}</th>
                <td>{{ $program->is_in_combination }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.academic_degree') }}</th>
                <td>{{ $program->academicDegree->degree_title }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.faculty') }}</th>
                <td>{{ $program->faculty->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.direction') }}</th>
                <td>{{ $program->direction->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.faculty') }}</th>
                <td>{{ $program->faculty->name ?? '' }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.programs.index') }}" class="btn btn-primary mr-1 left">{{ __('app.faculties') }}</a>
    </p>
@endsection

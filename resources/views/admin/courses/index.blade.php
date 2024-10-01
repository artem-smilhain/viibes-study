@extends('admin.layouts.app')
@section('content')
    @include('admin.courses._nav')
    <h4 class="text-capitalize">{{ __('app.courses') }}</h4>
    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary mb-3 text-capitalize">{{ __('app.create') }}</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <th class="text-capitalize">{{ __('app.date_of_start') }}</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td><a href="{{ route('admin.courses.show', $course) }}">{{ $course->name_sk }}</a></td>
                        <td>{{ $course->start_date }}</td>
                        <td class="td-actions">
                            <form method="post" action="{{ route('admin.courses.update', $course) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')"><i class="fa fa-trash"></i> {{ __('app.delete') }}</button>
                            </form>
                            <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}"><i class="fa fa-edit"></i> {{ __('app.edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="">
        {{ $courses->links() }}
    </div>
@endsection

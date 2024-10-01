@extends('admin.layouts.app')
@section('content')
    @include('admin.lessons._nav')
    <h4 class="text-capitalize">{{ __('app.lessons') }}</h4>
    <a href="{{ route('admin.lessons.create') }}" class="btn btn-primary mb-3 text-capitalize">{{ __('app.create') }}</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <th class="text-capitalize">{{ __('app.date_of_start') }}</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($lessons as $lesson)
                    <tr>
                        <td><a href="{{ route('admin.lessons.show', $lesson) }}">{{ $lesson->name_sk }}</a></td>
                        <td>{{ $lesson->start_at }}</td>
                        <td class="td-actions">
                            <form method="post" action="{{ route('admin.lessons.update', $lesson) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')"><i class="fa fa-trash"></i> {{ __('app.delete') }}</button>
                            </form>
                            <a href="{{ route('admin.lessons.edit', $lesson) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}"><i class="fa fa-edit"></i> {{ __('app.edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="">
        {{ $lessons->links() }}
    </div>
@endsection

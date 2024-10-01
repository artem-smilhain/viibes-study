@extends('admin.layouts.app')
@section('content')
    @include('admin.homeworks._nav')
    <h4 class="text-capitalize">{{ __('app.homeworks') }}</h4>
    <a href="{{ route('admin.homeworks.create') }}" class="btn btn-primary mb-3 text-capitalize">{{ __('app.create') }}</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <th class="text-capitalize">{{ __('app.date_created_at') }}</th>
                <th class="text-capitalize">{{ __('app.deadline_at') }}</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($homeworks as $homework)
                    <tr>
                        <td><a href="{{ route('admin.homeworks.show', $homework) }}">{{ $homework->date_created_at }}</a></td>
                        <td>{{ $homework->deadline_at }}</td>
                        <td class="td-actions">
                            <form method="post" action="{{ route('admin.homeworks.update', $homework) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')"><i class="fa fa-trash"></i> {{ __('app.delete') }}</button>
                            </form>
                            <a href="{{ route('admin.homeworks.edit', $homework) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}"><i class="fa fa-edit"></i> {{ __('app.edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="">
        {{ $homeworks->links() }}
    </div>
@endsection

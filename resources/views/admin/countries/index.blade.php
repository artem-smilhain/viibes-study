@extends('admin.layouts.app')
@section('content')
    @include('admin.countries._nav')
    <h4>{{ __('app.Countries') }}</h4>
    <a href="{{ route('admin.countries.create') }}" class="btn btn-primary mb-3">{{ __('app.Create') }}</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td><a href="{{ route('admin.countries.show', $country) }}">{{ $country->name_sk }}</a></td>
                        <td>{{ $country->name }}</td>
                        <td class="td-actions">
                            <form method="post" action="{{ route('admin.countries.update', $country) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')"><i class="fa fa-trash"></i> {{ __('app.delete') }}</button>
                            </form>
                            <a href="{{ route('admin.countries.edit', $country) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}"><i class="fa fa-edit"></i> {{ __('app.edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="">
        {{ $countries->links() }}
    </div>
@endsection

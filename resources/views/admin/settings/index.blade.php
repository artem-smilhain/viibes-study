@extends('admin.layouts.app')
@section('content')
    <h4>{{ __('app.settings') }}</h4>
    <a href="{{ route('admin.settings.create') }}" class="btn btn-primary mb-3">{{ __('app.Create') }}</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <th class="text-capitalize">{{ __('app.value') }}</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($settings as $setting)
                    <tr>
                        <td>{{ $setting->name }}</td>
                        <td>{{ $setting->value }}</td>
                        <td class="td-actions">
                            <form method="post" action="{{ route('admin.settings.update', $setting) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')"><i class="fa fa-trash"></i> {{ __('app.delete') }}</button>
                            </form>
                            <a href="{{ route('admin.settings.edit', $setting) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}"><i class="fa fa-edit"></i> {{ __('app.edit') }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="">
        {{ $settings->links() }}
    </div>
@endsection

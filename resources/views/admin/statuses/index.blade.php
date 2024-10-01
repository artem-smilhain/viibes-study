@extends('admin.layouts.app')
@section('content')
    @include('admin.statuses._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Статусы программ 🎨️</h4>
        <a href="{{ route('admin.statuses.create') }}" class="btn btn-primary mb-3">Создать статус +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Название: </th>
            <th class="text-capitalize">Описание: </th>
            <th class="text-capitalize">Цвет: </th>
            <th>Действия: </th>
        </thead>
        <tbody>
        @foreach($statuses as $status)
            <tr>
                <td class="align-middle text-primary"><b>{{ $status->title }}</b></td>
                <td class="align-middle">{{ $status->description }}</td>
                <td style="color: {{ $status->element_color }};" class="align-middle"><b>{{ $status->element_color }}</b></td>
                <td class="td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.statuses.show', $status) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.statuses.edit', $status) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.statuses.update', $status) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

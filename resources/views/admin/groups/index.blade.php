@extends('admin.layouts.app')
@section('content')
    @include('admin.groups._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Группы университетов ⭐️</h4>
        <a href="{{ route('admin.groups.create') }}" class="btn btn-primary mb-3">Добавить группу +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Название группы: </th>
            <th class="text-capitalize">Название группы (SK): </th>
            <th class="text-capitalize">Цвет группы: </th>
            <th>Действие: </th>
        </thead>
        <tbody>
        @foreach($groups as $group)
            <tr>
                <td class="align-middle text-primary"><b>{{ $group->name }}</b></td>
                <td class="align-middle">{{ $group->name_sk }}</td>
                <td style="color: {{ $group->element_color }};" class="align-middle">{{ $group->element_color }}</td>
                <td class="td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.groups.show', $group) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.groups.edit', $group) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.groups.update', $group) }}" class="mr-1">
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

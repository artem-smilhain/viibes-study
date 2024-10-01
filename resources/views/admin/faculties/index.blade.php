@extends('admin.layouts.app')
@section('content')
    @include('admin.faculties._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Факультеты университетов Словакии 💡</h4>
        <a href="{{ route('admin.faculties.create') }}" class="btn btn-primary mb-3">Добавить факультет +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Название: </th>
            <th class="text-capitalize">Университет: </th>
            <th class="text-capitalize">Действия: </th>
        </thead>
        <tbody>
        @foreach($faculties as $faculty)
            <tr>
                <td class="align-middle text-primary">
                    <div class="d-flex flex-column">
                        <b>{{ $faculty->name }}</b>
                        <b class="text-success" style="font-size: 0.6rem;">{{ $faculty->name_sk }}</b>
                    </div>
                </td>
                <td class="align-middle">
                    <div class="d-flex flex-column">
                        <b>{{ $faculty->university->name }}</b>
                        <b class="text-success" style="font-size: 0.6rem;">{{ $faculty->university->name_sk }}</b>
                    </div>
                </td>
                <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.faculties.show', $faculty) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.faculties.edit', $faculty) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.faculties.update', $faculty) }}" class="mr-1">
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

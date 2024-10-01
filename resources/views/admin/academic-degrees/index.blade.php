@extends('admin.layouts.app')
@section('content')
    @include('admin.academic-degrees._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Уровни обучения (степени) 🧑‍🎓</h4>
        <a href="{{ route('admin.academic-degrees.create') }}" class="btn btn-primary mb-3">Добавить степень +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Аббревиатура: </th>
            <th class="text-capitalize">Уровень: </th>
            <th class="text-capitalize">Row weight: </th>
            <th class="text-capitalize">Действия: </th>
        </thead>
        <tbody>
        @foreach($academic_degrees as $academic_degree)
            <tr>
                <td class="align-middle text-primary"><b>{{ $academic_degree->degree_abbreviation }}</b></td>
                <td class="align-middle">{{ $academic_degree->degree_title }}</td>
                <td class="align-middle">{{ $academic_degree->row_weight }}</td>
                <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.academic-degrees.show', $academic_degree) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.academic-degrees.edit', $academic_degree) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.academic-degrees.update', $academic_degree) }}" class="mr-1">
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

@extends('admin.layouts.app')
@section('content')
    @include('admin.categories._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Категории публикаций 📁</h4>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">Добавить категорию +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Название: </th>
            <th class="text-capitalize">Публикаций: </th>
            <th class="text-capitalize">Цвет: </th>
            <th class="text-capitalize">Действие: </th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="align-middle text-primary"><b>{{ $category->name }}</b></td>
                <td class="align-middle"><b>{{ count($category->posts) }}</b></td>
                <td class="align-middle" style="color: {{ $category->element_color }};">{{ $category->element_color }}</td>
                <td class="td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.categories.destroy', $category) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Шо? Точно видалити?') }}')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

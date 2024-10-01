@extends('admin.layouts.app')
@section('content')
    @include('admin.directions._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Направление специальностей 🎨️</h4>
        <a href="{{ route('admin.directions.create') }}" class="btn btn-primary mb-3">Создать направление +</a>
    </div>
    <div class="mt-3 w-100">
        <form method="GET" action="{{ route('admin.direction.search-by-university') }}" enctype="multipart/form-data">
            <div class="container p-0">
                <div class="row p-0">
                    <div class="form-group input-group-sm col-10 mb-0">
                        <select name="university" id="university" class="w-100 form-control">
                            <option value="">Все направления</option>
                            @foreach($universities as $_university)
                                <option value="{{ $_university->id }}" @if(!empty($university) && $university->id == $_university->id) selected @endif>
                                    {{ $_university->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2 mb-0">
                        <button type="submit" class="btn btn-sm btn-success" style="width: 100%;">Найти специальность</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Название: </th>
            <th class="text-capitalize">Название (Sk): </th>
            <th class="text-capitalize">Цвет: </th>
            <th class="text-capitalize">Row weight: </th>
            <th>Действия: </th>
        </thead>
        <tbody>
        @foreach($directions as $direction)
            <tr>
                <td class="align-middle text-primary"><b>{{ $direction->name }}</b></td>
                <td class="align-middle">{{ $direction->name_sk }}</td>
                <td style="color: {{ $direction->element_color }};" class="align-middle"><b>{{ $direction->element_color }}</b></td>
                <td class="align-middle">{{ $direction->row_weight }}</td>
                <td class="td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.directions.show', $direction) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.directions.edit', $direction) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.directions.update', $direction) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            {{--<tr>
                <td>
                    <ul>
                        @foreach($direction->programs as $program)
                            <li>{{ $program->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>--}}
        @endforeach
        </tbody>
    </table>
    {{--<div class="">
        {{ $directions->links() }}
    </div>--}}
@endsection

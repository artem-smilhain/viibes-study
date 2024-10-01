@extends('admin.layouts.app')
@section('content')
    @include('admin.programs._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Поиск специальностей: {{ $term }} 🔎</h4>
        <a href="{{ route('admin.programs.create') }}" class="btn btn-primary mb-3">Добавить специальность +</a>
    </div>
    <div class="mt-2" style="font-size: 16px;">
        @foreach($directions as $direction)
            <span class="badge" style="background: {{ $direction->element_color }};">
                    <a href="{{ route('admin.programs.index-by-direction', $direction) }}" class="text-white text-decoration-none">{{ $direction->name }}</a>
            </span>
        @endforeach
        <hr>
        <div class="mt-3 w-100">
            <form method="GET" action="{{ route('admin.programs.search-by-term') }}" enctype="multipart/form-data">
                <div class="container p-0">
                    <div class="row p-0">
                        <div class="form-group input-group-sm col-10 mb-0">
                            <input type="text" name="term" class="form-control" placeholder="Ключевое слово или ID: ">
                        </div>
                        <div class="col-2 mb-0">
                            <button type="submit" class="btn btn-sm btn-success" style="width: 100%;">Найти специальность</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <hr>
    </div>
    <div style="margin-bottom: 1rem;">
        <a href="{{ route('admin.programs.index') }}" class="text-success">Все специальности</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">ID: </th>
            <th class="text-capitalize">Название: </th>
            <th class="text-capitalize">Университет: </th>
            <th class="text-capitalize">Лет: </th>
            <th class="text-capitalize">Степень: </th>
            <th class="text-capitalize">Направление: </th>
            <th class="text-capitalize">Действие: </th>
        </thead>
        <tbody>
        @foreach($programs as $program)
            <tr>
                <td class="align-middle text-center">@php echo sprintf("%04d", $program->id) @endphp</td>
                <td class="align-middle text-primary">
                    <div class="d-flex flex-column">
                        <b>{{ $program->name }}</b>
                        <b class="text-success" style="font-size: 0.6rem;">{{ $program->name_sk }}</b>
                    </div>
                </td>
                <td class="align-middle text-danger"><b>{{ $program->faculty->university->abbreviation_sk }}</b></td>
                <td class="align-middle">{{ $program->years_of_study }}</td>
                <td class="align-middle">{{ $program->academicDegree->degree_abbreviation }}</td>
                <td class="align-middle">
                            <span style="color: {{ $program->direction->element_color }};">
                                {{ $program->direction->name }}
                            </span>
                    @if(!empty($program->direction_2))
                        <span class="text-secondary">|</span>
                        <span style="color: {{ $program->direction_2->element_color }};">{{ $program->direction_2->name }}</span>
                    @endif
                </td>
                <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.programs.show', $program) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.programs.update', $program) }}" class="mr-1">
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

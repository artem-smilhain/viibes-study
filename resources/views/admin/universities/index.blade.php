@extends('admin.layouts.app')
@section('content')
    @include('admin.universities._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Университеты Словакии 🇸🇰</h4>
        <a href="{{ route('admin.universities.create') }}" class="btn btn-primary mb-3">Добавить университет +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Название</th>
            <th class="text-capitalize">Аббревиатура</th>
            <th class="text-capitalize">Город</th>
            <th class="text-capitalize">Год</th>
            <th class="text-capitalize">Студентов</th>
            <th class="text-capitalize">Действия</th>
        </thead>
        <tbody>
        @foreach($universities as $university)
            <tr>
                <td class="align-middle text-primary">
                    <div class="d-flex flex-column">
                        <b>{{ $university->name }}</b>
                        <b class="text-success" style="font-size: 0.6rem;">{{ $university->name_sk }}</b>
                    </div>
                </td>
                <td class="align-middle">{{ $university->abbreviation_sk }} ({{ $university->abbreviation }})</td>
                <td class="align-middle">{{ $university->city->name }}</td>
                <td class="align-middle">{{ $university->founding_year }}</td>
                <td class="align-middle">{{ $university->number_of_students }}</td>
                <td class="td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.universities.show', $university) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.show') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.universities.edit', $university) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.universities.update', $university) }}" class="mr-1">
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

    {{--<div class="">
        {{ $universities->links() }}
    </div>--}}
@endsection

@extends('admin.layouts.app')
@section('content')
    @include('admin.cities._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Города Словакии 🏙</h4>
        <a href="{{ route('admin.cities.create') }}" class="btn btn-primary mb-3">Добавить город +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Название: </th>
            <th class="text-capitalize">Публикация к городу: </th>
            <th class="text-capitalize">Row weight: </th>
            <th class="text-capitalize">Действие: </th>
        </thead>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <td class="align-middle text-primary"><b>{{ $city->name }}</b> ({{ $city->name_sk }})</td>
                <td class="align-middle">@if($city->post){{ $city->post->title }}@endif</td>
                <td class="align-middle">{{ $city->row_weight }}</td>
                <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.cities.show', $city) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.cities.edit', $city) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.cities.update', $city) }}" class="mr-1">
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

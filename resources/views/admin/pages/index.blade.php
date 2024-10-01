@extends('admin.layouts.app')
@section('content')
    @include('admin.directions._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Текста для страниц 🎨️</h4>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary mb-3">Создать текст +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Заголовок: </th>
            <th class="text-capitalize">Страница: </th>
            <th class="text-capitalize">Действия: </th>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td class="align-middle text-primary"><b>{{ $page->content_heading }}</b></td>
                <td class="align-middle text-danger"><u>{{ $page->page }}</u></td>
                <td class="td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--<div class="">
        {{ $directions->links() }}
    </div>--}}
@endsection

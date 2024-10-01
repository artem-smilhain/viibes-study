@extends('admin.layouts.app')
@section('content')
    @include('admin.posts._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Публикации 📝</h4>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Добавить публикацию +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Заголовок: </th>
            <th class="text-capitalize">Статус: </th>
            <th class="text-capitalize">Категория: </th>
            <th class="text-capitalize">Дата: </th>
            <th class="text-capitalize">Действие: </th>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td class="align-middle text-primary"><b>{{ $post->title }}</b></td>
                <td class="align-middle text-primary">
                    @if($post->status)
                        <span class="badge badge-success">Опубликовано</span>
                    @else
                        <span class="badge badge-danger">Черновик️</span>
                    @endif
                    @if($post->is_pinned)
                         <span class="badge badge-primary">Закреплен</span>
                    @endif
                </td>
                <td class="align-middle">
                    <span class="badge" style="color: {{ $post->category->element_color }}; border: 1px solid {{ $post->category->element_color }};">
                        {{ $post->category->name }}
                    </span>
                </td>
                <td class="align-middle">{{ $post->created_at->format('d.m.Y (H:i)') }}</td>
                <td class="td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.posts.destroy', $post) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Шо? Точно видалити цей пост?') }}')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@extends('admin.layouts.app')
@section('content')
    @include('admin.reviews._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Наши отзывы 🔥</h4>
        <a href="{{ route('admin.reviews.create') }}" class="btn btn-primary mb-3">Добавить отзыв +</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Имя: </th>
            <th class="text-capitalize">Университет: </th>
            <th class="text-capitalize">Row weight: </th>
            <th class="text-capitalize">Блок отзывов: </th>
            <th class="text-capitalize">Дата: </th>
            <th class="text-capitalize">Действие: </th>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td class="align-middle">
                    <img src="/storage/{{ $review->avatar_src }}" style="width: 30px;" class="rounded-1">
                    {{ $review->client_name }}
                    @if($review->video_src)
                        <span class="text-success">(видео)</span>
                    @elseif($review->image_src)
                        <span class="text-danger">(фото)</span>
                    @endif
                    @if($review->instagram_url)
                        <span class="text-primary">(inst)</span>
                    @endif
                </td>
                <td class="align-middle">{{ $review->university->name }}</td>
                <td class="align-middle">{{ $review->row_weight }}</td>
                <td class="align-middle">
                    @if($review->is_shown)
                        <span class="badge badge-success">Отображается</span>
                    @else
                        <span class="badge badge-danger">Не отображается</span>
                    @endif
                </td>
                <td class="align-middle">{{ $review->created_at->format('d.m.Y') }}</td>
                <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.reviews.show', $review) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.reviews.edit', $review) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.reviews.update', $review) }}" class="mr-1">
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

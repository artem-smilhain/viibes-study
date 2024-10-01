@extends('admin.layouts.app')
@section('content')
@include('admin.posts._nav')
    <h4><a href="{{ route('admin.posts.index') }}">{{ __('app.posts') }}</a> / {{ $post->title }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.posts.update', $post) }}" class="">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger float-left ml-1">{{ __('app.delete') }}</button>
         </form>
     </div>

    </div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $post->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.title') }}</th>
                <td>{{ $post->title }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.content') }}</th>
                <td>{!! $post->content !!}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.thumbnail') }}</th>
                <td>@if($post->thumbnail_src) <img src="/storage/{{ $post->thumbnail_src }}"> @else нет @endif</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.slug') }}</th>
                <td>{{ $post->slug }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.created_at') }}</th>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.updated_at') }}</th>
                <td>{{ $post->updated_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mr-1 left">{{ __('app.posts') }}</a>
    </p>
@endsection

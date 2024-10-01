@extends('admin.layouts.app')
@section('content')
@include('admin.reviews._nav')
    <h4><a href="{{ route('admin.reviews.index') }}">{{ __('app.reviews') }}</a> / {{ $review->id }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.reviews.edit', $review) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.reviews.update', $review) }}" class="">
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
                <td>{{ $review->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.client_name') }}</th>
                <td>{{ $review->client_name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.content') }}</th>
                <td>{{ $review->content }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.avatar') }}</th>
                <td>@if($review->avatar_src) <img src="/storage/{{ $review->avatar_src }}" class="img-fluid"> @else нет @endif</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.video') }}</th>
                <td>@if($review->video_src) <video src="/storage/{{ $review->video_src }}" class="img-fluid"> @else нет @endif</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.preview') }}</th>
                <td>@if($review->preview_src) <img src="/storage/{{ $review->preview_src }}" class="img-fluid"> @else нет @endif</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.image') }}</th>
                <td>@if($review->image_src) <img src="/storage/{{ $review->image_src }}" class="img-fluid"> @else нет @endif</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.image_place_name') }}</th>
                <td>{{ $review->image_place_name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.instagram_url') }}</th>
                <td>{{ $review->instagram_url }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.is_interview') }}</th>
                <td>@if($review->is_interview) да @else нет @endif</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.university') }}</th>
                <td>{{ $review->university->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.created_at') }}</th>
                <td>{{ $review->created_at }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.updated_at') }}</th>
                <td>{{ $review->updated_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.reviews.index') }}" class="btn btn-primary mr-1 left">{{ __('app.reviews') }}</a>
    </p>
@endsection

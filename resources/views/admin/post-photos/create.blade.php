@extends('admin.layouts.app')
@section('content')
    <h4>{{ __('app.create_post') }}</h4>
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="title" class="col-form-label">{{ __('app.title') }}</label>
                    <input id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required>
                    @error('title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="input-field col-12">
                <div class="form-group">
                    <label for="content" class="col-form-label">{{ __('app.content') }}</label>
                    <textarea id="content" name="content" class="form-control ckeditor-field @error('content') is-invalid @enderror"
                              required>{{ old('content') }}</textarea>
                    @error('content')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-6">
                <label for="category_id">{{ __('app.category') }}</label>
                <select id="category_id" name="category_id"
                        class="custom-select @error('category_id') is-invalid @enderror" required>
                    <option>{{ __('app.select_category') }}</option>
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-6">
                <h4>{{ __('app.thumbnail') }}</h4>
                <div class="btn btn-primary">
                    <input type="file" name="thumbnail_src" id="thumbnail_src">
                </div>
                @error('thumbnail_src')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="col-12">
                <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('app.Back') }}</a>
                    <button type="submit" class="btn btn-primary"><span>{{ __('app.Save') }}</span></button>
                </div>
            </div>
        </div>
    </form>
@endsection

@extends('admin.layouts.app')

@section('content')
    <div class="list-group">
        <a href="{{ route('admin.countries.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.Countries') }}</a>
        <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.Users') }}</a>
        <a href="{{ route('admin.cities.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.Cities') }}</a>
        <a href="{{ route('admin.courses.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.courses') }}</a>
        <a href="{{ route('admin.universities.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.universities') }}</a>
        <a href="{{ route('admin.faculties.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.faculties') }}</a>
        <a href="{{ route('admin.groups.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.groups') }}</a>
        <a href="{{ route('admin.programs.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.programs') }}</a>
        <a href="{{ route('admin.services.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.services') }}</a>
        <a href="{{ route('admin.lessons.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.lessons') }}</a>
        <a href="{{ route('admin.homeworks.index') }}" class="list-group-item list-group-item-action text-capitalize">{{ __('app.homeworks') }}</a>
    </div>
@endsection

@extends('admin.layouts.app')
@section('content')
@include('admin.universities._nav')
    <h4><a href="{{ route('admin.universities.index') }}" class="text-capitalize">{{ __('app.universities') }}</a> / {{ $university->name_sk }}</h4>
 <div class="row mb-3">
     <div>
         <a href="{{ route('admin.universities.edit', $university) }}" class="btn btn-primary ml-1 float-left">{{ __('app.edit') }}</a>
         <form method="post" action="{{ route('admin.universities.update', $university) }}" class="">
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
                <td>{{ $university->id }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name') }}</th>
                <td>{{ $university->name }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.name_in_slovak') }}</th>
                <td>{{ $university->name_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.abbreviation') }}</th>
                <td>{{ $university->abbreviation }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.abbreviation_in_slovak') }}</th>
                <td>{{ $university->abbreviation_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.description') }}</th>
                <td>{!! $university->description !!}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.address') }}</th>
                <td>{{ $university->address }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.address_in_slovak') }}</th>
                <td>{{ $university->address_sk }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.founding_year') }}</th>
                <td>{{ $university->founding_year }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.site_url') }}</th>
                <td>{{ $university->site_url }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.number_of_students') }}</th>
                <td>{{ $university->number_of_students }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.google_map_src') }}</th>
                <td>{{ $university->google_map_src }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.education_cost_en') }}</th>
                <td>{{ $university->education_cost_en }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.scholarships') }}</th>
                <td>{{ $university->scholarships }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.row_weight') }}</th>
                <td>{{ $university->row_weight }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.slug') }}</th>
                <td>{{ $university->slug }}</td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.logo') }}</th>
                <td>
                    @if($university->logo_src) <img src="/storage/{{ $university->logo_src }}"> @endif
                </td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.image') }}</th>
                <td>
                    @if($university->thumbnail_src) <img src="/storage/{{ $university->thumbnail_src }}"> @endif
                </td>
            </tr>
            <tr>
                <th class="text-capitalize">{{ __('app.city') }}</th>
                <td>
                    {{ $university->city->name ?? '' }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <p>
        <a href="{{ route('admin.universities.index') }}" class="btn btn-primary mr-1 left">{{ __('app.universities') }}</a>
    </p>
@endsection

@extends('admin.layouts.app')
@section('content')
    @include('admin.users._nav')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-3">
        <h4 class="">Родители 👨‍💻</h4>
{{--        <a href="{{ route('admin.relatives.create') }}" class="btn btn-primary mb-3">Добавить родителя +</a>--}}
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Имя: </th>
            <th class="text-capitalize">Email: </th>
            <th class="text-capitalize">Абитуриенты:</th>
            <th class="text-capitalize">Действия: </th>
        </thead>
        <tbody>
        @foreach($relatives as $relative)
            <tr>
                <td class="align-middle text-primary">{{ $relative->name }} {{ $relative->last_name }}</td>
                <td class="align-middle">{{ $relative->email }}</td>
                <td>
                    <ul>
                        @foreach($relative->users as $child)
                            <li><a href="{{ route('admin.users.show', ['user' => $child]) }}">{{ $child->last_name }} {{ $child->name }}</a></li>
                        @endforeach
                    </ul>
                </td>
                <td class="td-actions td-actions d-inline-flex w-100 align-middle">
                    <a href="{{ route('admin.relatives.show', $relative) }}" class="btn btn-primary btn-sm float-right mr-1" title="{{ __('app.show') }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.relatives.edit', $relative) }}" class="btn btn-success btn-sm float-right mr-1" title="{{ __('app.edit') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        {{--<div id="accordion">
            <div class="card">
                <div class="card-header p-0 m-0">
                    <button class="btn btn-link w-100 h-100 pl-4 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{ __('app.Filter') }}
                    </button>
                </div>
                <div id="collapseOne" class="collapse @if (!$agent->isMobile()) show @endif" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form action="?" method="GET" class="filter">
                            <div class="row">
                                <div class="form-group col-sm-3">
                                    <label for="name" class="col-form-label">{{ __('app.Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
                                    @error('name')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="status" class="col-form-label">{{ __('app.Status') }}</label>
                                    <select id="status" class="form-control" name="status">
                                        <option value="">{{ __('app.Any') }}</option>
                                        @foreach($statuses as $value => $label)
                                            <option value="{{ $value }}" {{ $value == old('status') ? 'selected' : ''}}>{{  $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="role" class="col-form-label">{{ __('app.Role') }}</label>
                                    <select id="role" class="form-control" name="role">
                                        @foreach($roles as $value => $label)
                                            <option value="{{ $value }}" {{ $value == old('role') ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 mt-auto mb-3">
                                    <label class="col-form-label"> </label>
                                    <button type="submit" class="btn btn-primary orange">{{ __('app.Search') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>--}}
@endsection

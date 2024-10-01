@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.users.index') }}">{{ __('app.Users')}}</a> / <a href="{{ route('admin.users.show', $user) }}">{{ $user->email }}</a> / {{ __('app.edit') }} </h4>
    @include('admin.users._nav')

    <div class="container-fluid">
        <div class="row">
            <div><a href="{{ route('admin.users.specialities.create', $user) }}" class="btn btn-primary">Добавить специальность +</a></div>
            <div class="col-md-12">
                @foreach($programs as $program)
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ $program->name }}</th>
                            <th>
                                <form action="{{ route('admin.users.specialities.statuses.store', [$user, $program]) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        @if($errors)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $error }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <select name="program_status_id">
                                            @foreach($programStatuses as $programStatus)
                                                <option value="{{ $programStatus->id }}">{{ $programStatus->title }}</option>
                                            @endforeach
                                    </select>
                                    <input type="hidden" name="program_id" value="{{ $program->id }}">
                                    <button>Добавить статус</button>
                                </form>
                            </th>
                            <th><form method="post" action="{{ route('admin.users.specialities.destroy', [$user, $program]) }}" class="mr-1">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm float-right" onclick="return confirm('{{ __('Are you sure?') }}')"><i class="fa fa-trash"></i> {{ __('app.delete') }}</button>
                                </form></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->programStatusesByProgram($program)->get() as $status)
                            <tr>
                                <td>{{ $status->title }} ({{ date('d.m.Y', strtotime($status->pivot->created_at)) }})</td>
                                <td></td>
                                <td><form method="post" action="{{ route('admin.users.specialities.statuses.destroy', [$user, $program, $status]) }}" class="mr-1">
                                        @csrf
                                        @method('DELETE')
                                        <button class="float-right" onclick="return confirm('{{ __('Are you sure?') }}')">Удалить статус</button>
                                    </form></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
@endsection

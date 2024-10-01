@extends('admin.layouts.app')
@section('content')
    @include('admin.users._nav')
    <h4><a href="{{ route('admin.users.index') }}">{{ __('app.Users')}}</a> / {{ $user->email }}</h4>
    <div class="row">
<div>
    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary float-left">{{ __('app.edit') }}</a>
    <form method="post" action="{{ route('admin.users.destroy', $user) }}" class="ml-1 float-left">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">{{ __('app.delete') }}</button>
    </form>
</div>

    </div>
    <div class="card mt-2">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.last_name') }}</th>
                    <td>{{ $user->last_name_ru }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Фамилия латиницей</th>
                    <td>{{ $user->last_name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Фамилия при рождении</th>
                    <td>{{ $user->birth_name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.Name') }}</th>
                    <td>{{ $user->name_ru }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Имя латиницей</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Отчество</th>
                    <td>{{ $user->father_name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.gender') }}</th>
                    <td>{{ $user->gender }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Семейное положение</th>
                    <td>{{ $user->martial_status }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер телефона</th>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.birth_date') }}</th>
                    <td>{{ $user->birth_date }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Город рождения</th>
                    <td>{{ $user->birth_city }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Страна рождения</th>
                    <td>{{ $user->birth_country->name ?? '' }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.Status') }}</th>
                    <td>{{ $statuses[$user->status_id] ?? '' }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.Role') }}</th>
                    <td>{{ $role_names }}</td>
                </tr>

                <tr><td colspan="2">Место прописки</td></tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.house') }}</th>
                    <td>{{ $user->house }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер квартиры</th>
                    <td>{{ $user->apartment }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.city') }}</th>
                    <td>{{ $user->city }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.country') }}</th>
                    <td>{{ $user->country->name ?? '' }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.ps') }}</th>
                    <td>{{ $user->ps }}</td>
                </tr>
                <tr><th colspan="2">Место проживания в данный момент</th></tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.house') }}</th>
                    <td>{{ $user->actual_house }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер квартиры</th>
                    <td>{{ $user->actual_apartment }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.city') }}</th>
                    <td>{{ $user->actual_city }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.country') }}</th>
                    <td>{{ $user->actual_country->name ?? '' }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.ps') }}</th>
                    <td>{{ $user->actual_ps }}</td>
                </tr>
                <tr>
                    <td colspan="2">Паспортные данные</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Гражданство</th>
                    <td>{{ $user->citizenship }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Национальность</th>
                    <td>{{ $user->nationality }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер паспорта</th>
                    <td>{{ $user->passport }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Место выдачи паспорта</th>
                    <td>{{ $user->passport_issue_place }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Дата окончания паспорта</th>
                    <td>{{ $user->passport_expiration_date }}</td>
                </tr>
                <tr>
                    <td colspan="2">Среднее образование</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Название школы</th>
                    <td>{{ $user->school_name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Год начала обучения в школе</th>
                    <td>{{ $user->school_start_year }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Год завершения обучения в школе</th>
                    <td>{{ $user->school_finish_year }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Родители</th>
                    <td>
                        <ul>
                            @foreach($user->relatives as $relative)
                                <li><a href="{{ route('admin.relatives.show', $relative)}}">{{ $relative->last_name }} {{ $relative->name }}</a> </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.program') }}</th>
                    <td>
                        <ul>
                            @foreach($user->programs as $program)
                                <li><a href="{{ route('admin.programs.show', $program) }}">{{ $program->name }}</a></li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.services') }}</th>
                    <td>
                        <ul>
                            @foreach($user_services as $user_service)
                                <li>{{ $user_service->name_ru }} договор:{{ $user_service->pivot->contract_number }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

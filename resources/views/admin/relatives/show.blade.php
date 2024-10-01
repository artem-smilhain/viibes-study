@extends('admin.layouts.app')
@section('content')
    @include('admin.users._nav')
    <h4><a href="{{ route('admin.relatives.index') }}">Родители</a> / {{ $relative->email }}</h4>
    <div class="row">
<div>
{{--    <a href="{{ route('admin.relatives.edit', $relative) }}" class="btn btn-primary float-left">{{ __('app.edit') }}</a>--}}
    <form method="post" action="{{ route('admin.relatives.destroy', $relative) }}" class="ml-1 float-left">
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
                    <td>{{ $relative->id }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.last_name') }}</th>
                    <td>{{ $relative->last_name_ru }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Фамилия латиницей</th>
                    <td>{{ $relative->last_name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Фамилия при рождении</th>
                    <td>{{ $relative->birth_name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.Name') }}</th>
                    <td>{{ $relative->name_ru }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Имя латиницей</th>
                    <td>{{ $relative->name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Отчество</th>
                    <td>{{ $relative->father_name }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.gender') }}</th>
                    <td>{{ $relative->gender }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Семейное положение</th>
                    <td>{{ $relative->martial_status }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $relative->email }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер телефона</th>
                    <td>{{ $relative->phone }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.birth_date') }}</th>
                    <td>{{ $relative->birth_date }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Город рождения</th>
                    <td>{{ $relative->birth_city }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Страна рождения</th>
                    <td>{{ $relative->birth_country->name ?? '' }}</td>
                </tr>
                <tr><td colspan="2">Место прописки</td></tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.house') }}</th>
                    <td>{{ $relative->house }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер квартиры</th>
                    <td>{{ $relative->apartment }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.city') }}</th>
                    <td>{{ $relative->city }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.country') }}</th>
                    <td>{{ $relative->country->name ?? '' }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.ps') }}</th>
                    <td>{{ $relative->ps }}</td>
                </tr>
                <tr><th colspan="2">Место проживания в данный момент</th></tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.house') }}</th>
                    <td>{{ $relative->actual_house }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер квартиры</th>
                    <td>{{ $relative->actual_apartment }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.city') }}</th>
                    <td>{{ $relative->actual_city }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.country') }}</th>
                    <td>{{ $relative->actual_country->name ?? '' }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">{{ __('app.ps') }}</th>
                    <td>{{ $relative->actual_ps }}</td>
                </tr>
                <tr>
                    <td colspan="2">Паспортные данные</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Гражданство</th>
                    <td>{{ $relative->citizenship }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Национальность</th>
                    <td>{{ $relative->nationality }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Номер паспорта</th>
                    <td>{{ $relative->passport }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Место выдачи паспорта</th>
                    <td>{{ $relative->passport_issue_place }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Дата окончания паспорта</th>
                    <td>{{ $relative->passport_expiration_date }}</td>
                </tr>
                <tr>
                    <th class="text-capitalize">Абитуриенты</th>
                    <td>
                        <ul>
                            @foreach($relative->users as $child)
                                <li><a href="{{ route('admin.users.show', ['user' => $child]) }}">{{ $child->last_name }} {{ $child->name }}</a></li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

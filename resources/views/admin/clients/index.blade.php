@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-4 mb-2">
        <h4 class="">Список абитуриентов </h4>
        <a href="{{ route('admin.users.create', ['create_enrollee' => 1]) }}" class="btn btn-primary mb-3">Добавить пользователя +</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
        <th class="text-capitalize">Имя: </th>
        <th class="text-capitalize">Фамилия: </th>
        <th class="text-capitalize">Email: </th>
        <th class="text-capitalize">Страна: </th>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td class="text-primary"><b><a href="{{route('admin.users.show', ['user' => $client])}}">{{ $client->name }}</a></b></td>
                <td><u>{{ $client->last_name }}</u></td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->country->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

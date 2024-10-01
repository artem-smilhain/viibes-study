@extends('admin.layouts.app')
@section('content')
    <div class="d-inline-flex justify-content-between w-100 align-items-center mt-4 mb-2">
        <h4 class="">Заявки с сайта ⚡️</h4>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-gradient-primary">
            <th class="text-capitalize">Имя: </th>
            <th class="text-capitalize">Контакты: </th>
            <th class="text-capitalize">IP: </th>
            <th class="text-capitalize">Дата: </th>
            <th class="text-capitalize">UTM source: </th>
            <th class="text-capitalize">UTM medium: </th>
            <th class="text-capitalize">UTM campaign: </th>
            <th class="text-capitalize">UTM content: </th>
        </thead>
        <tbody>
        @foreach($leads as $lead)
            <tr>
                <td class="text-primary"><b>{{ $lead->name }}</b></td>
                <td><u>{{ $lead->phone }}</u></td>
                <td>{{ $lead->ip_address }}</td>
                <td>{{ $lead->created_at->format('d.m.Y') }}</td>
                <td>{{ $lead->utm_source }}</td>
                <td>{{ $lead->utm_medium }}</td>
                <td>{{ $lead->utm_campaign }}</td>
                <td>{{ $lead->utm_content }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--<div class="">
        {{ $leads->links() }}
    </div>--}}
@endsection

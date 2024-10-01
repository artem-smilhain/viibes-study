@extends('admin.layouts.app')
@section('content')
    <h4><a href="{{ route('admin.users.index') }}">{{ __('app.Users')}}</a> / <a href="{{ route('admin.users.show', $user) }}">{{ $user->email }}</a> / {{ __('app.edit') }} </h4>
    <div class="container-fluid">
        <div class="row">
            <div><a href="{{ route('admin.users.services.create', $user) }}" class="btn btn-primary">Добавить услугу +</a></div>
            <div class="col-md-12">
                <div class="card card-secondary">
                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <div class="card-header">
                        @include('admin.users._nav')
                    </div>
                        @foreach($services as $service)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{ $service->name_ru }} {{ $service->pivot->contract_number }}</th>
                                    <th>
                                        <a href="{{ route('admin.users.payments.create', [$user, $service]) }}">Добавить оплату</a>
                                    </th>
                                    <th><form method="post" action="{{ route('admin.users.services.destroy', [$user, $service]) }}" class="mr-1">
                                            @csrf
                                            @method('DELETE')
                                            <button class="float-right" onclick="return confirm('{{ __('Are you sure?') }}')">Удалить услугу</button>
                                        </form></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->paymentsByService($service->id) as $payment)
                                    <tr>
                                        <td>{{ date('H:i d.m.Y', strtotime($payment->created_at)) }}</td>
                                        <td>{{ $payment->title }}</td>
                                        <td>{{ date('d.m.Y', strtotime($payment->deadline)) }}</td>
                                        <td>@if ($payment->is_paid) <span class="badge badge-success">Оплачено</span>@else<span class="badge badge-danger">Ожидается платёж</span>@endif</td>
                                        <td>{{ $payment->amount }}</td>
                                        <td class="td-actions d-inline-flex w-100 align-middle">
                                            <form method="post" action="{{ route('admin.users.payments.destroy', [$user, $payment]) }}" class="mr-1">
                                                @csrf
                                                @method('DELETE')
                                                <button class="float-right" onclick="return confirm('{{ __('Are you sure?') }}')">
                                                    Удалить оплату
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        new tempusDominus.TempusDominus(document.getElementById('deadline'), {
//                localization: ru
//            defaultDate: '{{ date('Y') - 16 }}',
            display: {
                viewMode: 'years',
                components: {
                    decades: true,
                    year: true,
                    month: true,
                    date: true,
                    hours: false,
                    minutes: false,
                    seconds: false,
                }
            },
            localization: {
                format: 'dd.MM.yyyy',
            }
        });
    </script>
@append

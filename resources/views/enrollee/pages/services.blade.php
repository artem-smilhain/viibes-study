@extends('applicant.layouts.app')
@section('body')
    <section id="services">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Услуги и оплата ⚡</h1>
            <div id="cabinet_breadcrumbs">
                <span><a href="{{ route('enrollee.index') }}">Главная</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span>Услуги и оплата</span>
            </div>
            <div class="services">
                @foreach($services as $service)
                    <div class="service">
                        <h2>{{ $service->name_ru }} 🎓</h2>
                        <p class="viibes__text_normal">Договор {{ $service->pivot->contract_number }}</p>
                        <div class="payments">
                            @foreach($enrollee->paymentsByService($service->id) as $payment)
                                <div class="payment" style="background: #06B6481A;">
                                    <div>
                                        <h3>{{ $payment->title }}</h3>
                                        @if ($payment->is_paid)
                                        <h4 style="color: #06B648">Оплата принята</h4>
                                        @else
                                            <h4 style="color: #7360F2">Срок оплаты до {{ date('d.m.Y', strtotime($payment->deadline)) }}</h4>
                                        @endif
                                    </div>
                                    <p style="color: #06B648">{{ intval($payment->amount) }}€</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


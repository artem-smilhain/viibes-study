@extends('applicant.layouts.app')
@section('body')
    <section id="services">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Услуги и оплата ⚡</h1>
            <div id="cabinet_breadcrumbs">
                <span><a href="/my">Главная</a></span>
                <div class="viibes__footer_middle_list_circle"></div>
                <span>Услуги и оплата</span>
            </div>
            <div class="services">
                <div class="service">
                    <h2>Комплексное поступление 🎓</h2>
                    <p class="viibes__text_normal">Договор #01/120923/01 от 12.09.2023</p>
                    <div class="payments">
                        <div class="payment" style="background: #06B6481A;">
                            <div>
                                <h3>Первая оплата (≈ 25%)</h3>
                                <h4 style="color: #06B648">Оплата принята</h4>
                            </div>
                            <p style="color: #06B648">450€</p>
                        </div>
                        <div class="payment" style="background: #7360F21A;">
                            <div>
                                <h3>Вторая оплата (≈ 25%)</h3>
                                <h4 style="color: #7360F2">Срок оплаты до 02.04.2023</h4>
                            </div>
                            <p style="color: #7360F2">450€</p>
                        </div>
                        <div class="payment" style="background: #7360F21A;">
                            <div>
                                <h3>Третья оплата (≈ 30%)</h3>
                                <h4 style="color: #7360F2">Срок оплаты до 02.04.2023</h4>
                            </div>
                            <p style="color: #7360F2">550€</p>
                        </div>
                        <div class="payment" style="background: #7360F21A;">
                            <div>
                                <h3>Четвертая оплата (≈ 20%)</h3>
                                <h4 style="color: #7360F2">Срок оплаты до 02.04.2023</h4>
                            </div>
                            <p style="color: #7360F2">340€</p>
                        </div>
                    </div>
                </div>
                <div class="service">
                    <h2>Курсы словацкого языка 🇸🇰</h2>
                    <p class="viibes__text_normal">Договор #01/120923/01 от 12.09.2023</p>
                    <div class="payments">
                        <div class="payment" style="background: #7360F21A;">
                            <div>
                                <h3>Полная оплата (100%)</h3>
                                <h4 style="color: #7360F2">Срок оплаты до 02.04.2023</h4>
                            </div>
                            <p style="color: #7360F2">700€</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


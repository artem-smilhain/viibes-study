@extends('client.layouts.app')
@section('meta-tags')
    <title>Тариф услуг «{{ $name }}». VIIBES Study</title>
    <meta property="og:title" content="Тариф услуг «{{ $name }}». VIIBES Study"/>
    <meta name="description" content="Поступление в Словакию. Тариф услуг «{{ $name }}»: что входит и не входит в тариф, стоимость тарифа, условия оплаты, дополнительные услуги.">
    <meta property="og:description" content="Поступление в Словакию. Тариф услуг «{{ $name }}»: что входит и не входит в тариф, стоимость тарифа, условия оплаты, дополнительные услуги."/>
@endsection
@section('body_class') service_page @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Тариф услуг {{ $name }} ⭐️</h1>
            <h3 class="viibes__h1_sub viibes__color_purple" style="margin: 1rem 0 -1rem 0;">Комплексное поступление в университет Словакии с подготовительными языковыми курсами</h3>
            @include('client.blocks.breadcrumbs')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        @include('client.pages.services.blocks.tariff-top')
        <div class="viibes__bg_white service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">01.</span> Комплексные консультационные услуги:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Предварительная консультация о бесплатном обучении в Словакии. Общая информация о стране, ее городах и системе образования. Преимущества поступать абитуриентам именно в словацкие университеты в 2023 году</div>
                    <div class="true"><span class="ico"></span>Легализация пребывания студента в Словакии на период обучения</div>
                    <div class="true"><span class="ico"></span>Возможность обучения и стажировки по международным программам обмена студентов</div>
                    <div class="true"><span class="ico"></span>Возможность получение стипендий и грантов в словацких университетах</div>
                    <div class="true"><span class="ico"></span>Ответы на вопросы клиента относительно обучения и проживания в Словакии</div>
                </div>
            </div>
        </div>
        <div class="viibes__bg_gray service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">02.</span> Выбор специальности:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Помощь в выборе направления обучения (в случае необходимости)</div>
                    <div class="true"><span class="ico"></span>Помощь в выборе города, университета и специальности на основе пожеланий абитуриента</div>
                    <div class="true"><span class="ico"></span>Предоставление актуальной и максимально подробной информации по 5 выбранным специальностям</div>
                </div>
            </div>
        </div>
        <div class="viibes__bg_white service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">03.</span> Подготовка и оформление пакета документов в соответствии с требованиями выбранного университета, апостилизация и нострификация:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Предоставление актуального списка необходимых для подачи в деканат документов</div>
                    <div class="true"><span class="ico"></span>Подготовка документов и их дальнейшая подача в соответствии с требованиями и сроками выбранного университета и факультета (каждый ВУЗ и факультет имеет свои условия для подачи)</div>
                    <div class="true"><span class="ico"></span>Эквивалентность оценок: перенос результатов по обучению на словацкую систему оценивания среднего образования (поступление на бакалавриат) и высшего образования (поступление на магистратуру)</div>
                    <div class="true"><span class="ico"></span>Предоставление официальных судебных переводов и нотариальное заверение всех документов у словацкого нотариуса</div>
                    <div class="true"><span class="ico"></span>Подача заявлений на нострификацию документов в министерство образования Словацкой Республики</div>
                    <div class="true"><span class="ico"></span>Оплата госпошлин за нострификацию (“колока”)</div>
                    <div class="true"><span class="ico"></span>Помощь в составлении и оформлении сопроводительных документов из личного дела: автобиография, резюме, мотивационное письмо кандидата на поступление и других необходимых документов</div>
                    <div class="true"><span class="ico"></span>Подача заявления и полного пакета документов в приемную комиссию университета</div>
                    <div class="true"><span class="ico"></span>Подача второго заявления на вторую специальность (вторым можно выбрать специальность другого факультета или университета)</div>
                    <div class="true"><span class="ico"></span>Услуги словацкой почты для отправки всех необходимых документов в ВУЗ и в другие учреждения по территории Словакии</div>
                    <div class="true"><span class="ico"></span>Регистрация абитуриента в необходимых университетских системах</div>
                    <div class="true"><span class="ico"></span>Заполнение всех необходимых анкет на словацком языке</div>
                    <div class="true"><span class="ico"></span>Помощь в регистрации на экзамены (по необходимости)</div>
                    <div class="true"><span class="ico"></span>Оплата судебных переводов </div>
                    <div class="true"><span class="ico"></span>Оплата нотариальных услуг</div>
                </div>
            </div>
        </div>
        <div class="viibes__bg_gray service_page_item" style="background: #F0FCF4 !important;">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">04.</span> Подготовительные онлайн-курсы словацкого языка</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Онлайн-курсы словацкого языка с преподавателем на протяжении 5 месяцев по 3 раза в неделю</div>
                    <div class="true"><span class="ico"></span>Практикующие разговорные занятия на словацком языке со спикером</div>
                    <div class="true"><span class="ico"></span>Дополнительные авторские материалы для изучения языка</div>
                    <div class="true"><span class="ico"></span>Сдача внутреннего экзамена и получение сертификата о знании языка по окончании курсов</div>
                </div>
            </div>
        </div>
        <div class="viibes__bg_gray service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">05.</span> Контроль документов, коммуникация с университетом и управление процессом поступления:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Ведение коммуникации с представителями выбранного университета и факультета на всех этапах поступления абитуриента</div>
                    <div class="true"><span class="ico"></span>Контроль правильности всех документов, переводов, справок, их подачи и получения в соответствии со сроками и требованиями ВУЗа</div>
                </div>
            </div>
        </div>
        <div class="viibes__bg_white service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">06.</span> Общежитие:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Заранее подаем заявление на предоставление общежития, оформление заявлений для поселения (мы не можем гарантировать получение места в общежитии и класс выделенной комнаты)</div>
                    <div class="true"><span class="ico"></span>Консультации и рекомендации по покупке и установке электротехники в соответствии с правилами и нормами общежития выбранного университета</div>
                </div>
            </div>
        </div>
        <div class="viibes__bg_gray service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">07.</span> Миграционные услуги и помощь в получении визы ЕС:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Помощь и консультирование в записи на подачу документов на визу (если виза необходима для граждан вашей страны)</div>
                    <div class="true"><span class="ico"></span>Помощь и консультирование в заполнении анкеты и оформления документов для подачи на визу Словацкой Республики</div>
                    <div class="true"><span class="ico"></span>Консультации о порядке, требованиях и сроках подачи на ВНЖ</div>
                    <div class="true"><span class="ico"></span>Помощь и консультирование об изготовлении справки о несудимости</div>
                    <div class="true"><span class="ico"></span>Оформление документов на подачу на ВНЖ</div>
                    <!--<div class="false"><span class="ico"></span>Бесплатная вторая заявка на подачу на ВНЖ в миграционную полицию</div>-->
                </div>
            </div>
        </div>
        <div class="viibes__bg_white service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">08.</span> Сопровождение по приезду:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Личное сопровождение при заселении в общежитие</div>
                    <div class="true"><span class="ico"></span>Личное сопровождение при покупке SIM-карты</div>
                    <div class="true"><span class="ico"></span>Личное сопровождение при оформлении банковского счета и получение карты</div>
                    <div class="true"><span class="ico"></span>Личное сопровождение при подаче ВНЖ в миграционной полиции</div>
                    <div class="true"><span class="ico"></span>Личное сопровождение при прохождении обязательной медкомиссии</div>
                    <div class="true"><span class="ico"></span>Консультирование в течении первого семестра</div>
                </div>
            </div>
        </div>
        <div class="viibes__bg_gray service_page_item">
            <div class="viibes__wrap">
                <h3 class="viibes__h3"><span class="viibes__color_purple">09.</span> Развлечения:</h3>
                <div class="viibes__text_medium service_page_item_list">
                    <div class="true"><span class="ico"></span>Организованная встреча с кураторами и другими абитуриентам для знакомства. Квиз и настольные игры.</div>
                </div>
            </div>
        </div>
        @include('client.pages.services.blocks.tariff-bottom')
    </section>
    @include('client.blocks.seo.countries')
@endsection
@section('schema')
    {{--<script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Университеты Словакии. Список ВУЗов Словакии. VIIBES Study",
            "description": "Все университеты Словакии. Лучшие университеты Словакии. Стипендии, стоимость обучения и условия поступления. Факультеты и специальности словацких ВУЗов",
            "url": "{{ route('universities') }}",
            "inLanguage": "ru"
        }
    </script>--}}
@endsection


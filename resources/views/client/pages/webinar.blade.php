@extends('client.layouts.app')
@section('meta-tags')
    <title>Вебинар: как поступить в Словакию. VIIBES Study</title>
    <meta property="og:title" content="Вебинар: как поступить в Словакию. VIIBES Study"/>
    <meta name="description" content="Бесплатный вебинар о поступлении и жизни в Словакии. Как получить образование в Словакии бесплатно? Плюсы и минусы учиться в Словакии, процесс поступления, какие документы нужны, система образование в Словакии, расходы на жизнь студента в Словакии, услуги VIIBES Study.">
    <meta property="og:description" content="Бесплатный вебинар о поступлении и жизни в Словакии. Как получить образование в Словакии бесплатно? Плюсы и минусы учиться в Словакии, процесс поступления, какие документы нужны, система образование в Словакии, расходы на жизнь студента в Словакии, услуги VIIBES Study."/>
@endsection
@section('body_class') viibes__webinar @endsection
@section('content')
    <section class="viibes__webinar_preview">
        <img src="{{ URL::asset('/assets/client/images/webinar/main.jpg') }}"
             alt="флаги словакии и евросоюза" title="флаги Словакии и Евросоюза" class="viibes__webinar_preview_image">
        <div class="viibes__webinar_preview_gradient"></div>
        <div class="viibes__wrap">
            <h1 class="viibes__h2 viibes__color_white">
                Вебинар «Бесплатное высшее образование в Словакии 2023 🇸🇰 🇪🇺»
            </h1>
            <p class="viibes__h1_sub viibes__color_white">
                23 декабря в 19:00 (Киев) / 18:00 (Братислава). Длительность 45 минут.
                <br>
                Спикер: Полина Паращенко - специалист по поступлениям в ВУЗы Словакии.
            </p>
            <div class="viibes__webinar_preview_buttons">
                <a href="#cta_form_question" class="viibes__btn_medium"
                   title="Перейти к регистрации на вебинар">
                    Зарегистрироваться
                </a>
                <a href="#viibes__webinar_program"
                   class="viibes__btn_medium viibes__bg_white viibes__color_purple"
                   title="Смотреть программу вебинара">
                    Программа
                </a>
            </div>
        </div>
    </section>

    <section class="viibes__webinar_program" id="viibes__webinar_program">
        <div class="viibes__wrap">
            <div class="viibes__webinar_program_content">
                <h2 class="viibes__h2 viibes__color_black">Программа вебинара:</h2>
                <div class="viibes__webinar_program_content_list">
                    <div class="viibes__webinar_program_content_list_item">
                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                        <p class="viibes__text_medium">
                            Словакия: о стране, языке, зарплатах, плюсы и минусы жизни в Словакии
                        </p>
                    </div>
                    <div class="viibes__webinar_program_content_list_item">
                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                        <p class="viibes__text_medium">
                            Высшее образование в Словакии: система образования, преимущества обучения в Словакии, ВУЗы, общежития
                        </p>
                    </div>
                    <div class="viibes__webinar_program_content_list_item">
                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                        <p class="viibes__text_medium">
                            Расходы иностранного студента на проживание в Словакии
                        </p>
                    </div>
                    <div class="viibes__webinar_program_content_list_item">
                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                        <p class="viibes__text_medium">
                            Как поступить? Процесс поступления. Когда нужно начинать подготовку?
                        </p>
                    </div>
                    <div class="viibes__webinar_program_content_list_item">
                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                        <p class="viibes__text_medium">
                            Поступление в Словакию вместе с VIIBES Study. Какие услуги мы предоставляем
                        </p>
                    </div>
                    <div class="viibes__webinar_program_content_list_item">
                        <img src="{{ URL::asset('/assets/client/images/components/ok.svg') }}" alt="иконка пункт">
                        <p class="viibes__text_medium">
                            В конце вебинара ответим на все ваши вопросы
                        </p>
                    </div>
                </div>
            </div>
            <img src="{{ URL::asset('/assets/client/images/webinar/university.jpg') }}"
                 alt="жилинский университет в жилине" title="Жилинский университет в Жилине" class="viibes__webinar_program_image">
        </div>
    </section>
    <section id="cta_form_question" class="viibes__bg_purple viibes__cta_form">
        <div class="viibes__wrap">
            <h2 class="viibes__h2">Бесплатная регистрация на
                <span class="viibes__color_purple">вебинар 🤟</span>
            </h2>
            <p class="viibes__h2_sub">23 декабря в 19:00 (Киев). Ссылку на вебинар вы получите на номер телефона или Email, введенные ниже при регистрации </p>
            <form class="viibes__form" method="POST" action="{{ route('lead.store') }}" id="viibes__form"
                  onsubmit="document.getElementById('viibes__modal_loader').style.display = 'flex'">
                @csrf
                {{-- name + phone --}}
                <input type="text" name="name" class="viibes__form_name" placeholder="Имя:" required>
                <input type="tel" name="phone" class="viibes__form_phone" placeholder="Телефон:" required>
                <input type="email" name="email" class="viibes__form_email" placeholder="Email:" required>
                {{-- current page --}}
                <input type="hidden" name="page_route" value="{{ url()->current() }}">
                {{-- utm --}}
                <input type="hidden" name="utm_source" value="{{ app('request')->input('utm_source') }}">
                <input type="hidden" name="utm_medium" value="{{ app('request')->input('utm_medium') }}">
                <input type="hidden" name="utm_campaign" value="{{ app('request')->input('utm_campaign') }}">
                <input type="hidden" name="utm_content" value="{{ app('request')->input('utm_content') }}">
                <input type="hidden" name="utm_term" value="{{ app('request')->input('utm_term') }}">
                {{-- form type --}}
                <input type="hidden" name="type" value="webinar">
                {{-- send button --}}
                <button class="viibes__btn_large">
                    Зарегистрироваться
                </button>
            </form>
        </div>
    </section>
    @include('client.blocks.cards.benefits')
    <section id="cta_form_question" class="viibes__bg_purple viibes__cta_form">
        <div class="viibes__wrap">
            <h2 class="viibes__h2">Бесплатная регистрация на
                <span class="viibes__color_purple">вебинар 🤟</span>
            </h2>
            <p class="viibes__h2_sub">23 декабря в 19:00 (Киев). Ссылку на вебинар вы получите на номер телефона или Email, введенные ниже при регистрации </p>
            <form class="viibes__form" method="POST" action="{{ route('lead.store') }}" id="viibes__form"
                  onsubmit="document.getElementById('viibes__modal_loader').style.display = 'flex'">
                @csrf
                {{-- name + phone --}}
                <input type="text" name="name" class="viibes__form_name" placeholder="Имя:" required>
                <input type="tel" name="phone" class="viibes__form_phone" placeholder="Телефон:" required>
                <input type="email" name="email" class="viibes__form_email" placeholder="Email:" required>
                {{-- current page --}}
                <input type="hidden" name="page_route" value="{{ url()->current() }}">
                {{-- utm --}}
                <input type="hidden" name="utm_source" value="{{ app('request')->input('utm_source') }}">
                <input type="hidden" name="utm_medium" value="{{ app('request')->input('utm_medium') }}">
                <input type="hidden" name="utm_campaign" value="{{ app('request')->input('utm_campaign') }}">
                <input type="hidden" name="utm_content" value="{{ app('request')->input('utm_content') }}">
                <input type="hidden" name="utm_term" value="{{ app('request')->input('utm_term') }}">
                {{-- form type --}}
                <input type="hidden" name="type" value="webinar">
                {{-- send button --}}
                <button class="viibes__btn_large">
                    Зарегистрироваться
                </button>
            </form>
        </div>
    </section>
    @include('client.blocks.reviews')
@endsection
@section('scripts')
    <script src="{{ asset('assets/client/js/libraries/slider.min.js') }}"></script>
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Бесплатное высшее образование в Словакии. Вебинар",
            "description": "Бесплатное высшее образование в Словакии. Вебинар {{ env('ADMISSION_YEAR') }}",
            "url": "{{ route('webinar') }}",
            "inLanguage": "ru"
        }
    </script>
    <script type="application/ld+json">
    {
         "@context": "https://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{ env('APP_URL') }}",
            "name": "Главная"
            }
          },
          {
           "@type": "ListItem",
           "position": 2,
           "item":
           {
            "@id": "{{ route('webinar') }}",
            "name": "Вебинар"
            }
          }
         ]
        }
    </script>
@endsection

<section class="viibes__cards" id="cards_benefits">
    <div class="viibes__wrap">
        <h2 class="viibes__h2">
            Обучение в Словакии - <span class="viibes__color_purple">лучший вариант</span><br class="viibes__desktop">
            @if(Route::current()->getName() !== 'belarus')
                для абитуриента из СНГ
            @else
                для абитуриента из Белаурси
            @endif
        </h2>
        <p class="viibes__h2_sub">Это самый доступный вариант получения высшего образования за рубежом </p>
        <!-- PC версия -->
        <div id="" class="viibes__desktop">
            <div class="viibes__cards_main">
                <div class="viibes__cards_column">
                    <div class="viibes__cards_item"> <!--swiper-slide-->
                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/flags.jpg') }}"
                             alt="Флаги Словакии и Евросоюза" title="Флаги Словакии и Евросоюза" class="viibes__cards_item_top_image">
                        <h3 class="viibes__h4">Европейский диплом - гарантия перспективного будущего абитуриента</h3>
                        <p class="viibes__text_normal">Обладание дипломом Евросоюза обеспечивает успешное трудоустройство и перспективную карьеру как за рубежом, так и на родине</p>
                    </div>
                    <div class="viibes__cards_item">
                        <div class="viibes__cards_item_twin_images">
                            <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/car.jpg') }}"
                                 alt="Dupai expo TUKE" title="Dupai expo TUKE Strojnicka fakulta">
                            <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/matador.jpg') }}"
                                 alt="Dupai expo TUKE" title="Dupai expo TUKE Strojnicka fakulta">
                        </div>
                        <h3 class="viibes__h4">Международные конкурсы и стажировки по Erasmus+</h3>
                        <p class="viibes__text_normal">Международные конкурсы, хакатоны, киберматчи и другие мероприятия - неотъемлемая часть студентческой жизни в Словакии. Ваш ребенок сможет податься на стажировку или обучение в другой стране по программе Erasmus+</p>
                    </div>
                </div>
                <div class="viibes__cards_column">
                    <div class="viibes__cards_item">
                        <h3 class="viibes__h4">Образование для иностранцев - бесплатное</h3>
                        <p class="viibes__text_normal">Во всех государственных ВУЗах Словакии высшее образование полностью бесплатное, а на многих факультетах отсутствуют даже вступительные экзамены</p>
                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/smile-group.jpg') }}"
                             alt="Иностранные студенты" title="Иностранные студенты" class="viibes__cards_item_bottom_image viibes__cards_item_bottom_image_radius">
                    </div>
                    <div class="viibes__cards_item">
                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/flag-icon.png') }}"
                             alt="флаг словакии словацкий флаг" title="Флаг Словакии" class="viibes__cards_item_icon">
                        <h3 class="viibes__h4"><span class="viibes__color_purple">Slovenský jazyk</span>  - самый простой в изучении язык для абитуриентов из СНГ </h3>
                        <p class="viibes__text_normal">Словацкий и русский языки принадлежат к одной языковой семье. В словацком алфавите буквы произносятся так же, как и пишутся, а многие слова похожи, отличаясь лишь небольшими деталями. Поэтому изучение словацкого языка дается гораздо легче. Однако мы рекомендуем начинать изучение языка еще до переезда, чтобы облегчить адаптацию и более успешно вливаться в местное общество</p>
                    </div>
                </div>
                <div class="viibes__cards_column">
                    <div class="viibes__cards_item">
                        <div class="viibes__cards_item_country">
                            <div class="viibes__cards_item_country_list">
                                <div class="viibes__cards_item_country_list_item">
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/france.jpg') }}"
                                         alt="Эйфелева башня париж" title="Эйфелева башня париж" class="viibes__cards_item_country_list_item_image">
                                    <div class="viibes__cards_item_country_list_item_name">
                                        <span>Франция</span>
                                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/france-icon.png') }}"
                                             alt="Флаг Франции" title="Флаг Франции">
                                    </div>
                                </div>
                                <div class="viibes__cards_item_country_list_item">
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/italy.jpg') }}"
                                         alt="Манарола Италия" title="Манарола Италия" class="viibes__cards_item_country_list_item_image">
                                    <div class="viibes__cards_item_country_list_item_name">
                                        <span>Италия</span>
                                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/italy-icon.png') }}"
                                             alt="Флаг Италии" title="Флаг Италии">
                                    </div>
                                </div>
                                <div class="viibes__cards_item_country_list_item">
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/germany.jpg') }}"
                                         alt="Бранденбургские ворота" title="Бранденбургские ворота" class="viibes__cards_item_country_list_item_image">
                                    <div class="viibes__cards_item_country_list_item_name">
                                        <span>Германия</span>
                                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/germany-icon.png') }}"
                                             alt="Флаг Германии" title="Флаг Германии">
                                    </div>
                                </div>
                                <div class="viibes__cards_item_country_list_item">
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/poland.jpg') }}"
                                         alt="Центр Варшавы" title="Центр Варшавы" class="viibes__cards_item_country_list_item_image">
                                    <div class="viibes__cards_item_country_list_item_name">
                                        <span>Польша</span>
                                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/poland-icon.png') }}"
                                             alt="Флаг Польши" title="Флаг Польши">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="viibes__h4">Возможность работать и дешево путешествовать по Европе во время учебы</h3>
                        <p class="viibes__text_normal">Студенты в Словакии имеют привилегию пользоваться поездами по стране абсолютно бесплатно, а также получать различные скидки на музеи, кинотеатры, аквапарки и другие мероприятия по всему Евросоюзу</p>
                    </div>
                    <div class="viibes__cards_item">
                        <h3 class="viibes__h4">Трудоустройство в любой точке мира</h3>
                        <p class="viibes__text_normal">C будущим дипломом европейского образца выпускник может трудоустроиться почти в любой точке мира</p>
                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/smile-reading.jpg') }}"
                             alt="Девушка с планшетом на фоне Нью-Йорка" title="Девушка с планшетом на фоне Нью-Йорка" class="viibes__cards_item_bottom_image viibes__cards_item_bottom_image_radius">
                    </div>
                </div>
            </div>
        </div>
        <!-- Мобильный слайдер -->
        <div id="cards_benefits_slider" class="viibes__mobile">
            <div class="viibes__cards_main swiper-wrapper">
                <div class="viibes__cards_item swiper-slide"> <!--swiper-slide-->
                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/flags.jpg') }}"
                         alt="Флаги Словакии и Евросоюза" title="Флаги Словакии и Евросоюза" class="viibes__cards_item_top_image">
                    <h3 class="viibes__h4">Европейский диплом - гарантия перспективного будущего абитуриента</h3>
                    <p class="viibes__text_normal">Обладание дипломом Евросоюза обеспечивает успешное трудоустройство и перспективную карьеру как за рубежом, так и на родине</p>
                </div>
                <div class="viibes__cards_item swiper-slide">
                    <div class="viibes__cards_item_twin_images">
                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/car.jpg') }}"
                             alt="Dupai expo TUKE" title="Dupai expo TUKE Strojnicka fakulta">
                        <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/matador.jpg') }}"
                             alt="Dupai expo TUKE" title="Dupai expo TUKE Strojnicka fakulta">
                    </div>
                    <h3 class="viibes__h4">Международные конкурсы и стажировки по Erasmus+</h3>
                    <p class="viibes__text_normal">В Словакии международные конкурсы, хакатоны, киберматчи и другие мероприятия являются неотъемлемой частью студенческой жизни. Учащиеся могут податься на стажировку или обучение в другой стране через программу Erasmus+</p>
                </div>
                <div class="viibes__cards_item swiper-slide">
                    <h3 class="viibes__h4">Образование для иностранцев - бесплатное</h3>
                    <p class="viibes__text_normal">Во всех государственных ВУЗах Словакии высшее образование полностью бесплатное, а на многих факультетах отсутствуют даже вступительные экзамены</p>
                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/smile-group.jpg') }}"
                         alt="Иностранные студенты" title="Иностранные студенты" class="viibes__cards_item_bottom_image viibes__cards_item_bottom_image_radius">
                </div>
                <div class="viibes__cards_item swiper-slide">
                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/flag-icon.png') }}"
                         alt="флаг словакии словацкий флаг" title="Флаг Словакии" class="viibes__cards_item_icon">
                    <h3 class="viibes__h4"><span class="viibes__color_purple">Slovenský jazyk</span>  - самый простой в изучении язык для абитуриентов из СНГ </h3>
                    <p class="viibes__text_normal">Словацкий и русский языки принадлежат к одной языковой семье. В словацком алфавите буквы произносятся так же, как и пишутся, а многие слова похожи, отличаясь лишь небольшими деталями. Поэтому изучение словацкого языка дается гораздо легче. <!--Однако мы рекомендуем начинать изучение языка еще до переезда, чтобы облегчить адаптацию и более успешно вливаться в местное общество--></p>
                </div>
                <div class="viibes__cards_item swiper-slide">
                    <div class="viibes__cards_item_country">
                        <div class="viibes__cards_item_country_list">
                            <div class="viibes__cards_item_country_list_item">
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/france.jpg') }}"
                                     alt="Эйфелева башня париж" title="Эйфелева башня париж" class="viibes__cards_item_country_list_item_image">
                                <div class="viibes__cards_item_country_list_item_name">
                                    <span>Франция</span>
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/france-icon.png') }}"
                                         alt="Флаг Франции" title="Флаг Франции">
                                </div>
                            </div>
                            <div class="viibes__cards_item_country_list_item">
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/italy.jpg') }}"
                                     alt="Манарола Италия" title="Манарола Италия" class="viibes__cards_item_country_list_item_image">
                                <div class="viibes__cards_item_country_list_item_name">
                                    <span>Италия</span>
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/italy-icon.png') }}"
                                         alt="Флаг Италии" title="Флаг Италии">
                                </div>
                            </div>
                            <div class="viibes__cards_item_country_list_item">
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/germany.jpg') }}"
                                     alt="Бранденбургские ворота" title="Бранденбургские ворота" class="viibes__cards_item_country_list_item_image">
                                <div class="viibes__cards_item_country_list_item_name">
                                    <span>Германия</span>
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/germany-icon.png') }}"
                                         alt="Флаг Германии" title="Флаг Германии">
                                </div>
                            </div>
                            <div class="viibes__cards_item_country_list_item">
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/poland.jpg') }}"
                                     alt="Центр Варшавы" title="Центр Варшавы" class="viibes__cards_item_country_list_item_image">
                                <div class="viibes__cards_item_country_list_item_name">
                                    <span>Польша</span>
                                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/poland-icon.png') }}"
                                         alt="Флаг Польши" title="Флаг Польши">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="viibes__h4">Возможность работать и дешево путешествовать по Европе во время учебы</h3>
                    <p class="viibes__text_normal">Студенты в Словакии имеют привилегию пользоваться поездами по стране абсолютно бесплатно, а также получать различные скидки по всему Евросоюзу</p>
                </div>
                <div class="viibes__cards_item swiper-slide">
                    <h3 class="viibes__h4">Трудоустройство в любой точке мира</h3>
                    <p class="viibes__text_normal">C будущим дипломом европейского образца выпускник может трудоустроиться почти в любой точке мира</p>
                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/smile-reading.jpg') }}"
                         alt="Девушка с планшетом на фоне Нью-Йорка" title="Девушка с планшетом на фоне Нью-Йорка" class="viibes__cards_item_bottom_image viibes__cards_item_bottom_image_radius">
                </div>
            </div>
            <div id="cards_benefits_slider__pagination" class="swiper-pagination cards-pagination"></div>
        </div>
        {{--<div class="viibes__cards_main viibes__mobile">
            <div class="viibes__cards_item">
                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/flags.jpg') }}"
                     alt="Флаги Словакии и Евросоюза" title="Флаги Словакии и Евросоюза" class="viibes__cards_item_top_image">
                <h4 class="viibes__h4">Европейский диплом - гарантия перспективного будущего вашего ребенка</h4>
                <p class="viibes__text_normal">Наличие диплома Евросоюза - гарантия успешного трудоустройства и перспективной карьеры как за рубежом, так и дома</p>
            </div>
            <div class="viibes__cards_item">
                <div class="viibes__cards_item_twin_images">
                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/car.jpg') }}"
                         alt="Dupai expo TUKE" title="Dupai expo TUKE Strojnicka fakulta">
                    <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/matador.jpg') }}"
                         alt="Dupai expo TUKE" title="Dupai expo TUKE Strojnicka fakulta">
                </div>
                <h4 class="viibes__h4">Международные конкурсы и стажировка по Erasmus+</h4>
                <p class="viibes__text_normal">Международные конкурсы, хакатоны, киберматчи и другие многочисленные мероприятия - неотъемлемая часть студентческой жизни в Словакии. Ваш ребенок сможет податься на стажировку или обучение в другой стране по программе Erasmus+</p>
            </div>
            <div class="viibes__cards_item">
                <h4 class="viibes__h4">Бесплатное образование в Евросоюзе без вступительных экзаменов</h4>
                <p class="viibes__text_normal">Во всех государственных ВУЗах Словакии образование полностью бесплатное, а на многих факультетах нет даже экзаменов</p>
                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/smile-group.jpg') }}"
                     alt="Иностранные студенты" title="Иностранные студенты" class="viibes__cards_item_bottom_image viibes__cards_item_bottom_image_radius">
            </div>
            <div class="viibes__cards_item">
                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/flag-icon.png') }}"
                     alt="флаг словакии словацкий флаг" title="Флаг Словакии" class="viibes__cards_item_icon">
                <h4 class="viibes__h4"><span class="viibes__color_purple">Slovenský jazyk</span>  - самый простой в изучении язык для абитуриентов из СНГ </h4>
                <p class="viibes__text_normal">Словацкий и русский принадлежат к одной языковой семье. Буквы словацкого алфавита читаются так же, как и пишутся, а многие слова похожи, имея лишь маленькие отличия. Потому людям из Беларуси легче всего даётся изучение именно словацкого языка. Но мы советуем начать учить язык еще до переезда, чтобы легче социализироваться в обществе</p>
            </div>
            <div class="viibes__cards_item">
                <div class="viibes__cards_item_country">
                    <div class="viibes__cards_item_country_list">
                        <div class="viibes__cards_item_country_list_item">
                            <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/france.jpg') }}"
                                 alt="Эйфелева башня париж" title="Эйфелева башня париж" class="viibes__cards_item_country_list_item_image">
                            <div class="viibes__cards_item_country_list_item_name">
                                <span>Франция</span>
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/france-icon.png') }}"
                                     alt="Флаг Франции" title="Флаг Франции">
                            </div>
                        </div>
                        <div class="viibes__cards_item_country_list_item">
                            <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/italy.jpg') }}"
                                 alt="Манарола Италия" title="Манарола Италия" class="viibes__cards_item_country_list_item_image">
                            <div class="viibes__cards_item_country_list_item_name">
                                <span>Италия</span>
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/italy-icon.png') }}"
                                     alt="Флаг Италии" title="Флаг Италии">
                            </div>
                        </div>
                        <div class="viibes__cards_item_country_list_item">
                            <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/germany.jpg') }}"
                                 alt="Бранденбургские ворота" title="Бранденбургские ворота" class="viibes__cards_item_country_list_item_image">
                            <div class="viibes__cards_item_country_list_item_name">
                                <span>Германия</span>
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/germany-icon.png') }}"
                                     alt="Флаг Германии" title="Флаг Германии">
                            </div>
                        </div>
                        <div class="viibes__cards_item_country_list_item">
                            <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/poland.jpg') }}"
                                 alt="Центр Варшавы" title="Центр Варшавы" class="viibes__cards_item_country_list_item_image">
                            <div class="viibes__cards_item_country_list_item_name">
                                <span>Польша</span>
                                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/poland-icon.png') }}"
                                     alt="Флаг Польши" title="Флаг Польши">
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="viibes__h4">Возможность работать и дешево путешествовать по Европе во время учебы</h4>
                <p class="viibes__text_normal">Студентам Словакии <span class="viibes__color_purple">поезда по стране</span> абсолютно бесплатные, а <span class="viibes__color_purple">вместе со студенческим</span> Вы получите скидки в музеях, кино, аквапарках и т.д. по всему Евросоюзу</p>
            </div>
            <div class="viibes__cards_item">
                <h4 class="viibes__h4">Трудоустройство в любой точке Мира</h4>
                <p class="viibes__text_normal">C будущим дипломом европейского образца ваш ребенок сможет трудоустроиться почти в любой точке Мира </p>
                <img src="{{ URL::asset('/assets/client/images/blocks/cards/benefits/smile-reading.jpg') }}"
                     alt="Девушка с планшетом на фоне Нью-Йорка" title="Девушка с планшетом на фоне Нью-Йорка" class="viibes__cards_item_bottom_image viibes__cards_item_bottom_image_radius">
            </div>
        </div>--}}
        {{--<a href="{{ route('universities') }}"
           class="viibes__btn_link" title="Смотреть весь список университетов Словакии">
            Смотреть университеты Словакии
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>--}}
        {{--<a href="#" class="viibes__btn_link">Узнать больше об образовании в Словакии <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка"></a>--}}
    </div>
</section>

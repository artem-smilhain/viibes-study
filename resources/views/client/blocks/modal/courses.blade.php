<section class="viibes__modal_form" id="viibes__modal_courses">
    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="viibes__modal_close viibes__modal_form_close" id="viibes__modal_courses_close">
        <path d="M11.6412 9.31351C11.1771 9.31364 10.7235 9.45219 10.3384 9.71145C9.95341 9.97072 9.65446 10.3389 9.47979 10.769C9.30512 11.199 9.26268 11.6714 9.35789 12.1257C9.4531 12.58 9.68163 12.9956 10.0143 13.3194L24.6979 28.003L10.0143 42.6866C9.79034 42.9016 9.61155 43.1591 9.48839 43.4441C9.36522 43.729 9.30015 44.0357 9.297 44.3461C9.29384 44.6566 9.35265 44.9645 9.46999 45.2519C9.58733 45.5393 9.76084 45.8004 9.98036 46.02C10.1999 46.2395 10.461 46.413 10.7484 46.5303C11.0358 46.6477 11.3438 46.7065 11.6542 46.7033C11.9646 46.7002 12.2713 46.6351 12.5563 46.5119C12.8412 46.3888 13.0987 46.21 13.3138 45.986L27.9973 31.3024L42.6809 45.986C42.8959 46.21 43.1535 46.3888 43.4384 46.5119C43.7234 46.6351 44.0301 46.7002 44.3405 46.7033C44.6509 46.7065 44.9589 46.6477 45.2463 46.5303C45.5337 46.413 45.7948 46.2395 46.0143 46.02C46.2339 45.8004 46.4074 45.5393 46.5247 45.2519C46.6421 44.9645 46.7009 44.6566 46.6977 44.3461C46.6946 44.0357 46.6295 43.729 46.5063 43.4441C46.3831 43.1591 46.2044 42.9016 45.9804 42.6866L31.2968 28.003L45.9804 13.3194C46.3176 12.9916 46.5479 12.5697 46.6411 12.1088C46.7344 11.6479 46.6862 11.1696 46.5029 10.7366C46.3197 10.3035 46.0099 9.93598 45.6141 9.68204C45.2184 9.42811 44.7551 9.29965 44.2851 9.31351C43.6789 9.33158 43.1036 9.58493 42.6809 10.0199L27.9973 24.7035L13.3138 10.0199C13.0963 9.79637 12.8363 9.6187 12.549 9.49738C12.2617 9.37605 11.9531 9.31353 11.6412 9.31351Z"/>
    </svg>
    <section id="cta_form_main" class="viibes__cta_form">
        <div class="viibes__wrap">
            <h2 class="viibes__h2">В Словакию - со словацким языком!
                <span class="viibes__color_purple">Начать заниматься словацким проще, чем кажется 💜</span>
            </h2>
            <div class="viibes__cta_form_main_content">
                <div class="viibes__cta_form_main_form">
                    <h3 class="viibes__h3">Оставьте заявку на <br> бесплатную консультацию</h3>
                    @include('client.components.form', ['form_type' => 'CTA_MODAL_FORM Courses Block'])
                </div>
                <div class="viibes__cta_form_main_more viibes__bg_purple">
                    <h3 class="viibes__h3">Как проходит первая <br> консультация </h3>
                    <ul class="viibes__cta_form_main_more_list">
                        <li class="viibes__text_big"><span class="viibes__color_purple">01. Предоставим</span> вам информацию о ходе курса</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">02. Углубимся</span> в подробности программы обучения</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">03. Расскажем</span> вам более подробно о наших преподавателях</li>
                        <li class="viibes__text_big"><span class="viibes__color_purple">04. Ответим</span> в конце на все ваши вопросы</li>
                    </ul>
                    <img src="{{ URL::asset('/assets/client/images/blocks/cta/cta-woman.jpg') }}" alt="Девушка казашка">
                </div>
            </div>
        </div>
    </section>
</section>

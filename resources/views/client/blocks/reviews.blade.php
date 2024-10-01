<section class="viibes__block_reviews">
    <div class="viibes__wrap">
        <h2 class="viibes__h2">Наши студенты и их родители <span class="viibes__color_purple">о поступлении в Словакию вместе с VIIBES Study</span></h2>
        <div class="viibes__block_reviews_list viibes__desktop">
            @php $i = 0; @endphp
            @foreach($reviews as $_review)
                @if($i % 3 === 0 || $i === 0)
                    @if($i !== 0)
                        </div>
                    @endif
                    <div class="viibes__block_reviews_list_column">
                @endif
                <div class="viibes__block_reviews_list_item" itemscope itemtype="https://schema.org/Review">
                    <div class="viibes__block_reviews_list_item_header">
                        <div class="viibes__block_reviews_list_item_header_title" itemscope itemprop="author" itemtype="https://schema.org/Person">
                            <div class="viibes__block_reviews_list_item_header_title_avatar">
                                <img src="/storage/{{ $_review->avatar_src }}" itemprop="image"
                                     alt="{{ $_review->client_name }}. Аватарка клиента" title="{{ $_review->client_name }}. Аватарка клиента">
                            </div>
                            <div>
                                <h3 class="viibes__h5" itemprop="name">{{ $_review->client_name }}</h3>
                                <h4>
                                    <a href="{{ route('universities.show', [$_review->university->city->slug, $_review->university->slug]) }}"
                                       class="viibes__text_small" title="Больше про {{ $_review->university->name }}">
                                        <span>{{ $_review->university->name }}</span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div style="display: none;" itemscope itemprop="reviewRating" itemtype="https://schema.org/Rating">
                            <meta itemprop="worstRating" content="1">
                            <meta itemprop="ratingValue" content="5">
                            <meta itemprop="bestRating" content="5">
                        </div>
                        <div style="display: none;">
                            <meta itemprop="datePublished" content="{{ $_review->created_at }}">
                        </div>
                        @if($_review->instagram_url !== null && $_review->instagram_url !== '')
                            <a href="{{ $_review->instagram_url }}" rel="nofollow"
                               class="viibes__block_reviews_list_item_header_social"
                               title="Инстаграм страница клиента {{ $_review->client_name }}">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/instagram-gray.svg') }}" alt="иконка инстаграм">
                            </a>
                        @endif
                    </div>
                    @if($_review->image_src !== null && $_review->image_src !== '')
                        <div class="viibes__block_reviews_list_item_photo">
                            <img src="/storage/{{ $_review->image_src }}"
                                 alt="{{ $_review->image_place_name }}" itemprop="thumbnailUrl" title="{{ $_review->image_place_name }}"
                                 class="viibes__block_reviews_list_item_photo_main_photo">
                            <div class="viibes__block_reviews_list_item_photo_location">
                                <img src="{{ URL::asset('/assets/client/images/components/location.svg') }}" alt="иконка маркер">
                                {{ $_review->image_place_name }}
                            </div>
                        </div>
                    @endif
                    @if($_review->content !== null && $_review->content !== '')
                        <p class="viibes__text_normal" itemprop="reviewBody">
                            {{ $_review->content }}
                        </p>
                    @endif
                    @if($_review->preview_src !== null && $_review->preview_src !== '')
                        <div class="viibes__block_reviews_list_item_video viibes__video" itemprop="subjectOf" itemscope itemtype="https://schema.org/VideoObject">
                            <video src="/storage/{{ $_review->preview_src }}" loop autoplay playsinline muted original="/storage/{{ $_review->video_src }}"></video>
                            <meta itemprop="contentUrl" content="/storage/{{ $_review->video_src }}" />
                            <div class="viibes__video_overlay">
                                @include('client.components.video-btn')
                            </div>
                        </div>
                    @endif
                    <div style="display: none;" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                        <meta itemprop="name" content="{{ env('APP_NAME') }}">
                        <meta itemprop="email" content="{{ env('EMAIL') }}">
                        <meta itemprop="url" content="{{ env('APP_URL') }}">
                        <meta itemprop="image" content="{{ URL::asset('/assets/client/images/opengraph/og_img.jpg') }}">
                        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                            <meta itemprop="addressLocality" content="Кошице">
                            <meta itemprop="addressCountry" content="Словакия">
                        </div>
                        <meta itemprop="telephone" content="{{ env('PHONE_NUMBER') }}">
                    </div>
                </div>
                @php $i++; @endphp
            @endforeach
            </div>
        </div>
        <div id="reviews_slider" class="viibes__mobile">
            <div class="viibes__block_reviews_list viibes__mobile swiper-wrapper" style="gap: 0 !important; overflow-x: inherit;">
                @foreach($reviews as $_review)
                    <div class="swiper-slide viibes__block_reviews_list_item">
                        <div class="viibes__block_reviews_list_item_header">
                            <div class="viibes__block_reviews_list_item_header_title">
                                <div class="viibes__block_reviews_list_item_header_title_avatar">
                                    <img src="/storage/{{ $_review->avatar_src }}"
                                         alt="{{ $_review->client_name }}. Аватарка клиента" title="{{ $_review->client_name }}. Аватарка клиента">
                                </div>
                                <div>
                                    <h3 class="viibes__h5">
                                        {{ $_review->client_name }}
                                        <a href="{{ $_review->instagram_url }}" rel="nofollow"
                                           class="viibes__block_reviews_list_item_header_social"
                                           title="Инстаграм страница клиента {{ $_review->client_name }}">
                                            <img src="{{ URL::asset('/assets/client/images/media-logo-icons/instagram-gray.svg') }}" alt="иконка инстаграм">
                                        </a>
                                    </h3>
                                    <h4>
                                        <a href="{{ route('universities.show', [$_review->university->city->slug, $_review->university->slug]) }}"
                                           class="viibes__text_small" title="Больше про {{ $_review->university->name }}">
                                            <span>{{ $_review->university->name }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @if($_review->video_src !== null && $_review->video_src !== '')
                            <div class="viibes__block_reviews_list_item_video viibes__video">
                                <video src="/storage/{{ $_review->preview_src }}" loop playsinline autoplay muted original="/storage/{{ $_review->video_src }}"></video>
                                <div class="viibes__video_overlay">
                                    @include('client.components.video-btn')
                                </div>
                            </div>
                        @endif
                        @if($_review->image_src !== null && $_review->image_src !== '')
                            <div class="viibes__block_reviews_list_item_photo">
                                <img src="/storage/{{ $_review->image_src }}"
                                     alt="{{ $_review->image_place_name }}" title="{{ $_review->image_place_name }}"
                                     class="viibes__block_reviews_list_item_photo_main_photo">
                                <div class="viibes__block_reviews_list_item_photo_location">
                                    <img src="{{ URL::asset('/assets/client/images/components/location.svg') }}" alt="иконка маркер">
                                    {{ $_review->image_place_name }}
                                </div>
                            </div>
                        @endif
                        @if($_review->content !== null && $_review->content !== '')
                            <p class="viibes__text_normal">
                                {{ $_review->content }}
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{ route('reviews') }}"
           class="viibes__btn_link" title="Смотреть больше отзывов клиентов VIIBES Study">
            Смотреть больше отзывов
            <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
        </a>
    </div>
</section>

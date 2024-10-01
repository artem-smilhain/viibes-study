@extends('client.layouts.app')
@section('meta-tags')
    <title>Учеба в Словакии - отзывы студентов</title>
    <meta property="og:title" content="Учеба в Словакии - отзывы студентов"/>
    <meta name="description" content="Отзывы об учебе и жизни в Словакии. Отзывы наших студентов и их родителей о поступлении в Словакию вместе с VIIBES Study. Видеоотзывы наших клиентов.">
    <meta property="og:description" content="Отзывы об учебе и жизни в Словакии. Отзывы наших студентов и их родителей о поступлении в Словакию вместе с VIIBES Study. Видеоотзывы наших клиентов."/>
@endsection
@section('body_class') viibes__reviews @endsection
@section('content')
    <section class="viibes__reviews_preview">
        <div class="viibes__wrap">
            <h1 class="viibes__h1">Отзывы наших студентов и их родителей 🤟</h1>
            @include('client.blocks.breadcrumbs')
        </div>
    </section>
    <section class="viibes__block_reviews">
        <div class="viibes__wrap">
            <div class="viibes__block_reviews_list">
                @php $i = 0; $j = count($reviews); @endphp
                @foreach($reviews as $_review)
                    @if($i % 4 === 0 || $i === 0)
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
                                <h5 class="viibes__h5" itemprop="name">{{ $_review->client_name }}</h5>
                                <a href="{{ route('universities.show', [$_review->university->city->slug, $_review->university->slug]) }}"
                                   class="viibes__text_small" title="Больше про {{ $_review->university->name }}">
                                    <span>{{ $_review->university->name }}</span>
                                </a>
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
                               class="viibes__block_reviews_list_item_header_social" title="Инстаграм страница клиента {{ $_review->client_name }}">
                                <img src="{{ URL::asset('/assets/client/images/media-logo-icons/instagram-gray.svg') }}">
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
                            <video src="/storage/{{ $_review->preview_src }}" loop playsinline autoplay muted original="/storage/{{ $_review->video_src }}"></video>
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
        </div>
    </section>
    @include('client.blocks.cta.forms.main')
    @include('client.blocks.faq')
    @include('client.blocks.cta.contacts')
    @include('client.blocks.seo.countries')
@endsection
@section('schema')
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "Отзывы студентов и их родителей о поступлении в Словакию вместе с VIIBES Study",
            "description": "Отзывы студентов и их родителей о поступлении в университеты Словакии вместе с компанией VIIBES Study",
            "url": "{{ route('reviews') }}",
            "inLanguage": "ru",
            "mainEntity":{

            }
        }
    </script>
@endsection

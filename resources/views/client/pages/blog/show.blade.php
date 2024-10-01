@extends('client.layouts.app')
@section('meta-tags')
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->description }}">
    <meta property="og:title" content="{{ $post->title }}"/>
    <meta property="og:description" content="{{ $post->description }}"/>
@endsection
@section('body_class') @endsection
@section('content')
    <section class="viibes__preview"> <!-- PREVIEW -->
        <div class="viibes__wrap">
            <h1 class="viibes__h1">{{ $post->title }}</h1>
            <a href="{{ route('blog.index-by-category', $post->category->slug) }}" class="viibes__h1_sub">Блог о Словакии. Рубрика: {{ $post->category->name }} 📝</a>
            @include('client.blocks.breadcrumbs')
        </div>
    </section>
    <section class="viibes__main"> <!-- MAIN CONTENT -->
        <div class="viibes__wrap">
            <article class="viibes__main_list_block">
                <section>
                    <div class="viibes__main_list_block_list">
                        <div id="post">
                            <img src="/storage/{{ $post->thumbnail_src }}" alt="">
                            <div id="viibes__editor_content">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="viibes__main_list_block_sidebar">
                    @include('client.layouts.sidebars.blog')
                </aside>
            </article>
        </div>
    </section>
    @include('client.blocks.seo.countries')
@endsection
@section('scripts')
    <script>
        const links = document.querySelectorAll('#viibes__editor_content a');
        links.forEach(function(element) {
            element.setAttribute('target', '_blank');
            element.setAttribute('rel', 'nofollow');
        });
    </script>
@endsection
@section('schema')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "NewsArticle",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ Request::url() }}",
            "name": "{{ $post->title }}"
          },
          "headline": "{{ $post->title }}",
          "description": "{{ $post->description }}...",
          "image": [
            "{{ URL::asset('/storage/'.$post->thumbnail_src ) }}"
            ],
          "datePublished": "{{ $post->created_at }}",
          "dateModified": "{{ $post->updated_at }}",
          "author": {
            "@type": "Person",
            "name": "Artem Smilhain"
          },
          "publisher": {
            "@type": "Organization",
            "name":"VIIBES Study",
            "url":"{{ env('APP_URL') }}",
            "logo": {
              "@type": "ImageObject",
              "url": "{{ URL::asset('/assets/client/images/opengraph/logo.jpg') }}"
            }
          }
        }
    </script>
@endsection

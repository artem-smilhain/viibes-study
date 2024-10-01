<div class="blog_posts">
    @foreach($posts as $post)
        <div class="blog_post_item">
            <div class="blog_post_item__image">
                <img src="/storage/{{ $post->thumbnail_src }}" alt="">
            </div>
            <div class="blog_post_item_text">
                <div class="blog_post_item_text_inner">
                    <h2 class="viibes__h3">
                        <a class="viibes__color_black" href="{{ route('blog.show', ['category_slug' => $post->category->slug, 'slug' => $post->slug]) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <div class="blog_post_item_text_inner_category">
                        <span class="viibes__text_small">
                            {{ $post->created_at->format('d.m.Y') }}
                        </span>
                        <div class="viibes__footer_middle_list_circle"></div>
                        <a href="{{ route('blog.index-by-category', $post->category->slug) }}" class="viibes__text_small"
                           style="color: {{ $post->category->element_color }};">
                            <u>{{ $post->category->name }}</u>
                        </a>
                    </div>
                    <p class="viibes__text_normal">
                        {{ $post->description }}...
                    </p>
                </div>
                <a href="{{ route('blog.show', ['category_slug' => $post->category->slug, 'slug' => $post->slug]) }}" class="viibes__btn_link" title="">
                    Читать полностью <img src="{{ URL::asset('/assets/client/images/components/purple-arrow-right.svg') }}" alt="иконка стрелочка">
                </a>
            </div>
        </div>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
</div>

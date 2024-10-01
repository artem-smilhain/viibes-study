<div class="viibes__universities_main_content_sidebar viibes__faculty_main_content_sidebar" style="display: block;">
    <div class="blog_sidebar">
        <div class="blog_sidebar_group">
            <h3>Закреплено 📌</h3>
            <div class="blog_sidebar_group_posts">
                @foreach($sidebar_posts['pinned'] as $pinned_post)
                    <div class="blog_sidebar_group_post">
                        <h4>
                            <a href="{{ route('blog.show', ['category_slug' => $pinned_post->category->slug, 'slug' => $pinned_post->slug]) }}">
                                {{ $pinned_post->title }}
                            </a>
                        </h4>
                        <div class="blog_sidebar_group_post_category">
                                        <span class="viibes__text_small">
                                            {{ $pinned_post->created_at->format('d.m.Y') }}
                                        </span>
                            <div class="viibes__footer_middle_list_circle"></div>
                            <a href="{{ route('blog.index-by-category', $pinned_post->category->slug) }}"
                               class="viibes__text_small" style="color: {{ $pinned_post->category->element_color }};">
                                <u>{{ $pinned_post->category->name }}</u>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <hr>
        <div class="blog_sidebar_group">
            <h3>Последние посты ⚡️</h3>
            <div class="blog_sidebar_group_posts">
                @foreach($sidebar_posts['new'] as $new_post)
                    <div class="blog_sidebar_group_post">
                        <h4>
                            <a href="{{ route('blog.show', ['category_slug' => $new_post->category->slug, 'slug' => $new_post->slug]) }}">
                                {{ $new_post->title }}
                            </a>
                        </h4>
                        <div class="blog_sidebar_group_post_category">
                                        <span class="viibes__text_small">
                                            {{ $new_post->created_at->format('d.m.Y') }}
                                        </span>
                            <div class="viibes__footer_middle_list_circle"></div>
                            <a href="{{ route('blog.index-by-category', $new_post->category->slug) }}"
                               class="viibes__text_small" style="color: {{ $new_post->category->element_color }};">
                                <u>{{ $new_post->category->name }}</u>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

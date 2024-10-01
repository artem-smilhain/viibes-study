<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(4);
        $sidebar_posts = $this->get_sidebar_posts();
        $categories = Category::all();
        $breadcrumbs = [
            'Новости и статьи' => route('blog')
        ];
        $tags = [
            'main' => ['title' => '#Все посты', 'route' => 'blog'],
            'groups' => [
                'categories' => ['object' => $categories, 'route' => 'blog.index-by-category', 'current' => null],
            ]
        ];
        return view('client.pages.blog.index', compact('posts', 'categories', 'sidebar_posts', 'breadcrumbs', 'tags'));
    }
    public function indexByCategory($slug){
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('created_at', 'DESC')->paginate(4);
        $sidebar_posts = $this->get_sidebar_posts();
        $categories = Category::all();
        $breadcrumbs = [
            'Новости и статьи' => route('blog'),
            $category->name => route('blog.index-by-category', $category->slug)
        ];
        $tags = [
            'main' => ['title' => '#Все посты', 'route' => 'blog'],
            'groups' => [
                'categories' => ['object' => $categories, 'route' => 'blog.index-by-category', 'current' => $category],
            ]
        ];
        return view('client.pages.blog.index-by-category', compact('posts','category', 'categories', 'sidebar_posts', 'breadcrumbs', 'tags'));
    }
    public function get_sidebar_posts(){
        return [
            'pinned' => Post::where('is_pinned', true)->orderBy('created_at', 'DESC')->take(5)->get(),
            'new' => Post::orderBy('created_at', 'DESC')->take(5)->get()
        ];
    }
    public function show($category_slug, $slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        $sidebar_posts = $this->get_sidebar_posts();
        $breadcrumbs = [
            'Новости и статьи' => route('blog'),
            $post->category->name => route('blog.index-by-category', $post->category->slug),
            $post->title => route('blog.show', ['category_slug' => $post->category->slug, 'slug' => $post->slug])
        ];
        return view('client.pages.blog.show', compact('post','sidebar_posts', 'breadcrumbs'));

    }
}

<?php


namespace App\services;


use App\Models\Post;
use Illuminate\Support\Facades\Request;

class PostService
{
    public function delete(Post $post)
    {
        \Storage::disk('public')->delete($post->thumbnail_src);
        $post->delete();
    }
    public function saveFiles($request, &$data)
    {
        if ($request->hasFile('thumbnail_src')) {
            $data['thumbnail_src'] = $request->file('thumbnail_src')->store('posts/thumbnails', 'public');
        } else {
            $data['thumbnail_src'] = '';
        }
    }
}

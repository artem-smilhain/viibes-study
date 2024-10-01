<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostPhoto;
use Illuminate\Http\Request;

class PostPhotosController extends Controller
{
    public function index()
    {
        $images = PostPhoto::orderBy('created_at', 'DESC')->get();
        return view('admin.post-photos.index', compact('images'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('src')) {
            $data['src'] = $request->file('src')->store('posts/images', 'public');
        }
        PostPhoto::create($data);
        return redirect()->route('admin.post-photos.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostPhoto  $post_photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostPhoto $post_photo)
    {
        \Storage::disk('public')->delete($post_photo->src);
        $post_photo->delete();
        return redirect()->route('admin.post-photos.index');
    }
}

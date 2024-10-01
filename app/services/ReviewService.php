<?php


namespace App\services;


use App\Models\Review;

class ReviewService
{
    public function delete(Review $review)
    {
        /*
        \Storage::disk('public')->delete($review->avatar_src);
        \Storage::disk('public')->delete($review->video_src);
        \Storage::disk('public')->delete($review->preview_src);
        \Storage::disk('public')->delete($review->image_src);
        */

        if ($review->avatar_src) {
            \Storage::disk('public')->delete($review->avatar_src);
        }
        if ($review->video_src) {
            \Storage::disk('public')->delete($review->video_src);
        }
        if ($review->preview_src) {
            \Storage::disk('public')->delete($review->preview_src);
        }
        if ($review->image_src) {
            \Storage::disk('public')->delete($review->image_src);
        }


        $review->delete();
    }
    public function storeFiles($request, &$data)
    {
        if ($request->hasFile('avatar_src')) {
            $data['avatar_src'] = $request->file('avatar_src')->store('reviews/avatars', 'public');
        }
        if ($request->hasFile('video_src')) {
            $data['video_src'] = $request->file('video_src')->store('reviews/video', 'public');
        }
        if ($request->hasFile('preview_src')) {
            $data['preview_src'] = $request->file('preview_src')->store('reviews/previews', 'public');
        }
        if ($request->hasFile('image_src')) {
            $data['image_src'] = $request->file('image_src')->store('reviews/images', 'public');
        }
    }
    public function updateFiles($request, Review $review, &$data)
    {
        if ($request->hasFile('avatar_src')) {
            if ($review->avatar_src) {
                \Storage::disk('public')->delete($review->avatar_src);
            }
            $data['avatar_src'] = $request->file('avatar_src')->store('reviews/avatars', 'public');
        }
        if ($request->hasFile('video_src')) {
            if ($review->video_src) {
                \Storage::disk('public')->delete($review->video_src);
            }
            $data['video_src'] = $request->file('video_src')->store('reviews/video', 'public');
        }
        if ($request->hasFile('preview_src')) {
            if ($review->preview_src) {
                \Storage::disk('public')->delete($review->preview_src);
            }
            $data['preview_src'] = $request->file('preview_src')->store('reviews/previews', 'public');
        }
        if ($request->hasFile('image_src')) {
            if ($review->image_src) {
                \Storage::disk('public')->delete($review->image_src);
            }
            $data['image_src'] = $request->file('image_src')->store('reviews/images', 'public');
        }
    }
}

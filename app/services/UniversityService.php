<?php


namespace App\services;


use App\Models\University;

class UniversityService
{
    public function delete(University $university)
    {
        \Storage::disk('public')->delete($university->logo_src);
        \Storage::disk('public')->delete($university->thumbnail_src);
        $university->delete();
    }
    public function updateFiles($request, $university, &$data)
    {
        if ($request->hasFile('logo_src')) {
            \Storage::disk('public')->delete($university->logo_src);
            $data['logo_src'] = $request->file('logo_src')->store('universities/logos', 'public');
        }
        if ($request->hasFile('thumbnail_src')) {
            \Storage::disk('public')->delete($university->thumbnail_src);
            $data['thumbnail_src'] = $request->file('thumbnail_src')->store('universities/thumbnails', 'public');
        }
    }
    public function updatePictures($request, $university) {
        if (isset($request->image_src)) {
            $pictures = [];
            $path = storage_path('university/' . $university->id . '/images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            foreach ($request->image_src as $university_image) {
                $picture = new University\Picture();
                if (\Storage::disk('public')->exists('tmp/uploads/' . $university_image)) {
                    \Storage::disk('public')->move('tmp/uploads/' . $university_image, 'universities/' . $university->id . '/images/' . $university_image);
                    $picture->image_src = 'universities/' . $university->id . '/images/' . $university_image;
                } else {
                    $picture->image_src =  $university_image;
                }
                $picture->university_id = $university->id;
                $pictures[] = $picture;
            }
            $university->pictures()->delete();
            $university->pictures()->saveMany($pictures);
        }
    }
}

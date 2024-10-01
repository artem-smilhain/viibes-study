<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'client_name' => 'required|string|max:255',
            'avatar_src' => 'required|image|mimes:png,jpg,jpeg,gif|dimensions:max_width:1000,max_height:1000',
            'video_src' => 'file|mimetypes:video/mp4',
            'preview_src' => 'file|mimetypes:video/mp4',
            'image_src' => 'image|mimes:png,jpg,jpeg,gif|dimensions:max_width:1000,max_height:1000',
            'image_place_name' => 'string|max:255|nullable',
            'instagram_url' => 'string|max:255|nullable',
            'is_interview' => 'required|boolean',
            'content' => 'nullable|string|max:4000',
            'university_id' => 'required|integer|exists:universities,id',
            'row_weight' => 'required|integer',
            'is_shown' => 'boolean|nullable'
        ];
    }
}

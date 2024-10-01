<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'string|max:255|required',
            'thumbnail_src' => 'image|mimes:png,jpg,jpeg,gif|dimensions:max_width:1000,max_height:1000',
            'content' => 'string|required',
            'category_id' => 'integer|exists:categories,id',
            'status' => 'boolean|required',
            'description' => 'string|max:170|required',
            'is_pinned' => 'boolean'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
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
            'name' => 'string|unique:cities|max:255|required',
            'name_sk' => 'string|unique:cities|max:255|required',
            'row_weight' => 'integer',
            'post_id' => 'nullable|numeric|exists:posts,id',
            'country_id' => 'integer|exists:countries,id',
            'content_heading' => 'string|max:255',
            'content_text' => '',
            'meta_title' => 'string|nullable',
            'meta_description' => 'string|nullable',
        ];
    }
}

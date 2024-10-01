<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDirectionRequest extends FormRequest
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
            'name_sk' => 'string|max:255|required',
            'name' => 'string|max:255|required',
            'element_color' => 'string|max:255|required',
            'row_weight' => 'integer',
            'content_heading' => 'string|max:255',
            'content_text' => '',
            'meta_title' => 'string|nullable',
            'meta_description' => 'string|nullable',
        ];
    }
}

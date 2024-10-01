<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
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
            'name' => 'string|max:255|required',
            'phone' => 'string|max:255|required',
            'email' => 'string|max:255|nullable',
            'type' => 'string|max:255|nullable',
            'form_type' => 'string|max:255|nullable',
            'page_route' => 'string|max:255|nullable',
            'utm_source' => 'string|max:255|nullable',
            'utm_medium' => 'string|max:255|nullable',
            'utm_campaign' => 'string|max:255|nullable',
            'utm_content' => 'string|max:255|nullable',
            'utm_term' => 'string|max:255|nullable',
            'ip_address' => 'string|max:255|nullable',
        ];
    }
}

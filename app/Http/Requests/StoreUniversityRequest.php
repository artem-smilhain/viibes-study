<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUniversityRequest extends FormRequest
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
            'name' => 'string|unique:universities|max:255|required',
            'name_sk' => 'string|unique:universities|max:255|required',
            'abbreviation' => 'string',
            'abbreviation_sk' => 'string',
            'description' => 'string|max:4000|nullable',
            'founding_year' => 'integer',
            'address' => 'string',
            'address_sk' => 'string',
            'site_url' => 'string',
            'number_of_students' => 'integer',
            'logo_src' => 'image|mimes:png,jpg,jpeg,gif|dimensions:max_width:1000,max_height:1000',
            'thumbnail_src' => 'image|mimes:png,jpg,jpeg,gif|dimensions:max_width:1000,max_height:1000',
            'google_map_src' => 'string',
            'education_cost_en' => 'string',
            'scholarships' => 'string',
            'row_weight' => 'integer',
            'slug' => 'string',
            'city_id' => 'integer|exists:cities,id',
            'content_heading' => 'string|max:255',
            'content_text' => '',
            'faculties_description' => 'string|nullable',
            'meta_title' => 'string|nullable',
            'meta_description' => 'string|nullable',
        ];
    }
}

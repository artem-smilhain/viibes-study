<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramRequest extends FormRequest
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
            'description' => 'string|nullable',
            'years_of_study' => 'integer|max:255',
            'is_in_combination' => 'boolean',
            'slug' => 'string|max:255',
            'academic_degree_id' => 'integer|exists:academic_degrees,id',
            'faculty_id' => 'integer|exists:faculties,id',
            'direction_id' => 'integer|exists:directions,id',
            'direction_2_id' => 'integer|exists:directions,id|nullable', //integer|exists:directions,id|nullable
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCourseRequest extends FormRequest
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
            'status_id' => ['required', 'integer', Rule::in(array_keys(Course::getStatuses()))],
            'start_date' => 'required|date',
            'telegram_link' => 'string|max:255|required',
        ];
    }
}

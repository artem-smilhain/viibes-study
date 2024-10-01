<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLessonRequest extends FormRequest
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
            'name' => [
                'required', 'string', 'max:255',
                Rule::unique('lessons')->ignore($this->lesson),
            ],
            'start_at' => 'required|date',
            'meeting_link' => 'string|max:255|required',
            'video_link' => 'string|max:255|required',
            'description' => 'string|max:4000',
            'notes' => 'string|max:4000',
            'course_id' => 'integer|exists:courses,id',
        ];
    }
}

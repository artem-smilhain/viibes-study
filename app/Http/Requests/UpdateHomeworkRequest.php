<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeworkRequest extends FormRequest
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
            'date_created_at' => 'required|date',
            'deadline_at' => 'required|date',
            'homework' => 'required|string|max:4000',
            'reply' => 'required|string|max:4000',
            'grade' => 'required|string|max:4000',
            'lesson_id' => 'integer|exists:lessons,id',
        ];
    }
}

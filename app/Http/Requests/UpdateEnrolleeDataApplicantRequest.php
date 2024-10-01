<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEnrolleeDataApplicantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'last_name_ru' => 'required|string|max:255',
            'birth_name' => 'nullable|string|max:255',
            'father_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'gender_id' => ['required', 'integer', Rule::in(array_keys(User::getGenders()))],
            'martial_status_id' => ['nullable', Rule::in(array_keys(User::getMartialStatuses()))],
            'phone' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_city' => 'nullable|string|max:255',
            'birth_country_id' => 'sometimes|nullable|exists:countries,id',
            'street' => 'required|string|max:255',
            'house' => 'required|string|max:255',
            'apartment' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country_id' => 'required|integer|exists:countries,id',
            'ps' => 'required|string|max:255',
            'actual_street' => 'nullable|string|max:255',
            'actual_house' => 'nullable|string|max:255',
            'actual_apartment' => 'nullable|string|max:255',
            'actual_city' => 'nullable|string|max:255',
            'actual_country_id' => 'sometimes|nullable|exists:countries,id',
            'actual_ps' => 'nullable|string|max:255',
            'citizenship' => 'required|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'passport' => 'required|string|max:255',
            'passport_issue_place' => 'nullable|string|max:255',
            'passport_expiration_date' => 'nullable|date',
            'school_name' => 'nullable|string|max:255',
            'school_start_year' => 'nullable:integer',
            'school_finish_year' => 'nullable:integer',
        ];
    }
}

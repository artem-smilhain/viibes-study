<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'birth_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'status_id' => ['required', 'integer', Rule::in(array_keys(User::getStatuses()))],
            'gender_id' => ['required', 'integer', Rule::in(array_keys(User::getGenders()))],
            'martial_status_id' => ['required', 'integer', Rule::in(array_keys(User::getMartialStatuses()))],
            'phone' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_city' => 'required|string|max:255',
            'birth_country_id' => 'required|integer|exists:countries,id',
            'street' => 'nullable|string|max:255',
            'house' => 'nullable|string|max:255',
            'apartment' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country_id' => 'required|integer|exists:countries,id',
            'ps' => 'nullable|string|max:255',
            'actual_street' => 'nullable|string|max:255',
            'actual_house' => 'nullable|string|max:255',
            'actual_apartment' => 'nullable|string|max:255',
            'actual_city' => 'nullable|string|max:255',
            'actual_country_id' => 'required|integer|exists:countries,id',
            'actual_ps' => 'nullable|string|max:255',
            'citizenship' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'passport' => 'required|string|max:255',
            'passport_issue_place' => 'required|string|max:255',
            'passport_expiration_date' => 'date',
            'school_name' => 'nullable|string|max:255',
            'school_start_year' => 'nullable:integer',
            'school_finish_year' => 'nullable:integer',
        ];
    }
}

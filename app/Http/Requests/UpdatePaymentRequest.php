<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'deadline' => 'date',
            'is_paid'  => 'boolean',
            'amount' => 'required|numeric|between:0,999999.99',
            'service_id' => 'required|integer|exists:services,id',
            'user_id' => 'required|integer|exists:users,id'
        ];
    }
}

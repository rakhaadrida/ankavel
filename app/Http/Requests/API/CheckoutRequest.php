<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'travel_packages_id' => 'required|exists:travel_packages,id',
            'users_id' => 'required|exists:users,id',
            'additional_visa' => 'required|integer',
            'total' => 'required|integer',
            'status' => 'nullable|string|in:PENDING,SUCCESS,FAILED',
            'username' => 'required|array',
            'nationality' => 'required|array',
            'is_visa' => 'required|array',
            'doe_passport' => 'required|array'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'first_name' => 'required|max:40',
            'last_name' => 'required|max:40',
            'store_name' => 'required|max:40',
            'email' => 'required|string|email|unique:users,email',
            'phone_number' => 'required|max:10',
            'password' => 'required|max:20',
            'description' => 'required',
            'address' => 'required',
        ];
    }
}

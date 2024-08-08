<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required|min:8',
            'delivery_experience' => 'required',
            'home_address' => 'required',
            'type_of_product' => 'required',
            'avg_percel_day' => 'required',
            'business_address' => 'required',
        ];
    }

    public function messages(){
        return[
            'first_name.required' => 'First name is required!',
            'last_name.required' => 'Last name is required!',
            'gender.required' => 'gender is required!',
            'phone_number.required' => 'Phone is required!',
            'delivery_experience.required' => 'Delivery Experience is required',
            'home_address.required' => 'Home Addrees is required',
            'type_of_product.required' => 'Type of Product is required',
            'avg_percel_day.required' => 'Average percel day is required',
            'business_address.required' => 'Business Address is required'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'shipping_fullname' => [
                'required'
            ],
            'shipping_address' => [
                'required'
            ],
            'shipping_city' => [
                'required'
            ],
            'shipping_state' => [
                'required'
            ],
            'shipping_zipcode' => [
                'required'
            ],
            'shipping_phone' => [
                'required'
            ],
            'payment_method' => [
                'required'
            ],
        ];
    }
}

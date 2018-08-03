<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
        switch($this->method()){
            case 'POST' :
                return [
                    'name' => 'required',
                    'address' => 'required',
                    'phone' => 'required|numeric',
                    'email' => 'required|email',
                ];
                break;

            case 'PUT' :
                return [
                    'name' => 'required',
                    'address' => 'required',
                    'phone' => 'required|numeric',
                    'email' => 'required|email',
                ];
                break;
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo name es obligatorio',
            'address.required' => 'El campo dirección es obligatorio',
            'phone.required' => 'El campo teléfono es obligatorio',
            'email.required' => 'El correo electronico exterior es obligatorio',
            'phone.numeric' => 'El campo teléfono debe ser numerico',
        ];
    }
}

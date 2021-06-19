<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'address' => 'required|min:3',
            'number' => 'required|min:11',
            'email' => 'required|email',
            'opening_hours' => 'required|min:10'
        ];
    }

    public function message()
    {
        return [
            "address.required" => "Поле 'Адрес' обязательно для заполнения",
            'address.min' => 'Поле "Адрес" должно быть длиной не менее 3 символов',
            'number.min' => 'Поле "Номер телефона" должно быть длиной не менее 11 символов',
            "number.requires" => "Поле 'Номер телефона' обязательно для заполнения",
            "email.email" => "В поле 'Email' необходимо указать корректный электронный адрес",
            "opening_hours.required" => "Поле 'Часы работы' обязательно для заполнения",
            'opening_hours.min' => 'Поле "Часы работы" должно быть длиной не менее 10 символов',
        ];
    }
}

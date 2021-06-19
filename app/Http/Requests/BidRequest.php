<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BidRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'description' => 'required|min:3',
            'number' => 'required|min:11'
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Поле 'Имя' обязательно для заполнения",
            'name.min' => 'Поле "Имя" должно быть длиной не менее 3 символов',
            'number.min' => 'Поле "Номер телефона" должно быть длиной не менее 11 символов',
            "number.requires" => "Поле 'Номер телефона' обязательно для заполнения",
            "email.email" => "В поле 'Email' необходимо указать корректный электронный адрес",
            "description.required" => "Поле 'Описание' обязательно для заполнения",
            'description.min' => 'Поле "Описание" должно быть длиной не менее 3 символов',
        ];
    }
}

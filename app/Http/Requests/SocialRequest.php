<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
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
            'name' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'name.min' => 'Поле "Название" должно быть длиной не менее 2 символа'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StyleRequest extends FormRequest
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
            'description' => 'required|min:3',
        ];
    }

    public function message() {
        return [
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'name.min' => 'Поле "Название" должно быть длиной не менее 3 символов',
            'description.required' => 'Поле "Описание" обязательно для заполнения',
            'description.min' => 'Поле "Описание" должно быть длиной не менее 3 символов',
        ];
    }
}

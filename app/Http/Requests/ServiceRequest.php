<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title' => 'required|min:3',
            'note' => 'required|min:3',
            'min_price' => 'required|min:1'
        ];
    }

    public function message() {
        return [
            'title.required' => 'Поле "Название" обязательно для заполнения',
            'title.min' => 'Поле "Название" должно быть длиной не менее 3 символов',
            'note.required' => 'Поле "Примечание" обязательно для заполнения',
            'note.min' => 'Поле "Примечание" должно быть длиной не менее 3 символов',
            'min_price.required' => 'Поле "Минимальная цена" обязательно для заполнения',
            'min_price.min' => 'Поле "Минимальная цена" должно быть длиной не менее 3 символов',

        ];
    }
}

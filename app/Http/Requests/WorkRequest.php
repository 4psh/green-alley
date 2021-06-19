<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'date' => 'required|date',
            'description' => 'required|min:3',
            'image' => 'required|image'
        ];
    }

    public function message() {
        return [
            'title.required' => 'Поле "Название" обязательно для заполнения',
            'title.min' => 'Поле "Название" должно быть длиной не менее 3 символов',
            'date.date' => 'Поле "Дата" обязательно для заполнения',
            'description.required' => 'Поле "Описание" обязательно для заполнения',
            'description.min' => 'Поле "Описание" должно быть длиной не менее 3 символов',
            'image.required' => 'Поле "Картинка" обязательно для заполнения',
            'image.image' => 'Необходимо загрузить изображение'
        ];
    }
}

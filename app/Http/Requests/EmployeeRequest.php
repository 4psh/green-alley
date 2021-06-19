<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'surname' => 'required|min:3',
            'name' => 'required|min:3',
            'post' => 'required|min:3',
            'image' => 'required|image'
        ];
    }

    public function message() {
        return [
            'surname.required' => 'Поле "Фамилия" обязательно для заполнения',
            'surname.min' => 'Поле "Фамилия" должно быть длиной не менее 3 символов',
            'name.required' => 'Поле "Имя" обязательно для заполнения',
            'name.min' => 'Поле "Имя" должно быть длиной не менее 3 символов',
            'post.required' => 'Поле "Должность" обязательно для заполнения',
            'post.min' => 'Поле "Должность" должно быть длиной не менее 3 символов',
            'image.required' => 'Поле "Изображение" обязательно для заполнения',
            'image.image' => 'Необходимо загрузить изображение'
        ];
    }
}

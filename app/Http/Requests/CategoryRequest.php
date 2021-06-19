<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'brief' => 'required|min:3',
            'image' => 'required|image'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Поле "Название" обязательно для заполнения',
            'title.min' => 'Поле "Название" должно быть длиной не менее 3 символов',
            'brief.required' => 'Поле "Краткое описание" обязательно для заполнения',
            'brief.min' => 'Поле "Краткое описание" должно быть длиной не менее 3 символов',
            'image.required' => 'Поле "Картинка" обязательно для заполнения',
            'image.image' => 'Необходимо загрузить изображение'
        ];
    }

}

<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|image',
            'main_image' => 'nullable|image',
            'category_id' => 'nullable|integer',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательно для заполнения',
            'title.string' => 'Можно вводить только текст',
            'content.required' => 'Это поле обязательно для заполнения',
            'content.string' => 'Можно вводить только строку',
            'preview_image.required' => 'Превью картинка, обязательна',
            'preview_image.file' => 'Можно вводить только картинку',
            'main_image.required' => 'Главное изображение, обязательно',
            'main_image.file' => 'Можно вводить только изображение',
            'category_id.integer' => 'Нужно обязательно, выбрать категорию для поста',
        ];
    }
}

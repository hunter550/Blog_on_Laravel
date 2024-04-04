<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
//            'password' => 'required|string',
//            'password' => 'required|confirmed',
            'status' => 'required|integer',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле обязательно для заполнения',
            'name.string' => 'Можно вводить только текст',
            'email.required' => 'Это поле обязательно для заполнения',
            'email.email' => 'Можно вводить только email',
            'email.unique:users' => 'Пользователь с таким email уже существует',
//            'password.required' => 'Это поле обязательно для заполнения',
//            'password.confirmed' => 'Введённый пароль не совпадает с предыдущим',
            'status.required' => 'Это поле обязательно для заполнения',
            'status.integer' => 'Выберите число',

        ];
    }
}

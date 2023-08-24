<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => 'required|integer',
        ];
    }

    /**
     * Вывод информации об ошибках
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function messages(): array
    {
        return [
            'name' => 'Это поле должно быть заполнено',
            'email.email' => 'Поле email должно содержать настоящий email',
            'unique:users' => 'Такой пользователь уже существует',
        ];
    }
}

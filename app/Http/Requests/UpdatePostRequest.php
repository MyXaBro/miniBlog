<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => ['image', 'mimes:jpeg,png,jpg,gif|max:2048'],
        ];
    }
    /**
     * Вывод сообщений об ошибках
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'content.required' => 'Это поле необходимо заполнить',
        ];
    }
}

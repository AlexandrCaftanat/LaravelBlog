<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это пеле необходимо для заполнения',
            'title.string' => 'Данные строкового типа',
            'preview_image.required' => 'Изоброжение не выбрано',
            'preview_image.file' => 'Требуеться файл',
            'main_image.required' => 'Изоброжение не выбрано',
            'main_image.file' => 'Требуеться файл',
        ];
    }
}

<?php

namespace App\Http\Requests\Informasi\File;

use Illuminate\Foundation\Http\FormRequest;

class FileCreateRequest extends FormRequest
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
            'jenis_dokumen' => 'required',
            'link' => 'url|nullable',
            'file_dokumen' => 'nullable|max:10000|mimes:pdf'
        ];
    }
}

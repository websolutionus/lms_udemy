<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CertificateBuilderUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['nullable', 'max:255', 'string'],
            'sub_title' => ['nullable', 'max:255', 'string'],
            'description' => ['nullable', 'string'],
            'signature' => ['nullable', 'string', 'image'],
            'background' => ['nullable', 'string', 'image'],
        ];
    }
}

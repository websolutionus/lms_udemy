<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max: 255', 'string'],
            'heading' => ['nullable', 'max: 255', 'string'],
            'email' => ['required', 'max: 255', 'email', 'unique:users,email,'. auth()->user()->id],
            'about' => ['nullable', 'string', 'max:6000'],
            'gender' => ['nullable', 'in:male,female'],
            'avatar' => ['nullable', 'image', 'max:2000'],
        ];
    }
}

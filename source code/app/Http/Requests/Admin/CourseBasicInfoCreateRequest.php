<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CourseBasicInfoCreateRequest extends FormRequest
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
            'instructor' => ['required', 'integer'],
            'title' => ['required', 'max:255', 'string'],
            'seo_description' => ['nullable', 'max:255', 'string'],
            'demo_video_storage' => ['nullable', 'in:youtube,vimeo,external_link,upload', 'string'],
            'price' => ['required', 'numeric'],
            'discount' => ['nullable', 'numeric'],
            'description' => ['required'],
            'thumbnail' => ['required', 'image', 'max:3000'],
            'demo_video_source' => ['nullable']
        ];
    }
}

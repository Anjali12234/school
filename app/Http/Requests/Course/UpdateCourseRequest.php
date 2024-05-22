<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'description' => ['nullable'],
            'time' => ['required'],
            'image' => ['nullable','image','mimes:png,jpg,jpeg'],
            'price' => ['required','string'],
            'status' => ['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('courses', 'slug')->ignore($this->course)],
        ];
    }
}

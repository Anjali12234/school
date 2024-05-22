<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends FormRequest
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
            'image' => ['nullable','image','mimes:png,jpg,jpeg'],
            'status' => ['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('courses', 'slug')->ignore($this->course)],
        ];
    }
}

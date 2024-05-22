<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'about_description' => ['nullable','string'],
            'about_image' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'director_image' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'director_name' => ['required','string'],
            'director_email' => ['nullable','email'],
            'director_phone_number' => ['nullable'],
            'message' => ['nullable', 'string'],
            'post' => ['nullable'],
        ];
    }
}

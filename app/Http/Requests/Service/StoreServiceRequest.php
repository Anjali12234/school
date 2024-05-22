<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreServiceRequest extends FormRequest
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
            'image' => ['required','image','mimes:png,jpg,jpeg'],
            'status' => ['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('services', 'slug')],
        ];
    }
}

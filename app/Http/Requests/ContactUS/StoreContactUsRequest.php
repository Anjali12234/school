<?php

namespace App\Http\Requests\ContactUS;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'email' => ['required','email'],
            'phone' => ['required','numeric'],
            'message' => ['required','string'],
            'subject' => ['required','string'],

        ];
    }
}

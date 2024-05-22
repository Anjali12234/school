<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'institute_name' => ['required','string'],
            'institute_address' => ['required','string'],
            'description' => ['required','string'],
            'institute_phone' => ['required','string'],
            'institute_email' => ['required', 'email'],
            'institute_logo' => ['nullable','image', 'mimes:png,jpg,jpeg'],
            'map_url' => ['nullable', 'url'],
            'instagram_url' => ['nullable', 'url'],
            'facebook_url' => ['nullable', 'url'],
            'twiter_url' => ['nullable', 'url'],
        ];
    }
}

<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStaffRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required','string'],
            'gender' => ['required'],
            'dob' => ['nullable','date'],
            'phone' => ['nullable','integer'],
            'email' => ['nullable','email'],
            'address' => ['nullable','string'],
            'join_date' => ['nullable','date'],
            'leaving_date' => ['nullable','date'],
            'post' => ['nullable','string'],
            'position' => ['nullable','integer'],
            'description' => ['nullable'],
            'image' => ['nullable','image','mimes:png,jpg,jpeg'],
            'status' => ['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('staff', 'slug')->ignore($this->staff)],

        ];
    }
}

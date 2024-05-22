<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
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
            'full_name' => ['required','string'],
            'gender' => ['required'],
            'dob' => ['nullable','date'],
            'phone' => ['nullable','integer'],
            'email' => ['nullable','email'],
            'address' => ['nullable','string'],
            'admission_date' => ['nullable','date'],
            'leaving_date' => ['nullable','date'],
          
            'description' => ['nullable'],
            'image' => ['required','image','mimes:png,jpg,jpeg'],
            'status' => ['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('staff', 'slug')],
        ];
    }
}

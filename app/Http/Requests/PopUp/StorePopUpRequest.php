<?php

namespace App\Http\Requests\PopUp;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StorePopUpRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'image' => ['required','image','mimes:png,jpg,jpeg'],
            'status' => ['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('pop_ups', 'slug')],
        ];
    }
}

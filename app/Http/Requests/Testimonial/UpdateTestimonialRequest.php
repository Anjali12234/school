<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => ['nullable', 'mimes:png,jpg,jpeg'],
            'name' => ['required'],
            'post' => ['required'],
            'description' => ['required'],
        ];
    }
}

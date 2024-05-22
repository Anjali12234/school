<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => ['required', 'mimes:png,jpg,jpeg'],
            'name' => ['required'],
            'post' => ['required'],
            'description' => ['required'],
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'full_name',
        'gender',
        'dob',
        'phone',
        'email',
        'address',
        'admission_date',
        'leaving_date',
        'description',
        'image',
        'slug',
        'status'
    ];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn ($value) => $value ? $value->store('student','public') : null,
        );
    }
}

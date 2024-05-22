<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Staff extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable  = [
        'full_name',
        'gender',
        'dob',
        'phone',
        'email',
        'address',
        'join_date',
        'leaving_date',
        'post',
        'position',
        'description',
        'image',
        'slug',
        'status'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn ($value) => $value ? $value->store('staff','public') : null,
        );
    }
}

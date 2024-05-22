<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'status'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn ($value) => $value ? $value->store('service','public') : null,
        );
    }
}

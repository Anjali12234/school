<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'institute_name',
        'institute_address',
        'institute_phone',
        'institute_email',
        'institute_logo',
        'institute_ad_photo',
        'description',
        'instagram_url',
        'map_url',
        'facebook_url',
        'twiter_url',

    ];

    protected function instituteLogo(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn ($value) => $value ? $value->store('officeSetting', 'public') : null,
        );
    }


}

<?php

use App\Models\About;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

if (!function_exists('officeSetting')) {
    function officeSetting()
    {
        return Cache::rememberForever('office_setting', function () {
            return Setting::latest()->first();
        });
    }
}

if (!function_exists('about')) {
    function about()
    {
        return Cache::rememberForever('about', function () {
            return About::latest()->first();
        });
    }
}
if (!function_exists('service')) {
    function services()
    {
        
            return Service::latest()->limit(7)->get();
        
    }
}
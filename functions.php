<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (! function_exists('setting')) {
    function setting(string $name, $default = null) {
        $value = Cache::get('settings.'.$name, function () use ($name) {
            $value = Setting::select('value')->where(compact('name'))->first()->value;
            Cache::put('settings.'.$name, $value);
            return $value;
        });

        return $value ?? $default;
    }
}

if (! function_exists('app_logo')) {
    function app_logo() {
        return asset('storage'.DIRECTORY_SEPARATOR.setting('logo_path'));
    }
}

<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    function setting(string $name, $default = null) {
        return Setting::select('value')->whereName('logo_path')->first()->value ?? $default;
    }
}

if (! function_exists('app_logo')) {
    function app_logo() {
        return asset('storage'.DIRECTORY_SEPARATOR.setting('logo_path'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\RequestController;
use App\Models\Setting;

class SiteStatusController extends RequestController
{
    /**
     * Handle the incoming request.
     *
     * @param string $status
     * @return \Illuminate\Http\Response
     */
    public function __invoke($status = 'offline')
    {
        Setting::where('name', 'site_status')->update(['value' => $status]);
        return back();
    }
}

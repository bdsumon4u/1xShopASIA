<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\RequestController;

class SettingController extends RequestController
{
    /**
     * Handle the incoming request.
     *
     * @param null $tab
     * @return \Illuminate\Http\Response
     */
    public function __invoke($tab = null)
    {
        return view('admin.settings.index', compact('tab'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\RequestController;

class TopUpController extends RequestController
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if ($this->isMethod('GET')) {
            return view('admin.topups.index');
        }
    }
}

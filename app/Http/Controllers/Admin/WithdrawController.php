<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\RequestController;

class WithdrawController extends RequestController
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if ($this->isMethod('GET')) {
            return view('admin.withdraws.index');
        }
    }
}

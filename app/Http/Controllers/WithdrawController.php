<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends RequestController
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('withdraws.index');
        }
    }
}

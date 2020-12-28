<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopUpController extends RequestController
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
            return view('topups.index');
        }
    }
}

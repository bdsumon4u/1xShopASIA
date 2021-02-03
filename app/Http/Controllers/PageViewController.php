<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageViewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Page $page)
    {
        return view('page', compact('page'));
    }
}

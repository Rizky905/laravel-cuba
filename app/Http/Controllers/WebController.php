<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function Index(Request $request)
    {
        return view('sections.web.index');
    }
}

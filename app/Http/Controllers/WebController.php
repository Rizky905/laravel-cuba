<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Web;

class WebController extends Controller
{
    //
    public function Index(Request $request)
    {
        $segmentName = $request->segment(1);
        return view('sections.web.index', compact('segmentName'));
    }

    public function Create()
    {
        return view('sections.web.create');
    }

    public function CreateStore(PostRequest $request)
    {
        $validated = $request->validated();
        if ($validated) {
            Web::create($request->validated());

            flash()->addSuccess('Web created !');
            return back();
        } else {
            flash()->addError('Something wrong !');
            return back();
        }
    }
}

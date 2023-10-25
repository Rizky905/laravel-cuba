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

    public function Edit(Request $request)
    {
        $data = Web::findOrFail($request->id);
        return view('sections.web.edit', compact('data'));
    }

    public function Update(PostRequest $request)
    {
        $validated = $request->validated();
        if ($validated) {
            $update = Web::findOrFail($request->id);
            $update->update($request->validated());

            flash()->addSuccess('Web created !');
            return back();
        } else {
            flash()->addError('Something wrong !');
            return back();
        }
    }
}

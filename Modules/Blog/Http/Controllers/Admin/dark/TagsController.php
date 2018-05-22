<?php

namespace Modules\Blog\Http\Controllers\Admin\dark;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Blog\Entities\Tag;
use Illuminate\Validation\Validator;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('blog::admin.dark.tags.index', ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::admin.dark.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blog_tags|max:64',
        ]);
        Tag::create($request->all());
        return redirect()->route('tags.index');
    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('blog::admin.dark.tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:64',
        ]);

        $tag = Tag::find($id);
        $tag->update($request->all());
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        Tag::find($id)->delete();
        return redirect()->route('tags.index');
    }
}

<?php

namespace Modules\Blog\Http\Controllers\Admin\dark;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Comment;
use Illuminate\Validation\Validator;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $comments=Comment::all();
        return view('blog::admin.dark.comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::admin.dark.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|max:64',

        ]);

        Comment::create($request->all());
        return redirect()->route('comments.index');
    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('blog::admin.dark.comments.edit', ['comment' => $comment]);

    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'text' => 'required|max:64',
        ]);

        $comment = Comment::find($id);
        $comment->update($request->all());
        return redirect()->route('comments.index');
    }
    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect()->route('comments.index');
    }
}

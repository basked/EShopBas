<?php

namespace Modules\Blog\Http\Controllers\Admin\dark;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Post;
use Illuminate\Validation\Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $posts =Post::all();
        return view('blog::admin.dark.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::admin.dark.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blog_posts|max:64',
            'content' => 'required|max:255',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('blog::admin.dark.posts.edit', ['post' => $post]);

    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|unique:blog_posts|max:255',
            'content' => 'required|max:255',
        ]);

        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index');
    }
}

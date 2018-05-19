<?php

namespace Modules\Blog\Http\Controllers;

use App\User;
use Modules\Blog\Entities\basket;
use Modules\Blog\Entities\Comment;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */


    public function allData()
    {
        $post = Post::findOrFail(1);
//        $post->sl
        $dataPost = [
            'id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'content' => $post->content,
            'categoty' => $post->category->title,
            'categoty_slug' => $post->category->slug,
            'autor' => $post->autor->name,
            'autor_email' => $post->autor->email,
            'tags' => $post->tags->toArray()
        ];


      //  $bas = basket::teksab()


        $cat = Category::findOrFail(1);
        $dataCat = [
            'id' => $cat->id,
            'title' => $cat->title,
            'slug' => $cat->slug,
            'posts' => $cat->posts->toArray()
        ];


        $autor = User::findOrFail(1);
        $dataAutor = [
            'id' => $autor->id,
            'title' => $autor->name,
            'slug' => $autor->email,
            'is_admin' => $autor->is_admin,
            'status' => $autor->status,
            'posts' => $autor->posts->toArray(),
            'comments' => $autor-> comments->toArray()
        ];

        $comment=Comment::findOrFail(1);
        $dataComment=[
          'id'=>$comment->id,
          'text'=>$comment->text,
          'post'=>$comment->post->title,
          'user'=>$comment->autor->name
        ];


        $tag=Tag::findOrFail(1);
        $dataTag=[
            'id'=>$tag->id,
            'title'=>$tag->title,
            'slug'=>$tag->slug,
            'posts'=>$tag->posts->toArray(),

        ];

        $data = [
            'dataPost' => $dataPost,
            'dataCat' => $dataCat,
            'dataAutor' => $dataAutor,
            'dataComment' => $dataComment,
            'dataTag'=>$dataTag
        ];

      dd($data);

    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function index()
    {
       // return view('blog::admin.dark.categories.create');
        return view('blog::admin.dark.categories.index');
    }



    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::admin.dark.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('blog::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}

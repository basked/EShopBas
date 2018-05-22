<?php

namespace Modules\Blog\Http\Controllers\Admin\dark;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Category;
use Illuminate\Validation\Validator;
use Modules\Blog\Entities\Tag;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('blog::admin.dark.categories.index', ['categories' => $categories]);
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
        $request->validate([
            'title' => 'required|unique:blog_categories|max:64',
        ]);

        Category::create($request->all());
        return redirect()->route('blog-index');
    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('blog::admin.dark.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:blog_categories|max:64',
        ]);

        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('blog-index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('blog-index');
    }
}

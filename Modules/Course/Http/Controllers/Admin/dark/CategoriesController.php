<?php

namespace Modules\Course\Http\Controllers\Admin\dark;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Course\Entities\Category;
use Illuminate\Validation\Validator;

class CategoriesController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        return view('course::admin.dark.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Responsencoamitd_basdb@192.168.0.105
     */
    public function create()
    {
        return view('course::create');
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
        return view('course::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {

        return view('course::edit');
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
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index');
    }

    /**
     * Parse all.
     * @return Response
     */
    public function parse()
    {
        Category::CategoresParse();
        return redirect()->route('categories.index');
    }
}

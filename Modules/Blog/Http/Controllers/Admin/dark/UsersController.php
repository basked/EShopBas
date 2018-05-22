<?php

namespace Modules\Blog\Http\Controllers\Admin\dark;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\User;
use Illuminate\Validation\Validator;


class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('blog::admin.dark.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blog::admin.dark.users.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'is_admin' => $request['is_admin'],
        ]);
        return redirect()->route('users.index');
    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
//         return $user;
       return view('blog::admin.dark.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
//            'name' => 'string|max:255',
//            'email' => 'string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        $user = User::findOrFail($id);

        $user->update([
            'password' => bcrypt($request['password']),
            'is_admin' => $request['is_admin'],
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index');
    }
}

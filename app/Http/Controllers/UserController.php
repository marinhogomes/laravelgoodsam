<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use View;

class UserController extends Controller
{
    public function index()
    {
        return View::make('admin.list_user');
    }

    public function create()
    {
        return View::make('admin.edit_user');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $newUser = User::create(
            ['name' => $input['name'],
             'username' => $input['username'],
             'city' => $input['city'],
             'state' => $input['state'],
             'country' => $input['country'],
             'email' => $input['email'],
             'password' => bcrypt($input['password'])
             ]
        );

        $newUser->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return View::make('admin.edit_user',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);
        $user->name = $input['name'];
        $user->city = $input['city'];
        $user->state = $input['state'];
        $user->country = $input['country'];
        $user->email = $input['email'];

        $user->save();
    }

    public function destroy($id)
    {
        //
    }
}

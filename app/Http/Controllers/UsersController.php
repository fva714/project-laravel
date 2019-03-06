<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create(Request $request)
    {
        $request->request->add([
          'password' => Hash::make($request->input('password'))
        ]);

        User::create($request->all());

        return redirect()->route('users.index');
    }

    public function update(Request $request, User $user)
    {
        $request->merge([
          'password' => Hash::make($request->input('password'))
        ]);

        $user->update($request->all());

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}

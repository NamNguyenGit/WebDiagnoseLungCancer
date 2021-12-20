<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $user = User::all();
        return view('manager.users.index', compact('user'));
    }

    public function edit($id)
    {

        $user = User::where('id', $id)->first();
        return view('manager.users.update', compact('user'));
    }

    public function update(Request $request)
    {

        $edit = User::where('id', $request->id)->update([
            'role' => $request->role,
        ]);

        if ($edit) {
            return redirect()->route('users.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('users.index')->with('fail', 'Edit fail');
        }
    }

}

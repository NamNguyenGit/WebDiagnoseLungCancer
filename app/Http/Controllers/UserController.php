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

    public function update(Request $request)
    {

        $edit = User::where('id', $request->user_id)->update([
            'role' => $request->role,
        ]);

        return response($edit);
    }

}

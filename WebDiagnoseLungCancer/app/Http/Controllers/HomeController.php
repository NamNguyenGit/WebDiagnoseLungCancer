<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('clients.home');
    }

    public function login()
    {
        return view('clients.login');
    }

    public function check_login(Request $request)
    {
        $check = Auth::attempt($request->only('email', 'password'), $request->has('remember'));
        if ($check) {
            return redirect()->route('clients.home');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('clients.login');
    }

    public function admin(){
        return view('clients.admin-only');
    }

}

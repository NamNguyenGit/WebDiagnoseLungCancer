<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\RiskFactors;
use App\Models\Symptoms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $riskfactor = RiskFactors::all();
        $symptom = Symptoms::all();
        $newblog = Blog::orderByDesc('created_at')->paginate(2);
        $blog = Blog::paginate(4);
        return view('clients.home', compact('blog', 'newblog', 'riskfactor', 'symptom'));
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

    public function admin()
    {
        return view('clients.admin-only');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactus\CreateValidate;
use App\Http\Requests\Profile\UpdateValidate;
use App\Http\Requests\RegisterRequest;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\patients;
use App\Models\Preventions;
use App\Models\RiskFactors;
use App\Models\Symptoms;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('clients.home');
        } else {
            return view('clients.register');
        }
    }
    //post register
    public function postregister(RegisterRequest $request)
    {
        $add = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($add) {
            return redirect()->route('clients.login')->with('success', 'Register successful');
        } else {
            return redirect()->route('clients.login')->with('fail', 'Register fail');
        }
    }

    public function home()
    {
        $prevention = Preventions::all();
        $riskfactor = RiskFactors::all();
        $symptom = Symptoms::all();
        $newblog = Blog::orderByDesc('created_at')->paginate(2);
        $blog = Blog::paginate(3);
        return view('clients.home', compact('blog', 'newblog', 'riskfactor', 'symptom', 'prevention'));
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('clients.home');
        }
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

    public function contactus()
    {
        return view('clients.contactus');
    }

    public function postcontactus(CreateValidate $request)
    {
        $add = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'messages' => $request->messages,
        ]);

        if ($add) {
            return redirect()->route('clients.contact')->with('success', 'Sent successful');
        } else {
            return redirect()->route('clients.contact')->with('fail', 'Sent fail');
        }
    }

    public function blog()
    {
        $blog = Blog::all();
        return view('clients.blogs', compact('blog'));
    }

    public function detailblog($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('clients.blogdetail', compact('blog'));
    }

    public function about()
    {
        return view('clients.about');
    }

    public function profile($id)
    {
        $auth = auth()->user();
        $patients = patients::where('id', $id)->first();
        return view('clients.profile', compact('patients'));
    }

    public function postprofile(UpdateValidate $request)
    {
        $edit = patients::where('id', $request->id)->update([
            'dateofbirth' => $request->dateofbirth,
            'address' => $request->address,
            'phone' => $request->phone,
            'symptomps' => $request->symptomps,
            'date_diagnosis' => $request->date_diagnosis,
            'date_ctscan' => $request->date_ctscan,
        ]);

        if ($edit) {
            return redirect()->route('clients.profile')->with('success', 'Edit success');
        } else {
            return redirect()->route('clients.profile')->with('fail', 'Edit fail');
        }
    }

}

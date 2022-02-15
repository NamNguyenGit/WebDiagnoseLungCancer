<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    // Github login
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    // Github callback
    public function handleGithubCallback()
    {
        
        $user = Socialite::driver('github')->user();
       
        $user = User::where('provider_id',$user->getId())->first();
        if(!$user){
            $user = User::create([
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'provider_id' => $user->getId(),
            ]);
        }
        
        //add to database
        Auth::login($user,true);
        return redirect()->route('clients.home');
       
    }

    

    
}

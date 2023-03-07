<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Socialite;

class GoogleController extends Controller
{
    //

    public function redirectToGoogle()
    {
    	// 
    	return Socialite::driver('google')->redirect();
    }
    public function handleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('id_google', $user->getId())->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'nama' => $user->getName(),
                    'email' => $user->getEmail(),
                    'id_google' => $user->getId(),
                    'password' => bcrypt($user->getEmail())
                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
            
        } catch (Exception $e) {
            
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('login.login');
    }


    public function cek_login(Request $request, User $user)
    {
        $cek_data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $user = User::where('email', $cek_data['email'])->first();

        if($user && Hash::check($cek_data['password'], $user->password)) {
            if($user->email_verified_at !== null) {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('/dashboard')->with('flash','login');
            } else {
                return view('batas');
            }
        }

        return back()->with('login_gagal','Login gagal !');
    }

    public function lupa_sandi()
    {
        return view('login.reset-password');
    }
    

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}

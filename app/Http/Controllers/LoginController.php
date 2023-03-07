<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('login.login');
    }
    public function cek_login(Request $request)
    {
    	$cek_data = $request->validate([
    		'email' => 'required|email:dns',
    		'password' => 'required'
    	]);
    	if(Auth::attempt($cek_data)){
    		$request->session()->regenerate();
    		return redirect()->intended('/dashboard');
    	}
    	return back()->with('login_gagal','Login gagal !');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}

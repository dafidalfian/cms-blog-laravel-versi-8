<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function index()
    {
    	return view('register.index');
    }
    public function store(Request $request, User $user)
    {
    	$cek = $request->validate([
    		'nama' => 'required|min:3|max:50',
    		'username' => 'required|unique:users',
    		'email' => 'required|email:dns',
    		'password' => 'required|min:3|max:50'
    	]);
    	$cek['password'] = bcrypt($request->password);
    	User::create($cek);
    	return redirect('/login')->with('success','Register Success');
    }
}

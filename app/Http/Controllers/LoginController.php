<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Pengaturan;

class LoginController extends Controller
{
    //
    public function login()
    {
        // mengambil data berdasarkan kolom 'icon_situs'
        // $logo = Pengaturan::where('icon_situs','icon/wkdcpdGTqGb8GBlCIRMgPd8bBXHs8gdCZw8YAo4N.png')->first();
        $logo = DB::table('pengaturan')->first();
    	return view('login.login', compact('logo'));
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
                return redirect()->intended('/dashboard')->with('flash','Anda berhasil login !');
            } else {
                return view('batas');
            }
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

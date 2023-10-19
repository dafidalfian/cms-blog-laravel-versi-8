<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Mail\MailSend;

class RegisterController extends Controller
{
    //
    public function index()
    {
    	return view('register.index');
    }
    public function store(Request $request, User $user)
    {
        $str = Str::random(100);
    	$cek = $request->validate([
    		'nama' => 'required|min:3|max:50',
    		'username' => 'required|unique:users',
    		'email' => 'required|email:dns',
    		'password' => 'required|min:3|max:50'
    	]);
<<<<<<< HEAD

        if($request->file('foto_pengguna')){
            $cek['foto_pengguna'] = $request->file('foto_pengguna')->store('profile');
        }

=======
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
    	$cek['password'] = bcrypt($request->password);
        $cek['verify_key'] = $str;
        $details = [
            'nama' => $request->nama,
            'username' => $request->username,
            'website' => "Website blog",
            'datetime' => date('Y-m-d H:i:s'),
<<<<<<< HEAD
            'url' => $request->getHttpHost().'/registrasi/accounts/verifikasi/'.$str,
            'email' => $request->email
=======
            'url' => $request->getHttpHost().'/registrasi/accounts/verifikasi/'.$str
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
        ];
        Mail::to($request->email)->send(new MailSend($details));
    	User::create($cek);
    	return back()->with('success','Register Success');
    }

    public function verify($verify_key)
    {
        // 
        $keyCheck = User::select('verify_key')->where('verify_key',$verify_key)->exists();

        if($keyCheck){
            $user = User::where('verify_key', $verify_key)->update([
                'email_verified_at' => now()]);
<<<<<<< HEAD
            return response("Verifikasi akun berhasil, akun anda sudah aktif ...", 200)
=======
            return response("verifikasi berhasil, akun anda sudah aktif ...", 200)
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
               ->header('Content-Type', 'text/html')
               ->header('Refresh', '5;url=/login');
        } else{
            return "keys tidak aktif";
        }
    }
}

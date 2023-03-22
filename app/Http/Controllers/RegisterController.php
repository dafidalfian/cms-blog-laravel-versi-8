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
    	$cek['password'] = bcrypt($request->password);
        $cek['verify_key'] = $str;
        $details = [
            'nama' => $request->nama,
            'username' => $request->username,
            'website' => "Website blog",
            'datetime' => date('Y-m-d H:i:s'),
            'url' => $request->getHttpHost().'/registrasi/accounts/verifikasi/'.$str
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
            return response("verifikasi berhasil, akun anda sudah aktif ...", 200)
               ->header('Content-Type', 'text/html')
               ->header('Refresh', '5;url=/login');
        } else{
            return "keys tidak aktif";
        }
    }
}

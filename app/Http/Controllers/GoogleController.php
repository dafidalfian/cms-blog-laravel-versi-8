<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
    public function handleCallback(Request $request, User $user)
    {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('id_google', $user->getId())->first();
        
        if($finduser){
         Auth::login($finduser);
         return redirect()->intended('dashboard')->with('flash','Anda berhasil login dengan akun google !');
        } else {
            $newUser = User::create([
                'nama' => $user->name,
                'email' => $user->email,
                'id_google' => $user->id,
                'password' => bcrypt($user->email),
            ]);
            $fileContents = file_get_contents($user->avatar);
            $fileName = $user->id. '.jpg'; // Simpan nama file sebagai ID Google
            $newUserImagePath = 'profile/'.$fileName;
            Storage::put($newUserImagePath, $fileContents);

            $newUser->foto_pengguna = $newUserImagePath;
            $newUser['verify_key'] = $str;
            $newUser->save();

            Auth::login($newUser);
            return redirect()->intended('dashboard')->with('flash','berhasil login dengan google');
        }
    }
}

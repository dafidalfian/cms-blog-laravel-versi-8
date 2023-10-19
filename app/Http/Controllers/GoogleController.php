<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $user = Socialite::driver('google')->user();
        $finduser = User::where('id_google', $user->getId())->first();
        
        if($finduser){
         Auth::login($finduser);
         return redirect()->intended('dashboard');
        } else {
            $newUser = User::create([
             'nama' => $user->name,
             'email' => $user->email,
             'id_google' => $user->id,
             'password' => bcrypt($user->email),
            ]);
            $fileContents = file_get_contents($user->avatar);
        $fileName = $user->id.'.jpg'; // simpan nama file sebagai ID Facebook
        $newUserImagePath = 'profile/'.$fileName;
        Storage::put($newUserImagePath, $fileContents);

        $newUser->foto_pengguna = $newUserImagePath;
        $newUser->save();

            Auth::login($newUser);
            return redirect()->intended('dashboard');
        }
    }
}

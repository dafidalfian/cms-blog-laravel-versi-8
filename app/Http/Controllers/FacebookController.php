<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class FacebookController extends Controller
{
    //
    public function redirect_facebook()
    {
    	return Socialite::driver('facebook')->redirect();
    }

    public function handlefacebook(){
    $user = Socialite::driver('facebook')->user();
    $findUser = User::where('facebook_id', $user->id)->first();

    if($findUser){
        Auth::login($findUser);
        return redirect()->intended('dashboard');
    } else {
        $newUser = User::create([
            'nama' => $user->name,
            'email' => $user->email,
            'facebook_id' => $user->id,
            'password' => bcrypt($user->email)
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

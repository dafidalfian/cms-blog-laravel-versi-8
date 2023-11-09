<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Mail\VerifikasiUlangMail;
use Illuminate\Support\Facades\Mail;
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
        $str = Str::random(100);
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
            return redirect()->intended('dashboard')->with('flash','Anda berhasil daftar dengan akun google');
        }
    }
    public function kirim_link_untuk_verifikasi_ulang(Request $request)
    {
        // Logika untuk mengirim email verifikasi ulang
        $kode = auth()->user()->verify_key;
        $verificationLink = [
            'nama' => auth()->user()->nama,
            'email' => auth()->user()->email,
            'foto_pengguna' => asset('storage/'.auth()->user()->foto_pengguna),
            'url' => $request->getHttpHost().'/dashboard/proses_verifikasi/'.$kode,
            'datetime' => date('Y-m-d H:i:s')
        ];
        Mail::to(auth()->user()->email)->send(new VerifikasiUlangMail($verificationLink));
        return back()->with('flash', 'Link verifikasi ulang berhasil dikirim ke email Anda.');
    }

    public function verifikasi_selesai($kode_verifikasi)
    {
        $keyCheck = User::select('verify_key')->where('verify_key',$kode_verifikasi)->exists();

        if($keyCheck){
            $user = User::where('verify_key', $kode_verifikasi)->update([
                'email_verified_at' => now()]);
            return back()->with('flash','Akun berhasil diverifikasi');
        } else{
            return "Gagal diverifikasi";
        }
    }

}

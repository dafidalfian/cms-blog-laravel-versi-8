<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Mail\MailSend;
use App\Mail\ResetPasswordEmail;

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

        if($request->file('foto_pengguna')){
            $cek['foto_pengguna'] = $request->file('foto_pengguna')->store('profile');
        }

    	$cek['password'] = bcrypt($request->password);
        $cek['verify_key'] = $str;
        $details = [
            'nama' => $request->nama,
            'username' => $request->username,
            'website' => "Website blog",
            'datetime' => date('Y-m-d H:i:s'),
            'url' => $request->getHttpHost().'/registrasi/accounts/verifikasi/'.$str,
            'email' => $request->email
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
            return response("Verifikasi akun berhasil, akun anda sudah aktif ...", 200)
               ->header('Content-Type', 'text/html')
               ->header('Refresh', '5;url=/login');
        } else{
            return "keys tidak aktif";
        }
    }

    public function lupa()
    {
        return view('folder_file_reset.lupa_sandi');
    }
    public function kirim_link_lupa_sandi(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Temukan pengguna berdasarkan alamat email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Alamat email tidak ditemukan.');
        }

        // Membuat token unik untuk reset password
        $token = Str::random(60);

        // Menyimpan token dalam tabel 'password_resets' atau tabel lain yang Anda tentukan
        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            ['token' => $token, 'created_at' => now()]
        );

        // Membuat tautan reset password

        // Kirim email dengan tautan reset password
        $details = [
            'judul' => "Lupa Password !",
            'text' => "Anda melakukan reset password untuk menganti sandi yang lupa",
            'url' => $request->getHttpHost().'/folder_file_reset/ganti_sandi/'.$token . '?email=' . $request->email,
            'email' => $request->email
        ];

        Mail::to($user->email)->send(new ResetPasswordEmail($details));

        return back()->with('success', 'Email reset password telah dikirim.');
    }

    public function ubah_sandi($token)
    {
        // Temukan data reset password berdasarkan token
        $resetData = DB::table('password_resets')->where('token', $token)->first();

        if (!$resetData) {
            return abort(419); // Jika token tidak valid, tampilkan halaman 404
        }

        return view('folder_file_reset.ganti_sandi', ['token' => $token]);
    }

    public function proses_ubah_sandi(Request $request, $token)
    {
        // Validasi data input yang diterima dari form
        $request->validate([
            'password' => 'required', // Pastikan password cocok dengan konfirmasi
        ]);

        // Temukan data reset password berdasarkan token
        $resetData = DB::table('password_resets')->where('token', $token)->first();

        if (!$resetData) {
            return abort(404); // Jika token tidak valid, tampilkan halaman 404
        }

        // Temukan pengguna berdasarkan alamat email dalam data reset password
        $user = User::where('email', $resetData->email)->first();

        if (!$user) {
            return abort(404); // Jika pengguna tidak ditemukan, tampilkan halaman 404
        }

        // Perbarui kata sandi pengguna
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        // Hapus data reset password setelah pengguna berhasil mengubah kata sandi
        DB::table('password_resets')->where('email', $resetData->email)->delete();

        // Redirect pengguna ke halaman login atau halaman yang sesuai
        return redirect('/login')->with('success', 'Kata sandi berhasil diubah. Silakan login.');
    }


}

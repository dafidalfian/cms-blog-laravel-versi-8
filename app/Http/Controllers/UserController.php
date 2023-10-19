<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        $data_user = User::where('tipe_akun', '!=', 'superuser')
                          ->whereIn('tipe_akun', ['admin', 'karyawan'])
                          ->latest()->get();
        return view('dashboard.user.index', compact('data_user'));
    }

=======
    	$data_user = User::all();
    	return view('dashboard.user.index', compact('data_user'));
    }
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
    public function create()
    {
    	return view('dashboard.user.create');
    }
    public function store(Request $request, User $user)
    {
    	$validate_data_user = $request->validate([
    		'nama' => 'required|min:2|max:100',
    		'username' => 'required|min:5|max:20|unique:users',
    		'email' => 'required|email:dns|unique:users',
    		'tipe_akun' => 'required'
    		
    	]);

        // $validate_data_user['email_verified_at'] = now();
        $validate_data_user['email_verified_at'] = \Carbon\Carbon::now();

    	// $validate_data_user['password'] = bcrypt($request->email);
        if($request->file('foto_pengguna')){
            $validate_data_user['foto_pengguna'] = $request->file('foto_pengguna')->store('profile');
        }
        

        // $password = $request->password ? bcrypt($request->password) : bcrypt($request->email);
        if($request->password){
            $validate_data_user['password'] = bcrypt($request->password);
        } else {
            $validate_data_user['password'] = bcrypt($request->email);
        }


    	User::create($validate_data_user);
    	return redirect('/dashboard/user')->with('success','Data user berhasil di tambahkan!');
    }
    public function edit(User $user)
    {
        return view('dashboard.user.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        //
        $validasi = [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
<<<<<<< HEAD
            'tipe_akun' => 'required'
        ];
        $validateData = $request->validate($validasi);
        if ($request->input('password')) {
        // Jika password baru diberikan, hash dan simpan
            $validateData['password'] = bcrypt($request->password);
        } else {
            // Jika password tidak diberikan, gunakan password yang lama
            unset($validateData['password']); // Hapus password dari data validasi
=======
            'tipe_akun' => 'required',
        ];

        $validateData = $request->validate($validasi);
        if($request->has('password')){
            $validateData['password'] = bcrypt($request->password);
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
        }

        if($request->file('foto_pengguna')){
            if($request->foto_baru){
                Storage::delete($request->foto_baru);
            }
            $validateData['foto_pengguna'] = $request->file('foto_pengguna')->store('profile');
        }

        User::where('id', $user->id)->update($validateData);
        return redirect('dashboard/user')->with('success','Data user berhasil diperbarui!');

    }
    public function destroy(User $user)
    {
        if($user->foto_pengguna){
            Storage::delete($user->foto_pengguna);
        }
        User::destroy($user->id);
    	return back()->with('hapus','User berhasil di hapus');
    }

}

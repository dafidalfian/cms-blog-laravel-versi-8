<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AkunSuperController extends Controller
{
    //
    public function index()
    {
    	$datasuperuser = User::where('tipe_akun','superuser')->get();
    	return view('dashboard.akun.index', compact('datasuperuser'));
    }
    public function tambah_akun_super()
    {
    	return view('dashboard.akun.tambah_akun');
    }
    public function simpan_akun(Request $request, User $user)
    {
        // 
        $validasi = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'tipe_akun' => 'required'
        ]);
        $namalengkap = $request->nama .' '. $request->nama_belakang;
        $validasi['nama'] = $namalengkap;
        $validasi['email_verified_at'] = \Carbon\Carbon::now();
        if($request->password){
            $validasi['password'] = bcrypt($request->password);
        } else{
            $validasi['password'] = bcrypt($request->email);
        }
        if($request->file('foto_pengguna')){
            $validasi['foto_pengguna'] = $request->file('foto_pengguna')->store('profile');
        }
        User::create($validasi);
        return redirect('dashboard/my/akun')->with('status','Data Berhasil di tambahkan');
    }

    public function edit_akun(User $user)
    {
        return view('dashboard.akun.edit_akun', compact('user'));
    }
    public function ubah_akun(Request $request, User $user)
    {
        // 
        $validasiData = [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'tipe_akun' => 'required'
        ];
        $validasiDataEdit = $request->validate($validasiData);
        if($request->foto_pengguna){
            if($request->foto_lama){
                Storage::delete($request->foto_lama);
            }
            $validasiDataEdit['foto_pengguna'] = $request->file('foto_pengguna')->store('profile');
        }
        if($request->input('password')){
            $validasiDataEdit['password'] = bcrypt($request->password);
        }
        else{
            unset($validasiDataEdit['password']);
        }
        User::where('id', $user->id)->update($validasiDataEdit);
        return redirect('dashboard/my/akun')->with('status','Data berhasil di ubah');
    }
    public function hapus_akun(User $user)
    {
        if($user->foto_pengguna){
            Storage::delete($user->foto_pengguna);
        }
        User::destroy($user->id);
        return back()->with('status','Data akun berhasil dihapus!');
    }
}

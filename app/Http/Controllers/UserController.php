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
    	$data_user = User::all();
    	return view('dashboard.user.index', compact('data_user'));
    }
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
    public function edit($id)
    {
        $data_edit = User::find($id);
        return view('dashboard.user.edit', compact('data_edit'));
    }
    public function update(Request $request, $id)
    {
        // 
        $validate_data_user_edit = $request->validate([
            'nama' => 'required|min:2|max:100',
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:dns|unique:users',
            'tipe_akun' => 'required'
            
        ]);
        if($request->file('foto_pengguna')){
            $validate_data_user_edit['foto_pengguna'] = $request->file('foto_pengguna')->store('profile');
        }

        if($request->password){
            $validate_data_user['password'] = bcrypt($request->password);
        } else {
            $validate_data_user['password'] = bcrypt($request->email);
        }
        $user = User::find($id);
        $user->update($validate_data_user_edit);
        return redirect('dashboard/user')->with('success','Data user berhasil diperbarui!');

    }
    public function destroy($id)
    {
    	$temper_data = User::find($id)->delete();
    	return back()->with('hapus','User berhasil di hapus');
    }
}

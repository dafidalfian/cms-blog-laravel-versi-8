<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        

        $password = $request->password ? bcrypt($request->password) : bcrypt($request->email);
        $validate_data_user['password'] = $password;

    	User::create($validate_data_user);
    	return redirect('/dashboard/user')->with('success','Data user berhasil di tambahkan!');
    }
    public function edit($id)
    {
        $data_edit = User::find($id);
        return view('dashboard.user.edit', compact('data_edit'));
    }
    public function update()
    {
        // 
    }
    public function destroy($id)
    {
    	$temper_data = User::find($id)->delete();
    	return back()->with('hapus','User berhasil di hapus');
    }
}

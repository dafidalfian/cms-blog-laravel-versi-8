<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7

class PengaturanController extends Controller
{
    //
    public function index()
    {
    	$set = Pengaturan::first();
    	return view('dashboard.pengaturan.index', compact('set'));
    }

    public function ubah(Request $request)
    {
    	Pengaturan::where('id', $request->id)->update([
    		'judul_situs' => $request->judul_situs,
<<<<<<< HEAD
    		'deskripsi_situs' => $request->deskripsi_situs,
            'icon_situs' => $request->file('icon_situs')->store('icon')
=======
    		'deskripsi_situs' => $request->deskripsi_situs
>>>>>>> f018c561e7241d03d442c8fd27b2a604320221f7
    	]);
    	return back()->with('status','Pengaturan website berhasil di ubah !');
    }

}

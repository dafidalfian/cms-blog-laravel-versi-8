<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;

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
    		'deskripsi_situs' => $request->deskripsi_situs
    	]);
    	return back()->with('status','Pengaturan website berhasil di ubah !');
    }

}

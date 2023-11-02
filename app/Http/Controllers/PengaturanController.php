<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Storage;

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
    		'deskripsi_situs' => $request->deskripsi_situs,
            'icon_situs' => $request->file('icon_situs')->store('icon')
    	]);
    	return back()->with('status','Pengaturan website berhasil di ubah !');
    }

}

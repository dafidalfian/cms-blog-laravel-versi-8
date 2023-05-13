<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarcodeQR;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\Generator;
use Storage;

class BarcodeController extends Controller
{
    //
    public function index()
    {
        $bar = BarcodeQR::latest()->get();
        return view('dashboard.barcode.index', compact('bar'));
    }

    public function tambah()
    {
    	return view('dashboard.barcode.tambah');
    }
    public function simpan(Request $request)
    {
    	// 
        $logo = public_path("images/wedos.png");
        
    	BarcodeQR::create([
            'nama' => $request->nama,
            'kode_nama' => $request->nama
        ]);
    	return redirect('dashboard/barcode')->with('status','Barcode berhasil di tambah !');
    }
}

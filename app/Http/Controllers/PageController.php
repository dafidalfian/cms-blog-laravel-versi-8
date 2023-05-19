<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use App\Models\Category;

class PageController extends Controller
{
    //
    public function about()
    {
    	$site = Pengaturan::first();
    	$data = array(
    					'title' => $site->judul_situs,
    					'site' => $site,
    					'content' => 'home/about',
    					'kategori' => $kategori =  Category::all(),
    				);

    	return view('layout/wrapper', $data);
    }
}

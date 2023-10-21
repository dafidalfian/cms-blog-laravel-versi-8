<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengaturan;
use App\Models\Posts;
use App\Models\Category;
use App\Models\User;
use App\Models\Tags;

class BeritaController extends Controller
{
    //
    public function index()
    {
    	$site = DB::table('pengaturan')->first();
    	$berita =  Posts::all();
        $kategori =\App\Models\Category::all();
    	$data = array(	'title' => $site->judul_situs,
    					'site' => $site,
    					'content' => 'berita/index',
    					'berita' => $berita,
                        'kategori' => $kategori
    				);
    	return view('layout/wrapper', $data);
    }
    public function data_post()
    {
        $site = DB::table('pengaturan')->first();
        $berita =  Posts::all();
        $kategori = \App\Models\Category::all();
        $data = array(  'title' => 'Daftar Post',
                        'site' => $site,
                        'content' => 'berita/kategori',
                        'berita' => $berita,
                        'kategori' => $kategori,
                        'tag' => $tag = Tags::all(),
                    );
        return view('layout/wrapper', $data);
    }
	public function baca($slug)
	{
		// 
		$site = Pengaturan::first();
        $kategori = Category::all();
        $tag = Tags::all();
        $berita = Posts::with('category')->where('slug', $slug)->first();
		$data = array(
			'title' => $site->judul_situs,
            'berita' => $berita,
            'site' => $site,
			'content' => 'berita/baca',
            'kategori' => $kategori,
            'tag' => $tag
		);
		return view('layout/wrapper', $data);
	}
    public function kategori_list(Category $category)
    {
        $site = DB::table('pengaturan')->first();
        $berita =  $category->posts()->get();
        $ambil_kate = Category::where('id', $category->id)->first();
        $kategori = Category::all();
        $data = array(  'title' => $site->judul_situs,
                        'site' => $site,
                        'content' => 'berita/kategori',
                        'berita' => $berita,
                        'kategori' => $kategori,
                        'tag' => $tag = Tags::all(),
                        'kate' => $ambil_kate
                    );
        return view('layout/wrapper', $data);
    }

    public function list_tag($slug)
    {
        $site = Pengaturan::first();
        $kategori = Category::all();
        $tag = Tags::all();
        $tag_terpilih = Tags::where('slug', $slug)->firstOrFail();
        $berita = $tag_terpilih->posts;
        $data = array(
            'title' => $site->judul_situs,
            'berita' => $berita,
            'site' => $site,
            'content' => 'berita/tag',
            'kategori' => $kategori,
            'tag' => $tag
        );
        return view('layout/wrapper', $data);
    }


}

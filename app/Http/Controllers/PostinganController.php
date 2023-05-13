<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tags;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class PostinganController extends Controller
{
    //
    public function index()
    {

    	$datapost = Posts::latest()->get();
    	return view('dashboard.postingan.index', compact('datapost'));
    }
    public function create()
    {
    	$dataTags = Tags::all();
    	$datakategori = Category::all();
    	return view('dashboard.postingan.create', compact('datakategori','dataTags'));
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'judul' => 'required']);
    	$ambil = [
    		'judul' => $request->judul,
    		'slug' => Str::slug($request->judul),
    		'category_id' => $request->category_id,
    		'isi_postingan' => $request->isi_postingan,
    		'foto_postingan' => $request->foto_postingan,
            'user_id' => Auth::id()
    	];
    	if($request->file('foto_postingan')){
    		$ambil['foto_postingan'] = $request->file('foto_postingan')->store('postingan_foto');
    	}
    	$post = Posts::create($ambil);
        $post->tags()->attach($request->tags);
    	return redirect('dashboard/postingan')->with('status','Postingan berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $datatag = Tags::all();
    	$datakategori = Category::all();
    	$editDataPost = Posts::find($id);
    	return view('dashboard.postingan.edit', compact('editDataPost','datakategori','datatag'));
    }
    public function update(Request $request, $id)
    {
    	$request->validate(['judul' => 'required']);
    	$tangkapData = [
    		'judul' => $request->judul,
    		'category_id' => $request->category_id,
    		'slug' => Str::slug($request->judul),
            'isi_postingan' => $request->isi_postingan
    	];
    	if($request->file('foto_postingan')){
    		if($request->oldFoto){
    			Storage::delete($request->oldFoto);
    		}
    		$tangkapData['foto_postingan'] = $request->file('foto_postingan')->store('postingan_foto');
    	}
    	$post = Posts::find($id);
        $post->update($tangkapData);
        $post->tags()->sync($request->tags);
    	return redirect('dashboard/postingan')->with('status','Postingan berhasil di edit');
    }
    public function destroy(Posts $posts)
    {
    	// if($posts->foto_postingan){
    	// 	Storage::delete($posts->foto_postingan);
    	// }
    	Posts::destroy($posts->id);
        session()->flash('hapus', $posts->judul);
    	return back();
    }
    public function lihat_trash(){
        $data_hapus = Posts::onlyTrashed()->get();
        return view('dashboard.postingan.trash.trash', compact('data_hapus'));
    }
    public function kembalikan_postingan($id){
        $postingan = Posts::withTrashed()->where('id',$id)->first();
        if($postingan->restore()){
            session()->flash('kambalikan', $postingan->judul);
            return back();
        }
    }

    public function hapus_permanen($id)
    {
        $postingan = Posts::withTrashed()->where('id',$id)->first();
        $post = $postingan;
        if($postingan->forceDelete()){
            if($post->foto_postingan){
                Storage::delete($post->foto_postingan);
            }
            session()->flash('permanen', $postingan->judul);
        }
        $post->tags()->detach();
        return back();
    }
//     public function hapus_permanen($id)
// {
//     $postingan = Posts::withTrashed()->where('id',$id)->first();
//     $post = $postingan;
//     if($postingan->forceDelete()){
//         if($post->foto_postingan){
//             Storage::delete($post->foto_postingan);
//         }
//         session()->flash('permanen', $postingan->judul);
//     }
//     $post->tags()->detach();
//     return back();
// }

}

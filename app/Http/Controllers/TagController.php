<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Tags;

class TagController extends Controller
{
    //
    public function index(){
    	$tag = Tags::latest()->get();
    	return view('dashboard.tag.index', compact('tag'));
    }
    public function create()
    {
    	$data_tag = Tags::all();
    	return view('dashboard.tag.create', compact('data_tag'));
    }
    public function store(Request $request, Tags $tag)
    {
    	$tag = Tags::create([
    		'nama_tag' => $request->nama_tag,
    		'slug' => Str::slug($request->nama_tag),
    		'deskripsi' => $request->deskripsi
    	]);
    	return back()->with('status','Tag berhasil di tambahkan');
    }
    public function edit($id)
    {
    	$edit_tag = Tags::find($id);
    	return view('dashboard.tag.edit', compact('edit_tag'));
    }
    public function update(Request $request, Tags $tags)
    {
        Tags::where('id',$tags->id)->update([
            'nama_tag' => $request->nama_tag,
            'slug' => Str::slug($request->nama_tag),
            'deskripsi' => $request->deskripsi
        ]);
        return back()->with('status','Tag berhasil di ubah');
    }
    public function destroy(Tags $tags)
    {
        Tags::destroy($tags->id);
        return back()->with('status_ok','Tag berhasil di hapus');
    }
}

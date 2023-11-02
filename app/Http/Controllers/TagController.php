<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Tags;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

class TagController extends Controller
{
    //
    public function index(){
    	return view('dashboard.tag.index',[
            "tag" => Tags::latest()->get()
        ]);
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
        $message = '<strong>' . $request->nama_tag . '</strong> ditambahkan.';
    	return redirect('dashboard/tag')->with('flash', $message);
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
        $message = '<strong>' . $request->nama_tag . '</strong> diubah.';
        return back()->with('flash', $message);
    }
    public function destroy(Request $request, Tags $tags)
    {
        Tags::destroy($tags->id);
        $message = '<strong>' . $request->nama_tag . '</strong> dihapus.';
        return back()->with('flash', $message);
    }
}

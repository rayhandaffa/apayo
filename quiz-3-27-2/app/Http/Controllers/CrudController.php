<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CrudController extends Controller
{
    public function create(){
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:berita',
            'content' => 'required|unique:berita',
            'penulis' => 'required|unique:berita'
        ]);
        $query = DB::table('berita')->insert([
            "judul" => $request["judul"],
            "content" => $request["content"],
            'penulis' => $request["penulis"],
        ]);
        return redirect('/berita');
    }

    public function index(){
        $listberita = DB::table('berita')->get();
        return view('berita.index', compact('listberita'));
    }
    
    public function show($id){
        $berita = DB::table('berita')->where('id', $id)->first();
        return view('berita.show', compact('berita'));
    }
    public function edit($id) {
        $berita = DB::table('berita')->where('id', $id)->first();
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|unique:berita',
            'content' => 'required|unique:berita',
            'umur' => 'required|unique:berita'
        ]);
        $query = DB::table('berita')
            ->where('id', $id)
            ->update([
            "judul" => $request["judul"],
            "content" => $request["content"],
            'umur' => $request["umur"],
        ]);
        return redirect('/berita');
    }

    public function destroy($id){
        $query = DB::table('berita')->where('id', $id)->delete();
        return redirect('/berita');
    }
}

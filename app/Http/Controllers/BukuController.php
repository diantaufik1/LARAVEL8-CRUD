<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index(){
    //model
        $buku = Buku::all();
    //database
        // $buku = DB::table('bukus');
        return view('buku.index', [
            'buku' => $buku
        ]);
    }
    public function tambah (){
        return view('buku.tambah');
    }

    public function tambahbuku(Request $request){
        $validateData = $request->validate([
            'nama_buku' => 'required',
            'rilis' => 'required'
        ]);
        Buku::create($validateData);    // Buku::insert  == Buku::create
        return redirect('buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', [
            'buku' => $buku
        ]);
    }

    public function update(Request $request, $id)
    {
    //database
        // $update = DB::table('bukus')->where('id', $id)->update([
        //     'nama_buku' => $request->nama_buku,
        //     'rilis' => $request->rilis,
        // ]);
    //model
        $update = Buku::find($id)->update([
            'nama_buku' => $request->nama_buku,
            'rilis' => $request->rilis,
        ]);
        return redirect('buku');
    }

    public function delete($id)
    {
    //database
        // $delete = DB::table('bukus')->where('id', $id)->delete();
    //model
        $delete = Buku::find($id);
        $delete->delete();
        return redirect('buku');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function buku(){
        $data_buku =BukuModel::all()->sortBy('id');
        $jumlah_buku = BukuModel::count();
        $jumlah_harga = BukuModel::sum('harga');
        return view('buku', compact('data_buku','jumlah_buku','jumlah_harga'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new BukuModel();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = BukuModel::find($id);
        $buku->delete();
        return redirect('/buku');
    }


    // public function buku(){
    //     return view('buku',[
    //         'data_buku' => BukuModel::all()->sortByDesc('id'),
    //         'data_buku_sort' => BukuModel::all(),
    //         'count_data' => BukuModel::all()->count(),
    //         'sum_harga' => BukuModel::all()->sum('harga'),
    //         'no' => 0,
    //     ]);
    // }
}

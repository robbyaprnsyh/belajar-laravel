<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function menampilkan() {
        $data = Produk::all();
        return view('produk/index', compact('data'));
    }

    public function show($id){
        $data = Produk::findOrFail($id);
        return view('produk/show', compact('data'));
    }
}

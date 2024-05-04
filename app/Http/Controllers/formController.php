<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class formController extends Controller
{
    public function GetForm()
    {
        return view('Form');
    }

    public function sendRequest(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kondisi' => 'required|string|in:Baru,Bekas',
            'deskripsi' => 'required|string',
            'gambar' => 'required|url',
        ]);

        $produk = new Product();
        $produk->nama_produk = $request->nama_produk;
        $produk->berat = $request->berat;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->kondisi = $request->kondisi;
        $produk->deskripsi = $request->deskripsi;
        $produk->gambar = $request->gambar;
        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}

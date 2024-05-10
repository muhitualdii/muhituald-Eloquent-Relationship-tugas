<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{

    public function index()
    {
        $produk = Product::all();
        return view('Produk', [
            'produk' => $produk,
        ]);
    }


    // user dengan id = 1
    public function getUser1()
    {
        $products = Product::with('user')->where('user_id', 1)->get();
        return view('pengguna1', ['products' => $products]);
    }



    // user dengan id = 1
    public function getUser2()
    {
        $products = Product::with('user')->where('user_id', 2)->get();
        return view('pengguna2', ['products' => $products]);
    }


    //create
    public function createUser1()
    {

        return view('Form');
    }

    public function createUser2()
    {
        return view('Form');
    }

    //Edit
    public function edit($id)
    {
        $produk = Product::findOrFail($id);

        return view('Form', compact('produk'));
    }


    // //Update

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_produk' => 'required|string',
        'berat' => 'required|numeric',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'kondisi' => 'required|string|in:Baru,Bekas',
        'deskripsi' => 'required|string|max:200',
        'gambar' => 'nullable|file|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $produk = Product::findOrFail($id);

    $produk->nama_produk = $request->nama_produk;
    $produk->berat = $request->berat;
    $produk->harga = $request->harga;
    $produk->stok = $request->stok;
    $produk->kondisi = $request->kondisi;
    $produk->deskripsi = $request->deskripsi;


    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $lokasi_gambar = public_path('/images');
        $gambar->move($lokasi_gambar, $nama_gambar);
        $produk->gambar = $nama_gambar;
    }

    $produk->save();

    return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
}


    //Delete
    public function destroy($id)
    {
        $produk = Product::findOrFail($id);


        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}

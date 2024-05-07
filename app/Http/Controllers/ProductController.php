<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $produk = Product::all();

        return view('produk', [
            'produk' => $produk,
        ]);
    }


    public function user()
    {
        $produk = Product::all();

        return view('user', [
            'produk' => $produk,
        ]);
    }
    //admin
    public function admin()
    {
        $produk = Product::all();

        return view('admin', [
            'produk' => $produk,
        ]);
    }

    //create

    public function create()
    {
        return view('Form');
    }

//Edit
public function edit($id)
{
    $produk = Product::findOrFail($id);

    return view('Form', compact('produk'));

}


//Update
public function update(Request $request, $id)
{
    if (!$request->filled('nama_produk')) {
        return redirect()->back()->with('error', 'Error. Field nama wajib diisi');
    }

    if (!$request->filled('berat')) {
        return redirect()->back()->with('error', 'Error. Field berat wajib diisi');
    }

    if (!$request->filled('harga')) {
        return redirect()->back()->with('error', 'Error. Field harga wajib diisi');
    }

    if (!$request->filled('stok')) {
        return redirect()->back()->with('error', 'Error. Field stok wajib diisi');
    }

    if (!$request->filled('kondisi')) {
        return redirect()->back()->with('error', 'Error. Field kondisi wajib diisi');
    }

    if (!$request->filled('deskripsi')) {
        return redirect()->back()->with('error', 'Error. Field deskripsi wajib diisi');
    }


    $request->validate([
        'nama_produk' => 'required',
        'stok' => 'required',
        'berat' => 'required',
        'harga' => 'required',
        'kondisi' => 'required|in:Baru,Bekas',
        'deskripsi' => 'required|string',
    ]);

    $produk = Product::findOrFail($id);


    $produk->nama_produk = $request->nama_produk;
    $produk->stok = $request->stok;
    $produk->berat = $request->berat;
    $produk->harga = $request->harga;
    $produk->kondisi = $request->kondisi;

    if ($request->filled('gambar')) {
        $produk->gambar = $request->gambar;
    }
    $produk->deskripsi = $request->deskripsi;
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

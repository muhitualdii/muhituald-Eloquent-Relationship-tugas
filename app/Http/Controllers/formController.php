<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class formController extends Controller
{

    public function sendRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kondisi' => 'required|string|in:Baru,Bekas',
            'deskripsi' => ['required', 'string', 'max:200'],
            'gambar' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ], [
            'gambar.required' => 'Gambar produk wajib diunggah.',
            'gambar.file' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
            'deskripsi.max' => 'Deskripsi tidak boleh melebihi 200 karakter.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $produk = new Product();
        $produk->nama_produk = $request->nama_produk;
        $produk->berat = $request->berat;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->kondisi = $request->kondisi;
        $produk->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $lokasi_simpan = 'lokasi_penyimpanan';
            $gambar->move($lokasi_simpan, $nama_file);
            $produk->gambar = $lokasi_simpan . '/' . $nama_file;
        }

        $produk->user_id = $request->user_id;
        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }



}

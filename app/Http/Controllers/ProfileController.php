<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function profile()
    {

        $user = new User();
        $user->nama_akun = 'amandemy';
        $user->email = 'amandemy@gmail.com';
        $user->gender = 'male';
        $user->tanggal_lahir = '1982-10-10';
        $user->alamat = 'jl.garuda';


        $profile = new Profile();
        $profile->nama_toko = 'amanah';
        $profile->email = 'amandemy1@gmail.com';
        $profile->rate = 3;
        $profile->produk_terbaik = 'kucing';
        $profile->deskripsi = 'menjaga kualitas';


        return view('profile', compact('user', 'profile'));
    }
}

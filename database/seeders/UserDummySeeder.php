<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'nama_akun' => 'Muhitualdi',
                'email' => 'muhitualdi@gamil.com',
                'gender' => 'Male',
                'umur' => '22',
                'tanggal_lahir' => '2003-10-21',
                'alamat' => 'Jl. Srikandi, Pekanbaru',
                'nama_toko' => 'Muhitualdi Thrift',
                'rate' => 5,
                'produk_terbaik' => 2,
                'deskripsi' => 'Muhitualdi Thrift adalah sebuah Toko Thrifting Baju, Celana, Topi, DLL'
            ],
            [
                'nama_akun' => 'Aldi 2',
                'email' => 'aldi123@gamil.com',
                'gender' => 'Male',
                'umur' => '19',
                'tanggal_lahir' => '2008-10-21',
                'alamat' => 'Jl. SPBU, Pekanbaru',
                'nama_toko' => 'Aldi Shoes',
                'rate' => 2,
                'produk_terbaik' => 1,
                'deskripsi' => 'Aldi Shoes adalah toko yang menjual sepatu branded yang di import dari USA'
            ]
        ];

        foreach ($user as $users) {
            User::create($users);
        }
    }
}

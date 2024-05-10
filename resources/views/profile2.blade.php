<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="row mt-3">
        <div class="col-md-12 text-center">
            <a href="{{ route('user-2') }}" class="btn btn-success">Kembali ke Halaman Admin</a>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <ul class="border" style="border-width: 2px; list-style-type: none; padding-left: 0;">
                    <li style="border-width: 0;"><strong>Nama Akun:</strong> {{ $user->nama_akun }}</li>
                    <li style="border-width: 0;"><strong>Email:</strong> {{ $user->email }}</li>
                    <li style="border-width: 0;"><strong>Gender:</strong> {{ $user->gender }}</li>
                    <li style="border-width: 0;"><strong>Tanggal Lahir:</strong> {{ $user->tanggal_lahir }}</li>
                    <li style="border-width: 0;"><strong>Alamat:</strong> {{ $user->alamat }}</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="border" style="border-width: 2px; list-style-type: none; padding-left: 0;">
                    <li style="border-width: 0;"><strong>Nama Toko:</strong> {{ $user->nama_toko }}</li>
                    <li style="border-width: 0;"><strong>Rate:</strong> {{ $user->rate }}</li>
                    <li style="border-width: 0;"><strong>Deskripsi:</strong> {{ $user->deskripsi }}</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>







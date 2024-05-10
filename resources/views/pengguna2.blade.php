
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card bg-info rounded shadow border-0" style="margin-top: 20px;">
            <div class="container">
                <div class="card bg-info rounded border-0">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="display-5 font-weight-bold">LIST PRODUCT</h2>
                        </div>
                        <div class="col-md-8 d-flex justify-content-end align-items-center mt-3">
                            <a href="{{ route('profile.show2') }}" class="btn btn-warning me-2"> Lihat Profile</a>
                            <a href="{{ route('produk.create2') }}" class="btn btn-dark me-2">Tambah Produk</a>
                            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali ke Halaman
                                Produk</a>
                        </div>
                    </div>
                </div>
                <table class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Berat (KG)</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ $product->stok }}</td>
                                <td>{{ $product->berat }}</td>
                                <td>{{ $product->harga }}</td>
                                <td>
                                    <div
                                        class="btn @if ($product->kondisi == 'Baru') btn-success @else btn-dark @endif">
                                        {{ $product->kondisi }}</div>
                                </td>
                                <td>
                                    <a href="{{ route('produk.edit', $product->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('produk.destroy', $product->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>


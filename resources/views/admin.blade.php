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
                        <div class="col-md-8 d-flex justify-content-end p-3">
                            <a href="{{ route('produk.create') }}" class="btn btn-dark" style="margin-right: 10px;">Tambah Produk</a>
                            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali ke Halaman Produk</a>
                        </div>

                    </div>
                </div>
                <table class="table">
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
                        @foreach ($produk as $index => $p)
                        <tr @if($index % 2 == 0) class="table-secondary" @endif>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $p->nama_produk }}</td>
                            <td>{{ $p->stok }}</td>
                            <td>{{ $p->berat }}</td>
                            <td>Rp. {{ number_format($p->harga, 0, ',', '.') }}</td>
                            <td>
                                <div class="btn @if($p->kondisi == 'Baru') btn-success @else btn-dark @endif">{{ $p->kondisi }}</div>
                            </td>
                            <td>
                                <a href="{{ route('produk.edit', $p->id) }}" type="button" class="btn btn-info">Update</a>
                                <form action="{{ route('produk.destroy', $p->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
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


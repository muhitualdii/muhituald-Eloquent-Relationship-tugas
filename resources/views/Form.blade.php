<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhitualdi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-lg-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 bg-info rounded py-3">
                <h1 class="text-center fw-bold">Tambah Data Produk</h1>
                <form action="{{ isset($produk) ? route('produk.update', $produk->id) : route('send_Request') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($produk))
                        @method('PUT')
                    @endif
                    <input type="hidden" name="user_id" value="{{ request()->is('produk/create/user1') ? 1 : 2 }}">
                    <div class="mb-3">
                        <label for="gambar" class="form-label fw-semibold">Gambar Produk </label>
                        <input type="file" id="gambar" name="gambar" class="form-control">
                        @error('gambar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" id="nama_produk" name="nama_produk" class="form-control"
                            value="{{ old('nama_produk', isset($produk) ? $produk->nama_produk : '') }}">
                    </div>
                    @error('nama_produk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="berat" class="form-label fw-semibold">Berat (kg)</label>
                        <input type="number" id="berat" name="berat" class="form-control"
                            value="{{ old('berat', isset($produk) ? $produk->berat : '') }}">
                    </div>
                    @error('berat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control"
                            value="{{ old('harga', isset($produk) ? $produk->harga : '') }}">
                    </div>
                    @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" id="stok" name="stok" class="form-control"
                            value="{{ old('stok', isset($produk) ? $produk->stok : '') }}">
                    </div>
                    @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="kondisi" class="form-label fw-semibold">Kondisi Barang</label>
                        <select class="form-select" name="kondisi">
                            <option value="0" selected disabled>Pilih kondisi Barang</option>
                            <option value="Baru" {{ old('kondisi', isset($produk) && $produk->kondisi == 'Baru' ? 'selected' : '') }}>Baru</option>
                            <option value="Bekas" {{ old('kondisi', isset($produk) && $produk->kondisi == 'Bekas' ? 'selected' : '') }}>Bekas</option>
                        </select>
                    </div>
                    @error('kondisi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', isset($produk) ? $produk->deskripsi : '') }}</textarea>
                    </div>
                    @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="d-flex justify-content-center mb-4">
                        <button class="btn btn-dark btn-lg ml-2" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

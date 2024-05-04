
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
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-md-6 offset-md-3 bg-info rounded py-3">
                <h1 class="text-center fw-bold">Tambah Data Produk</h1>
                <form action="{{ isset($produk) ? route('produk.update', $produk->id) : route('send_Request') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($produk))
                    @method('PUT')
                    @endif
                    <div class="mb-3">
                        <label for="gambar" class="form-label fw-semibold">URL Gambar</label>
                        <input type="text" id="gambar" name="gambar" class="form-control"
                            value="{{ isset($produk) ? $produk->gambar : old('gambar') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" id="nama_produk" name="nama_produk" class="form-control"
                            value="{{ isset($produk) ? $produk->nama_produk : old('nama_produk') }}">
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label fw-semibold">Berat (KG)</label>
                        <input type="number" id="berat" name="berat" class="form-control"
                            value="{{ isset($produk) ? $produk->berat : old('berat') }}">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label fw-semibold">Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control"
                            value="{{ isset($produk) ? $produk->harga : old('harga') }}">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label fw-semibold">Stok</label>
                        <input type="number" id="stok" name="stok" class="form-control"
                            value="{{ isset($produk) ? $produk->stok : old('stok') }}">
                    </div>
                    <div class="mb-3">
                        <label for="kondisi" class="form-label fw-semibold">Kondisi Barang</label>
                        <select class="form-select" name="kondisi">
                            <option value="0" selected disabled>Pilih kondisi Barang</option>
                            <option value="Baru" {{ isset($produk) && $produk->kondisi == 'Baru' ? 'selected' : '' }}>
                                Baru</option>
                            <option value="Bekas"
                                {{ isset($produk) && $produk->kondisi == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"
                            rows="3">{{ isset($produk) ? $produk->deskripsi : old('deskripsi') }}</textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-lg btn-dark mt-3" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


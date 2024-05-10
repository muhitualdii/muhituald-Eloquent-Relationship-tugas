<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>caffe Aamah academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container px-1 py-1">
        <div class="card bg-info rounded shadow border-0 p-3">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-start">
                    <a href="{{ route('user-1') }}" class="btn btn-md btn-primary fw-bold ms-3 h-75 m-auto">Halaman
                        Pengguna Admin1</a>
                </div>
                <div class="col-md-4">
                    <h2 class="text-center fw-bold mt-2">PRODUCTS</h2>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a href="{{ route('user-2') }}" class="btn btn-md btn-success fw-bold ms-3 h-75 mt-2 me-3">Halaman
                        Pengguna Admin2</a>
                </div>
            </div>
            <div class="container px-1 py-1">
                <div class="row">
                    @foreach ($produk as $p)
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                            <div class="card rounded shadow border-0">
                                <img src="{{ $p->gambar }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="card-title">{{ $p->nama_produk }}</h5>
                                        <p
                                            class="card-text {{ $p->kondisi === 'Baru' ? 'bg-success' : 'bg-warning' }} rounded px-1">
                                            {{ $p->kondisi }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-center">
                                            <p class="card-text bg-success rounded px-1">{{ number_format($p->stok) }}
                                                Unit</p>
                                        </div>
                                        <div class="text-center">
                                            <p class="card-text bg-info rounded px-1">Rp. {{ number_format($p->harga) }}
                                            </p>
                                        </div>
                                        <div class="text-center">
                                            <p class="card-text bg-secondary rounded px-1">
                                                {{ number_format($p->berat) }} KG</p>
                                        </div>
                                    </div>
                                    <p class="card-text">{{ $p->deskripsi }}</p>
                                    <a href="#" class="btn btn-primary w-100">pesan sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>

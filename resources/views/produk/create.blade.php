<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="text-center mb-4">Tambah Produk</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="produkForm" method="POST" action="{{ route('produk.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" name="nama" id="nama" 
                               class="form-control" value="{{ old('nama') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori Produk</label>
                        <select name="category_id" id="category_id" class="form-select" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($kategori as $kat)
                                <option value="{{ $kat->id }}" {{ old('category_id') == $kat->id ? 'selected' : '' }}>
                                    {{ $kat->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" 
                               class="form-control" value="{{ old('jumlah') }}" required>
                    </div>
                    <div class="d-grid">
                        <button id="submitBtn" type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>

                <!-- Back Button -->
                <div class="text-center mt-4">
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">← Kembali</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

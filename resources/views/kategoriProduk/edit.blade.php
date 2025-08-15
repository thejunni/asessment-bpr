<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Edit Kategori</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="kategoriForm" method="POST" action="{{ route('kategori-produk.update', $kategori->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" 
                               class="form-control" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select name="jenis" id="jenis" class="form-select" required>
                            <option value="Bebas" {{ old('jenis', $kategori->jenis) == 'Bebas' ? 'selected' : '' }}>Bebas</option>
                            <option value="Acak" {{ old('jenis', $kategori->jenis) == 'Acak' ? 'selected' : '' }}>Acak</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button id="submitBtn" type="submit" class="btn btn-primary">
                            <span id="btnText">Perbarui</span>
                            <span id="btnSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>

                <!-- Back Button -->
                <div class="text-center mt-4">
                    <a href="{{ route('kategori-produk.index') }}" class="btn btn-secondary">← Back</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Spinner on Submit --}}
    <script>
        const form = document.getElementById('kategoriForm');
        const submitBtn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');
        const btnSpinner = document.getElementById('btnSpinner');

        form.addEventListener('submit', function () {
            submitBtn.disabled = true;
            btnText.textContent = 'Memperbarui...';
            btnSpinner.classList.remove('d-none');
        });
    </script>
</body>
</html>

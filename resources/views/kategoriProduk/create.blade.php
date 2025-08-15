<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Kategori</title>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Tambah Kategori</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="GET" action="{{ route('kategori-produk.store') }}">
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input></input>
                    </div>
					<div class="mb-3">
                        <label class="form-label">Jenis</label>
						<select name="jenis" id="jenis">
						  <option value="bebas">bebas</option>
						  <option value="acak">acak</option>
						</select>
                    </div>
					<div class="d-grid">
                        <button id="submitBtn" type="submit" class="btn btn-primary">
                            <span id="btnText">Submit</span>
                            <span id="btnSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>
                <div class="text-center mt-4">
                    <a href="{{ url('/kategori-produk') }}" class="btn btn-secondary">
                        ← Back
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Spinner on Submit --}}
    <script>
        const form = document.getElementById('ratingForm');
        const submitBtn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');
        const btnSpinner = document.getElementById('btnSpinner');

        if (form) {
            form.addEventListener('submit', function () {
                submitBtn.disabled = true;
                btnText.textContent = 'Submitting...';
                btnSpinner.classList.remove('d-none');
            });
        }
    </script>
</body>
</html>
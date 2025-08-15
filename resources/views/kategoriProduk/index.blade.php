<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">📚 Kategori Produk</h2>
        </div>
		<div>
            <a href="{{ route('kategori-produk.create') }}" class="btn btn-success me-2">Tambah Kategori</a>
        </div>
        <!-- Book Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Kategori ID</th>
                        <th>Nama Kategori</th>
                        <th>Jenis</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kategori as $index => $kategori)
                        <tr>
							<td>{{ $kategori->id }}</td>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td>{{ $kategori->jenis }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-muted">No produks found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>    
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">📚 Produk</h2>
        </div>
        <!-- Book Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produks as $index => $produk)
                        <tr>
                            <td>{{ $produk->nama }}</td>
                            <td>{{ $produk->jumlah }}</td>
                            <td>{{ $produk->category_id }}</td>
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